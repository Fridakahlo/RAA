<html>
    <body>
        <h1>@yield('titre')</h1>
        @section('contenu')
            <p>Agent : {{ $mission->agent }}</p>
			<p>Cible : {{ $mission->cible }}</p>
			<p>Description : {{ $mission->description }}</p>
			<p>Localisation :{{ $mission->localisation }}</p>
        @show
    </body>
</html>