<?php

namespace App\Http\Controllers;

use App\Repositories\ContactRepository;
use Inertia\Inertia;

class Contacts extends Controller
{
    /**
     * @var ContactRepository
     */
    private $contactRepository;

    /**
     * @param ContactRepository $contactRepository
     */
    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @return \Inertia\Response
     */
    public function __invoke()
    {
        return Inertia::render('Contacts', $this->props());
    }

    /**
     * @return array
     */
    protected function props()
    {
        return [
            'contacts' => $this->contactRepository->paginate()
        ];
    }
}
