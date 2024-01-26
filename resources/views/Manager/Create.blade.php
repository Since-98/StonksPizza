<!DOCTYPE html>
<head>
    @include('header')
</head>
<body>
    <form method="post" action="{{route('Manager.Store')}}">
        @csrf
        @method('post')

    <div>
        <label>Voornaam</label>
        <input type="text" name="voornaam" placeholder="voornaam" />
    </div>
    <div>
        <label>Achternaam</label>
        <input type="text" name="achternaam" placeholder="achternaam" />
    </div>
    <div>
        <label>Inkomen</label>
        <input type="text" name="inkomen" placeholder="inkomen" />
    </div>
    <div>
        <label>Functie</label>
        <input type="text" name="functie" placeholder="functie" />
    </div>
    <input type="submit" value="Create" name="bestelling">
    </form>
</body>
