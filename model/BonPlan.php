<?php
class BonPlan
{
	var $reductionPourcent;
    var $dateDeb;
    var $dateFin;
    var $prod;

    function __construct() {
        $this->reductionPourcent = 0;
        $this->dateDeb = new date();
        $this->dateFin = new date();
        $this->prod = new Produit();
    }

    function setReduc($r)
    {
    	if (!(is_int($r))) {
            throw new Exception("Error Type", 1);
        }
        $this->reductionPourcent = $r;
    }
    function getReduc()
    {
        return $this->reductionPourcent;
    }

    function setDateDeb($d)
    {
        if (!(is_a($d, "date"))) {
            throw new Exception("Error Type", 1);
        }
        $this->date = $d;
    }
    function getDateDeb()
    {
        return $this->date;
    }

    function setDateFin($d)
    {
        if (!(is_a($d, "date"))) {
            throw new Exception("Error Type", 1);
        }
        $this->date = $d;
    }
    function getDateFin()
    {
        return $this->date;
    }

    function setProduit($p)
    {
        if (!(is_a($p, "Produit"))) {
            throw new Exception("Error Type", 1);
        }
        $this->prod = $p;
    }
    function getProduit()
    {
        return $this->prod;
    }
}

?>