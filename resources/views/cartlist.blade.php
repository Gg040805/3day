<div>
    <center>
    <h1>Your Cart list</h1>
    <table border="20px">
        <thead>
            <th>Vegetable name</th>
            <th>Mass</th>
            <th>Price</th>
            <th>Cart status</th>
        </thead>
        <tbody>
            @foreach ($carts as $cart)
            <tr>
                <td>{{ $cart->p_name }}</td>
                <td>{{ $cart->p_mass }}g</td>
                <td>RM{{ $cart->total_mass * $cart->p_price/100 }}</td>
                <td>{{ $cart->c_status }}</td>
            </tr>
            @endforeach
        </tbody>    
    </table><br>
    <form action="{{ route('checkout') }}" method="post">
    @csrf
    @method('PUT')
    <button type="submit">Click to check out</button>
</form>
</center>
</div>