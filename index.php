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
	
		body {
			padding: 24px;
		}
	
		.upload-image-preview {
			display: flex;
			justify-content: center;
			align-items: center;
		}
	
		.upload-image-preview img {
			max-width: 100%;
			max-height: 300px;
			padding: 4px;
			border: 1px solid #ced4da;
			border-radius: .25rem;
			margin-top: .25rem;
		}
		
		.hidden {
			display: none;
		}
	
	</style>

  </head>
  
  <body>
  
    <div class="container theme-showcase" role="main">
    
    	<div class="jumbotron">
    	
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
			
			<div id="imageMetadataTemplate">
			
				<div class="container">
				
					<div class="row mb-3">
					
						<div class="col-4 upload-image-preview">
						
							<img src="http://img3.smackjeeves.com/images/uploaded/covers/lg/l/k/lkqetsav98aGu.png" />
						
						</div>
					
						<div class="col">
						
							<div class="form-group">
								<label>Title</label>
								<input type="text" class="form-control input-title" placeholder="Image Title">
							</div>
							
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control input-description" placeholder="Image Description"></textarea>
							</div>
						
						</div>
					
					</div>
				
				</div>
			
			</div>
		
		</div>
		
		<h1>Choose Images</h1>

		<form id="imageUploadForm">
			<div class="input-group mb-3">
				<div class="custom-file">
					<input name="files[]" type="file" class="custom-file-input" id="imageFileInput" accept="image/*" multiple>
					<label class="custom-file-label" for="uploadImages">Choose Images</label>
				</div>
			</div>
			<div id="imageMetadataForms">
				
			</div>
			<button id="btnUpload" type="submit" class="btn btn-primary hidden">Upload</button>
		</form>

	</div>
	
	<script>

		(function() {

			$('#template-info').hide();

			var $perImageFormTemplate = $('#imageMetadataTemplate > *'),
				$imageUploadForm = $('#imageUploadForm'),
				$imageMetadataForms = $('#imageMetadataForms'),
				$imageFileInput = $('#imageFileInput'),
				formArray = [],
				currentFiles,
				$btnUpload = $('#btnUpload');

			$imageFileInput.change(function() {
	
				var files = currentFiles = this.files,
					$uploadImages = $(this);

				$imageMetadataForms.empty();
	
				// TODO: Populate title/description input forms for each image selected
				if( files.length > 0 ) {

					$btnUpload.show();
					
					$.each(files, function(i, file) {

						var $metadataForm = $perImageFormTemplate.clone(),
							$img = $metadataForm.find('img').attr('src', Utils.imageSrcFromInputFile( file ));
		
						$imageMetadataForms.append(
							$metadataForm
						);

						formArray.push( $metadataForm );
						
					});

				}
	
			});

			function uploadNextInQueue(uploadQueue, curIndex) {

				curIndex = curIndex || 0;

				if( uploadQueue && uploadQueue[curIndex] ) {

					var uploadData = uploadQueue[curIndex],
						formData = new FormData();

					formData.append('title', uploadData.title);
					formData.append('description', uploadData.description);
					formData.append('image', currentFiles[curIndex]);

					$.ajax({
						url: 'ajax/uploadImage.php',
						type: 'POST',
						data: formData,
						success: function( response ) {

							// Upload the next
							uploadNextInQueue(uploadQueue, curIndex + 1);
							
						},
						cache: false,
						contentType: false,
						processData: false
					});

				}
				
			}

			$imageUploadForm.submit(function() {

				var uploadQueue = [];

				$.each(formArray, function(i, $metadataForm) {

					var file = currentFiles[i],
						title = $metadataForm.find('.input-title').val(),
						description = $metadataForm.find('.input-description').val();

					uploadQueue.push({
						file: file,
						title: title,
						description: description
					});
					
				});

				uploadNextInQueue( uploadQueue );
				
				return false;
				
			});

		})();

	</script>
    
  </body>
  
</html>