<?php
use TGLD\Validation\Forms\Login as LoginForm;
use Laracasts\Validation\FormValidationException;

class SessionsController extends \BaseController {

    /**
     * @var TGLD\Validation\Forms\Login
     */
    protected $loginForm;

    /**
     * @param LoginForm $loginForm
     */
    public function __construct(LoginForm $loginForm)
	{
	    $this->loginForm = $loginForm;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('username', 'password');

	    $this->loginForm->validate($input); 

	    $username = Input::get('username');
		$password = Input::get('password');
		$remember = Input::has('remember') ? true : false;

		if (!Auth::attempt(array('username' => $username, 'password' => $password),$remember))
		{
			return Response::json(['success' => false, 'errors' => ['Invalid Credentials']]);   
		}

		return Response::json(['success' => true]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id = null)
	{
		Auth::logout();

		return Redirect::to('/');
	}


}
