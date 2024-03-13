<header>
    <div class="logo">
        <a href="http://localhost/varbscakes/homepage.php"><img src="http://localhost/varbscakes/logo/varbslogoNoBackgroundSmall.png" alt="varbs logo"></a>
    </div>
    <div class="navbars">
        <div id="menu-toggle">
            <i class="fas fa-bars"></i>
        </div>
        <div class="navitems">
            <ul>
                <li><a href="http://localhost/varbscakes/homepage.php">Home</a></li>
                <li><a class="cakes-links" href="http://localhost/varbscakes/cakes.php">Cakes</a><i class="fas fa-chevron-down" id="cakes-dropdown"></i>
                    <ul class="dropdown-menu">
                        <li><a href="http://localhost/varbscakes/spongeCake.php">RED VELVET CAKES
                                <hr>
                            </a> </li>
                        <li><a href="http://localhost/varbscakes/spongeCake.php">SPONGE CAKES
                                <hr>
                            </a></li>
                        <li><a href="http://localhost/varbscakes/spongeCake.php">CHOCOLET CAKES
                                <hr>
                            </a>
                            << /li>
                        <li><a href="http://localhost/varbscakes/spongeCake.php">VANILLA CAKES
                                <hr>
                            </a> </li>
                        <li><a href="http://localhost/varbscakes/spongeCake.php">MARBLE CAKES
                                <hr>
                            </a> </li>
                    </ul>
                </li>
                <li><a href="http://localhost/varbscakes/food.php">Food</a></li>
                <li><a href="http://localhost/varbscakes/snacks.php">Snacks & Drinks</a></li>
                <li><a href="http://localhost/varbscakes/contactUs.php">Contact us</a></li>
                <a href="http://localhost/varbscakes/cart.php"><button> <i class="fa-solid fa-basket-shopping"></i>Cart</button></a>
            </ul>
        </div>
    </div>

    <div id="side-menu">
        <ul>
            <li><a href="http://localhost/varbscakes/homepage.php">Home</a></li>
            <li><a href="http://localhost/varbscakes/cakes.php">Cakes</a></li>
            <li><a href="http://localhost/varbscakes/food.php">Food</a></li>
            <li><a href="http://localhost/varbscakes/snacks.php">Snacks & Drinks</a></li>
            <li><a href="http://localhost/varbscakes/contactUs.php">Contact us</a></li>
            <li><a href="http://localhost/varbscakes/cart.php">Cart</a></li>
        </ul>
    </div>
</header>
<script>
    var hammenu = document.getElementById('menu-toggle')
    var menu = document.getElementById('side-menu')


    hammenu.addEventListener('click', function(event) {
        menu.style.right = '0';
        event.stopPropagation();
    });

    document.addEventListener('click', function(event) {
        var targetElement = event.target;
        if (!targetElement.closest('menu-toggle') && !targetElement.closest('side-menu')) {
            menu.style.right = '-250px';
        }
    });
</script>