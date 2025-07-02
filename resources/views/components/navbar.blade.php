

  <div class="container custom-container fixed-top"  style="background-color: white !important;">
  <div class="navbar-custom p-2">
    <!-- Левая группа ссылок -->
    <div class="nav-group-left ms-0 ms-sm-4">
      <a href="/" class="nav-item {{ Request::is('/*') ? 'active' : '' }}">
        <i class="fas fa-home"></i>
        <span class="nav-text">Главная</span>
      </a>
      <a href="/books" class="nav-item {{ Request::is('books*') ? 'active' : '' }}">
        <i class="fas fa-book"></i>
        <span class="nav-text">Книги</span>
      </a>
      <a href="/authors" class="nav-item {{ Request::is(patterns: 'authors*') ? 'active' : '' }}">
        <i class="fas fa-feather-alt"></i>
        <span class="nav-text">Авторы</span>
      </a>
      <a href="/about" class="nav-item {{ Request::is('about*') ? 'active' : '' }}">
        <i class="fas fa-info"></i>
        <span class="nav-text">О нас</span>
      </a>
    </div>

    <!-- Правая группа (профиль / дропдаун) -->
    <div class="nav-group-right pe-3">
      <div class="dropdown">
        <a class="nav-item dropdown-toggle" href="/profile" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user"></i>
          <span class="nav-text">Гость</span>
        </a>
        <ul class="dropdown-menu"style="min-width: 200px;" aria-labelledby="userDropdown">
          <li><a class="dropdown-item" href="#">Войти</a></li>
          <li><a class="dropdown-item" href="#">Регистрация</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>

<script src="{{ asset('js/dropdown-scroll-blocker.js') }}"></script>



