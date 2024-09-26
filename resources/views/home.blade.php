<div>
    <center>
    <h1>Welcome to online vegetable shop</h1>
    <button><a href="cartlist">Click here to enter your cart list</a></button>
    <p class="123">U can buy any vegetable bcs is always on stock</p>
    <table border="100px">
        <thead>
            <th>Vegetable name</th>
            <th>Mass</th>
            <th>Price</th>
            <th>Action</th>
        </thead>
        <tbody>
            
            @foreach ($products as $pro)
            <tr>
                <td>{{ $pro->p_name }}</td>
                <td>{{ $pro->p_mass }}gram</td>
                <td>RM{{ $pro->p_price }}</td>
                <td><button><a href="{{ route('product.show',$pro->id) }}">Buy</a></button></td>
            </tr>
            @endforeach
        
        </tbody>
    </table> 
</center>   
</div>
<style>
    h1{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
    }
    
</style>