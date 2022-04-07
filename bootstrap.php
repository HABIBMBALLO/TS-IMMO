<?php
// bootstrap.php
// use Administrateur;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

require_once "src/entities/Administrateur.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/entities"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'dbname' => 'doctrine',
    'user' => 'doctrineur',
    'password' => 'doctrineur',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

// $admin = new Administrateur([
//     "id"=>1,
//     "nom"=>"Boub",
//     "cni"=>"123456789",
//     "sexe"=>"Masculin",
//     "dateNaissance"=>new DateTime("01/01/2000"),
//     "lieuNaissance"=>"Tunis"
// ]);

// print_r($entityManager->find("Administrateur", 1)->getFields()["nom"]);

// $entityManager->persist($admin);
// $entityManager->flush();