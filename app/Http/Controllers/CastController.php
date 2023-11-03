<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\Cast;
use Illuminate\Support\Facades\DB;



class CastController extends Controller
{
    public function cast()
    {
            $cast = DB::table('cast')->get();
            return view('cast.cast',compact("cast"));

            // $cast = DB::table('cast')->orderBy('nama', 'asc')->get();
            // return view('cast.cast', ['cast' => $cast]);
    }

    public function create()
    {
            return view('cast.create');
    }
    
    public function store(request $request)
    {
       
       $validation = $request-> validate([
        "nama" => 'required',
        "umur" => 'required',
        "bio" => 'required'
       ]);
       
        $query = DB::table('cast')->insert([
        "nama" => $request['nama'],
        "umur" => $request['umur'],
        "bio" => $request['bio']
       ]);

       return redirect('/cast')->with('success','Data berhasil disimpan');
    }

    public function edit(int $id)
    {
        $cast = DB::table('cast')->where('id',$id)->first();
        // dd ($cast);
        return view("cast/edit", compact("cast"));
    }

    public function update(Request $request, int $id)
    {
        $update = DB::table('cast')->where('id', $id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio
        ]);
    
        return redirect('cast')->with('status','berhasil update');
    }

    public function delete($id)
    {
        DB::table('cast')->where('id', $id)->delete();
        return redirect('cast')->with('status','berhasil dihapus');
    }

     public function show($id)
    {
        $cast = DB::table('cast')->find($id);
            return view('show', compact('cast'));
        
    }

    

    
}

//         if($update) {
//                 return "update data berhasil";
//         } else{
//                 return "gagal update data";
//         }
//     }
       
//        $validation = $request-> validate([
//         "nama" => 'required',
//         "umur" => 'required',
//         "bio" => 'required'
//        ]);
       
//         $update = DB::table('cast')->update([
//         "nama" => $request['nama'],
//         "umur" => $request['umur'],
//         "bio" => $request['bio']
//        ]);

//        return redirect('/cast')->with('success','Data berhasil disimpan');
// }