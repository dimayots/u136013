<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>

</div>
<div id="footer">
    <p>
        Copyright &copy; <? echo date("Y"); ?>.
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "COMPONENT_TEMPLATE" => ".default",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => SITE_TEMPLATE_PATH."/include_areas/".LANGUAGE_ID."/design.php"
            )
        );?>.
    </p>
</div>
</div>
</body>
</html>
