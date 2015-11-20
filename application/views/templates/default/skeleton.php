<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Nick & Koen - PMS">
	<meta name="keywords" content="portfolio management raamsdonk raamsdonksveer ">
	<meta name="author" content="Nick & Koen">
	<meta name="viewport" content="width=device-width, user-scalable=no" />

	<title>Koen de Bont | Basic-UI</title>
	<link href="<?php echo base_url('public/resources/default/css/style.css'); ?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
	
</head>
<body>

<!-- Navigation menu -->
<nav class="navbar bg-lblue">
	<ul class="navmenu">
		<li><i class="fa fa-home"></i></li>
		<li>test1</li>
		<li>test2</li>
		<li>test3<ul>
				<li>Secondtest1</li>
				<li>Secondtest2</li>
			</ul>
		</li>
	</ul>
</nav>

<hr>
<hr>
<hr>
<?php $this->load->view('templates/'.$template.'/pages/'.$view, $data);  ?>
<h2>MSG Box</h2>
<hr>
<!-- MSG Boxes -->
<div class="msg-box bg-success">Lorem <a href="#">ipsum dolor sit amet</a>, consectetur adipisicing elit. Accusamus, earum, voluptates reprehenderit eaque veniam nam repellendus similique quo <b>architecto culpa facere</b> aliquid beatae. Nihil molestias, facilis beatae quo. Ratione, rerum!</div>

<div class="msg-box bg-info">Lorem <a href="#">ipsum dolor sit amet</a>, consectetur adipisicing elit. Accusamus, earum, voluptates reprehenderit eaque veniam nam repellendus similique quo <b>architecto culpa facere</b> aliquid beatae. Nihil molestias, facilis beatae quo. Ratione, rerum!</div>

<div class="msg-box bg-warning">Lorem <a href="#">ipsum dolor sit amet</a>, consectetur adipisicing elit. Accusamus, earum, voluptates reprehenderit eaque veniam nam repellendus similique quo <b>architecto culpa facere</b> aliquid beatae. Nihil molestias, facilis beatae quo. Ratione, rerum!</div>

<div class="msg-box bg-danger">Lorem <a href="#">ipsum dolor sit amet</a>, consectetur adipisicing elit. Accusamus, earum, voluptates reprehenderit eaque veniam nam repellendus similique quo <b>architecto culpa facere</b> aliquid beatae. Nihil molestias, facilis beatae quo. Ratione, rerum!</div>

<hr>
<h2>Button</h2>
<hr>
<!-- Buttons -->
<button class="btn bg-green">Click me!</button>
<button class="btn bg-red">Click me!</button>
<button class="btn bg-lblue">Click me!</button>
<button class="btn bg-dgrey">Click me!</button>

<div class="clearfix"></div>

<hr>
<h2>Form</h2>
<hr>
<!-- Form -->
<div class="form-wrapper">
	<form>
		<div class="form-group">
			<input type="text" placeholder="Gebruikersnaam">
			<i class="fa fa-user"></i>
		</div>
		<div class="form-group">
			<input type="email" placeholder="Email">
			<i class="fa fa-envelope-o"></i>
		</div>
		<div class="form-group">
			<input type="password" placeholder="Wachtwoord">
			<i class="fa fa-lock"></i>
		</div>
		<div class="form-group">
			<input type="password" placeholder="Bevestig wachtwoord">
		</div>

		<input type="submit" class="btn bg-orange pull-right">

		<div class="clearfix"></div>
	</form>
</div>

<hr>
<h2>Progress bar</h2>
<hr>
<!-- Progress bars -->
<div class="form-wrapper">
	<div class="progress progress-animated">
		<div class="progress-bar bg-success">100%</div>
	</div>
	<div class="progress">
		<div class="progress-bar bg-info">70%</div>
	</div>
	<div class="progress progress-animated">
		<div class="progress-bar bg-dgrey">40%</div>
	</div>

	<div class="progress progress-animated">
		<div class="progress-bar bg-lblue">10%</div><div class="progress-bar bg-yellow">40%</div><div class="progress-bar bg-orange">20%</div>
	</div>
	<div class="progress">
		<div class="progress-bar bg-red">27%</div><div class="progress-bar bg-dblue">42%</div>
	</div>
	<div class="progress">
		<div class="progress-bar bg-rose">40%</div><div class="progress-bar bg-purple">20%</div>
	</div>
</div>

<hr>
<h2>Badge</h2>
<hr>
<!-- Icons with background -->
<span class="badge">
	<i class="fa fa-battery-empty bg-red"></i>
</span>
<span class="badge">
	<i class="fa fa-battery-quarter bg-orange"></i>
</span>
<span class="badge">
	<i class="fa fa-battery-half bg-green"></i>
</span>
<span class="badge">
	<i class="fa fa-battery-three-quarters bg-dblue"></i>
</span>
<span class="badge">
	<i class="fa fa-battery-full bg-dgrey"></i>
</span>
<div class="clearfix"></div>

<hr>
<h2>List</h2>
<hr>
<!-- List -->
<ul>
	<li>test without icon</li>
	<li>test without icon</li>
	<li><i class="fa fa-bell-slash-o"></i>test with icon</li>
	<li><i class="fa fa-bookmark-o"></i>test with icon</li>
	<li><i class="fa fa-camera"></i>test with icon</li>
</ul>

<hr>
<h2 id="modal">Click here for modal</h2>
<hr>
<!-- POP-UP -->
<div class="modal">
	<div class="modal-header bg-lblue">
		<button type="button" class="btn-hidden close"><i class="fa fa-times"></i></button>
		<h4 class="modal-title">Modal title</h4>
	</div>
	<div class="modal-body">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, itaque at distinctio neque est, voluptates pariatur incidunt provident nihil impedit cupiditate esse voluptatibus deleniti. Rem voluptatem adipisci dolorum, deleniti nobis!</p>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn bg-green close">Save changes</button>
	</div>
</div>

<hr>
<h2>Headings</h2>
<hr>
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="public/resources/default/js/script.js"></script>
</body>
</html>