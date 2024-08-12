<?php
    $currentPage = basename($_SERVER['SCRIPT_NAME']);
?>

<link rel="stylesheet" href="/css/hed.css">

<div class="navbar">
    <span class="hamburger" onclick="toggleMenu()">&#9776;</span>
    <a href="home.php"><img src="/images/logo.png" alt="Hilltel Network Logo"></a>
    <div class="nav-links">
        <a href="/home.php" class="<?= ($currentPage == 'home.php') ? 'active' : '' ?>">Home</a>
        <a href="/index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">About us</a>
        <a href="/enterprise.php" class="<?= ($currentPage == 'enterprise.php') ? 'active' : '' ?>">Enterprise Plans</a>
        <a href="/services.php" class="<?= ($currentPage == 'services.php') ? 'active' : '' ?>">Our Services</a>
        <a href="/career.php" class="<?= ($currentPage == 'career.php') ? 'active' : '' ?>">Career</a>
        <a href="/contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Contact Us</a>
    </div>
</div>
<div id="sideMenu" class="side-menu">
    <a href="javascript:void(0)" class="closebtn" onclick="toggleMenu()">&times;</a>
    <a href="/home.php" class="<?= ($currentPage == 'home.php') ? 'active' : '' ?>">Home</a>
    <a href="/index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">About us</a>
    <a href="/enterprise.php" class="<?= ($currentPage == 'enterprise.php') ? 'active' : '' ?>"> Enterprise Plans</a>
    <a href="/services.php" class="<?= ($currentPage == 'services.php') ? 'active' : '' ?>"> Our Services</a>
    <a href="/career.php" class="<?= ($currentPage == 'career.php') ? 'active' : '' ?>">Career</a>
    <a href="/contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Contact Us</a>
</div>

<script>
function toggleMenu() {
    var sideMenu = document.getElementById('sideMenu');
    if (sideMenu.style.width === '250px') {
        sideMenu.style.width = '0';
    } else {
        sideMenu.style.width = '250px';
    }
}
</script>