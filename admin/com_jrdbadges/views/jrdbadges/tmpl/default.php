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
        <table class="table table-striped" id="badge-list">
            <thead>
                <tr>
                    <th width="1%" class="hidden-phone">
                        <?php echo JHtml::_('grid.checkall'); ?>
                    </th>
                    <th width="1%" style="min-width:55px" class="nowrap center">
                        <?php echo JHtml::_('grid.sort', 'JSTATUS', 'a.published'); ?>
                    </th>
                    <th>
                        <?php echo JText::_('JGLOBAL_TITLE'); ?>
                    </th>
                    <th>
                        <?php echo JText::_('PREVIEW'); ?>
                    </th>
                    <th width="1%" class="nowrap center hidden-phone">
                        <?php echo JText::_('JGRID_HEADING_ID'); ?>
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
                $n = count($this->items);
                foreach ($this->items as $i => $item) :
            ?>
                <tr class="row<?php echo $i % 2; ?>">
                    <td class="center hidden-phone">
                        <?php echo JHtml::_('grid.id', $i, $item->id); ?>
                    </td>
                    <td>
                        <?php echo JHtml::_('jgrid.published', $item->published, $i, 'jrdbadges.', true, 'cb'); ?>
                    </td>
                    <td>
                      <?php echo $this->escape($item->title);  ?>
                    </td>
                    <td>
                        <a data-toggle="modal" data-target="#badge-<?php echo $item->id; ?>">Preview</a>
                        <div class="modal fade" id="badge-<?php echo $item->id; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>Preview Badge</h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php if (strpos($item->badge, "http://")): ?>
                                            <img src="<?php echo $item->badge; ?>" />
                                        <?php else: ?>
                                            <img src="<?php echo JUri::root() . $item->badge; ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="center hidden-phone">
                        <?php echo $item->id; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

            <input type="hidden" name="task" value="" />
            <input type="hidden" name="boxchecked" value="0" />
            <?php echo JHtml::_('form.token'); ?>
    </div>
</form>