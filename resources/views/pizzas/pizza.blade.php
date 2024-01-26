<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stonk's Pizza</title>
    @vite('resources/css/app.css')
    @include('components.header')
</head>
<body >

       
    <section class="menu container mx-auto py-8">
        <h1 class="text-xl font-bold mb-8">All pizzas</h1>
        <div class="grid grid-cols-4 col-gap-12 row-gap-18">
        <div class="pizza-item text-center">
            <img class="h-40 mb-4 mx-auto" src="Photos\Pizzani-Pizza-3-600x477.jpg" alt="">
            <h2 class="mb-2 text-lg"></h2>
            <select class="size py-1 px-4 rounded-full uppercase text-xs">
                <option value="small"></option>
                <option value="medium"></option>
                <option value="large"></option>
            </select>
            <div class="flex items-center justify-center mt-4">
                <div class="price-and-cart flex items-center">
                    <span class="font-bold text-lg mr-4"></span>
                    <button class="add-to-cart py-1 px-6 rounded-full flex items-center font-bold">
                        <span>+</span>
                        <span class="ml-2">Toevoegen</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="pizza-item text-center">
            <img class="h-40 mb-4 mx-auto" src="Photos\Pizzani-Pizza-3-600x477.jpg" alt="">
            <h2 class="mb-2 text-lg">Margherita</h2>
            <select class="size py-1 px-4 rounded-full uppercase text-xs">
                <option value="small">Klein</option>
                <option value="medium">Medium</option>
                <option value="large">Groot</option>
            </select>
            <div class="flex items-center justify-center mt-4">
                <div class="price-and-cart flex items-center">
                    <span class="font-bold text-lg mr-4">£6</span>
                    <button class="add-to-cart py-1 px-6 rounded-full flex items-center font-bold">
                        <span>+</span>
                        <span class="ml-2">Toevoegen</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="pizza-item text-center">
            <img class="h-40 mb-4 mx-auto" src="Photos\Pizzani-Pizza-3-600x477.jpg" alt="">
            <h2 class="mb-2 text-lg">Margherita</h2>
            <select class="size py-1 px-4 rounded-full uppercase text-xs">
                <option value="small">Klein</option>
                <option value="medium">Medium</option>
                <option value="large">Groot</option>
            </select>
            <div class="flex items-center justify-center mt-4">
                <div class="price-and-cart flex items-center">
                    <span class="font-bold text-lg mr-4">£6</span>
                    <button class="add-to-cart py-1 px-6 rounded-full flex items-center font-bold">
                        <span>+</span>
                        <span class="ml-2">Toevoegen</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="pizza-item text-center">
            <img class="h-40 mb-4 mx-auto" src="Photos\Pizzani-Pizza-3-600x477.jpg" alt="">
            <h2 class="mb-2 text-lg">Margherita</h2>
            <select class="size py-1 px-4 rounded-full uppercase text-xs">
                <option value="small">Klein</option>
                <option value="medium">Medium</option>
                <option value="large">Groot</option>
            </select>
            <div class="flex items-center justify-center mt-4">
                <div class="price-and-cart flex items-center">
                    <span class="font-bold text-lg mr-4">£6</span>
                    <button class="add-to-cart py-1 px-6 rounded-full flex items-center font-bold">
                        <span>+</span>
                        <span class="ml-2">Toevoegen</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="pizza-item text-center">
            <img class="h-40 mb-4 mx-auto" src="Photos\Pizzani-Pizza-3-600x477.jpg" alt="">
            <h2 class="mb-2 text-lg">Margherita</h2>
            <select class="size py-1 px-4 rounded-full uppercase text-xs">
                <option value="small">Klein</option>
                <option value="medium">Medium</option>
                <option value="large">Groot</option>
            </select>
            <div class="flex items-center justify-center mt-4">
                <div class="price-and-cart flex items-center">
                    <span class="font-bold text-lg mr-4">£6</span>
                    <button class="add-to-cart py-1 px-6 rounded-full flex items-center font-bold">
                        <span>+</span>
                        <span class="ml-2">Toevoegen</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="pizza-item text-center">
            <img class="h-40 mb-4 mx-auto" src="Photos\Pizzani-Pizza-3-600x477.jpg" alt="">
            <h2 class="mb-2 text-lg">Margherita</h2>
            <select class="size py-1 px-4 rounded-full uppercase text-xs">
                <option value="small">Klein</option>
                <option value="medium">Medium</option>
                <option value="large">Groot</option>
            </select>
            <div class="flex items-center justify-center mt-4">
                <div class="price-and-cart flex items-center">
                    <span class="font-bold text-lg mr-4">£6</span>
                    <button class="add-to-cart py-1 px-6 rounded-full flex items-center font-bold">
                        <span>+</span>
                        <span class="ml-2">Toevoegen</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="pizza-item text-center">
            <img class="h-40 mb-4 mx-auto" src="Photos\Pizzani-Pizza-3-600x477.jpg" alt="">
            <h2 class="mb-2 text-lg">Margherita</h2>
            <select class="size py-1 px-4 rounded-full uppercase text-xs">
                <option value="small">Klein</option>
                <option value="medium">Medium</option>
                <option value="large">Groot</option>
            </select>
            <div class="flex items-center justify-center mt-4">
                <div class="price-and-cart flex items-center">
                    <span class="font-bold text-lg mr-4">£6</span>
                    <button class="add-to-cart py-1 px-6 rounded-full flex items-center font-bold">
                        <span>+</span>
                        <span class="ml-2">Toevoegen</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="pizza-item text-center">
            <img class="h-40 mb-4 mx-auto" src="Photos\Pizzani-Pizza-3-600x477.jpg" alt="">
            <h2 class="mb-2 text-lg">Margherita</h2>
            <label class="mr-4">
                <select class="size py-1 px-4 rounded-full uppercase text-xs">
                    <option value="small">Klein</option>
                    <option value="medium">Medium</option>
                    <option value="large">Groot</option>
                </select>
            <div class="flex items-center justify-center mt-4">
                <div class="price-and-cart flex items-center">
                    <span class="font-bold text-lg mr-4">£6</span>
                    <button class="add-to-cart py-1 px-6 rounded-full flex items-center font-bold">
                        <span>+</span>
                        <span class="ml-2">Toevoegen</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
    </section>

    @include('components.footer')
</body>
</html>
