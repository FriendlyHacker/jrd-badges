<?php
 /**
 * jrdbadges.php
 *
 * @package    Joomla
 * @subpackage jrd-badges
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 2/16/14.10:00 PM
 */


defined('_JEXEC') or die;

class JrdbadgesModelJrdbadges extends JModelList
{
    /**
     * Constructor.
     *
     * @param   array  $config  An optional associative array of configuration settings.
     *
     * @see     JController
     * @since   1.6
     */
    public function __construct($config = array())
    {
        parent::__construct($config);
    }

    /**
     * Build an SQL query to load the list data.
     *
     * @return  JDatabaseQuery
     * @since   1.6
     */
    protected function getListQuery()
    {
        // Create a new query object.
        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $user = JFactory::getUser();
        $app = JFactory::getApplication();

        // Select the required fields from the table.
        $query->select('*');
        $query->from('#__jrdbadges AS a');
        $query->where('state=1'); // only published listings

        return $query;
    }

    public function getZooItemLink()
    {
        $user = JFactory::getUser();
        $user_id = $user->get('id');

        $db = $this->getDbo();

        $query = $db->getQuery(true);
        $query->select('id', 'application_id', 'type', 'created_by', 'state');
        $query->from('#__zoo_item');
        $query->where('created_by= ' . $user_id);

        $db->setQuery($query);

        $zooItemLink = $db->loadObject();

        // return the full link
        return 'index.php?option=com_zoo&task=item&item_id=' . $zooItemLink->id;
    }
}