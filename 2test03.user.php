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
// Obtener el usuario con ID 2 de la base de datos
$objUser2 = new User($objPDO, 2);

// Guardar los valores del usuario 1
$idUser1 = $objUser1->getID();
$firstNameUser1 = $objUser1->getFirstName();
$lastNameUser1 = $objUser1->getLastName();
$usernameUser1 = $objUser1->getUsername();
$passwordUser1 = $objUser1->getPassword();
$emailUser1 = $objUser1->getEmailAddress();
$dateLastLoginUser1 = $objUser1->getDateLastLogin();
$timeLastLoginUser1 = $objUser1->getTimeLastLogin();
$dateAccountCreatedUser1 = $objUser1->getDateAccountCreated();
$timeAccountCreatedUser1 = $objUser1->getTimeAccountCreated();

// Actualizar usuario 1 con los valores del usuario 2
$objUser1->setFirstName($objUser2->getFirstName());
$objUser1->setLastName($objUser2->getLastName());
$objUser1->setUsername($objUser2->getUsername());
$objUser1->setPassword($objUser2->getPassword());
$objUser1->setEmailAddress($objUser2->getEmailAddress());
$objUser1->setDateLastLogin($objUser2->getDateLastLogin());
$objUser1->setTimeLastLogin($objUser2->getTimeLastLogin());
$objUser1->setDateAccountCreated($objUser2->getDateAccountCreated());
$objUser1->setTimeAccountCreated($objUser2->getTimeAccountCreated());
$objUser1->Save();

// Actualizar usuario 2 con los valores guardados del usuario 1
$objUser2->setFirstName($firstNameUser1);
$objUser2->setLastName($lastNameUser1);
$objUser2->setUsername($usernameUser1);
$objUser2->setPassword($passwordUser1);
$objUser2->setEmailAddress($emailUser1);
$objUser2->setDateLastLogin($dateLastLoginUser1);
$objUser2->setTimeLastLogin($timeLastLoginUser1);
$objUser2->setDateAccountCreated($dateAccountCreatedUser1);
$objUser2->setTimeAccountCreated($timeAccountCreatedUser1);
$objUser2->Save();

// Mostrar los detalles actualizados del primer usuario
print "Updated details for User with ID 1:<br />";
print "ID: " . $objUser1->getID() . "<br />";
print "First name is " . $objUser1->getFirstName() . "<br />";
print "Last name is " . $objUser1->getLastName() . "<br />";
print "Username is " . $objUser1->getUsername() . "<br />";
print "Password is " . $objUser1->getPassword() . "<br />";
print "Email address is " . $objUser1->getEmailAddress() . "<br />";
print "Date of last login is " . $objUser1->getDateLastLogin() . "<br />";
print "Time of last login is " . $objUser1->getTimeLastLogin() . "<br />";
print "Date account created is " . $objUser1->getDateAccountCreated() . "<br />";
print "Time account created is " . $objUser1->getTimeAccountCreated() . "<br />";
print "<br />";

// Mostrar los detalles actualizados del segundo usuario
print "Updated details for User with ID 2:<br />";
print "ID: " . $objUser2->getID() . "<br />";
print "First name is " . $objUser2->getFirstName() . "<br />";
print "Last name is " . $objUser2->getLastName() . "<br />";
print "Username is " . $objUser2->getUsername() . "<br />";
print "Password is " . $objUser2->getPassword() . "<br />";
print "Email address is " . $objUser2->getEmailAddress() . "<br />";
print "Date of last login is " . $objUser2->getDateLastLogin() . "<br />";
print "Time of last login is " . $objUser2->getTimeLastLogin() . "<br />";
print "Date account created is " . $objUser2->getDateAccountCreated() . "<br />";
print "Time account created is " . $objUser2->getTimeAccountCreated() . "<br />";
print "<br />";

?>
