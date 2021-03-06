<?php

namespace App\Http\Controllers\Users;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationsController extends Controller
{
	public function index()
	{
		if (request()->wantsJson())
			return auth()->user()->notifications;

		return view('pages/user/notifications/index');
	}

    public function markRead($notificationId)
    {
    	auth()->user()->notifications()->findOrFail($notificationId)->markAsRead();
    }

    public function markAllRead()
    {
        auth()->user()->notifications->markAsRead();
        return back();
    }

    public function markUnread($notificationId)
    {
    	auth()->user()->notifications()->findOrFail($notificationId)->update(['read_at' => null]);
    }
}
