<div>
    <div class="md:flex md:space-x-14">
        <div class="lg:mt-9 mt-5">

            <!-- course description -->
            <div class="space-y-5">
                <div>
                    <h3 class="font-semibold mb-2 text-xl"> Description </h3>
                    <p>
                        <?php echo $description; ?>
                    </p>
                </div>
                <div>
                    <h3 class="font-semibold mb-2 text-xl"> Income </h3>
                    <ul class="grid md:grid-cols-1">
                        <li><i class="uil-check text-xl font-bold mr-2"></i>
                            Company Establishment Year: <?php echo $experience; ?>
                        </li>
                        <li><i class="uil-check text-xl font-bold mr-2"></i>Monthly
                            Average Income: <?php echo $monthly_income; ?>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold text-xl mb-2"> Location of Company:</h3>
                    <ul class="list-disc ml-5">
                        <li><?php echo $location; ?></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold mb-2 text-xl"> Reasonable working
                        Hours: </h3>
                    <p> <?php echo $working_hour ?></p>
                </div>
                <div>
                    <h3 class="font-semibold mb-2 text-xl"> Reasonable working
                        Days: </h3>
                    <p> <?php echo $working_day ?></p>
                </div>

                <p>Do you fell any of the informations here need to change? <a href="mailto:official@secrery.nftprj.com" style="color: #5c5cef">Contact Us</a></p>
            </div>


        </div>
    </div>
</div>