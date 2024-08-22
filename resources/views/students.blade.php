<h1>Students</h1>

<table border=1>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Batch</td>
    </tr>
    
    <tr>
    @foreach ($students as $student)
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->batch}}</td>
    </tr>
    @endforeach
</table>