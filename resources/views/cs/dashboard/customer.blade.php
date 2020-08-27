@extends('layouts2')
@section('title','Dashboard')
@section('content')
<script type="text/javascript">
   if (screen.width <= 699) {
	document.location = "./create";
}
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Kelola Customer</div>
  
                <div class="card-body">
                  
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No KPJ</th>
                            <th scope="col">Klaim</th>
                            <th scope="col">Status Verifikasi</th>
                            <th scope="col">Aksi</th>
                        	<th scope="col"></th>
                        	<th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
						<?php $no = 0;?>
                        @foreach($customer as $product)
						<?php $no++ ;?>
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$product->nama}}</td>
                                <td>{{$product->no_kpj}}</td>
                                <td>{{$product->klaim}}</td>
                                <td>{{$product->status2}}</td>
					<td>
					<?php if($product->status2=='Belum Dicek & Diverifikasi') { ?>
					<form action="{{ route('cs.dashboard.hapus', $product->id) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <a href="{{ route('cs.dashboard.edit',$product->id) }}"><i class="fa fa-edit">&nbsp;Edit</a></i>
			<br><br>
            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash">&nbsp;Hapus</button></i>
          </form>
					<?php } elseif($product->status2=='Telah Dicek & Diverifikasi') { ?>
							<form action="{{ route('cs.dashboard.hapus', $product->id) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <a href="{{ route('cs.dashboard.edit',$product->id) }}"><i class="fa fa-edit">&nbsp;Edit</a></i>
			<br><br>
            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash">&nbsp;Hapus</button></i>
          </form>
		  <?php } elseif($product->status2=='Telah Dicek & Ditolak') { ?>
		   <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash">&nbsp;Hapus</button></i>
		  <?php } ?>
		  </td>
                            </tr>
                        @endforeach
                        </tbody>
						<p class="text-primary hint">Note : Anda dapat menghapus pelanggan yang mendaftar melalui kios-k jika data tersebut tidak benar dan data berkas tersebut ditolak,karena data foto yang diminta tidak valid</p>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Validasi Data Customer</div>
  
                <div class="card-body">
                  
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Scan / Upload Foto KTP</th>
                            <th scope="col">Scan / Upload Foto Vaklaring Riwayat</th>
                            <th scope="col">Scan / Upload Foto Kartu KK</th>
                            <th scope="col">Scan / Upload Foto Kartu BPJS</th>
                            <th scope="col">Scan / Upload Foto Buku Tabungan</th>
                        	<th scope="col">Aksi</th>
                        	<th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
						<?php $no = 0;?>
                        @foreach($customer as $product)
						<?php $no++ ;?>
                            <tr>
                                <td>{{$no}}</td>
                                <td><img src="{{asset('img/customer/s_ktp/'.$product->s_ktp)}}" width="90"  onclick="window.open(this.src)" height="90"></td>
                                <td><img src="{{asset('img/customer/s_vaklaring/'.$product->s_vaklaring)}}"  onclick="window.open(this.src)" width="90" height="90"></td>
                                <td><img src="{{asset('img/customer/s_kk/'.$product->s_kk)}}" width="90"  onclick="window.open(this.src)" height="90"></td>
                                <td><img src="{{asset('img/customer/s_kbpjs/'.$product->s_kbpjs)}}" width="90"  onclick="window.open(this.src)" height="90"></td>
                                <td><img src="{{asset('img/customer/s_tabung/'.$product->s_tabung)}}" width="90"  onclick="window.open(this.src)" height="90"></td>
                                
					<td>
							
	         <?php if ($product->status2=='Belum Dicek & Diverifikasi') { ?>
					<form method="POST" action="{{ route('cs.dashboard.verifikasi', $product->id) }}">
          @method('patch')
                    @csrf
   <br>
            <button class="btn btn-sm btn-success" type="submit" onclick="return confirm('Yakin ingin memverifikasi data ini?')"><i class="fa fa-check">&nbsp;Verifikasi</button></i>
			</form>
			<br>
			<form method="POST" action="{{ route('cs.dashboard.tolak', $product->id) }}">
          @method('patch')
                    @csrf
            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menolak data ini?')"><i class="fa fa-window-close">&nbsp;Tolak</button></i>
          	</form>
							 <?php } elseif($product->status2=='Telah Dicek & Diverifikasi') { ?>
							    <span class="btn btn-sm btn-success"><i class="fa fa-check">&nbsp;Telah Dicek & Diverifikasi</button></i>
							 <?php }elseif($product->status2=='Telah Dicek & Ditolak') { ?>
							  <span class="btn btn-sm btn-danger"><i class="fa fa-window-close">&nbsp;Telah Dicek & Ditolak</button></i>
							 <?php } ?>
							 </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
