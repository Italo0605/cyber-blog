<div class ="component-square-post">
    <a href="{{BASE}}post/ver/{{post.link}}">
        {%if post.image !=null %}
        <img src="{{post.image}}" alt="{{post.title}}">
        {% else %}
        <img src="{{ BASE ~ 'assets/image/blog-thumb/default-thumb.jpg' }}" alt="{{post.title}}">
        {% endif %}
    </a>

    <a href="{{BASE}}post/ver/{{post.link}}" class="title">{{post.title}}</a>
</div>