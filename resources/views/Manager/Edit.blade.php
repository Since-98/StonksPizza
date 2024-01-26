<html>
    <head>
        <title>Aanpassen</title>
        @include('header')
</head>
<body>
    <form method="post" action="{{route('Manager.Update', ['medewerker' => $medewerker])}}">
        @csrf
        @method('put')
        <input type="hidden" name="id" value="{{$medewerker->id}}">

<div>
 <label>Voornaam</label>
 <input type="text" name="voornaam" value="{{$medewerker->voornaam}}"/>
    </div>
    <div>
 <label>Achternaam</label>
 <input type="text" name="achternaam" value="{{$medewerker->achternaam}}"/>
    </div>
    <label>Inkomen</label>
 <input type="text" name="inkomen" value="{{$medewerker->inkomen}}"/>
    </div>
    <label>Functie</label>
 <input type="text" name="functie" value="{{$medewerker->functie}}"/>
    </div>
    <button>Edit</button>
    </form>
</body>
