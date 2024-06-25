<?php include ('Templates/connect.php')?>
<?php include ('Templates/header.php')?>

<?php 
$soup_id = $_GET['soup_id'];
// echo $soup_id;
$getsinglerow = "SELECT * FROM `soups_tb` WHERE `soup_id` = '$soup_id'";
$send_getsinglerow = mysqli_query($connection, $getsinglerow);
$soup = mysqli_fetch_assoc($send_getsinglerow);
// print_r($soup);

?>

<div class="container">
<table class="responsive-table">
        <thead>
          <tr>
              <th>
                <div class="center-align">
                    <img src="Images/fsr-placeholder.webp" alt="" class="responsive-img circle" width="15%">
                </div>
                <h1 class="grey-text text-darken-4"><?php echo $soup ['soup_name']; ?></h1>
              </th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
                <h6 class="grey-text text-darken-4">
                    <strong>Ingredients: </strong>
                    <?php echo $soup['ingredients']?>
                </h6>
            </td>
        </tr>
        <tr>
            <td>
                <h6 class="grey-text text-darken-4">
                    <strong>Preparation: </strong>
                    <?php echo $soup['preparation']?>
                </h6>
            </td> 
        </tr>
        <tr>
            <td>
                <h6 class="grey-text text-darken-4">
                    <strong>Author: </strong>
                    <?php echo $soup['author']?>
                </h6>
            </td>
          </tr>
        </tbody>
      </table>
            
</div>


<?php include ('Templates/footer.php')?>