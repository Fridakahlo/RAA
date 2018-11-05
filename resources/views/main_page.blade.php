<!-- @extends('mon_template')
 
@section('titre')
    Missions
@stop
 
@section('contenu')
    @parent
    <p>Contenu de la page</p>
@stop -->

	
<!doctype html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Mission</title>     
   </head>
   <body>
        @foreach($missions as $mission)
            <h3>Agent: {{ $mission->agent }}</h3>
            <p>Cible: {{ $mission->cible }}</p>
            <p>Description: {{ $mission->description }}</p>
            <p>Localisation: {{ $mission->localisation }}</p>
            
        @endforeach
        
   </body>
</html>






				