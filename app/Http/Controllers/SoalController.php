<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soal;
use Illuminate\Support\Facades\DB;

class SoalController extends Controller
{
    public function index()
    {
        $soal = Soal::first()->paginate(10);
        return view('soal.index', [
            'title' => 'soal'
        ], compact('soal'));
    }

    public function tambah()
    {
        return view('soal.store',[
            'title' => 'tambah'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'soal' => 'required|max:255',
            'cf_pakar' => 'required'
        ]);

        Soal::create($validatedData);
        
        return redirect('/soal');
    }

    public function edit($id)
    {
        $soal=Soal::find($id);
        return view('soal.edit', [
            'title' => 'soal'
        ], compact('soal'));
    }

    public function update(Request $request, $id)
    {
        $soal = Soal::find($id);
        $soal->soal = $request->soal;
        $soal->cf_pakar = $request->cf_pakar;
        $soal->save();
        return redirect('soal');
    }

    public function destroy($id)
    {
        DB::table('soals')->where('id',$id)->delete();
        
        return redirect('/soal');
    }
}