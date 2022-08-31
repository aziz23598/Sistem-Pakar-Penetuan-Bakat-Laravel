@extends('layouts.main')

@section('container')
        <div class="jumbotron">
        <form action="/proses" method="POST">
        @csrf
          <table class="table">
            <?php $i=1;?>
          @foreach ($soal as $key=>$s)
            <tr>
              <td class="text-start">{{$i++}}. {{$s->soal}}</td>
            </tr>
            <tr>
              <td class="text-start">
              <div class="form-check form-check-inline" required>
                <label><input type="radio" data-type="number" name="j{{ $s->id }}" value="1.0" required ><label> Sangat Yakin </label> <br>
                <label><input type="radio" data-type="number" name="j{{ $s->id }}" value="0.8" ><label> Yakin </label> <br>
                <label><input type="radio" data-type="number" name="j{{ $s->id }}" value="0.6" ><label> Cukup Yakin </label><br>
                <label><input type="radio" data-type="number" name="j{{ $s->id }}" value="0.4" ><label> Sedikit Yakin </label><br>
                <label><input type="radio" data-type="number" name="j{{ $s->id }}" value="0" ><label> Tidak</label>
              </div> 
              </td>
            </tr> 
          @endforeach
            <tr>
              <td><button class="btn btn-md btn-warning" type="submit"> SELESAI </button></td>
            </tr>
          </table>
        </form>
      </div>
@endsection