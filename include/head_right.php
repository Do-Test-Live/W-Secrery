<div class="right_side">

    <div class="header_widgets">

        <a href="en/index.php" class="is_icon" title="" aria-expanded="false">EN
        </a>

        <a href="all_salary.php" class="is_icon" uk-tooltip="title: 觀看所有薪金資訊" title="" aria-expanded="false">
            <img src="assets/images/icons/salary-1.png" style="width: 25px;">
        </a>
        <a href="index.php" class="is_icon" uk-tooltip="title: Public" title="" aria-expanded="false">
            <img src="assets/images/icons/post-1.png" style="width: 25px;">
        </a>
        <a href="companies.php" class="is_icon" uk-tooltip="title: Company" title="" aria-expanded="false">
            <img src="assets/images/icons/company.png" style="width: 25px;">
        </a>

        <?php
        if (isset($_SESSION["email"])) {
            $email = $_SESSION["email"];
            $query = $con->query("select `f_name`, `l_name`,`image`,`c_domain_id` from `user` where `email` = '$email'");
            if ($query->num_rows == 1) {
                while ($row = mysqli_fetch_assoc($query)) {
                    $fname = $row['f_name'];
                    $lname = $row['l_name'];
                    $image = $row['image'];
                    $c_domain_id = $row['c_domain_id'];
                }
            }
            ?>

            <?php
            if ($c_domain_id != 0) {
                ?>
                <a href="add_post_channel.php" class="is_icon" uk-tooltip="title: Add Post to Company Channel" title=""
                   aria-expanded="false">
                    <img src="assets/images/icons/post-2.png" style="width: 25px;">
                </a>
                <?php
            }
            ?>
            <?php
            if ($c_domain_id != 0) {
                ?>
                <a href="add_post.php" class="is_icon" uk-tooltip="title: Add Post" title="" aria-expanded="false">
                    <img src="assets/images/icons/post-3.png" style="width: 25px;  margin-right: 10px;">
                </a>
                <?php
            } else {
                ?>
                <a href="#" onclick="alertCompany();" class="is_icon" uk-tooltip="title: Add Post" title=""
                   aria-expanded="false">
                    <img src="assets/images/icons/post-3.png" style="width: 25px;  margin-right: 10px;">
                </a>
                <?php
            }
            ?>
            <a href="#">
                <img src="assets/images/user/<?php echo $image; ?>" class="is_avatar" alt="">
            </a>
            <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">

                <a href="#" class="user">
                    <div class="user_avatar">
                        <img src="assets/images/user/<?php echo $image; ?>" alt="">
                    </div>
                    <div class="user_name">
                        <div> <?php echo $fname ?><?php echo $lname ?></div>
                        <span>@<?php echo $lname ?></span>
                    </div>
                </a>
                <hr>
                <a href="profile.php">
                    <img src="assets/images/icons/history.png" style="width: 25px;  margin-right: 10px;">
                    Post History
                </a>
                <a href="salary.php">
                    <img src="assets/images/icons/salary-2.png" style="width: 25px;  margin-right: 10px;">
                    Add Salary Details
                </a>
                <a href="edit_profile.php">
                    <img src="assets/images/icons/user-group.png" style="width: 25px;  margin-right: 10px;">
                    Profile
                </a>

                <a href="logout.php">
                    <img src="assets/images/icons/logout.png" style="width: 25px; margin-right: 10px;">
                    Log Out
                </a>


            </div>

            <?php

        } else {
            ?>
            <a href="#">
                <img src="assets/images/avatars/images.png" class="is_avatar" alt="">
            </a>
            <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">
                <a href="login.php">
                    <img src="assets/images/icons/login.png" style="width: 25px;  margin-right: 10px;">
                    Sign In
                </a>


            </div>
            <?php
        }
        ?>

    </div>

</div>