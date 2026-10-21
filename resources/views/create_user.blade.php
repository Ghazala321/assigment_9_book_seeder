<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List Assignment</title>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; font-size: 14px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #f9f9f9; color: #555; }
        .badge { background: #eee; padding: 3px 8px; border-radius: 4px; font-size: 12px; }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name[cite: 1]</th>
                <th>Email[cite: 1]</th>
                <th>Role[cite: 1]</th>
                <th>About[cite: 1]</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $index => $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user['name'] }}[cite: 1]</td>
                    <td>{{ $user['email'] }}[cite: 1]</td>
                    <td><span class="badge">{{ $user['role'] }}</span>[cite: 1]</td>
                    <td>{{ $user['about'] }}[cite: 1]</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>