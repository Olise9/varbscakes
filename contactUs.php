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
    <style>
        section {
            margin-bottom: 40px;
            width: 70vw;
            margin: auto;
        }

        *{
            text-decoration: none;
            color: rgb(105, 48, 50);
        }
    </style>
</head>

<body>
    <?php
    include("navigationbar.php");
    ?>

    <div class="contact-container">
        <section class="contact-info">
            <h2>Get in Touch</h2>
            <div class="contact-details">
                <div class="detail">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>ADDRESS: 1 TRANS-SLAUGHTER ROAD, <br>
                        WOJI, PORT HARCOURT <br> RIVERS STATE NIGERIA</p>
                </div>
                <div class="detail">
                    <i class="fas fa-phone"></i>
                    <a href="tel:08033281676">08033281676</a>
                </div>
                <div class="detail">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:contactvarbs@gmail.com" target="_blank">contactvarbs@gmail.com</a>
                </div>
            </div>
        </section>
        <section class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </section
    </div>


    <script src="script.js"></script>
    <?php
    include("footer.php");
    ?>

    <script src="http://localhost/varbscakes/varbscakes.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>