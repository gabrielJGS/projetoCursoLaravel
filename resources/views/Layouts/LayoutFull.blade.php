<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.4/examples/pricing/ -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.6">
  <title>Projeto do Curso - @yield('title')</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/pricing/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon.ico">
  <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">
  <script src="https://kit.fontawesome.com/125c21ecbc.js" crossorigin="anonymous"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

<body>
  @include('Layouts.Menu')


  <div class="container">
    @yield('conteudo')

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <img class="mb-2" src="./bootstrap-solid.svg" alt="" width="24" height="24">
          <small class="d-block mb-3 text-muted">© 2017-2019</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Cool stuff</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Random feature</a>
            </li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Team feature</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Stuff for
                developers</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Another one</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Resource</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Resource name</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Another resource</a>
            </li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Final resource</a>
            </li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Team</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Locations</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Privacy</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Terms</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</body>

</html>