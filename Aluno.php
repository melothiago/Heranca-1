<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    //Atributos
    private $matr;
    private $curso;
    //Metodos especiais
    public function getMatr() {
        return $this->matr;
    }
    public function setMatr($matr) {
        $this->matr = $matr;
    }
    public function getCurso() {
        return $this->curso;
    }
    public function setCurso($curso) {
        $this->curso = $curso;
    }
    //Metodos
    public function cancelarMatr() {
        echo "</br>Matricula sera cancelada!";
    }

}
