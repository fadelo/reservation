<nav class="navbar navbar-inverse navbar-dark bg-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('index_path') }}">FANAP - Réservation</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ route('index_path') }}">Home</a></li>
            <li><a href="{{ route('about_path') }}">About</a></li>
            <li><a href="{{ route('faq_path') }}">FAQ</a></li>
            <li><a href="{{ route('contact_path') }}">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li class="hidden-xs">
                <p class="navbar-btn">
                    <a href="#" class="btn btn-primary" style="margin-right: 20px;">Se connecter</a>
                </p>
              </li>
              <li class="hidden-lg"><a href="#">Se connecter</a></li>
              <li class="hidden-xs">
                <p class="navbar-btn">
                    <a href="#" class="btn btn-primary">S'inscrire</a>
                </p>
              </li>
              <li class="hidden-lg"><a href="#">S'inscrire</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>