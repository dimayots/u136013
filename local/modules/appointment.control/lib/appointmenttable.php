<?php
namespace APPOINTMENT\APPOINTMENTCONTROL;

use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;

Loc::loadMessages(__FILE__);

class AppointmentTable extends Entity\DataManager
{
    public static function getFilePath()
    {
        return __FILE__;
    }

    /*Название таблицы HL в БД*/
    public static function getTableName()
    {
        return 't_appointment';
    }

    /*Описание полей сущности (соответсвуют полям )*/
    public static function getMap()
    {
        return array(
            'UF_ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true,
                'title' => Loc::getMessage('APP_ID')
            ),
            'UF_EMP' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => Loc::getMessage('APP_EMP'),
            ),
            'UF_DATE' => array(
                'data_type' => 'datetime',
                'required' => true,
                'title' => Loc::getMessage('APP_DATE')
            ),
            'UF_VISITOR' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => Loc::getMessage('APP_VISITOR'),
            ),
            'UF_PRICE' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => Loc::getMessage('APP_PRICE'),
            ),
            new Entity\ReferenceField(
                'UF_EMP',
                'Birtrix\Main\FileTable',
                array('=this.UF_EMPID' => 'ref.ID')
            ),
            new Entity\ReferenceField(
                'UF_VISITOR',
                'Birtrix\Main\FileTable',
                array('=this.UF_VISITOR' => 'ref.ID')
            ),
        );
    }

    public static function validateValue()
    {
        return array(
            new Entity\Validator\Range(0, null, false, array("MIN" => "Количество должно быть больше нуля")),
        );
    }
}
?>