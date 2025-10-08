<?php
    class Fornecedor {
        //Atributos
        private $id;
        private $cnpj;
        private $razaoSocial;
        private $email;
        private $telefone;

        //Métodos
        public function getId(){
            return $this ->id;
        }
        public function setId($id) {
            $this -> id = $id;
        }
          public function getCnpj(){
            return $this ->cnpj;
        }
        public function setCnpj($cnpj) {
            $this -> cnpj =$cnpj;
        }
          public function getRazaoSocial(){
            return $this ->razaoSocial;
        }
        public function setRazaoSocial($razaoSocial) {
            $this -> razaoSocial = $razaoSocial;
        }
         public function getEmail(){
            return $this ->email;
        }
        public function setEmail($email) {
            $this -> email = $email;
        }
        public function getTelefone(){
            return $this -> telefone;
        }
        public function setTelefone($telefone){
            $this ->telefone = $telefone;
        }
        //
        public function __toString(){
            return $this->razaoSocial;
        }
    }