@props(['blog'])

<div class="col-lg-6 col-md-6">
    <div class="single-blog-grid-item">
        <div class="thumb">
            <img src="{{asset('storage/' . $blog->thumbnail)}}" alt="blog image">
        </div>
        <div class="content">
            <ul class="post-meta">
                <li><time>{{$blog->created_at->diffForHumans() }} </time> </li>
                <li><a href="/?author={{$post->author->username}}">By {{$post->author->name}}</a></li>
            </ul>
            <h4 class="title"><a href="/blogs/{{$blog->slug}}">{{$blog->title}}</a></h4>
            <a href="/blogs/{{$blog->slug}}" class="readmore">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
    </div>  
</div>