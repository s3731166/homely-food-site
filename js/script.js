function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');
  
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("a")[0];
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }
  }

//   STOLEN SCRIPT 

function showTopPick(){
  var  menu, targetItem, menuItems, i;
  menu = document.getElementsByClassName("menu-full");
  targetItem = document.getElementById("top-pick");
  menuItems = document.getElementsByClassName("menu-item");

  for (i = 0; i < menuItems.length; i++) {
    menuItems[i].style.display = "none";
  }
  targetItem.style.display = "inline-block";
}


function showMenu(){
  var  menu, targetItem, menuItems, i;
  menu = document.getElementsByClassName("menu-full");
  targetItem = document.getElementById("australian");
  menuItems = document.getElementsByClassName("menu-item");

  for (i = 0; i < menuItems.length; i++) {
    menuItems[i].style.display = "inline-block";
  }
  targetItem.style.display = "inline-block";
}

function showAustralian(){
  var  menu, targetItem, menuItems, i;
  menu = document.getElementsByClassName("menu-full");
  targetItem = document.getElementById("australian");
  menuItems = document.getElementsByClassName("menu-item");

  for (i = 0; i < menuItems.length; i++) {
    menuItems[i].style.display = "none";
  }
  targetItem.style.display = "inline-block";
}

function showChinese(){
  var  menu, targetItem, menuItems, i ;
  menu = document.getElementsByClassName("menu-full");
  targetItem = document.getElementById("chinese"); //THIS IS THE ONLY LINE YOU NEED TO CHANGE ASIDE FROM THE METHOD NAME 
  menuItems = document.getElementsByClassName("menu-item");

  for (i = 0; i < menuItems.length; i++) {
    menuItems[i].style.display = "none";
  }
  targetItem.style.display = "inline-block";
}

function showItalian(){
  var  menu, targetItem, menuItems, i ;
  menu = document.getElementsByClassName("menu-full");
  targetItem = document.getElementById("italian"); //THIS IS THE ONLY LINE YOU NEED TO CHANGE ASIDE FROM THE METHOD NAME 
  menuItems = document.getElementsByClassName("menu-item");

  for (i = 0; i < menuItems.length; i++) {
    menuItems[i].style.display = "none";
  }
  targetItem.style.display = "inline-block";
}
function showJapanese(){
  var  menu, targetItem, menuItems, i ;
  menu = document.getElementsByClassName("menu-full");
  targetItem = document.getElementById("japanese"); //THIS IS THE ONLY LINE YOU NEED TO CHANGE ASIDE FROM THE METHOD NAME 
  menuItems = document.getElementsByClassName("menu-item");

  for (i = 0; i < menuItems.length; i++) {
    menuItems[i].style.display = "none";
  }
  targetItem.style.display = "inline-block";
}
function showKorean(){
  var  menu, targetItem, menuItems, i ;
  menu = document.getElementsByClassName("menu-full");
  targetItem = document.getElementById("korean"); //THIS IS THE ONLY LINE YOU NEED TO CHANGE ASIDE FROM THE METHOD NAME 
  menuItems = document.getElementsByClassName("menu-item");

  for (i = 0; i < menuItems.length; i++) {
    menuItems[i].style.display = "none";
  }
  targetItem.style.display = "inline-block";
}
function showSpanish(){
  var  menu, targetItem, menuItems, i ;
  menu = document.getElementsByClassName("menu-full");
  targetItem = document.getElementById("spanish"); //THIS IS THE ONLY LINE YOU NEED TO CHANGE ASIDE FROM THE METHOD NAME 
  menuItems = document.getElementsByClassName("menu-item");

  for (i = 0; i < menuItems.length; i++) {
    menuItems[i].style.display = "none";
  }
  targetItem.style.display = "inline-block";
}
function showIndonesian(){
  var  menu, targetItem, menuItems, i ;
  menu = document.getElementsByClassName("menu-full");
  targetItem = document.getElementById("indonesian"); //THIS IS THE ONLY LINE YOU NEED TO CHANGE ASIDE FROM THE METHOD NAME 
  menuItems = document.getElementsByClassName("menu-item");

  for (i = 0; i < menuItems.length; i++) {
    menuItems[i].style.display = "none";
  }
  targetItem.style.display = "inline-block";
}
function showMexican(){
  var  menu, targetItem, menuItems, i ;
  menu = document.getElementsByClassName("menu-full");
  targetItem = document.getElementById("mexican"); //THIS IS THE ONLY LINE YOU NEED TO CHANGE ASIDE FROM THE METHOD NAME 
  menuItems = document.getElementsByClassName("menu-item");

  for (i = 0; i < menuItems.length; i++) {
    menuItems[i].style.display = "none";
  }
  targetItem.style.display = "inline-block";
}
function showThai(){
  var  menu, targetItem, menuItems, i ;
  menu = document.getElementsByClassName("menu-full");
  targetItem = document.getElementById("thai"); //THIS IS THE ONLY LINE YOU NEED TO CHANGE ASIDE FROM THE METHOD NAME 
  menuItems = document.getElementsByClassName("menu-item");

  for (i = 0; i < menuItems.length; i++) {
    menuItems[i].style.display = "none";
  }
  targetItem.style.display = "inline-block";
}