<div class="top-header-area d-flex p-2 align-items-center">
	<div class="container-fluid h-100">
		<div class="row h-100 align-items-center">
			<div class="col-5">
				<div class="top-header-content">
					<p class="mb-0">{{__('Welcome to KodeKlinik')}}</p>
				</div>
			</div>
			<div class="col-7 ">
				
				<div class="top-header-content text-right ">
					<p class="mb-0">
						
						<i class="fa fa-phone" aria-hidden="true"></i> Call us: (+254)-57-502-3851
						<span class="mx-2"></span> |
						<span class="mx-2"></span>
						<a href="{{route(Route::currentRouteName(),['locale'=>'en',Route::current()->parameter('id')])}}" class="lang_uk"></a>
						<a href="{{route(Route::currentRouteName(),['locale'=>'it',Route::current()->parameter('id')])}}" class="lang_it"></a>
						<a href="{{route(Route::currentRouteName(),['locale'=>'fr',Route::current()->parameter('id')])}}" class="lang_fr"></a>
						
						<span class="mx-2"></span> |
						<span class="mx-2"></span>
						<a href="{{route('admin',app()->getLocale())}}" class="admin-link">{{__('Admin Area')}}</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>