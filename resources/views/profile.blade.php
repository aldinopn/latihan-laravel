@extends('layout.main')

@section ('container')


<html>
    <head>
        <style>
             body {
     background-color: #f9f9fa
 }

 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 @media (max-width:991.98px) {
     .padding {
         padding: 1.5rem
     }
 }

 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }

 .padding {
     padding: 5rem
 }

 .card {
     box-shadow: none;
     -webkit-box-shadow: none;
     -moz-box-shadow: none;
     -ms-box-shadow: none
 }

 .pl-3,
 .px-3 {
     padding-left: 1rem !important
 }

 .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 0
 }

 .card .card-title {
     color: #000000;
     margin-bottom: 0.625rem;
     text-transform: capitalize;
     font-size: 0.875rem;
     font-weight: 500
 }

 .card .card-description {
     margin-bottom: .875rem;
     font-weight: 400;
     color: #76838f
 }

 .table-responsive {
     display: block;
     width: 100%;
     overflow-x: auto;
     -webkit-overflow-scrolling: touch;
     -ms-overflow-style: -ms-autohiding-scrollbar
 }

 .table,
 .jsgrid .jsgrid-table {
     width: 100%;
     max-width: 100%;
     margin-bottom: 1rem;
     background-color: transparent
 }

 .table thead th,
 .jsgrid .jsgrid-table thead th {
     border-top: 0;
     border-bottom-width: 1px;
     font-weight: 500;
     font-size: .875rem;
     text-transform: uppercase
 }

 .table td,
 .jsgrid .jsgrid-table td {
     font-size: 0.875rem;
     padding: .875rem 0.9375rem
 }

 .badge {
     border-radius: 0;
     font-size: 12px;
     line-height: 1;
     padding: .375rem .5625rem;
     font-weight: normal
 }
 
 .progress {
    border-radius: 3px;
    height: 8px;
    margin-top:7px;
}

        </style>
    </head>
    <body>
        <div class="page-content page-container" id="page-content">
                  <div class="col-lg-12 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                         
                          <p class="card-description">
                            
                          </p>
                          <div class="table-responsive">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th style="text-align:center; ">
                                    No
                                  </th>
                                  <th style="text-align:center; ">
                                    Umur
                                  </th>
                                  <th style="text-align:center; ">
                                    Bio
                                  </th>
                                  <th style="text-align:center; ">
                                    Alamat
                                  </th>

                                </tr>
                              </thead>
    <tbody>
        @forelse ($profile as $key => $value)
        <tr>
            <td style="font-weight: bold">{{ $key+1 }}</td>
            <td style="font-weight: bold">{{ $value->umur }}</td>
            <td style="font-weight: bold">{{ $value->bio }}</td>
            <td style="font-weight: bold">{{ $value->alamat }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4">no data</td>
        </tr>
        @endforelse
    </tbody> 
    
</table>

@endsection