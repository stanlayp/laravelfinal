<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asrama</title>
</head>
<body>
    <h2>News</h2>

    <p><a href="{{ route('asrama.create') }}">Tambah Asrama baru</a></p>

    @if(session()->get('success'))

        {{ session()->get('success') }}

    @endif

    <table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Asrama</th>
            <th>Jenis Asrama</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($asrama as $dorm)
            <tr>
                <td>{{ $dorm->id }}</td>
                <td>{{ $dorm->nama_asrama }}</td>
                <td>{{ $dorm->jenis_asrama }}</td>
                <td><a href="{{ route('asrama.edit', $dorm->id) }}">Edit</a> </td>
                <td>
                    <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('asrama.destroy', $dorm->id) }}" method="POST">
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