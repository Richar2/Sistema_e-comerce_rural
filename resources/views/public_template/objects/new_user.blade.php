<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <form method="Post" action="{{Route('profile.save_user')}}">
     {{ csrf_field() }}  
     
     Nome:
        <input type="text"   name="name_user" id="name_user">
        <br>
        Email:
        <input type="text"   name="email_user" id="email_user">
        <br>
        Senha:
        <input type="text" name="password_user" id="password_user">
        <button type="submit" name="myButton" value="1">Click me</button>
     </form>.
</body>
</html>