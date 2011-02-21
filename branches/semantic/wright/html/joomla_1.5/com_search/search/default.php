<?php // @version $Id: default.php 13 2010-11-05 16:28:16Z jeremy $
defined('_JEXEC') or die('Restricted access');
?>

<?php if($this->params->get('show_page_title',1)) : ?>
<h2 class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')) ?>">
	<?php echo $this->escape($this->params->get('page_title')) ?>
</h2>
<?php endif; ?>

<div id="page">

<?php if (!$this->error) :
	include(dirname(__FILE__).DS.'default_results.php');
else :
	include(dirname(__FILE__).DS.'default_error.php');
endif; ?>

<?php include(dirname(__FILE__).DS.'default_form.php'); ?>
</div>
