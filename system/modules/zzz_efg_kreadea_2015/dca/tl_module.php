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


/** Anpassungen des efg-Moduls für Kreadea von Marko Cupic, Mai 2015 */
// Feldgrösse  erweitern
$GLOBALS['TL_DCA']['tl_module']['fields']['list_info']['eval'] = array('maxlength'=>200000, 'tl_class'=>'w50" style="height:auto');
$GLOBALS['TL_DCA']['tl_module']['fields']['list_info']['sql'] = "mediumtext NULL";
$GLOBALS['TL_DCA']['tl_module']['fields']['list_search']['sql'] = "mediumtext NULL";
$GLOBALS['TL_DCA']['tl_module']['fields']['list_fields']['sql'] = "mediumtext NULL";

