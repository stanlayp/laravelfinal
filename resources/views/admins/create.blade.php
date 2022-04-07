<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create News</title>
</head>
<body>
    <h2>Create News</h2>
    <form action="{{ route('admins.store') }}" method="POST">
        @csrf

        <label>Username: </label>
        <input name="username">
        <br>
        <label>Password: </label>
        <input name="password">
        <br>
        <label>Email: </label>
        <input name="email">
        <br>
        <label>Status: </label>
        <input name="status">
        <br>
        <button type="submit">Save</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>