<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Shopping Cart Add Item</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/foundation.min.css" />
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="contain-to-grid header-section">
            <nav class="top-bar important-class" data-topbar>
                <ul class="title-area">
                    <li class="name">
                        <img src="img/logo.png" width="100" height="100" alt="" id="logo-img" />
                    </li>
                    <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
                </ul>
                <section class="top-bar-section">
                    <ul class="right">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li class="has-dropdown">
                            <a href="#">Services</a>
                            <ul class="dropdown">
                                <li><a href="#">Service #1</a></li>
                                <li><a href="#">Service #2</a></li>
                                <li><a href="#">Service #3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </section>
            </nav>
        </div>
        <div class="header-fill"></div>
        <div class="row content-section">
            <div class="clearfix" id="content" >
                <h1>Shopping Cart Add Items: </h1>
                <form action="." method="post">
                    <input type="hidden" name="action" value="add"/>
                    <label>Name:</label>
                    <select name="productkey">
                        <?php
                        foreach ($products as $key => $product) :
                            $cost = number_format($product['cost'], 2);
                            $name = $product['name'];
                            $item = $name . '($' . $cost . ')';
                            ?>
                            <option value="<?php echo $key; ?>">
                                <?php echo $item; ?>
                            </option>
                        <?php endforeach; ?>
                    </select><br />
                    <label>Quantity: </label>
                    <select name="itemqty">
                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                            <option value="<?php echo $i; ?>">
                                <?php echo $i; ?>
                            </option>
                        <?php endfor; ?>
                    </select><br />
                    <label>&nbsp;</label>
                    <input type="submit" value="Add Item">
                </form>
                <p><a href=".?action=show_cart">View Cart</a></p>
            </div>
        </div>
        <div class="footer-section">
            <div class="row">
                <div class="small-12 medium-12 large-12 columns">
                    <p> &copy; Copyright 2014</p>
                </div>
            </div>
        </div>
        <script src="js/vendor/modernizr.js"></script>
        <script src="js/vendor/jquery.js"></script>
        <script src="js/foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html>
