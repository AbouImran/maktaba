<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="<?php print $container_class; ?>">
    <div class="navbar-header">
      <?php if ($logo): ?>
        <a class="logo flip navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
        <div class="social-icons">
          <ul class="list-inline ">
            <li><a href="http://bit.ly/1dTnfr9" title="تطبيق الاندرويد " target="_blank"><i class="fa fa-android"></i></a></li>
            <li><a href="http://bit.ly/miraathios" title="تطبيق ابل"><i class="fa fa-apple"></i></a></li>
            <li><a href="https://twitter.com/miraathnet" title="Twitter"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="https://www.facebook.com/admin.ar.miraath" title="Facebook"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="https://www.youtube.com/user/MiraathNet" title="Youtube"><i class="fa fa-youtube-square"></i></a></li>
          </ul>
        </div>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse" id="navbar-collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
  <div class="ticker-wrapper">
    <div class="row">
      <div class="col-sm-2">
        <h3>جديد الموقع</h3>
      </div>
      <div class="col-sm-10">
        <?php print $recent_content_ticker; ?>
      </div>
    </div>
  </div>
</header>

<div class="main-container <?php print $container_class; ?>">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php
      if(drupal_is_front_page()){
        require(drupal_get_path('theme', 'mir').'/templates/system/front-content.tpl.php');
      }
      ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>

<?php if (!empty($page['footer'])): ?>
  <footer class="footer <?php print $container_class; ?>">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>
<div class="sticky-bottom">
  <div id="jquery_jplayer_1" class="jp-jplayer light webPlayer"></div>
  <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
    <div class="jp-type-single">
      <div class="jp-gui jp-interface">
        <div class="jp-controls">
          <button class="jp-play" role="button" tabindex="0">play</button>
          <button class="jp-stop" role="button" tabindex="0">stop</button>
        </div>
        <div class="jp-progress">
          <div class="jp-seek-bar">
            <div class="jp-play-bar"></div>
          </div>
        </div>
        <div class="jp-volume-controls">
          <button class="jp-mute" role="button" tabindex="0">mute</button>
          <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
          <div class="jp-volume-bar">
            <div class="jp-volume-bar-value"></div>
          </div>
        </div>
        <div class="jp-time-holder">
          <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
          <div class="jp-toggles">
            <button class="jp-repeat" role="button" tabindex="0">repeat</button>
          </div>
          <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
        </div>
      </div>
      <div class="jp-details">
        <div class="jp-title" aria-label="title">&nbsp;</div>
      </div>
      <div class="jp-no-solution">
        <span>Update Required</span>
        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
      </div>
    </div>
  </div>
</div>

