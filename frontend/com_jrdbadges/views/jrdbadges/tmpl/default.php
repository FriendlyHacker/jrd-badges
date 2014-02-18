<?php
 /**
 * default.php
 *
 * @package    Joomla
 * @subpackage jrd-badges
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 2/16/14.7:57 PM
 */

$user = JFactory::getUser();

// no link
$directory_link = "#";

if (! $user->guest) {
    // set to zoo author link if logged in
    $directory_link = JUri::root() . $this->zooItemLink;
}

?>
<h1>Joomla Resource Directory Badges</h1>

    <?php if ($user->guest): ?>
        <div class="alert alert-warning">
            <p>
                These are badges that can be used by Joomla Resource Directory Members.
                Log into view your customized embed code.
            </p>
        </div>
    <?php else: ?>
        <div class="alert alert-warning">
            <p>
                These are badges that can be used by Joomla Resource Directory Members.
                Your embed code is customized to go directly to your profile in our directory.
                Please do not modify or change the emebd code in any way.
            </p>
        </div>
    <?php endif; ?>

    <?php foreach ($this->items as $item): ?>
        <h3><?php echo $item->title; ?></h3>

        <div class="badge-row">
            <div class="span6">
                <a href="<?php echo $directory_link; ?>" target="_blank">
                    <img src="<?php echo $item->badge; ?>" alt="Visit my profile on the Joomla! Resources Directory" />
                </a>
            </div>
            <div class="span6">
                <div class="code well well-small">
                   <?php echo "<pre>" . htmlentities('<a href="' . $directory_link .  '"><img src="' . $item->badge . '" /></a>') . "</pre>"; ?>

                    Copy and paste this code to your site
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr />
    <?php endforeach; ?>
