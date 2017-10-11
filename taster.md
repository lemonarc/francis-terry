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
<form method="post" id="contact-form">
    <div id="product-selector">Loading Products...</div>
    <input id="contact-name" type="text" name="name" placeholder="Your Name">
    <input id="contact-email" type="email" placeholder="Your Email">
    <textarea id="contact-message" name="Message" placeholder="Your Message"></textarea>
    <input id="checkout-button" disabled="disabled" type="submit" value="Checkout">
</form>

<ul class="contact-list">
    <li class="contact-address">{{ site.address }}</li>
    <li class="contact-tel">{{ site.telephone }}</li>
    <li class="contact-email"><a href="mailto:{{ site.email }}">{{ site.email }}</a></li>
</ul>
</div>

<script type="text/javascript">
    var api_url = '{{ site.data.api.url | default: "https://ftanda.co.uk/api" }}';
    var api_stripe_key = '{{ site.data.api.stripe_key | pk_test_UeSvUeIabOSxYzN6b4QejXoi }}';
</script>
<script src="https://checkout.stripe.com/checkout.js"></script>
<script src="/js/stripe/index.js" type="text/javascript"></script>