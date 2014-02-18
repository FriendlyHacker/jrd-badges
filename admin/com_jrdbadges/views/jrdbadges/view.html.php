<?php
 /**
 * view.html.php
 *
 * @package    Joomla
 * @subpackage jrd-badges
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 2/16/14.8:06 PM
 */

class JrdbadgesViewJrdbadges extends JViewLegacy
{
    protected $items;
    public function display($tpl = null)
    {
        $this->items         = $this->get('Items');

        $this->addToolbar();
        $this->sidebar = JHtmlSidebar::render();

        parent::display($tpl);
    }

    /**
     * Add the page title and toolbar.
     *
     * @return  void
     *
     * @since   1.6
     */
    protected function addToolbar()
    {
        $user  = JFactory::getUser();

        // Get the toolbar object instance
        $bar = JToolBar::getInstance('toolbar');

        JToolbarHelper::addNew('jrdbadge.add');
        JToolbarHelper::editList('jrdbadge.edit');
        JToolbarHelper::publishList();
        JToolbarHelper::unpublishList();

    }
}