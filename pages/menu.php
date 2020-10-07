<?php
    include '../nav-header.php';
    ?>
    <div class="title-text">

        <h1>Menu</h1>
<h2>Welcome <?php echo $_SESSION['name'] ?> </h2>
    </div>
        <div class="menu-content">
            <div class="left-buttons">
                
                <!-- method = "show" + the Div ID -->
                <button onclick="showMenu()">Menu</button> <br>
                <button onclick="showTopPick()">Top Picks</button> <br>
                <button onclick="showAustralian()">Australian</button> <br>
                <button onclick="showChinese()">Chinese</button> <br>
                <button onclick="showItalian()">Italian</button> <br>
                <button onclick="showJapanese()">Japanese</button> <br>
                <button onclick="showKorean()">Korean</button> <br>
                <button onclick="showSpanish()">Spanish</button> <br>
                <button onclick="showIndonesian()">Indonesian</button> <br>
                <button onclick="showMexican()">Mexican</button> <br>
                <button onclick="showThai()">Thai</button> <br>
            </div>
    
            <!-- START OF FULL MENU -->
            <div class="menu-full"> 
    
                <div class="menu-item" id="top-pick"> 
    
                    <h2>TOP PICKS: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href="cart.php"> <img src="../img/food-items/tomyum_toppick.png" alt="tomyum_toppick"></a>
                        </div>
                        <div class="item">
                            <a href="cart.php"> <img src="../img/food-items/lamington_toppick.png" alt="lamington_toppick"></a>
                        </div>
                        <div class="item">
                            <a href="cart.php"> <img src="../img/food-items/carbonara_toppick.png" alt="carbonara_toppick"></a>
                        </div>
                        <div class="item">
                            <a href="cart.php"> <img src="../img/food-items/donburi_toppick.png" alt="donburi_toppick"></a>
                        </div>
                        <div class="item">
                            <a href="cart.php"> <img src="../img/food-items/dumpling_toppick.png" alt="dumpling_toppick"></a>
                        </div>
                        <div class="item">
                            <a href="cart.php"> <img src="../img/food-items/kimchi_toppick.png" alt="kimchi_toppick"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF TOP PICKS -->
    
                <!-- START OF CUSINE, ID is the type used in thr JS File to find the element -->
    
                <div class="menu-item" id="australian"> 
    
                    <h2>Australian: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href="cart.php"> <img src="../img/food-items/barramundi_cuisine.png" alt="barramundi_cuisine"></a>
                        </div>
                        
                        <div class="item">
                            <a href="cart.php"> <img src="../img/food-items/lamington_cuisine.png" alt="lamington_cuisine"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF CUISINE -->
                <div class="menu-item" id="chinese"> 
                    <h2>Chinese: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href="cart.php"> <img src="../img/food-items/dumpling_cuisine.png" alt="dumpling_cuisine"></a>
                            <a href="cart.php"> <img src="../img/food-items/chinese1.png" alt="chinese1"></a>
                            <a href="cart.php"> <img src="../img/food-items/chinese2.png" alt="chinese2"></a>
                            <a href="cart.php"> <img src="../img/food-items/chinese3.png" alt="chinese3"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF CUISINE -->
                <div class="menu-item" id="italian"> 
    
                    <h2>Italian: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href="cart.php"> <img src="../img/food-items/carbonara_cuisine.png" alt="carbonara_cuisine"></a>
                            <a href="cart.php"> <img src="../img/food-items/italian1.png" alt="italian1"></a>
                            <a href="cart.php"> <img src="../img/food-items/italian2.png" alt="italian2"></a>
                            <a href="cart.php"> <img src="../img/food-items/italian3.png" alt="italian3"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF CUISINE -->
                <div class="menu-item" id="japanese"> 
    
                    <h2>Japanese: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href="cart.php"> <img src="../img/food-items/donburi_cuisine.png" alt="donburi_cuisine"></a>
                            <a href="cart.php"> <img src="../img/food-items/japanese1.png" alt="japanese1"></a>
                            <a href="cart.php"> <img src="../img/food-items/japanese2.png" alt="japanese2"></a>
                            <a href="cart.php"> <img src="../img/food-items/japanese3.png" alt="japanese3"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF CUISINE -->
                <div class="menu-item" id="spanish"> 
    
                    <h2>Spanish: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href="cart.php"> <img src="../img/food-items/paella_cuisine.png" alt="paella_cuisine"></a>
                            <a href="cart.php"> <img src="../img/food-items/spanish1.png" alt="spanish1"></a>
                            <a href="cart.php"> <img src="../img/food-items/spanish2.png" alt="spanish2"></a>
                            <a href="cart.php"> <img src="../img/food-items/spanish3.png" alt="spanish3"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF CUISINE -->
                <div class="menu-item" id="korean"> 
    
                    <h2>Korean: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href="cart.php"> <img src="../img/food-items/kimchi_cuisine.png" alt="kimchi_cuisine"></a>
                            <a href="cart.php"> <img src="../img/food-items/korean1.png" alt="korean1"></a>
                            <a href="cart.php"> <img src="../img/food-items/korean2.png" alt="korean2"></a>
                            <a href="cart.php"> <img src="../img/food-items/korean3.png" alt="korean3"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF CUISINE -->
                <div class="menu-item" id="indonesian"> 
    
                    <h2>Indonesian: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href="cart.php"> <img src="../img/food-items/rendang_cuisine.png" alt="rendang_cuisine"></a>
                            <a href="cart.php"> <img src="../img/food-items/indonesian1.png" alt="indonesian1"></a>
                            <a href="cart.php"> <img src="../img/food-items/indonesian2.png" alt="indonesian2"></a>
                            <a href="cart.php"> <img src="../img/food-items/indonesian3.png" alt="indonesian3"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF CUISINE -->
                <div class="menu-item" id="mexican"> 
    
                    <h2>Mexican: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href="cart.php"> <img src="../img/food-items/taco_cuisine.png" alt="taco_cuisine"></a>
                            <a href="cart.php"> <img src="../img/food-items/mexican1.png" alt="mexican1"></a>
                            <a href="cart.php"> <img src="../img/food-items/mexican2.png" alt="mexican2"></a>
                            <a href="cart.php"> <img src="../img/food-items/mexican3.png" alt="mexican3"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF CUISINE -->
                <div class="menu-item" id="thai"> 
    
                    <h2>Thai: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href="cart.php"> <img src="../img/food-items/tomyum_cuisine.png" alt="tomyum_cuisine"></a>
                            <a href="cart.php"> <img src="../img/food-items/thai1.png" alt="thai1"></a>
                            <a href="cart.php"> <img src="../img/food-items/thai2.png" alt="thai2"></a>
                            <a href="cart.php"> <img src="../img/food-items/thai3.png" alt="thai3"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF CUISINE -->
            </div>
        </div>
    </div>
    


   
</body>

</html>         

