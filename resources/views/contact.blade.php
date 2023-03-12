@include('User.head')
@include('User.navbar')

<br>
<section id="contact" class="contact section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>It takes great pains to benefit. His needs result from something that actually drives him away. Let them be what they want. Anyone whom anyone desires. And no one who hinders receives the others. Because he should flee in this office of convenience, which is here.</p>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-4">
          <div class="contact-about">
            <h3>Rafat Alsaqqa</h3>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="info">
            <div class="d-flex align-items-center">
              <i class="bi bi-geo-alt"></i>
              <p>Jordan <br>Amman, JR 11118</p>
            </div>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-envelope"></i>
              <p>rafatsaqqa4@gmail.com</p>
            </div>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-phone"></i>
              <p>+962777396184</p>
            </div>

          </div>
        </div>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif

        <div class="col-lg-5 col-md-8">
          <form action="{{route('Cont')}}" method="post" role="form" class="php-email-form">
            @csrf
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
              @if ($errors->has('name'))
              <span class="text-danger">{{ $errors->first('name') }}</span>
          @endif
            </div>
            <div class="form-group mt-3">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
              @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" >
              @if ($errors->has('subject'))
              <span class="text-danger">{{ $errors->first('subject') }}</span>
          @endif
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" ></textarea>
              @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
            </div>
            <br>
           <div class="text-center"><button class="btn btn-primary" type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
  <br>
  @include('User.footer')
