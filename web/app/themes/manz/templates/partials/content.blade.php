  <article @php(post_class('p-2'))>
    <a href="{{ get_permalink() }}">
      <header>
      <h2 class="entry-title mt-0">{{ get_the_title() }}</h2>
      @include('partials/entry-meta')
    </header>
    <div class="entry-summary">
      @php(the_excerpt())
    </div>
  </a>
</article>
