 <div class="wrap">
    
    <div class="block-45">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <ul class="block-45-list">
              <li class="{{ Request::is('/') ? "active" : "" }}"><a href="#">Home</a></li>
              <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>
                <li class="{{ Request::is('contact') ? "active" : "" }}">><a href="/contactus">Contact Us</a></li>

            </ul>
          </div>
          <div class="col-md-6 text-md-right">
            <ul class="block-45-icons">
              <li><a href="3"><span class="fa fa-facebook"></span></a></li>
              <li><a href="3"><span class="fa fa-twitter"></span></a></li>
              <li><a href="3"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="3"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.html">NORET JKUAT<span class="fa fa-heart text-primary"></span>  </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="sermon.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Noret</a>
                <div class="dropdown-menu " aria-labelledby="dropdown05">
                  <a class="dropdown-item {{ Request::is('noretjkuat') ? "active" : "" }}" href="/executive">NORET JKUAT</a>
                  <a class="dropdown-item {{ Request::is('executive') ? "active" : "" }}" href="/membership">Executive Team</a>
                  <a class="dropdown-item {{ Request::is('membership') ? "active" : "" }}" href="/abouts">Membership</a>
                  
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="ministry.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ministries</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="ministry.html">Choir/Praise and Worship Ministry</a>
                  <a class="dropdown-item" href="ministry.html">Sound and Lighting Ministry</a>
                  <a class="dropdown-item" href="ministry.html">Hospitality Ministry</a>
                  <a class="dropdown-item" href="ministry.html">Creative Arts Ministry</a>
                 
                </div>

              </li>
               <li class="nav-item {{ Request::is('noretjkuat') ? "active" : "" }}">
                <a class="nav-link " href="noretjkuat">JkuatCU</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="sermon.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="sermon.html">Photos</a>
                  <a class="dropdown-item" href="sermon.html">Videos</a>
                  <a class="dropdown-item" href="sermon.html">Announcements</a>
                  <a class="dropdown-item" href="sermon.html">Sermons</a>
                   <a class="dropdown-item" href="sermon.html">Semester Program</a>
                    <a class="dropdown-item" href="sermon.html">AGM Reports</a>
                </div>
              </li>

             
              
               <li class="nav-item">
                <a class="nav-link" href="contact.html">Portal</a>
              </li>
            </ul>
            
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->