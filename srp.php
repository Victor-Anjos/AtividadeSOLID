<?php
/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Victor César
* 20/06/2024
*/

// Antes: a classe User fazia muitas coisas
class User {
    public $id;
    public $name;
    public $email;
    public $password;

    public function __construct($id, $name, $email, $password) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function save() {
        // Save user to database
    }

    public function sendWelcomeEmail() {
        // Send welcome email
    }

    public function getAllUsers() {
        // Get all users from database
    }

    public function exportToCSV() {
        // Export users to CSV
    }
}

// Depois: separar responsabilidades em diferentes classes
class User {
    public $id;
    public $name;
    public $email;
    public $password;

    public function __construct($id, $name, $email, $password) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}

class UserRepository {
    public function save(User $user) {
        // Save user to database
    }

    public function getAllUsers() {
        // Get all users from database
    }
}

class EmailService {
    public function sendWelcomeEmail(User $user) {
        // Send welcome email
    }
}

class CSVExporter {
    public function exportToCSV(array $users) {
        // Export users to CSV
    }
}
?>
