@extends("layouts.landing")

@section("content")

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand page-scroll" href="#page-top"><img src="{{asset('latts/images/logo.png')}}" alt="Project Manager logo"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="hidden">
          <a href="#page-top"></a>
        </li>

        <li>
              <a  class="page-scroll" href="http://localhost:8000/login"> <i class="fa fa-sign-in"></i> <b>Login</b> </a>
        </li>
        <li>
              <a class="page-scroll" href="http://localhost:8000/register"> <i class="fa fa-user-plus"></i> <b>Register</b> </a>
        </li>

        <li>
              <a class="page-scroll" href="#portfolio">Portfolio</a>
        </li>
        <li>
              <a class="page-scroll" href="#ach">Presentation</a>
        </li>
        <li>
              <a class="page-scroll" href="#contact">Contact</a>
        </li>


      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>


<!-- Header -->
<header>
  <div class="container">
    <div class="slider-container">
      <div class="intro-text">
        <div class="intro-lead-in">Here to serve you in your many project endevours</div>
        <div class="intro-heading">Project Manager</div>
        <a href="#about" class="page-scroll btn btn-xl">Learn about Project Manager</a>
      </div>
    </div>
  </div>
</header>

<section id="about" class="light-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="section-title">
          <h2>ABOUT</h2>
          <p>
             The biggest problem has always been the synchronisation and flow or operations or task activities during development/coding process.
                  .Project Manager is a management system that can be used by individuals or software development firms to manage many projects that are undergoing development process at a go.
          </p>
          <p>Project Manager can be used to provide a synchronized means of handling the development process of a project by giving a medium of communication between developers, supervisors and the clients all through the stages of the development process. <br> <br>
            Below are some of the project that can be handled by the Project Manager: </p>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- about module -->
      <div class="col-md-3 text-center">
        <div class="mz-module-about">
          <i class="fa fa-briefcase ot-circle"></i>
          <h3>Web Development</h3>
          <p>Web apps and websites development</p>
        </div>
      </div>
      <!-- end about module -->
      <!-- about module -->
      <div class="col-md-3 text-center">
        <div class="mz-module-about">
          <i class="fa fa-photo ot-circle"></i>
          <h3>Android Development</h3>
          <p>Android Apps development</p>
        </div>
      </div>
      <!-- end about module -->
      <!-- about module -->
      <div class="col-md-3 text-center">
        <div class="mz-module-about">
          <i class="fa fa-camera-retro ot-circle"></i>
          <h3>Algorithms</h3>
          <p>Development of AI algorithms</p>
        </div>
      </div>
      <!-- end about module -->
      <!-- about module -->
      <div class="col-md-3 text-center">
        <div class="mz-module-about">
          <i class="fa fa-cube ot-circle"></i>
          <h3>UI/UX Design</h3>
          <p>Implementing Wireframes</p>
        </div>
      </div>
      <!-- end about module -->
    </div>
  </div>
  <!-- /.container -->

</section>

<section id="portfolio" class="light-bg">
			<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>Our Portfolio</h2>
            <p>Project Manager targets mainly the audience of software development firms but also can be used by institutions that offer IT or relevant courses. Therefore, handling students projects that are subject to a course requirement can be made more effective .
              <br><br>Alternatively, Project Manager can be used personally and can help individuals coordinate projects from distant geographical locations.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- start portfolio item -->
				<div class="col-md-4">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="{{asset('lattes/images/demo/portfolio-1.jpg')}}" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Software Development Firms</h2>
								<p>Leave Project Manager to it.</p>
								<a href="#" data-toggle="modal" data-target="#Modal-1">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-4">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="{{asset('lattes/images/demo/portfolio-1.jpg')}}" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Learning Institutions</h2>
								<p>Leave Project Manager to it.</p>
								<a href="#" data-toggle="modal" data-target="#Modal-2">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-4">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="{{asset('lattes/images/demo/portfolio-1.jpg')}}" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Individuals</h2>
								<p>Leave Project Manager to it.</p>
								<a href="#" data-toggle="modal" data-target="#Modal-3">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
			</div>

			</div><!-- end container -->
		</section>

