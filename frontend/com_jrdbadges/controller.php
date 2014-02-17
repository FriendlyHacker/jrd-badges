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

defined('_JEXEC') or die;

class JrdbadgesController extends JControllerLegacy
{

    protected $defaultView = 'jrdbeta';

    public function __construct($config = array())
    {
        $this->input = JFactory::getApplication()->input;
        parent::__construct($config);
    }
    public function display($cachable = false, $urlparams = false)
    {
        parent::display($cachable, $urlparams);

        return $this;
    }
}