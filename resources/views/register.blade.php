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
              <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login">Login</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
    
    <section class="ombak">
      <div class="container mt-4 text-center">
<div class="form col-lg-15">
    <h2 class="text-center"><b>Registration</b></h3>
        <hr>
        <div class="row">
            <form action="/register" method="post">
            @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" required="" >
                    <label for="name">Nama</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email" required="">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" required="">
                    <label for="password">Password</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="usia" class="form-control @error('usia') is-invalid @enderror" placeholder="usia" required>
                    <label for="usia">Usia</label>
                </div>
                <div class="form-floating">
                    <select class="form-select" id="pendidikan" name="pendidikan">
                      <option selected>Pendidikan</option>
                      <option value="SD">SD</option>
                      <option value="SMP">SMP</option>
                      <option value="SMA">SMA</option>
                    </select>
                </div>
                <div class="form-floating">
                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat" required>
                    <label for="alamat">Alamat</label>
                </div>
                <div class="form-floating">
                    <select class="form-select  @error('role') is-invalid @enderror" id="role" name="role">
                        <option selected>Role</option>
                        <option value="user">User</option>
                      </select>
                </div>
                <div class="form-check form-control mb-2" required>
                    <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki </label>
                    <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
                <hr>
            </form>
        </div>
</div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L30,128C60,128,120,128,180,112C240,96,300,64,360,64C420,64,480,96,540,133.3C600,171,660,213,720,213.3C780,213,840,171,900,144C960,117,1020,107,1080,128C1140,149,1200,203,1260,234.7C1320,267,1380,277,1410,282.7L1440,288L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>