<?php 

if(isset($_SESSION['email']) == true){header("location:login.php");}
require_once "init.php";
//var_dump($_SESSION['user']);
?>

<nav class="nav-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="brand col-6">
                <div class="row">
                    <span class="logo col-1"><a href="#">
                            <i class="fab fa-accusoft"></i>
                    </a></span>
                    <span class="name col-11">
                        <span class="fir">MA</span>
                        <span class="sec">ZAD</span>
<?php//echo $_SESSION['email']?>
                    </span>
                </div>
            </div>

            <div class="availble-bounce col-3">
                <div>   
                    <span class="bold">
                        Available Balance:
                    </span>
                    <span class="balance">
                        <span>5.00</span>
                        <span>stx<i class="fa fa-dolar"></i></span>
                        <i class="fa fa-angle-down sz"></i>
                    </span>
                </div>
            </div>

            <div class="newSession col-1">
                <div class="cir">
                    <i class="far fa-user-circle"></i>
                </div>
            </div>
            <div class="col-2">
                <div class="info row">
                    <span class="name col-9">
                        <?php echo $_SESSION['firstName'];?>
                        <i class="fa fa-angle-down blur"></i>
                    </span>
                    <span class="cir col-3">
                        <img src="" alt="">
                        <i class="far fa-user-circle sep"></i>
                    </span>
                
                </div>
            </div>
        </div>
    </div>
</nav>

<aside class="left-side">
    <div class="content">
        <ul>
            <?php
            if($_SESSION['userRole'] == 1){
                echo '<li class="active"><i class="fab fa-buromobelexperte"></i><span>Admin panel</span></li>';
            }?>
            <li>
                <i class="far fa-user-circle"></i>
                <span>Account</span>
            </li>
            <li>
                <i class="fas fa-assistive-listening-systems"></i>
                <span>Following</span>
            </li>
            <li>
                <i class="fas fa-paint-brush"></i>
                <span>Theme</span>
            </li>
            <li>
                <i class="fas fa-cog"></i>
                <span>Settings</span>
            </li>
            <li>
                <i class="fa fa-user"></i>
                <span>
                    <a href="logout.php">
                        log out
                    </a>
                </span>
            </li>
        </ul>
    </div>
</aside>
<?php require_once "footer.php";?>