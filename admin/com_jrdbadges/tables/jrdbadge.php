<?php
 /**
 * jrdbadge.php
 *
 * @package    Joomla
 * @subpackage jrd-badges
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 2/16/14.9:20 PM
 */


defined('_JEXEC') or die;

/**
 * @package     Joomla.Administrator
 * @subpackage  com_contact
 */
class JrdbadgeTableJrdbadge extends JTable
{
    /**
     * Constructor
     *
     * @param   JDatabaseDriver  &$db  Database connector object
     *
     * @since   1.0
     */
    public function __construct(&$db)
    {
        parent::__construct('#__jrdbadges', 'id', $db);
    }

}