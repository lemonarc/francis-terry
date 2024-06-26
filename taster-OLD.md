---
layout: landing
title: Book a Taster Day with Francis Terry
excerpt: "Demonstrating the value of choosing Francis Terry & Associates as your architects."
permalink: /book-a-taster-day-with-francis-terry-OLD-DONT-USE/
class: taster-day
---

<div class="title-area">
	<img src="/images/feature/taster-day-hero-gradient.jpg" class="landing-hero" alt="Francis Terry" />
	<h2 class="article desktop-header">Demonstrating the value of choosing <br />Francis Terry & Associates as your architects</h2>
</div>

<div class="wrapper">

	<div class="article">
	
		<h2 class="article mobile-header">Demonstrating the value of choosing Francis Terry & Associates as your architects</h2>
	
		<div class="block-element">

			<ul class="list">
				<li class="half anchor">
					<img src="/images/feature/plans-gradient.jpg" alt="Francis Terry" />
					<div class="cta">
						<h3>Develop your scheme and experience what it would be like to bring a project to life working with our team</h3>
					</div>
				</li>
				<li class="half anchor">
					<img src="/images/feature/francis-sketching-gradient.jpg" alt="Francis Terry" />
					<div class="cta dark-theme">
						<h3>Work with Francis Terry for a day to develop your project</h3>
						<a href="#book" class="button cta-button scroll">Book a Taster Day</a>
					</div>
				</li>
			</ul>
			
		</div>
		<div class="block-element">

			<h2>The art of choosing the right firm of architects</h2>
			<p>
				Struggling to find an architect? Choosing the right architectural practice for your project can feel like an enormous decision. Meetings and telephone discussions can only tell you so much. We prefer to show you, during what we call a Taster Day.
			</p><p>
				Your time is precious - and no doubt short. This is why the agenda for our Taster Day is modelled around the output you would  like from the day. You’ll have the opportunity to work with Francis Terry who will draw out your project in front of you - demonstrating his ability to develop a proposal that meets your wishes and needs. 
			</p><p>
				As well as furthering your design, you will get an insight into our working method and the opportunity to meet the team and see if we are the right firm for you. Team communication and rapport with your architect is critical to the success of any project. The Taster Day will give you a glimpse into how your project would run - should you choose Francis Terry & Associates. 
			</p>
			
		</div>
		<div class="block-element">
		
			<lineout></lineout>

				<ul class="list">
					<li class="third-to-half">
						<div>
							<img src="/images/feature/drawings-full.jpg" class="photoframe" alt="Francis Terry" />
						</div>
					</li>
					<li class="two-thirds-to-half last">
						<h2 class="promo-large-text">Take home your drawings</h2>
						<p>
							At the end of the Taster Day, the drawings will be yours to keep and you will be free to develop them into a building, with or without our further assistance. There is no further financial commitment.
						</p>
					</li>
				</ul>
		
			<lineout></lineout>
			
		</div>
		<div class="block-element">

			<h2>A Taster Day to fit your schedule</h2>
			<p>
				We offer three different types of day, so you can choose what suits you best. Choose the type of day you would like and place your booking. Francis  will get in touch to to schedule the session at a time that fits best into your busy schedule. 
			</p>

			<ul class="list price-list">
				<li class="third price">
					<h3>Full Day at studio</h3>
					<p>Get away from the hustle and bustle of your busy life and spend at  Francis Terry & Associates offices in Ardleigh</p>
					<p>10 am - 5 pm</p>
					<p>Lunch in historic Dedham, Constable Country</p>
					<lineout></lineout>
					<p>£1000</p>
				</li>
				<li class="third price">
					<h3>Part Day studio</h3>
					<p>Enjoy some creative time in the English countryside, at Francis Terry & Associates offices in Ardleigh. Yet get away early.</p>
					<p>10am - 2pm</p>
					<lineout></lineout>
					<p>£700</p>
				</li>
				<li class="third price">
					<h3>Full Day at your home</h3>
					<p>Francis Terry will come to your home, office or site and work through the scheme with you.</p>
					<p>10 am - 5pm</p>
					<p>At your home or office</p>
					<lineout></lineout>
					<p>£1500</p>
				</li>
			</ul>
			
		</div>
		<div class="block-element">
		
			<div class="box">

				<h2>The Value of the Francis Terry Taster Day </h2>
				<p>
					<em>“The taster day was a great way to get to know Francis and develop a scheme quickly without any ongoing financial commitment. Like most clients, our requirements are very particular and Francis’s ability to draw a design in front of us allowed us to ensure we developed a proposal which satisfied our needs.”</em>
				</p>
				
			</div>
			
		</div>
		<div class="block-element sign-off">
			
			<a id="book"></a>
			<h2>Experience a day with Francis Terry & Associates</h2>
			<h3>Discover what it would be like to bring a project to life working with our team</h3>
			
		</div>
		<div class="block-element">
	
			<a id="book"></a>
			<form method="post" id="contact-form booking-form">
			    <input class="required" id="contact-name" type="text" name="name" placeholder="Your Name">
			    <input class="required" id="contact-email" type="email" placeholder="Your Email">
				<input class="required" id="contact-telephone" type="telephone" placeholder="Your Telephone No.">
			    <textarea id="contact-message" name="Message" placeholder="Your Message"></textarea>
				<div id="product-selector">Loading Products...</div>
			    <input id="checkout-button" disabled="disabled" type="submit" value="Book Now">
			</form>
			
		</div>
	
	</div>
	
</div>

<script type="text/javascript">
    var api_url = '{{ site.data.api.url | default: "https://ftanda.co.uk/api" }}';
    var api_stripe_key = '{{ site.data.api.stripe_key | pk_test_UeSvUeIabOSxYzN6b4QejXoi }}';
</script>
<script src="https://checkout.stripe.com/checkout.js"></script>
<script src="/js/stripe/index.js?{{ site.time | date: '%s%N' }}" type="text/javascript"></script>