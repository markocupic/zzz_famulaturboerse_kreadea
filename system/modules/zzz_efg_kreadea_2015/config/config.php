<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   Efg
 * @author    Thomas Kuhn <mail@th-kuhn.de>
 * @license   http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 * @copyright Thomas Kuhn 2007-2014
 */

$GLOBALS['FE_MOD']['application']['formdatalisting'] =  'ModuleFormdataListingKreadea2015';

// Hooks
$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array('MCupic\Hooks', 'outputFrontendTemplate');


// Open geo db
$GLOBALS['open_geo_db']['host'] = 'localhost';
$GLOBALS['open_geo_db']['user'] = 'joe_geo';
$GLOBALS['open_geo_db']['password'] = 'Niql779@_123';
$GLOBALS['open_geo_db']['database'] = 'debank_geo';
