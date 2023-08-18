<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/defi_mois.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/defi_mois.js') }}"></script>
    <title>Défi du mois</title>
</head>

<body>
    @include('layouts.partials.navbar')
    <section id="about">
        <div class="about container">

          <div class="ideainput">
            <form action="{{ route('defi_mois.perform') }}" method="post">
              <h1 class="section-title">défi du <span>mois</span></h1>
              <p id="defi_mois">{{ $data[0]->defi }}</p>
              <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
              <table>

                <tr>
                  <td>
                      <h1 <style></style>écrire votre <span style="color: red">Idée</span></h1>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="text" id="titre" name="titre" placeholder="entrer le titre">
                  </td>
                </tr>
                <tr>
                  <td>
                    <textarea type="text" name="idee" id="idea" placeholder="Entrer votre idée"></textarea>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="submit" name="submit" class="cta" value="envoyer" >
                  </td>
                </tr>
              </table>

            </form>


          </div>
          </div>
    </section>
      @include('layouts.partials.foot')
</body>

</html>
