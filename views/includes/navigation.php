<!--::header part start::-->
<header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="<?php echo BASEASSETS;?>img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo BASEURL;?>">Home</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASEURL;?>doctors">Take Appointment</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Check Disease
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo BASEURL;?>image_through_local">Upload Image (through local storage)</a>
                                        <a class="dropdown-item" href="<?php echo BASEURL;?>image_through_camera">Upload Image (through camera)</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        History
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="blog.html">Checkup History</a>
                                        <a class="dropdown-item" href="single-blog.html">Appointment History</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASEURL;?>about_us">about</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASEURL;?>contact_us">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <a class="btn_2 d-none d-lg-block" href="<?php echo BASEURL;?>login">Member login</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->