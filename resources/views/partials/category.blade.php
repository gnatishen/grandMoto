<?php $class = 'dropdown-submenu level-'.$category['level']; ?>
@if ( $category['level'] > 1 )
	<?php $class = 'dropdown-submenu level-'.$category['level']; ?>

@endif

<li class="{{ $class }}">

    @inject('url', 'App\Http\Controllers\CategoryController')
                        
	<a href="/{!! $url->buildUrl($category['id']) !!}" class="dropdown-toggle">{{ $category['title'] }} @if ( count($category['children']) > 0 ) <span class="caret"></span> @endif </a>

	@if ( count($category['children']) > 0 )
	    <ul class="dropdown-menu" role="menu">
	    @foreach($category['children'] as $category)
	        @include('partials.category', $category)
	    @endforeach
	    </ul>
	@endif

</li>