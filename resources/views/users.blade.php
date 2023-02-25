<h1>Users Page</h1>

@foreach ($users as $user)
    <h2>{{$user}}</h2>
@endforeach

<script>
    var data = @json($users);
    console.log(data);
</script>