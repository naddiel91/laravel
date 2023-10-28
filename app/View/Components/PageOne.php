<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class PageOne extends Component
{    
    public string $prop1;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $name='John', public string $lastName='Snow')
    {
      $this->prop1 = "prop1";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.page-one');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function number(int $number): string
    {
        return $number % 2 == 0 ? "$number is even" : "$number is odd";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function success()
    {
        $to = "naddiel.sanchez@gmail.com";
        $subject = "Hello, World!";
        $message = "This is a test email sent from PHP.";
        $headers = "From: Laravel v10";

        mail($to, $subject, $message, $headers);
        
        return '<h1>Thank you for joining us<h1/>';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function login()
    {
        return '<h1>Please login first<h1/>';
    }
}
