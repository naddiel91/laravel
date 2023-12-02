@extends('layout')
<section class="">
    <div class="row storeHeaderCtn">
        <div class="col-12">
            <h1 class="text-center">{{$fruit->flavor}}</h1>
        </div>  
    </div>
    <div class="row">
        <div class="offset-2 col-8 text-center">
            <div class="col-4">
                <figure>
                    <img class="img" src="https://ik.imagekit.io/leravigxl/blueberries.jpg?updatedAt=1701528217470" alt="" width="400" height="400">
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