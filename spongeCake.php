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
  <link rel="stylesheet" href="http://localhost/varbscakes/varbscakes.css" class="css" rel="stylesheet">
  <title>Varbs Cakes</title>
</head>

<body>
  <?php
  include("navigationbar.php");
  ?>
  <div class="cake-details">
    <div class="cakewdec">
      <img src="http://localhost/varbscakes/cakes/spongeCake2.webp" alt="Cake Image">
      <h3>Sponge Cake</h3>
      <p>
        Red Velvet Cake is a classic and elegant dessert, with its striking red color and rich cocoa flavor. Our
        Red Velvet Cake is made with the finest ingredients, including premium cocoa powder and Madagascar vanilla
        extract. It's perfect for any special occasion, from birthdays to weddings.
      </p>
    </div>
    <div class="order-form">
      <form>
        <h4>How would you like it?</h4>
        <label>
          Size:
          <select name="Size">
            <option value="Slice">Slice</option>
            <option value="Cupcakes">Cupcake</option>
            <option value="6">6"</option>
            <option value="8">8"</option>
            <option value="10">10"</option>
            <option value="12">12"</option>
            <option value="14">14"</option>
            <option value="16">16"</option>
            <option value="special size">Special size</option>
            <option value="other">Other</option>
          </select>
        </label>
        <label>
          Number of Tiers:
          <input type="number" name="quantity" min="1" value="">
        </label>
        <label>
          Number of Layers:
          <input type="number" name="quantity" min="1" value="">
        </label>




        
        <label for="topping">Frostings:</label>
<div id="topping">
  <label>
    <input type="checkbox" name="topping" value="fondant">
    Fondant Icing
  </label>
  <label>
    <input type="checkbox" name="topping" value="buttercream">
    Buttercream Frosting
  </label>
  <label>
    <input type="checkbox" name="topping" value="lemon curd">
    Lemon Curd
  </label>
  <label>
    <input type="checkbox" name="topping" value="swissmeringue">
    Swiss Meringue
  </label>
  <label>
    <input type="checkbox" name="topping" value="whippedcream">
    Whipped Cream
  </label>

</div>

        <label>
          Occasion:
          <select name="occasion">
            <option value="birthday">Birthday</option>
            <option value="wedding">Wedding</option>
            <option value="anniversary">Anniversary</option>
            <option value="others">Others</option>
          </select>
        </label>
        <label>
          Additional Instructions:
          <textarea name="instructions" rows="4" placeholder="Any special requests or instructions..."></textarea>
        </label>
        <input type="submit" value="Add to Cart">
      </form>
    </div>
  </div>
  <script src="script.js"></script>
  <?php
  include("footer.php");
  ?>

  <script src="http://localhost/varbscakes/varbscakes.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>