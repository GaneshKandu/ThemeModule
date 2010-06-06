<?php
/**
 * Copyright Zikula Foundation 2009 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv2.1 (or at your option, any later version).
 * @package Zikula
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

/**
 * selector_countries: generate a country list selector
 * @param = "name" = The name of the selector tag
 * @param = "selectedValue" = The currently selected value
 * @param = "defaultValue" = The default value (only used if no selectedValue is supplied)
 * @param = "defaultText" = Text to go with the default value
 */
function smarty_function_selector_countries($params, &$smarty)
{
    $allValue         = isset($params['allValue'])         ? $params['allValue']         : 0;
    $allText          = isset($params['allText'])          ? $params['allText']          : '';
    $defaultValue     = isset($params['defaultValue'])     ? $params['defaultValue']     : 0;
    $defaultText      = isset($params['defaultText'])      ? $params['defaultText']      : '';
    $disabled         = isset($params['disabled'])         ? $params['disable']          : false;
    $multipleSize     = isset($params['multipleSize'])     ? $params['multipleSize']     : 1;
    $name             = isset($params['name'])             ? $params['name']             : 'defautlselectorname';
    $selectedValue    = isset($params['selectedValue'])    ? $params['selectedValue']    : 0;
    $submit           = isset($params['submit'])           ? $params['submit']           : false;

    return HtmlUtil::getSelector_Countries ($name, $selectedValue, $defaultValue, $defaultText, $allValue, $allText, $submit, $disabled, $multipleSize);
}
