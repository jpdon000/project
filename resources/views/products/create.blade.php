<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 <style>
  h1{
    text-align:center;
    margin-top:20px;
  }
  form{
    background-color:;
    margin-left:100px;
    margin-top:20px;
    padding-top:20px;
    margin-right:100px;
    align:center;
  }
.main{
  background-color:cyan;
  margin-left:300px;
 margin-right:300px;
}
 </style>


  </head>
<body>
<h1>Products</h1>
<div class="main rouded-pill">
<form action='{{route("products.store")}}' enctype="multipart/form-data" method='POST'>
@csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Price</label>
    <input type="text" name="price" class="form-control" id="" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input type="text" name="description" class="form-control" id="" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category</label>
    <input type="text" name="category" class="form-control" id="" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Quantity</label>
    <input type="text" name="quantity" class="form-control" id="" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Status</label>
    <input type="text" name="status" class="form-control" id="" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image</label>
    <input type="file" name="image" class="form-control" id="" aria-describedby="emailHelp">
  </div>

  <button type="submit" class="btn btn-primary mt-3 mb-3">Submit</button>
</form>
</div>
</body>
</html>