<?php

class Sort extends Carte{

    public function attaquer(Monstre $monstre){
        $monstre->minusPtsVie($this->ptsDegats);
    }
}

