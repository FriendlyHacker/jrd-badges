<?php
 /**
 * controller.php
 *
 * @package    Joomla
 * @subpackage jrd-badges
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 2/16/14.8:04 PM
 */


defined('_JEXEC') or die;

class JrdbadgesController extends JControllerLegacy
{
    /**
     * @var		string	The default view.
     * @since   1.6
     */
    protected $default_view = 'jrdbadges';

    /**
     * Method to display a view.
     *
     * @param   boolean			If true, the view output will be cached
     * @param   array  An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
     *
     * @return  JController		This object to support chaining.
     *
     * @since   1.5
     */
    public function display($cachable = false, $urlparams = false)
    {
        $view   = $this->input->get('view', 'articles');
        $layout = $this->input->get('layout', 'articles');
        $id     = $this->input->getInt('id');

        require_once JPATH_COMPONENT.'/helpers/jrdbadges.php';

        parent::display();

        return $this;
    }

}