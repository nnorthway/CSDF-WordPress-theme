<?php
/**
* The Front-Page Template
* @since 1.0.0
* @version 1.0.0
*/

?>
<?php get_header(); ?>
  <!--Hero-->
  <div class='parallax-container' id='hero'>
    <div class='parallax'>
      <img src='<?php echo get_template_directory_uri(); ?>/images/community.jpg' />
    </div>
    <div class='section center-align'>
      <h1>Center Street Daze Festival</h1>
      <p class='flow-text'>
        Saturday, August 5th, 2017<br />
        20th Anniversary Celebration!
      </p>
      <p>
        <a href='#' class='btn waves-effect waves-light'>Events</a>
        <a href='#' class='btn waves-effect waves-light'>Vendors</a>
        <a href='#' class='btn waves-effect waves-light'>Music</a>
      </p>
    </div>
  </div>
  <div class='container' id='content'>
    <div class='row'>
      <div class='col m4 s12'>
        <div class='card brand-primary'>
          <div class='card-image'>
            <img src='<?php echo get_template_directory_uri(); ?>/images/race.jpg' />
            <span class='card-title'>Events</span>
          </div>
          <div class='card-content'>
            <p>
              From the cart race to the car show, Center Street Daze has a lot
              of fun to offer for the whole family.
            </p>
          </div>
          <div class='card-action'>
            <a href='#' class='white-text'>View Events</a>
          </div>
        </div>
      </div>
      <div class='col m4 s12'>
        <div class='card brand-primary'>
          <div class='card-image'>
            <img src='<?php echo get_template_directory_uri(); ?>/images/food.jpg' />
            <span class='card-title'>Vendors</span>
          </div>
          <div class='card-content'>
            <p>
              Over 50 vendors offering Milwaukee's best food and products.
            </p>
          </div>
          <div class='card-action'>
            <a href='#' class='white-text'>View Vendors</a>
            <a href='#' class='white-text'>Be A Vendor</a>
          </div>
        </div>
      </div>
      <div class='col m4 s12'>
        <div class='card brand-primary'>
          <div class='card-image'>
            <img src='<?php echo get_template_directory_uri(); ?>/images/music.jpg' />
            <span class='card-title'>Music</span>
          </div>
          <div class='card-content'>
            <p>
              With over 30 bands on 8 different stages, you're guaranteed to find
              something you like.
            </p>
          </div>
          <div class='card-action'>
            <a href='#' class='white-text'>View Lineup</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class='row'>
    <div class='brand-primary col s12 skew'>
      <div class='skew-content'>
        <div class='container'>
          <div class='row'>
            <div class='col s12 m8 offset-m2'>
              <h1>Our History</h1>
              <p>
                Center Street Daze is a street festival held in Milwaukee’s vibrant Riverwest neighborhood between Holton and Humboldt on Center Street. Currently in its 20th year, Center Street Daze has been happening annually since 1997. Center Street Daze is operated by the Riverwest Neighborhood Association and is meant to showcase the businesses, artists, and other vendors of the Riverwest neighborhood and beyond. The 20th Annual Center Street Daze festival continues to offer excellent entertainment for the entire family, showcasing some of the best in Riverwest. Each year Center Street Daze grows larger while retaining its community-oriented emphasis and this year is no exception. In 2017, we will still be hosting events that are time tested favorites such as the famous Pushcart Race and Classic Car Show. This year we will also be offering multiple music stages. We are graciously sponsored by many partners and participating businesses in the neighborhood, including many businesses right in the heart of Riverwest!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
