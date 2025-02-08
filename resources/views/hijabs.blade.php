@extends('layoute')
@section('content')
<style>
    /* General Styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
}

/* Main Container for Products */
.products-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
    padding: 40px;
    margin: 5px;
    justify-items: center;
}

/* Individual Product Card */
.product-card {
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    text-align: center;
    width: 100%;
    max-width: 250px;
    padding: 20px;
}

.product-card:hover {
    transform: translateY(-10px);
}

/* Image Styles */
.product-image {
    width: 100%;
    height: auto;
    border-radius: 8px;
    object-fit: cover;
    margin-bottom: 15px;
}

/* Product Name and Price */
.product-info {
    text-align: center;
}

.product-name {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin: 10px 0;
}

.product-price {
    font-size: 16px;
    color: #666;
    font-weight: normal;
}

/* Message for No Products Found */
.no-products {
    text-align: center;
    font-size: 18px;
    color: #333;
    margin-top: 50px;
    font-weight: bold;
}

</style>
    <div class="products-container">
        @if ($hijabs->count() > 0)
            @foreach ($hijabs as $hijab)
                <div class="product-card">
                    <img src="{{ asset('storage/' . $hijab->image_path) }}" alt="{{ $hijab->name }}" class="product-image">
                    <div class="product-info">
                        <p class="product-name">{{ $hijab->name }}</p>
                        <p class="product-price">${{ $hijab->price }}</p>
                    </div>
                </div>
            @endforeach
        @else
            <p class="no-products">No products found.</p>
        @endif
    </div>
@endsection
