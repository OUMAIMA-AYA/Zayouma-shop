@extends('layoute')
@section('content')
    <style>

        .hero {
            text-align: center;
            padding: 50px 20px;
            color: white;
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('{{ asset('images/Podcast-Thumbnails-3.png') }}') no-repeat center/cover;
            position: relative;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            font-size: 18px;
        }

        .hero h1 {
            font-size: 40px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .hero p {
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
        }

        .exemples {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 40px 20px;
        }

        .exemples img {
            width: 30%;
            max-width: 350px;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .exemples img:hover {
            transform: scale(1.05);
        }

    </style>
</head>
<body>
   
    
    <div class="hero">
        <div class="hero-content">
            <h1>Welcome to Zayouma</h1>
            <p>Discover elegance and modesty with our carefully curated collection of hijabs, abayas, and accessories. Elevate your style with timeless fashion.</p>
        </div>
    </div>

    <div class="exemples">
        <img src="{{ asset('images/hijabi3.jpg') }}" alt="Hijabi Style 1">
        <img src="{{ asset('images/Unknown-6.jpg') }}" alt="Hijabi Style 3">
        <img src="{{ asset('images/Niqab.jpg') }}" alt="Hijabi Style 2">
    </div>
    
@endsection