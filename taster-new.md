---
layout: landing
pageclass: taster-page
title: Book a Taster Day with Francis Terry
excerpt: "Experience a day with Francis Terry & Associates, and discover what it would be like to bring a project to life working with our team."
permalink: /taster-day/
---
<div class="wrapper taster-day">

	<div class="article">
			
		<div class="video-form-block">
		
			<div class="video-form-block-01">	
				
				<h2>Demonstrating the value of choosing Francis Terry & Associates as your architects</h2>
				<script src="https://fast.wistia.com/embed/medias/uouaeq5z83.jsonp" async></script>
				<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
				<div>
					<div class="wistia_responsive_padding taster-day-video" style="padding:56.25% 0 0 0;position:relative;">
						<div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;bottom:0;width:100%;">
							<div class="wistia_embed wistia_async_uouaeq5z83 videoFoam=true" style="height:100%;width:100%">&nbsp;
							</div>
						</div>
					</div>
				</div>				
			
			</div>
				<a id="book"></a>
			
			<div class="video-form-block-02">
				<div class="taster-form">
					<h1 class="post-title">Book a Taster Day</h1>
					<h3>Work with Francis Terry for a day and discover what it would be like to bring your project to life working with our team</h3>
					<form method="post" id="booking-form" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Privacy Policy'); return false; }">
					    <input class="required" id="contact-name" type="text" name="name" placeholder="Your Name">
					    <input class="required" id="contact-email" type="email" placeholder="Your Email">
						<input class="required" id="contact-telephone" type="telephone" placeholder="Your Telephone No.">
					    <textarea id="contact-message" name="Message" placeholder="Your Message"></textarea>
						<div id="product-selector">Loading Products...</div>
						<div id="consent"><input type="checkbox" name="checkbox" value="check" id="agree" /> I have read and agree to the <a href="/privacy" alt="Privacy Policy" rel="noopener" target="_blank">Privacy Policy</a></div>
					    <input id="checkout-button" class="cta-button" disabled="disabled" type="submit" value="Book Now">
					</form>
					<small>All prices include VAT</small>
				</div>
				
			</div>
			
		</div>
				
		<h2>A Taster Day to fit your schedule</h2>
		<p>
			Your time is precious - and no doubt short. This is why we offer 3 options for the Taster Day and model the agenda around your desired output. Choose the type of day you would like and place your booking. Francis will get in touch to schedule the session at a time that fits best into your busy schedule.  
		</p>

		<ul class="list price-list">
			<li class="third price">
				<h3>FULL DAY</h3>
				<h4>Francis Terry & Associates offices</h4>
				<p>Enjoy a focussed day with Francis Terry & Associates in their offices, developing the bones of your scheme.</p>
				<p>10am - 4pm</p>
				<lineout></lineout>
				<p>£1200</p>
				<small>Includes VAT</small>
			</li>
			<li class="third price">
				<h3>PART DAY</h3>
				<h4>Francis Terry & Associates offices</h4>
				<p>Enjoy a productive session with Francis Terry & Associates developing your scheme, yet get away early.</p>
				<p>10am - 1pm</p>
				<lineout></lineout>
				<p>£900</p>
				<small>Includes VAT</small>
			</li>
			<li class="third price">
				<h3>FULL DAY</h3>
				<h4>at your home or office</h4>
				<p>Francis Terry will come to your home, office or site and start developing the bones of your  scheme with you.</p>
				<p>10am - 4pm</p>
				<lineout></lineout>
				<p>£1800</p>
				<small>Includes VAT</small>
			</li>
		</ul>
			
		<p class="box focus-text">Develop your scheme and experience what it would be like to bring a project to life working with our team</p>
		
		<div class="float:left">
			<h2>The art of choosing the right firm of architects</h2>
			<p>
				Struggling to find an architect? Choosing the right architectural practice for your project can feel like an enormous decision. Meetings and telephone discussions can only tell you so much. We prefer to show you, during what we call a Taster Day.
			</p><p>
				Your time is precious - and no doubt short. This is why the agenda for our Taster Day is modelled around the output you would  like from the day. You’ll have the opportunity to work with Francis Terry who will draw out your project in front of you - demonstrating his ability to develop a proposal that meets your wishes and needs. 
			</p><p>
				As well as furthering your design, you will get an insight into our working method and the opportunity to meet the team and see if we are the right firm for you. Team communication and rapport with your architect is critical to the success of any project. The Taster Day will give you a glimpse into how your project would run - should you choose Francis Terry & Associates. 
			</p>
		
		</div>
		
		<div class="drawing-block">
			<div class="drawing-block-01">
			</div>
			<div class="drawing-block-02">
				<h2 class="promo-large-text">Take home your drawings</h2>
				<p>
					At the end of the Taster Day, the drawings will be yours to keep and you will be free to develop them into a building, with or without our further assistance. There is no further financial commitment.
				</p>
			</div>
		</div>
			
		
		<div class="box">

			<h2>The Value of the Francis Terry Taster Day </h2>
			<p>
				<em>“The taster day was a great way to get to know Francis and develop a scheme quickly without any ongoing financial commitment. Like most clients, our requirements are very particular and Francis’s ability to draw a design in front of us allowed us to ensure we developed a proposal which satisfied our needs.”</em>
			</p>
				
		</div>
			
		<a id="book"></a>
			<h2>Experience a day with Francis Terry & Associates</h2>
			<h3>Discover what it would be like to bring a project to life working with our team</h3>
			<a href="#book" class="scroll">Book a Taster Day</a>
			
		<div class="taster-form-2">
			<img src="/images/feature/taster-hero.jpg" />
		</div>
			
	</div>
	
</div>

<script type="text/javascript">
    var api_url = '{{ site.data.api.url | default: "https://ftanda.co.uk/api" }}';
    var api_stripe_key = '{{ site.data.api.stripe_key | pk_test_UeSvUeIabOSxYzN6b4QejXoi }}';
</script>
<script src="https://checkout.stripe.com/checkout.js"></script>
<script src="/js/stripe/index.js?{{ site.time | date: '%s%N' }}" type="text/javascript"></script>