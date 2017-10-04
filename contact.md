---
layout: page
title: Contact
excerpt: "Contact the team at Francis Terry and Associates"
permalink: /contact/
article: article
---

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