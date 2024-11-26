<footer class="bg-dark text-white pt-4">
  <div class="container">
    <div class="text-center">
      <div class="col-md-4 mb-3 mx-auto">
        <h5>Elérhetőségek</h5>
        <p style="margin-top: 10px;">Az alkalmazás iskolai projektként jött létre.</p>
      </div>
      <div class="col-md-4 mb-3 mx-auto">
        <h5>Oldalak</h5>
        <ul style="margin-top: 10px;" class="list-unstyled row">
          @guest
          <li class="col"><a href="/" class="text-white text-decoration-none">Kezdőlap</a></li>
          @endguest
          @auth
          <li class="col"><a href="/hr" class="text-white text-decoration-none">Menü</a></li>
          <li class="col"><a href="/penzugy" class="text-white text-decoration-none">Menü</a></li>
          <li class="col"><a href="/profil" class="text-white text-decoration-none">Profil</a></li>
          @endauth
          <li class="col"><a href="/segitseg" class="text-white text-decoration-none">Segítség</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="bg-secondary text-center py-2 mt-4">
    <small>&copy; 2024 | Pumpkin Studio</small>
  </div>
</footer>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
