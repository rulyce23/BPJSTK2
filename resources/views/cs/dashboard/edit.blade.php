@extends('layouts2')
@section('title','Edit Pelanggan')
@section('content')
<div class="col-lg-6">
    {{-- <div class="card border-left-primary"> --}}
    <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
        </div>
        <div class="card-body">
	 <form method="post" action="{{ route('cs.dashboard.editpost', $data->id) }}">
          @method('PATCH')
          @csrf
          <label>Nama</label>
          <input type="text" class="form-control form-control-user" name="nama" id="nama" maxlength="50" placeholder="Edit Nama Pelanggan" value="{{$data->nama}}">
        </div>
		<p class="card-body text-primary">Note :Ubah No KPJ Jika Nomor KPJ Customer Salah</p>
		<div class="card-body">
          <label>No KPJ</label>
          <input type="text" class="form-control form-control-user" name="no_kpj" id="no_kpj"  maxlength="25" placeholder="Edit No KPJ" value="{{$data->no_kpj}}">
        </div>
			<div class="card-body">
          <label>Klaim</label>
        <select option="klaim" name="klaim" class="form-control-user">
			<option value="JHK">JHK</option>
			<option value="JKM">JKM</option>
			<option value="JKK">JKK</option>
			<option value="JP">JP</option>
	    </select>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save changes</button>
      </div>
      </div>
    </form>
	
	</div>
		      </div>
        </div>
    </div>
</div>

      </div>
	<script>
  function edit(id_) {
    var id_t = $(id).attr('data-id');
    console.log(id_t);
    $.ajax({
      type :'GET',
      url : 'Cs/getDetailCustomer/'+id_t,
      success: function (respons) {
        var jsn = $.parseJSON(respons);
        var id = jsn.id;
        var nama = jsn.nama;
        var no_kpj = jsn.no_kpj;
        var klaim = jsn.klaim;
        $('#id').val(jsn.id);
        $('#nama').val(nama);
        $('#no_kpj').val(no_kpj);
        $('#klaim').val(klaim);
      }
    })
  }
</script>
        </div>
    </div>
</div>

@endsection
