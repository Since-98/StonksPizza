<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<table border="2">
    <tr>
        <th>id</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Inkomen</th>
        <th>Functie</th>
        <th>edit</th>
</tr>
@foreach ($medewerkers as $medewerker)
<tr>
    <td>{{$medewerker->id}}</td>
    <td>{{$medewerker->voornaam}}</td>
    <td>{{$medewerker->achternaam}}</td>
    <td>{{$medewerker->inkomen}}</td>
    <td>{{$medewerker->functie}}</td>
    <td><a href="{{route('Songs.Edit', ['song' => $song])}}">edit</a></td>
</tr>
@endforeach
