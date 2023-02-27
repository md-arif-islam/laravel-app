<h2>Add User</h2>

<form action="/adduser" method="POST">
    @csrf
    <input type="text" name="name" id="name"> <br> <br>
    <input type="email" name="email" id="email"> <br> <br>
    <input type="password" name="password" id="password"><br> <br>
    <button type="submit">Add User</button>
</form>
