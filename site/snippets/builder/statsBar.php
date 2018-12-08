<section class="stats-bar"
  <?php if ($data->backgroundImage()->isNotEmpty()): ?>
    style="background-size: cover; background-image: url(<?= $page->image($data->backgroundImage())->url() ?>)"
  <?php else: ?>
  <?php endif ?>
  >
  <div class="overlay"></div>
  <style>
    section.stats-bar {
      position: relative;
      padding: 20px 0;
      margin-top: 10px;
    }
    section.stats-bar .overlay {
      position: absolute;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.3);
      z-index: 0;
      top: 0;
      left: 0;
    }
    section.stats-bar .cols {
      position: relative;
      z-index: 1;
    }
    section.stats-bar .col {
      width: 25%;
      float: left;
      color: #FFF;
      font-weight: bold;
      text-align: center;
    }
  </style>
  <div class="cols">
    <div class="col">
      <?= $data->statNumberOne() ?> <br/>
      <?= $data->statTitleOne() ?>
    </div>
    <div class="col">
      <?= $data->statNumberTwo() ?> <br/>
      <?= $data->statTitleTwo() ?>
    </div>
    <div class="col">
      <?= $data->statNumberThree() ?> <br/>
      <?= $data->statTitleThree() ?>
    </div>
    <div class="col">
      <?= $data->statNumberFour() ?> <br/>
      <?= $data->statTitleFour() ?>
    </div>
    <div style="clear: left"></div>
  </div>
</section>