<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<div class="row"> 
		<div class="col-md-6 offset-md-3">
			<div class="card">
				<div class="card-header">
					File Upload
				</div>	
				<div class="card-body"		>

					<form method="POST" action="{{route('upload.uploadFile')}}" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<input type="file" name="file" id="file" class="form-control">
						</div>
						<br>
						<button type="submit" class="btn btn-success"> Upload </button>
						
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>