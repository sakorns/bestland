<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity
 *
 * @property string $id
 * @property string $name
 * @property string $decription
 * @property string $isactive
 * @property int $seq
 * @property \Cake\I18n\FrozenTime $created
 * @property string $createdby
 *
 * @property \App\Model\Entity\Article[] $articles
 */
class Category extends Entity
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
        'decription' => true,
        'isactive' => true,
        'seq' => true,
        'created' => true,
        'createdby' => true,
        'articles' => true
    ];
}
