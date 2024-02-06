<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h4>Users</h4>
    @forelse($users as $user)
    <div>
        <b>Name:</b>
        {{ $user->name }}<br>
        <b>Email:</b>
        {{ $user->email }}<br>
        </div>
    @empty
        <p>Nu sunt utilizatori</p>
    @endforelse        
</body>
</html>