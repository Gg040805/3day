<div class="color">
    <form action="{{ route('login.post') }}" method="post">
    @csrf
    <center>
    <label>Username</label><br><br>
    <input type="text" name="name"><br><br>
    <label>Password</label><br><br>
    <input type="text" name="password"><br><br>
    <button type="submit">Click to login</button><br><br>
    <button><a href="register">Click if u dont have a account</a></button>
</center>
    </form>
</div>
<style>
    .color{
        background-color: pink;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
</style>