<h1>POO BANQUE</h1>
<p>
    Vous êtes chargé(e) de créer un projet PHP orienté objet permettant de gérer des titulaires et leurs comptes bancaires respectifs. <br>
    Un compte bancaire est identifiépar :
</p>
<ul>
    <li>un libellé(compte courant, livret A, ...)</li>
    <li>un solde initial</li>
    <li>une devise monétaire</li>
    <li>un titulaire unique</li>
</ul>
<p>Un titulaire est identifiépar :</p>
<ul>
    <li>un nom</li>
    <li>nn prenom</li>
    <li>une date de naissance</li>
    <li>une ville</li>
    <li>l'ensemble de ses comptes bancaires</li>
</ul>
<p>Sur un compte bancaire, on doit pouvoir :</p>
<ul>
    <li>créditer le compte de X euros</li>
    <li>débiter le compte de X euros</li>
    <li>effectuer un virement d'un compte àl'autre</li>
</ul>
<p>On doit pouvoir :</p>
<ul>
    <li>Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes appartenant àcelui(celle)-ci</li>
    <li>Afficher toutes les informations d'un compte bancaire (notamment le nom / prénom du titulaire du compte)</li>
</ul>

<?php
require 'class/classTitulaire.php';
require 'class/classCompteBancaire.php';

$fabrice = new Titulaire('Vert', 'Fabrice', '1964/01/11', 'Sarre-Union');
$sabine = new Titulaire('Jaune', 'Sabine', '1961/06/25', 'Strasbourg');
$arnaud = new Titulaire('Bleu', 'Arnaud', '1997/04/25', 'Gunki');

$compteF1 = new CompteBancaire('Compte courrant', 2000, 'euros', $fabrice);
$compteF2 = new CompteBancaire('Livret A', 200000, 'euros', $fabrice);

$compteS1 = new CompteBancaire('Compte courrant', 200, 'euros', $sabine);
$compteS2 = new CompteBancaire('Offshore', 2, 'rouble', $sabine);

$compteA1 = new CompteBancaire('Compte courrant', 6000, 'dollar', $arnaud);
$compteA2 = new CompteBancaire('Livret B', 600000, 'dollar', $arnaud);
$compteA3 = new CompteBancaire('Gros Gamoss', 600000, 'dollar', $arnaud);

echo "$fabrice <br>";

$compteF1->crediterCompte(120);
$compteF1->debiterCompte(100);

echo $compteF1.'<br>';

$compteA1->virement(1000, $compteF1);

echo $compteF1.'<br>';
echo $compteA1.'<br>';
