<?php
 /**
 * jrdbadges.php
 *
 * @package    Joomla
 * @subpackage jrd-badges
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 2/16/14.9:45 PM
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
        $query->select('a.*, b.title as cat_title, b.id as cat_id');
        $query->from('#__jrdbadges AS a');
        $query->leftJoin('#__categories as b on b.id = a.catid');

        return $query;
    }
}