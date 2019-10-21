<?php 

include "ITeleso.php";

class Jehlan implements ITeleso {

    private $a; 
    private $v;

    public function setA($a){
        $this->a = $a;
    }

    public function setV($v){
        $this->v = $v;
    }

    public function __construct($a = 0, $v = 0)
    {
        $this->setA($a);
        $this->setV($v);
    }

    public function vyska(){
        $vs = sqrt(($this->a/2 * $this->a/2)+($this->v * $this->v));
        return $vs;
    }

    public function podstava(){
        $Sp = $this->a * $this->a;
        return $Sp;
    }

    public function plast(){
        $Spl = 4 * (($this->a * $this->vyska())/2);
        return $Spl;
    }

    public function povrch(){
        $S = $this->podstava() + $this->plast();
        return $S;
    }

    public function objem(){
        $obj = 1/3 * ($this->podstava() * $this->v);
        return $obj;
    }

    public function is3D(){
        if($this->objem() > 0){
            return "je";
        }else{
            return "není";
        }
    }

    public function pocetVrcholu(){
        if($this->v > 0){
            return "má jeden hlavní vrchol";
        }else {
            return "nemá vrchol";
        }
        
    }

    public function info(): string
    {
        return 
        "Hrana podstavy: " . $this->a . 
        "</br>Vrchol: " . $this->v .
        "</br>Povrch: " . $this->povrch() . 
        "</br>Objem: " . $this ->objem() . 
        "</br>Obsah podstavy: " . $this->podstava() . 
        "</br>Obsah pláště: " . $this->plast() . 
        "</br>Tento jehlan " . $this->pocetVrcholu() . " a " . $this->is3D() . " 3D.";
    }

}