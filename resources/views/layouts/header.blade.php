<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/logo.png" alt="Chain App Dev">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="#top" class="active">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Category</a></li>
              <li><a href="#pricing">Item</a></li>
              <li><a href="#newsletter">Newsletter</a></li> 
              @auth
              <li><div class="gradient-button"><a id="modal_trigger" href="#"><i class="fa fa-align-justify"></i> Dashboard</a></div></li>
                @else
                <li><div class="gradient-button"><a id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i> Sign In Now</a></div></li>
              @endauth

            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>