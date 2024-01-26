<header class="main-header">
    <div class="logo">
        <img src="{{ asset('Photos\WhatsApp Image 2023-12-18 at 13.40.45_d35ca318.png') }}" alt="Pizza Logo">
    </div>
    <nav class="main-nav">
        <ul>
            <li><a href="{{ route('home') }}">home</a></li>
            <li><a href="{{ route('order') }}">order</a></li>
            <li><a href="{{ route('menu') }}">menu</a></li>
            <li><a href="{{ url('/register') }}">Login</a></li>
            <li><a href="{{ route('cart') }}" class="inline-block px-2 py-1 rounded-full"><img src="Photos\cart.png" alt=""></a></li>
             <span id="cart-item-count">{{ $cartItemCount }}</span>
            </a>
        </ul>

        <!-- Inside your header or navigation bar -->
        <div class="flex items-center space-x-4">
            <a href="{{ url('locale/en') }}" class="text-white uppercase">English</a>
            <span class="text-white">|</span>
            <a href="{{ url('locale/nl') }}" class="text-white uppercase">Nederlands</a>
        </div>
    </nav>
</header>
