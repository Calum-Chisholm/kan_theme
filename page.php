<?php
    get_header(); ?>

    <?php
    while(have_posts()){
        the_post(); ?>
        
   <header class="site-header">
    <div class="container" id="">
      <h1 class="school-logo-text float-left"><a href="#"><strong>Kannon</strong> Education</a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li class="current-menu-item"><a href="#">About Us</a></li>
            <li><a href="#">Cards</a></li>
            <li><a href="#">Apps</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>

  <div class="page-banner" >
    <div class="page-banner__bg-image"  style="background-image: url(<?php echo get_theme_file_uri('images/background.png') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">Our History</h1>
      <div class="page-banner__intro">
        <p>Learn how we got started.</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">

    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a> <span class="metabox__main">Our History</span></p>
    </div>
    
    <div class="page-links">
      <h2 class="page-links__title"><a href="#">About Us</a></h2>
      <ul class="min-list">
        <li class="current_page_item"><a href="#">Our History</a></li>
        <li><a href="#">Our Goals</a></li>
      </ul>
    </div>

    <div class="generic-content">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
    </div>

  </div>


    <?php }
    get_footer();
?>