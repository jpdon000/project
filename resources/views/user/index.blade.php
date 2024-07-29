<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
</head>
<body>
    <table border="1">
<thead>
    <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
</thead>

<tbody>
   @foreach($users as $item)
   <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{ $item->name}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->phone}}</td>
   </tr>
   @endforeach
</tbody>
    </table>
</body>
</html>