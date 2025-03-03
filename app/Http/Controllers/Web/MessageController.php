<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Message\StoreRequest;
use App\Models\Message;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class MessageController extends Controller
{
    public function create(): View
    {
        return view('message.create');
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        Message::create($data);

        return redirect()->route('messages.thanks');
    }

    public function thanks(): View
    {
        return view('message.thanks');
    }
}
