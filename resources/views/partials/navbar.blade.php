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