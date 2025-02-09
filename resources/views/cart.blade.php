@extends('layoute')
@section('content')
<div class="cart-container">
    @if ($cartItems->count() > 0)
        @foreach ($cartItems as $item)
            <div class="cart-item">
                <img src="{{ asset($item->product->image_path) }}" alt="{{ $item->product->name }}" class="cart-item-image">
                <p class="cart-item-name">{{ $item->product->name }}</p>
                <p class="cart-item-price">${{ $item->product->price }}</p>
                
                <!-- Display the quantity and allow users to update it -->
                <p class="cart-item-quantity">
                    Quantity: <span>{{ $item->quantity }}</span>
                </p>

                <!-- Calculate the total price for this item -->
                <p class="cart-item-total">
                    Total: ${{ $item->quantity * $item->product->price }}
                </p>
            </div>
        @endforeach

        <!-- Cart total -->
        <div class="cart-total">
            <p>Total Cart Price: ${{ $totalPrice }}</p> <!-- You should calculate $totalPrice in your backend -->
        </div>

        <!-- Checkout button -->
        <button class="checkout-btn">Proceed to Checkout</button>

    @else
        <p>Your cart is emptyc.</p>
    @endif
</div>


@endsection