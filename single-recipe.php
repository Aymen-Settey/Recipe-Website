<?php
   include_once 'header.php';
?>
    <main class="page">
      <div class="recipe-page">
        <section class="recipe-hero">
          <img
            src="./assets/recipes/recipe-4.jpeg"
            alt="pancakes"
            class="img recipe-hero-img"
          />
          <article>
            <h2>Banana Pancakes</h2>
            <p>
              These Banana Pancakes are fluffy, moist and bursting with the
              sweet flavor of ripe bananas. They are easy to make and perfect
              for breakfast or brunch. The addition of mashed banana in the
              batter adds a natural sweetness and a soft texture to the
              pancakes, making them more flavorful and nutritious than regular
              pancakes.
            </p>
            <!-- recipe icons -->
            <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>Prep time</h5>
                <p>10 min.</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>Cook time</h5>
                <p>10 min.</p>
              </article>
              <article>
                <i class="fas fa-user-friends"></i>
                <h5>servings</h5>
                <p>3 servings</p>
              </article>
            </div>

            <!-- recipe tags -->
            <div class="recipe-tags">
              Tags : <a href="tag-template.html">beef</a>
              <a href="tag-template.php">breakfast</a>
              <a href="tag-template.php">pancakes</a>
              <a href="tag-template.php">Food</a>
            </div>
            <!-- recipe content -->
          </article>
        </section>
        <section class="recipe-content">
          <article>
            <h4>instructions</h4>
            <div class="single-instruction">
              <header>
                <p>step 1</p>
                <div></div>
              </header>
              <p>
                In a medium bowl, whisk together mashed banana and egg until
                well combined.
              </p>
            </div>
            <div class="single-instruction">
              <header>
                <p>step 2</p>
                <div></div>
              </header>
              <p>
                Add flour, baking powder, and salt, and whisk until just
                combined. Be careful not to overmix.
              </p>
            </div>
            <div class="single-instruction">
              <header>
                <p>step 3</p>
                <div></div>
              </header>
              <p>
                Stir in milk and vegetable oil or melted butter until smooth.
              </p>
            </div>
            <div class="single-instruction">
              <header>
                <p>step 4</p>
                <div></div>
              </header>
              <p>
                Heat a non-stick skillet or griddle over medium heat. Once hot,
                spoon about 1/4 cup of batter onto the skillet for each pancake.
              </p>
            </div>
            <div class="single-instruction">
              <header>
                <p>step 5</p>
                <div></div>
              </header>
              <p>
                Cook until bubbles form on the surface of the pancake, then flip
                and cook until golden brown on the other side.
              </p>
            </div>
            <div class="single-instruction">
              <header>
                <p>step 6</p>
                <div></div>
              </header>
              <p>Repeat with the remaining batter.</p>
            </div>
            <div class="single-instruction">
              <header>
                <p>step 7</p>
                <div></div>
              </header>
              <p>
                Serve pancakes warm with maple syrup and sliced bananas, if
                desired.
              </p>
            </div>
          </article>
          <article class="second-column">
            <div>
              <h4>ingredients</h4>
              <p class="single-ingredient">1 ripe banana, mashed</p>
              <p class="single-ingredient">1 egg</p>
              <p class="single-ingredient">1/4 cup all-purpose flour</p>
              <p class="single-ingredient">1/2 tsp baking powder</p>
              <p class="single-ingredient">1/4 tsp salt</p>
              <p class="single-ingredient">1/4 cup milk</p>
              <p class="single-ingredient">
                1 tbsp vegetable oil or melted butter
              </p>
              <p class="single-ingredient">
                Maple syrup and sliced bananas, for serving (optional)
              </p>
            </div>
            <div>
              <h4>tools</h4>
              <p class="single-tool">Mixing bowls</p>
              <p class="single-tool">Whisk</p>
              <p class="single-tool">Measuring cups and spoons</p>
              <p class="single-tool">Non-stick skillet or griddle</p>
            </div>
          </article>
        </section>
      </div>
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
