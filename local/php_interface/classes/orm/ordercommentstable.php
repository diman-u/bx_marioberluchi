<?php
namespace Bitrix\Order;

use Bitrix\Main\Localization\Loc,
    Bitrix\Main\ORM\Data\DataManager,
    Bitrix\Main\ORM\Fields\DatetimeField,
    Bitrix\Main\ORM\Fields\IntegerField,
    Bitrix\Main\ORM\Fields\TextField;
use Bitrix\Main\UserTable;
use Bitrix\Main\ORM\Fields\Relations\Reference;
use Bitrix\Main\ORM\Query\Join;

Loc::loadMessages(__FILE__);

/**
 * Class CommentsTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> USER_ID int optional
 * <li> ORDER_ID int optional
 * <li> CREATED datetime optional
 * <li> COMMENT text optional
 * </ul>
 *
 * @package Bitrix\Order
 **/


class OrderCommentsTable extends DataManager
{
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
        return 'app_order_comments';
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
                'ID',
                [
                    'primary' => true,
                    'autocomplete' => true,
                    'title' => Loc::getMessage('COMMENTS_ENTITY_ID_FIELD')
                ]
            ),
            new IntegerField(
                'USER_ID',
                [
                    'title' => Loc::getMessage('COMMENTS_ENTITY_USER_ID_FIELD')
                ]
            ),
            new IntegerField(
                'ORDER_ID',
                [
                    'title' => Loc::getMessage('COMMENTS_ENTITY_ORDER_ID_FIELD')
                ]
            ),
            new DatetimeField(
                'CREATED',
                [
                    'title' => Loc::getMessage('COMMENTS_ENTITY_CREATED_FIELD')
                ]
            ),
            new TextField(
                'COMMENT',
                [
                    'title' => Loc::getMessage('COMMENTS_ENTITY_COMMENT_FIELD')
                ]
            ),
        ];
    }
}