<!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          @if (count($homes2) !== 0)
            @foreach ($homes2 as $home2)
              <div class="carousel-item @if($loop->index == 0) active @endif ">
                <div class="carousel-background"><img src="{{asset('storage/'.$home2->img_path)}}" alt=""></div>
                <div class="carousel-container">
                  <div class="carousel-content">
                    <h2>{{$home2->titre}}</h2>
                    <p>{{$home2->description}}</p>
                    <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
                  </div>
                </div>
              </div>
            @endforeach
          @else
            <div class="carousel-item active">
              <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2>We are professional</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2>At vero eos et accusamus</h2>
                  <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                  <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2>Temporibus autem quibusdam</h2>
                  <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                  <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2>Nam libero tempore</h2>
                  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                  <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2>Magnam aliquam quaerat</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
                </div>
              </div>
            </div>
          @endif

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">