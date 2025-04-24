<?php
// Esercizio 6: Calcolare lo sconto su un prodotto
// Obiettivo: Supponiamo di avere un prodotto che costa 100€ e di applicare uno sconto del 20%. Calcolare il prezzo finale dopo lo sconto.

$prezzo_iniziale = 100;
$sconto = 20;
$importo_sconto = ($prezzo_iniziale * $sconto) / 100;
$prezzo_finale = $prezzo_iniziale - $importo_sconto;

echo "Il prezzo finale dopo lo sconto è: " . $prezzo_finale . "£";
