<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Student Information</h1>
    <form action="/add" method="post" enctype="multipart/form-data" >
        @csrf
        <input type="text" name="name"  > <br> <br>
        <select name="gender" >
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select> <br> <br>
        <input type="text" name="age" > <br> <br>
        <input type="file" name="profile" > <br> <br>
        <input class="btn btn-primary" type="submit" name="" value="Submit Data">
    </form>
</body>
</html>