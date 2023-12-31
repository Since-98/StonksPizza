<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stonks Pizza</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <header class="main-header">
        <div class="logo">
            <img src="{{ asset('Photos\WhatsApp Image 2023-12-18 at 13.40.45_d35ca318.png') }}" alt="Pizza  Logo">
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="#">Deals</a></li>
                <li><a href="#">Track Order</a></li>
                <li> <a href="#" >Login</a></li>
                <li><a href="#" class="inline-block px-2 py-1 rounded-full"><img src="Photos\cart.png" alt=""></a></li>

            </ul>

        </nav>
    </header>
</body>
</html>
