<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #333;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
        }
        .sidebar a {
            display: block;
            color: #fff;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #575757;
        }
        .main-content {
            margin-left: 200px;
            padding: 20px;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .card h2 {
            margin-top: 0;
        }
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: calc(100% - 200px);
            margin-left: 200px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Dashboard</h1>
    </div>
    <div class="sidebar">
        <a href="#">Overview</a>
        <a href="#">Analytics</a>
        <a href="#">User Management</a>
        <a href="#">Settings</a>
    </div>
    <div class="main-content">
        <div class="card">
            <h2>Total Users</h2>
            <p>1234</p>
        </div>
        <div class="card">
            <h2>Active Sessions</h2>
            <p>567</p>
        </div>
        <div class="card">
            <h2>Revenue</h2>
            <p>$8900</p>
        </div>
        <div class="card">
            <h2>New Signups</h2>
            <p>45</p>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2025 Wizkalifa. All rights reserved.</p>
    </div>
</body>
</html>
