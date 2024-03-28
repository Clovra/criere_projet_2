<?php

// declaration de chaque routeur qui seront ensuite associer à leur page respective

function routeur1()
{

	require("modele/modele.php");
	$requete1 = getPeche();
	$requete2 = getStatuFacture();
	require("view/viewFactureSelonDate.php");


}

function routeur2()
{
	require("modele/modele.php");
	$requete3 = getStatuEquarissage();
	require("view/viewEquarissage.php");
}

function routeur3()
{
	require("view/accueil.php");
}

function routeur4()
{
	require("modele/modele.php");
	$requete4 = getLotNonVendu();
	require("view/viewAssociation.php");
}

function routeur5()
{
	require("modele/modele.php");
	$requete5 = getLotNonPayer();
	$requete6 = getCustomerForBlock();
	$requete7 = setBlock();
	$requete8 = getCustomerBlocked();
	$requete9 = setDeblockCustomer();
	$requete10 = getDeblockCustomer();
	require("view/viewBloquage.php");
}

function routeur6()
{
	require("modele/modele.php");
	$requete8 = getCustomerBlocked();
	$requete9 = setDeblockCustomer();
	$requete10 = getDeblockCustomer();
	require("view/viewDebloquage.php");
}

function routeur7()
{
	require("modele/modele.php");
	$requete11 = getLotVendu();
	$requete12 = getCustomerForMail();
	$requete13 = sendFacture();
	$requete14 = getMail();
	require("view/viewFactureParMail.php");
}

function routeur8()
{
	require("modele/modele.php");
	$requete16 = getXmlFile();
	$requete17 = getDateFact();
	$requete18 = setXmlData();
	require("view/viewGenererXml.php");
}

function routeur9()
{
	require("modele/modele.php");
	$requete19 = setDataArray();
	require("view/viewGraphique.php");
}

function routeur10()
{
	require("modele/modele.php");
	$requete20 = getAllSpacies();
	require("view/viewEspece.php");
}

function routeur11()
{
	require("modele/modele.php");
	$requete21 = getShipData();
	require("view/viewBateau.php");
}

function routeur12()
{
	require("modele/modele.php");
	$requete22 = setDataAsso();
	require("view/viewAjoutAssociation.php");
}

function routeur13()
{
	require("modele/modele.php");
	$requete23 = setDataBuyer();
	require("view/viewAjoutAcheteur.php");
}

function routeur14()
{
	require('modele/modele.php');
	$req = getPeche();
	require('view/v_listeLot.php');
}




