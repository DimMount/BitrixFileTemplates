<?php
#parse("BITRIX Globals.php")
#set( $D = '$' )
use Bitrix\Main;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * ${DESCRIPTION}
 *
 * @package Components\\${COMPONENT_NAME}
 */
class ${COMPONENT_NAME}Component extends \CBitrixComponent
{
    /**
     * Выполнение кода компонента и подключение шаблона
     */
    public function executeComponent()
    {
        ${D}this->includeComponentTemplate();
    }
}