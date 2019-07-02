<?php

declare(strict_types = 1);

namespace App\Repositories;

use App\Contact;

class ContactRepository
{
    /**
     * @var Contact
     */
    private $model;

    /**
     * @param Contact $model
     */
    public function __construct(Contact $model)
    {
        $this->model = $model;
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginate()
    {
        return $this->model->paginate();
    }
}
