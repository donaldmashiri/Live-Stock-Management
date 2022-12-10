<li class="nav-item ">
    <a class="nav-link collapsed " href="index.php"><i class="fas fa-fw fa-user"></i>Profile   </a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="livestocks.php"><i class="fas fa-fw fa-ankh"></i>Livestocks </a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="add_livestock.php"><i class="fas fa-fw fa-fan"></i>Add Livestock </a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="search_livestock.php"><i class="fas fa-fw fa-search"></i>Search Livestock </a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="feed_formulation.php"><i class="fas fa-fw fa-forward"></i>Feed Formulation</a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="reports.php"><i class="fas fa-fw fa-retweet"></i> Reports </a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="index.php?logout='logout'"><i class="fas fa-fw fa-reply"></i>Logout </a>
</li>

<?php
if (isset($_GET['logout'])) {
    unset($_SESSION['user_id']);
    session_destroy();
    header("Refresh:1; ../login.php");
//    echo $_SESSION['user_id'];
}

?>