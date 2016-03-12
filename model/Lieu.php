<?php
class Lieu
{
	var $long;
    var $lat;

    function __construct() {
        $this->long = "";
        $this->lat = "";
    }

    function setLong($l)
    {
    	if (!(is_string($l))) {
            throw new Exception("Error Type", 1);
        }
        $this->long = $l;
    }
    function getLong()
    {
        return $this->long;
    }

    function setLat($l)
    {
        if (!(is_string($l))) {
            throw new Exception("Error Type", 1);
        }
        $this->lat = $l;
    }
    function getLat()
    {
        return $this->lat;
    }
}
?>