<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Meisya</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="{{ asset('images/loco.ico') }}" type="image/x-icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">



  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="{{ Storage::url($contact->foto) }}" alt="Meisya Alifia Wahyuni" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Meisya Alifia Wahyuni">
            @if ($contact)
              <p>{{ $contact->nama }}</p> <!-- Gantikan 'kolom_deskripsi' dengan nama kolom yang sesuai dari tabel homes -->
          @else
              <p>Data tidak ditemukan.</p>
          @endif
        </h1>

          <p class="title">{{ $contact->title}}</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:{{ $contact->email }}" target="_blank" class="contact-link">{{ $contact->email}}</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="https://wa.me/{{$contact->phone}}" target="_blank" class="contact-link">+{{ $contact->phone}}</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="2003-05-01">{{ $contact->tgl_lahir}}</time>
            </div>

          </li>

         
        </ul>

        <div class="separator"></div>

        <ul class="social-list">
          <li class="social-item">
            <a href="https://www.instagram.com/{{ $contact->ig}}/" target="_blank" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://github.com/{{ $contact->github}}" target="_blank" class="social-link">
              <i class="fab fa-github"></i>
            </a>
          </li>
          
        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Adress</button>
          </li>

          <li class="navbar-item">
              <button class="navbar-link" data-nav-link onclick="window.open('/admin', '_blank')">Login</button>

          </li>


        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
         <!-- <p>ini halaman detail dari tabel home id 1 </p> -->
         @if ($home)
            <p>{{ $home->detail }}</p> <!-- Gantikan 'kolom_deskripsi' dengan nama kolom yang sesuai dari tabel homes -->
        @else
            <p>Data tidak ditemukan.</p>
        @endif
        </section>


        <!--
          - service
        -->

        <section class="service">
          <h3 class="h3 service-title">What i'm doing</h3>
          <ul class="service-list">

        <!--Perulangan 1 -->
        @foreach ($works as $work)
            <li class="service-item">

              <div class="service-icon-box">
                <img src="{{ Storage::url($work->foto) }}" alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">{{ $work->nama }}</h4>

                <p class="service-item-text">{{ $work->keterangan }}
                </p>
              </div>
            </li>
            @endforeach
            <!--Pnutup perulangan 1 -->

         </ul>

        </section>


<!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
               <img src="{{ asset('images/avatar-1.png') }}" alt="Daniel Lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>


          </section>

        </div>

      </article>

      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">
            
            @foreach ($educations as $education)
            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">{{ $education->school_name }}</h4>

              <span>{{ $education->year }}</span>
            </li>
            @endforeach

          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            @foreach ($skills as $skill)
            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">{{ $skill->nama }}</h5>
                <data value="{{ $skill->persen }}">{{ $skill->persen }}%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: {{ $skill->persen }}%;"></div>
              </div>

            </li>
            @endforeach

          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">My Project</h2>
        </header>

        <section class="projects">

          <div class="filter-select-box">

            <button data-select>            

            </button>

          </div>



        <!-- Perulangan untuk Project -->
        <ul class="project-list">
            @foreach ($projects as $project)
                <li class="project-item active" data-filter-item data-category="web development">
                    <a href="#">
                        <figure class="project-img">
                            <div class="project-item-icon-box"> 
                            </div>
                            <img src="{{ Storage::url($project->foto) }}" alt="{{ $project->nama }}" loading="lazy">
                        </figure>
                        <h3 class="project-title">{{ $project->nama }}</h3>
                        <p class="project-category">{{ $project->keterangan }}</p>
                    </a>
                </li>
            @endforeach
        </ul>



        </section>

      </article>



      <!--
        - #ADRESS
      -->

      <article class="Address" data-page="adress">

        <header>
          <h2 class="h2 article-title">My Adress</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
            <iframe
              src="{{$address->address}}" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
              width="400" height="300" loading="lazy"></iframe>
          </figure>
        </section>
      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="{{ asset('js/script.js') }}"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>