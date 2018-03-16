<?php
/*
  Template Name: Home page
*/

get_header(); ?>
<!--hero-->
<section id="hero" data-type="background" data-speed="5" style="background-image:url('<?php the_field('hero_image','options');?>')">
    <div class="container clearfix">
      <div class="row">
        <div class="col-md-12 ">
          <h1 class="hero-heading"><?php the_field('hero_title','options')?></h1>
          <p><?php the_field('hero_subtitle','options')?></p>
          <a href="#about-me" class="scroll-down">
            <span class="mouse-scroll">
              <img src="<?php bloginfo('stylesheet_directory')?>/assets/img/mouse.png">
              <span class="mouse-line"></span>
            </span>
          </a>
        </div>
      </div>
    </div>
</section>
<section id="about-me">
  <h1 class="animate loaded">HELLO .</h1>
  <p class="self-intro">I'm NICKI CHEN This is my professional portfolio.
       I love all things catering to UI & UX and love colorful concepts ! I work with HTML,CSS
     ,Javascript and some of the awesome front-end tools. </p>
  <a class="btn-default more">More About Me</a>
</section>
<section id="opt-in">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <p class="lead"><strong>Subscribe to my mailing list. </strong> I will send something special as a thank you </p>
      </div>
      <div class="col-sm-4">
        <button class="btn btn-success greenBtn" data-toggle="modal" data-target="#myModal">Click here to subscribe</button>
      </div>
    </div>
  </div >
</section>
<!--Modal-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to my mailing list</h4>
      </div>
      <div class="modal-body">
        <p>Simply enter your name and email.<br>I'm going to send you fun web design articles,for <em>FREE</em></p>
        <form class="form-inline" role="form">
          <div class="form-group">
            <label class="sr-only" for="subscribe-name">
              Your first name
            </label>
            <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name: ">

          </div>
          <div class="form-group">
            <label class="sr-only" for="subscribe-email">
              Your email
            </label>
            <input type="email" class="form-control" id="subscribe-email" placeholder="Your email: ">
          </div>
          <!--end of email form group-->
          <input type="submit" class="btn btn-danger" value="Subscribe !">
        </form>

      </div>
      <!--end of modal body-->
    </div>

  </div>
</div>
<!--end of modal section-->
<!--service>
<section id="services">

    <h1>Services</h1>
    <div class="container">
      <p class="lead">
      </p>
      <div class="row">
      </div>
    </div>
