@extends('layouts.app-layout')

@section('content')
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

    input[type="submit"] {
       background-color: #4caf50;
       color: #fff;
       padding: 10px 20px;
       border: none;
       border-radius: 4px;
       cursor: pointer;
       font-size: 16px;
       transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
       background-color: #45a049;
    }
 </style>
  <form method="post" action="{{route('Manager.Store')}}">
    @csrf
    @method('post')

    <div>
       <label for="voornaam">Voornaam</label>
       <input type="text" id="voornaam" name="voornaam" placeholder="Voornaam" required />
    </div>
    <div>
       <label for="achternaam">Achternaam</label>
       <input type="text" id="achternaam" name="achternaam" placeholder="Achternaam" required />
    </div>
    <div>
       <label for="inkomen">Inkomen</label>
       <input type="text" id="inkomen" name="inkomen" placeholder="Inkomen" required />
    </div>
    <div>
       <label for="functie">Functie</label>
       <input type="text" id="functie" name="functie" placeholder="Functie" required />
    </div>
    <input type="submit" value="Create" name="bestelling">
 </form>

@stop
