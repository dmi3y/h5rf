<?php
defined('_JEXEC') or die;
/* Force MooTools */
//JHTML::_('behavior.mootools');
$app = JFactory::getApplication();
//fix for base tag
$this->base = JURI::base();
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
    <head>
        <jdoc:include type="head" />
        <link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
        <!--[if IE 7]>
                <link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/ie7.css" type="text/css" />
        <![endif]-->
        <!--[if IE 8]>
                <link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/ie8.css" type="text/css" />
        <![endif]-->
        <?php if($this->direction == 'rtl') : ?>
                <link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template-rtl.css" type="text/css" />
        <?php endif; ?>
        <link rel="stylesheet" href="templates/system/css/general.css" type="text/css" />
        <link rel="stylesheet" href="templates/system/css/system.css" type="text/css" />
        <!-- Fun with modernizr library-->
        <!--<script type="text/javascript" src="http://www.modernizr.com/downloads/modernizr-2.0.6.js"></script>-->
        <!-- Love jQuery -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.min.js"></script>
        <script type="text/javascript">jQuery.noConflict();</script>
        <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jquery-template.js"></script>
        <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
        <div class="wrp">
            <?php if ($this->countModules('topright')): ?>
                <div class="h5rf-topright f-right">
                    <jdoc:include type="modules" name="topright" style="xhtml" />
                </div>
            <?php endif; ?>
            <div class="h5rf-logo f-left">
                    <h1>
                        <a class=" make-c3fun norm" href="<?php echo JURI::base() ?>" title="<?php echo $app->getCfg('sitename'); ?>">H5RF</a>
                    </h1>
            </div>
         <div class="clr"></div>
         </div>
       </header>
        <?php if ($this->countModules('mainmenu')): ?>
            <nav class="h5rf-mainmenu">
                <div class="wrp">
                    <jdoc:include type="modules" name="mainmenu" />

                </div>
                <div class="clr"></div>
            </nav>
        <?php endif; ?>
        <div class="h5rf-content">
            <div class="wrp">
                <?php if ($this->countModules('top')): ?>
                    <div class="h5rf-top">
                            <jdoc:include type="modules" name="top" style="xhtml" />
                    </div>
                    <div class="clr"></div>
                <?php endif; ?>
                <jdoc:include type="message" />
                <div class="clr"></div>
                <?php if ($this->countModules('left')): ?>
                <aside class="h5rf-left f-left">
                    <jdoc:include type="modules" name="left" style="xhtml" />
                </aside>
                <?php endif; ?>
                <div class="h5rf-component<?php
                    echo $this->countModules('left')? ' h5rf-loffset':''
                ?>">
                    <jdoc:include type="component" />
                </div>
                <div class="clr"></div>
                <?php if ($this->countModules('bottom')): ?>
                    <div class="h5rf-bottom">
                            <jdoc:include type="modules" name="bottom" style="xhtml" />
                    </div>
                    <div class="clr"></div>
                <?php endif; ?>
            </div>
        </div>
        <footer>
            <?php if ($this->countModules('breadcrumbs')): ?>
                    <div class="h5rf-breadcrumbs">
                            <jdoc:include type="modules" name="breadcrumbs" />
                    </div>
                    <div class="clr"></div>
            <?php endif; ?>
            <div class="h5rf-footer ta-center">
                    <?php if ($this->countModules('footer')): ?>
                            <jdoc:include type="modules" name="footer" style="xhtml" />
                    <?php else: ?>
                            <span class="h5rf-copy"><?php echo $app->getCfg('sitename'); ?>&nbsp;&copy;&nbsp;<?php echo date('Y'); ?></span>
                    <?php endif; ?>
            </div>
        </footer>
    </body>
</html>
