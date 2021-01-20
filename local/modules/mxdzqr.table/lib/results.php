<?php
namespace Mxdzqr\Results;

use Bitrix\Main\ORM\Data\DataManager,
    Bitrix\Main\ORM\Fields\IntegerField;

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

class ResultsTable extends DataManager
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
            new IntegerField(
                'id',
                [
                    'primary' => true,
                    'autocomplete' => true,
                ]
            ),
            new IntegerField(
                'user_id',
                [
                    'required' => true,
                ]
            ),
            new IntegerField(
                'discipline_id',
                [
                    'required' => true,
                ]
            ),
            new IntegerField(
                'score',
                [
                    'required' => true,
                ]
            ),
        ];
    }
}