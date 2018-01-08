<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AssetOption Entity
 *
 * @property string $id
 * @property string $asset_id
 * @property string $option_id
 *
 * @property \App\Model\Entity\Asset $asset
 * @property \App\Model\Entity\Option $option
 */
class AssetOption extends Entity
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
        'asset_id' => true,
        'option_id' => true,
        'asset' => true,
        'option' => true
    ];
}