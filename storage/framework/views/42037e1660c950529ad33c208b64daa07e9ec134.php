<?php $__env->startSection('content'); ?>

	<div class="container col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title">Main Content</h1>
				<h6>this is where the major news(i.e the large news) goes into</h6>
			</div>
			<div class="panel-body">
				<form class="form" method="post" action= <?php echo e(route('mainContent_PB')); ?> enctype="multipart/form-data">
					<textarea placeholder="Enter your Page Header here" class="form-control" name="header" required></textarea><br>
					<textarea placeholder="Enter your Page Main Story here" class="form-control" name="main_story" required></textarea><br>
					<h2>Picture:</h2><input type="file" name="image" required><br>

					<input type="hidden" name="user_id" value= <?php echo e(Auth::user()->id); ?>>
					<input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token">

					<!-- this is used to display the verification messages -->
					<?php if(count($errors) > 0): ?>
					    <div class="alert alert-danger">
					        <ul>
					            <?php foreach($errors->all() as $error): ?>
					                <li><?php echo e($error); ?></li>
					            <?php endforeach; ?>
					        </ul>
					    </div>
					<?php endif; ?>

					<button type="submit" name="submit" class="btn btn-success" style="float: left">Submit</button>
					
				</form>
			</div>
		</div>
								
	</div>
	<div class="container col-md-6">
		

	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>