<?php

use PHPUnit\Framework\TestCase;

class AnimalTest extends TestCase
{
    public function testNombreNoVacio(): void
    {
        $nombre = "León";
        $this->assertNotEmpty($nombre, "El nombre no debería estar vacío.");
    }

    public function testEdadValida(): void
    {
        $edad = 5;
        $this->assertGreaterThanOrEqual(0, $edad, "La edad debe ser un número positivo o cero.");
    }

    public function testSexoValido(): void
    {
        $sexo = 1;
        $this->assertContains($sexo, [0, 1], "El sexo debe ser 0 o 1.");
    }
}
