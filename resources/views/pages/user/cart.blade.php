<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <h1>Your Cart</h1>
    
    @if($carts->isEmpty())
        <p>Your cart is empty.</p>
    @else
        <ul>
            @foreach ($carts as $cart)
                <li>{{ $cart->pname }} - {{ $cart->quantity }} x {{ $cart->price }}</li>
            @endforeach
        </ul>
    @endif

</body>
</html>
