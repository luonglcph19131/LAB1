<?php
    require "connect.php";
    $sql = "SELECT * FROM `categories` ";
    $result = mysqli_query($conn,$sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">image</th>
      <th scope="col">intro</th>
      <th scope="col">descreption</th>
      <th scope="col">number_date</th>
      <th scope="col">price</th>
      <th scope="col">category_id</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($result as $item){
    ?>
        <tr>
            <th scope="row"><?php echo $item['id']?></th>
            <th scope="row"><?php echo $item['name']?></th>
            <th scope="row"><?php echo $item['image']?></th>
            <th scope="row"><?php echo $item['intro']?></th>
            <th scope="row"><?php echo $item['descreption']?></th>
            <th scope="row"><?php echo $item['number_date']?></th>
            <th scope="row"><?php echo $item['price']?></th>
            <th scope="row"><?php echo $item['category_id']?></th>
            <th scope="row"><a href="update.php?id= <?php echo $item['id']?>">Sửa</a> | <a href="delete.php?id = <?php echo $item['id']?>">Xóa</a></th>
        </tr>
    <?php
        }
    ?>
    
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>