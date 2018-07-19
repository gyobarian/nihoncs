<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Member Entity
 *
 * @property int $id
 * @property string $user_id
 * @property string $family_name
 * @property string $first_name
 * @property string $family_name_kana
 * @property string $first_name_kana
 * @property string $mail
 * @property string $password
 * @property string $tel
 * @property string $zip
 * @property string $address_prefecture
 * @property string $address_city
 * @property string $address_street
 * @property string $address_building
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $del_flag
 *
 * @property \App\Model\Entity\User $user
 */
class Member extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'family_name' => true,
        'first_name' => true,
        'family_name_kana' => true,
        'first_name_kana' => true,
        'mail' => true,
        'password' => true,
        'tel' => true,
        'zip' => true,
        'address_prefecture' => true,
        'address_city' => true,
        'address_street' => true,
        'address_building' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'del_flag' => true,
        'user' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
