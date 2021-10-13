<?php
include "include/config.php";
$get_admin = "select * from settings";
$run_admin = mysqli_query($connect,$get_admin);
$row_admin = mysqli_fetch_array($run_admin);
$location = $row_admin['location2'];
$phone = $row_admin['phone'];
$email = $row_admin['email'];
$wallet = $row_admin['wallet'];
?>

<header class="header" id="site-header">
        <div class="container">
            <div class="header-content-wrapper">
                <a href="index.php" class="site-logo">
                    <img src="asset/images/logo.jpg" alt="Woox">
                </a>

                <nav id="primary-menu" class="primary-menu">

                    <!-- menu-icon-wrapper -->
                    <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
                        <span id="menu-icon-wrapper" class="menu-icon-wrapper">
                            <svg width="1000px" height="1000px">
                                <path id="pathD"
                                    d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800">
                                </path>
                                <path id="pathE" d="M 300 500 L 700 500"></path>
                                <path id="pathF"
                                    d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200">
                                </path>
                            </svg>
                        </span>
                    </a>
                    <ul class="primary-menu-menu">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About us</a>
                        </li>
                        <li><a href="faq.php">FAQs</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                        <li>
                            <a href="login.php">Login</a>
                        </li>
                        <li>
                            <a href="register.php">Register</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>