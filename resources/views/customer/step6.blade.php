<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="refresh" content="100;url=welcome" />
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

                       
				<form action="{{ route('customer.create.step.three.post')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-check">
							<center>
								<label>4. Scan Kartu BPJS </label>
							</center>	
							
								@if (count($errors) > 0)
							<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.
							<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
							</ul>
							</div>
							@endif
							
							
								<br>
							<div class="form-group">
							<center>
							<label class="cameraButton">
						<input type="file" name="s_kbpjs" accept="image/*;capture=camera"  required="">
						</label>
							</center>
							</div>
							<!-- Material inline 2 -->
						
							
                            </div>
									<center>
									<p class="text-primary"><b>Note : Mohon untuk siapkan berkas sesuai petunjuk tahapan, dan pastikan anda telah mengupload ataupun mengambil data dengan benar</b></p>
									</center>
                            <div class="form-group">
								<center>
                                <button type="submit" class="btn btn-success" size="15px">
                                    Upload
                                </button>
								</center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		<script>
  label.cameraButton {
  display: inline-block;
  margin: 1em 0;

  /* Styles to make it look like a button */
  padding: 0.5em;
  border: 2px solid #666;
  border-color: #EEE #CCC #CCC #EEE;
  background-color: #DDD;
}

/* Look like a clicked/depressed button */
label.cameraButton:active {
  border-color: #CCC #EEE #EEE #CCC;
}

/* This is the part that actually hides the 'Choose file' text box for camera inputs */
label.cameraButton input[accept*="camera"] {
  display: none;
}
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
