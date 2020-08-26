@extends('layouts2')
@section('title','Dashboard')
@section('content')

<div class="col-xl-3 col-md-7 mb-4">
    <a href="#" style="text-decoration:none;">
    <div class="card border-left-primary shadow-sm h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">User Pelanggan</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$customer->get()->count()}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user fa-2x text-orimary-300"></i>
                </div>
            </div>
        </div>
    </div>
    </a>
</div>

<div class="col-xl-3 col-md-7 mb-4">
    <a href="#" style="text-decoration:none;">
    <div class="card border-left-info shadow-sm h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">User CS</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$cs->get()->count()}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user fa-2x text-info-300"></i>
                </div>
            </div>
        </div>
    </div>
    </a>
</div>


<div class="col-xl-3 col-md-7 mb-4">
    <a href="#" style="text-decoration:none;">
    <div class="card border-left-danger shadow-sm h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">File Menunggu Diverifikasi </div>
					
		  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $typeCounts->count() }}</div>
           
                    
                </div>
                <div class="col-auto">
                    <i class="fas fa-database fa-2x text-danger-300"></i>
                </div>
            </div>
        </div>
    </div>
    </a>
</div>

<div class="col-xl-3 col-md-6 mb-4">
    <a href="#" style="text-decoration:none;">
    <div class="card border-left-success shadow-sm h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">File Diverifikasi </div>
					
		  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $typeCounts2->count() }}</div>
           
                    
                </div>
                <div class="col-auto">
                    <i class="fas fa-check fa-2x text-success-300"></i>
                </div>
            </div>
        </div>
    </div>
    </a>
</div>


<div class="col-xl-12 col-md-12 mb-12">
    <a href="#" style="text-decoration:none;">
    <div class="card border-left-warning shadow-sm h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">File Ditolak</div>
					
		  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $typeCounts3->count() }}</div>
           
                    
                </div>
                <div class="col-auto">
                    <i class="fas fa-window-close fa-2x text-warning-300"></i>
                </div>
            </div>
        </div>
    </div>
    </a>
</div>


<div class="col-xl-12 col-md-12 mb-9">
    <a href="#" style="text-decoration:none;">
<center>
   <img src="{{asset('img/bpjs2.png')}}">
 </center>
    </a>
</div>

@endsection
