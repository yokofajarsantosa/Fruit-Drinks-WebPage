<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="style.css">
    <div class="container" id="container">
        <!-- Register Form -->
        <div class="form-container register-container">
            <form action="register.php" method="post">
                <h2>Register</h2>
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required />
                    </div>
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                <p>Forgot Password?</p>
                <button type="submit">Register</button>
                <br>
                <p>or register with social platform</p>
                <!-- Gmail (gunakan envelope untuk email secara umum) -->
                <div class="social-icons">
                    <!-- Gmail -->
                    <div class="social-box">
                        <i class="fab fa-google"></i>
                    </div>

                    <!-- Twitter -->
                    <div class="social-box">
                        <i class="fab fa-twitter"></i>
                    </div>

                    <!-- Facebook -->
                    <div class="social-box">
                        <i class="fab fa-facebook-f"></i>
                    </div>

                    <!-- Linkedin -->
                    <div class="social-box">
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>
            </form>
        </div>

        <!-- Login Form -->
        <div class="form-container login-container">
            <form action="login.php" method="post">
                <h2>Login</h2>
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required />
                    </div>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                <button type="submit">Login</button>
            </form>
        </div>

        <!-- Overlay -->
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Wellcome Back!</h1>
                    <p>Already have on account?</p>
                    <button class="ghost" id="loginBtn">Login</button>
                        <footer style="position: fixed; bottom: 10px; left: 10px; font-size: 14px; color: white; z-index: 1000;">
                            <p>Created by @fajar.yokojr</p>
                        </footer>
                </div>
                <div class="overlay-panel overlay-right">
                    <h2>Hello, Wellcome Guys!</h2>
                    <p>Don't have on account?</p>
                    <button class="ghost" id="registerBtn">Register</button>
                        <footer style="position: fixed; bottom: 10px; right: 10px; font-size: 14px; color: white; z-index: 1000;">
                            <p>Created by @fajar.yokojr</p>
                        </footer>
                </div>
            </div>
        </div>
    </div>

    <script>
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('registerBtn');
        const loginBtn = document.getElementById('loginBtn');

        registerBtn.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
    