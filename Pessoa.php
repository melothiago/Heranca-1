<?php
class Pessoa {
    //Atributos
    private $nome;
    private $idade;
    private $sexo;
    //Metodos especiais
    public function getNome() {
        return $this->name;
    }
    public function setNome($name) {
        $this->name = $name;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    //Metodos
    public function fazerAniv() {
        $this->setIdade($this->getIdade() + 1);
    }

    
}
