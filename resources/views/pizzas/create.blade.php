@extends('layouts.app')

@section('content')
<div class="wrapper create">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas/" method='POST'>
        @csrf

    
        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="crust">Crust</option>
            <option value="red crust">Red crust</option>
            <option value="blue crust">Blue crust</option>
            <option value="thin crust">Thin crust</option>
        </select>
        <fieldset>
            <label>Extra toppings</label>
            <input type="checkbox" name='toppings[]' value='mushrooms'>Mushrooms <br />
            <input type="checkbox" name='toppings[]' value='peppers'>Peppers <br />
            <input type="checkbox" name='toppings[]' value='garlic'>Garlic <br />
            <input type="checkbox" name='toppings[]' value='olives'>Olives <br />
        </fieldset>
        <input type="submit" value='Order Pizza'>
    </form>
</div>
@endsection
