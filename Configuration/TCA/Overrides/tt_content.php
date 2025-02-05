<?php
defined('TYPO3_MODE') || defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

call_user_func(
    static function (): void {
        ExtensionUtility::registerPlugin(
            'Project',
            'Index',
            'Project-Plugin',
            'EXT:projects/Resources/Public/Icons/Extension.svg'
            );
        ExtensionUtility::registerPlugin(
            'Project',
            'Lecture',
            'Project-LecturePlugin',
            'EXT:projects/Resources/Public/Icons/ExtensionLecture.svg'
            );
        ExtensionUtility::registerPlugin(
            'Project',
            'List',
            'Project-ListPlugin',
            'EXT:project/Resources/Public/Icons/ExtensionList.svg'
            );
        
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['project_index'] = 'select_key,pages,recursive';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['project_index'] = 'select_key,pages,recursive';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['project_index'] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('project_index','FILE:EXT:project/Configuration/FlexForms/FlexformIndex.xml');
        
        
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['project_lecture'] = 'select_key,pages,recursive';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['project_lecture'] = 'select_key,pages,recursive';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['project_lecture'] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('project_lecture','FILE:EXT:project/Configuration/FlexForms/FlexformLecture.xml');
        
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['project_list'] = 'select_key,pages,recursive';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['project_list'] = 'select_key,pages,recursive';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['project_list'] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('project_list','FILE:EXT:project/Configuration/FlexForms/FlexformList.xml');
        
    }
    );
