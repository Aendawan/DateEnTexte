<?php

/**
 *
 * La fonction DateEnTexte permet d'afficher la date avec une fonction PHP
 * tout en l'affichant en français comme "7 avril 2017" et non 
 * 07/04/2017 ou "07 April 2017".
 *
 * DateEnTexte.php
 * @since 07 avril 2017
 * @author Dylan Skiba <contact@dylanskiba.fr>
 * @copyright © 2017 Dylan Skiba
 * @version 0.02
 */

/**
 *
 * La fonction sert transcrire un nombre en jour
 *
 * @param $jour = jour en chiffre (1 pour lundi, 7 pour dimanche)
 * @return string jour en texte
 */
function nombreEnJour($jour)
{
	// Jour
	if($jour == 1)
		$text_jour = 'Lundi';
	elseif($jour == 2)
		$text_jour = 'Mardi';
	elseif($jour == 3)
		$text_jour = 'Mardi';
	elseif($jour == 4)
		$text_jour = 'Mardi';
	elseif($jour == 5)
		$text_jour = 'Mardi';
	elseif($jour == 6)
		$text_jour = 'Mardi';
	elseif($jour == 7)
		$text_jour = 'Mardi';
	else
		$text_jour = false;

	return $text_jour;
}

/**
 *
 * La fonction sert transcrire un nombre en mois
 *
 * @param $jour = jour en chiffre (1 pour janvier, 12 pour décembre)
 * @return string mois en texte
 */
function nombreEnMois($mois)
{
	// Mois
	if($mois == 1)
		$text_mois = "janvier";
	elseif($mois == 2)
		$text_mois = "février";
	elseif($mois == 3)
		$text_mois = "mars";
	elseif($mois == 4)
		$text_mois = "avril";
	elseif($mois == 5)
		$text_mois = "mai";
	elseif($mois == 6)
		$text_mois = "juin";
	elseif($mois == 7)
		$text_mois = "juillet";
	elseif($mois == 8)
		$text_mois = "août";
	elseif($mois == 9)
		$text_mois = "septembre";
	elseif($mois == 10)
		$text_mois = "octobre";
	elseif($mois == 11)
		$text_mois = "novembre";
	elseif($mois == 12)
		$text_mois = "décembre";
	else
		$text_mois = false;

	return $text_mois;
}

/**
 *
 * La fonction sert à afficher la date en format texte et en français.
 *
 * @param $jour = jour en chiffre (1 pour lundi, 7 pour dimanche)
 * @param $text_numerojour = nombre du mois (1, 2 jusqu'à 31)
 * @param $mois = mois en chiffre (1 pour janvier, 12 pour décembre)
 * @param $annee = année en chiffre.
 * @return string Date en texte
 */

function DS_TET($jour, $text_numerojour, $mois, $annee)
{

	$text_jour = nombreEnJour($jour);
	$text_mois = nombreEnMois($mois);

	if($text_jour == false OR $text_mois == false)
		$text_total = "Erreur, la date n'est pas bonne!";
	else
		$text_total = "$text_jour $text_numerojour $text_mois $text_annee";

	return $text_total;
}

/**
 *
 * La fonction sert transcrire un nombre en mois
 *
 * @param $timestamp = Le timestamp voulu, si non défini donne la date du jour
 * @return string date en texte
 */
function timestampEnText($timestamp = null)
{

	if($timestamp == null OR !is_numeric($timestamp))
		$timestamp = time();

	$text_jour = nombreEnJour(date('N', $timestamp));
	$text_numerojour = date('j', $timestamp);
	$text_mois = nombreEnMois(date('n', $timestamp));
	$text_annee = date('Y', $timestamp);

	if($text_jour == false OR $text_mois == false)
		$text_total = "Erreur, la date n'est pas bonne!";
	else
		$text_total = "$text_jour $text_numerojour $text_mois $text_annee";

	return $text_total;
}