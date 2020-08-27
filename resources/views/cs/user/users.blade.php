@extends('layouts2')
@section('title','Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Kelola User</div>
  
                <div class="card-body">
                  
				
				  
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Role Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        	<th scope="col"></th>
                        	<th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
						<?php $no = 0;?>
                        @foreach($user as $product)
						<?php $no++ ;?>
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$product->role_id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->username}}</td>
                                <td>{{$product->email}}</td>
					<td>
          {{ csrf_field() }}
		     <a href="{{ route('cs.user.create')}}" class="btn btn-info"><i class="fa fa-plus">&nbsp;Tambah</a></i>
	
		  </td>
		  <td>
          {{ csrf_field() }}
          <a href="{{ route('cs.user.edit',$product->id) }}" class="btn btn-primary"><i class="fa fa-edit">&nbsp;Edit</a></i>
		
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
