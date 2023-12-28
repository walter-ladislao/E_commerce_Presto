<div class="card-custom pc-card">
    <div class="card-custom-inner">
        <div class="card-front container-fluid ">
            <div class="row h-100 position-relative">
                <div class="col-12 h-100 p-0">
                    <span class="price" style="--price:'{{$product->price}} €'"></span>
                    <img src="{{!$product->images()->get()->isEmpty() ? $product->images()->first()->getUrl(300,300) : 'http://picsum.photos/300' }}" alt=""  class="card-img">
                    <div class="card-gradient">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card-back d-flex flex-column justify-content-between align-items-center ">
            <span class="price"></span>
            <h3 class="card-title mt-5 pt-3">{{$product->title}}</h3>
            <a href="{{route('Products.show',compact('product'))}}" class="btn btn-card ">{{ __('ui.Details') }}</a>
            <div class="d-flex flex-column justify-content-center mb-4">
                <strong><p class="card-text p-0 mb-1 ">{{ __('ui.Autor') }}: {{$product->user->name ?? ''}}</p></strong>
                <strong><p class="card-footer p-0 m-0">{{ $product->created_at->format('d/m/Y') }}</p></strong>     
            </div>    
        </div>
    </div>
</div>
