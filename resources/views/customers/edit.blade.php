<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('customers.update', $customers->id) }}" method="post">
        @csrf
        @method('PUT')
        Name: <input type="text" name="name" value="{{ $customers->name }}"><br><br>
        Age: <input type="text" name="age" value="{{ $customers->age }}"><br><br>
        Email: <input type="text" name="mail" value="{{ $customers->mail }}"><br><br>
        <input type="submit" name="sm" value="Update">
    </form>
</body>
</html>
