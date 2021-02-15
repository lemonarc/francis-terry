---
layout: page
pageclass: contactpage
title: Contact
excerpt: "Contact the team at Francis Terry and Associates"
permalink: /contact/
article: article
---

<form action="https://formzest.lemonarc.com/773ffef4-d646-47df-94a8-69eeac026144" method="post" id="contact-form" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Privacy Policy'); return false; }">
	<input type="text" name="_gotcha" style="display:none" />
	<input type="hidden" name="_next" value="{{ site.url }}/contact-success/">
	<input type="hidden" name="_subject" value="Francis Terry and Associates Contact Form" />
	<input type="text" name="Name" placeholder="Your Name" required>
	<input type="email" name="_replyto" placeholder="Your Email" required>
	<textarea name="Message" placeholder="Your Message" required></textarea>
	<p><input type="checkbox" name="checkbox" value="check" id="agree" required /> I have read and agree to the <a href="/privacy" alt="Privacy Policy" rel="noopener" target="_blank">Privacy Policy</a></p>
	<div class="g-recaptcha" data-sitekey="6LcACVkaAAAAAIkw4UN1HXgwV0TQC-WU6ZQJsazw"></div>
    <input type="submit" value="Send">
</form>

<script src="https://www.google.com/recaptcha/api.js" async defer>
</script>

<ul class="contact-list">
	<li class="contact-address">{{ site.address }}</li>
	<li class="contact-tel">{{ site.telephone }}</li>
	<li class="contact-email"><a href="mailto:{{ site.email }}">{{ site.email }}</a></li>
</ul>