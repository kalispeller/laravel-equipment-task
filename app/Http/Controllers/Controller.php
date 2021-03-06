<?php

namespace App\Http\Controllers;

use App\Repositories\Repository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected Repository $repository;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->repository = $this->newRepository();
    }

    /**
     * @return mixed
     */
    abstract protected function newRepository();
}
