<?php
namespace App\Model\Validation;

use Cake\Validation\Validation;

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
class CustomValidation extends Validation {
  /**
   * 
   * @param string $value
   * @return bool
   */
    public function zenkaku_only($wordvalue) {

        return (bool) preg_match('/^[ぁ-んァ-ヶーａ-ｚＡ-Ｚ一-龠０-９ー－‐－　]+$/u', $wordvalue);
    }

    public function zenkaku_kana_only($wordvalue) {

        return (bool) preg_match('/^[ァ-ヶー]+$/u', $wordvalue);
    }

    public function zenkaku_add_kana_only($wordvalue) {

        return (bool) preg_match('/^[ァ-ヶー０-９ー－‐－　]+$/u', $wordvalue);
    }

    public function hankaku_number_only($wordvalue) {

        return (bool) preg_match('/^[0-9]+$/', $wordvalue);
    }

}