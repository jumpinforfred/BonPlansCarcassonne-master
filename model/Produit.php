<?php
class Produit
{
	var $nom;
    var $prix;
    var $description;
    var $commerce;
    var $categorie;

    function __construct() {
        $this->nom = "";
        $this->prix = 0;
        $this->description = "";
        $this->commerce = new Commerce;
        $this->categorie = new CategorieProduit;
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

    function setPrix($p)
    {
        if (!(is_numeric($p))) { //hummmmmm.....
            throw new Exception("Error Type", 1);
        }
        $this->prix = $p;
    }
    function getPrix()
    {
        return $this->prix;
    }

    function setDescr($d)
    {
        if (!(is_string($d))) {
            throw new Exception("Error Type", 1);
        }
        $this->description = $d;
    }
    function getDescr()
    {
        return $this->description;
    }

    function setCommerce($c)
    {
        if (!(is_a($c, "Commerce"))) {
            throw new Exception("Error Type", 1);
        }
        $this->commerce = $c;
    }
    function getCommerce()
    {
        return $this->commerce;
    }

    function setCategorie($cat)
    {
        if (!(is_a($cat, "CategorieProduit"))) {
            throw new Exception("Error Type", 1);
        }
        $this->categorie = $cat;
    }
    function getCategorie()
    {
        return $this->categorie;
    }
}

?>