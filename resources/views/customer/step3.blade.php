<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="refresh" content="120;url=welcome" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>BPJS Ketenagakerjaan</title>
    <link href="{{asset('img/icon1.jpg')}}" rel="icon" type="image/png">
    <!-- Custom fonts for this template-->
    <link href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
	
    <link href="{{asset('frontend/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<script>
var birdSound = new Audio('music/bpjs3.mp3');
birdSound.loop = false;
birdSound.play();
</script>

<style>
#camera {
  width: 100%;
  height: 350px;
}

</style>
<body class="bg-gradient-success">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card o-hidden border-1 shadow-sm my-5">
                    <div class="card-body p-5">
                        @include('component.success')
                        @include('component.error')
						

                        <div class="text-center">
                             
							 <img src="{{asset('img/bpjs2.png')}}" width="250px">
							
                            <h1 class="h4 text-gray-800 mb-4">
                                Aplikasi<br>
                                <small class="text-muted h6">
                                   Klaim BPJS Ketenagakerjaan
                                </small>
                            </h1>

                        </div>

                            <div class="form-check">
								<label>Scan KTP,Vaklaring,KK,BPJS,& Tabungan</label>
								<p class="hint">Letakkan Dokumen Anda pada Mesin Scanner kemudian klik tombol Scan</p>
							
					
                            </div>
								<p class="text-primary"><b>Note : Mohon Pastikan Anda Telah Mengisi Data Dengan Benar</b></p>
								
								


				<form action="{{ route('customer.create.step.three.post')}}" method="POST" enctype="multipart/form-data">
								 @csrf
								 <div class="col-md-6">
            <div class="text-center">
			
					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="s_ktp" accept="image/*" capture="camera" required="">
						<img id="frame">
					</div>
      </div>
	  <input type="submit" value="Upload" class="btn btn-primary">
        </div>
		</form>

                    </div>
                </div>
            </div>
        </div>
		<script>
  var camera = document.getElementById('camera');
  var frame = document.getElementById('frame');

  camera.addEventListener('change', function(e) {
    var file = e.target.files[0]; 
    // Do something with the image file.
    frame.src = URL.createObjectURL(file);
  });
</script>
    </div>
	


    <!-- Bootstrap core JavaScript-->
	<script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('frontend/vendor/jquery-easing/jquery.easing.min.js')}}" type="text/javascript""></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('frontend/js/sb-admin-2.min.js')}}" type="text/javascript"></script>


</body>

</html>
