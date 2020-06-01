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
    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td><a href="{{ route('customers.create') }}">Create</a></td>
            <td>Delete</td>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->mail }}</td>
            <td><a href="{{ route('customers.edit', $customer->id) }}">Edit</a></td>
            <td>
                <form action="{{ route('customers.destroy', $customer->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
