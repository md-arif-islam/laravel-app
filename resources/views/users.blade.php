<h1>Users Page</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
    </tr>
    @foreach ($data as $user) 
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['first_name']}}</td>
            <td>{{$user['last_name']}}</td>
            <td>{{$user['email']}}</td>
        </tr>
    @endforeach
</table>