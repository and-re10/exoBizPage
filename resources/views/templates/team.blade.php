<!--==========================
      Team Section
    ============================-->
    <section id="team">
        <div class="container">
          <div class="section-header wow fadeInUp">
            <h3>Team</h3>
            @if (count($teams1) !== 0)
              <p>{{$teams1[0]->description}}</p> 
            @else
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            @endif
            
          </div>
  
          <div class="row">
            @if (count($teams2) !== 0)
                @foreach ($teams2 as $team2)
                  <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <div class="member">
                      <img src="{{asset('storage/'.$team2->img_path)}}" class="img-fluid" alt="">
                      <div class="member-info">
                        <div class="member-info-content">
                          <h4>{{$team2->name}}</h4>
                          <span>{{$team2->job}}</span>
                          <div class="social">
                            <a href="{{$team2->url1}}"><i class="fa fa-twitter"></i></a>
                            <a href="{{$team2->url2}}"><i class="fa fa-facebook"></i></a>
                            <a href="{{$team2->url3}}"><i class="fa fa-google-plus"></i></a>
                            <a href="{{$team2->url4}}"><i class="fa fa-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
            @else
              <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="member">
                  <img src="img/team-1.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Walter White</h4>
                      <span>Chief Executive Officer</span>
                      <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="member">
                  <img src="img/team-2.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Sarah Jhonson</h4>
                      <span>Product Manager</span>
                      <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="member">
                  <img src="img/team-3.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>William Anderson</h4>
                      <span>CTO</span>
                      <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="member">
                  <img src="img/team-4.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Amanda Jepson</h4>
                      <span>Accountant</span>
                      <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endif
  
          </div>
  
        </div>
      </section><!-- #team -->