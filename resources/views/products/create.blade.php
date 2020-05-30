<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        @method('POST')
            <label for="">{{ trans('product.label.name') }}:</label><br>
            <input type="text" name="name"><br>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong><br/>
                     {{-- <strong>{{ $errors->bags('name') }}</strong><br/> --}}
                </span>
            @endif

            <label for="">{{ trans('product.label.desc') }}</label><br>
            <textarea name="desc" id="" cols="20" rows="5"></textarea><br>
            @if ($errors->has('desc'))
                <span class="help-block">
                    <strong>{{ $errors->first('desc') }}</strong><br/>
                </span>
            @endif

            <label for="">{{ trans('product.label.price') }}:</label><br>
            <input type="text" name="price"><br>
            @if ($errors->has('price'))
                <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong><br/>
                </span>
            @endif

            <input type="submit" value="Insert">
    </form>
</body>
</html>
