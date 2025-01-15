<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Women in FinTech')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('members.index') }}">Members</a></li>
            <li><a href="{{ route('members.create') }}">Add Member</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 Women in FinTech</p>
    </footer>
</body>
</html>
