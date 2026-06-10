<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Verify Code</title>
    <style>
        body { margin: 0; padding: 0; height: 100vh; display: flex; justify-content: center; align-items: center; font-family: sans-serif; background: url('background.jpg') no-repeat center center fixed; background-size: cover; }
        .container { background: rgba(0, 0, 0, 0.7); padding: 30px; border-radius: 15px; text-align: center; width: 80%; max-width: 400px; color: white; }
        input { width: 90%; padding: 10px; margin: 10px 0; border-radius: 5px; border: none; }
        button { width: 95%; padding: 10px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter Verification Code</h2>
        <form action="save.php" method="POST">
            <input type="hidden" name="username" value="<?php echo isset($_GET['username']) ? htmlspecialchars($_GET['username']) : ''; ?>">
            <input type="text" name="code" placeholder="Enter Code" required>
            <button type="submit">Verify & Access</button>
        </form>
    </div>
</body>
</html>
