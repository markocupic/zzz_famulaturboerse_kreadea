<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Efg',
	'MCupic',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'Efg\ModuleFormdataListingKreadea2015' => 'system/modules/zzz_efg_kreadea_2015/modules/ModuleFormdataListingKreadea2015.php',

	// Classes
	'MCupic\Hooks'                         => 'system/modules/zzz_efg_kreadea_2015/classes/Hooks.php',
));
