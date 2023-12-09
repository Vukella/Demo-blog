<!DOCTYPE html>
<html lang="en">

  @include('layouts.head')

<body>
    
    <!-- navbar area -->
  @include('layouts.navbar')

    <!-- breadcrumb area -->
  @include('layouts.breadcrumb-area')


<div class="page-content-area padding-top-120 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                    <div class="single-post-details-item"><!-- blog single content -->
                        <div class="thumb">
                            <img src="assets/img/blog/blog-details.jpg" alt="blog image">
                        </div>
                        <div class="entry-content">
                            <ul class="post-meta">
                                <li><a href="#"><i class="far fa-calendar-alt"></i> {{$blog->published_at}}</a></li>
                                <li><a href="#"><i class="far fa-user"></i> {{$blog->author->name}}</a></li>
                                <li class="cat"><i class="fas fa-tags"></i> <a href="#">Lifestyle</a> <a href="#">Travel</a><a href="#">Music</a></li>
                            </ul>
                            <h4 class="title">{{ $blog->title }}  </h4>
                           {!!$blog->body!!}
                        <!-- 
                            <blockquote>
                                    Nunc blandit tincidunt consequat. Duis diam metus, suscipit ininar eget, egestas id arcu. Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper.
                            </blockquote>
                        -->
                            
                        </div>
                        <div class="entry-footer"><!-- entry footer -->
                            <div class="left">
                                <ul class="tags">
                                    <li class="title">Tag: </li>
                                    <li><a href="#">{{$blog->tag->title}}</a></li>
                                </ul>
                            </div>
                            <div class="right">
                                <ul class="social-share">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div><!-- //. entry footer -->
    
                        <div class="comment-area"><!-- comment area -->
                            <h3 class="comment-title">03 Comments</h3>
                            <ul class="comment-list">
                                <li>
<!-- //. single comment wrap -->
                                </li>
                                <li class="has-children">
                                    <ul>
                                        <li>
                                            @include('components.single-comment-wrap')<!-- //. single comment wrap -->
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    @include('components.single-comment-wrap')<!-- //. single comment wrap -->
                                </li>
                                <li>
                                    @include('components.single-comment-wrap')<!-- //. single comment wrap -->
                                </li>
                            </ul>
                        </div>
  
                        @include ('components.comment-form-wrap');
                    </div> 
            </div>
            <div class="col-lg-4">
                    <div class="sidebar widget-area"><!-- widget area -->

                        <div class="widget widget_search"><!-- widget  -->
                            <h4 class="widget-title">Search</h4>
                            <form action="blog.html" class="search-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button class="submit-btn" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div><!-- //. widget -->
    
                        <div class="widget widget_categories"><!-- widget  -->
                            <h4 class="widget-title">Categories</h4>
                            <ul>
                                @foreach ($categories as $category)
                                    <li class="cat-item"><a href="#">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_popular_posts"><!-- widget  -->
                            <h4 class="widget-title">Popular Posts</h4>
                            <ul>
    
                                <li class="single-popular-post-item"><!-- single popular post item -->
                                    <div class="thumb">
                                        <img src="assets/img/popular-post/01.jpg" alt="popular post image">
                                    </div>
                                    <div class="content">
                                        <span class="time">June 20, 18</span>
                                        <h4 class="title"><a href="#">Aliquam eu mauris euismod lacus vel.</a></h4>
                                    </div>
                                </li><!-- //. single popular post item -->
                                <li class="single-popular-post-item"><!-- single popular post item -->
                                    <div class="thumb">
                                        <img src="assets/img/popular-post/02.jpg" alt="popular post image">
                                    </div>
                                    <div class="content">
                                        <span class="time">June 20, 18</span>
                                        <h4 class="title"><a href="#">Aliquam eu mauris euismod lacus vel.</a></h4>
                                    </div>
                                </li><!-- //. single popular post item -->
                                <li class="single-popular-post-item"><!-- single popular post item -->
                                    <div class="thumb">
                                        <img src="assets/img/popular-post/03.jpg" alt="popular post image">
                                    </div>
                                    <div class="content">
                                        <span class="time">June 20, 18</span>
                                        <h4 class="title"><a href="#">Aliquam eu mauris euismod lacus vel.</a></h4>
                                    </div>
                                </li><!-- //. single popular post item -->
    
                            </ul>
                        </div>
                        <div class="widget widget_tag_cloud"><!-- widget -->
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                @foreach ($tags as $tag)
                                    <a href="#">{{$tag->name}}</a>
                                @endforeach
                            </div>
                        </div>
    
                    </div>
            </div>
        </div>
    </div>
</div>


<!-- footer area -->
@include('layouts.footer')


<!-- preloader area -->
@include('layouts.preloader-area')



  <!-- back to top area start -->
  <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
  </div>
  <!-- back to top area end -->

  <!-- scripts -->
  @include('layouts.scripts')
</body>

</html>