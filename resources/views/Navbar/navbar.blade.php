<header>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="https://blog.kocoschools.com/wp-content/uploads/2022/05/530-5309946_to-google-forms-google-forms-logo-png-transparent.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Pengabsenan Siswa
      </a>
      <div class="text-end">
        @guest
        <a href="{{route('login')}}" class="btn btn-outline-dark me-2">Login</a>
        <a href="{{route('register')}}" class="btn btn-warning">Sign-up</a>
        @else
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
          </button>
          <ul class="dropdown-menu" aria-labelledby="userDropdown">
            <li>
              <form action="{{route('profile')}}">
              @csrf
              <button class="dropdown-item" type="submit">Profile</button>
              </form>
            </li>
            <li>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="dropdown-item" type="submit">Logout</button>
              </form>
            </li>
          </ul>
        </div>
            @csrf
        </form>
        @endguest
      </div>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</header>
