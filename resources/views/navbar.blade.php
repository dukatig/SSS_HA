<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
        <a class="navbar-brand" href="/">
            {{Auth::check() ? Auth::user()->name : 'CAROZZA APP'}}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
  <!-- <div class="container-fluid">
    <a class="navbar-brand" href="#">CAROZZA APP</a> -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/manufacturers">Manufacturers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">Cars</a>
        </li>
        <li class="nav-item">
          <a  href="/car"
           class="btn btn-success btn-sm">
            Add New
          </a>
        </li>
        @guest
          <li class="nav-item">
            <a class="nav-link" href="/login">Log in to your account</a>
          </li>
          @endguest
          @auth
          <form class="nav-item mb-0" method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="nav-link" type="submit">Log out</button>
          </form>
          @endauth
      </ul>
    </div>
  </div>
</nav>