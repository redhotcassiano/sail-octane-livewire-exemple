<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Transfer extends Component
{
    public $result = null;
    public $code;
    public $email;

    public function mount($code, $email) {
        $this->code = $code;
        $this->email = $email;
    }

    public function render()
    {
        return view('livewire.transfer');
    }

    public function setPing() {
        $response = Http::withHeaders([
            'X-Requested-With' => 'XMLHttpRequest',
            'csrf-token' => csrf_token()
        ])->get(env('APP_URL').'/api/ping');

        $this->result = $response->body();
    }
}
