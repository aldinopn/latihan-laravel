@extends('layout.main')

@section ('container')
<div class="container">
<table id="example1" class="table table-bordered table-striped">
    @if(session('success'))
    <div class="alert alert-danger">{{ session('success') }}</div>
    <script type="text/javascript">
        setTimeout(function() {
            document.querySelector('.alert').style.display = 'none';
        }, 5000);
    </script>
    @endif
    @if (session('status'))
    <div class="alert alert-success">{{session('status')}}</div> 
    <script type="text/javascript">
        setTimeout(function() {
            document.querySelector('.alert').style.display = 'none';
        }, 5000);
    </script>       
    @endif
    @if (session('edit'))
    <div class="alert alert-warning">{{session('edit')}}</div>   
    <script type="text/javascript">
        setTimeout(function() {
            document.querySelector('.alert').style.display = 'none';
        }, 5000);
    </script>     
    @endif
    <div class="text-right mb-4">
        <a href="/cast/create" class="btn btn-info" title="Tambah Cast Baru">+ Tambah</a>
    </div>
                             
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Bio</th>
            <th>Aksi</th>
        </tr>
        </thead>
    <tbody>
        @forelse ($cast as $key => $value)
        <tr>
            <td style="font-weight: bold">{{ $key+1 }}</td>
            <td style="font-weight: bold">{{ $value->nama }}</td>
            <td style="font-weight: bold">{{ $value->umur }}</td>
            <td style="font-weight: bold">{{ $value->bio }}</td>
            <td>
                <a href="{{url('/cast/show'.$value->id) }}" class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#myModal-{{ $value->id }}">
                    <i class="fas fa-eye" title="Show"></i>
                </a>
                <a href="{{ url('/cast/edit' . $value->id) }}" class="btn btn-info btn-sm">
                    <i class="fa fa-pen" aria-hidden="true"></i>
                </a>
                <form action="{{ url('/cast' . $value->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger btn-sm"><i class="fa fa-eraser" aria-hidden="true"></i></button>
                </form>
            </td>
        </tr>
       
        <tr>
             <!-- Modal -->
        <div class="modal fade" id="myModal-{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Cast</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        
                        <ul class="list-unstyled text-left">
                            <li><strong>Nama :</strong>&nbsp;{{ $value->nama }}</li>
                            <li><strong>Umur :</strong>&nbsp;{{ $value->umur }} Tahun</li>
                            <li><strong>Bio :</strong>&nbsp;{{  $value->bio }}</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        @empty    
    </tr>
        @endforelse
    </tbody> 
    
</table>

@endsection