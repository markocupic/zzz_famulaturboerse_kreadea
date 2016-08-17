<?php
$GLOBALS['TL_DCA']['tl_formdata']['fields']['featured'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['featured'],
    'exclude'                 => true,
    'filter'                  => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);

