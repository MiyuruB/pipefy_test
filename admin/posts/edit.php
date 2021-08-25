<?php include ("../../path.php")?>
<?php include (ROOT_PATH . "/app/controllers/posts.php");?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      media="all"
      href="../../assets/css/dashboardcss.css"
    />

    <!-- admin css -->
    <title>Dashboard | Edit Post</title>
    <style>
      .hidden {
        display: none;
      }
    </style>
  </head>
  <body>
   <!-- Navbar -->
   <?php include(ROOT_PATH . '/app/includes/dashboardheader.php'); ?>


    <!-- adminpage wrapper -->

    <div class="admin-wrapper">
      <!-- left sidebar -->
      <?php include(ROOT_PATH . '/app/includes/sidebar.php'); ?>
      <!-- left-sidebar -->

      <!-- admincontent -->
      <div class="admin-content">
        <div class="button-group">
          
          <a href="index.php" class="btn btn-bg">Manage Post</a>
        </div>

        <div class="main-content">
          <h2 class="page-title mt-3">Edit Posts</h2>

          <?php include (ROOT_PATH . '/app/helpers/formErrors.php');?>

          <form action="create.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" id="" value = "<?php echo $id?>" />
          <div class="mt-3">
              <lable>Title</lable>
              <input type="text" name="title" id="" value = "<?php echo $title?>"class="text-input" />
            </div>
            <div class="mt-3">
              <lable>Sub - Title</lable>
              <input type="text" name="sub_title" id="" value = "<?php echo $sub_title?>"class="text-input" />
            </div>
            <div>
            <div>
              <lable class="mb-3">Body</lable>
              <textarea name="body" id="body" ><?php echo $body?></textarea>
            </div>
            <div>
              <label class="mb-3">Category</label>
              <select name="category_id" class="text-input">
                <option value=""></option>
                <?php foreach ($categories as $key => $category): ?>

                  <?php if (!empty($category_id) && $category_id == $category['id'] ):?> 
                    <option selected value="<?php echo $category['id']?> "><?php echo $category['name']?></option>
                    <?php else: ?>
                      <option value="<?php echo $category['id']?> "><?php echo $category['name']?></option>
                    <?php endif; ?>
                <?php endforeach;?>
              </select>
            </div>
            <div>
            <?php if (empty($published) && $published == 0): ?>
             <label>
             <input type="checkbox" name="published">
            Publish
            </label>
            <?php else: ?>
            <label>
            <input type="checkbox" name="published" checked>
            Publish
            </label>
            <?php endif; ?>
            </div>
            <div>
              <button type="submit" name="edit-button" class="btn btn-big">Edit Post</button>
            </div>
          </form>
        </div>
      </div>
      <!-- admincontent -->
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
    <!-- Custom Script -->
    <script src="../../assets/js/scripts.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
