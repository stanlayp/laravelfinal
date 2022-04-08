<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absensi</title>
</head>
<body>
    <h2>Absensi</h2>

    <p><a href="{{ route('absensi.create') }}">Tambah Absensi baru</a></p>
    @if(session()->get('success'))

        {{ session()->get('success') }}

    @endif
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nim</th>
            <th>Tanggal</th>
            <th>Kehadiran</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>

        <tbody>
        @foreach($absensi as $abs)
        <tr>
            <td>{{ $abs->id }}</td>
            <td>{{ $abs->nim }}</td>
            <td>{{ $abs->tanggal }}</td>
            <td>{{ $abs->kehadiran }}</td>
            <td><a href="{{ route('absensi.edit', $abs->id) }}">Edit</a> </td>
            <td>
                <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('absensi.destroy', $abs->id) }}" method="POST">
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