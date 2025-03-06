<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Inertia\Response;
use Inertia\ResponseFactory;

class HomeController extends Controller
{
    public function __construct(
        private ResponseFactory $response
    ) {}

    public function __invoke(): Response
    {
        return $this->response->render('Home');
    }
}
