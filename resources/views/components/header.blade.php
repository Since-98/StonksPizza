<header class="main-header">
    <div class="logo">
        <img src="{{ asset('Photos\WhatsApp Image 2023-12-18 at 13.40.45_d35ca318.png') }}" alt="Pizza Logo">
    </div>
    <nav class="main-nav">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('bestellingen') }}">Order</a></li>
            <li><a href="{{ route('menu') }}">Menu</a></li>
            <li><a href="{{ route('drinks') }}">Drinks</a></li> <!-- Add a link to the Drinks page -->
            <li><a href="{{ url('/manager') }}">Manager</a></li>
            <li><a href="{{ route('cart') }}" class="inline-block px-2 py-1 rounded-full"><img src="Photos\cart.png" alt=""></a></li>


        </ul>



    </nav>
</header>
