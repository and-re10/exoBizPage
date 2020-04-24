<!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
        <div class="container">
          <div class="row">
            @if (count($services1) !== 0)
              @foreach ($services1 as $service1)
                <div class="col-lg-4 box @if($loop->index === 1) box-bg @endif">
                  <i class="{{$service1->icon}}"></i>
                  <h4 class="title"><a href="">{{$service1->titre}}</a></h4>
                  <p class="description">{{$service1->description}}</p>
                </div>
              @endforeach
            @else
              <div class="col-lg-4 box">
                <i class="ion-ios-bookmarks-outline"></i>
                <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              </div>
    
              <div class="col-lg-4 box box-bg">
                <i class="ion-ios-stopwatch-outline"></i>
                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
              </div>
    
              <div class="col-lg-4 box">
                <i class="ion-ios-heart-outline"></i>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
              </div>
            @endif
  
          </div>
        </div>
      </section><!-- #featured-services -->