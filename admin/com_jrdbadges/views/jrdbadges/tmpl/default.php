<?php
 /**
 * default.php
 *
 * @package    Joomla
 * @subpackage jrd-badges
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 2/16/14.8:07 PM
 */


JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('formbehavior.chosen', 'select');

?>

<form action="<?php echo JRoute::_('index.php?option=com_jrdbadges&view=jrdbadges'); ?>" method="post" name="adminForm" id="adminForm">
    <?php if (!empty( $this->sidebar)) : ?>
        <div id="j-sidebar-container" class="span2">
            <?php echo $this->sidebar; ?>
        </div>
        <div id="j-main-container" class="span10">
    <?php else : ?>
        <div id="j-main-container">
    <?php endif;?>

    <?php if (empty($this->items)) : ?>
        <div class="alert alert-no-items">
            <?php echo JText::_('JGLOBAL_NO_MATCHING_RESULTS'); ?>
        </div>
    <?php else : ?>

    <?php endif; ?>

        <input type="hidden" name="task" value="" />
        <input type="hidden" name="boxchecked" value="0" />
        <?php echo JHtml::_('form.token'); ?>
    </div>
</form>