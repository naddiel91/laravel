@extends('layout')
<section>
    <div class="row storeHeaderCtn">
        <div class="col-12">
            <h1 class="text-center">My Store</h1>
        </div>        
    </div>
    
    <section class="storeTableCtn row">
        <div class="col-12">
            <h5 class="text-left offset-2">in stock...</h5>
            <div class="offset-2 col-8">
                <table class="table text-center">
                    <tr>               
                        <th></th>         
                        <th class="col">Fruit</th>
                        <th class="col">Price</th>
                        <th class="col">Amount</th>
                        <th></th>
                    </tr>            
                    @foreach ($store as $item)
                    <tr class="">
                        <td>{{$item->id}}</td>
                        <td><a href="{{ route('findFlavor', ['id'=>$item->id]) }}">{{$item->flavor}}</a></td>
                        <td>${{$item->price}}</td>
                        <td>{{$item->amount}}kg</td>
                        <td><a href="{{ route('deleteFlavor', ['id'=>$item->id]) }}">delete</a></td>
                    </tr>                
                    @endforeach       
                    {{  $store->links() }}         
                </table>
            </div>
        </div>        
    </section>
</section>

