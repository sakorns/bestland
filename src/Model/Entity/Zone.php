<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Zone Entity
 *
 * @property string $id
 * @property string $name
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Asset[] $assets
 * @property \App\Model\Entity\CustomerAsset[] $customer_assets
 */
class Zone extends Entity
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
        'name' => true,
        'description' => true,
        'created' => true,
        'assets' => true,
        'customer_assets' => true
    ];
}
