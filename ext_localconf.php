<?php

defined('TYPO3') or die;

use Hda\Project\Controller\ProjectController;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

call_user_func(static function () {
    
    ExtensionUtility::configurePlugin(
        'Project',
        'Index',
        [
            ProjectController::class => 'index'
        ],
        []
    );
    ExtensionUtility::configurePlugin(
        'Project',
        'Lecture',
        [
            ProjectController::class => 'lecture, show'
        ],
        []
        );
    
    ExtensionUtility::configurePlugin(
        'Project',
        'List',
        [
            ProjectController::class => 'list, show'
        ],
        []
        );
    ExtensionManagementUtility::addPageTSConfig("@import 'EXT:project/Configuration/TsConfig/Wizard.tsconfig'");
});
    