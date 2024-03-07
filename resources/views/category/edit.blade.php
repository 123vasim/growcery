<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script> 
	<title>Categary</title>
</head>
<style>
	a{
		color: black;
	}
</style>
<body>
@include('layouts.master');
<form method="post" action="/categary/update/{{$data->id}}">
		@csrf
	<nav class="main-header ">
		<div class="col-lg-11 ml-5 "style=";margin-top:40px;">
			<div class="card card-primary">
				<div class="card-header">
					<h3>Categary Edit  </h3>
				</div>
				<div class=" p-4">
					<div>
						<label>Categary Name</label>
						<input type="text" class="form-control " value="{{$data->name}}" placeholder="Enter Catagery Name" name="name">
						<span class="text-danger">{{ $errors->first('name') }}</span>					
					</div>			
					<div class="mt-2"> 
						<label>Description</label>
						<textarea class="form-control" id="editor"  name="description" type="text" >{{$data->description}}</textarea>
						<span class="text-danger">{{ $errors->first('description') }}</span>
					</div>
					<div class=" mb-4 mt-3  col-lg-8 d-flex mx-auto">
		                <button type="submit" name="submit" value="submit" class="col-lg-6 form-control btn btn-primary">Submit</button>
		                <a href="/categary/index" type="button" name="back" value="back" class="form-control btn btn-dark ml-2">Back</a>
		            </div>
		        </div>			
			</div>
		</div>
	</nav>
</form>
	<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
	<script>CKEDITOR.replace('editor');</script>
</body>
</html>