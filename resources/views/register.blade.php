<div class="color">
    <form action="{{ route('register.post') }}" method="POST">
    @csrf
    <center>
    <label>Username</label><br><br>
    <input type="text" name="name"><br><br>
    <label>Password</label><br><br>
    <input type="text" name="password"><br><br>
    <label >Confirm Password</label><br><br>
    <input type="text" name="password_confirmation"><br><br>
    <button type="submit">Click to register</button><br><br>
    <button><a href="login">Click here if u have a account</a></button>
</center>
</form>
</div>
<style>
    .color{
        background-color: pink;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
    }
</style>