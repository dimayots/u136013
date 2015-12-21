<?php
if (!defined("B_PROLOG_INCLUDED") || !B_PROLOG_INCLUDED) die();

global $USER;

\Bitrix\Main\Loader::includeModule('appointment.control');

use   APPOINTMENT\APPOINTMENTCONTROL;

if(!$USER->IsAdmin())
{
    exit;
}

if ($_REQUEST['saveAPPOINTMENT'])
{
    if ( APPOINTMENTCONTROL\AppointmentManager::AddAppointment($_REQUEST["employeeId"], $_REQUEST["date"],
            $_REQUEST["visitor"], $_REQUEST["price"]))
    {
        $arResult['OK'] = 'Изменения успешно сохранены';
    }
    else
    {
        $arResult['ERROR'] = 'Ошибка при сохранении';
    }
}

$this->IncludeComponentTemplate();
?>