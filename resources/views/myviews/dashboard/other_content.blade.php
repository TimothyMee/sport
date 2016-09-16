@extends ('layouts.dashboard')

@section('content')

	<div class="container col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title">Other Content</h1>
				<h6>this is where the other news goes into</h6>
			</div>
			<div class="panel-body">
				<form class="form" method="post" action= {{route('otherContent_PB')}} enctype="multipart/form-data">
					<textarea placeholder="Enter your Page Header here" class="form-control" name="header" required></textarea><br>
					<textarea placeholder="Enter your Page Main Story here" class="form-control" name="main_story" required></textarea><br>
					<h2>Picture:</h2><input type="file" name="image" required><br>

					<input type="hidden" name="user_id" value= {{Auth::user()->id}}>
					<input type="hidden" value="{{csrf_token()}}" name="_token">

					<!-- this is used to display the verification messages -->
					@if (count($errors) > 0)
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
					
					<button type="submit" name="submit" class="btn btn-success" style="float: left">Submit</button>
				</form>
			</div>
		</div>
								
	</div>
	<div class="container col-md-6">
		

	</div>
	
@endsection