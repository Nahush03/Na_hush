<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,
     initial-scale=1.0" />
     <link 
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
     integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
     crossorigin="anonymous" 
     referrerpolicy="no-referrer"
      />
   <link rel ="stylesheet" href="style.css" />
   
   <title>Mission Millets</title>
     
    
</head>
<body>
   <header>
    <div class="navbar">
        <div class="logo"><a href="#">Mission Millets</a></div>
        <ul class="links">
            <li><a href="Home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="newrecipe.php">Recipe</a></li>
            <li><a href="typess.php">Types</a></li>
            <li><a href="health.php">Health Benefits</a></li>
            <li><a href="production.php">Production</a></li>
            <li><a href="Export.php">Export</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
</ul>
        <a href="reglog/Front.php" class="action_btn">Register Here</a>
        <div class="toggle_btn">
        <i class="fa-solid fa-leaf-oak"></i>
        </div>
    </div>

    <div class="dropdown_menu ">
        <li><a href="Home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="newrecipe.php">Recipe</a></li>
            <li><a href="typess.php">Types</a></li>
            <li><a href="health.php">Health Benefits</a></li>
           
            <li><a href="production.php">Production</a></li>
            <li><a href="Export.php">Export</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="reglog/Front.php" class="action_btn">Register Here </a></li>
        </div>
   </header>
   
   <main>
    <section id="hero">
        <h1> Welcome </h1>
        <p> Explore the World of Millets <br/>About , Types , Health Benefits , Recipes , Production & Statistics  </p>

    </section>
   </main>
    
   <script>
 const toggleBtn = document.querySelector('.toggle_btn')
 const toggleBtnicon = document.querySelector('.toggle_btn i')
 const dropDownMenu = document.querySelector('.dropdown_menu')


 toggleBtn.onclick = function () {
    dropDownMenu.classList.toggle('open')
    const isOpen = dropDownMenu.classList.contains('open')

    toggleBtnIcon.classList = isOpen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars'

 }
   </script>
</body>
</html>