@extends('layout.main')

@section('container')

<form role="form" action="/cast" method="POST">
@csrf
    <div class="card-body">
    <div class="form-group">
    <label for="exampleInputtext1">Nama</label>
    <input type="text" id="nama" name="nama" class="form-control"  placeholder="Enter text">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div> 
    @enderror

    <div class="form-group">
    <label for="exampleInputtext1">Umur</label>
    <input type="text" id="umur" name="umur" class="form-control"  placeholder="Enter text">
    </div>
    @error('umur')
    <div class="alert alert-danger">{{ $message }}</div> 
    @enderror

    <div class="form-group">
    <label for="exampleInputtext2">Bio</label>
    <input type="text" id="bio" name="bio" class="form-control"  placeholder="Enter text">
    </div>
    @error('bio')
    <div class="alert alert-danger">{{ $message }}</div> 
    @enderror
    
    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>

@endsection