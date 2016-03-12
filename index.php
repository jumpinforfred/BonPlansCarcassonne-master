<?php
ini_set('display_errors','on');
error_reporting(E_ALL);

require_once('model/Connexion.php');
require_once('model/Classes.php');

require_once('controller/Head.php');
require_once('controller/Banniere.php');
require_once('controller/Menu.php');
require_once('controller/Corps.php');
if (!empty($_GET['page']) && is_file('controller/'.$_GET['page']))
{
        require_once('controller/'.$_GET['page']);
}
else
{
        require_once('controller/Accueil.php');
}
require_once('controller/Pied.php');

?>