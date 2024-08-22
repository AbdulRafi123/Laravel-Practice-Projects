<h1>Users</h1>

<table border=1>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
    </tr>
    
    <tr>
    @foreach ($users as $user)
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
    </tr>
    @endforeach
</table>
