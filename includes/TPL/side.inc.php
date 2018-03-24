<aside class="left-side">
    <div class="content">
        <ul>
            <?php 
                $masterUser = new user();
                if($masterUser->getRole() == 1){
                    echo '<li class="active" data-dir = "admin-panel" data-on="true">
                            <i class="fab fa-buromobelexperte"></i>
                            <span>Admin panel</span>
                        </li>';
                }
            ?>
            <li data-dir = "profile" data-on="true">
                <i class="far fa-user-circle"></i>
                <span>Account</span>
            </li>
            <li data-on="true">
                <i class="fas fa-assistive-listening-systems"></i>
                <span>Make Session</span>
            </li>
            <li class="chng" data-on="false">
                <i class="fas fa-paint-brush"></i>
                <span>Theme</span>
            </li>
            <li data-on="true">
                <i class="fas fa-cog"></i>
                <span>Settings</span>
            </li>
            <li data-on="true">
                <i class="fas fa-power-off"></i>
                <span>
                    <a href="logout.php">
                        log out
                    </a>
                </span>
            </li>
        </ul>
    </div>
</aside>
