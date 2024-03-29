<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Document</title>
  </head>
  <style>
    html,
    body {
      margin: 0;
      height: 100vh;
      overflow-x: hidden;
    }
    .preload {
      height: 100%;
      width: 100%;
      background-color: red;
      z-index: 6;
      position: fixed;
      left: 0;
      top: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .preload.hidden {
      animation-name: slide;
      animation-duration: 2s;
      animation-fill-mode: forwards;
    }

    @keyframes slide {
      100% {
        opacity: 0;
        visibility: hidden;
        z-index: -1;
      }
    }
  </style>
  <body>
    <div class="preload" id="preload">
      <h1>Loading ...</h1>
      <img src="loading.gif" class="load" />
    </div>

    <div class="">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a
                class="nav-link disabled"
                href="#"
                tabindex="-1"
                aria-disabled="true"
                >Disabled</a
              >
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              Search
            </button>
          </form>
        </div>
      </nav>

      <div class="list_picture">
        <div class="card" style="width: 18rem;">
          <img
            src="https://picsum.photos/200/300?grayscale"
            class="card-img-top"
            alt="image1"
          />
          <div class="card-body">
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
              at fugit ipsam, eum non dolores.
            </p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img
            src="https://picsum.photos/200/300"
            class="card-img-top"
            alt="image2"
          />
          <div class="card-body">
            <p class="card-text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus,
              corporis.
            </p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img
            src="https://picsum.photos/200/300?random"
            class="card-img-top"
            alt="image3"
          />
          <div class="card-body">
            <p class="card-text">
              Some quick example text to build on the card title and make up the
              bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <div class="Video">
        <iframe
          width="560"
          height="315"
          src="http://www.youtube.com/embed/M7lc1UVf-VE?enablejsapi=1&origin=http://example.com"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
      <div class="Video">
        <video class="taille_video" controls>
          <source src="video.mp4" type="video/mp4" />
        </video>
      </div>
      <div class="cover">
        <h1 class="title">
          Titre
        </h1>
      </div>
      <img class="img" src="image1.jpg" />
      <img class="img" src="image2.jpg" />
      <img class="img" src="image4.jpg" />
      <div class="cover2">
        <h1 class="title">
          Lorem ipsum dolor sit amet.
        </h1>
      </div>

      <div class="footer">
        <i class="fab fa-apple"></i>
        <i class="fab fa-apple"></i>
        <i class="fab fa-apple"></i>
        <i class="fab fa-facebook"></i>
      </div>
    </div>

    <script type="text/javascript">
      window.addEventListener("load", function() {
        var preload = document.getElementById("preload");
        preload.className += " hidden";
      });
    </script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"
    ></script>
  </body>
</html>
