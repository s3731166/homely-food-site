<?php
    include '../nav-header.php';
    ?>

    <main>
        <div class="title-text">
            <h1>Get In Touch</h1>
            <h3>Phone: 93327349</h3>
                <h3>Address: 123 ABC Street</h3>
                <h3>admin@homelyfood.com.au</h3>
        </div>
    <section id="contact">
        
            <article>

                
            </article>
            <div class="container">
                <form method='post' action="mailto:admin@homelyfood.com.au">
                    <label style="color:#3d1a03; font-size: 20px; font-weight: bold;">Full Name </label>
                    <input type="text" id="firstname" required>
                    <label style="color:#3d1a03; font-size: 20px; font-weight: bold;">Email</label>
                    <input type="email" textmode="email" id="email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" required>
                    <label style="color:#3d1a03; font-size: 20px; font-weight: bold;">Message</label>
                    <textarea type="text" id="message" required placeholder="Write something.." style="height:200px"></textarea>

                    <input type="submit" value="Submit" style="color:#3b1406; font-size: 25px; font-weight: bold; background-color: rgb(207, 114, 48);">

                </form>
            </div>

        </section>
    </main>
    </div>
</body>
</html>
