<div class="widget widget_categories"><!-- widget  -->
    <h4 class="widget-title">Categories</h4>
    <ul>
        @foreach ($categories as $category)
        <x-widget-item
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active='request()->fullUrlIs("*?category={$category->slug}*")'
        >
            {{ ucwords($category->name) }}
        </x-widget-item>
    @endforeach
    </ul>
</div>