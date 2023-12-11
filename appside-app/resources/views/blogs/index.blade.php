<!DOCTYPE html>
<html lang="en">

  @include('components.head')

<body>
    
    <!-- navbar area -->
  <x-navbar>

    <!-- breadcrumb area -->
    @include('components.breadcrumb-area')
  </x-navbar>

<div class="page-content-area padding-top-120 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @if ($blogs->count())
                        <x-blogs-grid :blogs="$blogs" />

                        {{$blogs->links()}}
                    @endif
                    
                    <div class="col-lg-12">
                            <div class="blog-pagination margin-top-10"><!-- blog pagination -->
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                                <i class="fas fa-chevron-right"></i>
                                        </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- //. blog pagination -->
                    </div>
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
    
                                @include('components.popular-posts');
    
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
@include ('components.footer')


<!-- preloader area -->
@include('components.preloader-area')

  <!-- back to top area start -->
  <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
  </div>
  <!-- back to top area end -->

  <!-- scripts -->
  @include('components.scripts')
</body>

</html>