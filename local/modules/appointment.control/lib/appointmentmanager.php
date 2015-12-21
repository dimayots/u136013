<?php
namespace APPOINTMENT\APPOINTMENTCONTROL;

use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;

Loc::loadMessages(__FILE__);

class AppointmentManager
{
    public static function AddAppointment($employeeId, $date, $visitor, $price)
    {
        if(!$employeeId || !$date || !$visitor || !$price)
        {
            return false;
        }

        return AppointmentTable::add(
            array
            (
                'UF_EMPID' => $employeeId,
                'UF_DATE' => \Bitrix\Main\Type\DateTime::createFromUserTime($date),
                'UF_VISITOR' => $visitor,
                'UF_PRICE' => $price,
            ))->isSuccess();
    }
}
?>