<?php

function roleTable(){
	require "business.php";
	$roles=getTable("role_rbac");
}

function isLogged()
{
	if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
		return true;
	else
		return false;
}
function sanitizeString($string)
{
	$string = htmlentities($string, ENT_QUOTES, "UTF-8");
	return $string;
}
function isEmployee($number)
{
	if($number<2)
		return true;
	else return false;
}
function directEmployee($number)
{
	if($number>1)
		return true;
	else return false;
}
function checkAuth()
{
	if(false)
		return true;
	else return false;
}
?>
