<?php $__env->startSection('content'); ?>
	
		<!-- the modal -->
				<div class="container col-md-7">
						<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" name="preview_button">
							  Preview Your Page
							</button>



						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel">Preview</h4>
						      </div>
						      <div class="modal-body">
								    <div class="container col-md-12">
										<div class="jumbotron">
											<h1><?php echo e($header); ?></h1>
											<p>other Contents in the header</p>
										</div>
									</div>


									<div class ="container col-md-4">
										<h2>Hot Gist <span class="label label-info">New</span></h2>
										<h4><?php echo e($sidebar); ?></h4>
									</div>
									<div>
										<div class="container col-md-8">
											<div class="panel panel-info">
												<div class="panel-heading">
													<h1 class="panel-title">Main Content</h1>
												</div>
											<div class="panel-body">
												<h4><?php echo e($main_content); ?></h4>
											</div>
										</div>	
									</div>

									<div class="container col-md-2"></div>

									<div class="container col-md-12">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h3>The Footer</h3>
											</div>
											<div class="panel-body">
												<h5><?php echo e($footer); ?></h5>
											</div>
										</div>
									</div>

						      </div>
						      
						      <div class="modal-footer">
						        <a href= "/dashboard/pages" ><button type="button" class="btn btn-default" data-dismiss="" style="float:left; margin-right:20px;">Close</button></a>
						        
						        <!--here am going to create a hidden  form and pass the variables in a new function  -->
									<form method="post" action= <?php echo e(route('pagesPreview')); ?>>
										<input type="hidden" name="user_id" value= <?php echo e(Auth::user()->id); ?>>
										<input type="hidden" value="<?php echo e($header); ?>" name="header">
										<input type="hidden" value="<?php echo e($sidebar); ?>" name="sidebar">
										<input type="hidden" value="<?php echo e($main_content); ?>" name="main_content">
										<input type="hidden" value="<?php echo e($footer); ?>" name="footer">
										<input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token">
										<input type="submit" class="btn btn-primary" style="float:left" value="Publish!!!">
									</form>
						       
						      </div>
						    </div>
						  </div>
					</div>
				</div>

			

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>