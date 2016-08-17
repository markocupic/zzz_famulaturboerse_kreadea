<?php
/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 16.08.2016
 * Time: 22:35
 */

namespace MCupic;


class KreadeaHelper2016 extends \Backend
{
    /**
     * DCA Anpassung fuer EFG fd_angebot
     * @param $strTable
     */
    public function loadDataContainerHook($strTable)
    {
        if ($strTable == 'tl_formdata' && \Input::get('do') == 'fd_angebot')
        {
            // Operations
            $GLOBALS['TL_DCA']['tl_formdata']['list']['operations']['feature'] = array(
                'label'           => &$GLOBALS['TL_LANG']['tl_formdata']['feature'],
                'icon'            => 'featured.gif',
                'attributes'      => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleFeatured(this,%s)"',
                'button_callback' => array('MCupic\KreadeaHelper2016', 'iconFeatured'),
            );

            // Palettes
            $GLOBALS['TL_DCA']['tl_formdata']['palettes']['default'] = 'featured,' . $GLOBALS['TL_DCA']['tl_formdata']['palettes']['default'];

            // Fields
            $GLOBALS['TL_DCA']['tl_formdata']['fields']['featured'] = array(
                'label'     => &$GLOBALS['TL_LANG']['tl_formdata']['featured'],
                'exclude'   => true,
                'filter'    => true,
                'inputType' => 'checkbox',
                'eval'      => array('tl_class' => 'clr'),
                'sql'       => "char(1) NOT NULL default ''",
            );
        }
    }

    /**
     * Return the "feature/unfeature element" button
     *
     * @param array $row
     * @param string $href
     * @param string $label
     * @param string $title
     * @param string $icon
     * @param string $attributes
     *
     * @return string
     */
    public function iconFeatured($row, $href, $label, $title, $icon, $attributes)
    {
        /** Scheint nicht auf Ajax-Anfragen zu reagieren. deshalb wird die Aufgabe executePreActions-Hook erledigt */
        if (strlen(\Input::post('toggleFeatured')))
        {
            //$this->toggleFeatured(Input::get('fid'), (Input::get('state') == 1), (@func_get_arg(12) ?: null));
            //$this->redirect($this->getReferer());
        }

        $href .= '&amp;fid=' . $row['id'] . '&amp;state=' . ($row['featured'] ? '' : 1);

        if (!$row['featured'])
        {
            $icon = 'featured_.gif';
        }

        return '<a href="' . $this->addToUrl($href) . '" title="' . specialchars($title) . '"' . $attributes . '>' . \Image::getHtml($icon, $label, 'data-state="' . ($row['featured'] ? 1 : 0) . '"') . '</a> ';
    }

    /**
     * executePreActions-Hook
     * toggleFeatured in efg fd_angebot
     * @param $strAction
     */
    public function executePreActions($strAction)
    {
        if ($strAction == 'toggleFeatured')
        {
            /**  Datensatz hervorheben  **/
            if (\Input::get('do') == 'fd_angebot')
            {
                if (\Input::post('action') == 'toggleFeatured')
                {
                    if (\Input::post('id') > 0)
                    {
                        $intId = \Input::post('id');
                        $blnFeatured = \Input::post('state') ? true: '';
                        // Update the database
                        \Database::getInstance()->prepare("UPDATE tl_formdata SET tstamp=" . time() . ", featured='" . $blnFeatured . "' WHERE id=?")->execute($intId);
                    }
                }
            }
        }
    }
}