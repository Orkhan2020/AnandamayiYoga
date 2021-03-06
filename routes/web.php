<?php

App\Http\Controllers\Auth\GateController::auth();

getRoutes([
	'api.webhooks|services',
	'admin.index',
	'auth.users|admin',
	'user.index',
	'guest.about|courses|discover|feedback|home|reads|subscriptions|support|teachers|localization'
]);

Route::post('/release', function() {
	\Mail::to('contact@anandamayiyoga.com')->send(new \App\Mail\TempMail(request('notify_email')));

	return redirect()->back()->with('status', 'Nós avisaremos quando o conteúdo estiver pronto!');

})->name('notify');
