<?php

class apitest extends apiBaseClass {

    //http://gazprom2020.capyba.ru/api/?apitest.helloAPI={}
    function helloAPI() {
        $retJSON = $this->createDefaultJson();
        $retJSON->withoutParams = 'It\'s method called without parameters';
        return $retJSON;
    }

    //http://gazprom2020.capyba.ru/api/?apitest.helloAPIWithParams={%22TestParamOne%22:%22Text%20of%20first%20parameter%22}
    function helloAPIWithParams($apiMethodParams) {
        $retJSON = $this->createDefaultJson();
        if (isset($apiMethodParams->TestParamOne)){
            //Все ок параметры верные, их и вернем
            $retJSON->retParameter=$apiMethodParams->TestParamOne;
        }else{
            $retJSON->errorno=  APIConstants::$ERROR_PARAMS;
        }
        return $retJSON;
    }
}