<?php
/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Victor César
* 20/06/2024
*/

// Antes: a classe está fechada para extensão
class Report {
    public function generateReport($type) {
        if ($type == 'pdf') {
            // Generate PDF report
        } elseif ($type == 'csv') {
            // Generate CSV report
        }
    }
}

// Depois: a classe é aberta para extensão, mas fechada para modificação
interface ReportGenerator {
    public function generate();
}

class PDFReport implements ReportGenerator {
    public function generate() {
        // Generate PDF report
    }
}

class CSVReport implements ReportGenerator {
    public function generate() {
        // Generate CSV report
    }
}

class Report {
    private $reportGenerator;

    public function __construct(ReportGenerator $reportGenerator) {
        $this->reportGenerator = $reportGenerator;
    }

    public function generateReport() {
        $this->reportGenerator->generate();
    }
}
?>
