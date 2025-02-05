<?php
defined('TYPO3_MODE') || defined('TYPO3') || die('Access denied.');


$boot = static function (): void {

	$GLOBALS['TCA']['fe_users']['ctrl']['label'] = 'name';
	$GLOBALS['TCA']['fe_users']['ctrl']['default_sortby'] = 'name';
    
};

$boot();
unset($boot);

