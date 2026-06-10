<!DOCTYPE html>
<html lang="ar" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Omni Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
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
        
        .iti { width: 100%; margin: 15px 0; display: block; }
        input { width: 100%; padding: 12px; border-radius: 5px; border: none; box-sizing: border-box; color: black; }
        
        button { 
            width: 100%; padding: 12px; background: #007bff; 
            color: white; border: none; border-radius: 5px; 
            cursor: pointer; font-size: 16px; margin-top: 10px;
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
        <form action="save_user.php" method="POST" id="loginForm">
            <input type="tel" id="phone_display" required>
            <input type="hidden" id="full_phone" name="phone">
            <button type="submit">Continue</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script>
        const phoneInputField = document.querySelector("#phone_display");
        const fullPhoneField = document.querySelector("#full_phone");
        
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            initialCountry: "auto",
            separateDialCode: false, // المفتاح يظهر داخل الحقل
            geoIpLookup: function(callback) {
                fetch('https://ipinfo.io/json').then(res => res.json()).then(data => callback(data.country)).catch(() => callback("US"));
            },
        });

        // تحديث الحقل عند تغيير الدولة
        phoneInputField.addEventListener("countrychange", function() {
            const dialCode = phoneInput.getSelectedCountryData().dialCode;
            phoneInputField.value = "+" + dialCode + " ";
        });

        // عند الضغط على إرسال، نأخذ الرقم الكامل (بالمفتاح) ونضعه في الحقل المخفي
        document.querySelector("#loginForm").addEventListener("submit", function() {
            fullPhoneField.value = phoneInput.getNumber(); 
        });
    </script>

</body>
</html>
