<?php
 /**
 * jrdbadge.php
 *
 * @package    Joomla
 * @subpackage jrd-badges
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 2/16/14.8:13 PM
 */

defined('_JEXEC') or die;

/*
**
* Item Model for an Article.
 *
 * @package     Joomla.Administrator
* @subpackage  com_content
* @since       1.6
*/
class JrdbadgesModelJrdbadge extends JModelAdmin
{
    /**
     * @var        string    The prefix to use with controller messages.
     * @since   1.6
     */
    protected $text_prefix = 'COM_JRDBADGES';

    /**
     * The type alias for this content type (for example, 'com_content.article').
     *
     * @var      string
     * @since    3.2
     */
    public $typeAlias = 'jrdbadges.jrdbadge';

    /**
     * Returns a Table object, always creating it.
     *
     * @param   type      The table type to instantiate
     * @param   string    A prefix for the table class name. Optional.
     * @param   array     Configuration array for model. Optional.
     *
     * @return  JTable    A database object
     */
    public function getTable($type = 'Jrdbadge', $prefix = 'JrdbadgeTable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    /**
     * Method to get a single record.
     *
     * @param   integer    The id of the primary key.
     *
     * @return  mixed  Object on success, false on failure.
     */
    public function getItem($pk = null)
    {
        $item = parent::getItem($pk);

        return $item;
    }

    /**
     * Method to get the record form.
     *
     * @param   array      $data        Data for the form.
     * @param   boolean    $loadData    True if the form is to load its own data (default case), false if not.
     *
     * @return  mixed  A JForm object on success, false on failure
     * @since   1.6
     */
    public function getForm($data = array(), $loadData = true)
    {
        // Get the form.
        $form = $this->loadForm('jrdbadges.jrdbadge', 'jrdbadge', array('control' => 'jform', 'load_data' => $loadData));
        if (empty($form))
        {
            return false;
        }
        $jinput = JFactory::getApplication()->input;

        return $form;
    }
    /**
     * Method to get the data that should be injected in the form.
     *
     * @return  mixed  The data for the form.
     * @since   1.6
     */
    protected function loadFormData()
    {
        if (empty($data))
        {
            $data = $this->getItem();
        }
        return $data;
    }

    /**
     * Method to save the form data.
     *
     * @param   array  The form data.
     *
     * @return  boolean  True on success.
     * @since   1.6
     */
    public function save($data)
    {
        if (parent::save($data))
        {
            return true;
        }

        return false;
    }

    /**
     * Stock method to auto-populate the model state.
     *
     * @return  void
     *
     * @since   12.2
     */
    protected function populateState()
    {
        $table = $this->getTable();

        $key = $table->getKeyName();

        // Get the pk of the record from the request.
        $pk = JFactory::getApplication()->input->getInt($key);
        $this->setState($this->getName() . '.id', $pk);
    }

    /**
     * Prepare and sanitise the table prior to saving.
     *
     * @param   JTable    $table
     *
     * @return  void
     * @since   1.6
     */
    protected function prepareTable($table)
    {
        $date = JFactory::getDate();
        $user = JFactory::getUser();

        $table->alias = JApplication::stringURLSafe($table->alias);

        if (empty($table->alias))
        {
            $table->alias = JApplication::stringURLSafe($table->name);
        }
        if (empty($table->id))
        {
            // Set the values
            $table->created = $date->toSql();
        }
        else
        {
            // Set the values
            $table->modified = $date->toSql();
            $table->modified_by = $user->get('id');
        }
    }
}
