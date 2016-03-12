<?php
class CategorieCommerce
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

?>