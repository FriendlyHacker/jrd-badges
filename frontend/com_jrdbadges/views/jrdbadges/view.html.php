<?php
 /**
 * view.html.php
 *
 * @package    Joomla
 * @subpackage jrd-badges
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 2/16/14.7:55 PM
 */

defined('_JEXEC') or die;


class JrdbadgesViewJrdbadges extends JViewLegacy
{

    // list of badges
    protected $items;

    // zoo author link
    protected $zooItemLink;

    public function display($tpl = null)
    {
        // get user object from factory
        $user = JFactory::getUser();

        // get the items model
        $this->items = $this->get('Items');

        // default to example
        $this->zooItemLink = "#";

        // if not guest set to our zoo link
        if (! $user->guest) {
            $this->zooItemLink = JUri::root() . $this->get('zooItemLink');
        }

        parent::display($tpl);
    }
}