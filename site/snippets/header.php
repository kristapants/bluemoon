<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />
  <?php echo css('assets/css/main.css')?>

</head>
<body class="animsition">
  <div id="page">
    <nav id="menu">
      <ul>
        <?php foreach($pages->visible() as $item): ?>
        <li class="<?= r($item->isOpen(), ' is-active') ?>">
          <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
    </nav>
    <header class="header-style-1 static">
      <div class="container">
        <div class="row">
          <?php
            // get header logo but fall back to default
            $headerLogo = '/assets/images/BMLogo.png'; 
            $headerLogoSetting = $site->logo();
            if ( $headerLogoSetting != '' ) {
              $headerLogo = $site->image( $headerLogoSetting )->url();
            }
          ?>
          <div class="header-1-inner">
            <a class="brand-logo animsition-link" href="<?= url() ?>" rel="home">
              <img class="img-responsive" src="<?= $headerLogo; ?>" alt="" />
            </a>
            <nav>
              <ul class="menu hidden-xs">
                <?php foreach($pages->visible() as $item): ?>
                <li class="<?= r($item->isOpen(), ' is-active') ?>">
                  <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                </li>
                <?php endforeach ?>
              </ul>
            </nav>
            <aside class="right">
              <div class="widget widget-control-header hidden-lg hidden-md hidden-sm">
                <a class="navbar-toggle js-offcanvas-has-events" type="button" href="#menu">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </header>