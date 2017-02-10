@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials/content-single-'.get_post_type())
  @endwhile


  @php
      global $post;
      $categories = wp_get_post_terms( get_the_ID(), 'category');
      $category_posts = new WP_Query( array(
        'cat'          => $categories[0]->term_id,
        'post__not_in' => array( get_the_ID() ),
    ) );
  @endphp

  @while($category_posts->have_posts()) @php($category_posts->the_post())
      <article class="p-2">
          <div class="row m-0">
              <h3>Read More:</h3>
          </div>
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
                          <h4 class="entry-title mt-0 mb-0">{{ get_the_title() }}</h4>
                          @include('partials/entry-meta')
                      </header>
                      <div class="entry-summary">
                          @php(the_excerpt())
                      </div>
                  </a>
              </div>
          </div>
      </article>
  @endwhile
@endsection

