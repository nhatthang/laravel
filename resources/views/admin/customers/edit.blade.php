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
    <form action="{{ route('customers.update', $customers->id) }}" method="post">
        @csrf
        @method('PUT')
        Name: <br><input type="text" name="name" value="{{ $customers->name }}"><br>
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong><br>
            </span>
        @endif

        Age: <br><input type="text" name="age" value="{{ $customers->age }}"><br>
        @if ($errors->has('age'))
            <span class="help-block">
                <strong>{{ $errors->first('age') }}</strong><br>
            </span>
        @endif
        Email: <br><input type="text" name="mail" value="{{ $customers->mail }}"><br>
        @if ($errors->has('mail'))
            <span class="help-block">
                <strong>{{ $errors->first('mail') }}</strong><br>
            </span>
        @endif
        <input type="submit" name="sm" value="Update">
    </form>
</body>
</html>
