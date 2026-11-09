<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tasks for Today')</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            background: #f3f7f6;
            color: #18313b;
            font-family: Arial, sans-serif;
        }
        header {
            background: #10313b;
            color: white;
            padding: 18px 6%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
        }
        .brand { font-size: 21px; font-weight: bold; }
        nav { display: flex; gap: 10px; flex-wrap: wrap; }
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 13px;
            border-radius: 8px;
        }
        nav a:hover { background: #28515b; }
        main { max-width: 1000px; margin: 42px auto; padding: 0 20px; min-height: 65vh; }
        h1 { font-size: 40px; margin: 8px 0; }
        .eyebrow { color: #087e72; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; }
        .lead { color: #627982; font-size: 18px; }
        .card, table {
            background: white;
            border: 1px solid #dce7e7;
            border-radius: 14px;
            box-shadow: 0 8px 24px rgba(16, 49, 59, .05);
        }
        .card { padding: 22px; margin: 18px 0; }
        table { width: 100%; border-collapse: separate; border-spacing: 0; overflow: hidden; }
        th, td { text-align: left; padding: 15px; border-bottom: 1px solid #e4ecec; }
        th { background: #f8fbfa; color: #627982; text-transform: uppercase; font-size: 12px; }
        tr:last-child td { border-bottom: 0; }
        .status { padding: 6px 10px; border-radius: 20px; font-size: 13px; font-weight: bold; }
        .pending { color: #835a00; background: #fff1c7; }
        .completed { color: #09654f; background: #d9f5e9; }
        footer { padding: 22px; text-align: center; color: #71858b; background: white; }
        @media (max-width: 650px) {
            header { align-items: flex-start; }
            h1 { font-size: 32px; }
            th, td { padding: 10px; }
        }
    </style>
</head>
<body>
    <header>
        <div class="brand">Tasks for Today</div>
        <nav>
            <a href="{{ route('home') }}">Welcome</a>
            <a href="{{ route('tasks.index') }}">Task List</a>
            <a href="{{ route('profile') }}">Profile</a>
            <a href="{{ route('about') }}">About</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>Tasks for Today Management System · Laravel</footer>
</body>
</html>