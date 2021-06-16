<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="user" method="post">
        @csrf
        Name
        <input type="text" name="name"><span>@error('name')* {{$message}} @enderror</span><br><br>
        Username
        <input type="text" name="username"><span>@error('username')* {{$message}} @enderror<br><br>
        Date of Birth
        <input type="date" name="dob"><span>@error('dob')* {{$message}} @enderror<br><br>
        Email
        <input type="email" name="email"><span>@error('email')* {{$message}} @enderror<br><br>
        Telephone No.
        <input type="tel" name="telephone"><span>@error('telephone')* {{$message}} @enderror<br><br>
        NIC No.
        <input type="text" name="nic"><span>@error('nic')* {{$message}} @enderror<br><br>
        Gender(Male/Female)
        <input type="text" name="gender"><span>@error('gender')* {{$message}} @enderror<br><br>
       
        Password
        <input type="password" name="password"><span>@error('password')* {{$message}} @enderror<br><br>
        Re-enter Password
        <input type="password" name="repassword"><span>@error('repassword')* {{$message}} @enderror<br><br>
        <button name="Submit">Submit</button>
    </form>
    
</body>
</html>