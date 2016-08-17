<?php

$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('\MCupic\KreadeaHelper2016','loadDataContainerHook');
$GLOBALS['TL_HOOKS']['executePreActions'][] = array('\MCupic\KreadeaHelper2016', 'executePreActions');

