<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap"
      rel="stylesheet"
    />
  </head>

  <body onmousedown="return false;" onclick="return true;">
    <main class="main">
      <?php get_header(); ?>
      <div class="description">
        <div class="block-icon">
          <img
            class="block-icon__item"
            src="/img/icons/html_icon.svg"
            alt="HTML"
          />
          <img
            class="block-icon__item"
            src="/img/icons/css_icon.svg"
            alt="CSS"
          />
          <img
            class="block-icon__item"
            src="/img/icons/git_icon.svg"
            alt="Git"
          />
          <img
            class="block-icon__item"
            src="/img/icons/docker_icon.svg"
            alt="Doker"
          />
          <img
            class="block-icon__item"
            src="/img/icons/ubuntu_icon.svg"
            alt="Ubuntu"
          />
          <img class="block-icon__item" src="/img/icons/php.svg" alt="php" />
          <img
            class="block-icon__item"
            src="/img/icons/postgresql_icon.svg"
            alt="PostgreSQL"
          />
          <img
            class="block-icon__item"
            src="/img/icons/sass_icon.svg"
            alt="Sass"
          />
          <img
            class="block-icon__item"
            src="/img/icons/laravel_icon.svg"
            alt="Laravel"
          />
        </div>
        <div class="block-icon-2">
          <img class="block-icon__item" src="/img/icons/js.svg" alt="JS" />
          <img
            class="block-icon__item"
            src="/img/icons/bootstrap_icon.svg"
            alt="bootstrap"
          />
          <img
            class="block-icon__item"
            src="/img/icons/trello_icon.svg"
            alt="Trello"
          />
          <img
            class="block-icon__item"
            src="/img/icons/nodejs_icon.svg"
            alt="nodejs"
          />
          <a
            class="logo-icon__link"
            href="https://github.com/DeluxWebSite"
            target="_blank"
          >
            <img
              class="block-icon__item"
              src="/img/Github_icon.svg"
              alt="Github"
            />
          </a>
          <img
            class="block-icon__item"
            src="/img/icons/mysql_icon.svg"
            alt="MySQL"
          />
          <img
            class="block-icon__item"
            src="/img/icons/gulp_icon.svg"
            alt="Gulp"
          />
          <img
            class="block-icon__item"
            src="/img/icons/webpack.svg"
            alt="Webpack"
          />
          <img
            class="block-icon__item"
            src="/img/icons/wordpress_icon.svg"
            alt="Wordpress"
          />
        </div>
      </div>

      <?php get_footer(); ?>
    </main>
    <?php wp_footer(); ?>
  </body>
</html>
