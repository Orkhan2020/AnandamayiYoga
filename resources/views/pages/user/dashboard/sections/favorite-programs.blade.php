@component('pages/user/dashboard/sections/layout', ['title' => __('My Favorite Programs')])

	@slot('elements')
		@if(!$favoritePrograms->isEmpty())

			@foreach($favoritePrograms->take($limit) as $program)
	            @include('components/program/card', ['program' => $program])

			    @if($loop->last && !is_null($limit) && $limit < count($favoritePrograms))
			    	<a href="{{route('user.favorites')}}" class="btn btn-block btn-light text-muted mt-2">
			    		<i class="fas mr-2 fa-plus"></i>@lang('VIEW ALL')
			    	</a>
			    @endif
			@endforeach

		@else
			<div>
				<p class="m-4 text-muted">
					<i class="fas mr-2 text-warning fa-exclamation-circle"></i>@lang('You haven\'t selected any favorites yet.') 
					<a href="{{route('discover.programs.index')}}" class="link-default">@lang('Browse')</a> @lang('through our collection.')
				</p>
			</div>
		@endif
	@endslot

@endcomponent
