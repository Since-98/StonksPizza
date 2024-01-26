<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('header')
</head>
<body>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Inkomen</th>
        <th>Functie</th>
        <th>Aanpassen</th>
</tr>



    @foreach ($medewerkers as $medewerker)
    <tr>
    <td>{{$medewerker->id}}</td>
    <td>{{$medewerker->Voornaam}}</td>
    <td>{{$medewerker->Achternaam}}</td>
    <td>{{$medewerker->Inkomen}}</td>
    <td>{{$medewerker->Functie}}</td>
    <td><a href="{{route('Manager.Edit', ['medewerker' => $medewerker])}}">edit</a></td>
    </tr>
    @endforeach

<button onclick="window.location='{{ route('Manager.create') }}'">create</button>
</body>
