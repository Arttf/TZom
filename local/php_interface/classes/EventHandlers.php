<?php
if(CModule::IncludeModule("search"))
{
    AddEventHandler("search", "BeforeIndex", Array("UpgradePosFromID", "BeforeIndexHandler"));
}
class UpgradePosFromID
{
    // создаем обработчик события "BeforeIndex"
    public static function BeforeIndexHandler($arFields)
    {
//        print_r($arFields);
        parse_str(substr($arFields['URL'], 1), $array);
//        print_r($arFields['URL']);
//        echo "<br>";
//        print_r($array['ID']);
//        echo "<br><br>";
        $arFields["BODY"] = "";
        $arFields["TITLE"] = $array['ID'];
        return $arFields;
    }
}

?>