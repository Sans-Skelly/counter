<?php
error_reporting(E_ERROR | E_PARSE);

if(!file_exists('counter.txt')){
  file_put_contents('counter.txt', '0');
}
if($_GET['click'] == 'yes'){
  file_put_contents('counter.txt', ((int) file_get_contents('counter.txt')) + 1);
  header('Location: ' . $_SERVER['SCRIPT_NAME']);
  die;
}
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>DemoteLogan.com</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
    <head>
  <meta charset="utf-8">
  <title>Christguru</title>
  <meta name="description" content="w i n n i n g.">
  <meta name="author" content="Christguru" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<style>

    </style>

</head>
<body>
<!-- particles.js container -->

<div id="particles-js"></div>
<div class="text">
	<h1>Demote Logan</h1>
	<p>demote that cunt. <br/> <h3>this nigger has <?php echo file_get_contents('counter.txt'); ?> clicks against him tbqhwyf.</h3> <br/> <a href="?click=yes">Click</a> to demote that fag.<br/> <i>Counter made with love by <a href="https://christguru.com">handjobs</a></i></p>
</div>

<!-- -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
<!-- particles.js lib (JavaScript CodePen settings): https://github.com/VincentGarreau/particles.js -->
  <script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
<script src='https://threejs.org/examples/js/libs/stats.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
