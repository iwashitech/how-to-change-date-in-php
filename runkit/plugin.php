<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.datemock.php
 * Type:     function
 * Name:     datemock
 * Purpose:  時間を固定する
 * -------------------------------------------------------------
 */
function smarty_function_datemock($params, $template)
{
    if (!empty($params['date'])) {
        try {
            define('MOCK_DATE', $params['date']);
            define('MOCK_TIME', '00:00:00');
            define('MOCK_DATETIME', MOCK_DATE.' '.MOCK_TIME);

            runkit_function_copy('date', 'date_real');
            runkit_function_redefine('date','$format="Y-m-d H:i:s", $timestamp=NULL', '$ts = $timestamp ? $timestamp : strtotime(MOCK_DATETIME); return date_real($format, $ts);');

            runkit_function_copy('strtotime', 'strtotime_real');
            runkit_function_redefine('strtotime', '$a, $b=null', 'return strtotime_real($a, $b ? $b : strtotime_real(date_real("Y-m-d H:i:s", time())));');

            runkit_function_redefine('time', '', 'return strtotime_real(MOCK_DATETIME);');
        } catch ( Exception $ex ) {
            return;
        }
    }
    return;
}