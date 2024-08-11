<?php
$pageTitle = "Login - FitConnect";
$currentPage = 'login'; 
$extraScripts = ['js/login.js']; 
$extraStylesheets = ['css/login.css']; 
include 'includes/header.php'; 
?>

    <div class="login-container">
      <div class="shape shape-1 floating"></div>
      <div class="shape shape-2 floating"></div>
      <div class="login-card pulse">
        <div class="login-header">
          <svg
            width="40"
            height="40"
            viewBox="0 0 24 24"
            fill="currentColor"
            xmlns="http://www.w3.org/2000/svg"
            class="mb-3"
          >
            <path
              d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5l6.74-6.76zM16 17l-3-3"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          <h2>Welcome Back!</h2>
        </div>
        <div class="login-form">
          <form id="loginForm">
            <input
              type="email"
              class="form-control"
              placeholder="Email address"
              required
            />
            <input
              type="password"
              class="form-control"
              placeholder="Password"
              required
            />
            <div class="remember-forgot">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="rememberMe"
                />
                <label class="form-check-label" for="rememberMe"
                  >Remember me</label
                >
              </div>
              <a href="#" class="text-muted">Forgot password?</a>
            </div>
            <button type="submit" class="btn btn-login">Log In</button>
          </form>
          <div class="text-center mt-3">
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
          </div>
          <div class="social-login">
            <a href="#"
              ><svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
                /></svg
            ></a>
            <a href="#"
              ><svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"
                /></svg
            ></a>
            <a href="#"
              ><svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"
                /></svg
            ></a>
          </div>
        </div>
      </div>
    </div>

<?php include 'includes/footer.php'; ?>s