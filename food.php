<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/varbscakes/logo/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/varbscakes/logo/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/varbscakes/logo/favicon-16x16.png">
  <link rel="manifest" href="http://localhost/varbscakes/logo/site.webmanifest">

  <link rel="stylesheet" href="http://localhost/varbscakes/varbscakes.css" class="css">
  <title>Varbs Cakes</title>
</head>

<body>
  <?php
  include("navigationbar.php");
  ?>

  <div class="cwo">
    <h3>Indulge Your Taste Buds: <br> Explore Our Delectable Food Selection</h3>
  </div>
  <div class="search-container">
    <input type="text" id="search-bar" placeholder="Search...">
    <button type="button" id="search-button">Search</button>
  </div>
  <div class="ediheader">
    <h5 style="padding-top: 5rem;
    padding-bottom: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: madimione; font-size: 2vw;"> Meals </h5>
  </div>

  <div class="container">
    <div class="menu">
      <div class="card">
        <img src="http://localhost/varbscakes/foods/jambalayarice.jpg" alt="Snack 1">
        <div class="description">
          <h3 id="shawarma">Beef shawarma</h3>
          <p>Tender slices of seasoned meat or poultry, wrapped in warm pita bread with fresh veggies and creamy sauce.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/foods/jellofrice.jpg" alt="Snack 1">
        <div class="description">
          <h3 id="crispy-chicken">Crispy Chicken</h3>
          <p> Juicy chicken pieces coated in a crispy, seasoned batter, fried to golden perfection.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/foods/nativesoup.jpg" alt="Snack 1">
        <div class="description">
          <h3>Crispy Fish</h3>
          <p>Flaky fish fillets coated in a crunchy breadcrumb crust, fried until crispy on the outside and tender on the inside.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/foods/friedrice.jpg" alt="Snack 1">
        <div class="description">
          <h3>Doughnut</h3>
          <p>Soft and fluffy fried dough, often glazed or filled with sweet toppings like jam or chocolate.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/foods/spaghetti.jpg" alt="Snack 1">
        <div class="description">
          <h3>Fish Pie</h3>
          <p>Creamy seafood filling, usually made with flaky fish and savory sauce, baked inside a buttery pastry crust.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/foods/whiterice.jpg" alt="Snack 1">
        <div class="description">
          <h3>Cheese Burger</h3>
          <p>Creamy seafood filling, usually made with flaky fish and savory sauce, baked inside a buttery pastry crust.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/foods/afangsoup.webp" alt="Snack 1">
        <div class="description">
          <h3>Meat Pie</h3>
          <p>Savory pastry filled with a hearty mixture of seasoned ground meat and vegetables.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/foods/seafoodokro.jpg" alt="Snack 1">
        <div class="description">
          <h3>Puf Puf</h3>
          <p> Light and fluffy African fried dough balls, sweetened with sugar and often flavored with spices like nutmeg.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/foods/egusisoup.jpg" alt="Snack 1">
        <div class="description">
          <h3>Sauce Fish</h3>
          <p>Succulent fish fillets served with a flavorful sauce, such as a tangy tomato-based or creamy herb sauce.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/foods/bangasoup.jpg" alt="Snack 1">
        <div class="description">
          <h3>Sausage Roll</h3>
          <p>Flaky pastry wrapped around seasoned sausage meat, baked until golden brown and crispy.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/foods/coleslaw.jpg" alt="Snack 1">
        <div class="description">
          <h3>French Fries</h3>
          <p>Crispy potato sticks, deep-fried to perfection and seasoned with salt.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/foods/frienchfries.jpg" alt="Snack 1">
        <div class="description">
          <h3>Asun</h3>
          <p>Juicy beef or veggie patty, sandwiched between soft buns with fresh lettuce, tomato, cheese, and condiments like ketchup and mustard.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/foods/jambalayarice.jpg" alt="Snack 1">
        <div class="description">
          <h3>Asun</h3>
          <p>Juicy beef or veggie patty, sandwiched between soft buns with fresh lettuce, tomato, cheese, and condiments like ketchup and mustard.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
    </div>
  </div>




  <div class="ediheader">
    <h5 style="padding-top: 5rem;
    padding-bottom: 5rem;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: madimione; font-size: 2vw;">Protein</h5>
  </div>

  <div class="container">
    <div class="menu">
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/coke25cl.jpg" alt="Snack 1">
        <div class="description">
          <h3>Coke 25cl</h3>
          <p>Tender slices of seasoned meat or poultry, wrapped in warm pita bread with fresh veggies and creamy sauce.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/coke1l.webp" alt="Snack 1">
        <div class="description">
          <h3>Coke 1L</h3>
          <p> Juicy chicken pieces coated in a crispy, seasoned batter, fried to golden perfection.</p>
          <p>$5.99</p>
          <div class="slider">
            <button class="minus-btn">-</button>
            <span class="quantity">1</span>
            <button class="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/cancoke.png" alt="Snack 1">
        <div class="description">
          <h3>Can Coke</h3>
          <p>Flaky fish fillets coated in a crunchy breadcrumb crust, fried until crispy on the outside and tender on the inside.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/hollandiayoghurtbig.png" alt="Snack 1">
        <div class="description">
          <h3>Hollandia Yoghurt Big</h3>
          <p>Soft and fluffy fried dough, often glazed or filled with sweet toppings like jam or chocolate.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/hollandiayoghurtsmall.png" alt="Snack 1">
        <div class="description">
          <h3>Hollandia Yoghurt Small</h3>
          <p>Creamy seafood filling, usually made with flaky fish and savory sauce, baked inside a buttery pastry crust.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/schweppeschapman.jpg" alt="Snack 1">
        <div class="description">
          <h3>Schweppes Chapman</h3>
          <p>Savory pastry filled with a hearty mixture of seasoned ground meat and vegetables.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/monsterenergy.webp" alt="Snack 1">
        <div class="description">
          <h3>Monster Energy</h3>
          <p> Light and fluffy African fried dough balls, sweetened with sugar and often flavored with spices like nutmeg.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/canfanta.webp" alt="Snack 1">
        <div class="description">
          <h3>Can Fanta</h3>
          <p>Succulent fish fillets served with a flavorful sauce, such as a tangy tomato-based or creamy herb sauce.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/schweepsvirgin.webp" alt="Snack 1">
        <div class="description">
          <h3>Schweppes Virgin</h3>
          <p>Flaky pastry wrapped around seasoned sausage meat, baked until golden brown and crispy.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/monsterenergyultra.webp" alt="Snack 1">
        <div class="description">
          <h3>Monster Energy Ultra</h3>
          <p>Crispy potato sticks, deep-fried to perfection and seasoned with salt.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/vitamilk.webp" alt="Snack 1">
        <div class="description">
          <h3>Vita Milk</h3>
          <p>Juicy beef or veggie patty, sandwiched between soft buns with fresh lettuce, tomato, cheese, and condiments like ketchup and mustard.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/amstelmalt.webp" alt="Snack 1">
        <div class="description">
          <h3>Amstel Malt</h3>
          <p>Soft and fluffy fried dough, often glazed or filled with sweet toppings like jam or chocolate.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/betamalt.png" alt="Snack 1">
        <div class="description">
          <h3>Beta Malt</h3>
          <p>Creamy seafood filling, usually made with flaky fish and savory sauce, baked inside a buttery pastry crust.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/heineken.jpg" alt="Snack 1">
        <div class="description">
          <h3>Heineken</h3>
          <p>Savory pastry filled with a hearty mixture of seasoned ground meat and vegetables.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/5alive.webp" alt="Snack 1">
        <div class="description">
          <h3>5 alive</h3>
          <p> Light and fluffy African fried dough balls, sweetened with sugar and often flavored with spices like nutmeg.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/lasienwater.png" alt="Snack 1">
        <div class="description">
          <h3>Lasien Water</h3>
          <p>Succulent fish fillets served with a flavorful sauce, such as a tangy tomato-based or creamy herb sauce.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/poporange.jpg" alt="Snack 1">
        <div class="description">
          <h3>Pop Orange</h3>
          <p>Flaky pastry wrapped around seasoned sausage meat, baked until golden brown and crispy.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/popcola.webp" alt="Snack 1">
        <div class="description">
          <h3>Pop Cola</h3>
          <p>Crispy potato sticks, deep-fried to perfection and seasoned with salt.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
      <div class="card">
        <img src="http://localhost/varbscakes/snacks/popuplemon.webp" alt="Snack 1">
        <div class="description">
          <h3>Pop Up Lemon</h3>
          <p>Juicy beef or veggie patty, sandwiched between soft buns with fresh lettuce, tomato, cheese, and condiments like ketchup and mustard.</p>
          <p>$5.99</p>
          <div class="slider">
            <button id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button id="add-btn">+</button>
          </div>
          <button>Add to Cart</button>
        </div>
      </div>
    </div>
  </div>


  <?php
  include("footer.php");
  ?>

  <script defer src="http://localhost/varbscakes/varbscakes.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>