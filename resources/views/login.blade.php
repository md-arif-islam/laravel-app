<h1>Login Page</h1>

<form action="/users" method="post">
    @csrf
<input type="text" name="username" id="" placeholder="Input your username"> <br>
<input type="password" name="password" id="" placeholder="Input your password"><br>
<button type="submit">Submit</button>
</form>