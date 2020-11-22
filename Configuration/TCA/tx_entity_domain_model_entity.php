<?php
return [
	'ctrl' => [
		'title' => 'LLL:EXT:entity/Resources/Private/Language/locallang_tca.xlf:tx_entity_domain_model_entity',
		'label' => 'title',
		'type' => 'tx_extbase_type',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',
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
		'searchFields' => 'title,slug',
		'iconfile' => 'EXT:entity/Resources/Public/Icons/tx_entity_domain_model_entity.gif'
	],
	'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, tx_extbase_type, hidden, title, slug',
	],
	'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, tx_extbase_type, hidden, title, slug, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
	],
	'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
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
				'foreign_table' => 'tx_entity_domain_model_entity',
				'foreign_table_where' => 'AND {#tx_entity_domain_model_entity}.{#pid}=###CURRENT_PID### AND {#tx_entity_domain_model_entity}.{#sys_language_uid} IN (-1,0)',
			],
		],
		'l10n_diffsource' => [
			'config' => [
				'type' => 'passthrough',
			],
		],
		't3ver_label' => [
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'max' => 255,
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
		'tx_extbase_type' => [
			'exclude' => true,
			'label'   => 'LLL:EXT:entity/Resources/Private/Language/locallang_tca.xlf:tx_entity_domain_model_entity.tx_extbase_type',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => [
					['',''],
				],
				'default' => '',
				'size' => 1,
				'maxitems' => 1,
			]
		],

		'title' => [
			'exclude' => true,
			'label' => 'LLL:EXT:entity/Resources/Private/Language/locallang_tca.xlf:tx_entity_domain_model_entity.title',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			],
		],
		'slug' => [
			'exclude' => true,
			'label' => 'LLL:EXT:entity/Resources/Private/Language/locallang_tca.xlf:tx_entity_domain_model_entity.slug',
			'config' => [
				'type' => 'slug',
				'generatorOptions' => [
					'fields' => ['title'],
					'prefixParentPageSlug' => true,
					'replacements' => [
						'/' => '',
					],
				],
//				'appearance' => [
//					'prefix' => \Vendor\Extension\UserFunctions\FormEngine\SlugPrefix::class . '->getPrefix'
//				],
				'fallbackCharacter' => '-',
				'eval' => 'uniqueInSite',
				'default' => ''
			],
		],

	],
];
