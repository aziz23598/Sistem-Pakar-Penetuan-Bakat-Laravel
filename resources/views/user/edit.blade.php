<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table width="100%">  
                        <thead>
                            <th colspan="2">Edit Data User No {{$user->id}}</th>
                        </thead>
                        <tbody> 
                            <form method="POST" action="{{ url('user/update/'.$user->id) }} ">
                            @csrf
                            <tr> 
                                <td >Nama </td>
                                <td>: <input style="width: 500px" type="text" name="name" value="{{ $user->name }}"></td>
                            </tr>
                            <tr> 
                                <td >Usia </td>
                                <td>: <input style="width: 500px" type="text" name="usia" value="{{ $user->usia }}"></td>
                            </tr>
                            <tr> 
                                <td >Pendidikan </td>
                                <td>: <input style="width: 500px" type="text" name="pendidikan" value="{{ $user->pendidikan }}"></td>
                            </tr>
                            <tr>
                                <td >Alamat </td>
                                <td>: <input style="width: 500px" type="text" name="alamat" value="{{ $user->alamat }}"></td>
                            </tr>
                            <tr>
                                <td >Jenis Kelamin </td>
                                <td>: <input style="width: 500px" type="text" name="jenis_kelamin" value="{{ $user->jenis_kelamin }}"></td>
                            </tr>
                            <tr>
                                <td >Jawaban 1 </td>
                                <td>: {{ $user->j1 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 2 </td>
                                <td>: {{ $user->j2 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 3 </td>
                                <td>: {{ $user->j3 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 4 </td>
                                <td>: {{ $user->j4 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 5 </td>
                                <td>: {{ $user->j5 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 6 </td>
                                <td>: {{ $user->j6 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 7 </td>
                                <td>: {{ $user->j7 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 8 </td>
                                <td>: {{ $user->j8 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 9 </td>
                                <td>: {{ $user->j9 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 10 </td>
                                <td>: {{ $user->j10 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 11 </td>
                                <td>: {{ $user->j11 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 12 </td>
                                <td>: {{ $user->j12 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 13 </td>
                                <td>: {{ $user->j13 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 14 </td>
                                <td>: {{ $user->j14 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 15 </td>
                                <td>: {{ $user->j15 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 16 </td>
                                <td>: {{ $user->j16 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 17 </td>
                                <td>: {{ $user->j17 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 18 </td>
                                <td>: {{ $user->j18 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 19 </td>
                                <td>: {{ $user->j19 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 20 </td>
                                <td>: {{ $user->j20 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 21 </td>
                                <td>: {{ $user->j21 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 22 </td>
                                <td>: {{ $user->j22 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 23 </td>
                                <td>: {{ $user->j23 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 24 </td>
                                <td>: {{ $user->j24 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 25 </td>
                                <td>: {{ $user->j25 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 26 </td>
                                <td>: {{ $user->j26 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 27 </td>
                                <td>: {{ $user->j27 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 28 </td>
                                <td>: {{ $user->j28 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 29 </td>
                                <td>: {{ $user->j29 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 30 </td>
                                <td>: {{ $user->j30 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 31 </td>
                                <td>: {{ $user->j31 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 32 </td>
                                <td>: {{ $user->j32 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 33 </td>
                                <td>: {{ $user->j33 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 34 </td>
                                <td>: {{ $user->j34 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 35 </td>
                                <td>: {{ $user->j35 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 36 </td>
                                <td>: {{ $user->j36 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 37 </td>
                                <td>: {{ $user->j37 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 38 </td>
                                <td>: {{ $user->j38 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 39 </td>
                                <td>: {{ $user->j39 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 40 </td>
                                <td>: {{ $user->j40 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 41 </td>
                                <td>: {{ $user->j41 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 42 </td>
                                <td>: {{ $user->j42 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 43 </td>
                                <td>: {{ $user->j43 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 44 </td>
                                <td>: {{ $user->j44 }}</td>
                            </tr>
                            <tr>
                                <td >Jawaban 45 </td>
                                <td>: {{ $user->j45 }}</td>
                            </tr>
                            <tr>
                                <td >Bakat </td>
                                <td>: {{ $user->bakat }}</td>
                            </tr>
                            <tr>
                                <td >Presentase </td>
                                <td>: {{ $user->hasil }}%</td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2">
                                    <x-button type="submit" class="ml-3">Simpan</x-button>
                                </td>
                            </tr>
                            </form>
                        </tbody>
                    </table>  
                                 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
