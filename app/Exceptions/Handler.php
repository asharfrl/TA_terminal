<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Validation\ValidationException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof ValidationException) {
            $errors = $exception->errors();

            if (isset($errors['email']) && in_array('The email has already been taken.', $errors['email'])) {
                return redirect()->route('register')->with('error', 'Email sudah ada. Gunakan alamat email lain.');
            }

            if (isset($errors['username']) && in_array('The username has already been taken.', $errors['username'])) {
                return redirect()->route('register')->with('error', 'Username sudah ada. Gunakan username lain.');
            }
        }

        return parent::render($request, $exception);
    }



    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
