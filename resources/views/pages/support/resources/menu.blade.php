<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mx-auto mb-5">
	<ul class="p-0 list-style-none">
		<a href="{{route('support.getting-started')}}" class="link-dark">
			<li class="mb-2 {{$getting_started or null}}">Getting started</li>
		</a>
		<a href="{{route('support.faq')}}" class="link-dark">
			<li class="mb-2 {{$faq or null}}">FAQ</li>
		</a>
		<a href="{{route('support.courses')}}" class="link-dark">
			<li class="mb-2 {{$courses or null}}">Courses</li>
		</a>
		<a href="{{route('support.membership')}}" class="link-dark">
			<li class="mb-2 {{$membership or null}}">Membership</li>
		</a>
		<a href="{{route('support.profile')}}" class="link-dark">
			<li class="mb-2 {{$profile or null}}">Profile</li>
		</a>
		<a href="{{route('support.account')}}" class="link-dark">
			<li class="mb-2 {{$account or null}}">Your account</li>
		</a>
		<a href="{{route('support.partnership')}}" class="link-dark">
			<li class="mb-2 {{$partnership or null}}">Partnership</li>
		</a>
		<a href="{{route('support.policy')}}" class="link-dark">
			<li class="mb-2 {{$policy or null}}">Privacy policy</li>
		</a>
		<a href="{{route('support.terms')}}" class="link-dark">
			<li class="mb-2 {{$terms or null}}">Terms & conditions</li>
		</a>
	</ul>
</div>