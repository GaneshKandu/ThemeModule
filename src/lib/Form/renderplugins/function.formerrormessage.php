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
 * Error message placeholder
 *
 * Use this plugin to display error messages. It should be added in your template in the exact location where
 * you want the error message to be displayed. Then, on postback, you can do as shown here to set the
 * error message:
 * <code>
 *  function handleCommand(&$render, &$args)
 *  {
 *    if ($args['commandName'] == 'update')
 *    {
 *      if (!$render->isValid())
 *        return false;
 *
 *      $data = $render->getValues();
 *      if (... something is wrong ...)
 *      {
 *        $errorPlugin = $render->getPluginById('MyPluginId');
 *        $errorPlugin->message = 'Something happend';
 *        return false;
 *      }
 *
 *      ... handle data ...
 *    }
 *
 *    return true;
 *  }
 * </code>
 * Beware that {@link pnFormRender::pnFormGetPluginById()} only works on postback.
 *
 * @package pnForm
 * @subpackage Plugins
*/
function smarty_function_formerrormessage($params, &$render)
{
    return $render->registerPlugin('Form_Plugin_ErrorMessage', $params);
}
