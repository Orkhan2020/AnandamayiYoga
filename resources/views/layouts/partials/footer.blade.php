<footer class="position-relative" style="overflow: hidden;">

	<div class="" style="
	    width: 200%;
	    height: 420px;
	    position: absolute;
	    top: -368px;
	    left:  50%;
	    transform: translateX(-50%);
	    background:  white;
	    border-radius: 100%;
	    z-index: 1;
	"></div>
	<img class="d-none d-sm-flex" src="{{cloud('app/misc/lotus-pattern.png')}}" style="
	width: 80%;
    position: absolute;
    top: -132px;
    right: 0;
    opacity: .05;">
	<div class="container py-5 mt-5">
		<div class="row pb-2">
			<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12 mb-4">
				<h3 class="text-white mb-1" style="font-family: yogafont"><strong>Anandamayi<span style="opacity: 0.6" class="ml-1">Yoga</span></strong></h3>
				<p class="text-white" style="max-width: 400px; opacity: .4"><small>@lang('Online yoga and meditation that is right for you. In as little as two hours per week, you can improve your physical and mental health through Yoga.')</small></p>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4">
				<p class="text-white m-0"><strong>@lang('Connect with us')</strong></p>
				<div class="d-flex align-items-center">
					<h4 class="m-2 text-white" style="opacity: .5"><a class="link-none" href="#"><i class="t-2 fab fa-facebook-f"></i></a></h4>
					<h4 class="m-2 text-white" style="opacity: .5"><a class="link-none" href="#"><i class="t-2 fab fa-youtube"></i></a></h4>
					<h4 class="m-2 text-white" style="opacity: .5"><a class="link-none" href="#"><i class="t-2 fab fa-twitter"></i></a></h4>
					<h4 class="m-2 text-white" style="opacity: .5"><a class="link-none" href="#"><i class="t-2 fab fa-instagram"></i></a></h4>
					<h4 class="m-2 text-white" style="opacity: .5"><a class="link-none" href="#"><i class="t-2 fab fa-pinterest"></i></a></h4>
					<h4 class="m-2 text-white" style="opacity: .5"><a class="link-none" href="#"><i class="t-2 fab fa-google-plus-g"></i></a></h4>
				</div>
			</div>
		</div>
		<div class="row mt-4 py-2 d-none d-sm-flex">
			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
				<p class="m-0 text-white text-uppercase"><small><strong>@lang('About us')</strong></small></p>
				<ul class="p-0 list-style-none">
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('about.our-platform')}}">
							<small>AnandamayiYoga</small>
						</a>								
					</li>
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('about.anandamayi')}}">
							<small>Ali Anandamayi</small>
						</a>
					</li>
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('support.membership')}}">
							<small>@lang('Eranthus books')</small>
						</a>
					</li>
				</ul>
			</div>
			
			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
				<p class="m-0 text-white text-uppercase"><small><strong>@lang('Discover')</strong></small></p>
				<ul class="p-0 list-style-none">
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('discover.classes.index')}}">
							<small>@lang('Classes')</small>
						</a>
					</li>
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('discover.programs.index')}}">
							<small>@lang('Programs')</small>
						</a>
					</li>
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('courses.index')}}">
							<small>@lang('Courses')</small>
						</a>
					</li>
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('discover.asanas.index')}}">
							<small>@lang('Glossary of Asanas')</small>
						</a>
					</li>
				</ul>
			</div>

			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
				<p class="m-0 text-white text-uppercase"><small><strong>@lang('Reads')</strong></small></p>
				<ul class="p-0 list-style-none">
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('support.membership')}}">
							<small>@lang('Learning about Yoga')</small>
						</a>
					</li>
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('reads.books')}}">
							<small>@lang('Books')</small>
						</a>								
					</li>
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('reads.articles.index')}}">
							<small>@lang('Articles')</small>
						</a>
					</li>
				</ul>
			</div>

			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
				<p class="m-0 text-white text-uppercase"><small><strong>@lang('Membership')</strong></small></p>
				<ul class="p-0 list-style-none">
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('support.membership')}}">
							<small>@lang('My Yoga Routine')</small>
						</a>
					</li>
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('support.account')}}">
							<small>@lang('Account Settings')</small>
						</a>
					</li>
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('support.policy')}}">
							<small>@lang('Billing')</small>
						</a>
					</li>
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('support.membership')}}">
							<small>@lang('Invoices')</small>
						</a>
					</li>
				</ul>
			</div>

			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
				<p class="m-0 text-white text-uppercase"><small><strong>@lang('Services')</strong></small></p>
				<ul class="p-0 list-style-none">
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('support.membership')}}">
							<small>@lang('Site Map')</small>
						</a>
					</li>
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('support.policy')}}">
							<small>@lang('Privacy Policy')</small>
						</a>
					</li>
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('support.terms')}}">
							<small>@lang('Terms & Conditions')</small>
						</a>								
					</li>
				</ul>
			</div>

			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
				<p class="m-0 text-white text-uppercase"><small><strong>@lang('Support')</strong></small></p>
				<ul class="p-0 list-style-none">
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('support.index')}}">
							<small>@lang('Resources')</small>
						</a>								
					</li>
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('support.faq')}}">
							<small>@lang('FAQ')</small>
						</a>
					</li>
					<li>
						<a class="text-white" style="opacity: .5" href="{{route('support.contact.show')}}">
							<small>@lang('Contact us')</small>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="text-white position-relative">
		<div class="container py-2">
			<div class="d-flex justify-content-between">
				<p class="m-0 text-left" style="opacity: .5"><small>Copyright ©{{date('Y')}} Anandamayi Yoga</small></p>
				<div class="d-none d-sm-flex">
					<form method="POST" action="{{route('localization.set')}}" class="mx-1">
						@csrf
						<input type="hidden" name="language" value="en">
						<button style="border: none; background: none;" type="submit" class="badge cursor-pointer text-light">EN</button>
					</form>
					<form method="POST" action="{{route('localization.set')}}" class="mx-1">
						@csrf
						<input type="hidden" name="language" value="pt">
						<button style="border: none; background: none;" type="submit" class="badge cursor-pointer text-light">PT</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</footer>
