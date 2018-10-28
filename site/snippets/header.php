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
        <li>
          <a href="<?= url() ?>" rel="home">Home</a>
        </li>
        <li>
          <a href="about.html">About</a>
        </li>
        <li>
          <a href="contact.html">Contact</a>
        </li>
      </ul>
    </nav>
    <header class="header-style-1 static">
      <div class="container">
        <div class="row">
          <div class="header-1-inner">
            <a class="brand-logo animsition-link" href="<?= url() ?>" rel="home">
              <img class="img-responsive" src="/assets/images/BMLogo.png" alt="" />
            </a>
            <nav>
              <ul class="menu hidden-xs">
                <li>
                  <a href="<?= url() ?>" rel="home">Home</a>
                </li>
                <li>
                  <a href="about.html">About</a>
                </li>
                <li>
                  <a href="contact.html">Contact</a>
                </li>
              </ul>
            </nav>
            <aside class="right">
              <div class="widget widget-control-header widget-search-header">
                <a class="control btn-open-search-form js-open-search-form-header" href="#">
                  <span class="lnr lnr-magnifier"></span>
                </a>
                <div class="form-outer">
                  <button class="btn-close-form-search-header js-close-search-form-header">
                    <span class="lnr lnr-cross"></span>
                  </button>
                  <form>
                    <input placeholder="Search" />
                    <button class="search">
                      <span class="lnr lnr-magnifier"></span>
                    </button>
                  </form>
                </div>
              </div>
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