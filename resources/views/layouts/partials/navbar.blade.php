<section id="header">
    <div class="header container">
        <div class="nav-bar">
            <div class="brand">
                <a href="#hero">
                    <h1><span>B</span>oite à <span>I</span>dées <span>I</span>nnovantes</h1>
                </a>
            </div>
            <div class="nav-list">
                <div class="hamburger">
                    <div class="bar"></div>
                </div>
                <ul>

                    @auth

                    @if(Auth::guard('user')->check())

                    <li><a href="{{ route('ecrire_idee.perform') }}">écrire idée</a></li>
                                        <li><a href="{{ route('idees_envoyees') }}">idées envoyées</a></li>
                                        <li><a href="{{ route('idees.perform') }}">toutes les idées</a></li>
                                        <li><a href="{{ route('defi_mois.perform') }}">défi du mois</a></li>
                                        <li><a href="{{ route('compte') }}">Compte</a></li>
                                        <li><a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Se déconnecter</a></li>



                  @elseif(Auth::guard('admin')->check())
                  <li><a href="{{ route('ecrire_defi.perform') }}">écrire défi</a></li>
                  <li><a href="{{ route('voir_defi') }}">défi du mois</a></li>
                  <li><a href="{{ route('idees_admin') }}">idées reçues</a></li>
                  <li><a href="{{ route('compte') }}">Compte</a></li>
                  <li><a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Se déconnecter</a></li>
                  @endif
                @endauth

                  @guest

                  <li><a href="/">Acceuil</a></li>
                  <li><a href="{{ route('propos') }}">à propos</a></li>
                  <li><a href="{{ route('contact') }}">Contact</a></li>
                  <li><a href="{{ route('login') }}" class="btn btn-outline-light me-2">Se connecter</a></li>
                  <li><a href="{{ route('register') }}" class="btn btn-warning">S'inscrire</a></li>

                  @endguest
                </ul>
            </div>
        </div>
    </div>
</section>
