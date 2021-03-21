<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;


class  AuthorController extends Controller
{

    use ApiResponser;

    public $authorService;

    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index()
    {
        return $this->successResponse($this->authorService->obtainAuthors());
    }



}
