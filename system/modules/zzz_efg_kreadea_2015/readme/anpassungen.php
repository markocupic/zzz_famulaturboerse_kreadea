<?php
/** Dokumentation der Anpassungen von Marko Cupic für Kreadea  */

/**
// Nicht updatesicher!!!
// In Zeile 577 von module/efg/classes/FormdataProcessor.php kommt noch folgender Code:
// Ermöglicht die Verwendung von Inserttags im Feld formattedMailRecipient
foreach($arrRecipient as $key => $recipient)
{
    if(strpos($recipient, '{{form::') !== false)
    {
        if(preg_match('/\{\{(.*)\}\}/', $recipient, $matches))
        {
            $pieces = explode('::', $matches[1]);
            if($arrToSave[$pieces[1]])
            {
                $arrRecipient[$key] = preg_replace('/\{\{(.*)\}\}/', $arrToSave[$pieces[1]], $recipient);
            }
        }
    }
}



// updatesichere Anpassungen:
// Anpassung der Feldgrössen in system/modules/zzz_efg_kreadea_2015/dca/tl_module.php:

$GLOBALS['TL_DCA']['tl_module']['fields']['list_info']['eval'] = array('maxlength'=>200000, 'tl_class'=>'w50" style="height:auto');
$GLOBALS['TL_DCA']['tl_module']['fields']['list_info']['sql'] = "mediumtext NULL";
$GLOBALS['TL_DCA']['tl_module']['fields']['list_search']['sql'] = "mediumtext NULL";
$GLOBALS['TL_DCA']['tl_module']['fields']['list_fields']['sql'] = "mediumtext NULL";



// updatesichere Anpassungen:
// Erweiterung des Efg-Listing-Moduls in system/modules/zzz_efg_kreadea_2015/modules/ModuleFormdataListingKreadea2015.php:
// Code siehe: system/modules/zzz_efg_kreadea_2015/modules/ModuleFormdataListingKreadea2015.php

// Einbau eines outputFrontendTemplateHooks für Conditional Content
 * 
*/