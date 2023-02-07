<?php

use PHPUnit\Framework\TestCase;
include './src/Enana.php';

class EnanaTest extends TestCase {

    public function testHeridaLeveVive() {
        #Se probará el efecto de una herida leve a una Enana con puntos de vida suficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es mayor que 0 y además que su situación es viva
        $objeto = new Enana('Filomena', 100, 'viva');
        $this->assertEquals('viva', $objeto->heridaLeve());
    }

    public function testHeridaLeveMuere() {
        #Se probará el efecto de una herida leve a una Enana con puntos de vida insuficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es menor que 0 y además que su situación es muerta
        $objeto = new Enana('Filomena', 8, 'viva');
        $this->assertEquals('muerta', $objeto->heridaLeve());
    }

    public function testHeridaGrave() {
        #Se probará el efecto de una herida grave a una Enana con una situación de viva.
        #Se tendrá que probar que la vida es 0 y además que su situación es limbo
        $objeto = new Enana('Filomena', 8, 'viva');
        $this->assertEquals('limbo', $objeto->heridaGrave());

    }
    
    public function testPocimaRevive() {
        #Se probará el efecto de administrar una pócima a una Enana muerta pero con una vida mayor que -10 y menor que 0
        #Se tendrá que probar que la vida es mayor que 0 y que su situación ha cambiado a viva
        $objeto = new Enana('Filomena', -3, 'muerta');
        $this->assertEquals('viva', $objeto->pocima());

    }

    public function testPocimaExtraLimbo() {
        #Se probará el efecto de administrar una pócima Extra a una Enana en el limbo.
        #Se tendrá que probar que la vida es 50 y la situación ha cambiado a viva.
        $objeto = new Enana('Filomena', 0, 'limbo');
        $this->assertEquals('viva', $objeto->pocimaExtra());
        
    }
}


?>