
@extends('layout.main')

@section('container')


    {{-- @yield('container') --}}

  <section class="home" id="home">

      <div class="card bg-dark text-white border-0 rounded-lg ">            
        <img class="card-img" src="img/banner.png" alt="Responsive image">
        <div class="card-img-overlay d-flex align-items-center justify-content-center ">
          <div class="card-title blackie">
            <div class="fullstack">
              <img src="img/mortarboard.png" alt="">
              Fullstack Developer
            </div>
            <div class="iniparagraf" >
              <h1>Hello! I am a Computer Science student at Bina Nusantara University.</h1>
              <p class="cuy">I'm Kanz Abdillah Hamada from Indonesia, an undergraduate student specializing in Fullstack Developer. </p>
            </div>  
            <a href="https://www.linkedin.com/in/kanz-abdillah-hamada-7375a1218/" class="text-decoration-none" style="color: inherit; cursor: pointer">
            <div class="linkedIn">
              <img src="img/linkedin.png" alt="" >
              LinkedIn
            </div>
            </a>
            
          <a href="https://github.com/kanzhamada" class="text-decoration-none" style="color: inherit; cursor: pointer">
            <div class="github">
              <img src="img/github.png" alt="" style="height:27px; width: 27px; margin-right: 7px">
              GitHub
            </div>
          </a>
            <div class="foto1">
              <img src="img/foto1.png" alt="Fotoku" style="max-height: 369px; max-width: 369px;">
            </div>
            
          </div>
            
        
            
        </div>
    </div>

  </section>
  <section class="project" id="project">

    <div class="collegeprojecct">
      <img src="img/star.png" alt="" style="position: absolute; z-index: 0;">
      <h1 style="z-index: 1">College Project</h1>
      
    </div>
    <div class="collegeprojecct" style="margin-top: -2px;">
     
        <img src="img/line.png" alt="" style="margin-right: 7px; width: 15%; margin-top: -1%; z-index: 1">
        <p style="z-index: 1"> All College Project from 1st Semester   </p>
          <img src="img/line.png" alt="" style="margin-left: 7px; width: 15%; margin-top: -1%; z-index: 1">    
          
    </div>
    <br class="mt-4">
    
   <div class="container" style="display: flex; padding: 0; align-items: center; align-content: center; justify-content: center">
    
      <div class="row mb-4">
        

        


            @foreach ($projects as $project)
            <div class="col-md-6 mb-4">
              <div class="card mb-4 border-0 pl-0" style="width: 33rem; background-color: #1C1818">
                <img class="card-img-top" src="img/{{ $project->image }}" alt="Card image cap" style="border-top-left-radius: 32px; border-top-right-radius: 32px; height: 89%">
                <div class="card-body text-white" style="padding-bottom:50px; background-color: #202020; border-bottom-left-radius: 32px; border-bottom-right-radius: 32px;" >
                 
                  <a style="color: inherit" class="text-decoration-none" href="{{ $project->url }}">
                  <h5 class="card-title">{{ $project->title }}
  
                     
                  </h5>
                </a>
              
                  <p class="card-text">{{ $project->description }}</p>
                  @auth
                  <form action="{{ route('destroy', $project->id) }}" method="POST">
                  <p><a href="{{ route('edit', $project->id) }}" class="btn btn-primary">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="confirmDelete('{{ $project->id }}', '{{ $project->title }}')">Delete</button>
                    
                </p>
                </form>
                @endauth
                </div>
              </div>
              </div>
            @endforeach

            <script>
              function confirmDelete(projectId, projectName) {
                  if (confirm("Are you sure you want to delete this project: '" + projectName + "'?")) {
                      document.getElementById('delete-form-' + projectId).submit();
                  }
              }
          </script>
          
        </div>

      </div>

      @auth
      <div class="container" style="display: flex; padding: 0; align-items: center; align-content: center; justify-content: center">
      <a href="/create" class="btn btn-success">Create new Project</a>
    </div>
    @endauth

    @if ($message = Session::get('success'))
          <script>alert("{{ $message }}")</script>
      @endif


    </section>
    <section class="about" id="about">
      
      <div class="whoiam">
        <img src="img/star.png" alt="" style="position: absolute; z-index: 0;">
        <h1 style="z-index: 1">Get to Know About Me</h1>
        
      </div>
      <div class="whoiam" style="margin-top: -2px">
       
          <img src="img/line.png" alt="" style="margin-right: 7px; width: 15%; margin-top: -1%; z-index: 1">
          <p style="z-index: 1"> Who I Am?   </p>
            <img src="img/line.png" alt="" style="margin-left: 7px; width: 15%; margin-top: -1%; z-index: 1">    
     
      </div>
      <br class="mt-4">

        <main class="about-me">
          <article class="card education">
            Education
            <div class="content-education">
            <article class="tahun-smk" style="color: #727171">
              2018 - 2021
            </article>
            <article class="smk">
              SMK Negeri 8 Malang
            </article>
            <article class="tahun-kuliah" style="color: #727171">
              2022 - Current
            </article>
            <article class="kulaih">
              Bina Nusantara University
            </article>
            </div>
          </article>
          <article class="card me">
            <div class="content-me">

              {{-- <article>
              <div class="bubble1" >
                <p style="padding-left: 10%; font-size: 13px;">Hello! 👋</p>
              </div>
            </article>
            <article>
              <div class="bubble2">
                <p style="padding-left: 3%;font-size: 13px;">My name is Kanz Abdillah Hamada</p>
              </div>
            </article>
            <article>
              <div class="bubble3">
                <p style="padding-left: 3%;font-size: 13px;">But you can call me Kanz 🤗</p>
              </div>
            </article> --}}

            <article><p >Hello! 👋, you can caught me on Insta </p>
              <a href="https://www.instagram.com/kanzhamada/">
              <img src="img/instagram.png" alt="">
            </a>
            </article>
              
              

            </div>
          </article>
          <article class="card skills">
            Skills
            <div class="content-skills">
              <article>
                <img src="img/c.png" alt="">
              </article>
              <article>
                <img src="img/csharp.png" alt="">
              </article>
              <article>
                <img src="img/unity.png" alt="">
              </article>
              <article>
                <img src="img/java.png" alt="">
              </article>
              <article>
                <img src="img/figma.png" alt="">
              </article>
              <article>
                <img src="img/photoshop.png" alt="">
              </article>
              <article>
                <img src="img/php.png" alt="">
              </article>
              <article>
                <img src="img/mySQL.png" alt="">
              </article>
              </div>
          </article>
          <article class="card experience">
            Experience
            <div class="content-education">
              <article class="tahun-smk" style="color: #727171">
                2019 - 2019
              </article>
              <article class="smk">
                Wordpress Developer
                <p style="font-size: 13px; color: #727171">CV Agrindo Cipta Mandiri - situsMESIN · Internship</p>
              </article>
              <article class="tahun-kuliah" style="color: #727171">
                2024 - 2024
              </article>
              <article class="kulaih">
                Lab. Teaching Assistant
                <p style="font-size: 13px; color: #727171">BINUS University · Part-time (Data Structure & Human Computer Interaction)</p>
              </article>
              </div>
          </article>
          <article class="card achievement">
            Achievement
            <div class="content-achievement">
              <article>
                <img src="img/author.png" alt="">
              </article>
              <article>
                Author of an International Conference
                <p >
                  <li style="font-size: 13px; color: #727171">
                    <a href="https://www.sciencedirect.com/science/article/pii/S1877050923017489" class="text-decoration-none" style="color: inherit;">
                    Preserving Indonesian Culture in the Digital Age: Implementing Augmented Reality to Address Cultural Appropriation Issue
                  </a>
                  </li>
                  <li style="font-size: 13px; color: #727171">
                    <a href="https://www.linkedin.com/in/kanz-abdillah-hamada-7375a1218/overlay/1704869877494/single-media-viewer/" class="text-decoration-none" style="color: inherit;">
                    Refining Interface of the Indonesian Ministry of Health's Website Based on User Experience Questionnaire (UEQ)
                  </a>
                  </li>
                </p>
              </article>
              <article>
                <img src="img/cysec.png" alt="">
              </article>
              <article>
                School of Cyber Security
                <p >
                  <li style="font-size: 13px; color: #727171">
                    <a href="https://www.linkedin.com/in/kanz-abdillah-hamada-7375a1218/details/certifications/1704868771906/single-media-viewer/" class="text-decoration-none" style="color: inherit;">
                    CERTIFICATE OF COMPLETION - SEKOLAH HACKER
                  </a>
                  </li>
                </p>
              </article>
              </div>
          </article>


          <article class="card happiness">

            <div style="background-color: rgba(0, 0, 0, 0.7); z-index: 9;" class="rounded-lg card-img-overlay d-flex flex-column justify-content-center align-items-center">
              <p style="font-size: 18px">My source of happiness and depression🥰💀</p>
            </div>
            


            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000"> <!-- Add data-interval="2000" for a 2-second interval -->
             
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img class="d-block w-100" src="img/slide1.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                      <img class="d-block w-100" src="img/slide2.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                      <img class="d-block w-100" src="img/slide3.png" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/slide4.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slide5.png" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/slide6.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                  <img class="d-block w-100" src="img/slide7.png" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/slide8.png" alt="Second slide">
            </div>
              </div>
          </div>



          </article>

          <article class="card music">
            My Bangers
            <div class="content-music">
              <article>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/0ltPExUPGPIKhTEBQfnoE4?utm_source=generator&theme=0" width="100%" height="169" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                </article>
              <article>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5KI7I4mEtulXcv5VQJaV35?utm_source=generator&theme=0" width="100%" height="169" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
              </article>
              <article>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2O99aywAVBhaPrsiJ6zbSS?utm_source=generator&theme=0" width="100%" height="169" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
              </article>
              </div>
          </article>

        </main>

      </section>


   


@endsection