<?php

// definisco le mie variabili
$age = $_GET["age"];
$text = "Ciao il mio nome è Selene ed ho $age anni";

// stampo la mia stringa completa nella variabile $text
var_dump("Testo completo: " . $text);

// creo una nuova variabile $hidden_text in cui nascondo l'età sostituendola con degli " *** " e la stampo
$hidden_text = str_replace($age, "***", $text);
var_dump("Testo con età nascosta: " . $hidden_text);

// stampo la lunghezza della mia stringa $hidden_text
var_dump("La lunghezza della stringa è di: " . strlen($hidden_text) . "!");