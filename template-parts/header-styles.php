<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: none;
  min-height: 112px;
}
.u-header .u-image-1 {
  width: 298px;
  height: 298px;
  margin: -77px auto 0 0;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-menu-1 {
  margin: -165px calc(((100% - 1140px) / 2)) 24px auto;
}
.u-header .u-nav-1 {
  font-size: 1rem;
  letter-spacing: normal;
}
.u-block-0faf-19 {
  font-size: 1rem;
}
.u-header .u-nav-2 {
  font-size: 1rem;
  letter-spacing: 0px;
}
.u-block-0faf-21 {
  font-size: 1rem;
}
@media (max-width: 1199px) {
  .u-header .u-image-1 {
    width: 298px;
    height: 298px;
  }
  .u-header .u-menu-1 {
    width: auto;
    margin-top: -165px;
    margin-right: calc(((100% - 940px) / 2));
  }
}
@media (max-width: 991px) {
  .u-header .u-menu-1 {
    margin-right: calc(((100% - 720px) / 2));
  }
}
@media (max-width: 767px) {
  .u-header .u-menu-1 {
    margin-right: calc(((100% - 540px) / 2));
  }
}
@media (max-width: 575px) {
  .u-header .u-menu-1 {
    margin-right: calc(((100% - 340px) / 2));
  }
}</style>
