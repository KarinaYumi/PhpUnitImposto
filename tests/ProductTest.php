<?php
    namespace tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Product;

    class ProductTest extends TestCase
    {
        
        public function testProductName()
        {
            $p1 = new Product("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");

            $this->assertEquals("Karina", $p1->getName());
        }

        public function testProductCpf(){
            $p2 = new Product("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            
            $this->assertEquals("4391644890", $p2->getCpf());
        }

        public function testProductRendimento(){
            $p3 = new Product("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            
            $this->assertEquals(50000, $p3->getRendimento());
        }

        public function testProductAliquota(){
            $p4 = new Product("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            
            $this->assertEquals("22.5%", $p4->getAliquota());
        }

        public function testProductValorImposto(){
            $p5 = new Product("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            
            $this->assertEquals("Valor Imposto: R$11250", $p5->getValorImposto());
        }

        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }
    }
?>