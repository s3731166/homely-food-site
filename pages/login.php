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
<input type="submit" name="submitBtn" value="Login" style="color:#3b1406; font-size: 25px; font-weight: bold; background-color: rgb(207, 114, 48);">
                 

                    <label style="color:#3d1a03; font-size: 20px; font-weight: bold; text-align: left;">Don't have an account? </label>
                    <a title="register" href="register.php" style="color:#0e033d; font-size: 20px; font-weight: bold; text-align: left;">Register</a>
                </form>
            </div>
            


        </section>
        </main>
    </div>
</body>
</html>
