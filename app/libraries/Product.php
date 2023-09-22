<?php
namespace app\libraries;

class Product{
    private string $name;
    private string $cpf;
    private float $rendimento;
    private string $aliquota;
    private string $valorImposto;

    public function __construct(String $name, string $cpf, float $rendimento, string $aliquota, string $valorImposto)
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->rendimento = $rendimento;
        $this->aliquota = $aliquota;
        $this->valorImposto = $valorImposto;
    }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setRendimento($rendimento){
            $this->rendimento = $rendimento;
        }

        public function getRendimento(){
            return $this->rendimento;
        }

        public function setAliquota($aliquota){
            $this->aliquota = $aliquota;
        }

        public function getAliquota(){
            return $this->aliquota;
        }

        public function setValorImposto($valorImposto){
            $this->valorImposto = $valorImposto;
        }

        public function getValorImposto(){
            return $this->valorImposto;
        }
    } 
?>