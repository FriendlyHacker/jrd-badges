<?php
 /**
 * jrdbadges.php
 *
 * @package    Joomla
 * @subpackage jrd-badges
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 2/17/14.9:49 PM
 */

defined('_JEXEC') or die;

/**
 * Articles list controller class.
 *
 * @package     Joomla.Administrator
 * @subpackage  com_contact
 * @since       1.6
 */
class JrdbadgesControllerJrdbadges extends JControllerAdmin
{
    /**
     * Constructor.
     *
     * @param   array  $config	An optional associative array of configuration settings.
     *
     * @return  ContactControllerContacts
     * @see     JController
     * @since   1.6
     */
    public function __construct($config = array())
    {
        parent::__construct($config);
    }

    /**
     * Proxy for getModel.
     *
     * @param   string	$name	The name of the model.
     * @param   string	$prefix	The prefix for the PHP class name.
     *
     * @return  JModel
     * @since   1.6
     */
    public function getModel($name = 'Jrdbadge', $prefix = 'JrdbadgesModel', $config = array('ignore_request' => true))
    {
        $model = parent::getModel($name, $prefix, $config);

        return $model;
    }
}