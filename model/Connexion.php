<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('pgsql: host=ec2-54-235-153-179.compute-1.amazonaws.com; dbname=dd85bnd2s0mpuu', 'pchmhwknvihrto', '6cdrH5HTdJaVBy5H57yWxeK2rA');
}
 
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}$bdd->exec("SET CHARACTER SET utf8");
?>