<?php
/**
 * @version		$Id: default.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	mod_stats
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<ul class="check<?php echo $moduleclass_sfx ?>">
<?php foreach ($list as $item) : ?>
	<li><?php echo $item->title;?> : <?php echo $item->data;?></li>
	<?php endforeach; ?>
</ul>

