<h3 class="side-title"> Industries </h3>

<div class="contact-list my-2 ml-1">
    <?php
    $query = $con->query("select * from `industry`");
    if ($query->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            ?>
            <a href="industry_blog.php?id=<?php echo $row['id'];?>">
                <div class="contact-avatar">
                    <img src="<?php echo $row['image'];?>" alt="">
                </div>
                <div class="contact-username"><?php echo $row['industry'];?></div>
            </a>
            <?php
        }
    }
    ?>
</div>

<div class="footer-links">
    <a href="privacy_policy.php">Privacy Policy</a>
    <a href="terms&conditions.php">Terms & Conditions </a>
</div>