<?php
if ($_CMS['addons_bj_tbk']) {
    bj_tbk_reg_member($openid, $oldsessionid);
}
if (CUSTOM_VERSION == true && is_file(CUSTOM_ROOT . '/common/extends/class/shopwap/class/mobile/regedit_1.php')) {
    require (CUSTOM_ROOT . '/common/extends/class/shopwap/class/mobile/regedit_1.php');
}