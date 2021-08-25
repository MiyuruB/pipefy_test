<?php include ("../../path.php")?>
<?php include (ROOT_PATH . "/app/controllers/posts.php");?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../../assets/img/favicon.png" rel="shortcut icon" type="image/png" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" media="all" href="../../assets/css/dashboardcss.css" />

    <!-- admin css -->
    <title>Dashboard | Manage Posts</title>
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
     
    <?php include(ROOT_PATH . '/app/includes/sidebar.php'); ?>

      <!-- admincontent -->
      <div class="admin-content">
        <div class="button-group">
          <a href="create.php" class="btn btn-bg">Add Post</a>
        </div>

        <div class="main-content">
          <h2 class="page-title mt-3">Manage Posts</h2>

          <table>
            <thread>
              <th>No.</th>
              <th>Title</th>
              <th>Author</th>
              <th colspan="3">Action.</th>
            </thread>
            <tbody>
            <?php foreach ($posts as $key => $post): ?>
              <tr>
                <td><?php echo $key+1?></td>
                <td><?php echo $post['title']?></td>
                <td>Admin</td>
                <td><a href="edit.php?id=<?php echo $post['id']?>" class="edit">edit</a></td>
                <td><a href="index.php?delete_id=<?php echo $post['id'];?>" class="delete">delete</a></td>

                <?php if ($post['published']): ?>
                <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">unpublish</a></td>
                <?php else: ?>
                <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">publish</a></td>
                <?php endif; ?>
              </tr>
                <?php endforeach; ?>
            </tbody>
          </table>
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
