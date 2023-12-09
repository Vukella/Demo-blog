@props(['blogs'])
<div class="col-lg-8">
    <div class="row">
        @foreach ($blogs as $blog)
            <x-blog-card :blog="$blog">

            </x-blog-card>
        @endforeach
    </div>
</div>