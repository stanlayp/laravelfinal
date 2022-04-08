<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <h2>Admin</h2>

    <p><a href="{{ route('admin.create') }}">Tambah Admin baru</a></p>
    @if(session()->get('success'))

        {{ session()->get('success') }}

    @endif
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
        @foreach($admin as $adm)
        <tr>
            <td>{{ $adm->id }}</td>
            <td>{{ $adm->username }}</td>
            <td>{{ $adm->password }}</td>
            <td>{{ $adm->email }}</td>
            <td>{{ $adm->status }}</td>
            <td><a href="{{ route('admin.edit', $adm->id) }}">Edit</a> </td>
            <td>
                <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('admin.destroy', $adm->id) }}" method="POST">
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