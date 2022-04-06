<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admins</title>
</head>
<body>
    <h2>Admins</h2>

    <p><a href="{{ route('admins.create') }}">Tambah data Admin</a></p>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        @foreach($admins as $admin)
            <tr>
                <td>{{ $admin->id }}</td>
                <td>{{ $admin->username }}</td>
                <td>{{ $admin->password }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->status }}</td>
                <td><a href="{{ route('admins.edit', $admin->id) }}">Edit</a> </td>
                <td>
                    <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('admins.destroy', $admin->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
</body>
</html>