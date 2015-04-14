<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Advanced Auto
 */

get_header(); ?>

<section class="hero">
  <div class="container">

    <div class="hero-first-half">
      <div class="hero-slogan">
        <h1>Advanced</h1>
        <h2>Auto Care & Tire</h2>
        <p>We have state of the art equipment, top of the line products, and highly trained technicians to meet your automotive needs.</p>
      </div>
    </div>

    <div class="hero-second-half">
      <div class="hero-card">
        <h5>Get in touch</h5>
        <p><i class="fa fa-phone"></i> (306) ­249-­9545<br/>
          <i class="fa fa-map-marker"></i> 145 105th Street East<br/>
           Saskatoon, SK S7N 1Z2</p>
      </div>

      <div class="hero-card">
        <p>Our services range from changing filters and fluids to changing motors, and everything in between.</p>
        <button>Services</button>
      </div>
    </div>

  </div>
</section>

<section class="services">
  <div class="container">
    <span class="section-title">Our Services</span>
    <h3 class="section-headline">Using <strong>state of the art equipment</strong> we work on filters and fluids to changing motors, and <strong>everything in between</strong></h3>
    <ul>
      <li>Brakes</li>
      <li>Wheel alignment</li>
      <li>Shock absorbers</li>
      <li>Tune­ups</li>
      <li>Mechanical services</li>
      <li>Exhaust</li>
      <li>Windshields</li>
      <li>Interior repair</li>
      <li>Collision repair</li>
    </ul>
  </div>
</section>

<section class="products">
  <div class="container">
    <span class="section-title">Products</span>
    <h3 class="section-headline">We work with <strong>the best</strong></h3>
    <ul>
      <li>Batteries: 6, 8, and 12 volt batteries</li>
      <li>Shocks and struts: KYB is the new industry standard. Other lines available.</li>
      <li>Mufflers: Quiet or loud depending on the customer's needs.</li>
      <li>Tires: Michelins, Goodyear, BF Goodrich, Toyo, Cooper, Hankook, Pirelli.</li>
    </ul>
  </div>
</section>

<section class="contact">
  <div class="container">
  <span class="section-title">Contact us</span>
  <h3 class="section-headline">Get in touch</h3>

145 105th Street East

Saskatoon, SK S7N 1Z2

P: 306­249­9545

F: 306­249­9569

After hours, call Chris Hopkins: [NEED NUMBER]


<?php echo do_shortcode( '[contact-form-7 id="22" title="Contact form 1"]' ); ?>
</div>
</section>


<?php get_footer(); ?>
