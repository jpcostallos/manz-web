<article @php(post_class('p-2'))>
  <header class="mb-1">
    <h2 class="entry-title mt-0 mb-0">{{ get_the_title() }}</h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php(the_content())
  </div>
  <footer>
    {!! wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
{{--  @php(comments_template('/templates/partials/comments.blade.php'))--}}
</article>
