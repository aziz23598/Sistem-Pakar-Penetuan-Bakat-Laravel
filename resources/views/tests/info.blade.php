@extends('layouts.main')

@section('container')
    <div class="jumbotron">
        <table class="table">
            <tr>
                <th colspan="2"><h2>PERHATIAN!!!</h2></th>
            </tr>
            <tr>
                <td>1.</td>
                <td class="text-start">Pilih pernyataan yang paling mewakili kepribadianmu pada salah satu jawaban yang tersedia</td>
            </tr>
            <tr>
                <td>2.</td>
                <td class="text-start">Tidak ada jawaban yang benar atau salah, maka jawablah dengan objektif sesuai kepribadian kamu</td>
            </tr>
            <tr>
                <td>3.</td>
                <td class="text-start">Jika sudah siap klik tombol Tes dibawah ini</td>
            </tr>
            <tr>
                <td colspan="2"><a href="/test/{{Auth::user()->id }}"><button class="w-50 btn btn-lg btn-warning" type="submit"> TES </button></a></td>
            </tr>
        </table>          
    </div>
@endsection