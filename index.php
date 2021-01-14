<?php
  include('./function_time.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MAQE Styling</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>

  </head>
  
  <body>

    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <h1>MAQE Forums</h1>
          <h2>Subtitle</h2>
          <h3>Post</h3>
        </div>
      </div>

      <?php foreach ($postDisplay as $obj_post) { ?>
      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3 image_post">
                    <img src="<?php echo $obj_post->image_url; ?>"
                    class="rounded mx-auto d-block" width="200" height="150">
                  </div>
                  <div class="col-md-7 text_post">
                      <p class="title"><?php echo $obj_post->title; ?></p>
                      <p class="body"><?php echo $obj_post->body; ?></p>
                      <p class="time_ago"><i class="far fa-clock"></i><?php echo set_time($obj_post->create_at); ?></p>
                  </div>
                  <div class="col-md-2 text-center">
                    <div class="image_author">
                      <img src="<?php echo $obj_post->avatar_url; ?>"
                      class="rounded-circle" width="100" height="100">
                    </div>
                    <div class="author">
                      <p class="name_author"><?php echo $obj_post->name; ?></p>
                      <p class="role_user"><?php echo $obj_post->role; ?></p>
                      <p class="place"><i class="fas fa-map-marker-alt"></i><?php echo $obj_post->place; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <?php } ?>

      <br>

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
  </body>
  </body>

</html>
