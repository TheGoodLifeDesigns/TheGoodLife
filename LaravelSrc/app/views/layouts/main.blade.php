<?php $page_name =  str_replace(' ', '', $__env->yieldContent('page_name'));?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1200">
    <title>TGLD | Welcome</title>

    <!-- CSS -->
    {{ HTML::style('static/css/foundation.css') }}
    {{ HTML::style('static/css/styles.css') }}
      {{ HTML::style('static/css/font-awesome.css') }}

    <!-- JS --> 
    {{ HTML::script('static/js/vendor/modernizr.js') }}

  </head>
  <body>
  <div id="sideMenu">
    <ul class="list-side-header-menu">
      <li class="list-menu"><a href="/"><div class="home-icon"></div></a></li>
      <li class="list-menu"><a href="/"><div class="portfolio-icon"></div></a></li>
      <li class="list-menu"><a href="/"><div class="about-icon"> </div></a></li>
      <li class="list-menu"><a href="/"><div class="services-icon"></div></a></li>
      <li class="list-menu"><a href="{{ URL::route('contact') }}"><div class="contact-icon"></div></a></li>
    </ul>
  </div>

  <div id="<?php echo $page_name; ?>" class="body-content">
    <div class="header-menu">
      <ul class="list-header-menu">
        @if(!Auth::check())
          <li id="loginBtn"><div id="loginBtnIcon"></div>Sign In</li>
        @else
          <li><a href="dashboard">Dashboard</a></li>
        @endif  
      </ul>
    </div>
    @yield('content')
  </div>


    {{ HTML::script('static/js/vendor/jquery.js') }}
    {{ HTML::script('static/js/foundation.min.js') }}
    {{ HTML::script('static/js/login.js') }}
    {{ HTML::script('static/js/layout.js') }}
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
