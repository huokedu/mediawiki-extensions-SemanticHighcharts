<?php
/*
 * DO NOT EDIT THIS FILE
 * SETTINGS SHOULD BE SET IN LocalSettings.php
 */
global $shcConfig;

const PERCENTILE_DEFINITION = 'percentile definition';
const PERCENTILE_DEFINITION_DEFAULT = 'default';
const PERCENTILE_DEFINITION_PETROLEUM_INDUSTRY = 'petroleum industry';

if(!isset($shcConfig)){
	$shcConfig = array();
}

if(!isset($shcConfig[PERCENTILE_DEFINITION])){
	$shcConfig[PERCENTILE_DEFINITION] = PERCENTILE_DEFINITION_DEFAULT;
}