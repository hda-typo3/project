<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'Project-Plugin' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => 'EXT:project/Resources/Public/Icons/Extension.svg'
    ],
    'Project-LecturePlugin' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => 'EXT:project/Resources/Public/Icons/ExtensionLecture.svg'
    ],
    'Project-ListPlugin' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => 'EXT:project/Resources/Public/Icons/ExtensionList.svg'
    ],
];
