<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=page.edit.delete.done
[END_COT_EXT]
==================== */

/**
 * Removes category translations
 *
 * @package i18n
 * @version 0.9.4
 * @author Cotonti Team
 * @copyright Copyright (c) Cotonti Team 2010-2012
 * @license BSD License
 */

defined('COT_CODE') or die('Wrong URL');

$db->delete($db_i18n_pages, "ipage_id = ?", array($id));

?>
