<?php
namespace Test\D7;

use \Bitrix\Main\Entity,

/**
 * Class DisciplinesTable
 *
 * Fields:
 * <ul>
 * <li> id int mandatory
 * <li> name string(255) mandatory
 * </ul>
 *
 * @package Bitrix\Disciplines
 **/

class DisciplinesTable extends Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
        return 'i_disciplines';
    }

    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
        return [
            new Entity\IntegerField(
                'ID',
                [
                    'primary' => true,
                    'autocomplete' => true,
                ]
            ),
            new Entity\StringField(
                'NAME',
                [
                    'required' => true,
                ]
            ),
        ];
    }
}