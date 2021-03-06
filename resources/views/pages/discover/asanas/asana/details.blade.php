<div class="text-muted mb-3">
    <div class="d-flex align-items-center">
        <h5 class="mr-3"><a class="link-none" href="#"><i class="t-2 fab fa-facebook-f text-facebook"></i></a></h5>
        <h5 class="mr-3"><a class="link-none" href="#"><i class="t-2 fab fa-twitter text-twitter"></i></a></h5>
        <h5 class="mr-3"><a class="link-none" href="#"><i class="t-2 fab fa-instagram text-instagram"></i></a></h5>
    </div>
</div>

@if($asana->also_known_as)
<p class="text-muted m-0"><small>@lang('Also known as')</small></p>
<p>{{$asana->also_known_as}}</p>
@endif

@if($asana->etymology)
<p class="text-muted m-0"><small>@lang('Etymology')</small></p>
<p>{{$asana->etymology}}</p>
@endif

<p class="text-muted m-0"><small>@lang('Level')</small></p>
<p>{{$asana->levelsToString()}}</p>

<p class="text-muted m-0"><small>@lang('Category')</small></p>
<p>{{$asana->types->implode('name', ', ')}}{{$asana->subtypes()->exists() ? ' / '.$asana->subtypes->implode('name', ', ') : null}}</p>

@if($asana->steps()->exists())
    <hr class="my-4">
    <p><strong>@lang('Step-by-step instructions')</strong></p>
    @foreach($asana->steps as $step)
    <div class="d-flex mb-4">
        <div><h1 class="mr-4 text-blue" style="opacity: 0.5; font-size: 2.5em"><strong>{{$loop->iteration}}</strong></h1></div>
        <div><p class="m-0">{{$step->content}}</p></div>
    </div>
    @endforeach
@endif

@if($asana->benefits()->exists())
    <hr class="my-4">
    <p><strong>@lang('The main benefits of this asana are')</strong></p>
    <ul>
    @foreach($asana->benefits as $benefit)
    <li style="list-style-type: disc" class="mb-2">{{$benefit->content}}</li>
    @endforeach
    </ul>
@endif
