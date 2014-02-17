<?php
 /**
 * controller.php
 *
 * @package    Joomla
 * @subpackage jrd-badges
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 2/16/14.7:44 PM
 */


class JrdbadgesController extends JControllerLegacy
{
    public function __construct($config = array())
    {
        $this->input = JFactory::getApplication()->input;
        parent::__construct($config);
    }
}