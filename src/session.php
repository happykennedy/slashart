<?php 

//Set ROOT URL $SiteRootURL, required in Header.php 
//Will work if root is ../ relatively to Session.php
$aWebRoot = dirname(__DIR__); // Up one folder  (../)
$aServerRoot = $_SERVER['DOCUMENT_ROOT'];
$aRootFolder = substr($aWebRoot, strlen ($aServerRoot));
$SiteRootURL = $_SERVER['HTTP_HOST'].$aRootFolder;

?>