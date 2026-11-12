<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'My POS')</title>

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        header {
            background: #172554;
            color: white;
            padding: 24px;
        }

        header h1 { margin: 0 0 18px; }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        nav a:hover { text-decoration: underline; }

        main {
            max-width: 1000px;
            margin: 32px auto;
            padding: 28px;
            background: white;
            border-radius: 12px;
        }

        .table-wrapper { overflow-x: auto; }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 14px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th { background: #eff6ff; }

        .button {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 12px 18px;
            margin: 8px 8px 0 0;
            border-radius: 6px;
            text-decoration: none;
        }

        footer {
            padding: 20px;
            text-align: center;
            color: #64748b;
        }
    </style>
</head>

<body>
    <header>
        <h1>My POS</h1>

        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('customers.index') }}">Customer Accounts</a>
            <a href="{{ route('users.index') }}">User Accounts</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} My POS | IT0049 TFA6
    </footer>
</body>
</html>