<?php

class Secao_BuscaCep_AjaxController extends Mage_Core_Controller_Front_Action {

    public function enderecoAction() {
        $ch = curl_init();

        // informar URL e outras funções ao CURL
        curl_setopt($ch, CURLOPT_URL, "http://republicavirtual.com.br/web_cep.php?cep=".urlencode($this->getRequest()->getParam('cep', false))."&formato=json");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        // Acessar a URL e retornar a saída
        $output = curl_exec($ch);

        // liberar
        curl_close($ch);

        // Imprimir a saída
        echo $output;

        //echo @file_get_contents('http://republicavirtual.com.br/web_cep.php?cep='.urlencode($this->getRequest()->getParam('cep', false)).'&formato=json');       
    }

}

?>