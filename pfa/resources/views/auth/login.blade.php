<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/login.js') }}"></script>
  </head>
  <body>
    <div class="container" id="container">
    	<div class="form-container sign-in-container">
        <form method="post" action="{{ route('login') }}">
          <h1 class="h3 mb-3 fw-normal" id="titre">Se connecter</h1>
          @csrf
          <div>
            <div class="selectdiv">
              <label>
              <select id="guard" name="guard" required>
                <option Value="user">Utilisateur</option>
                <option Value="admin">Superviseur</option>
              </select>
              </label>
            </div>


          </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />

          <div class="form-group form-floating mb-3" style="width: 250px;">
              <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required="required" autofocus>
              @if ($errors->has('email'))
                  <span class="text-danger text-left">{{ $errors->first('email') }}</span>
              @endif
          </div>

          <div class="form-group form-floating mb-3" style="width: 250px;">
              <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Mot de passe" required="required">
              @if ($errors->has('password'))
                  <span class="text-danger text-left">{{ $errors->first('password') }}</span>
              @endif
          </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit">Se connecter</button>

      </form>
      	</div>
      	<div class="overlay-container">
      		<div class="overlay">
      			<div class="overlay-panel overlay-right">
      				<h1>Bienvenue</h1>
      				<p>Commencer votre journée avec nous</p>
      				<button class="ghost" id="signUp"><a href="{{ route('register') }}">S'inscrire</a></button>
      			</div>
      		</div>
      	</div>
      </div>
    </body>
  </html>
