
<div class="bestelmenu">
    <h1>Bestel menu</h1>
    <ul>
        @foreach(session('winkelwagen', []) as $item)
            <li style="display: flex; justify-content: space-around; border: 2px solid black">
                <label>{{ $item['aantal'] }}</label>
                <label>{{ $item['naam'] }}</label>
                <label>€{{ $item['prijs'] }}</label>
                <form method="POST" action="{{ url('/deletefood') }}">
                    @csrf
                    <input type="hidden" name="index" value="{{ $loop->index }}">
                    <button type="submit" style="color: red; font-size: x-large">X</button>
                </form>
                <form method="POST" action="{{ url('/editfood') }}">
                    @csrf
                    <input type="hidden" name="index" value="{{ $loop->index }}">
                    <button type="submit" style="color: lightseagreen; font-size: x-large">Wijzig</button>
                </form>
            </li>
        @endforeach
    </ul>
    <h3>Total Price: €{{ array_sum(array_column(session('winkelwagen', []), 'prijs')) }}</h3>
    <button class="ingredientbutton">Bezorgen</button>
    <button class="bestelbutton">Afhalen</button>
</div>
</body>

<script>
function ingredientsFunction(value)
{
    alert(value);
}
</script>

</html>
