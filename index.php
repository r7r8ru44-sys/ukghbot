<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Omni Login</title>
    <style>
        /* إعدادات الشاشة الكاملة لمنع التمرير */
        body, html { 
            margin: 0; padding: 0; height: 100%; width: 100%;
            overflow: hidden; font-family: sans-serif; 
        }
        
        /* تنسيق الفيديو لضمان تغطية كاملة للشاشة */
        #bg-video {
            position: fixed;
            top: 0; left: 0;
            width: 100vw; height: 100vh;
            object-fit: cover;
            z-index: -1;
        }

        /* تنسيق صندوق الدخول في المنتصف */
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
        input { 
            width: 100%; padding: 12px; margin: 15px 0; 
            border-radius: 5px; border: none; box-sizing: border-box;
        }
        button { 
            width: 100%; padding: 12px; background: #007bff; 
            color: white; border: none; border-radius: 5px; 
            cursor: pointer; font-size: 16px;
        }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>

    <video autoplay muted loop playsinline poster="background.jpg" id="bg-video">
        <source src="background.mp4" type="video/mp4">
        متصفحك لا يدعم تشغيل الفيديو.
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
