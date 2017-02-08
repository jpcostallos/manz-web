<article @php(post_class())>
    <a href="{{ get_permalink() }}">
        <div class="row m-0">
            <div class="col-md-8">
                <header class="pt-1">
                    <h2 class="entry-title mt-0">{{ get_the_title() }}</h2>
                    @include('partials/entry-meta')
                </header>
                <div class="entry-summary">
                    @php(the_excerpt())
                </div>
            </div>
            <div class="col-md-4 pr-0">
                <img class="img-fluid" src="{{the_post_thumbnail_url()}}" alt="">
            </div>
        </div>
    </a>
</article>
