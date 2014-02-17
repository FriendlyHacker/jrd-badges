<?php
 /**
 * com_jrdbadges.php
 *
 * @package    Joomla
 * @subpackage jrd-badges
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 2/16/14.7:39 PM
 */


defined('_JEXEC') or die;
$controller = JControllerLegacy::getInstance('Jrdbadges');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
