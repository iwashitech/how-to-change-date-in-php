<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.datelocked.php
 * Type:     function
 * Name:     datelocked
 * Purpose:  時間を固定する
 * -------------------------------------------------------------
 */
function smarty_function_datelocked($params, $template)
{
    if (!empty($params['date'])) {
        try {
            timecop_freeze(new DateTime($params['date']));
        } catch ( Exception $ex ) {
            return;
        }
    }
    return;
}
