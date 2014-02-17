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
        $this->items = $this->get('Items');
        $this->zooItemLink = $this->get('zooItemLink');

        parent::display($tpl);
    }
}