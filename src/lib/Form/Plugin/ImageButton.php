<?php
/**
 * Copyright Zikula Foundation 2009 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv2.1 (or at your option, any later version).
 * @package Form
 * @subpackage Form_Plugin
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
class Form_Plugin_ImageButton extends Form_Plugin_Button
{
    /**
     * Image URL
     * The URL pointing to the image for the button.
     * @var string
     */
    public $imageUrl;

    function getFilename()
    {
        return __FILE__; // FIXME: may be found in smarty's data???
    }

    function render(&$render)
    {
        $idHtml = $this->getIdHtml();

        $fullName = $this->id . '_' . $this->commandName;

        $onclickHtml = '';
        if ($this->confirmMessage != null) {
            $msg = $render->translateForDisplay($this->confirmMessage) . '?';
            $onclickHtml = " onclick=\"return confirm('$msg');\"";
        }

        $text = $render->translateForDisplay($this->text);
        $imageUrl = $this->imageUrl;

        $attributes = $this->renderAttributes($render);

        $result = "<input type=\"image\" name=\"$fullName\" title=\"$text\" alt=\"$text\" value=\"$text\" src=\"$imageUrl\"$onclickHtml{$attributes}/>";

        return $result;
    }

    function decodePostBackEvent(&$render)
    {
        $fullNameX = $this->id . '_' . $this->commandName . '_x';
        $fullNameY = $this->id . '_' . $this->commandName . '_y';

        if (isset($_POST[$fullNameX])) {
            $args = array(
                'commandName' => $this->commandName,
                'commandArgument' => $this->commandArgument,
                'posX' => (int) $_POST[$fullNameX],
                'posY' => (int) $_POST[$fullNameY]);
            if (!empty($this->onCommand))
                if ($render->raiseEvent($this->onCommand, $args) === false) {
                    return false;
                }
        }

        return true;
    }
}

