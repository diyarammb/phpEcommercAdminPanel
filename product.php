<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
 
    </head>
    <body class="sb-nav-fixed">
        <?php
        include "includes/header.php";
        ?>
        <div id="layoutSidenav">
        <?php
        include "includes/sidebar.php";
        ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Add </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Add Question</li>
                    </ol>
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="card">
                                <div class="card-body bg-info">



<p class="p">
        
    </p>
 
 <form  id="add-product" class="form-data"   method="post" enctype="multipart/form-data">
    <input type="text" name="title" class="form-control" placeholder="Title"><br>
         <input type="text" name="body" class="form-control" placeholder="Description"><br>
                <input type="text" name="price" class="form-control" placeholder="Prices*">
                     <input type="file" id="sortpicture" name="prImage" placeholder="Image" class="form-control mt-4">
                            <input type="submit" value="Publish" class="btn btn-success">   
                                </form>

                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
<script src="js/lib.js"></script>
            <?php
        include "includes/scripts.php";
        ?>
    </body>
</html>
