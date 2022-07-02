<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/register.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/register.js') }}"></script>
    <title>Inscription</title>
  </head>
  <body>
    <div class="container" id="container">
    	<div class="form-container sign-in-container">
        <form method="post" action="{{ route('register') }}">
          <h1 class="h3 mb-3 fw-normal" id="titre">S'inscrire</h1>
          @csrf
          <div class="selectdiv">
            <label>
            <select id="guard" name="guard" required>
              <option Value="user">Utilisateur</option>
              <option Value="admin">Superviseur</option>
            </select>
            </label>
          </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />




        <div class="form-group form-floating mb-3" style="width: 250px;">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Entrer votre Email" required="required" autofocus>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3" style="width: 250px;">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Entrer votre nom d'utilisateur" required="required" autofocus>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3" style="width: 250px;">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Entrer votre mot de passe" required="required">
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3" style="width: 250px;">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirmer votre Password" required="required">
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">S'inscrire</button>

    </form>
    	</div>
    	<div class="overlay-container">
    		<div class="overlay">
    			<div class="overlay-panel overlay-right">
    				<h1>Content de vous revoir</h1>
    				<p>Déja inscrit?</p>
    				<button class="ghost" id="signUp"><a href="{{ route('login') }}">Se connecter</a></button>
    			</div>
    		</div>
    	</div>
    </div>
  </body>
</html>
