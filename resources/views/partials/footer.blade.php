
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
        <!--   <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <p>Perferendis eum illum voluptatibus dolore tempora consequatur minus asperiores temporibus.</p>
          </div> -->
          <div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
            <h3 class="heading">Noret Quick Links</h3>
            <div class="row">
              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
                  <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contactus">Contact Us</a></li>
                    <li><a class="{{ Request:: is('choir_praiseW') ? "active":" "}}" href="/choir_praiseW">Choir/Praise and Worship Ministry</a></li>
                  <li> <a class="  {{ Request::is('executive') ? "active" : "" }}" href="/executive">Executive Team</a></li>
                  <li> <a class="{{ Request::is('membership') ? "active" : "" }}" href="/membership">Membership</a></li>
                </ul>

              </div>
              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li><a class="{{ Request:: is('choir_praiseW') ? "active":" "}}" href="/choir_praiseW">Choir/Praise and Worship Ministry</a></li>
                  <li><a class="{{Request::is('sound') ? "active":""}}" href="/sound">Sound and Lighting Ministry</a></li>
                  <li><a class=" {{ Request::is('hospitality')? "active":""}}" href="/hospitality">Hospitality Ministry</a></li>
                  <li><a class=" {{Request::is('creative') ?"active":""}}" href="/creative">Creative Arts Ministry</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
            
                  <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contactus">Contact Us</a></li>
                  <li><a class="{{ Request::is('portal') ? "active" : "" }}" href="portal">Portal</a></li>
                  <li><a class=" {{ Request::is('posts') ? "active" : "" }}" href="posts">Blog</a>  </li>
                </ul>
              </div>
            </div>
          </div>
         
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Contact Information</h3>
            <div class="block-23">
              <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">NORET JKUAT. NORET NAIROBI BRANCH</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">0717890426</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">noretjkuat@gmail.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center copyright">
            
            <p class="float-md-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Copyrights WILZKIPKOECH. All rights reserved<i class="fa fa-heart" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <p class="float-md-right">
              <a href="#" class="fa fa-facebook p-2"></a>
              <a href="#" class="fa fa-twitter p-2"></a>
              <a href="#" class="fa fa-linkedin p-2"></a>
              <a href="#" class="fa fa-instagram p-2"></a>

            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer --> 