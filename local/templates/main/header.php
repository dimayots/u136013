<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
<?IncludeTemplateLangFile(__FILE__);?>

<!doctype html>
<html lang=<?=LANGUAGE_ID?>>

<head>
    <title><?$APPLICATION ->ShowTitle();?></title>
    <?$APPLICATION ->ShowHead();?>
    <?$APPLICATION ->SetAdditionalCSS(SITE_TEMPLATE_PATH."/styles.css", true);?>
</head>

<body>
<?$APPLICATION ->ShowPanel();?>
<!-- begin #container -->
<div id="container">
    <!-- begin #header -->
    <div id="header">
        <div class="headerTop">
            <div class="logo">
                <a href="">
                    <?$APPLICATION ->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                        )
                    );?></a>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/".LANGUAGE_ID."/registry.php"
                    )
                );?>
                <span>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/".LANGUAGE_ID."/policlinic.php"
                        )
                    );?>
                </span>
            </div>
            <div class="search">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/".LANGUAGE_ID."/search.php"
                    )
                );?>:<br>
                <div class="si"><input name="" type="text" /></div><div><a href=""><img src="<?=SITE_TEMPLATE_PATH;?>/images/searchButton.jpg" alt="" width="66" height="26" /></a></div>
            </div>
        </div>
        <div class="mainMenu">
            <ul>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top_menu",
                    array(
                        "COMPONENT_TEMPLATE" => "top_menu_".LANGUAGE_ID,
                        "ROOT_MENU_TYPE" => "top_menu_".LANGUAGE_ID,
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "left",
                        "USE_EXT" => "Y",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N"
                    ),
                    false
                ); ?>
            </ul>
        </div>
    </div>
    <div id="content">