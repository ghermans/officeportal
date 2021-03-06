<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>iDevelopment - Office portal</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
<link href='http://fonts.googleapis.com/css?family=Open+Sans&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="{{ asset('css/bootstrap-notifications.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.businessHours.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="https://raw.githubusercontent.com/skywalkapps/bootstrap-notifications/master/dist/stylesheets/bootstrap-notifications.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('js/jquery.businessHours.js') }}"></script>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<style>
.workingBusinssDay {
    border: 2px solid #462d6c;
    background-color: #563d7c;
}

.dayOff {
    border: 2px solid #cd3804;
    background-color: #dd4814;
}
</style>
</head>
<body>
    <div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    iDevelopment portal
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                @if (Auth::guest())

                    @else
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/contacts') }}">Announcements</a></li>

                    <li><a href="{{ url('/departments') }}">Departments</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tools <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                        <li><a href="{{ url('/tools/register') }}">Create new link</a></li>
                        <li><a href="{{ url('/tools/register') }}">Manage tools</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ url('/tools') }}">Preview</a></li>
                      </ul>
                   </li>
                   <li><a href="{{ url('/documentation') }}">Documentation</a></li>
                    <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Staff <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ url('/staff/create') }}">Create user</a></li>
                  <li><a href="{{ url('/staff') }}">List all users</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Other</li>
                  <li><a href="{{ url('/staff') }}">Manage roles</a></li>
                  <li><a href="#">Manage departments</a></li>
                </ul>
              </li>
                    @endif

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())

                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ url('/profile') }}">Change profile</a></li>
                              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-power-off"></i>Log out</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

   <div id="page-wrapper">
     <div class="container-fluid">
     @yield('content')
   </div>
   </div>

</div>


      {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script>
$(document).ready(function(){
   tinymce.init({ selector:'textarea', elementpath: false});
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>
