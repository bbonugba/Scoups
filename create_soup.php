<?php include ('Templates/connect.php')?>
<?php include ('Templates/header.php')?>

<?php 
$soup_name = " ";
$region = " ";
$ingredients = " ";
$preparation = " ";
$author = " ";

if(isset($_POST['submit'])){
    $soup_name = $_POST['soup_name'];
    $region = $_POST['region'];
    $ingredients = $_POST['ingredients'];
    $preparation = $_POST['preparation'];
    $author = $_POST['author'];

    $create_query = "INSERT INTO `soups_tb`(`soup_name`, `region`, `ingredients`, `preparation`, `author`) VALUES ('$soup_name','$region','$ingredients','$preparation','$author')";

    $send_query = mysqli_query($connection,$create_query);

    if($send_query){
        header('Location:index.php');
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <h4 class="grey-text text-darken-4">Create New Soup</h4>
            <form action="create_soup.php" method="post">
                <div class="row">
                    <div class="col s12 l6 input-field">
                        <input type="text" name="soup_name" id="soup_name">
                        <label for="soup_name">Soup Name</label>
                    </div>
                    <div class="col s12 l6 input-field">
                        <input type="text" name="author" id="author">
                        <label for="author">Author</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s8 input-field">
                        <input type="text" name="ingredients" id="ingredients">
                        <label for="ingredients">Ingredients</label>          
                    </div>
                    <div class="col s4 input-field">
                        <input type="text" name="region" id="region">
                        <label for="region">Region</label>          
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 input-field">
                        <input type="text" name="preparation" id="preparation">
                        <label for="preparation">Preparation</label>
                    </div>
                    <div class="center-align">
                        <input type="submit" value="Submit" name="submit" class="btn btn-large">
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>

<?php include ('Templates/footer.php')?>