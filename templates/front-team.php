<div class="section grid-section team-grid-section">

  <?php 
    $count = count( get_sub_field('grid_item') );
    $array = get_sub_field('grid_item');
  ?>

  <h1><?php the_sub_field('team_text'); ?></h1>

  <?php get_template_part('templates/dots'); ?>

  <div class="container-fluid team-grid">

    <?php if( have_rows('grid_item') ):

      if( ($count == 3) || ($count == 6) || ($count == 9)) {
        $class = "three-columns grid-item";
      } elseif ( ($count == 2) || ($count == 4) || ($count == 8)) {
        $class = "four-columns grid-item";
      }
      $index = 0; 
    ?>

      <div class="panel-group row" id="accordion" role="tablist" aria-multiselectable="true">
        <?php foreach ( $array as $item) { ?>
          <div class="panel panel-default three-columns grid-item">
            <div class="panel-heading" role="tab" id="heading-<?php echo $index; ?>">
              <a class="team-member" data-index="<?php echo $index; ?>" role="button" data-toggle="collapse" data-parent="#accordion" href="#panel-<?php echo $index; ?>" aria-expanded="true" aria-controls="collapseOne">
                <?php if( !isset( $item['avatar'] ) ) { ?>
                  <img class="img-responsive center-block team-member-avatar" src="<?php echo $item['avatar']; ?>">
                <?php } else { ?>
                  <img class="img-responsive center-block team-member-avatar" src="<?php echo get_template_directory_uri() . '/dist/images/ntb-avatar.png'; ?>">
                <?php } ?>
                <h4 class="grid-heading team-member-name"><?php echo $item['name']; ?></h4>
                <h6 class="grid-heading team-member-title accent-font capitalize"><?php echo $item['title']; ?></h6>
                <span class="grid-heading team-member-bio sr-only"><?php echo $item['bio']; ?></h6>
              </a>
            </div>
            <div id="panel-<?php echo $index; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php echo $index; ?>">
              <button type="button" class="close bio-close" data-toggle="collapse" data-target="#panel-<?php echo $index; ?>" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
              </button> 
              <div class="panel-body">
                <div id="<?php echo 'index-' . $index; ?>" class="expanded-bio">
                  <div class="container-fluid">
                    <div class="row">
                      <?php if( !isset( $item['avatar'] ) ) { ?>
                        <div class="col-md-3 expanded-bio-avatar" style="background-image: url(<?php echo $item['avatar']; ?>)">
                      <?php } else { ?>
                        <div class="col-md-3 expanded-bio-avatar" style="background-image: url(<?php echo get_template_directory_uri() . '/dist/images/ntb-avatar.png'; ?>)">
                      <?php } ?>
                      </div>
                      <div class="col-md-9 col-sm-12 expanded-bio-content">
                        <h2 id="<?php echo 'expanded-name-' . $index; ?>">John Doe</h2>
                        <hr class="hidden-md-down">
                        <h6 class="accent-font capitalize" id="<?php echo 'expanded-title-' . $index; ?>">Job Title</h6>
                        <p id="<?php echo 'expanded-content-' . $index; ?>">Blah, blah, blah</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php $index++;} ?>
      </div>
    <?php endif; ?>
  </div>
</div>


