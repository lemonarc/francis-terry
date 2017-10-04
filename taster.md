---
layout: landing
title: Book a Taster Day with Francis Terry
excerpt: "Mauris viverra quam vitae lectus sodales fermentum. Maecenas scelerisque tempus imperdiet. Pellentesque habitant morbi tristique senectus et netus et malesuada."
permalink: /book-a-taster-day-with-francis-terry/
class: taster-day
---

<img src="/images/feature/taster-day-hero.jpg" class="landing-hero" alt="Francis Terry" />

<div class="article">

<h1>{{ page.title }}</h1>
<h3>{{ page.excerpt }}</h3>
<form action="//formspree.io/{{ site.email }}" method="post" id="contact-form">
	<input type="text" name="_gotcha" style="display:none" />
	<input type="hidden" name="_next" value="/contact-success">
	<input type="hidden" name="_subject" value="Francis Terry and Associates Contact Form" />
	<input type="text" name="Name" placeholder="Your Name">
	<input type="email" name="_replyto" placeholder="Your Email">
	<textarea name="Message" placeholder="Your Message"></textarea>
	<input type="submit" value="Send">
</form>

<ul class="contact-list">
	<li class="contact-address">{{ site.address }}</li>
	<li class="contact-tel">{{ site.telephone }}</li>
	<li class="contact-email"><a href="mailto:{{ site.email }}">{{ site.email }}</a></li>
</ul>
</div>