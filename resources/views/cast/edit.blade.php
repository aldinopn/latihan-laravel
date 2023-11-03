@extends('layout.main')

@section('container')

<form role="form" action={{ url('/cast' . $cast->id) }}  method="POST">
    @method('patch')
@csrf
    <div class="card-body">
    <div class="form-group">
    <label for="exampleInputtext1">Nama</label>
    <input type="text" id="nama" name="nama" class="form-control"  placeholder="Enter text" value="{{ $cast->nama }}">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div> 
    @enderror

    <div class="form-group">
    <label for="exampleInputtext1">Umur</label>
    <input type="text" id="umur" name="umur" class="form-control"  placeholder="Enter text" value="{{ $cast->umur }}">
    </div>
    @error('umur')
    <div class="alert alert-danger">{{ $message }}</div> 
    @enderror

    <div class="form-group">
    <label for="exampleInputtext2">Bio</label>
    <input type="text" id="bio" name="bio" class="form-control"  placeholder="Enter text" value="{{ $cast->bio }}">
    </div>
    @error('bio')
    <div class="alert alert-danger">{{ $message }}</div> 
    @enderror
    
    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>

@endsection

