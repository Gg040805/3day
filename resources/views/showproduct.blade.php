<div>
    <form action="{{ route("add_to_cart",$product->id) }}" method="post">
    @csrf
    <center>
    <h1>Product Detail</h1>
    <label>Vegetable name</label><br>
    <input type="text" name="p_name" value="{{ $product->p_name }}" readonly><br>
    <label >Mass</label><br>
    <input type="number" name="p_mass" oninput="cal()" step="100" min="100" value="{{ $product->p_mass }}"><br>
    <label>Price</label><br>
    <input type="text" name="p_price" value="{{ $product->p_price }}" readonly><br>
    <label>Total Price</label><br>
    <p id="total_price"></p>
    <button type="submit">Click to buy</button><br><br>
    <button><a href="{{ route('home') }}">Click this button to return to online shop page</a></button>
</center>
</form>
</div>
<script>
    function cal(){
        var mass= document.querySelector("input[name='p_mass']");
        var price= document.querySelector("input[name='p_price']").value;
        var imass = mass.value;

        if(imass < 100){
            imass = 100;
            mass.value=100;
        }
        var total=price/100*mass.value;

        document.querySelector("#total_price").innerHTML=total;
    }
</script>