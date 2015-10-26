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

      <div class="panel-group row" id="accordion" role="tablist" aria-multiselectable="true">
        <?php foreach ( $array as $item) { ?>
          <div class="panel panel-default three-columns grid-item">
            <div class="panel-heading" role="tab" id="heading-<?php echo $index; ?>">
              <a class="team-member" data-index="<?php echo $index; ?>" role="button" data-toggle="collapse" data-parent="#accordion" href="#panel-<?php echo $index; ?>" aria-expanded="true" aria-controls="collapseOne">
                <img class="img-responsive img-circle center-block team-member-avatar" src="<?php echo $item['avatar']; ?>">
                <h4 class="grid-heading team-member-name"><?php echo $item['name']; ?></h4>
                <h6 class="grid-heading team-member-title"><?php echo $item['title']; ?></h6>
                <span class="grid-heading team-member-bio sr-only"><?php echo $item['bio']; ?></h6>
              </a>
            </div>
            <div id="panel-<?php echo $index; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php echo $index; ?>">
              <div class="panel-body">
                <div id="<?php echo 'index-' . $index; ?>" class="expanded-bio">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-3 expanded-bio-avatar" style="background-image: url(<?php echo $item['avatar']; ?>)">
                      </div>
                      <div class="col-md-9 col-sm-12 expanded-bio-content">
                      <h2 id="<?php echo 'expanded-name-' . $index; ?>">John Doe</h2>
                        <hr>
                        <h6 id="<?php echo 'expanded-title-' . $index; ?>">Job Title</h6>
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
      </div>
    <?php endif; ?>
  </div>
</div>


