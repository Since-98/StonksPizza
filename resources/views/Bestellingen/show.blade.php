<html>
<head>
    <title>Order Details</title>
</head>
<body>
    <h1>Order Details</h1>
    
    <p>Order ID: {{ $bestelling->id }}</p>

    <h2>Selected Cart Items:</h2>
    <ul>
        @foreach($cartItems as $item)
            <li>{{ $item->pizza }} - {{ $item->prijs }}</li>
        @endforeach
    </ul>

    <p>Total Price: {{ $totaal }}</p>
</body>
</html>
