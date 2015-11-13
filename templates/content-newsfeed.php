<?php if($post->post_content != "") : ?>
  <div class="entry-content"><?php the_content(); ?></div>
<?php endif; ?>

<div class="newsfeed-container container">
  <?php if( have_rows( 'articles' ) ): ?>
    <div class="projects timeline">
      <?php $index = 0; ?>
      <?php while( have_rows ( 'articles' ) ) : the_row(); ?>
        <?php if( $index % 2 == 0 ) { ?>
          <div class="article row">
            <div data-sr="enter left, move 150px" class="article-image col-md-6">
              <div class="img-container" style="background-image: url(<?php echo the_sub_field('image'); ?>)"></div>
            </div>
            <div data-sr="scale up 50%, reset" class="placeholder placeholder-right">
              <span></span>
              <div class="newsfeed-date"><div><div>21</div>July</div></div>
            </div>
            <div data-sr="enter right, move 150px" class="article-content col-md-6">
              <a class="card project-card card-right"  href="<?php echo the_sub_field( 'link' ); ?>">
                <h1><?php the_sub_field('title'); ?></h1>
                <p>Visit Article</p>
              </a>
            </div>
          </div>
        <?php } else { ?>
          <div class="article row">
            <div data-sr="enter left, move 150px, <?php if( $index == 1 ) : echo 'wait 0.3s'; endif; ?>" class="article-content col-md-6">
              <a class="card project-card card-left"  href="<?php echo the_sub_field( 'link' ); ?>">
                <h1><?php the_sub_field('title'); ?></h1>
                <p>Visit Article</p>
              </a>
            </div>
            <div data-sr="scale up 50%, reset, <?php if( $index == 1 ) : echo 'wait 0.3s'; endif; ?>" class="placeholder placeholder-left">
              <div class="newsfeed-date"><div><div>21</div>July</div></div>
              <span></span>
            </div>
            <div data-sr="enter right, move 150px, <?php if( $index == 1 ) : echo 'wait 0.3s'; endif; ?>" class="article-image col-md-6">
              <div class="img-container" style="background-image: url(<?php echo the_sub_field('image'); ?>)"></div>
            </div>
          </div>
        <?php } ?>
        <?php $index++; ?>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>
