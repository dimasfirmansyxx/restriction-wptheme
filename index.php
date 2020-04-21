<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= get_bloginfo("wpurl") ?>/wp-content/themes/restriction/style.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">

	<title>Restriction Theme</title>
	<?php wp_head(); ?>
	<style type="text/css">
		html {
			margin: 0 !important;
		}
	</style>
</head>
<body <?php body_class(); ?>>
	<nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav mx-auto">
				<?php $getnav = wp_get_nav_menu_items("topnav") ?>
				<?php foreach ($getnav as $nav): ?>
					<a class="nav-item nav-link" href="<?= $nav->url ?>"><?= $nav->post_title ?></a>
				<?php endforeach ?>
				<?php $getpages = get_pages() ?>
				<?php foreach ($getpages as $page): ?>
					<a class="nav-item nav-link" href="<?= $page->guid ?>"><?= ucwords($page->post_title) ?></a>
				<?php endforeach ?>
			</div>
        </div>
      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4"><?= get_bloginfo("name"); ?></h1>
			<p class="lead">
				<?= get_bloginfo("description"); ?>
			</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
				  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h3 class="card-title">Card title</h3>
				  </div>
				</div>
			</div>
		</div>
	</div>

	<?php var_dump(get_post()) ?>
</body>
</html>