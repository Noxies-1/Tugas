<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
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
      background: url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23ffffff" fill-opacity="0.05"><circle cx="30" cy="30" r="4"/></g></g></svg>') repeat;
      animation: float 20s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-20px); }
    }

    .login-container {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      border-radius: 24px;
      padding: 48px 40px;
      width: 100%;
      max-width: 420px;
      box-shadow: 
        0 25px 50px -12px rgba(0, 0, 0, 0.25),
        0 0 0 1px rgba(255, 255, 255, 0.2);
      position: relative;
      transform: translateY(0);
      transition: all 0.3s ease;
      animation: slideUp 0.6s ease-out;
    }

    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .login-container:hover {
      transform: translateY(-5px);
      box-shadow: 
        0 35px 70px -12px rgba(0, 0, 0, 0.3),
        0 0 0 1px rgba(255, 255, 255, 0.3);
    }

    .login-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #667eea, #764ba2, #f093fb, #f5576c);
      border-radius: 24px 24px 0 0;
      background-size: 300% 100%;
      animation: gradient 3s ease infinite;
    }

    @keyframes gradient {
      0%, 100% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
    }

    h2 {
      color: #1a202c;
      font-size: 28px;
      font-weight: 700;
      text-align: center;
      margin-bottom: 32px;
      letter-spacing: -0.5px;
      position: relative;
    }

    h2::after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 3px;
      background: linear-gradient(90deg, #667eea, #764ba2);
      border-radius: 2px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 16px 20px;
      border: 2px solid #e2e8f0;
      border-radius: 12px;
      font-size: 16px;
      background: #f8fafc;
      transition: all 0.3s ease;
      outline: none;
      font-family: inherit;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #667eea;
      background: #ffffff;
      box-shadow: 
        0 0 0 3px rgba(102, 126, 234, 0.1),
        0 4px 12px -2px rgba(102, 126, 234, 0.15);
      transform: translateY(-2px);
    }

    input[type="text"]::placeholder,
    input[type="email"]::placeholder,
    input[type="password"]::placeholder {
      color: #94a3b8;
      font-weight: 400;
    }

    .btn-login {
      width: 100%;
      padding: 16px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border: none;
      border-radius: 12px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      margin-top: 8px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .btn-login::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s;
    }

    .btn-login:hover::before {
      left: 100%;
    }

    .btn-login:hover {
      transform: translateY(-2px);
      box-shadow: 
        0 20px 25px -5px rgba(102, 126, 234, 0.4),
        0 10px 10px -5px rgba(102, 126, 234, 0.2);
    }

    .btn-login:active {
      transform: translateY(0);
    }

    .signup-link {
      text-align: center;
      margin-top: 24px;
      color: #64748b;
      font-size: 14px;
    }

    .signup-link a {
      color: #667eea;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      position: relative;
    }

    .signup-link a::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 0;
      height: 2px;
      background: #667eea;
      transition: width 0.3s ease;
    }

    .signup-link a:hover::after {
      width: 100%;
    }

    .signup-link a:hover {
      color: #5a67d8;
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
        margin-bottom: 24px;
      }

      input[type="text"],
      input[type="email"],
      input[type="password"] {
        padding: 14px 16px;
        font-size: 15px;
      }

      .btn-login {
        padding: 14px;
        font-size: 15px;
      }
    }

    /* Enhanced animations */
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      animation: fadeInUp 0.6s ease-out forwards;
      opacity: 0;
      transform: translateY(20px);
    }

    input[type="text"] {
      animation-delay: 0.1s;
    }

    input[type="email"] {
      animation-delay: 0.2s;
    }

    input[type="password"]:nth-of-type(3) {
      animation-delay: 0.3s;
    }

    input[type="password"]:nth-of-type(4) {
      animation-delay: 0.4s;
    }

    .btn-login {
      animation: fadeInUp 0.6s ease-out 0.5s forwards;
      opacity: 0;
      transform: translateY(20px);
    }

    .signup-link {
      animation: fadeInUp 0.6s ease-out 0.6s forwards;
      opacity: 0;
      transform: translateY(20px);
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Loading state for button */
    .btn-login:disabled {
      opacity: 0.7;
      cursor: not-allowed;
      transform: none;
    }
  </style>
</head>
<body class="login-body">
  <div class="login-container">
    <h2>Create Your Account</h2>
    <form action="../../controllers/pelanggan/process_register.php" method="POST">
      <input type="text" name="nama" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="password" name="repassword" placeholder="Re-enter Password" required>
      <button type="submit" class="btn-login">Register</button>
      <p class="signup-link">Already have an account? <a href="login.php">Sign in here</a></p>
    </form>
  </div>
</body>
</html>