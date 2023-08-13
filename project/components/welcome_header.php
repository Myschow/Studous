<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <section class="flex">

      
      <div class="box tutor">
         
         <a href="../index.php" class="inline-btn">View Site</a>
      </div>
      

      <form action="search_course.php" method="post" class="search-form">
         <input type="text" name="search_course" placeholder="search courses..." required maxlength="100">
         <button type="submit" class="fas fa-search" name="search_course_btn"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      

   </section>
</header>

<!-- header section ends -->

<!-- side bar section starts  -->

<div class="side-bar">

   <div class="close-side-bar">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
        <header class="header">

            <section class="flex">

                <a href="dashboard.php" class="logo">WELCOME</a>
             </section>

        </header>
    </div>


   

   <nav class="navbar">
      <a href="welcome.php"><i class="fas fa-home"></i><span>home</span></a>
      <a href="welcome_aboutus.php"><i class="fas fa-question"></i><span>about us</span></a>
      <a href="welcome_contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<!-- side bar section ends -->