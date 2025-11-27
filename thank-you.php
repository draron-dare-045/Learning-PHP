<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You! - Message Sent Successfully</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            padding: 60px 40px;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            max-width: 500px;
            width: 100%;
            text-align: center;
            animation: fadeInUp 0.6s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .checkmark {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #4CAF50;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            animation: scaleIn 0.5s ease-out 0.2s both;
        }
        
        @keyframes scaleIn {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
            }
        }
        
        .checkmark::after {
            content: "✓";
            font-size: 50px;
            color: white;
            font-weight: bold;
        }
        
        h1 {
            color: #333;
            margin-bottom: 15px;
            font-size: 32px;
        }
        
        p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
            font-size: 16px;
        }
        
        .info-box {
            background: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 15px;
            margin: 25px 0;
            text-align: left;
            border-radius: 4px;
        }
        
        .info-box strong {
            color: #333;
        }
        
        .info-box p {
            margin: 5px 0;
            font-size: 14px;
        }
        
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 14px 35px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 16px;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        a:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        
        a:active {
            transform: translateY(0);
        }
        
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="checkmark"></div>
        
        <h1>Thank You!</h1>
        
        <p>Your message has been successfully sent. We appreciate you taking the time to contact us.</p>
        
        <p>Our team will review your message and get back to you as soon as possible.</p>
        
        <div class="info-box">
            <p><strong>Submitted:</strong> <?php echo date('l, F j, Y'); ?></p>
            <p><strong>Time:</strong> <?php echo date('g:i A'); ?></p>
            <p><strong>Response Time:</strong> Usually within 24-48 hours</p>
        </div>
        
        <p style="font-size: 14px; color: #888;">
            Check your email inbox for a confirmation (if configured).
        </p>
        
        <a href="index.html">← Send Another Message</a>
        
        <div class="footer">
            Built with PHP | Moringa School Capstone Project
        </div>
    </div>
</body>
</html>