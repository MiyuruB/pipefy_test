
<?php include("path.php");?>
<?php include (ROOT_PATH . "/app/controllers/posts.php");


if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" media="all" href="assets/css/style.css" />
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/png" />
    <title>Pipefy</title>
  </head>
  <body>

    <!-- Header -->
    <?php include (ROOT_PATH . "/app/includes/header.php");?>
   
    <!-- Cards -->

    <div class="content_body">
      <div class="container-sm mt-4" style="max-width: 900px; ">
        <div class="card article_1 mb-5 ">
          <div class="just_article">
            <div class="article_body">
              <div class="article_head">
              <div class="article_headline">
                <h1 class="t__h1"><?php echo $post['title'];?></h1>
              </div>
              <div class="article_sub">
                <?php echo $post['sub_title'];?>
              </div>
              <div class="avatar_art">
                <div class="avatar_photo_h">
                  <img src="https://static.intercomassets.com/avatars/3745585/square_128/slack-1584540425.jpeg?1584540425" alt="Isabela Saciotti avatar" class="avatar__image">
                </div>
                <div class="avatar__info">
                  <div>
                    Written by <span class='c__darker'> Isabela Saciotti</span>
                    <br> Updated over a week ago
                    </div>
                </div>
              </div>
            </div>
            <div class="article_txt">
              
              <?php echo html_entity_decode($post['body']);?>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      <!-- Footer -->
      <?php include (ROOT_PATH . "/app/includes/footer.php");?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
    ></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
