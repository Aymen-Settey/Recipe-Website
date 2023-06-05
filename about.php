<?php
   include_once 'header.php';
?>
    <main class="page">
      <section class="about-page">
        <article>
          <h2>
            Welcome to
            <span style="color: rgb(255, 113, 11)">7ey's Kitchen!!</span>
          </h2>
          <p>
            We are a food blog that is dedicated to sharing delicious and
            easy-to-follow recipes for home cooks. Our mission is to help people
            of all skill levels improve their cooking abilities and discover new
            flavors.
          </p>
          <p>
            At 7ey's Kitchen, we are passionate about good food and we love
            sharing our culinary adventures with our readers. Join us on our
            journey and let's explore the world of cooking together!
          </p>
          <a href="SignIn.php" class="btn">Sign Up</a>
        </article>
        <img
          src="./assets/about.jpg"
          alt="pouring salt"
          class="img about-img"
        />
      </section>
      <section class="featured-recipes">
        <h5 class="featured-title">Look At this Awesome Recipes</h5>
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
