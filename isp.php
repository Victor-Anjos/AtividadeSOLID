<?php
/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Victor César
* 20/06/2024
*/

// Antes: uma interface única para várias responsabilidades
interface Worker {
    public function work();
    public function eat();
}

class HumanWorker implements Worker {
    public function work() {
        // Working
    }

    public function eat() {
        // Eating
    }
}

class RobotWorker implements Worker {
    public function work() {
        // Working
    }

    public function eat() {
        // Robots don't eat
    }
}

// Depois: interfaces específicas para cada responsabilidade
interface Workable {
    public function work();
}

interface Eatable {
    public function eat();
}

class HumanWorker implements Workable, Eatable {
    public function work() {
        // Working
    }

    public function eat() {
        // Eating
    }
}

class RobotWorker implements Workable {
    public function work() {
        // Working
    }
}
?>
