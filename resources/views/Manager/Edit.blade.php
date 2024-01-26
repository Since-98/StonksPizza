<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee - Employee Management System</title>
    @include('components.header')

    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        div {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>

</head>
<body>
    <form method="post" action="{{route('Manager.Update', ['medewerker' => $medewerker])}}">
        @csrf
        @method('put')
        <input type="hidden" name="id" value="{{$medewerker->id}}">

        <div>
            <label for="voornaam">Voornaam</label>
            <input type="text" id="voornaam" name="voornaam" value="{{$medewerker->voornaam}}" required />
        </div>
        <div>
            <label for="achternaam">Achternaam</label>
            <input type="text" id="achternaam" name="achternaam" value="{{$medewerker->achternaam}}" required />
        </div>
        <div>
            <label for="inkomen">Inkomen</label>
            <input type="text" id="inkomen" name="inkomen" value="{{$medewerker->inkomen}}" required />
        </div>
        <div>
            <label for="functie">Functie</label>
            <input type="text" id="functie" name="functie" value="{{$medewerker->functie}}" required />
        </div>
        <button>Edit</button>
    </form>

@include('components.footer')
</body>
</html>
