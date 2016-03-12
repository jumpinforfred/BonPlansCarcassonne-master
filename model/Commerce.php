<?php
class Commerce
{
	var $nom;
	var $commercant;
	var $categorie;
	var $lieu;

    function __construct() {
        $this->nom = "";
        $this->commercant = new Commercant();
        $this->categorie = new CategorieCommerce();
        $this->lieu = new Lieu();
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

    function setCommercant($c)
    {
    	if (!($c instanceof Commercant)) {
    		throw new Exception("Error Type", 1);
    	}
    	$this->commercant = $c;
    }
    function getCommercant() {
    	return $this->commercant;
    }

    function setCategorie($cat) {
    	if (!($cat instanceof CategorieCommerce)) {
    		throw new Exception("Error Type", 1);
    	}
    	$this->categorie = $cat;
    }
    function getCategorie() {
    	return $this->categorie;
    }

    function setLieu($l) {
    	if (!($l instanceof Lieu)) {
    		throw new Exception("Error Type", 1);
    	}
    	$this->lieu = $l;
    }
    function getLieu() {
    	return $this->lieu;
    }
}

?>