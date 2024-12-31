<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;

#[Layout('layouts.auth-login')]
class Login extends Component
{
    public $email = '';
    public $password = '';

    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // dd($this->email, $this->password);

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('error', 'Invalid email or password');
            return;
        }

        return $this->redirectRoute('home');
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
