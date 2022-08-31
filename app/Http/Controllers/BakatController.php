<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bakat;

class BakatController extends Controller
{
    public function index()
    {
        $bakat = Bakat::all();
        return view('bakat.index', [
                'title' => 'bakat'
            ],compact('bakat'));
    }

    public function edit($id)
    {
        $bakat = Bakat::find($id);
        return view('bakat.edit', [
            'title' => 'bakat'
        ],compact('bakat'));
    }

    public function update(Request $request, $id)
    {
        $bakat = Bakat::find($id);
        $bakat->bakat = $request->bakat;
        $bakat->profesi = $request->profesi;
        $bakat->save();
        return redirect('data-bakat');
    }
}