<?php
/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Victor César
* 20/06/2024
*/

// Antes: Subclasses não podem ser usadas como suas classes base
class Rectangle {
    protected $width;
    protected $height;

    public function setWidth($width) {
        $this->width = $width;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}

class Square extends Rectangle {
    public function setWidth($width) {
        $this->width = $this->height = $width;
    }

    public function setHeight($height) {
        $this->width = $this->height = $height;
    }
}

// Depois: classes podem ser substituídas por suas subclasses
abstract class Shape {
    abstract public function getArea();
}

class Rectangle extends Shape {
    protected $width;
    protected $height;

    public function setWidth($width) {
        $this->width = $width;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}

class Square extends Shape {
    protected $side;

    public function setSide($side) {
        $this->side = $side;
    }

    public function getArea() {
        return $this->side * $this->side;
    }
}
?>
