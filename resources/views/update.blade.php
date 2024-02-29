<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<?php

    if($userModel->gender=='Male')
    {
        $male='selected';
    }else{
        $female='selected';
    }
?>
<body>
    <h1>Student Information</h1>
    <form action="/update/submit" method="post" enctype="multipart/form-data" >
        @csrf
        {{-- Hidden Id --}}
        <input type="hidden" name="id" value="{{$userModel->id}}">
        <input type="text" name="name" value="{{$userModel->name}}"  > <br> <br>
        <select name="gender"   >
            @if($userModel->gender=='Male'){
                <option value="Male" >Male</option>
                <option value="Female?>">Female</option>
            }@else{
                <option value="Female?>"  >Female</option>
                <option value="Male" >Male</option>
            }
            @endif
        </select> <br> <br>
        <input type="text" name="age" value="{{$userModel->age}}" > <br> <br>
        <input type="file" name="profile" > <br> <br>
        {{-- Hidden Image --}}
        <input type="hidden" name="old_profile" value="{{$userModel->profile}}">
        <input  type="submit" name="" value="Submit Data">
    </form>
</body>
</html>