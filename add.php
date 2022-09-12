<?php
    require "connect.php";
    $sql = "SELECT * FROM `tours`";
    $user = mysqli_query($conn,$sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<form method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id</label>
    <input type="text" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="formFile" class="form-label">image</label>
    <input type="file" class="form-control" name="image" id="formFile" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">intro</label>
    <input type="text" class="form-control" name="intro" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">descreption</label>
    <input type="text" class="form-control" name="descreption" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">number_date</label>
    <input type="text" class="form-control" name="number_date" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">price</label>
    <input type="text" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
      <label for="disabledSelect" class="form-label">category_id</label>
      <select id="disabledSelect" name="category_id" class="form-select">
        <option>----- Mời bạn chọn -----</option>
        <?php
            foreach($user as $item){
        ?>  <option value="<?php echo $item['category_id']?>"><?php echo $item['name']?></option>
        <?php
            }
        ?>
      </select>
    </div>
  <button type="submit" name="btn-submit"class="btn btn-primary">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>