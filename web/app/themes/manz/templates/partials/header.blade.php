<header class="banner p-1 mb-2">
  <div class="container">
    <nav class="nav-primary navbar navbar-toggleable-md  p-0">
      <a class="brand mr-auto py-1" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
