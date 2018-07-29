<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Multi-Image Uploader</title>

    <!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<!-- lodash -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.10/lodash.core.min.js"></script>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<!-- Utils -->
	<script src="js/Utils.js"></script>
	
	<!-- Custom Styles -->
	<style type="text/css">
	
		.upload-image-preview {
			display: flex;
			justify-content: center;
		}
	
		.upload-image-preview img {
			max-width: 100%;
			max-height: 350px;
			padding: 4px;
			border: 1px solid #ced4da;
			border-radius: .25rem;
			margin-top: .25rem;
		}
	
	</style>

  </head>
  
  <body>
  
    <div class="container theme-showcase" role="main">
    
    	<div class="jumbotron" style="margin-top: 20px">
    	
    		<h1>Multi-Image Uploader</h1>
    		
    		<p>
    			Instructions here: <a href="https://github.com/NHNUSA/smackjeeves_interview_test" target="_blank">https://github.com/NHNUSA/smackjeeves_interview_test</a>
    		</p>
    	
    	</div>
		
		<div id="template-info" style="margin-bottom: 80px">
		
			<div style="margin-bottom: 20px">
				<h2>Image Title/Description Template</h2>
				<small>After the user chooses images to upload, one of these input templates should be populated for each image selected. You may delete or otherwise hide this block of HTML after making use of it.</small>
			</div>
			
			<div id="per-image-form">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-4 upload-image-preview">
						
							<img src="http://img3.smackjeeves.com/images/uploaded/covers/lg/l/k/lkqetsav98aGu.png" />
						
						</div>
					
						<div class="col">
						
							<div class="form-group">
								<label for="inputTitle">Title</label>
								<input type="text" class="form-control" id="inputTitle" placeholder="Image Title">
							</div>
							
							<div class="form-group">
								<label for="inputDescription">Description</label>
								<textarea class="form-control" id="inputDescription" placeholder="Image Description"></textarea>
							</div>
						
						</div>
					
					</div>
				
				</div>
			
			</div>
		
		</div>
		
		<h1>Choose Images</h1>

		<form>
			<div class="input-group mb-3">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="uploadImages" accept="image/*" multiple>
					<label class="custom-file-label" for="uploadImages">Choose Images</label>
				</div>
			</div>
			<button id="btnUpload" type="submit" class="btn btn-primary hidden">Upload</button>
		</form>

	</div>
	
	<script>

		$('#uploadImages').change(function() {

			var files = this.files,
				$uploadImages = $(this);

			// TODO: Populate title/description input forms for each image selected

			$.each(files, function(i, file) {

				console.log( file );
				
			});

		});

	</script>
    
  </body>
  
</html>