<div class="widget widget_tag_cloud"><!-- widget -->
    <h4 class="widget-title">Tags</h4>
    <div class="tagcloud">
        @foreach ($tags as $tag)
        <x-widget-item
            href="/?tag={{ $tag->slug }}&{{ http_build_query(request()->except('tag', 'page')) }}"
            :active='request()->fullUrlIs("*?tag={$tag->slug}*")'
        >
            {{ ucwords($tag->name) }}
        </x-widget-item>
    </div>
</div>