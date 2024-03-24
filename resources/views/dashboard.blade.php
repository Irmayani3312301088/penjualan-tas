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
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    .header {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
    }
    .menu {
        background-color: #f4f4f4;
        float: left;
        width: 200px;
        padding: 20px;
    }
    .content {
        float: left;
        width: calc(100% - 220px);
        padding: 20px;
    }
    .card {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
    }
    .footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px;
        clear: both;
    }
</style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Dashboard</h1>
    </div>

    <div class="menu">
        <h2>Menu</h2>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="card">
            <h2>Welcome, User!</h2>
            <p>This is your dashboard. You can manage your account here.</p>
        </div>
        <div class="card">
            <h2>Recent Activity</h2>
            <p>No recent activity.</p>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Dashboard. All rights reserved.</p>
    </div>
</div>

</body>
</html>
