<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Pesantren App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="/">PESANTREN</a>
    <div>
      <a class="nav-link d-inline text-white" href="/">Beranda</a>
      <a class="nav-link d-inline text-white" href="/profil">Profil</a>
      <a class="nav-link d-inline text-white" href="/tata-tertib">Tata Tertib</a>
      <a class="nav-link d-inline text-white" href="/daftar">Pendaftaran</a>
    </div>
  </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
