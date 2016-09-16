<?php $__env->startSection('content'); ?>

	<div class="container col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title">Main Content</h1>
				<h6>this is where the major news(i.e the large news) goes into</h6>
			</div>
			<div class="panel-body">
				<form class="form" method="post" action= <?php echo e(route('pagesContent')); ?>>
					<textarea placeholder="Enter your Page Header here" class="form-control" name="header" required></textarea><br>
					<textarea placeholder="Enter your Page Sidebar details here" class="form-control" name="sidebar" required></textarea><br>
					<textarea placeholder="Enter your Page Main Content here" class="form-control" name="main_content" required></textarea><br>
					<textarea placeholder="Enter your Page Footer here" class="form-control" name="footer" required></textarea><br>
					
					<input type="hidden" name="user_id" value= <?php echo e(Auth::user()->id); ?>>
					<input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token">

					<button type="submit" name="submit" class="btn btn-success" style="float: left">Submit</button>
					
				</form>
			</div>
		</div>
								
	</div>
	<div class="container col-md-6">
		

	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>