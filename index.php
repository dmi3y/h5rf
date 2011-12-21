<?php
defined('_JEXEC') or die;
/* Force MooTools */
//JHTML::_('behavior.mootools');
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo JURI::base() ?>templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
		<!--[if IE 7]>
			<link rel="stylesheet" href="<?php echo JURI::base() ?>templates/<?php echo $this->template ?>/css/ie7.css" type="text/css" />
		<![endif]-->
		<!--[if IE 8]>
			<link rel="stylesheet" href="<?php echo JURI::base() ?>templates/<?php echo $this->template ?>/css/ie8.css" type="text/css" />
		<![endif]-->
		<?php if($this->direction == 'rtl') : ?>
			<link rel="stylesheet" href="<?php echo JURI::base() ?>templates/<?php echo $this->template ?>/css/template-rtl.css" type="text/css" />
		<?php endif; ?>
		<link rel="stylesheet" href="<?php echo  JURI::base() ?>/templates/system/css/general.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo  JURI::base() ?>/templates/system/css/system.css" type="text/css" />
		<script type="text/javascript" src="http://www.modernizr.com/downloads/modernizr-2.0.6.js"></script>
		<!--<script type="text/javascript" src="<?php echo JURI::base() ?>templates/<?php echo $this->template ?>/js/jquery-1.6.3.min.js"></script>-->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.min.js"></script>
		<script type="text/javascript">jQuery.noConflict();</script>
		<script type="text/javascript" src="<?php echo JURI::base() ?>templates/<?php echo $this->template ?>/js/template.js"></script>
                <!--[if lt IE 9]>
                        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->
	</head>

	<body>
                <header>
                <div class="wrp">
                    <?php if ($this->countModules('topright')): ?>
                        <div class="we-topright f-right">
                            <jdoc:include type="modules" name="topright" style="xhtml" />
                        </div>
                    <?php endif; ?>
                    <div class="we-logo f-left">
                            <h1>
                                <a href="<?php echo JURI::base() ?>" title="<?php echo $app->getCfg('sitename'); ?>">
                                    &lt;W<span class="make-c3fun fast">eb</span>E<span class="make-c3fun fast">lements</span>&gt;
                                </a>
                            </h1>
                    </div>
                    <div class="we-note ta-center" id="we-nojs">
                        <span class="h3 d-inlblc">To have more fun please enable JavaScript in your browser!</span>
                    </div>
                    <script type="text/javascript">
                        jQuery('#we-nojs').addClass('hdn');
                    </script>
                    <div class="we-social ta-right">
                        <a href="https://plus.google.com/104106038255906666766" class="icon32 google-plus">google+</a>
                        <a href="http://www.linkedin.com/pub/dmitry-lapshukov/11/611/651" class="icon32 linkedin">linkedin</a>
                        <a href="https://twitter.com/lapshukov" class="icon32 twitter">twitter</a>
                    </div>
                    <div class="clr"></div>
                 </div>
               </header>
                <?php if ($this->countModules('mainmenu')): ?>
                    <nav class="we-mainmenu ta-center">
                        <jdoc:include type="modules" name="mainmenu" />
                        <div class="clr"></div>
                    </nav>
                <?php endif; ?>
                <div class="wrp">
                    <section class="we-content">
                            <jdoc:include type="message" />
                            <jdoc:include type="component" />
                            <div class="clr"></div>
                    </section>
                    <footer>
			<?php if ($this->countModules('breadcrumbs')): ?>
				<div class="we-breadcrumbs">
					<jdoc:include type="modules" name="breadcrumbs" />
				</div>
				<div class="clr"></div>
			<?php endif; ?>
			<?php if ($this->countModules('bottom')): ?>
				<div class="we-bottom">
					<jdoc:include type="modules" name="bottom" style="xhtml" />
				</div>
				<div class="clr"></div>
			<?php endif; ?>
			<?php if ($this->countModules('bottommenu')): ?>
				<div class="we-bottommenu">
					<jdoc:include type="modules" name="bottommenu" style="xhtml" />
				</div>
				<div class="clr"></div>
			<?php endif; ?>
			<?php if (false): ?>
                        <h3><?php echo JText::_('TPL_ZAGOTOVKA_ANNOYED_ADS') ?></h3>
                        <div class="we-adv">
                            <a href="http://my.dot.tk/cgi-bin/amb/landing.dottk?nr=433470::9931504::1::16" target="_new"> <img src="http://images.dot.tk/content/images/2411.png" border="0" /></a>
							<a href="https://developer.mozilla.org/docs/?WT.mc_id=mdn16" title="MDN is Developer Powered for Web docs, demos and more."><img src="https://developer.mozilla.org/media/img/promote/promobutton_mdn16.png" class="adv-mdn" alt="MDN is Developer Powered for Web docs, demos and more." /></a>
							<div class="clr"></div>
                        </div>
			<?php endif; ?>
			<div class="we-footer ta-center">
				<?php if ($this->countModules('footer')): ?>
					<jdoc:include type="modules" name="footer" style="xhtml" />
				<?php else: ?>
					<span class="small"><?php echo $app->getCfg('sitename'); ?>&nbsp;&copy;<?php echo date('Y'); ?></span>
				<?php endif; ?>
                                <div id="we-contacts">
                                    <div class="d-inlblc">
                                        <span class="h2 request" rel="contactform">
                                            <span class="request-button"><?php echo JText::_('TPL_ZAGOTOVKA_CONTACT') ?></span>
                                        </span>
                                        <?php echo JText::_('TPL_ZAGOTOVKA_OR') ?>
                                        <span class="contact-item">skype:<span class="contact-skype">
                                                <a href="skype:lapshukov_d?call">
                                                    <img width="16" height="16" alt="My status" style="border: none;" src="http://mystatus.skype.com/smallicon/lapshukov_d" />lapshukov_d</a>
                                        </span></span>
                                    </div>
                                </div>
			</div>
                    </footer>
		</div>
	</body>
</html>
