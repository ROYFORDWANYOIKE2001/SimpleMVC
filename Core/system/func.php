<?php 
/*
**LOADERS FILE
*/
function load_config($value)
{
	include_once ROOT.CONFIG.$value.'php';
}

function load_lib($value)
{
	include_once ROOT.LIB.$value.'php';
}

function load($value)
{
	include_once ROOT.'./'.$value.'php';
}
/*
**REDIRECT
*/

?>