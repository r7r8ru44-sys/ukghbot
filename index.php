<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>AI Omni Login</title>
    <style>
        body { 
            margin: 0; padding: 0; height: 100vh; display: flex; 
            justify-content: center; align-items: center; font-family: sans-serif; 
            background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }
        .container { 
            background: rgba(0, 0, 0, 0.7); padding: 30px; 
            border-radius: 15px; text-align: center; width: 80%; 
            max-width: 400px; color: white; 
        }
        input { width: 90%; padding: 10px; margin: 10px 0; border-radius: 5px; border: none; }
        button { width: 95%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h2>AI Omni Free</h2>
        <form action="save_user.php" method="POST">
            <input type="tel" name="phone" placeholder="Enter Phone Number" required>
            <button type="submit">Continue</button>
        </form>
    </div>
</body>
</html>
