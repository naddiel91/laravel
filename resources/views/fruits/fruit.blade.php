@extends('layout')
<section class="">
    <div class="row storeHeaderCtn">
        <div class="col-12">
            <h1 class="text-center">{{$fruit->flavor}} --- <a href="{{route('allproducts')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                  </svg>
            </a></h1>
        </div>  
    </div>
    <div class="row">
        <div class="offset-2 col-8 text-center">
            <div class="col-4">
                <figure>
                    <img class="img" src="{{$fruit->photo}}" alt="" width="400" height="400">
                </figure>
            </div>      
            <div class="col-2">
                <p>${{$fruit->price}}</p>
                <p>{{$fruit->amount}}kg</p>
            </div>
            <div class="col-4">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci sint dicta provident recusandae reprehenderit porro.</p>
            </div>
        </div>
    </div>
</section>