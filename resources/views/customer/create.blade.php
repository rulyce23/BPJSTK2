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


<body class="bg-gradient-success">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card o-hidden border-1 shadow-sm my-5">
                    <div class="card-body p-5">
                        @include('component.success')
                        @include('component.error')
<script>
var birdSound = new Audio('music/bpjs1.mp3');
birdSound.loop = false;
birdSound.play();
</script>
                        <div class="text-center">

                            <img src="{{asset('img/bpjs2.png')}}" width="250px">
							
                            <h1 class="h4 text-gray-800 mb-4">
                                Aplikasi<br>
                                <small class="text-muted h6">
                                   Klaim BPJS Ketenagakerjaan
                                </small>
                            </h1>

                        </div>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
			 </ul>
    </div>
    @endif
                        <form class="user" action="{{ route('customer.create.step.one.post')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" value="{{ session()->get('customer.nama') }}" class="form-control" name="nama" maxlength="50" placeholder="Ketik Nama Anda Disini" required="" autofocus="">
                            </div>
                            <div class="form-group">
                                    <label>Nomor KPJ</label>
                                <input type="text" class="form-control" value="{{ session()->get('customer.no_kpj') }}" name="no_kpj" maxlength="25" placeholder="Ketik Nomor KPJ Anda Disini" required="">
                            </div>
							<p class="text-primary"><b>Note : Mohon Pastikan Anda Telah Mengisi Data Dengan Benar</b></p>
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
