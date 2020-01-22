<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_loader extends CI_loader {

    public function template($nome, $dados = array()){

        $this->view("cabecalho.php");
        $this->view($nome, $dados);
        $this->view("rodape.php");

    }

}