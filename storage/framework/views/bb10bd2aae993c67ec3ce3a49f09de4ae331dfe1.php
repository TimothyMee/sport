<?php $__env->startSection('content'); ?>
	
	<div class="container col-md-6">
		<form class="form" method="post" action="pages_content">
			<textarea placeholder="Enter your Page Header here" class="form-control" name="header"></textarea><br>
			<textarea placeholder="Enter your Page Sidebar details here" class="form-control" name="sidebar"></textarea><br>
			<textarea placeholder="Enter your Page Main Content here" class="form-control" name="main_content"></textarea><br>
			<textarea placeholder="Enter your Page Footer here" class="form-control" name="footer"></textarea><br>
			<input type="hidden" name="user_id" value= <?php echo e(Auth::user()->id); ?>>
			<input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token">

			<button type="submit" name="submit" class="btn btn-success" style="float: left">Submit</button>
					
		</form>

	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>