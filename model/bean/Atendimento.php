<?php
    class Atendimento {
        // Atributos
        private $id;
        private $dataAtendimento;
        private $Animal;

        // Métodos
        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getDataAtendimento() {
            return $this->dataAtendimento;
        }

        public function setDataAtendimento($dataAtendimento) {
            $this->dataAtendimento = $dataAtendimento;
        }
      
        public function getAnimal() {
            return $this->animal;
        }
      
        public function setAnimal($Animal) {
            $this->animal = $animal;
        }

        // Método para retornar uma string do objeto
        public function __toString() {
            return $this->dataAtendimento;
        }
    }
