<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>à propos</title>
    <link rel="stylesheet" href="{{ URL::asset('css/compte.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/compte.js') }}"></script>
</head>

<body>
    @include('layouts.partials.navbar')
    <section id="about">
        <div class="about container">
            <table>
              <tr>
                <td colspan="2" style="text-align: center;">
                    <img id="image_compte" src="{{URL::asset('/img/compte.png')}}" style="margin-left: auto; margin-right: auto; margin-bottom:50px;" >
                </td>
              </tr>

                <tr>
                    <td>
                        <h2 style="margin-bottom:30px; margin-right: 200px;">Nom d'utilisateur :</h2>
                    </td>
                    <td>
                        <p id="username" style="margin-bottom:30px;">{{$compte->username}}</p>
                    </td>
                </tr>
                <tr>
                  <td>
                    <h2 style="margin-bottom:30px; margin-right: 200px;">Nom :</h2>
                  </td>
                  <td>
                    <p style="margin-bottom:30px;">Rhouch</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h2 style="margin-bottom:30px; margin-right: 200px";>Prénom :</h2>
                  </td>
                  <td>
                    <p style="margin-bottom:30px;">Oussama</p>
                  </td>
                </tr>
                <tr>
                    <td>
                        <h2>Email :</h2>
                    </td>
                    <td>
                        <p id="email">{{$compte->email}}</p>
                    </td>
                </tr>

            </table>
        </div>
    </section>
      @include('layouts.partials.foot')
</body>

</html>
