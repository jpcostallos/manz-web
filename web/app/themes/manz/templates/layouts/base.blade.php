<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('partials.header')
    <div class="wrap container" role="document">
      <div class="content row">
        @if (App\display_sidebar())
          <div class="col-md-9">
            <main class="main p-2">
              @yield('content')
            </main>
          </div>
          <div class="col-md-3">
            <aside class="sidebar p-2">
              @include('partials.sidebar')
            </aside>
          </div>
        @else
          <main class="main col p-2">
            @yield('content')
          </main>
        @endif
      </div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
