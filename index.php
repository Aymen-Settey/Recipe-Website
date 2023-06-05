<?php
   include_once 'header.php';
?>
    <!-- main -->
    <main class="page">
      <!-- header -->
      <header class="hero">
        <div class="hero-container">
          <div class="hero-text">
   
            <h1>7ey's Kitchen</h1>
            <?php 
  if (isset($_SESSION["useruid"])) {
     echo "<h4>Hello there " . $_SESSION["useruid"] . "</h4>";
      }
  
?>
            
          </div>
        </div>
      </header>
      <!-- recipes container -->
      <section class="recipes-container">
        <!-- tags container -->
        <div class="tags-container">
          <h4>recipes</h4>
          <div class="tags-list">
            <a href="tag-template.php"> Beef (1)</a>
            <a href="tag-template.php"> Breakfast (2)</a>
            <a href="tag-template.php"> Carrots (3)</a>
            <a href="tag-template.php"> Food (4)</a>
          </div>
        </div>
        <!-- recipes list -->
        <div class="recipe-list">
          <!-- single recipe -->
          <a href="single-recipe.php" class="recipe">
            <img
              src="./assets/recipes/recipe-1.jpeg"
              alt="Food"
              class="img recipe-img"
            />
            <h5>carne asada</h5>
            <p>Prep : 15min | cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe.php" class="recipe">
            <img
              src="./assets/recipes/recipe-2.jpeg"
              alt="Food"
              class="img recipe-img"
            />
            <h5>greek ribs</h5>
            <p>Prep : 15min | cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe.php" class="recipe">
            <img
              src="./assets/recipes/recipe-3.jpeg"
              alt="Food"
              class="img recipe-img"
            />
            <h5>vegetable soupe</h5>
            <p>Prep : 15min | cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe.php" class="recipe">
            <img
              src="./assets/recipes/recipe-4.jpeg"
              alt="Food"
              class="img recipe-img"
            />
            <h5>banana pancakes</h5>
            <p>Prep : 10min | cook : 10min</p>
          </a>
          <!-- end of single recipe -->
        </div>
      </section>
    </main>
    <footer class="page-footer">
      <p>
        &copy; <span id="date"></span
        ><span class="footer-logo"> 7ey's Kitchen</span> Built by
        <a href="#">Aymen Settey</a>
      </p>
    </footer>
    <script src="js/app.js"></script>
  </body>
</html>
