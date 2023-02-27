<h1>Login Page</h1>

<form action="/users" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="username" id="" placeholder="Input your username"> <br>
    <input type="password" name="password" id="" placeholder="Input your password"><br>
    <input type="file" name="file" id="" placeholder="File">
    <button type="submit">Submit</button>
</form>
