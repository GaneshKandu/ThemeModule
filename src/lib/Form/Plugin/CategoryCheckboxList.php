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
 * Category selector
 *
 * This plugin creates a category selector using a series of checkboxes
 */
class Form_Plugin_CategoryCheckboxList extends Form_Plugin_CheckboxList
{
    public $editLink;
    public $category;

    function getFilename()
    {
        return __FILE__;
    }

    function load(&$render, $params)
    {
        pnFormCategorySelector::loadParameters($this, false, $params);
        parent::load($render, $params);
    }

    function render(&$render)
    {
        $result = parent::render($render);

        if ($this->editLink && !empty($this->category) && SecurityUtil::checkPermission('Categories::', "$this->category[id]::", ACCESS_EDIT)) {
            $url = DataUtil::formatForDisplay(ModUtil::url ('Categories', 'user', 'edit', array('dr' => $this->category['id'])));
            $result .= "<a class=\"z-formnote\" href=\"$url\">" . __('Edit') . '</a>';
        }

        return $result;
    }
}

