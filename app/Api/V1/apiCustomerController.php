<?php

namespace App\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Customer\Repositories\CustomerRepository;
use App\Issue\Notification\IssueCreated;
use App\Issue\Request\IssueRequest;
use App\Issue\Issue;

class apiCustomerController extends Controller
{
    private $CustomerRepository;
    
    public function __construct(CustomerRepository $CustomerRepository){
            $this->CustomerRepository=$CustomerRepository;
    }

    public function index()
    {
        
        $this->authorize('index',Issue::class);
        return $this->CustomerRepository->all();
    }

    public function create(IssueRequest $request,IssueCreated $issueCreated)
    {
        $this->authorize('create',Issue::class);
        $this->CustomerRepository->create($request->all());
        $issueCreated->toMail(auth()->user()->admins());
    }

    public function show($id)
    {
        $issue = $this->CustomerRepository->show($id);
        $this->authorize('show',$issue);
        return $issue;
    }

}