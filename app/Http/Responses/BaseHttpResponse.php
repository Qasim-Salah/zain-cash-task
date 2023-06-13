<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\URL;

class BaseHttpResponse implements Responsable

{
    protected $previousUrl = '';
    protected $nextUrl = '';

    public function toResponse($request)
    {
        if ($request->input('submit') === 'save') {
            return redirect($this->previousUrl);
        } elseif (!empty($this->nextUrl)) {
            return redirect($this->nextUrl);
        }
        return redirect(URL::previous());
    }

    public function setPreviousUrl($previousUrl): self
    {
        $this->previousUrl = $previousUrl;
        return $this;
    }


    public function setNextUrl($nextUrl): self
    {
        $this->nextUrl = $nextUrl;
        return $this;
    }

}
