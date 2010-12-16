<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=admin.structure.tags
Tags=admin.structure.tpl:{ADMIN_STRUCTURE_I18N_LINK}
[END_COT_EXT]
==================== */

/**
 * Locale selection
 *
 * @package i18n
 * @version 0.7.0
 * @author Trustmaster
 * @copyright Copyright (c) Cotonti Team 2010
 * @license BSD License
 */

defined('COT_CODE') or die('Wrong URL');

$t->assign('ADMIN_STRUCTURE_I18N_LINK', cot_rc_link(cot_url('plug', 'e=i18n&m=structure'), $L['i18n_structure']));

?>