<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    <div class="wrap container" role="document">
        @php(do_action('get_header'))
        @include('partials.header')
      <div class="content row">
        @if (App\display_sidebar())
          <div class="col-md-9">
            <main class="main">
              @yield('content')
            </main>
          </div>
          <div class="col-md-3">
            <aside class="sidebar p-2 mt-5 text-center text-md-left">
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
