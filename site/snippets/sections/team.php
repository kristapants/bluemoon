<?php
  $teamMembers = array();
  $name = $data->nameOne();
  $title = $data->titleOne();
  if ( $data->imageOne()->isNotEmpty() ) {
    $image = $page->image($data->imageOne())->crop(300, 300)->url();
  } else {
    $image = '';
  }
  if ($image != '') {
    $teamMembers[] = array(
      "name" => $name,
      "title" => $title,
      "image" => $image
    );
  }
  $name = $data->nameTwo();
  $title = $data->titleTwo();
  if ( $data->imageTwo()->isNotEmpty() ) {
    $image = $page->image($data->imageTwo())->crop(300, 300)->url();
  } else {
    $image = '';
  }
  if ($image != '') {
    $teamMembers[] = array(
      "name" => $name,
      "title" => $title,
      "image" => $image
    );
  }
  $name = $data->nameThree();
  $title = $data->titleThree();
  if ( $data->imageThree()->isNotEmpty() ) {
    $image = $page->image($data->imageThree())->crop(300, 300)->url();
  } else {
    $image = '';
  }
  if ($image != '') {
    $teamMembers[] = array(
      "name" => $name,
      "title" => $title,
      "image" => $image
    );
  }
  $name = $data->nameFour();
  $title = $data->titleFour();
  if ( $data->imageFour()->isNotEmpty() ) {
    $image = $page->image($data->imageFour())->crop(300, 300)->url();
  } else {
    $image = '';
  }
  if ($image != '') {
    $teamMembers[] = array(
      "name" => $name,
      "title" => $title,
      "image" => $image
    );
  }
  $name = $data->nameFive();
  $title = $data->titleFive();
  if ( $data->imageFive()->isNotEmpty() ) {
    $image = $page->image($data->imageFive())->crop(300, 300)->url();
  } else {
    $image = '';
  }
  if ($image != '') {
    $teamMembers[] = array(
      "name" => $name,
      "title" => $title,
      "image" => $image
    );
  }
  $hasTeams = count( $teamMembers ) > 0;
?>

<?php if ( $hasTeams ) : ?>
<section class="boxed-sm">
  <div class="container">
    <?php
      $teamHeading = $data->teamHeading();
      if ( $teamHeading != '' ) :
    ?><div class="heading-wrapper text-center">
      <h3 class="heading"><?= $teamHeading ?></h3>
    </div><?php endif; ?>
    <div class="team-wrapper">
      <div class="row">
        <div class="about-carousel">
          
          <?php 
            foreach ( $teamMembers as $teamMember ) : 
              $memberName = $teamMember['name'];
              $thumb = $teamMember['image'];
          ?>
          <div class="item">
            <figure class="item-team">
              <div class="img-wrapper">
                <img class="img-responsive" src="<?= $thumb ?>" alt="<?= $memberName ?>">
              </div>
              <figcaption class="desc text-center">
                <h4 class="name"><?= $memberName ?></h4>
                <span class="position"><?= $teamMember['title']; ?></span>
              </figcaption>
            </figure>
          </div>
          <?php endforeach; ?>
          
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>