@extends('layoute')

@section('content')
<style>

    .form-container {
        background: white;
        padding: 50px;
        margin-left: 38%;
        margin-top: 50px;
        border-radius: 50px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 320px;
        font-family: "Playfair Display", serif;
    }

    h2 {
        margin-bottom: 20px;
        color: #333;
    }

    input {
        font-family: "Playfair Display", serif;
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 50px;
        font-size: 16px;
    }

    input[type="submit"] {
        background-color:black;
        color: white;
        border: none;
        cursor: pointer;
        font-weight: bold;
        width: 50%;
        transition: 0.3s;
    }

    input[type="submit"]:hover {
       width: 70%;
    }
</style>

<div class="form-container">
    <h2>Sign up</h2>
    <form action="/signup" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <input type="password" name="password_confirmation" placeholder="confirm  your password" required>
        <input type="submit" value="create">
       
    </form>
</div>
@endsection
