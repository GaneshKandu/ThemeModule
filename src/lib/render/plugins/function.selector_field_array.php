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

/** ----------------------------------------------------------------------
 * @package Zikula_Template_Plugins
 * @subpackage Functions
 */
function smarty_function_selector_field_array ($params, &$smarty)
{
    $selectedValue = isset($params['selectedValue']) ? $params['selectedValue'] : 0;
    $allText       = isset($params['allText'])       ? $params['allText']       : '';
    $allValue      = isset($params['allValue'])      ? $params['allValue']      : 0;
    $defaultText   = isset($params['defaultText'])   ? $params['defaultText']   : '';
    $defaultValue  = isset($params['defaultValue'])  ? $params['defaultValue']  : 0;
    $selectedValue = isset($params['selectedValue']) ? $params['selectedValue'] : '';
    $field         = isset($params['field'])         ? $params['field']         : 'id';
    $modname       = isset($params['modname'])       ? $params['modname']       : '';
    $name          = isset($params['name'])          ? $params['name']          : '';
    $table         = isset($params['table'])         ? $params['table']         : '';
    $where         = isset($params['where'])         ? $params['where']         : '';
    $sort          = isset($params['sort'])          ? $params['sort']          : '';
    $submit        = isset($params['submit'])        ? $params['submit']        : 0;
    $distinct      = isset($params['distinct'])      ? $params['distinct']      : 0;
    $assocKey      = isset($params['assocKey'])      ? $params['assocKey']      : '';
    $disabled      = isset($params['disabled'])      ? $params['disabled']      : 0;
    $truncate      = isset($params['truncate'])      ? $params['truncate']      : 0;
    $multipleSize  = isset($params['multipleSize'])  ? $params['multipleSize']  : 1;

    return HtmlUtil::getSelector_FieldArray ($modname, $table, $name, $field, $where, $sort,
                                             $selectedValue, $defaultValue, $defaultText, $allValue, $allText, $assocKey,
                                             $distinct, $submit, $disabled, $truncate, $multipleSize);
}
