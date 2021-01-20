<?php
namespace Mxdzqr\Disciplines;

use Bitrix\Main\ORM\Data\DataManager,
    Bitrix\Main\ORM\Fields\IntegerField,
    Bitrix\Main\ORM\Fields\StringField,
    Bitrix\Main\ORM\Fields\Validators\LengthValidator;

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

class DisciplinesTable extends DataManager
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
            new IntegerField(
                'id',
                [
                    'primary' => true,
                    'autocomplete' => true,
                ]
            ),
            new StringField(
                'name',
                [
                    'required' => true,
                    'validation' => [__CLASS__, 'validateName'],
                ]
            ),
        ];
    }

    /**
     * Returns validators for name field.
     *
     * @return array
     */
    public static function validateName()
    {
        return [
            new LengthValidator(null, 255),
        ];
    }
}