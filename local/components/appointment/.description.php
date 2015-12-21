<?php
if (!defined("B_PROLOG_INCLUDED") || !B_PROLOG_INCLUDED) die();
$arComponentDescription = array (
        "NAME" => GetMessage("NAME_COMPONENT"),
        "DESCRIPTION" => GetMessage("DESCRIPTION_COMPONENT"),
        "SORT" => 20,
        "CACHE_PATH" => "Y",
        "PATH" => array(
            "ID" => "intranet",
            "NAME" => GetMessage("NAME_INTRANET"),
            "CHILD" => array(
                "ID" => "Appointment",
                "NAME" => GetMessage("NAME_APP"),
                "SORT" => 10,
                "CHILD" =>
                    array
                    (
                        "ID" => "appointment",
                    )
            ),
        ),
    );
?>