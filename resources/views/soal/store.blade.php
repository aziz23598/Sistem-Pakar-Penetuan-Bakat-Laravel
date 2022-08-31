@extends('layouts.main')

@section('container')
        <div class="row bg-primary p-3 text-light">
            <table width="100%">  
                <thead>
                    <tr>
                        <th colspan="2">Tambah Soal</th>
                    </tr>
                </thead>
                <tbody> 
                    <form method="POST" action="/soal/tambah">
                    @csrf
                        <tr> 
                            <td >Soal </td>
                            <td> <input style="width: 500px" type="text" name="soal" placeholder="soal"></td>
                        </tr>
                        <tr> 
                          <td >CF Pakar </td>
                          <td> <input style="width: 500px" type="text" name="cf_pakar" placeholder="CF Pakar"></td>
                      </tr>
                        <tr>
                            <td colspan="2">
                                <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>  
        </div>
@endsection
