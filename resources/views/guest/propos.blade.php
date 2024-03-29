<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>à propos</title>
    <link rel="stylesheet" href="{{ URL::asset('css/propos.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/welcome.js') }}"></script>
  </head>
  <body>
    @include('layouts.partials.navbar')
    <section id="about">
        <div class="about container">
            <div class="col-right" style="margin-left: 100px; margin-right: 100px;">
                <h1 class="section-title">à propos de <span>nous</span></h1>
                <h2>Boite à Idées Innovantes</h2>
                <p>Cette plateforme permet à l'entreprise une innovation ouverte, par l’implication des membres et salariés dans la conception et la déscision, où les salariés peuvent deposer et suivre leur idées ou alors voter pour d’autres idées, et les superviseurs peuvent gérer la plateforme en lançant un défi et en suivant l’évolution des idées postées.<br><br>Une petite spécification à ajouter est le fait qu’un salarié peut soit poster une idée generale, soit répondre à un défi lancé par un superviseur à une fréquence specifié par ce dernier.<br/><br>Les utilisateurs pouvant bénéficier des services de la platforme sont : l’administrateur, les superviseurs et les salariés.<br><br>Les droits d’accés pour les superviseurs sont :<br>
                  &nbsp;&nbsp;&nbsp;-Lancer le défi.<br>
                  &nbsp;&nbsp;&nbsp;-Consulter et supprimer les idées.<br><br>
                  Les droits d’accés pour les salariés sont :<br>
                  &nbsp;&nbsp;&nbsp;-Poster des idées.<br>
                  &nbsp;&nbsp;&nbsp;-Suivre leurs idées.<br>
                  &nbsp;&nbsp;&nbsp;-Consulter le défi et y repondre.<br>
                  &nbsp;&nbsp;&nbsp;-Consulter toutes les idées et pouvoir voter.</p>
            </div>
        </div>
    </section>
    @include('layouts.partials.foot')
  </body>
</html>
