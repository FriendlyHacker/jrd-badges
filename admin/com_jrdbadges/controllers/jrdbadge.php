<?php
 /**
 * jrdbadge.php
 *
 * @package    Joomla
 * @subpackage jrd-badges
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 2/16/14.8:34 PM
 */

defined('_JEXEC') or die;

class JrdbadgesControllerJrdbadge extends JControllerForm
{
    /*
    * Class constructor.
    *
    * @param   array  $config  A named array of configuration variables.
    *
    * @since   1.6
    */
    public function __construct($config = array())
    {
        parent::__construct($config);
    }
    /**
     * Method override to check if you can add a new record.
     *
     * @param   array  $data  An array of input data.
     *
     * @return  boolean
     *
     * @since   1.6
     */
    protected function allowAdd($data = array())
    {
        return true;
    }
}