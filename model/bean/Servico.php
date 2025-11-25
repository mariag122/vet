<?php
    class Servico {
        // Atributos
        private $id; // Associação com a classe Compra
        private $nome; // Associação com a classe Produto
        private $descricao;
        private $valor;

        // Métodos
        public function getId() {
            return $this->id
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function setDescricao($Descricao) {
            $this->descricao = $descricao;
        }

        public function getValor() {
            return $this->valor;
        }

        public function setValor($valor) {
            $this->valor = $valor;
        }
    }
