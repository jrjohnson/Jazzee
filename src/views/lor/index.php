<?php 
/**
 * lor index view
 * @author Jon Johnson <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license.txt
 * @package jazzee
 * @subpackage lor
 */
?>
<div id='leadingText'><?php print $page->getLeadingText() ?></div>
<?php $this->renderElement('form', array('form'=> $form));?>
<div id='trailingText'><?php print $page->getTrailingText() ?></div>