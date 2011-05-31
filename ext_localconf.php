<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_ohreference_category=1
');
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_ohreference_reference=1
');

t3lib_extMgm::addPItoST43($_EXTKEY, 'pi1/class.tx_ohreference_pi1.php', '_pi1', 'list_type', 1);


t3lib_extMgm::addTypoScript($_EXTKEY,'setup','
	tt_content.shortcut.20.0.conf.tx_ohreference_reference = < plugin.'.t3lib_extMgm::getCN($_EXTKEY).'_pi1
	tt_content.shortcut.20.0.conf.tx_ohreference_reference.CMD = singleView
',43);
?>