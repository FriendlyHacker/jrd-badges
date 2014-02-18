<?php
 /**
 * view.html.php
 *
 * @package    Joomla
 * @subpackage jrd-badges
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 2/16/14.8:38 PM
 */

class JrdbadgesViewJrdbadge extends JViewLegacy
{

    protected $form;

    protected $item;
    /**
     * Display the view
     */
    public function display($tpl = null)
    {
        $this->form		= $this->get('Form');
        $this->item		= $this->get('Item');

        $this->addToolbar();
        parent::display($tpl);
    }
    /**
     * Add the page title and toolbar.
     *
     * @since   1.6
     */
    protected function addToolbar()
    {
        $user		= JFactory::getUser();
        $userId		= $user->get('id');
        $isNew		= ($this->item->id == 0);

        // For new records, check the create permission.
        JToolbarHelper::apply('jrdbadge.apply');
        JToolbarHelper::save('jrdbadge.save');
        JToolbarHelper::cancel('jrdbadge.cancel');

    }
}