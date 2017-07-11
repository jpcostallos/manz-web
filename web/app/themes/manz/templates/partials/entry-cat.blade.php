<div class="cat-name float-right">
    @php
        $category = get_the_category();
        $firstCategory = $category[0]->cat_name;
    @endphp
    <h5 class="mt-0 mb-0 light"><em>{{ $firstCategory }}</em></h5>
</div>