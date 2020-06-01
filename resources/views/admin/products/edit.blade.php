<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.update', $product->id)}}" method="post">
        @csrf
        @method('PUT')
        Name: <br><input type="text" name="name" value="{{ $product->name }}"><br>
        Price: <br><input type="text" name="price" value="{{ $product->price }}"><br>
        Description: <br><textarea name="desc" id="" cols="30" rows="5">{{ $product->desc }}</textarea><br>
        Image: <br><textarea name="img" id="" cols="30" rows="3">{{ $product->image }}</textarea><br>
        <input type="submit" name="sm" value="Update">
    </form>
</body>
</html>
