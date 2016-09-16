<!DOCTYPE html>
<html>
<head>
	<title>Sport</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <?php /* <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet"> */ ?>
    <link rel="stylesheet" type="text/css" href="assests/css/mystyle.css">


</head>
<body>
		<div class="container col-md-12">
			<div class="background">
				<div class="container col-md-12">
					<nav class="navbar navbar-inverse ">
						  <div class="container col-md-12">
				        		<ul class="nav navbar-nav nav-pills">
						            <li class=""><a href="">Home</a></li>
						            <li class=""><a href="">Teams</a></li>
						            <li class=""><a href="">Transfer</a></li>
						            <li class=""><a href="">Contacts</a></li>
						         </ul>  
			   				 </div>
					</nav>
				</div>
				<div class="container col-md-12">
					<div class="col-md-2"></div>
					<div class="container col-md-8">
						<img src="../assests/images/player.png" class="moving_footballer">
						<img src="../assests/images/ball.png" class="moving_ball">
					</div>
				
				</div>

				<div class="col-md-1"></div>

				<div class="container col-md-6">
					<a href= <?php echo e(route('main_article')); ?>>
						<div class="col-md-12 thumbnail">
							<img src="../pageImages/mainImages/<?php echo e($maincontent_imagename0); ?>" class="thumbnail_image" style="width:100%;height:460px;">
							<div class="caption">
								<h3><?php echo e($maincontent_header0); ?></h3>
								<p><?php echo e($maincontent_mainsubstory0); ?></a></p>
							</div>
						</div>
					</a>
				</div>

				<div class="container col-md-4">
					<div class="list-group">
					  <a href= <?php echo e(route('article1')); ?> class="list-group-item">
					    <h4 class="list-group-item-heading">List group item heading</h4>
					    <p class="list-group-item-text">.List group item heading
							Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.
							List group item heading
						</p>
					  </a>

						<a href= <?php echo e(route('article2')); ?> class="list-group-item">
						    <h4 class="list-group-item-heading">List group item heading</h4>
						    <p class="list-group-item-text">.List group item heading
								Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.
								List group item heading
							</p>
					  </a>

					  <a href= <?php echo e(route('article3')); ?> class="list-group-item">
						    <h4 class="list-group-item-heading">List group item heading</h4>
						    <p class="list-group-item-text">.List group item heading
								Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.
								List group item heading
							</p>
					  </a>		

					  <a href= <?php echo e(route('article4')); ?> class="list-group-item">
						    <h4 class="list-group-item-heading">List group item heading</h4>
						    <p class="list-group-item-text">.List group item heading
								Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.
								List group item heading
							</p>
					  </a>

					  <a href= <?php echo e(route('article5')); ?> class="list-group-item">
						    <h4 class="list-group-item-heading">List group item heading</h4>
						    <p class="list-group-item-text">.List group item heading
								Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.
								List group item heading
							</p>
					  </a>

					   <a href= <?php echo e(route('article6')); ?> class="list-group-item">
						    <h4 class="list-group-item-heading">List group item heading</h4>
						    <p class="list-group-item-text">.List group item heading
								Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.
								List group item heading
							</p>
					  </a>									  
					</div>
				</div>
			</div>
		</div>
</body>
</html>