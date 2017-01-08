<div id="services" class="container text-center p-y-80">

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
          <?php if ( is_home() || is_front_page() ) { ?>
          <h2 class="p-y-20">Services</h2>
          <?php } else { ?>
          <h1 class="p-y-20">Services</h1>
          <?php } ?>
          <div class="p-y-20"><p>Sometimes planning a trip can be frustrating due to additional considerations for accessibility. To make it easier, we have compiled handy lists of places and services around Quebec that are accessible, for you convenience. Now your trip to Quebec will be easier and less time consuming.</p></div>

      </div>
    </div>
  </div>
      <!-- Three columns of text below the carousel -->
      <ul class="row list-unstyled">
        <li class="col-md-3 col-sm-6">
          <div class="service-icon">
            <svg height="48" viewBox="0 0 24 24" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M4 16c0 .88.39 1.67 1 2.22V20c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h8v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1.78c.61-.55 1-1.34 1-2.22V6c0-3.5-3.58-4-8-4s-8 .5-8 4v10zm3.5 1c-.83 0-1.5-.67-1.5-1.5S6.67 14 7.5 14s1.5.67 1.5 1.5S8.33 17 7.5 17zm9 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm1.5-6H6V6h12v5z"/></svg>
          </div>
          <h3>Transportation</h3>
          <p>Throughout your journey you will need some transportation. From buses to trains, we got you covered when it comes to rides. Check out our list of ramp-friendly transportation stations.</p>
          <p><a class="btn btn-primary" href="<?php echo esc_url( home_url( '/transportation' ) ); ?>">View More <span class="sr-only">Transportation methods</span></a></p>
        </li><!-- /.col-lg-4 -->
        <li class="col-md-3 col-sm-6">
          <div class="service-icon">
            <svg height="48" viewBox="0 0 24 24" width="48" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 0h24v24H0z" fill="none"/>
              <path d="M7 13c1.66 0 3-1.34 3-3S8.66 7 7 7s-3 1.34-3 3 1.34 3 3 3zm12-6h-8v7H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4z"/>
            </svg>
          </div>
          <h3>Accomodations</h3>
          <p>Ready to rest before your next adventure? We have a few recommendations for you on accessible accommodations. Make sure you check them out so you can get a good rest.</p>
          <p><a class="btn btn-primary" href="<?php echo esc_url( home_url( '/accommodation' ) ); ?>">View More <span class="sr-only">Accomodations</span></a></p>
        </li><!-- /.col-lg-4 -->
        <li class="col-md-3 col-sm-6">
          <div class="service-icon">
            <svg height="48" viewBox="0 0 24 24" width="48" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 0h24v24H0z" fill="none"/>
              <path d="M20 12c0-1.1.9-2 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-1.99.9-1.99 2v4c1.1 0 1.99.9 1.99 2s-.89 2-2 2v4c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-4c-1.1 0-2-.9-2-2zm-4.42 4.8L12 14.5l-3.58 2.3 1.08-4.12-3.29-2.69 4.24-.25L12 5.8l1.54 3.95 4.24.25-3.29 2.69 1.09 4.11z"/>
            </svg>
          </div>
          <h3>Activities</h3>
          <p>You had your sleep, it is time to hit the best spots in town. Take a look at all the activities you can do around the area. You will find plenty of accessible-friendly activities!</p>
          <p><a class="btn btn-primary" href="<?php echo esc_url( home_url( '/activities' ) ); ?>">View More <span class="sr-only">Activities</span></a></p>
        </li><!-- /.col-lg-4 -->
        <li class="col-md-3 col-sm-6">
          <div class="service-icon">
            <svg height="48" viewBox="0 0 24 24" width="48" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 0h24v24H0z" fill="none"/>
              <path d="M8.1 13.34l2.83-2.83L3.91 3.5c-1.56 1.56-1.56 4.09 0 5.66l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.2-1.1-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z"/>
            </svg>
          </div>
          <h3>Dining</h3>
          <p>When you think it is time to replenish your energy or you just want to try some of the best places around the area, make sure you look at our restaurant listing!</p>
          <p><a class="btn btn-primary" href="<?php echo esc_url( home_url( '/restaurants' ) ); ?>">View More <span class="sr-only">Restaurants</span></a></p>
        </li><!-- /.col-lg-4 -->
      </div><!-- /.row -->
</div>