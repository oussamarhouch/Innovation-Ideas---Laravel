<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/idees_envoyees.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/idees_envoyees.js') }}"></script>
    <title>Idées envoyées</title>
</head>

<body>
    @include('layouts.partials.navbar')
    <section id="about">
        <div class="about container">
          <div class="col-right">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="chercher une idée" title="Type in a name"><br><br><br>
            <h1 class="section-title" style="text-align: center;">Vos <span>Idées</span></h1><br><br><br>
            <div id="all_data">
            @foreach($idee as $key => $data)
            <table class="idea_table">
              <tr class="description_box">
                  <th class="titre_box" colspan="3"><span>Titre:</span> {{$data->titre}}</th>

              </tr>
              <tr class="descrip">
                <th class="username_box" colspan="2"><span>Publié par:</span> {{$data->username}}</th>
                <th class="rating_box"><span>évaluation:</span> {{$data->rating}}</th>
              </tr>
              <tr>
                <td bgcolor="#FFFFFF" colspan="3">&nbsp;</td>
              </tr>
              <tr class=idea_container>
                <td class="idee_box" colspan="3">{{$data->idee}}</td>
              </tr>
            </table>
          @endforeach
        </div>
          </div>
          <script>
function myFunction() {
  var input, filter, div, table, tr, td, i, j, k, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("all_data");
  table = div.getElementsByTagName("table");
  for (j = 0; j <table.length;j++) {
    tr = table[j].getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      for(k = 0; k < 5; k++){
        td = tr[i].getElementsByTagName("td")[k];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            table[j].style.display = "";
          } else {
            table[j].style.display = "none";
          }
        }
      }
    }
  }
}
</script>
          </div>
    </section>
      @include('layouts.partials.foot')
</body>

</html>
