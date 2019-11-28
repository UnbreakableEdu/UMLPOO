<?php
    class App {
        private $nome;
        private $id;
        static $downloads;
        public function __construct($nome, $id) {
            $this -> nome = $nome;
            $this -> id = $id;
            App::$downloads++;
        }
        public function getdownloads() {
            return App::$downloads;
        }
        public function __toString() {
            return 'Usuário: ' . $this -> nome . '<br/>ID: ' . $this -> id;
        }
    }
