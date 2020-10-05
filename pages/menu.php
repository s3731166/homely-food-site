<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <script src="../js/script.js"></script>

    <title>Homely Food</title>
</head>

<body>
    <div class="bg">

    <nav>
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="about.html"> About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="how-it-works.html">How We Work</a></li>
            <li><a href="menu.html">Menu</a></li>
            <li><a href="register.html">Register</a></li>
            <li><a href="login.html">Log In</a></li>
        </ul>
    </nav>
    <div class="title-text">

        <h1>Menu</h1>
<h2>Welcome <?php echo $_SESSION['name']; ?> </h2>
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
                            <a href=""> <img src="../img/food-items/tomyum_toppick.png" alt="tomyum_toppick"></a>
                        </div>
                        <div class="item">
                            <a href=""> <img src="../img/food-items/lamington_toppick.png" alt="lamington_toppick"></a>
                        </div>
                        <div class="item">
                            <a href=""> <img src="../img/food-items/carbonara_toppick.png" alt="carbonara_toppick"></a>
                        </div>
                        <div class="item">
                            <a href=""> <img src="../img/food-items/donburi_toppick.png" alt="donburi_toppick"></a>
                        </div>
                        <div class="item">
                            <a href=""> <img src="../img/food-items/dumpling_toppick.png" alt="dumpling_toppick"></a>
                        </div>
                        <div class="item">
                            <a href=""> <img src="../img/food-items/kimchi_toppick.png" alt="kimchi_toppick"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF TOP PICKS -->
    
                <!-- START OF CUSINE, ID is the type used in thr JS File to find the element -->
    
                <div class="menu-item" id="australian"> 
    
                    <h2>Australian: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href=""> <img src="../img/food-items/barramundi_cuisine.png" alt="barramundi_cuisine"></a>
                        </div>
                        
                        <div class="item">
                            <a href=""> <img src="../img/food-items/lamington_cuisine.png" alt="lamington_cuisine"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF CUISINE -->
                <div class="menu-item" id="chinese"> 
                    <h2>Chinese: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href=""> <img src="../img/food-items/dumpling_cuisine.png" alt="barramundi_cuisine"></a>
                        </div> 
                    </div>
                </div>
                <!-- END OF CUISINE -->
                <div class="menu-item" id="italian"> 
    
                    <h2>Italian: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href=""> <img src="../img/food-items/carbonara_cuisine.png" alt="carbonara_cuisine"></a>
                        </div>
                        
                       
                    </div>
                </div>
                <!-- END OF CUISINE -->
                <div class="menu-item" id="japanese"> 
    
                    <h2>Japanese: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href=""> <img src="../img/food-items/donburi_cuisine.png" alt="donburi_cuisine"></a>
                        </div>
                        
                      
                    </div>
                </div>
                <!-- END OF CUISINE -->
                <div class="menu-item" id="spanish"> 
    
                    <h2>Spanish: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href=""> <img src="../img/food-items/paella_cuisine.png" alt="paella_cuisine"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF CUISINE -->
    
                <div class="menu-item" id="korean"> 
    
                    <h2>Korean: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href=""> <img src="../img/food-items/kimchi_cuisine.png" alt="kimchi_cuisine"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF CUISINE -->
                <div class="menu-item" id="indonesian"> 
    
                    <h2>Indonesian: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href=""> <img src="../img/food-items/rendang_cuisine.png" alt="barramundi_cuisine"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF CUISINE -->
                <div class="menu-item" id="mexican"> 
    
                    <h2>Mexican: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href=""> <img src="../img/food-items/taco_cuisine.png" alt="taco_cuisine"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF CUISINE -->
                <div class="menu-item" id="thai"> 
    
                    <h2>Thai: </h2>
                    <div class="food-items">
                        <div class="item">
                            <a href=""> <img src="../img/food-items/tomyum_cuisine.png" alt="barramundi_cuisine"></a>
                        </div>
                    </div>
                </div>
                <!-- END OF CUISINE -->
            </div>
        </div>
    </div>
    


   
</body>

</html>