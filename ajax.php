<?php
defined('_JEXEC') or die;
$req = JRequest::getVar('HTTP_X_REQUESTED_WITH', '', 'SERVER');
if ($req != 'XMLHttpRequest') die( 'Restricted access' );//access only ajax with accordingly headers
?>
<div id="we-ajax">
    <jdoc:include type="modules" name="ajax1" />
</div>