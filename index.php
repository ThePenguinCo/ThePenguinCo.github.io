<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Eric Li</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
  <link rel="stylesheet" href="css/custom.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body id="top">
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="#top" class="navbar-brand">Eric Li</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav navbar-right nav-pills">
          <li><a href="#about">About</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="bs-docs-section">
      <div class="row">
        <div class="col-lg-12 center">
          <div class="bs-component">
            <div class="jumbotron">
              <h1>Eric Li</h1>
              <p>ThePenguinCo</p>
              <div class="row">
                <a href="http://github.com/ThePenguinCO" class="btn btn-xlarge btn-fab">
                  <i class="fa fa-fw fa-github"></i>
                  <div class="ripple-container"></div>
                </a>
                <a href="http://facebook.com/robot1331" class="btn btn-xlarge btn-fab">
                  <i class="fa fa-fw fa-facebook"></i>
                  <div class="ripple-container"></div>
                </a>
                <a href="http://linkedin.com/in/ericli1234" class="btn btn-xlarge btn-fab">
                  <i class="fa fa-fw fa-linkedin"></i>
                  <div class="ripple-container"></div>
                </a>
                <a href="http://soundcloud.com/ThePenguinCo" class="btn btn-xlarge btn-fab">
                  <i class="fa fa-fw fa-soundcloud"></i>
                  <div class="ripple-container"></div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section" id="about">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>About</h2>
          <hr>
          <div class="well well-lg col-lg-4 about-text">
            <p class="about-header">Student</p>
            <p class="about-about">Hi, I'm Eric, a student at Victoria Park CI. I'm an avid programmer, web developer and Linux/UNIX system administrator.
            In my spare time, I play sports, travel the world and party!</p>
          </div>
          <div class="well well-lg col-lg-4 about-text">
            <p class="about-header">Developer</p>
            <code>Python</code>
            <code>Java</code>
            <code>C++</code>
            <code>C#</code>
            <code>C</code>
            <code>HTML</code>
            <code>CSS</code>
            <code>JavaScript</code>
            <code>PHP</code>
            <code>Rails</code>
            <code>Node.js</code>
          </div>
          <div class="well well-lg col-lg-4 about-text">
            <p class="about-header">Audiophile</p>
            <p class="about-about">I produce content anonymously on <a href="http://newgrounds.com">newgrounds.com</a>.
              I use FL Studio 12, Logic Pro X, Sylenth1, reFXNexus, and the built-in midi-instruments and sounds. </p>
          </div>
      </div>
    </div>

    <div class="section" id="portfolio">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Portfolio</h2>
          <hr>
          <div class="col-lg-6">
            <div class="bs-component">
              <div class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">What Day Is It</h4>
                    </div>
                    <div class="modal-body">
                      <p>A web application that tells you what school day it is.</p>
                      <br><br>
                    </div>
                    <div class="modal-footer">
                      <a href="https://github.com/ThePenguinCo/what-day-is-it" class="btn btn-primary">View on Github</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="bs-component">
              <div class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Toronto Hacker Club</h4>
                    </div>
                    <div class="modal-body">
                      <p>A student-run organization aiming to promote
                        computer science education in high schools throughout the Greater Toronto Area</p>
                      <b>Position: Logistics</b>
                    </div>
                    <div class="modal-footer">
                      <a href="http://torontohacker.club" class="btn btn-primary">Visit Website</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="section" id="contact">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Contact Me</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Phone Number</label>
                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Message</label>
                <textarea rows="3" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="row">
              <div class="form-group col-xs-12">
                <button type="submit" class="btn bym btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <footer>
      <div class="row">
        <div class="col-lg-12">
          <ul class="list-unstyled">
            <li class="pull-right"><a href="#top">Back to top</a></li>
          </ul>
          <p>Copyright &copy; Eric Li 2016.</p>
          <p>ThePenguinCo</p>
        </div>
      </div>
    </footer>
  </div>

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/scroll.js"></script>
</body>
</html>
