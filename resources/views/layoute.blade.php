
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zayouma - Elegance & Modesty</title>
    <style>
        body {
            margin: 0;
            font-family: "Playfair Display", serif;
            color: #333;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: black;
            padding: 10px 15px;
            color: white;
            font-size: 16px;
        }

        nav img {
            width: 100px;
        }
        nav a{
            text-decoration: none;
            color: white;
        }

        ul {
            list-style: none;
            display: flex;
            gap: 15px;
            margin: 0;
            padding: 0;
        }

        li {
            cursor: pointer;
            font-size: 16px;
        }

        li:hover {
            color: beige;
        }


        .footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    text-align: center;
    padding: 15px;
    background-color: black;
    color: white;
    font-size: 14px;
}

    </style>
</head>
<body>
    
    <nav>
        <a href="/"><img src="{{ asset('images/logo.jpg') }}" alt="Zayouma Logo"></a>
        <ul>
        <li class="dropdown">
    <select id="categorySelect" onchange="location.href=this.value;">
        <option value="" disabled selected>Categories</option>
        <option value="/hijabs">Hijabs</option>
        <option value="/abayas">Abayas</option>
        <option value="/skirts">Skirts</option>
    </select>
</li>

            <a href="/cart"><li>your cart</li></a> 
            <a href="/connexion"><li>connexion</li></a>
        </ul>
    </nav>
    
    <div class="footer">
        &copy; 2025 Zayouma. All rights reserved.
    </div>
    @yield('content')
</body>
</html>