<section id="ach" class="overlay-dark bg-img1 dark-bg short-section">
  <div class="container text-center">
    <div class="row">

      <div class="col-md-12 mb-sm-30">
        <div class="counter-item">
          <h2>Why Project Manager?</h2>
          <hr>

            Currently software, web and mobile application development and solutions business is a new lucrative market opportunity in Kenya. The digital radicalization has opened opportunities and many software developing companies are venturing into the business and market for such kind of management system is evident. <br> <br>
            The biggest problem in such a market is there has always been some friction during the synchronisation and flow or operations/task activities during the development process.
            Take an example of a company assigned around 10 to 20 project concepts to implement into code. So this is where a Project Manager could come in handy. <br> <br>
            Educational institutions such as universities or many other institutions that offer IT related courses can employ Project Manger to manage students' projects and can also offers an online feature that guides the project supervisor through the development processes carried out incrementaly by the student.

        </div>
      </div>

    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="section-title">
          <h2>Development Languages</h2>
          <p></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="owl-carousel">
          <div class="item">
            <div class="partner-logo"><img src="images/demo/partners-1.png" alt="partners"></div>
          </div>
          <div class="item">
            <div class="partner-logo"><img src="images/demo/partners-2.png" alt="partners"></div>
          </div>
          <div class="item">
            <div class="partner-logo"><img src="images/demo/partners-3.png" alt="partners"></div>
          </div>
          <div class="item">
            <div class="partner-logo"><img src="images/demo/partners-4.png" alt="partners"></div>
          </div>
          <div class="item">
            <div class="partner-logo"><img src="images/demo/partners-5.png" alt="partners"></div>
          </div>
          <div class="item">
            <div class="partner-logo"><img src="images/demo/partners-6.png" alt="partners"></div>
          </div>
          <div class="item">
            <div class="partner-logo"><img src="images/demo/partners-7.png" alt="partners"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="section-title">
          <h2>Contact Us</h2>
          <p>If you have some queries about Project Manager, Please Contact Us!</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <h3>Our Business Office</h3>
        <p>www.alwaysonline.findus/saiba</p>
        <p><i class="fa fa-phone"></i>   +254 716 202 298</p>
        <p><i class="fa fa-envelope"></i>   michaelsaiba84@gmail.com</p>
      </div>
      <div class="col-md-3">
        <h3>Business Hours</h3>
        <p><i class="fa fa-clock-o"></i> <span class="day">Weekdays:</span><span> Email Us</span></p>
        <p><i class="fa fa-clock-o"></i> <span class="day">Saturday:</span><span> Online on Saturdays</span></p>
        <p><i class="fa fa-clock-o"></i> <span class="day">Sunday:</span><span> Online shortly after Church</span></p>
      </div>
      <div class="col-md-6">
        <form name="sentMessage" id="contactForm" novalidate="" >
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="row">
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button type="submit" class="btn">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<p id="back-top">
  <a href="#top"><i class="fa fa-angle-up"></i></a>
</p>
<footer>
  <div class="container text-center">
    <p>Designed by <a href="http://facebook.com/michaelsaiba"> Saiba.co.ke</a></p>
  </div>
</footer>

<!-- Modal for portfolio item 1 -->
<div class="modal fade" id="Modal-1" tabindex="-1" role="dialog" aria-labelledby="Modal-label-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="Modal-label-1">Dean & Letter</h4>
      </div>
      <div class="modal-body">
        <img src="{{asset('lattes/images/demo/portfolio-1.jpg')}}" alt="img01" class="img-responsive" />
        <div class="modal-works"><span>Branding</span><span>Web Design</span></div>
        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal for portfolio item 2 -->
<div class="modal fade" id="Modal-2" tabindex="-1" role="dialog" aria-labelledby="Modal-label-2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="Modal-label-2">Startup Framework</h4>
      </div>
      <div class="modal-body">
        <img src="{{asset('lattes/images/demo/portfolio-2.jpg')}}" alt="img01" class="img-responsive" />
        <div class="modal-works"><span>Branding</span><span>Web Design</span></div>
        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal for portfolio item 3 -->
<div class="modal fade" id="Modal-3" tabindex="-1" role="dialog" aria-labelledby="Modal-label-3">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="Modal-label-3">Lamp & Velvet</h4>
      </div>
      <div class="modal-body">
        <img src="{{asset('lattes/images/demo/portfolio-3.jpg')}}" alt="img01" class="img-responsive" />
        <div class="modal-works"><span>Branding</span><span>Web Design</span></div>
        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection
