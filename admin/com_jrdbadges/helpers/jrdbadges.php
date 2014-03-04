<?php
 /**
 * jrdbadges.php
 *
 * @package    Joomla
 * @subpackage jrd-badges
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 3/3/14.9:11 PM
 */


class JrdbadgesHelper extends JHelperContent
{
    public static function addSubmenu($vName)
    {
        JHtmlSidebar::addEntry(
            JText::_('COM_JRDBADGES_SUBMENU_BADGES'),
            'index.php?option=com_jrdbadges&view=jrdbadges',
            $vName == 'jrdbadges'
        );

        JHtmlSidebar::addEntry(
            JText::_('COM_JRDBADGES_SUBMENU_CATEGORIES'),
            'index.php?option=com_categories&extension=com_jrdbadges',
            $vName == 'categories'
        );
    }

}