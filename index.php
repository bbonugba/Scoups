<?php include('Templates/connect.php')  ?>
<?php include('Templates/header.php')  ?>

<?php
$fetch_query = "SELECT * FROM `soups_tb`";
$send_fetch_query = mysqli_query($connection, $fetch_query);

$soups = mysqli_fetch_all($send_fetch_query, MYSQLI_ASSOC);
// print_r($soups);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Scoups!</title>
</head>
<body>
    <main>
        <section class="section">
            <div class="container">
                <h2 class="grey-text text-darken-2">Welcome to Scoups!</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias, reprehenderit corporis! Recusandae, magni sed vel magnam provident iusto quis laboriosam, esse, ratione fugiat consequuntur unde voluptate dolore temporibus voluptas molestias. Placeat vero officiis, perspiciatis mollitia, quae beatae, sed odit recusandae quasi vitae id. Ducimus, magnam consequatur nostrum quae reiciendis quas?</p>
                <div class="collection">
                    <?php  foreach ($soups as $soup) { ?>
                    <a href="soups_view.php?soup_id=<?php echo $soup['soup_id'] ?>" class="collection-item lime-text text-darken-4"><?php echo $soup ['soup_name']?> <br>
                    <span><em><?php echo $soup ['author'] ." ". $soup ['timestamp']?></em></span>
                    </a>
                   <?php } ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>



<?php include('Templates/footer.php')  ?>
