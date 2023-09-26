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

        public function testProductSetName()
        {
            $p1 = new Product("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            $p1->setName("Yumi");
            $this->assertEquals("Yumi", $p1->getName());
        }


        public function testProductCpf(){
            $p2 = new Product("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            
            $this->assertEquals("4391644890", $p2->getCpf());
        }

        public function testProductSetCpf()
        {
            $p2 = new Product("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            $p2->setCpf("43916463829");
            $this->assertEquals("43916463829", $p2->getCpf());
        }

        public function testProductRendimento(){
            $p3 = new Product("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            
            $this->assertEquals(50000, $p3->getRendimento());
        }

        public function testProductSetRendimento()
        {
            $p3 = new Product("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            $p3->setRendimento(25000);
            $this->assertEquals(25000, $p3->getRendimento());
        }

        public function testProductAliquota(){
            $p4 = new Product("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            
            $this->assertEquals("22.5%", $p4->getAliquota());
        }

        public function testProductSetAliquota()
        {
            $p4 = new Product("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            $p4->setAliquota("25%");
            $this->assertEquals("25%", $p4->getAliquota());
        }

        public function testProductValorImposto(){
            $p5 = new Product("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            
            $this->assertEquals("Valor Imposto: R$11250", $p5->getValorImposto());
        }

        public function testProductSetValorImposto()
        {
            $p5 = new Product("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            $p5->setValorImposto("Valor Imposto: R$12000");
            $this->assertEquals("Valor Imposto: R$12000", $p5->getValorImposto());
        }

        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }
    }
?>
