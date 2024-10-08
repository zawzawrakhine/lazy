<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <?php include('css.php'); ?>

</head>

<body>


<?php   
// Start the session
session_start();

// Check if the user is not logged in (session is not set)
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header('Location: login.php');
    exit();
}

// If logged in, show the page content
?>


<?php include('connection.php'); ?>

    <?php include('header.php'); ?>


    <?php include('navbar.php'); ?>


    <!-- heading section start -->

    <section class="heading">
        <h3>our shop</h3>
        <p><a href="index.php">home</a> / <span>shop</span></p>
    </section>

    <!-- heading section end -->


    <!-- category section start -->

    <section class="category">
        <h1 class="title"> <span>our categories</span> <a href="#">view all >></a></h1>

        <div class="box-container">

            <a href="#" class="box">
                <img src="image/icon-1.png" alt="">
                <h3>house sofa</h3>
            </a>

            <a href="#" class="box">
                <img src="image/icon-2.png" alt="">
                <h3>working table</h3>
            </a>

            <a href="#" class="box">
                <img src="image/icon-3.png" alt="">
                <h3>corner table</h3>
            </a>

            <a href="#" class="box">
                <img src="image/icon-4.png" alt="">
                <h3>office chair</h3>
            </a>

            <a href="#" class="box">
                <img src="image/icon-5.png" alt="">
                <h3>new wardrobe</h3>
            </a>

        </div>
    </section>

    <!-- category section end -->


    <!-- products section start -->

    <section class="products">
        <h1 class="title"> <span>our products</span> <a href="#">view all >></a></h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="image/product-1.png" alt="">
                </div>
                <div class="content">
                    <div class="price">$140.00</div>
                    <h3>modern furniture</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/product-2.png" alt="">
                </div>
                <div class="content">
                    <div class="price">$140.00</div>
                    <h3>modern furniture</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/product-3.png" alt="">
                </div>
                <div class="content">
                    <div class="price">$140.00</div>
                    <h3>modern furniture</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/product-4.png" alt="">
                </div>
                <div class="content">
                    <div class="price">$140.00</div>
                    <h3>modern furniture</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/product-5.png" alt="">
                </div>
                <div class="content">
                    <div class="price">$140.00</div>
                    <h3>modern furniture</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/product-6.png" alt="">
                </div>
                <div class="content">
                    <div class="price">$140.00</div>
                    <h3>modern furniture</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/product-7.png" alt="">
                </div>
                <div class="content">
                    <div class="price">$140.00</div>
                    <h3>modern furniture</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/product-8.png" alt="">
                </div>
                <div class="content">
                    <div class="price">$140.00</div>
                    <h3>modern furniture</h3>
                </div>
            </div>



        </div>
    </section>

    <!-- products section end -->
    
<?php include('footer.php'); ?>

<?php include('js.php'); ?>

</body>

</html>