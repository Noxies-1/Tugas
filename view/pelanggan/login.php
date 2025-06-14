<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body.login-body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      position: relative;
      overflow: hidden;
    }

    body.login-body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg width="80" height="80" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23ffffff" fill-opacity="0.03"><polygon points="40 0 60 40 40 80 20 40"/></g></g></svg>') repeat;
      animation: slowRotate 30s linear infinite;
    }

    @keyframes slowRotate {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    .login-container {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      border-radius: 24px;
      padding: 48px 40px;
      width: 100%;
      max-width: 400px;
      box-shadow: 
        0 25px 50px -12px rgba(0, 0, 0, 0.25),
        0 0 0 1px rgba(255, 255, 255, 0.2);
      position: relative;
      transform: translateY(0);
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      animation: slideIn 0.8s ease-out;
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateY(50px) scale(0.9);
      }
      to {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    .login-container:hover {
      transform: translateY(-8px);
      box-shadow: 
        0 40px 80px -12px rgba(0, 0, 0, 0.35),
        0 0 0 1px rgba(255, 255, 255, 0.3);
    }

    .login-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #667eea, #764ba2, #f093fb, #f5576c, #4facfe, #00f2fe);
      border-radius: 24px 24px 0 0;
      background-size: 400% 100%;
      animation: gradientShift 4s ease infinite;
    }

    @keyframes gradientShift {
      0%, 100% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
    }

    .login-container::after {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(102, 126, 234, 0.1) 0%, transparent 70%);
      transform: translate(-50%, -50%);
      animation: pulse 4s ease-in-out infinite;
      pointer-events: none;
      z-index: -1;
    }

    @keyframes pulse {
      0%, 100% { 
        transform: translate(-50%, -50%) scale(0.8);
        opacity: 0.5;
      }
      50% { 
        transform: translate(-50%, -50%) scale(1.2);
        opacity: 0.2;
      }
    }

    h2 {
      color: #1a202c;
      font-size: 28px;
      font-weight: 700;
      text-align: center;
      margin-bottom: 40px;
      letter-spacing: -0.5px;
      position: relative;
      background: linear-gradient(135deg, #667eea, #764ba2);
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: textShine 3s ease-in-out infinite;
    }

    @keyframes textShine {
      0%, 100% { filter: brightness(1); }
      50% { filter: brightness(1.2); }
    }

    h2::after {
      content: '✨';
      position: absolute;
      top: -5px;
      right: -25px;
      font-size: 16px;
      animation: sparkle 2s ease-in-out infinite;
    }

    @keyframes sparkle {
      0%, 100% { 
        transform: rotate(0deg) scale(1);
        opacity: 0.7;
      }
      50% { 
        transform: rotate(180deg) scale(1.2);
        opacity: 1;
      }
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 24px;
      position: relative;
    }

    .input-group {
      position: relative;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 18px 24px;
      border: 2px solid #e2e8f0;
      border-radius: 16px;
      font-size: 16px;
      background: #f8fafc;
      transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      outline: none;
      font-family: inherit;
      position: relative;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      border-color: #667eea;
      background: #ffffff;
      box-shadow: 
        0 0 0 4px rgba(102, 126, 234, 0.1),
        0 8px 25px -5px rgba(102, 126, 234, 0.2),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
      transform: translateY(-3px);
    }

    input[type="text"]::placeholder,
    input[type="password"]::placeholder {
      color: #94a3b8;
      font-weight: 400;
      transition: all 0.3s ease;
    }

    input[type="text"]:focus::placeholder,
    input[type="password"]:focus::placeholder {
      color: #cbd5e0;
      transform: translateY(-2px);
    }

    .btn-login {
      width: 100%;
      padding: 18px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border: none;
      border-radius: 16px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      position: relative;
      overflow: hidden;
      margin-top: 12px;
      text-transform: uppercase;
      letter-spacing: 1px;
      box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    }

    .btn-login::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
      transition: left 0.6s;
    }

    .btn-login:hover::before {
      left: 100%;
    }

    .btn-login:hover {
      transform: translateY(-4px);
      box-shadow: 
        0 20px 40px -8px rgba(102, 126, 234, 0.5),
        0 0 0 1px rgba(255, 255, 255, 0.1);
      background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
    }

    .btn-login:active {
      transform: translateY(-2px);
      transition: transform 0.1s;
    }

    .signup-link {
      text-align: center;
      margin-top: 32px;
      color: #64748b;
      font-size: 14px;
      position: relative;
    }

    .signup-link::before {
      content: '';
      position: absolute;
      top: -16px;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 1px;
      background: linear-gradient(90deg, transparent, #e2e8f0, transparent);
    }

    .signup-link a {
      color: #667eea;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      position: relative;
      background: linear-gradient(135deg, #667eea, #764ba2);
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .signup-link a::after {
      content: '';
      position: absolute;
      bottom: -3px;
      left: 0;
      width: 0;
      height: 2px;
      background: linear-gradient(90deg, #667eea, #764ba2);
      transition: width 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      border-radius: 1px;
    }

    .signup-link a:hover::after {
      width: 100%;
    }

    .signup-link a:hover {
      filter: brightness(1.2);
      transform: translateY(-1px);
    }

    /* Welcome message animation */
    .welcome-icon {
      text-align: center;
      font-size: 48px;
      margin-bottom: 24px;
      animation: bounce 2s ease-in-out infinite;
    }

    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
      40% { transform: translateY(-10px); }
      60% { transform: translateY(-5px); }
    }

    /* Mobile responsiveness */
    @media (max-width: 480px) {
      .login-container {
        padding: 32px 24px;
        margin: 16px;
        border-radius: 20px;
      }

      h2 {
        font-size: 24px;
        margin-bottom: 32px;
      }

      input[type="text"],
      input[type="password"] {
        padding: 16px 20px;
        font-size: 15px;
        border-radius: 14px;
      }

      .btn-login {
        padding: 16px;
        font-size: 15px;
        border-radius: 14px;
      }
    }

    /* Enhanced entrance animations */
    input[type="text"] {
      animation: slideInLeft 0.8s ease-out 0.2s forwards;
      opacity: 0;
      transform: translateX(-30px);
    }

    input[type="password"] {
      animation: slideInLeft 0.8s ease-out 0.4s forwards;
      opacity: 0;
      transform: translateX(-30px);
    }

    .btn-login {
      animation: slideInUp 0.8s ease-out 0.6s forwards;
      opacity: 0;
      transform: translateY(30px);
    }

    .signup-link {
      animation: fadeIn 0.8s ease-out 0.8s forwards;
      opacity: 0;
    }

    @keyframes slideInLeft {
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes slideInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeIn {
      to {
        opacity: 1;
      }
    }

    /* Security indicator */
    .security-badge {
      position: absolute;
      top: 20px;
      right: 20px;
      background: rgba(34, 197, 94, 0.1);
      color: #16a34a;
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 600;
      border: 1px solid rgba(34, 197, 94, 0.2);
    }

    .security-badge::before {
      content: '🔒 ';
    }
  </style>
</head>
<body class="login-body">
  <div class="login-container">
    <div class="security-badge">Secure Login</div>
    <div class="welcome-icon">👋</div>
    <h2>Sign In to Your Account</h2>
    <form action="../../controllers/pelanggan/login-proses.php" method="POST">
      <input type="text" name="username" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" class="btn-login">Login</button>
      <p class="signup-link">Don't have an account? <a href="register.php">Register here</a></p>
    </form>
  </div>
</body>
</html>