<?php

namespace App\Http\Controllers;

use App\Services\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;


class  BookController extends Controller
{

    use ApiResponser;

    public $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function index()
    {
        return $this->successResponse($this->bookService->obtainBooks());

    }


}
