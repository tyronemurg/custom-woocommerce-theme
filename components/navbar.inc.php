<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand pt-0 waves-effect" href="<?php echo site_url('/'); ?>">
         Custom WC Components
           <!-- <img src="" alt="Site logo">-->
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="<?php echo site_url('/'); ?>">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="<?php echo site_url('/blog'); ?>">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="<?php echo site_url('/shop'); ?>">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="<?php echo site_url('/cart'); ?>" >Cart</a>
                </li>


            </ul>

            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a href="" class="nav-link waves-effect" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link waves-effect" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('/my-account'); ?>" class="nav-link border border-light rounded waves-effect"
                        >
                       Login/Register
                    </a>
                </li>
            </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->