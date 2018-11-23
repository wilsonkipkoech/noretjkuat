 <div class="wrap">
    
    <div class="block-45">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <ul class="block-45-list">
              
              <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
            
                <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contactus">Contact Us</a></li>
                

            </ul>
          </div>
          <div class="col-md-6 text-md-right">
         <a href="/" role="banner" aria-expanded="false"> My Account</span></a>
         <ul class="dropdown-menu">
          <li><a class="dropdown-item {{ Request:: is('choir_praiseW') ? "active":" "}}" href="/choir_praiseW">Choir/Praise and Worship Ministry</a></li>
        </ul>

             
          </div>
        </div>
      </div>
    </div>

<header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">  <a class="navbar-brand absolute" href="index.html">
          <img src="{{URL::asset('images/noretlogo.jpg')}}" height="100" width="100">
        <span class="fa fa-heart text-primary"></span>  </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
          </button>
         
          @if(Auth::check())

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? "active" : "" }}" href="/">HOME</a>
              </li>
              </li>
             

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="sermon.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Noret</a>
                <div class="dropdown-menu " aria-labelledby="dropdown05">
                  <a class="dropdown-item {{ Request::is('noretjkuat') ? "active" : "" }}" href="/noretjkuat">NORET JKUAT</a>
                  <a class="dropdown-item {{ Request::is('executive') ? "active" : "" }}" href="/executive">Executive Team</a>
                  <a class="dropdown-item {{ Request::is('membership') ? "active" : "" }}" href="/membership">Membership</a>
                  
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="ministry.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ministries</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item {{ Request:: is('choir_praiseW') ? "active":" "}}" href="/choir_praiseW">Choir/Praise and Worship Ministry</a>
                  <a class="dropdown-item {{Request::is('sound') ? "active":""}}" href="/sound">Sound and Lighting Ministry</a>
                  <a class="dropdown-item {{ Request::is('hospitality')? "active":""}}" href="/hospitality">Hospitality Ministry</a>
                  <a class="dropdown-item {{Request::is('creative') ?"active":""}}" href="/creative">Creative Arts Ministry</a>
                 
                </div>

              </li>
               <li class="nav-item ">
                <a class="nav-link {{ Request::is('jkuatcu') ? "active" : "" }} " href="jkuatcu">JkuatCU</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('sermon') ? "active" : "" }}" href="/sermons" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                    <a class="dropdown-item {{ Request::is('announcements') ? "active" : "" }}" href="announcements">Announcements</a>
                  <a class="dropdown-item {{ Request::is('sermons') ? "active" : "" }}" href="sermons">Sermons</a>
                   <a class="dropdown-item {{ Request::is('semesterprogram') ? "active" : "" }}" href="semesterprogram">Semester Program</a>
                    <a class="dropdown-item {{ Request::is('agmreports') ? "active" : "" }}" href="agmreports">AGM Reports</a>
                  <a class="dropdown-item {{ Request::is('photos') ? "active" : "" }}" href="/photos">Photos</a>
                  <a class="dropdown-item {{ Request::is('videos') ? "active" : "" }}" href="/videos">Videos</a>
                
                </div>
              </li>
                     <li class="nav-item">
                <a class="nav-link {{ Request::is('portal') ? "active" : "" }}" href="portal">Portal</a>  
              </li>
               <li class="nav-item">
                <a class="nav-link {{ Request::is('posts') ? "active" : "" }}" href="posts">Blog</a>        
              </li>
            
                           
               
            </ul>
            @else
  <a class="nav-link  btn btn-default {{ Request::is('login') ? "active" : "" }}" href="portal">Log In</a>
         
             @endif
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->