<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Category - Laptop Selling Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fyq8W9+BX9PHyfoisD6c6c/rmBab/mQaQ5tIp" crossorigin="anonymous">
  <title>Add Category | Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            padding: 20px;
        }
        h1 {
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        th,
        td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }

         .container {
      margin-top: 50px;
    }
    .form-control-label {
      font-weight: bold;
    }
    .btn-primary {
      margin-top: 20px;
    }
    </style>
</head>
<body>

<div class="container">
    <h1>Add Category</h1>
    <form action="connect2.php" method="POST">
      <div class="form-group">
        <label for="categoryName" class="form-control-label">Category Name:</label>
        <input type="text" class="form-control" name="categoryName" id="categoryName" placeholder="Enter category name" >
      </div>
      <div class="form-group">
        <label for="categoryDescription" class="form-control-label">Category Description:</label>
        <textarea class="form-control" name="categoryDescription" id="categoryDescription" rows="3" placeholder="Enter category description"></textarea>
      </div>
      <input type="hidden" value="casubmit" name="casubmit">
      <button type="submit" name="submit" class="btn btn-primary">Add Category</button>
    </form>
  </div>

    <div class="container">
        <h1>View Categories</h1>
       <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Dell Gaming</td>
                    <td>15-inch gaming laptop featuring an improved thermal design, next-gen AMD Ryzen™ processors and NVIDIA® GeForce RTX 3050 graphics ( TGP 90 W). Exceptional battery life. Versatile charging options. Advanced cooling.</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>ASUS-ROG</td>
                    <td>ROG was founded with the goal of creating the world’s most powerful and versatile gaming laptops in the industry. Our premium devices elevate gaming experiences with best-in-class displays, top tier graphics, and innovative cooling solutions that take performance to new heights.</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-primary">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Legion 5i Pro 11th Gen (16, Intel)</td>
                    <td>Engineered to deliver devastation in and out of the arena, the Legion 5i Pro (16, Intel) will help you secure the win.
It’s equipped with 11th Gen Intel® Core™ processors and NVIDIA® GeForce RTX™ 30 series graphics for high resolution gaming with the Legion AI Engine.
A breakthrough 16″ WQXGA gaming display provides a visual edge, while Nahimic 3D audio helps you strike with pinpoint precision.</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-primary">Delete</a>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
           <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        </body>
      </html>