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
                    );?>
                </a>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/lang/".LANGUAGE_ID."/registry.php"
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
                            "PATH" => SITE_TEMPLATE_PATH."/lang/".LANGUAGE_ID."/policlinic.php"
                        )
                    );?>
                </span>
            </div>
            <div class="search">
                <?=GetMessage("search");?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/lang/".LANGUAGE_ID."/search.php"
                    )
                );?>:<br>
                <div class="si"><input name="" type="text" /></div><div><a href=""><img src="<?=SITE_TEMPLATE_PATH;?>/images/searchButton.jpg" alt="" width="66" height="26" /></a></div>
            </div>
        </div>
        <div class="mainMenu">
            <ul>
                <li id="active"><a href="">Ams</a></li>
                <li><a href="">Technology</a></li>
                <li><a href="">Locations</a></li>
                <li><a href="">Treatments</a></li>
                <li><a href="">About us</a></li>
            </ul>
        </div>
    </div>
    <div id="content">