<article @php(post_class('p-2 relative'))>
    <div class="row">
        @if(has_post_thumbnail())
        <div class="col-md-4">
            <a href="{{ get_permalink() }}">
                <img class="img-thumbnail" src="{{the_post_thumbnail_url()}}" alt="">
            </a>
        </div>
        @endif
        <div class="@if(has_post_thumbnail()) col-md-8 @else col-md-12 @endif">
            <a href="{{ get_permalink() }}">
                <header class="mb-1">
                    @include('partials/entry-cat')
                    <h2 class="entry-title mt-0 mb-0">{{ get_the_title() }}</h2>
                    @include('partials/entry-meta')
                </header>
                <div class="entry-summary">
                    @php(the_excerpt())
                </div>
            </a>
        </div>
    </div>
</article>
