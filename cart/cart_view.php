<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Shopping Cart Add Item</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/foundation.min.css" />
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
                        <li><a href="#about">About us</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </section>
            </nav>
        </div>
        <section id="hero">
            <div class="row">
                <div id="intro" class="small-12 columns">
                    <h1>I'M NICKI CHEN.</h1>
                </div>
            </div>
            <div class="row">
                <div class="small-12 large-10 large-centered columns" style="padding-bottom:1.25em">
                    <h2>| Web Designer |</h2>
                    <h2>Design and develop for the web. You can follow my latest projects on Tumblr
                        and Github.</h2>
                    <h2>Open to employment and collaboration.</h2>
                </div>
        </section>
        <div class="row">
            <div class="small-3 small-centered columns">
                <a href="#" id="top" >
                    <div id="arrow">
                    </div>
                </a>
            </div>
        </div>
        <div class="row content-section">
            <div class="clearfix" id="content" >
                <h1>View Cart</h1>
                <?php if (count($_SESSION['cart12']) == 0) : ?>
                    <p><i class="fa fa-shopping-cart"></i>There are no items in your cart.</p>
                <?php else: ?>
                    <form action="." method="post">
                        <input type="hidden" name="action" value="update">
                        <table class="responsive">
                            <tr>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                            <?php
                            foreach ($_SESSION['cart12'] as $key => $item) :
                                $cost = number_format($item['cost'], 2);
                                $total = number_format($item['total'], 2);
                                ?>
                                <tr>
                                    <td>
        <?php echo $item['name']; ?>
                                    </td>
                                    <td>
        <?php echo $cost; ?>
                                    </td>
                                    <td>
                                        <input type="text" class="cart_qty" name="newqty[<?php echo $key; ?>]"
                                               value="<?php echo $item['qty']; ?>">
                                    </td>	
                                    <td>
                                        $<?php echo $total; ?>
                                    </td>
                                </tr>
    <?php endforeach; ?>
                            <tr>
                                <td colspan="3">Subtotal</td>
                                <td>$<?php echo cart\get_subtotal(); ?></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <input type="submit" value="Update Cart">
                                </td>
                            </tr>
                        </table>
                    </form>	
<?php endif; ?>
                <p><a href=".?action=show_add_item">Add Item</a></p>
                <p><a href=".?action=empty_cart">Empty Cart</a></p>
            </div>
        </div>
        <div class="row">
            <div class="small-4 small-centered columns" id="banner">
                <img src="img/banner.png" />
            </div>
        </div>
        <section id="about">
            <div class="row">
                <div class="small-12 medium-4 large-4 columns" id="profile">
                    <img src="img/mypic.png" />
                </div>
                <div class="small-12 medium-8 large-8 columns">
                    <p>I hand-code and enjoy working with responsive grid frameworks.
                        Without a technical or a design background,I decided to embark
                        my 100-Day-Code-Challenge with daily projects with programming
                        and design . You can follow my latest projects: 
                    </p> 
                    <a href="http://donutsbean.tumblr.com"><i class="fa fa-tumblr-square">
                        </i></a>
                    <a href="https://github.com/ncmochacity?tab=repositories">
                        <i class="fa fa-github-square"></i>
                    </a>
                </div>
            </div>
        </section>
        <a href="#bottom" class="back-to-top" id="top"></a>
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
        <script src="js/main.js"></script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html>