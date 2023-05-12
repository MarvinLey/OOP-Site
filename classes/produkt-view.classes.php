<?php

class ProduktInfoView extends ProduktInfo {
    public function fetchAllProdukts(){
        $produktData = $this->getAllProdukts();
        return $produktData;
    }

    public function fetchAllElektronikProdukts() {
        $produktData = $this->getAllElektronikProdukts();
        return $produktData;
    }

    public function fetchAllHaushaltProdukts() {
        $produktData = $this->getAllHaushaltProdukts();
        return $produktData;
    }
}