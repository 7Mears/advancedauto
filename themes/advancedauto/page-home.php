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

<section class="products">
  <div class="container">
    <span class="section-title">Products</span>
    <h3 class="section-headline">We work with <strong>the best</strong></h3>
    <p>
      Quickly seize client-focused niches after <strong>impactful human</strong> capital. Progressively productivate viral expertise with customized growth strategies. Rapidiously enhance vertical expertise and high-payoff metrics. Quickly cultivate vertical best practices with extensible human capital. Professionally foster efficient users with adaptive human capital.

Credibly foster equity invested total linkage after multifunctional materials. Assertively cultivate strategic content for enterprise innovation. <strong>Proactively visualize functional e-business</strong> whereas professional channels. Competently monetize backward-compatible imperatives.
    </p>
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
