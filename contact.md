---
layout: page
pageclass: contactpage
title: Contact
excerpt: "Contact the team at Francis Terry and Associates"
permalink: /contact/
article: article
---

<form action="//formspree.io/{{ site.email }}" method="post" id="contact-form" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Privacy Policy'); return false; }">
	<input type="text" name="_gotcha" style="display:none" />
	<input type="hidden" name="_next" value="/contact-success">
	<input type="hidden" name="_subject" value="Francis Terry and Associates Contact Form" />
	<input type="text" name="Name" placeholder="Your Name">
	<input type="email" name="_replyto" placeholder="Your Email">
	<textarea name="Message" placeholder="Your Message"></textarea>
	<p><input type="checkbox" name="checkbox" value="check" id="agree" /> I have read and agree to the <a href="/privacy" alt="Privacy Policy" rel="noopener" target="_blank">Privacy Policy</a></p>
	<input type="submit" value="Send">
</form>

<ul class="contact-list">
	<li class="contact-address">{{ site.address }}</li>
	<li class="contact-tel">{{ site.telephone }}</li>
	<li class="contact-email"><a href="mailto:{{ site.email }}">{{ site.email }}</a></li>
</ul>