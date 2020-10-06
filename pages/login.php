<?php
    include '../nav-header.php';
?>


        <main>
        <section id="login">
            
        <div class="title-text">
            <h1>Member Log In</h1>

        </div>
            <div class="container">
                
                <form action="validation.php" method="post">
                    Email: <input type="text" name="username" required>
                    <br />
                    Password: <input type="password" name="password" required>
                    <br />
                    <input type="submit" name="submitBtn" value="Login">
                 

                    <label>Don't have an account? </label>
                    <a title="register" href="register.php">Register</a>
                </form>
            </div>
            


        </section>
        </main>
    </div>
</body>
</html>
