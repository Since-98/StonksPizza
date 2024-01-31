<html>
    <head>
        <title>Aanpassen</title>
        @include('components.header')
</head>
<body>
    <form method="post" action="{{route('Bestellingen.Update', ['bestelling' => $bestelling])}}">
        @csrf
        @method('put')
        <input type="hidden" name="id" value="{{$bestelling->id}}">

<div>

 <input type="text" name="datum" value="{{$bestelling->datum}}"/>
    </div>
    <label>Functie</label>
 <input type="text" name="status" value="{{$bestelling->status}}"/>
    </div>
    <button>Edit</button>
    </form>
</body>
