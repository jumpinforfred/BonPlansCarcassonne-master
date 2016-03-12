<?php
class Commercant
{
	var $nom;

    function __construct() {
        $this->nom = "";
    }

    function setNom($n)
    {
    	if (!(is_string($n))) {
    		throw new Exception("Error Type", 1);
    	}
        $this->nom = $n;
    }
    function getNom()
    {
        return $this->nom;
    }
}

// $bar = new Commercant;
// $bar->setNom("bob");

?>