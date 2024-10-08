<?php
error_reporting(1);
session_start(); // Start session to check if user is logged in
?>

<!-- header section starts  -->

<header class="header">
    <a href="index.php" class="logo"> <i class="ri-menu-line"></i> Panna Parami </a>

    <form action="#" class="search-form">
        <input type="search" placeholder="search here..." id="search-box">
        <label for="search-box" class="ri-search-line"></label>
    </form>

    <div class="icons">
        <div id="search-btn" class="ri-search-line"></div>
        
        <?php if (isset($_SESSION['username'])): ?>
            <a href="logout.php" id="logout-btn" class="ri-logout-box-line"></a>
        <?php else: ?>
            <a href="login.php" id="login-btn" class="ri-user-line"></a>
        <?php endif; ?>
        
        <div id="menu-btn" class="ri-menu-line"></div>
    </div>
</header>

<!-- header section ends  -->
