<header id="header">
      <div class="header__top">
        <div class="container">
          <div class="header__top__logo">
            <h1><?php echo $config['title']; ?></h1>
          </div>
          <nav class="header__top__menu">
            <ul>
              <li><a href="/">Главная</a></li>
              <li><a href="/pages/about_me.php">Обо мне</a></li>
               <li><a href="/pages/login.php">Админка</a></li>
              <li><a href="<?php echo $config['insta_url'] ?>" target="_blank"> Мой инстаграм</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <?php $categories = mysqli_query($connection, "SELECT * FROM `articles_categories`");
       ?>
      <div class="header__bottom">
        <div class="container">
          <nav>
            <ul>
              <?php 
               while( $cat = mysqli_fetch_assoc($categories) )
               {
                ?>
                <li><a href="/categorie.php?categorie_id=<?php echo $cat['id']; ?>"><?php
                 echo $cat['title']; ?></a></li>
                <?php 
              }
            ?>
            </ul>
          </nav>
        </div>
      </div>
    </header>