</section>
<!-->
<!--projects-->
<section id="projects">
  <h1>Projects</h1>
  <div class="container">
    <div class="col-md-4 box">
        <img src="<?php bloginfo('stylesheet_directory')?>/assets/img/boba.jpg">
        <div class="overlay">
          <div>
            <span>
              <a href="#" data-toggle="modal" data-target="#projectModal">
                <img class="view-project-img" src="<?php bloginfo('stylesheet_directory')?>/assets/img/project-overlay.png">
              </a>
            </span>

          </div>
          <h1>Boba Tea Finder</h1>

        </div>
        <!--ending overlay-->
      <!--project Modal content-->
      <div id="projectModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h2 class="modal-title" id="myModalLabel">Boba Tea Finder</h2>
            </div>
            <!--ending modal header-->
            <div class="modal-body">
              <img height="240px" src="<?php bloginfo('stylesheet_directory')?>/assets/img/boba.jpg">
            </div>
          </div>
          <!--ending modal content-->
        </div>
        <!--ending modal dialog-->
      </div>
      <!--ending project modal-->
    </div>
    <!--ending box-->
    <div class="col-md-4 box">
      <img  src="<?php bloginfo('stylesheet_directory')?>/assets/img/cat.png">
      <div class="overlay">
        <div>
          <span>
            <a href="#" data-toggle="modal" data-target="#projectModal">
              <img class="view-project-img" src="<?php bloginfo('stylesheet_directory')?>/assets/img/project-overlay.png">
            </a>
          </span>

        </div>
        <h1>Cat Clicker App</h1>

      </div>
    </div>
    <div class="col-md-4 box">
      <img src="<?php bloginfo('stylesheet_directory')?>/assets/img/frogger.png">
      <div class="overlay">
        <div>
          <span>
            <a href="#" data-toggle="modal" data-target="#projectModal">
              <img class="view-project-img" src="<?php bloginfo('stylesheet_directory')?>/assets/img/project-overlay.png">
            </a>
          </span>

        </div>
        <h1>Frogger Game</h1>

      </div>
    </div>
    <div class="col-md-4 box">
      <div class="photo">
        <svg height="48px" id="Layer_1" style="enable-background:new 0 0 48 48;" version="1.1" viewBox="0 0 48 48" width="48px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M22.881,12.943c-0.148,0.149-0.447,0.092-0.667-0.127l0,0c-0.22-0.22-0.277-0.519-0.128-0.668  l2.01-2.01c0.149-0.149,0.448-0.092,0.668,0.128l0,0c0.22,0.22,0.277,0.519,0.128,0.668L22.881,12.943z" style="fill:#fff;"/><path d="M36.658,12.943c0.148,0.149,0.447,0.092,0.668-0.127l0,0c0.219-0.22,0.277-0.519,0.127-0.668
          l-2.01-2.01c-0.148-0.149-0.447-0.092-0.668,0.128l0,0c-0.219,0.22-0.275,0.519-0.127,0.668L36.658,12.943z" style="fill:#fff;"/><path d="M35.635,10.531c0,0.276-0.213,0.5-0.479,0.5H24.424c-0.265,0-0.478-0.224-0.478-0.5l0,0  c0-0.276,0.213-0.5,0.478-0.5h10.732C35.422,10.031,35.635,10.254,35.635,10.531L35.635,10.531z" style="fill:#fff;"/><path d="M10.03,11.156c0-0.276,0.224-0.5,0.5-0.5l0,0c0.276,0,0.5,0.224,0.5,0.5v1.375  c0,0.276-0.224,0.5-0.5,0.5l0,0c-0.276,0-0.5-0.224-0.5-0.5V11.156z" style="fill:#fff;"/>
          <path d="M13.614,11.114c0-0.276,0.224-0.5,0.5-0.5l0,0c0.276,0,0.5,0.224,0.5,0.5v1.375  c0,0.276-0.224,0.5-0.5,0.5l0,0c-0.276,0-0.5-0.224-0.5-0.5V11.114z" style="fill:#fff;"/><path d="M10.03,11.088c0-0.265,0.229-0.479,0.513-0.479h3.559c0.283,0,0.513,0.214,0.513,0.479l0,0  c0,0.265-0.229,0.479-0.513,0.479h-3.559C10.259,11.567,10.03,11.353,10.03,11.088L10.03,11.088z" style="fill:#fff;"/><g><path d="M41.404,33.281c0,1.649-1.35,3-3,3H9.238c-1.65,0-3-1.351-3-3   V15.614c0-1.65,1.35-3,3-3h29.167c1.65,0,3,1.35,3,3V33.281z" style="fill:none;stroke:#fff;stroke-miterlimit:10;"/></g><circle cx="29.739" cy="24.448" r="8.5" style="fill:none;stroke:#fff;stroke-miterlimit:10;"/><circle cx="29.74" cy="24.448"
          r="6.417" style="fill:none;stroke:#fff;stroke-miterlimit:10;"/>
          <circle cx="12.655" cy="18.864" r="2.083" style="fill:none;stroke:#fff;stroke-miterlimit:10;"/>
          <path d="M17.238,26.719c0,0.265-0.215,0.479-0.479,0.479H10.55c-0.265,0-0.479-0.214-0.479-0.479l0,0  c0-0.266,0.215-0.479,0.479-0.479h6.208C17.023,26.239,17.238,
          26.453,17.238,26.719L17.238,26.719z" style="fill:#fff;"/>
          <path d="M18.655,28.885c0,0.266-0.257,0.48-0.574,0.48h-7.436c-0.317,0-0.574-0.215-0.574-0.48l0,
          0  c0-0.264,0.257-0.479,0.574-0.479h7.436C18.398,28.406,18.655,28.621,18.655,28.885L18.655,28.885z"
          style="fill:#fff;"/>
          <path d="M20.322,31.178c0,0.265-0.308,0.479-0.688,0.479h-8.915c-0.381,0-0.688-0.214-0.688-0.479l0,
          0  c0-0.266,0.308-0.479,0.688-0.479h8.915C20.014,30.698,20.322,30.912,20.322,31.178L20.322,31.178z" style="fill:#fff;"/>
          <path d="M9.068,17.311c0.6-1.39,1.979-2.36,3.59-2.36s2.99,0.97,3.59,2.36" style="fill:none;stroke:#fff;stroke-miterlimit:10;"/></svg>
          <div class="overlay">
            <div>
              <span>
                <a href="#" data-toggle="modal" data-target="#projectModal">
                  <img class="view-project-img" src="<?php bloginfo('stylesheet_directory')?>/assets/img/project-overlay.png">
                </a>
              </span>

            </div>
            <h1>Your Project</h1>

          </div>
        </div>

    </div>
    <div class="col-md-4 box">
      <div class="photo white">
        <svg height="48px" id="Layer_1" style="enable-background:new 0 0 48 48;" version="1.1" viewBox="0 0 48 48" width="48px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M22.881,12.943c-0.148,0.149-0.447,0.092-0.667-0.127l0,0c-0.22-0.22-0.277-0.519-0.128-0.668  l2.01-2.01c0.149-0.149,0.448-0.092,0.668,0.128l0,0c0.22,0.22,0.277,0.519,0.128,0.668L22.881,12.943z" style="fill:#222;"/><path d="M36.658,12.943c0.148,0.149,0.447,0.092,0.668-0.127l0,0c0.219-0.22,0.277-0.519,0.127-0.668
          l-2.01-2.01c-0.148-0.149-0.447-0.092-0.668,0.128l0,0c-0.219,0.22-0.275,0.519-0.127,0.668L36.658,12.943z" style="fill:#222;"/><path d="M35.635,10.531c0,0.276-0.213,0.5-0.479,0.5H24.424c-0.265,0-0.478-0.224-0.478-0.5l0,0  c0-0.276,0.213-0.5,0.478-0.5h10.732C35.422,10.031,35.635,10.254,35.635,10.531L35.635,10.531z" style="fill:#222;"/><path d="M10.03,11.156c0-0.276,0.224-0.5,0.5-0.5l0,0c0.276,0,0.5,0.224,0.5,0.5v1.375  c0,0.276-0.224,0.5-0.5,0.5l0,0c-0.276,0-0.5-0.224-0.5-0.5V11.156z" style="fill:#222;"/>
          <path d="M13.614,11.114c0-0.276,0.224-0.5,0.5-0.5l0,0c0.276,0,0.5,0.224,0.5,0.5v1.375  c0,0.276-0.224,0.5-0.5,0.5l0,0c-0.276,0-0.5-0.224-0.5-0.5V11.114z" style="fill:#222;"/><path d="M10.03,11.088c0-0.265,0.229-0.479,0.513-0.479h3.559c0.283,0,0.513,0.214,0.513,0.479l0,0  c0,0.265-0.229,0.479-0.513,0.479h-3.559C10.259,11.567,10.03,11.353,10.03,11.088L10.03,11.088z" style="fill:#222;"/><g><path d="M41.404,33.281c0,1.649-1.35,3-3,3H9.238c-1.65,0-3-1.351-3-3   V15.614c0-1.65,1.35-3,3-3h29.167c1.65,0,3,1.35,3,3V33.281z" style="fill:none;stroke:#222;stroke-miterlimit:10;"/></g><circle cx="29.739" cy="24.448" r="8.5" style="fill:none;stroke:#222;stroke-miterlimit:10;"/><circle cx="29.74" cy="24.448"
          r="6.417" style="fill:none;stroke:#222;stroke-miterlimit:10;"/>
          <circle cx="12.655" cy="18.864" r="2.083" style="fill:none;stroke:#222;stroke-miterlimit:10;"/>
          <path d="M17.238,26.719c0,0.265-0.215,0.479-0.479,0.479H10.55c-0.265,0-0.479-0.214-0.479-0.479l0,0  c0-0.266,0.215-0.479,0.479-0.479h6.208C17.023,26.239,17.238,
          26.453,17.238,26.719L17.238,26.719z" style="fill:#222;"/>
          <path d="M18.655,28.885c0,0.266-0.257,0.48-0.574,0.48h-7.436c-0.317,0-0.574-0.215-0.574-0.48l0,
          0  c0-0.264,0.257-0.479,0.574-0.479h7.436C18.398,28.406,18.655,28.621,18.655,28.885L18.655,28.885z"
          style="fill:#222;"/>
          <path d="M20.322,31.178c0,0.265-0.308,0.479-0.688,0.479h-8.915c-0.381,0-0.688-0.214-0.688-0.479l0,
          0  c0-0.266,0.308-0.479,0.688-0.479h8.915C20.014,30.698,20.322,30.912,20.322,31.178L20.322,31.178z" style="fill:#222;"/>
          <path d="M9.068,17.311c0.6-1.39,1.979-2.36,3.59-2.36s2.99,0.97,3.59,2.36" style="fill:none;stroke:#222;stroke-miterlimit:10;"/></svg>
          <div class="overlay">
            <div>
              <span>
                <a href="#" data-toggle="modal" data-target="#projectModal">
                  <img class="view-project-img" src="<?php bloginfo('stylesheet_directory')?>/assets/img/project-overlay.png">
                </a>
              </span>

            </div>
            <h1>Your Project</h1>

          </div>
        </div>
    </div>
    <div class="col-md-4 box">
      <div class="photo black">
        <svg height="48px" id="Layer_1" style="enable-background:new 0 0 48 48;" version="1.1" viewBox="0 0 48 48" width="48px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M22.881,12.943c-0.148,0.149-0.447,0.092-0.667-0.127l0,0c-0.22-0.22-0.277-0.519-0.128-0.668  l2.01-2.01c0.149-0.149,0.448-0.092,0.668,0.128l0,0c0.22,0.22,0.277,0.519,0.128,0.668L22.881,12.943z" style="fill:#fff;"/><path d="M36.658,12.943c0.148,0.149,0.447,0.092,0.668-0.127l0,0c0.219-0.22,0.277-0.519,0.127-0.668
          l-2.01-2.01c-0.148-0.149-0.447-0.092-0.668,0.128l0,0c-0.219,0.22-0.275,0.519-0.127,0.668L36.658,12.943z" style="fill:#fff;"/><path d="M35.635,10.531c0,0.276-0.213,0.5-0.479,0.5H24.424c-0.265,0-0.478-0.224-0.478-0.5l0,0  c0-0.276,0.213-0.5,0.478-0.5h10.732C35.422,10.031,35.635,10.254,35.635,10.531L35.635,10.531z" style="fill:#fff;"/><path d="M10.03,11.156c0-0.276,0.224-0.5,0.5-0.5l0,0c0.276,0,0.5,0.224,0.5,0.5v1.375  c0,0.276-0.224,0.5-0.5,0.5l0,0c-0.276,0-0.5-0.224-0.5-0.5V11.156z" style="fill:#fff;"/>
          <path d="M13.614,11.114c0-0.276,0.224-0.5,0.5-0.5l0,0c0.276,0,0.5,0.224,0.5,0.5v1.375  c0,0.276-0.224,0.5-0.5,0.5l0,0c-0.276,0-0.5-0.224-0.5-0.5V11.114z" style="fill:#fff;"/><path d="M10.03,11.088c0-0.265,0.229-0.479,0.513-0.479h3.559c0.283,0,0.513,0.214,0.513,0.479l0,0  c0,0.265-0.229,0.479-0.513,0.479h-3.559C10.259,11.567,10.03,11.353,10.03,11.088L10.03,11.088z" style="fill:#fff;"/><g><path d="M41.404,33.281c0,1.649-1.35,3-3,3H9.238c-1.65,0-3-1.351-3-3   V15.614c0-1.65,1.35-3,3-3h29.167c1.65,0,3,1.35,3,3V33.281z" style="fill:none;stroke:#fff;stroke-miterlimit:10;"/></g><circle cx="29.739" cy="24.448" r="8.5" style="fill:none;stroke:#fff;stroke-miterlimit:10;"/><circle cx="29.74" cy="24.448"
          r="6.417" style="fill:none;stroke:#fff;stroke-miterlimit:10;"/>
          <circle cx="12.655" cy="18.864" r="2.083" style="fill:none;stroke:#fff;stroke-miterlimit:10;"/>
          <path d="M17.238,26.719c0,0.265-0.215,0.479-0.479,0.479H10.55c-0.265,0-0.479-0.214-0.479-0.479l0,0  c0-0.266,0.215-0.479,0.479-0.479h6.208C17.023,26.239,17.238,
          26.453,17.238,26.719L17.238,26.719z" style="fill:#fff;"/>
          <path d="M18.655,28.885c0,0.266-0.257,0.48-0.574,0.48h-7.436c-0.317,0-0.574-0.215-0.574-0.48l0,
          0  c0-0.264,0.257-0.479,0.574-0.479h7.436C18.398,28.406,18.655,28.621,18.655,28.885L18.655,28.885z"
          style="fill:#fff;"/>
          <path d="M20.322,31.178c0,0.265-0.308,0.479-0.688,0.479h-8.915c-0.381,0-0.688-0.214-0.688-0.479l0,
          0  c0-0.266,0.308-0.479,0.688-0.479h8.915C20.014,30.698,20.322,30.912,20.322,31.178L20.322,31.178z" style="fill:#fff;"/>
          <path d="M9.068,17.311c0.6-1.39,1.979-2.36,3.59-2.36s2.99,0.97,3.59,2.36" style="fill:none;stroke:#fff;stroke-miterlimit:10;"/></svg>
          <div class="overlay">
            <div>
              <span>
                <a href="#" data-toggle="modal" data-target="#projectModal">
                  <img class="view-project-img" src="<?php bloginfo('stylesheet_directory')?>/assets/img/project-overlay.png">
                </a>
              </span>

            </div>
            <h1>Your Project</h1>

          </div>
        </div>

    </div>
  </div>
</section>
<?php get_footer();?>
