<section id="scroll-mark" class="container py-4">
    <div class="row my-3">
        <div class="col-12">
            <p class="text-blue">
                <a href="{{route('discover.asanas.index')}}" class="link-none">
                    <i class="fas mr-2 fa-long-arrow-alt-left"></i>@lang('back to all asanas')
                </a>
            </p>
        </div>
    	<div class="col-lg-4 col-md-6 col-sm-10 col-12">

            <figure class="figure cursor-pointer" title="@lang('Click to enlarge')" data-toggle="modal" data-target=".bd-example-modal-lg">
              <img src="{{cloud($asana->image_path)}}" class="figure-img img-fluid rounded" >
              <figcaption class="figure-caption"><i class="fas fa-search-plus mr-2"></i>@lang('Click to enlarge')</figcaption>
            </figure>

            @if($asana->video_path)
    		<div class="embed-responsive embed-responsive-16by9 mb-2 border rounded">
    			<video controls preload="auto" controlsList="nodownload">
    				<source src="{{cloud($asana->video_path)}}" type="video/mp4">
				</video>
			</div>
            @endif
    	</div>
    	<div class="col-lg-8 col-md-6 col-12">
            <div class="mb-4 d-flex align-items-start">
                <div class="mr-2">
                    <h2 class="mb-1">{{$asana->name}}</h2>
            		<h3 class="lead">{{$asana->sanskrit}}</h3>
                </div>
                @auth
                
                @include('components/icons/heart-action', [
                    'icon' => $asana->isFavorited() ? 'fas' : 'far',
                    'favorited_id' => $asana->id,
                    'favorited_type' => get_class($asana)])

                @endauth
            </div>

            @include('pages/discover/asanas/asana/details')
            @include('components/feedback/hands')
    	
        </div>
    </div>

    @include('pages/discover/asanas/asana/image-modal')
</section>

