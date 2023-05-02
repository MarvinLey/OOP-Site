<?php

class PageContr {
    public function displayPage() {
        $page = $_GET['page'] ?? '';
        $templateFile = 'parts/' . $page . '.part.php';
    
        if(file_exists($templateFile)) {
          require_once $templateFile;
        }
        else {
          require_once 'parts/home.part.php';
        }
      }
}
$controller = new PageContr();
$controller->displayPage();