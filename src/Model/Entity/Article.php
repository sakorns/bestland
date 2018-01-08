<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property string $id
 * @property string $name
 * @property string $text
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 * @property string $createdby
 * @property string $isactive
 * @property string $category_id
 * @property int $seq
 *
 * @property \App\Model\Entity\Category $category
 */
class Article extends Entity
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
        'text' => true,
        'created' => true,
        'updated' => true,
        'createdby' => true,
        'isactive' => true,
        'category_id' => true,
        'seq' => true,
        'category' => true
    ];
}