<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=users.register.add.validate
[END_COT_EXT]
==================== */

defined('COT_CODE') or die('Wrong URL');

if (!empty($ruser['user_name']) && !preg_match("/^[a-zA-Z][_a-zA-Z0-9-]*$/i", $ruser['user_name'])) cot_error('aut_invalidloginchars', 'rusername');

?>