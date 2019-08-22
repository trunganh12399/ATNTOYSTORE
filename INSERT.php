<?php

$conn = @pg_connect("dbname=postgres user=postgres password=123456789");

if(!$conn) {
    die('Connessione fallita !<br />');
} else {
    echo 'Connessione riuscita !<br />';
}



// Richiedente
$name = $_POST['INSERT'];
$surname = $_POST['UPDATE'];
$email = $_POST['VIEWER'];
$testo = $_POST['DELETE'];

// Interni
if($_POST['NAME']) foreach($_POST['NAME'] as $NAME) 
if($_POST['PRICE']) foreach($_POST['PRICE'] as $PRICE)
if($_POST['INVENTORY']) foreach($_POST['INVENTORY'] as $INVENTORY)

// Esterni
if($_POST['NAME']) foreach($_POST['NAME'] as $NAME) 
if($_POST['PRICE']) foreach($_POST['PRICE'] as $PRICE)    
if($_POST['SPECIES']) foreach($_POST[''] as $SPECIES)
if($_POST['BOY']) foreach($_BOY[''] as $BOY)
if($_POST['GIRL']) foreach($_GIRL[''] as $GIRL)
//inserting data order
INSERT INTO prenotazioni  (id,nome_rich, cognome_rich, email_rich,oggetto_rich)
            VALUES (1,'$NAME','$PRICE', 'SPECIES','$BOY''GIRL');


INSERT INTO interni (nome_int, cognome_int, email_int)
            VALUES ('$NAME','$PRICE','$INVENTORY');

INSERT INTO esterni  (nome_est, cognome_est, email_est)
            VALUES  ('$NAME','$PRICE','$INVENTORY');



?>