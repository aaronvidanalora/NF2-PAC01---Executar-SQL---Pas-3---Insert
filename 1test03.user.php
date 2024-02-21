<?php

require("class.user.insert.php");
require("class.pdofactory.php");

print "Running...<br />";

// Establecer la conexión PDO
$strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
$objPDO = PDOFactory::GetPDO($strDSN, "postgres", "postgres", array());
$objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Obtener el usuario con ID 1 de la base de datos
$objUser1 = new User($objPDO, 1);

// Mostrar los detalles del primer usuario
print "User with ID 1:<br />";
print "ID: " . $objUser1->getID() . "<br />";
print "El nombre es " . $objUser1->getFirstName() . "<br />";
print "El apellido es " . $objUser1->getLastName() . "<br />";
print "El nombre de usuario es " . $objUser1->getUsername() . "<br />";
print "La contraseña MD5 es " . $objUser1->getPassword() . "<br />";
print "La dirección de correo electrónico es " . $objUser1->getEmailAddress() . "<br />";
print "La fecha del último inicio de sesión es " . $objUser1->getDateLastLogin() . "<br />";
print "La hora del último inicio de sesión es " . $objUser1->getTimeLastLogin() . "<br />";
print "La fecha de creación de la cuenta es " . $objUser1->getDateAccountCreated() . "<br />";
print "La hora de creación de la cuenta es " . $objUser1->getTimeAccountCreated() . "<br />";
print "<br />";

// Obtener el usuario con ID 2 de la base de datos
$objUser2 = new User($objPDO, 2);

// Mostrar los detalles del segundo usuario
print "User with ID 2:<br />";
print "ID: " . $objUser2->getID() . "<br />";
print "El nombre es " . $objUser2->getFirstName() . "<br />";
print "El apellido es " . $objUser2->getLastName() . "<br />";
print "El nombre de usuario es " . $objUser2->getUsername() . "<br />";
print "La contraseña MD5 es " . $objUser2->getPassword() . "<br />";
print "La dirección de correo electrónico es " . $objUser2->getEmailAddress() . "<br />";
print "La fecha del último inicio de sesión es " . $objUser2->getDateLastLogin() . "<br />";
print "La hora del último inicio de sesión es " . $objUser2->getTimeLastLogin() . "<br />";
print "La fecha de creación de la cuenta es " . $objUser2->getDateAccountCreated() . "<br />";
print "La hora de creación de la cuenta es " . $objUser2->getTimeAccountCreated() . "<br />";
print "<br />";

?>
