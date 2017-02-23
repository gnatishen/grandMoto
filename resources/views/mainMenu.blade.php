@if (count($categories) > 0)
    <ul class="menu nav navbar-nav">
    @foreach ($categories as $category)
        @include('partials.category', $category)
    @endforeach
    </ul>
@else
    @include('partials.category-none')
@endif