<?php
/**
 * Copyright Zikula Foundation 2009 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv2.1 (or at your option, any later version).
 * @package Form
 * @subpackage Template_Plugins
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */


/**
 * Image button
 * This button works like a normal {@link pnFormButton} with the exception
 * that it displays a clickable image instead of a text button. It further
 * more returns the X and Y coordinate of the click position in the image.
 *
 * The command event arguments contains four elements:
 * - commandName: command name
 * - commandArgument: command argument
 * - posX: X position of click
 * - posY: Y position of click
 */
function smarty_function_formimagebutton($params, &$render)
{
    return $render->registerPlugin('Form_Plugin_ImageButton', $params);
}
