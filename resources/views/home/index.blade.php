<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}" />
  <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
    <title>Boite à idée innovante</title>
</head>

<body>
    @include('layouts.partials.navbar')
    @auth
    {{auth()->user()->name}}
    <section id="hero">
        <div class="hero container">
            <div>
              <h1>La vision <span></span></h1>
              <h1>qui nourrit <span></span></h1>
              <h1>la créativité <span></span></h1>
            </div>
        </div>
    </section>
    @endauth
    @guest
    <section id="hero">
        <div class="hero container">
            <div>
                <h1>La vision <span></span></h1>
                <h1>qui nourrit <span></span></h1>
                <h1>la créativité <span></span></h1>
                <a href="{{ route('login') }}" type="button" class="cta">Voir les idées</a>
            </div>
        </div>
    </section>
    @endguest
    @include('layouts.partials.foot')
</body>

</html>
