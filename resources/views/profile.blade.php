<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>Tes Bakat Anak | {{ $title }} </title>
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="/">Tes Bakat Anak</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="navbar-brand" href="/profile/{{Auth::user()->id }}">{{Auth::user()->name}}</a>
              </li>
              @can('admin')
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/admin">Administrator</a>
              </li>
              @endcan
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Bakat") ? 'active' : '' }}" href="/bakat">Bakat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" {{ ($title === "Logout") ? 'active' : ''}} href="/logout"> Log Out</a></li>
            </ul>
          </div>
        </div>
    </nav>
    
    <section class="ombak">
      <div class="container mt-4 text-center">
    <div class="jumbotron">
        <table class="table">
            <tr>
                <th colspan="2"><h2>Data Diri</h2></th>
            </tr>
            <tr>
                <td class="text-start">Nama</td>
                <td class="text-start">: {{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <td class="text-start">Email</td>
                <td class="text-start">: {{ Auth::user()->email }}</td>
            </tr>
            <tr>
                <td class="text-start">Usia</td>
                <td class="text-start">: {{ Auth::user()->usia }}</td>
            </tr>
            <tr>
                <td class="text-start">Pendidikan</td>
                <td class="text-start">: {{ Auth::user()->pendidikan }}</td>
            </tr>
            <tr>
                <td class="text-start">Alamat</td>
                <td class="text-start">: {{ Auth::user()->alamat }}</td>
            </tr>
            <tr>
                <td class="text-start">Jenis Kelamin</td>
                <td class="text-start">: {{ Auth::user()->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td class="text-start">Presentase</td>
                <td class="text-start">: {{ Auth::user()->hasil }}%</td>
            </tr>
            <tr>
                <td class="text-start">Bakat</td>
                <td class="text-start">: {{ Auth::user()->bakat }}</td>
            </tr>
            <tr>
                <td colspan="2"><a href="/profile/edit/{{Auth::user()->id }}"><button class=" btn btn-md btn-success" type="submit"> Edit Profile </button></a></td>
            </tr>
        </table>          
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L30,128C60,128,120,128,180,112C240,96,300,64,360,64C420,64,480,96,540,133.3C600,171,660,213,720,213.3C780,213,840,171,900,144C960,117,1020,107,1080,128C1140,149,1200,203,1260,234.7C1320,267,1380,277,1410,282.7L1440,288L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
</section>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>