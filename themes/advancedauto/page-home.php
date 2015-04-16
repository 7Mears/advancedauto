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

    <div class="hero-slogan">
      <h1><strong>Advanced</strong></h1>
      <h1>Auto Care & Tire</h1>
      <h6>We have <strong>state of the art equipment</strong>, top of the line products,<br /> and <strong>highly trained technicians</strong> to meet your automotive needs.</h6>
    </div>

    <div class="hero-info">
      <p><i class="fa fa-phone"></i> <a href="tel:306-­249-­9545">(306) ­249-­9545</a><br/>
      <i class="fa fa-map-marker"></i> <a href="https://www.google.ca/maps/place/145+105+St+E,+Saskatoon,+SK+S7N+1Z2/@52.1320599,-106.5913336,17z/data=!3m1!4b1!4m2!3m1!1s0x5304f4064933b071:0x98697069370efa55">145 105th Street East</a><br/> Saskatoon, Saskatchewan</p>
    </div>

    <img class="sgi" src="http://localhost/advanced-auto/wp-content/uploads/2015/04/SGI.png" alt="SGI Accredited">
  </div>

  <div class="clear"></div>
</section>

<section id="services" class="services">
  <div class="container">
    <span class="section-title">Our Services</span>
    <h3 class="section-headline">We do <strong>everything you need</strong> to keep your vehicle in top shape, from changing filters and fluids to changing motors.</h3>
    <ul>
       <li><h5>Brakes</h5> Take advantage of our free brake check. We will report our findings back to you and provide you with an estimate.</li>
       <li><h5>Wheel alignment</h5> Misalignment causes premature tire wear and adversely affects the handling of your vehicle. If problems are found, we will explain what is wrong and how to correct it.</li>
       <li><h5>Shock absorbers</h5> Worn out shock absorbers or struts can cause severe handling issues and premature tire wear.</li>
       <li><h5>Tune­ups</h5> To maintain your vehicle's performance and efficiency, each vehicle has a regular scheduled service maintenance list. Sometimes it is as simple as an oil change, other times it's more complex, like a timing belt. We can handle it all.</li>
       <li><h5>Windshields</h5> We do replacement windshields on all makes and models, both insurance and non-insurance work, as well as side glass replacement and stone bruise repair while you wait.</li>
       <li><h5>Exhaust</h5> We can do small jobs like changing mufflers to large jobs like a custom fit exhaust on your hot rod. We have a pipe bender on site and can make your custom exhaust just the way you like it.</li>
       <li><h5>Mechanical services</h5> From time to time, vehicles have mechanical issues. We can handle small jobs like changing alternators to larger jobs like engine changing or rebuilding. The key to good mechanical services is good technicians and proper equipment. We have both of these covered.</li>
       <li><h5>Interior repair</h5> With a dedicated upholsterer, most interior repairs are a breeze. We can repair a torn panel or restitch torn seams in a jiffy.</li>
       <li><h5>Collision repair</h5> Our collision repair team consists of five dedicated body technicians and three paint technicians. We also have two frame straightening mechanics, two dust­free downdraft paint booths, and a factory­trained Mercedes­qualified painter. Be sure to ask about our written lifetime warranty.</li>
     </ul>
  </div>
  <div class="clear"></div>
</section>

<section id="products" class="products">
  <div class="container">
    <span class="section-title">Products</span>
    <h3 class="section-headline">We only use <strong>the best</strong></h3>
    <p>
      Quickly seize client-focused niches after <strong>impactful human</strong> capital. Progressively productivate viral expertise with customized growth strategies. Rapidiously enhance vertical expertise and high-payoff metrics. Quickly cultivate vertical best practices with extensible human capital. Professionally foster efficient users with adaptive human capital. Credibly foster equity invested total linkage after multifunctional materials. Assertively cultivate strategic content for enterprise innovation. <strong>Proactively visualize functional e-business</strong> whereas professional channels. Competently monetize backward-compatible imperatives.
    </p>
  </div>
</section>

<section id="about" class="about">
  <div class="container">
    <span class="section-title">About us</span>
    <h3 class="section-headline"><strong>Objectively supply user-centric</strong> architectures whereas flexible data. With more words.</h3>
    <p>
      Quickly seize client-focused niches after <strong>impactful human</strong> capital. Progressively productivate viral expertise with customized growth strategies. Rapidiously enhance vertical expertise and high-payoff metrics. Quickly cultivate vertical best practices with extensible human capital. Professionally foster efficient users with adaptive human capital. Credibly foster equity invested total linkage after multifunctional materials. Assertively cultivate strategic content for enterprise innovation. <strong>Proactively visualize functional e-business</strong> whereas professional channels. Competently monetize backward-compatible imperatives.
    </p>
  </div>
</section>

<section id="contact" class="contact">
  <div class="container">
    <span class="section-title">Contact us</span>
    <h3 class="section-headline">Get in touch</h3>
    <ul class="contact-info">
      <li><h5>Contact info</h5></li>
      <li>145 105th Street East</li>
      <li>Saskatoon, SK S7N 1Z2</li>
      <li><i class="fa fa-phone"></i> (306) ­249-­9545</li>
      <li><i class="fa fa-print"></i> (306) ­249-­9569</li>

      <!-- store hours -->
      <li><h5>Hours</h5></li>
      <li>Monday: 8:00 am - 5:00 pm</li>
      <li>Tuesday: 8:00 am - 5:00 pm</li>
      <li>Wednesday: 8:00 am - 5:00 pm</li>
      <li>Thursday: 8:00 am - 5:00 pm</li>
      <li>Friday: 8:00 am - 5:00 pm</li>
      <li>Saturday: Closed</li>
      <li>Sunday: Closed</li>
  </ul>

    <div class="contact-form">
      <?php echo do_shortcode( '[contact-form-7 id="22" title="Contact form 1"]' ); ?>
    </div>

    <div class="clear"></div>
  </div>
</section>


<?php get_footer(); ?>
