<?php
/**
 * Copyright Zikula Foundation 2009 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv2.1 (or at your option, any later version).
 * @package Render
 * @subpackage Template_Plugins
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

function smarty_function_selector_group ($params, &$smarty)
{
    $field            = isset($params['field'])            ? $params['field']            : 'uid';
    $selectedValue    = isset($params['selectedValue'])    ? $params['selectedValue']    : 0;
    $defaultValue     = isset($params['defaultValue'])     ? $params['defaultValue']     : 0;
    $defaultText      = isset($params['defaultText'])      ? $params['defaultText']      : '';
    $allValue         = isset($params['allValue'])         ? $params['allValue']         : 0;
    $allText          = isset($params['allText'])          ? $params['allText']          : '';
    $name             = isset($params['name'])             ? $params['name']             : 'defautlselectorname';
    $assign           = isset($params['assign'])           ? $params['assign']           : null;
    $submit           = isset($params['submit'])           ? $params['submit']           : false;
    $multipleSize     = isset($params['multipleSize'])     ? $params['multipleSize']     : 1;
    $disabled         = isset($params['disabled'])         ? $params['disabled']         : 0;

    $html = HtmlUtil::getSelector_PNGroup($name, $selectedValue, $defaultValue, $defaultText, $allValue, $allText, '', $submit, $disabled, $multipleSize);

    if ($assign) {
        $smarty->assign($assign, $html);
    } else {
        return $html;
    }
}
