<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
            transition: 0.3s;
        }

        .box:hover {
            transform: translateY(-5px);
        }

        .box h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .box h1 span {
            color: #4facfe;
            font-weight: bold;
        }

        .box p {
            font-size: 18px;
            color: #666;
        }

        .box p span {
            color: #00c2ff;
            font-weight: bold;
        }

        button {
            background: #4facfe;
            color: white;
            font-size: 16px;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 20px;
        }

        button:hover {
            background: #00c2ff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<div class="box">
    <h1>Welcome, <span> <?= isset($_SESSION['name']) ? $_SESSION['name'] : 'User'; ?></span></h1>
    <p> This is a <span>user</span> page</p>
    <button onclick="window.location.href='logout.php'">Logout</button>
</div>

</body>
</html>
