<div class="card-custom mb-card"> 
    <div class="card-front container-fluid ">
        <div class="row h-100 position-relative">
            <div class="col-12 h-100 p-0 card-img-mb d-flex flex-column justify-content-end align-items-center text-center" style="background:linear-gradient(to bottom,transparent , rgb(0, 0, 0)), url({{!$product->images()->get()->isEmpty() ? $product->images()->first()->getUrl(300,300) : 'http://picsum.photos/300' }})">
                <span class="price" style="--price:'{{$product->price}} €'"></span>
                {{-- <img src="https://picsum.photos/200" alt="" class="card-img"> --}}
                <div class="mb-4">
                <h3 class="card-title px-3 text-white mb-2">{{$product->title}}</h3>
                <a href="{{route('Products.show',compact('product'))}}" class="btn btn-card text-white">{{ __('ui.Details') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>