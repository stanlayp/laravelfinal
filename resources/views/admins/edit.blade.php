<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admins</title>
</head>
<body>
    <h2>Edit Admins</h2>
    <form action="{{ route('admins.update', $admins->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Username: </label>
        <input name="username" value="{{ $admins->username }}">
        <br>
        <label>Password: </label>
        <input name="password" value="{{ $admins->password }}">
        <br>
        <label>Email: </label>
        <input name="email" value="{{ $admins->email }}">
        <br>
        <label>Status: </label>
        <input name="status" value="{{ $admins->status }}">
        <br>
        <button type="submit">Save</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>