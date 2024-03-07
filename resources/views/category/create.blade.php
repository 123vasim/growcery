<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script> 
	<title>Categary</title>
@include('layouts.master');
</head>
<body>
<form method="post" action="/categary/store">
	@csrf
	<nav class="main-header">
		<div class="col-lg-12" style="margin-top: 40px;">
			<div class="card card-primary">
				<div class="card-header">
					<h3>Categary </h3>
				</div>
				<div class="p-4">
					<div class="row mt-3">
						<div class="col-lg-6">
							<label> Name</label>
							<input type="text" class="form-control " placeholder="Enter Catagery Name" name="name">
							<span class="text-danger">{{ $errors->first('name') }}</span>					
						</div>
						<div class="col-lg-6">
							<label>Status</label>
							<select type="text" class="form-control" name="status">
								<option>1</option>	
								<option>0</option>	
							</select>				
						</div>				
					</div>
					<div>
						<label>Description</label>
						<textarea class="form-control" id="editor"  name="description" type="text" ></textarea>
						<span class="text-danger">{{ $errors->first('description') }}</span>
					</div>
					<div class=" mb-4 mt-3  col-lg-8 d-flex mx-auto">
		            	<button type="submit" name="submit" value="submit" class="col-lg-6 form-control btn btn-primary">Submit</button>
		            	<a  href="/categary/index" type="button" name="back" value="back" class="col-lg-6 ml-2 form-control btn btn-dark">Back</a>
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