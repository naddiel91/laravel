{{-- @extends('welcome') --}}

@props(['alpha'])

<div class="row">
    <div class="col-12">
        <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
        <h1 class="text-center">Welcome to PageOne</h1>
        <div class="row">
            <p class="p col-10" {{ $attributes->filter(fn (string $value, string $name) => $name == 'John') }}>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ad illo dignissimos voluptates tenetur repellendus voluptate accusantium eveniet minima quidem, 
                officia debitis quisquam maiores unde harum nostrum deleniti illum? Dicta, suscipit.    
            </p>
            @php
                // dd($alpha);
            @endphp
        </div>        
    </div>    
</div>