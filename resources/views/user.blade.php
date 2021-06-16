<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($name as $Form)
               Name =   
                    {{ $Form->name }}<br>
     @endforeach
     <br><br>
     @foreach($dob as $Form)
               Date of Birth =   
                    {{ $Form->dob }}<br>
     @endforeach
     <br><br>
     @foreach($telephone as $Form)
               Telephone =   
                    {{ $Form->telephone }}<br>
     @endforeach
     <br><br>
     @foreach($nic as $Form)
              NIC =   
                    {{ $Form->nic }}<br>
     @endforeach
     <br><br>
     @foreach($gender as $Form)
               Gender =    
                    {{ $Form->gender }}<br>
     @endforeach
</body>
</html>