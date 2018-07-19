<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Member Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Member get($primaryKey, $options = [])
 * @method \App\Model\Entity\Member newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Member[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Member|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Member patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Member[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Member findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MemberTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */

    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('member_t');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);

        $this->register = (object) [
            'gender' => [
                1 => '男性',
                2 => '女性',
            ],
        ];
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {

        $validator->provider('Custom', 'App\Model\Validation\CustomValidation');

        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('family_name')
            ->maxLength('family_name', 255)
            ->requirePresence('family_name', 'create')
            ->notEmpty('family_name', '必須項目です。')
            ->add('family_name', [
                'zenkaku_only' => [
                    'rule' => ['zenkaku_only'],
                    'provider' => 'Custom',
                    'message' => '全角で入力して下さい。',
                ],
            ]);

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name', '必須項目です。')
            ->add('first_name', [
                'zenkaku_only' => [
                    'rule' => ['zenkaku_only'],
                    'provider' => 'Custom',
                    'message' => '全角で入力して下さい。',
                ],
            ]);

        $validator
            ->scalar('family_name_kana')
            ->maxLength('family_name_kana', 255)
            ->requirePresence('family_name_kana', 'create')
            ->notEmpty('family_name_kana', '必須項目です。')
            ->add('family_name_kana', [
                'zenkaku_kana_only' => [
                    'rule' => ['zenkaku_kana_only'],
                    'provider' => 'Custom',
                    'message' => '全角カタカナで入力して下さい。',
                ],
            ]);

        $validator
            ->scalar('first_name_kana')
            ->maxLength('first_name_kana', 255)
            ->requirePresence('first_name_kana', 'create')
            ->notEmpty('first_name_kana', '必須項目です。')
            ->add('first_name_kana', [
                'zenkaku_kana_only' => [
                    'rule' => ['zenkaku_kana_only'],
                    'provider' => 'Custom',
                    'message' => '全角カタカナで入力して下さい。',
                ],
            ]);

        $validator
            ->requirePresence('gender', 'create')
            ->notEmpty('gender', '必須項目です。');

        $validator
            // ->scalar('birthdate')
            // ->maxLength('birthdate', 255)
            // ->requirePresence('birthdate', 'create')
            ->notEmpty('birthdate', '必須項目です。')
            ->add('birthdate',[
                'dateYMD' => [
                    'rule' => ['date','ymd'],
                    'message' => '必須項目です。',
                ]
            ]);

        $validator
            ->scalar('mail')
            ->maxLength('mail', 255)
            ->requirePresence('mail', 'create')
            ->notEmpty('mail', '必須項目です。')
            ->add('mail',[
                'email' => [
                    'rule' => ['email'],
                    'last' => true,
                    'message' => '正しい形式で入力して下さい。',
                ],
                'comWith' => [
                    'rule' => ['compareWith','mail_confirm'],
                    'message' => '確認用のメールアドレスと一致しません。',
                ],
            ]);

        $validator
            ->scalar('tel')
            ->maxLength('tel', 255)
            ->requirePresence('tel', 'create')
            ->notEmpty('tel', '必須項目です。')
            ->add('tel',[
                'hankaku_number_only' => [
                    'rule' => ['hankaku_number_only'],
                    'provider' => 'Custom',
                    'message' => '半角数字のみ入力して下さい。',
                ],
            ]);

        $validator
            ->scalar('zip')
            ->maxLength('zip', 255)
            ->requirePresence('zip', 'create')
            ->notEmpty('zip', '必須項目です。')
            ->add('zip',[
                'hankaku_number_only' => [
                    'rule' => ['hankaku_number_only'],
                    'provider' => 'Custom',
                    'message' => '半角数字のみ入力して下さい。',
                ],
            ]);

        $validator
            ->scalar('address_prefecture')
            ->maxLength('address_prefecture', 255)
            ->requirePresence('address_prefecture', 'create')
            ->notEmpty('address_prefecture', '必須項目です。')
            ->add('address_prefecture', [
                'zenkaku_only' => [
                    'rule' => ['zenkaku_only'],
                    'provider' => 'Custom',
                    'message' => '全角で入力して下さい。',
                ],
            ]);

        $validator
            ->scalar('address_city')
            ->maxLength('address_city', 255)
            ->requirePresence('address_city', 'create')
            ->notEmpty('address_city', '必須項目です。')
            ->add('address_city', [
                'zenkaku_only' => [
                    'rule' => ['zenkaku_only'],
                    'provider' => 'Custom',
                    'message' => '全角で入力して下さい。',
                ],
            ]);

        $validator
            ->scalar('address_town')
            ->maxLength('address_town', 255)
            ->requirePresence('address_town', 'create')
            ->notEmpty('address_town', '必須項目です。')
            ->add('address_town', [
                'zenkaku_only' => [
                    'rule' => ['zenkaku_only'],
                    'provider' => 'Custom',
                    'message' => '全角で入力して下さい。',
                ],
            ]);

        $validator
            ->scalar('address_building')
            ->maxLength('address_building', 255)
            ->requirePresence('address_building', 'create')
            ->allowEmpty('address_building')
            ->add('address_building', [
                'zenkaku_only' => [
                    'rule' => ['zenkaku_only'],
                    'provider' => 'Custom',
                    'message' => '全角で入力して下さい。',
                ],
            ]);

        $validator
            ->scalar('address_prefecture_kana')
            ->maxLength('address_prefecture_kana', 255)
            ->requirePresence('address_prefecture_kana', 'create')
            ->notEmpty('address_prefecture_kana', '必須項目です。')
            ->add('address_prefecture_kana', [
                'zenkaku_add_kana_only' => [
                    'rule' => ['zenkaku_add_kana_only'],
                    'provider' => 'Custom',
                    'message' => '全角カタカナで入力して下さい。',
                ],
            ]);

        $validator
            ->scalar('address_city_kana')
            ->maxLength('address_city_kana', 255)
            ->requirePresence('address_city_kana', 'create')
            ->notEmpty('address_city_kana', '必須項目です。')
            ->add('address_city_kana', [
                'zenkaku_add_kana_only' => [
                    'rule' => ['zenkaku_add_kana_only'],
                    'provider' => 'Custom',
                    'message' => '全角カタカナで入力して下さい。',
                ],
            ]);

        $validator
            ->scalar('address_town_kana')
            ->maxLength('address_town_kana', 255)
            ->requirePresence('address_town_kana', 'create')
            ->notEmpty('address_town_kana', '必須項目です。')
            ->add('address_town_kana', [
                'zenkaku_add_kana_only' => [
                    'rule' => ['zenkaku_add_kana_only'],
                    'provider' => 'Custom',
                    'message' => '全角カタカナで入力して下さい。',
                ],
            ]);

        $validator
            ->scalar('address_building_kana')
            ->maxLength('address_building_kana', 255)
            ->requirePresence('address_building_kana', 'create')
            ->allowEmpty('address_building_kana')
            ->add('address_building_kana', [
                'zenkaku_add_kana_only' => [
                    'rule' => ['zenkaku_add_kana_only'],
                    'provider' => 'Custom',
                    'message' => '全角カタカナで入力して下さい。',
                ],
            ]);

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->allowEmpty('del_flag');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
