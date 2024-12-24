<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIMASYA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,900;1,100;1,400;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('welcome/reset.css')}}" />
    <link rel="stylesheet" href="{{ asset('welcome/style.css')}}" />
    <link rel="icon" href="{{ asset('images/logoWeb.png') }}">
  </head>
  <body>
    <header>
      <nav>
        <div class="nav-left">
          <a href="#">Home</a>
          <a href="#">About</a>
          <a href="#">Contact</a>
        </div>
        <div class="nav-right">
          <a href="{{ route('login')}}" class="btn login">Login</a>
          <a href="{{ route('register')}}" class="btn register">Register</a>
        </div>
      </nav>
    </header>

    <div class="slider">
      <div class="list">
        <!-- Item 1 -->
        <div class="item">
          <img src="{{ asset('welcome/img/1.jpg')}}" alt="Image 1" />
          <div class="detail">
            <div class="tittle">Bukit Serelo</div>
            <div class="name">Kabupaten lahat</div>
            <figure>
              <!-- <img src="img/avatar/1.jpg" alt="Avatar 1" /> -->
              <figcaption>Sumatera Selatan</figcaption>
            </figure>
            <div class="desc">
              Bukit Serelo adalah salah satu ikon Kabupaten Lahat, Sumatera
              Selatan, yang dikenal sebagai Bukit Jempol atau Bukit Telunjuk.
              Bukit ini terletak di Desa Perangai, Kecamatan Merapi Selatan,
              Kabupaten Lahat, dengan ketinggian sekitar 900 meter di atas
              permukaan laut.
            </div>
            <a href="#" class="more">More detail &raquo;</a>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="item">
          <img src="{{ asset('welcome/img/2.png')}}" alt="Image 2" />
          <div class="detail">
            <div class="tittle">Jembatan Ampera</div>
            <div class="name">Kota Palembang</div>
            <figure>
              <!-- <img src="img/avatar/2.jpg" alt="Avatar 2" /> -->
              <figcaption>Sumatera Selatan</figcaption>
            </figure>
            <div class="desc">
              Jembatan Ampera merupakan simbol perjuangan dan persatuan rakyat
              Palembang. Jembatan ini juga menjadi lambang sejarah dan
              kebanggaan bagi masyarakat Palembang.
            </div>
            <a href="#" class="more">More detail &raquo;</a>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="item">
          <img src="{{ asset('welcome/img/3.png')}}" alt="Image 3" />
          <div class="detail">
            <!-- <div class="tittle">-</div>
            <div class="name">-</div>
            <figure>
              <img src="img/avatar/3.jpg" alt="Avatar 3" />
              <figcaption>-</figcaption>
            </figure>
            <div class="desc">
              -
            </div> -->
            <!-- <a href="#" class="more">More detail &raquo;</a> -->
          </div>
        </div>

        <!-- Item 4 -->
        <div class="item">
          <img src="{{ asset('welcome/img/4.png')}}" alt="Image 4" />
          <div class="detail">
            <!-- <div class="tittle">-</div>
            <div class="name">-</div>
            <figure>
              <img src="img/avatar/4.jpg" alt="Avatar 4" />
              <figcaption>-</figcaption>
            </figure>
            <div class="desc">
              -
            </div> -->
            <!-- <a href="#" class="more">More detail &raquo;</a> -->
          </div>
        </div>

        <!-- Item 5 -->
        <div class="item">
          <img src="{{ asset('welcome/img/5.png')}}" alt="Image 5" />
          <div class="detail">
            <!-- <div class="tittle">-</div>
            <div class="name">-</div>
            <figure>
              <img src="img/avatar/5.jpg" alt="Avatar 5" />
              <figcaption>-</figcaption>
            </figure>
            <div class="desc">
              -
            </div> -->
            <!-- <a href="#" class="more">More detail &raquo;</a> -->
          </div>
        </div>
      </div>

      <div class="thumbnail">
        <!-- Thumbnail 1 -->
        <div class="item">
          <img src="{{ asset('welcome/img/thumb1.png')}}" alt="Thumbnail 1" />
          <div class="detail">
            <div class="name">Bukit Serelo</div>
            <blockquote>
              Kabupaten Lahat
            </blockquote>
          </div>
        </div>

        <!-- Thumbnail 2 -->
        <div class="item">
          <img src="{{ asset('welcome/img/thumb2.png')}}" alt="Thumbnail 2" />
          <div class="detail">
            <div class="name">Jembatan Ampera</div>
            <blockquote>
              Kota Palembang
            </blockquote>
          </div>
        </div>

        <!-- Thumbnail 3 -->
        <div class="item">
          <img src="{{ asset('welcome/img/thumb3.png')}}" alt="Thumbnail 3" />
          <div class="detail">
            <!-- <div class="name">-</div>
            <blockquote>-</blockquote> -->
          </div>
        </div>

        <!-- Thumbnail 4 -->
        <div class="item">
          <img src="{{ asset('welcome/img/thumb4.png')}}" alt="Thumbnail 4" />
          <div class="detail">
            <!-- <div class="name">-</div>
            <blockquote>-</blockquote> -->
          </div>
        </div>

        <!-- Thumbnail 5 -->
        <div class="item">
          <img src="{{ asset('welcome/img/thumb5.png')}}" alt="Thumbnail 5" />
          <div class="detail">
            <!-- <div class="name">-</div>
            <blockquote>
              -
            </blockquote> -->
          </div>
        </div>
      </div>

      <!-- Optional: Pagination Dots -->
      <div class="pagination">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>

      <div class="arrows">
        <button id="prev" aria-label="Previous Slide">&lt;</button>
        <button id="next" aria-label="Next Slide">&gt;</button>
      </div>

      <div class="loading-bar"></div>
    </div>

    <script src="{{ asset('welcome/script.js')}}"></script>
  </body>
</html>
