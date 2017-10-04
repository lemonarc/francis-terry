---
layout: page
title: News
excerpt: "The latest news and updates from the team at Francis Terry and Associates"
permalink: /news/
social_image: /images/social/social-surrey.jpg
article: article
---

<div class="home">

  <ul class="post-list">
    {% for post in site.posts %}
      <li>
		<a href="{% if post.linkout %}{{ post.linkout }}{% else %}{{ post.url | prepend: site.baseurl }}{% endif %}" alt="{{ post.title }}" {% if post.linkout %}target="_blank"{% endif %}>
			<img src="/images/news/{{ post.tall_image }}" alt="{{ post.title }}" class="tall" />
			<img src="/images/news/{{ post.wide_image }}" alt="{{ post.title }}" class="wide" />
		</a>
		<div class="thoughts-description">
        <h2>
          <a class="post-link" href="{% if post.linkout %}{{ post.linkout }}{% else %}{{ post.url | prepend: site.baseurl }}{% endif %}" alt="{{ post.title }}" {% if post.linkout %}target="_blank"{% endif %}>{{ post.title }}</a>
        </h2>
		<span class="post-meta">{{ post.date | date: "%B %Y" }}</span>
		<p>{{ post.preview }}</p>
		<p>{% if post.linkout %}<a class="post-link" href="{{ post.linkout }}" target="_blank">Read the full article</a>{% else %}<a class="post-link" href="{{ post.url | prepend: site.baseurl }}">Read more</a>{% endif %}</p>
		</div>
      </li>
    {% endfor %}
  </ul>

</div>