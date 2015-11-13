<div class="section grid-section team-grid-section">

  <?php 
    $count = count( get_sub_field('grid_item') );
    $array = get_sub_field('grid_item');
  ?>

  <h1><?php the_sub_field('team_text'); ?></h1>

  <?php get_template_part('templates/dots'); ?>

  <div class="container-fluid">

    <?php if( have_rows('grid_item') ):

      if( ($count == 3) || ($count == 6) || ($count == 9)) {
        $class = "three-columns grid-item";
      } elseif ( ($count == 2) || ($count == 4) || ($count == 8)) {
        $class = "four-columns grid-item";
      }
      $index = 0; 
    ?>

        <div class="row">
          <?php foreach ( $array as $item) { ?>
            <div class="<?php echo $class; ?>">
              <a class="team-member" data-index="<?php echo $index; ?>" aria-expanded="false" aria-controls="collapseExample">
                <img class="img-responsive center-block team-member-avatar" src="<?php echo $item['avatar']; ?>">
                <h4 class="grid-heading team-member-name"><?php echo $item['name']; ?></h4>
                <h6 class="grid-heading team-member-title"><?php echo $item['title']; ?></h6>
                <span class="grid-heading team-member-bio sr-only"><?php echo $item['bio']; ?></h6>
              </a>
              <div id="<?php echo 'index-' . $index; ?>" class="collapse expanded-bio">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-3 expanded-bio-avatar">
                    <img class="img-responsive center-block" id="<?php echo 'expanded-avatar-' . $index; ?>" src="http://placehold.it/200x200">
                    </div>
                    <div class="col-sm-9 expanded-bio-content">
                    <h2 id="<?php echo 'expanded-name-' . $index; ?>">John Doe</h2>
                      <hr>
                      <h6 id="<?php echo 'expanded-title-' . $index; ?>">Job Title</h6>
                      <p id="<?php echo 'expanded-content-' . $index; ?>">Blah, blah, blah</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php $index++;
          } ?>
        </div>
    <?php endif; ?>
  </div>
</div>

