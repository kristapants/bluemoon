<section class="team">
  <h3 class="">
    <?= $data->teamHeading() ?>
  </h3>
  <style>
    .team .img {
      width: 200px;
      height: 200px;
      background-size: cover;
    }
    .team .member {
      float: left;
      width: 200px;
      height: 260px;
      margin-right: 15px;
      text-align: center;
    }
  </style>
  <?php if ( ! function_exists('display_team_member') ) {
    function display_team_member($name, $title, $img) {
      if ($img != '') :
      ?><div class="member">
        <?php printf( '<div class="img" style="background-image: url(%s);"></div>', $img ); ?>
        <?= $name != '' ? sprintf ( '<div><strong>%s</strong></div>', $name ) : '' ?>
        <?= $title != '' ? sprintf( '<em>%s</em>', $title ) : '' ?>
      </div><?php
      endif; 
    }
  } ?>
  <?php
    $name = $data->nameOne();
    $title = $data->titleOne();
    $img = $data->imageOne()->isNotEmpty()
      ? $page->image($data->imageOne())->url()
      : '';
    display_team_member($name, $title, $img);
    $name = $data->nameTwo();
    $title = $data->titleTwo();
    $img = $data->imageTwo()->isNotEmpty()
      ? $page->image($data->imageTwo())->url()
      : '';
    display_team_member($name, $title, $img);
    $name = $data->nameThree();
    $title = $data->titleThree();
    $img = $data->imageThree()->isNotEmpty()
      ? $page->image($data->imageThree())->url()
      : '';
    display_team_member($name, $title, $img);
    $name = $data->nameFour();
    $title = $data->titleFour();
    $img = ($data->imageFour()->isNotEmpty() && $page->image($data->imageFour()) != '')
      ? $page->image($data->imageFour())->url()
      : '';
    display_team_member($name, $title, $img);
    $name = $data->nameFive();
    $title = $data->titleFive();
    $img = $data->imageFive()->isNotEmpty()
      ? $page->image($data->imageFive())->url()
      : '';
    display_team_member($name, $title, $img);
  ?>
  <div style="clear: left;"></div>
</section>