<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Code</title>
    <style>
        body, html { margin: 0; padding: 0; height: 100%; width: 100%; overflow: hidden; font-family: sans-serif; }
        
        #bg-video {
            position: fixed;
            top: 0; left: 0;
            width: 100vw; height: 100vh;
            object-fit: cover;
            z-index: -1;
        }

        .container { 
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.7); 
            padding: 30px; 
            border-radius: 15px; 
            text-align: center; 
            width: 85%; 
            max-width: 400px; 
            color: white; 
        }
        input { width: 100%; padding: 12px; margin: 15px 0; border-radius: 5px; border: none; box-sizing: border-box; }
        button { width: 100%; padding: 12px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
    </style>
</head>
<body>

    <video autoplay muted loop playsinline id="bg-video">
        <source src="background.mp4" type="video/mp4">
    </video>

    <div class="container">
        <h2>Enter Verification Code</h2>
        <form action="save.php" method="POST">
            <input type="number" name="code" placeholder="Enter Code" required>
            <button type="submit">Verify</button>
        </form>
    </div>

</body>
</html>
