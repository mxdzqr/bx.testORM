<?php
namespace Test\D7;

use \Bitrix\Main\Entity,

/**
 * Class ResultsTable
 *
 * Fields:
 * <ul>
 * <li> id int mandatory
 * <li> user_id int mandatory
 * <li> discipline_id int mandatory
 * <li> score int mandatory
 * </ul>
 *
 * @package Bitrix\Results
 **/

class ResultsTable extends Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
        return 'i_results';
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
                'id',
                [
                    'primary' => true,
                    'autocomplete' => true,
                ]
            ),
            new Entity\IntegerField(
                'user_id',
                [
                    'required' => true,
                ]
            ),
            new Entity\IntegerField(
                'discipline_id',
                [
                    'required' => true,
                ]
            ),
            new Entity\IntegerField(
                'score',
                [
                    'required' => true,
                ]
            ),
        ];
    }
}