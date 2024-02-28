<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/add">Add User</a>
    <table border="1" width="100%" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Profile</th>
                <th>Create At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userModel as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->gender}}</td>
                    <td>{{$user->age}}</td>
                    <td>
                        <img src="/images/{{$user->profile}}" width="100" height="100" style="object-fit: cover" alt="">
                    </td>
                    <td>{{$user->created_at}}</td>
                    <td>
                        <a href="">Update</a>
                        <a href="/delete/{{$user->id}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>