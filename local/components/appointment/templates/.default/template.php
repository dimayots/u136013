<?php if (!defined("B_PROLOG_INCLUDED") || !B_PROLOG_INCLUDED) die(); ?>

<?if($arResult['OK']):?>
    <?ShowMessage(array('TYPE' => 'OK','MESSAGE' => $arResult['OK']));?>
<?endif;?>

<?if($arResult['ERROR']):?>
    <?ShowMessage(array('TYPE' => 'ERROR','MESSAGE' => $arResult['ERROR']));?>
<?endif;?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">

        Id сотрудника:<br><input type="text" name="employeeId" value="<?=$_REQUEST["employeeId"];?>"    ></br>
        Дата:<br><input type="date" name="date"  value="<?=$_REQUEST["date"];?>"       ></br>
        Id посетителя:<br><input type="text" name="visitor"   value="<?=$_REQUEST["visitor"];?>" ></br>
        Цена:<br><input type="text" name="price"   value="<?=$_REQUEST["price"];?>" ></br>


        <br><input type="submit" name="saveAPPOINTMENT" value="Сохранить">
        <input type="reset" value="Очистить"></br>

</form>

