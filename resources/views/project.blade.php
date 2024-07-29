<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
</head>
<body>
    <table border="1" >
        <h1><caption>Users Table</caption></h1>
<thead>
    <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Status</th>
    </tr>
</thead>

<tbody>
    @foreach($jps as $jp)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$jp->Name}}</td>
        <td>{{$jp->Address}}</td>
        <td>{{$jp->Email_verifed_at}}</td>
        <td>{{$jp->Gender}}</td>
        <td>{{$jp->DOB}}</td>
        <td>{{$jp->Status}}</td>
    </tr>
    @endforeach
</tbody>



    </table>
</body>
</html>