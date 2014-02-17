<?php
 /**
 * default.php
 *
 * @package    Joomla
 * @subpackage jrd-badges
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 2/16/14.8:40 PM
 */

defined('_JEXEC') or die;

JHtml::_('behavior.formvalidation');
JHtml::_('behavior.keepalive');
JHtml::_('formbehavior.chosen', 'select');

$app = JFactory::getApplication();

$input = $app->input;

?>

<script type="text/javascript">
    Joomla.submitbutton = function(task)
    {
        if (task == 'jrdbadge.cancel' || document.formvalidator.isValid(document.id('item-form')))
        {
            Joomla.submitform(task, document.getElementById('item-form'));
        }
    }
</script>

<form action="<?php echo JRoute::_('index.php?option=com_jrdbadges&id=' . (int) $this->item->id); ?>" method="post" name="adminForm" id="item-form" class="form-validate">

    <div class="form-horizontal">
        <?php
        // Iterate through the fields and display them.
        foreach($this->form->getFieldset('jrdbadge') as $field):
            // If the field is hidden, just display the input.
            if ($field->hidden):
                echo $field->input;
            else:
                ?>
                <dt>
                    <?php echo $field->label; ?>
                </dt>
                <dd>
                    <?php echo $field->input; ?>
                </dd>
            <?php
            endif;
        endforeach;
        ?>

        <input type="hidden" name="task" value="" />
        <input type="hidden" name="return" value="<?php echo $input->getCmd('return'); ?>" />
        <?php echo JHtml::_('form.token'); ?>
    </div>
</form>