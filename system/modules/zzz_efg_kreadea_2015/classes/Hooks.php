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


/**
 * Namespace
 */
namespace MCupic;

/**
 * Class Hooks
 * Anpassungen und Erweiterungen für Kreadea
 * Marko Cupic, Mai 2015
 * @copyright  Marko Cupic 2015
 * @author     TMarko Cupic <m.cupic@gmx.ch>
 */


class Hooks extends \System
{
    /**
     * @param $strContent
     * @param $strTemplate
     * @return mixed
     */
    public function outputFrontendTemplate($strContent, $strTemplate)
    {
        // Entfernt den Text oberhalb der Detailseite auf der Seite mit dem Alias angebotene-plaetze
        if ($strTemplate == 'fe_page')
        {
            if(\Input::get('details'))
            {
                $strContent = preg_replace('/<!-- Conditional Content ID 93 - Start -->(.*?)<!-- Conditional Content ID 93 - End -->/si', '', $strContent);
            }
            // Entferne die Conditional Content tags aus dem Quellcode
            $strContent = str_replace('<!-- Conditional Content ID 93 - Start -->', '', $strContent);
            $strContent = str_replace('<!-- Conditional Content ID 93 - End -->', '', $strContent);
        }

        // Backup, falls im Quelltext noch irgendwo auf das alte Dateiverzeichnis verlinkt wird, wird das hier korrigiert
        //$strContent = str_replace('tl_files', 'files', $strContent);


        return $strContent;
    }
}