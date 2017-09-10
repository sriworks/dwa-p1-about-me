<?php require('lib/random-quote-gen.php'); ?>
<?php require('model/user-profile.php'); ?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12 m4 flow-text">
                <div class="card-panel white lighten-5 z-depth-0 medium">
                    <div class="card-image">
                       <img src="assets/images/profile-pic.jpg" alt="Profile Picture" class="circle responsive-img">
                    </div>
                    <div class="card-content center">
                      <h5 class="card-title"><?= $user_profile['name'] ?></h5>
                      <p><?= $user_profile['title'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col s12 m8">
                <section>
                    <h4>About Me</h4>
                    <p class="flow-text"><?= $user_profile['about_me'] ?></p>
                </section>
                <section>
                    <h4>Interests</h4>
                    <p class="flow-text">#Technology, #Cricket, #Kids</p>
                </section>
                        <section>
            <h4>Random Wisdom</h4>
            <div class="card-panel grey lighten-5 z-depth-0">
              <blockquote class="flow-text">"<?php echo $random_quote['quote']; ?>"
              <br/>
              <cite><b>-<?= $random_quote['credits'] ?></b></cite>
              </blockquote>
          </span>
        </div>
            
        </section>
            </div>
        </div>

    </div>
</body>
