<!DOCTYPE html>
<html lang="en">
<head>
    <title>StonksPizza</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/css/Default.css') }}">
</head>
<body>
@yield('content')

                <li><a href="#">Inloggen gebruiker</a></li>
                <li><a href="#">Inloggen personeel</a></li>
            </ul>
        </div>
        <div>
            <h3>About</h3>
            <ul>
                <li><a href="#">Over ons</a></li>
                <li><a href="#">Team</Table></a></li>
                <li><a href="#">Contact</Table></a></li>
            </ul>

<script>
    window.onscroll = function(ev) {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            document.getElementById("backtop").style.display = "block"
        }
        document.getElementById("backtop").addEventListener("click", click);

        function click() {
            document.getElementById("backtop").style.display = "none"
        }
    };
</script>
</body>
</html>
