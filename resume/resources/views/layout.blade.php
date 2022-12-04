<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karthick</title>
    <meta name="description" content="Hi I am Karthickraja, welcome to visit my profile"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/css/aos.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/styles/main.css" rel="stylesheet">
  </head>
  @if (\Session::has('success'))
    <script type="text/javascript">
      alert("{!! \Session::get('success') !!}");
    </script>
  @endif
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">My Resume</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="{{route('index')}}">About</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="{{route('skill')}}">Skills</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="{{route('port')}}">Portfolio</a></li>
                <!--<li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a></li>-->
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg');"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="images/{{$data->file}}" alt="Image"/></a></div>
          <div class="h2 title">{{strtoupper($data->name)}}</div>
          <p class="category text-white">{{$data->job}}</p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Hire Me</a><a class="btn btn-primary" href="file/resume.pdf" data-aos="zoom-in" data-aos-anchor="data-aos-anchor" download>Download CV</a>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="{{$data->fb}}" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="{{$data->link}}" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-linkedin"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
@yield('content')
<div class="section" id="contact">
  <div class="cc-contact-information" style="background-image: url('images/1staticmap.png');">
    <div class="container">
      <div class="cc-contact">
        <div class="row">
          <div class="col-md-9">
            <div class="card mb-0" data-aos="zoom-in">
              <div class="h4 text-center title">Contact Me</div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
                    <form action="{{route('mail')}}" method="POST">
                      @csrf
                      <!-- <div class="p pb-3"><span style="color:red">Don't sent anything, I am not updated mail column<br>Call or direct mail for contact</span><br><strong>Feel free to contact me </strong></div> -->
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input class="form-control" type="text" name="name" placeholder="Name" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                            <input class="form-control" type="text" name="subject" placeholder="Subject" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" name="email" placeholder="Your E-mail Address " required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Your Message" required="required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <p class="mb-0"><strong>Address </strong></p>
                    <p class="pb-2">{{$data->address}}</p>
                    <p class="mb-0"><strong>Phone</strong></p>
                    <p class="pb-2">{{$data->ph}}</p>
                    <p class="mb-0"><strong>Email</strong></p>
                    <p>{{$data->email}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
    </div>
    <footer class="footer">
      <div class="container text-center"><a class="cc-facebook btn btn-link" href="{{$data->fb}}"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="{{$data->link}}"><i class="fa fa-linkedin fa-2x " aria-hidden="true"></i></a></div>
      <div class="h4 title text-center">{{strtoupper($data->name)}}</div>
      <div class="text-center text-muted">
        <p>&copy; All rights reserved.</p>
      </div>
    </footer>
    <script src="js/core/jquery.3.2.1.min.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/now-ui-kit.js?v=1.1.0"></script>
    <script src="js/aos.js"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>