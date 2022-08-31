@extends('layouts.main')

@section('container')
<div class="jumbotron">
        <table class="table">
            <tr>
                <td><h5>{{$test->name}} bakat kamu adalah </h5><br>
                    <h3><b>{{ strtoupper($test->bakat)}} {{ number_format($test->hasil,2) }}%</b> </h3>
                </td>
            </tr>
            @if ($test->bakat==='Linguistik')
                <tr>
                    <td>
                        <img src="{{url('image/g1.png')}}" class="img-fluid" alt="achivement" width="100" >
                        <h6>Beberapa contoh profesi bakat Linguistik seperti :  Penulis, Wartawan, Penyair, Pengacara, pembicara, Politikus</h6>
                    </td>
                </tr>
            @elseif ($test->bakat==='Logika-Matematika')
            <tr>
                <td>
                    <img src="{{url('image/g2.png')}}" class="img-fluid" alt="achivement" width="100" >
                    <h6>Beberapa contoh profesi bakat Logika-Matematika seperti :  Akuntan, Dosen/Guru, Matematika, Teknisi,Programmer</h6>
                </td>
            </tr>
            @elseif ($test->bakat==='Visual-Spasial')
            <tr>
                <td>
                    <img src="{{url('image/g3.png')}}" class="img-fluid" alt="achivement" width="100" >
                    <h6>Beberapa contoh profesi bakat Visual-Spasial seperti :  Pelukis, Design, Navigator, Arsitek</h6>
                </td>
            </tr>
            @elseif ($test->bakat==='Kinestik')
            <tr>
                <td>
                    <img src="{{url('image/g4.png')}}" class="img-fluid" alt="achivement" width="100" >
                    <h6>Beberapa contoh profesi bakat Kinestik seperti :  Aktor/Aktris, Model, Atlet, Penari</h6>
                </td>
            </tr>
            @elseif ($test->bakat==='Musikal')
            <tr>
                <td>
                    <img src="{{url('image/g5.png')}}" class="img-fluid" alt="achivement" width="100" >
                    <h6>Beberapa contoh profesi bakat Musikal seperti :  Musisi, Seniman, Penyanyi, Budayawan</h6>
                </td>
            </tr>
            @elseif ($test->bakat==='Interpersonal')
            <tr>
                <td>
                    <img src="{{url('image/g6.png')}}" class="img-fluid" alt="achivement" width="100" >
                    <h6>Beberapa contoh profesi bakat Interpersonal seperti  :  Sosiologi, Public Relation, Pengusaha, Pemuka Agama, Pramuniaga, Para Pendidik</h6>
                </td>
            </tr>
            @elseif ($test->bakat==='Intrapersonal')
            <tr>
                <td>
                    <img src="{{url('image/g7.png')}}" class="img-fluid" alt="achivement" width="100" >
                    <h6>Beberapa contoh profesi bakat Intrapersonal seperti :  Psikolog, Konselor, Trainer, Motivator</h6>
                </td>
            </tr>
            @elseif ($test->bakat==='Naturalis')
            <tr>
                <td>
                    <img src="{{url('image/g8.png')}}" class="img-fluid" alt="achivement" width="100" >
                    <h6>Beberapa contoh profesi bakat Naturalis seperti :  Antropolog, Arkeolog, Meteorolog, Neorolog</h6>
                </td>
            </tr>
            @elseif ($test->bakat==='Eksistensial')
            <tr>
                <td>
                    <img src="{{url('image/g9.png')}}" class="img-fluid" alt="achivement" width="100" >
                    <h6>Beberapa contoh profesi bakat Eksistensial seperti :  Teolog, Filsuf</h6>
                </td>
            </tr>
            @endif
        </table>    
</div>
@endsection