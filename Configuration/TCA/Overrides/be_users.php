<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

$tempColumnsBackend = [
	'tx_authenticator_secret' => [
		'exclude' => 0,
		'label' => 'LLL:EXT:authenticator/Resources/Private/Language/locallang_db.xlf:be_users.tx_authenticator_secret',
		'config' => [
			'type' => 'passthrough',
		],
	],
	'tx_authenticator_enabled' => [
		'label' => 'LLL:EXT:authenticator/Resources/Private/Language/locallang_db.xlf:be_users.tx_authenticator_enabled',
		'config' => [
			'type' => 'check',
			'items' => [
				[
					'LLL:EXT:authenticator/Resources/Private/Language/locallang_db.xlf:be_users.tx_authenticator_enabled_item',
					0,
				],
			],
			'default' => 0,
		],
	],
];

ExtensionManagementUtility::addTCAcolumns('be_users', $tempColumnsBackend);
ExtensionManagementUtility::addToAllTCAtypes('be_users', 'tx_authenticator_enabled');
