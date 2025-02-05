<?php
defined('TYPO3_MODE') || defined('TYPO3') || die('Access denied.');

use Hda\Project\Controller\ProjectController;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;


call_user_func(static function () {
    
    ExtensionUtility::configurePlugin(
        'Project',
        'Index',
        [
            ProjectController::class => 'index, show'
        ],
        // non-cacheable actions
        [
            ProjectController::class => 'show'
        ]
    );
    
    
    ExtensionUtility::configurePlugin(
        'Project',
        'Lecture',
        [
            ProjectController::class => 'lecture, show'
        ],
        // non-cacheable actions
        [
            ProjectController::class => 'show'
        ]
    );
    
    ExtensionUtility::configurePlugin(
        'Project',
        'List',
        [
            ProjectController::class => 'list, show'
        ],
        // non-cacheable actions
        [
            ProjectController::class => 'show'
        ]
        );
    
    
    
    

     ExtensionManagementUtility::addPageTSConfig("@import 'EXT:project/Configuration/TsConfig/Wizard.tsconfig'");    
});
