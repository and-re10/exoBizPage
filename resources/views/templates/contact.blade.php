<!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">
  
          <div class="section-header">
            <h3>Contact Us</h3>
            @if (count($contacts1) !== 0)
              <p>{{$contacts1[0]->description}}</p>
            @else
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            @endif
          </div>
  
          <div class="row contact-info">
            
            @if (count($contacts2) !== 0)
                @foreach ($contacts2 as $contact2)
                  <div class="col-md-4">
                    <div class="contact-address">
                      <i class="{{$contact2->icon_address}}"></i>
                      <h3>{{$contact2->titre_address}}</h3>
                      <address>{{$contact2->address}}</address>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="contact-phone">
                      <i class="{{$contact2->icon_phone}}"></i>
                      <h3>{{$contact2->titre_phone}}</h3>
                      <p><a href="tel:+155895548855">{{$contact2->phone}}</a></p>
                    </div>
                  </div>
        
                  <div class="col-md-4">
                    <div class="contact-email">
                      <i class="{{$contact2->icon_email}}"></i>
                      <h3>{{$contact2->titre_email}}</h3>
                      <p><a href="mailto:info@example.com">{{$contact2->email}}</a></p>
                    </div>
                  </div>
                @endforeach
            @else
              <div class="col-md-4">
                <div class="contact-address">
                  <i class="ion-ios-location-outline"></i>
                  <h3>Address</h3>
                  <address>A108 Adam Street, NY 535022, USA</address>
                </div>
              </div>
    
              <div class="col-md-4">
                <div class="contact-phone">
                  <i class="ion-ios-telephone-outline"></i>
                  <h3>Phone Number</h3>
                  <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                </div>
              </div>
    
              <div class="col-md-4">
                <div class="contact-email">
                  <i class="ion-ios-email-outline"></i>
                  <h3>Email</h3>
                  <p><a href="mailto:info@example.com">info@example.com</a></p>
                </div>
              </div>
            @endif
  
          </div>
  
          <div class="form">
            {{-- <div id="sendmessage">Your message has been sent. Thank you!</div> --}}
            {{-- <div id="errormessage"></div> --}}
            <form action="{{route('contact3.store')}}" method="post" role="form" class="contactForm" enctype="multipart/form-data">
              @csrf

              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
  
        </div>
      </section><!-- #contact -->
  
    </main>