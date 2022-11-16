<?php
$query = $con->query("select * from `company_domain`");
if($query->num_rows > 0){
    while ($row = mysqli_fetch_assoc($query)){
        $review = ($row['salary'] + $row['hours'] + $row['promotion'] + $row['happiness']) / 4;
        ?>
        <li>
            <div class="card">
                <div class="card-media h-28">
                    <div class="card-media-overly"></div>
                    <img src="assets/images/company/<?php echo $row['image'];?>" alt="" class="">

                    <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-lg text-red-500 text-xs top-2.5 left-2.5">
                        Trend
                    </div>
                </div>
                <div class="card-body">
                    <a href="company_details.php?id=<?php echo $row['id'];?>" class="font-semibold text-lg truncate"><?php echo $row['company_name'];?></a>
                    <div class="flex items-center flex-wrap space-x-1 mt-1 text-sm text-gray-500 capitalize">
                        <a href="#"> <span><?php echo $row['employee'];?> members</span> </a>
                        <a href="#"> <span> <?php echo $review?>/10 </span> </a>
                    </div>

                    <div class="flex mt-3.5 space-x-2 text-sm font-medium">
                        <a href="company_details.php?id=<?php echo $row['id'];?>"
                           class="bg-gray-200 flex flex-1 h-8 items-center justify-center rounded-md capitalize">
                            View
                        </a>
                    </div>

                </div>
            </div>
        </li>
        <?php
    }
}
?>