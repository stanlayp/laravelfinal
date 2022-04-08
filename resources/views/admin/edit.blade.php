<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h2>Edit Admin</h2>
    <form action="{{ route('admin.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Username:</label>
        <input name="username" value="{{ $admin->username }}"><br>

        <label>Password:</label>
        <input name="password" value="{{ $admin->password }}"><br>

        <label>Email:</label>
        <input name="email" value="{{ $admin->email }}"><br>

        <label>Status:</label>
        <input name="status" value="{{ $admin->status }}"><br>
       
        <button type="submit">Save</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>