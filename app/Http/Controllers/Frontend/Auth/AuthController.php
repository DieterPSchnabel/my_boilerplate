<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\Frontend\Access\User\UserRepositoryContract;
use App\Services\Access\Traits\AuthenticatesAndRegistersUsers;
use App\Services\Access\Traits\ConfirmUsers;
use App\Services\Access\Traits\UseSocialite;
use Illuminate\Foundation\Auth\ThrottlesLogins;

/**
 * Class AuthController.
 */
class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ConfirmUsers, ThrottlesLogins, UseSocialite;

    /**
     * @param UserRepositoryContract $user
     */
    public function __construct(UserRepositoryContract $user)
    {
        //Where to redirect after logging out
        $this->redirectAfterLogout = route('frontend.index');

        $this->user = $user;
    }

    /**
     * Where to redirect users after login / registration.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (access()->allow('view-backend')) {
            return route('admin.dashboard');
        }

        return route('frontend.user.dashboard');
    }
}
