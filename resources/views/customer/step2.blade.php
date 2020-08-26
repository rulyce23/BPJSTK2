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
var birdSound = new Audio('music/bpjs2.mp3');
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

                        <form class="user" action="{{ route('customer.create.step.two.post')}}" method="POST">
                            @csrf
                            <div class="form-check">
								<label>Silahkan Pilih Jenis Klaim :</label>
								
								
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
							
							
							<!-- Material inline 2 -->
							<input type="radio"  id="option1" name="klaim" value="JHK"  {{ ($customer->is_active=="JHK")? "checked" : "" }} >JHK</label>

							<input type="radio" id="option2" name="klaim" value="JKM" {{ ($customer->is_active=="JKM")? "checked" : "" }} >JKM</label>
							
							<input type="radio" id="option3" name="klaim" value="JKK" {{ ($customer->is_active=="JKK")? "checked" : "" }} >JKK</label>
							
							<input type="radio" id="option4" name="klaim" value="JP" {{ ($customer->is_active=="JP")? "checked" : "" }} >JP</label>
							
                            </div>
							
								<p class="text-primary"><b>Note : Mohon Pastikan Anda Telah Memilih Klaim Dengan Benar</b></p>
                           
                            <div class="form-group">
								<center>
                                <button type="submit" class="btn btn-success" size="15px">
                                    Selanjutnya
                                </button>
								</center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
