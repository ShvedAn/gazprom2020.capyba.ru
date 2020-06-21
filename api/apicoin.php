<?php

class apicoin extends apiBaseClass {

    // Получение баланса тестового пользователя
    //http://gazprom2020.capyba.ru/api/?apicoin.get={}
    function get() {
        $retJSON = $this->createDefaultJson();

        if (CModule::IncludeModule('highloadblock')) {
            $arHLBlock = Bitrix\Highloadblock\HighloadBlockTable::getById(3)->fetch();
            $obEntity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($arHLBlock);

            $entity_data_class = $obEntity->getDataClass();

            $rsData = $entity_data_class::getList(array(
                "select" => array("*"),
                "order" => array("ID" => "ASC"),
                "filter" => array("UF_USER"=>"1")  // Задаем параметры фильтра выборки
            ));

            while($arData = $rsData->Fetch()){
                $retJSON = json_encode ($arData["UF_COINS"]);
            }
        }


        //{"response":"{\"ID\":\"1\",\"UF_USER\":\"1\",\"UF_COINS\":\"20000\"}"}
        return $retJSON;
    }

    // Пополнение баланса
    //http://gazprom2020.capyba.ru/api/?apicoin.add={%22coin%22:%2210%22}
    function add($apiMethodParams) {
        $retJSON = $this->createDefaultJson();
        if (CModule::IncludeModule('highloadblock')) {

            $arHLBlock = Bitrix\Highloadblock\HighloadBlockTable::getById(3)->fetch();
            $obEntity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($arHLBlock);

            $entity_data_class = $obEntity->getDataClass();

            $rsData = $entity_data_class::getList(array(
                "select" => array("*"),
                "order" => array("ID" => "ASC"),
                "filter" => array("UF_USER"=>"1")  // Задаем параметры фильтра выборки
            ));

            while($arData = $rsData->Fetch()){
                $balanse = $arData["UF_COINS"];
            }

            $data = array(
                "UF_COINS"=>$balanse+$apiMethodParams->coin
            );
            $entity_data_class::update("1", $data);
        }



        return true;
    }
    // Списание с баланса
    //http://gazprom2020.capyba.ru/api/?apicoin.pay={%22coin%22:%2210%22}
    function pay($apiMethodParams) {
        $retJSON = $this->createDefaultJson();

        if (CModule::IncludeModule('highloadblock')) {

            $arHLBlock = Bitrix\Highloadblock\HighloadBlockTable::getById(3)->fetch();
            $obEntity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($arHLBlock);

            $entity_data_class = $obEntity->getDataClass();

            $rsData = $entity_data_class::getList(array(
                "select" => array("*"),
                "order" => array("ID" => "ASC"),
                "filter" => array("UF_USER"=>"1")  // Задаем параметры фильтра выборки
            ));

            while($arData = $rsData->Fetch()){
                $balanse = $arData["UF_COINS"];
            }

            $data = array(
                "UF_COINS"=>$balanse-$apiMethodParams->coin
            );
            $entity_data_class::update("1", $data);
        }



        return true;
    }
}