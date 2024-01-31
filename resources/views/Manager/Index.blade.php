@extends('layouts.app-layout')
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body> --}}
    @section('content')


    <form method="get" action="{{ route('home') }}">
    </form>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-responsive-nav-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-responsive-nav-link>
    </form>
    <meta charset="UTF-8">
    <title>Employee Management System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }

        h1 {
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 320px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        td {
            background-color: #ecf0f1;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s;
            display: block;
            margin: 20px auto;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
     <div class="container">
        <h1>Employee List</h1>

        <table border="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Income</th>
                    <th>Position</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @if (Auth::check())
                @foreach ($medewerkers as $medewerker)
                <tr>
                    <td>{{$medewerker->id}}</td>
                    <td>{{$medewerker->Voornaam}}</td>
                    <td>{{$medewerker->Achternaam}}</td>
                    <td>€{{$medewerker->Inkomen}}</td>
                    <td>{{$medewerker->Functie}}</td>
                    <td><a href="{{route('Manager.Edit', ['medewerker' => $medewerker])}}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button onclick="window.location='{{ route('Manager.create') }}'">Create New Employee</button>
        @endif
    </div>
    @endsection
{{-- </head>
</body>
</html> --}}


