<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class Test extends Component
{
    public string $abc;

    public function __construct(Request $request)
    {
        $this->abc = "abc";
    }

    public function render(): \Closure
    {
        return function (array &$data) {
            $data['options'] = "fdfssd";

            return view('components.test', $data)->render();
        };
    }
}
