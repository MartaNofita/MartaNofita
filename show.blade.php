@extends('layout/main')

@section('title','Database')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Detail Database</h1>
            <div class="row no-gutters">
    
    <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title"><b>{{ $students->Nama }}</b></h4>
              <p class="card-text">{{ $students->Npm }}</p>
              <p class="card-text">{{ $students->Alamat }}</p>
              <p class="card-text">{{ $students->Jurusan }}</p>
              <p class="card-text">{{ $students->Email }}</p>


              <a href="{{ $students->id }}/edit" class="btn btn-primary">Edit</a>
              
              <form action="{{ $students->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <a href="/students" class="card-link">back<<</a>
            </div>
          </div>

        </div>
    </div>
</div>
@endsection
   