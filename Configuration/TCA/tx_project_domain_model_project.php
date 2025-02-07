<?php

use TYPO3\CMS\Core\Resource\File;
use TYPO3\CMS\Core\Utility\GeneralUtility;

$ll = 'LLL:EXT:project/Resources/Private/Language/locallang_db.xlf:';

return [
    'ctrl' => [
        'title' => $ll . 'project',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,teaser,description,studentsfreetext,copartner,copartnerlink,path_segment',
        'iconfile' => 'EXT:project/Resources/Public/Icons/project.png'
    ],
    'types' => [
        '1' => ['showitem' => '
            title, teaser, description, studentsfreetext, lecturersfreetext, date, copartner, copartnerlink, topimage, media, thumbimage, lightboxstyle, path_segment, category, degreecourse, semester, students, lecturers, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, 
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_project_domain_model_project',
                'foreign_table_where' => 'AND {#tx_project_domain_model_project}.{#pid}=###CURRENT_PID### AND {#tx_project_domain_model_project}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'title' => [
            'exclude' => true,
            'label' => $ll . 'title',
            'description' => 'LLL:EXT:project/Resources/Private/Language/locallang_db.xlf:tx_project_domain_model_project.title.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => ''
            ],
        ],
        'teaser' => [
            'exclude' => true,
            'label' =>$ll . 'teaser',
            'description' => 'LLL:EXT:project/Resources/Private/Language/locallang_db.xlf:tx_project_domain_model_project.teaser.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'description' => [
            'exclude' => true,
            'label' => $ll . 'description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            
        ],
        'studentsfreetext' => [
            'exclude' => true,
            'label' => $ll . 'studentsfreetext',
            'description' => 'LLL:EXT:project/Resources/Private/Language/locallang_db.xlf:tx_project_domain_model_project.studentsfreetext.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'lecturersfreetext' => [
            'exclude' => true,
            'label' => $ll . 'lecturersfreetext',
            'description' => 'LLL:EXT:project/Resources/Private/Language/locallang_db.xlf:tx_project_domain_model_project.lecturersfreetext.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'date' => [
            'exclude' => true,
            'label' => $ll . 'date',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'copartner' => [
            'exclude' => true,
            'label' => $ll . 'copartner',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'copartnerlink' => [
            'exclude' => true,
            'label' => $ll . 'copartnerlink',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'topimage' => [
            'exclude' => true,
            'label' =>  $ll . 'topimage',
            'config' => [
                'type' => 'file',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
                'appearance' => [
                    'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
                    'showPossibleLocalizationRecords' => true,
                    'showAllLocalizationLink' => true,
                    'showSynchronizationLink' => true,
                ],
                'overrideChildTca' => [
                    'types' => [
                        File::FILETYPE_IMAGE => [
                            'showitem' => '
								--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
								--palette--;;imageoverlayPalette,
								--palette--;;filePalette',
                        ],
                        File::FILETYPE_VIDEO => [
                            'showitem' => '
								--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
								--palette--;;videoOverlayPalette,
								--palette--;;filePalette',
                        ],
                    ],
                ],
                'allowed' => 'jpg,jepg,png,svg',
            ],
        ],
        'media' => [
            'exclude' => true,
            'label' =>  $ll . 'media',
            'config' => [
                'type' => 'file',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
                'appearance' => [
                    'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
                    'showPossibleLocalizationRecords' => true,
                    'showAllLocalizationLink' => true,
                    'showSynchronizationLink' => true,
                ],
                'overrideChildTca' => [
                    'types' => [
                        File::FILETYPE_IMAGE => [
                            'showitem' => '
								--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
								--palette--;;imageoverlayPalette,
								--palette--;;filePalette',
                        ],
                        File::FILETYPE_VIDEO => [
                            'showitem' => '
								--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
								--palette--;;videoOverlayPalette,
								--palette--;;filePalette',
                        ],
                    ],
                ],
                'allowed' => 'mp4,mp3,youtube,vimeo,jpg,jepg,png,svg' ,
            ],
        ],
        'thumbimage' => [
            'exclude' => true,
            'label' =>  $ll . 'thumbimage',
            'config' => [
                'type' => 'file',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
                'appearance' => [
                    'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
                    'showPossibleLocalizationRecords' => true,
                    'showAllLocalizationLink' => true,
                    'showSynchronizationLink' => true,
                ],
                'overrideChildTca' => [
                    'types' => [
                        File::FILETYPE_IMAGE => [
                            'showitem' => '
								--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
								--palette--;;imageoverlayPalette,
								--palette--;;filePalette',
                        ],
                    ],
                ],
                'allowed' => 'jpg,jepg,png,svg'  ,
            ],
        ],
        'lightboxstyle' => [
            'exclude' => true,
            'label' => 'LLL:EXT:t3up_image/Resources/Private/Language/locallang_backend.xlf:lightboxstyle',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:t3up_image/Resources/Private/Language/locallang_backend.xlf:lightboxstyle0', 0],
                    ['LLL:EXT:t3up_image/Resources/Private/Language/locallang_backend.xlf:lightboxstyle1', 'a'],
                    ['LLL:EXT:t3up_image/Resources/Private/Language/locallang_backend.xlf:lightboxstyle2', 'b'],
                    ['LLL:EXT:t3up_image/Resources/Private/Language/locallang_backend.xlf:lightboxstyle3', 'c'],
                    ['LLL:EXT:t3up_image/Resources/Private/Language/locallang_backend.xlf:lightboxstyle4', 'd'],
                    ['LLL:EXT:t3up_image/Resources/Private/Language/locallang_backend.xlf:lightboxstyle5', 'e'],
                ],
                'default' => 'b',
            ]
        ],
        'path_segment' => [
            'exclude' => true,
            'label' => $ll . 'slug',
            'config' => [
                'type' => 'slug',
                'size' => 50,
                'generatorOptions' => [
                    'fields' => ['title'],
                    'replacements' => [
                        '/' => '-',
                        '.' => '',
                        '®' => '',
                        ',' => '',
                        '|' => '',
                        ' ' => '-',
                    ],
                ],
                'fallbackCharacter' => '-',
                'default' => ''
            ]
        ],  

        'category' => [
            'exclude' => true,
            'label' => $ll . 'category',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_project_domain_model_category',
                'items' => [
                    [
                        0 => $ll .'select',0,
                    ]
                ],
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],
            
        ],

        'degreecourse' => [
            'exclude' => true,
            'label' => $ll . 'degreecourse',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_project_domain_model_degreecourse',
                'items' => [
                    [
                        0 => $ll .'select',
                    ]
                ],
                'default' => 0,
                'minitems' => 1,
                'maxitems' => 1,
                'eval' => 'required'
            ],
            
        ],
        
        'semester' => [
            'exclude' => true,
            'label' => $ll . 'semester',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_project_domain_model_semester',
                'foreign_table_where' => 'AND 1=1 ORDER BY title DESC',
                'items' => [
                    [
                        0 => $ll .'select',0,
                    ]
                ],
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],
            
        ],
        'students' => [
            'exclude' => true,
            'label' => $ll . 'students',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'fe_users',
                'foreign_table_where' => (isset($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['project']['userGroupStudentsUid'])) ? ' AND fe_users.usergroup LIKE "%' . (int)$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['project']['userGroupStudentsUid'] . '%" ORDER BY fe_users.name' : ' ORDER BY fe_users.name',
                'MM' => 'tx_project_domain_model_students_mm',
                'size' => 5,
                'minitems' => 0,
                'maxitems' => 10,
                'enableMultiSelectFilterTextfield' => TRUE,
            ],
        ],
        'lecturers' => [
            'exclude' => true,
            'label' => $ll . 'lecturers',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'fe_users',
                'foreign_table_where' => (isset($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['project']['userGroupLecturesUid'])) ? ' AND fe_users.usergroup LIKE "%' . (int)$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['project']['userGroupLecturesUid'] . '%" ORDER BY fe_users.name' : ' ORDER BY fe_users.name',
                'MM' => 'tx_project_domain_model_lecturers_mm',
                'size' => 5,
                'minitems' => 0,
                'maxitems' => 10,
                'enableMultiSelectFilterTextfield' => TRUE,
            ],
        ],
    
    ],
];

return $tx_project_domain_model_project;