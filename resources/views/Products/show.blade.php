<x-layout>
    <x-navbar/>
    <div class="background">
    <div class="container-fluid myhead-show">
        <div class="row text-center align-items-center h-100">
            <div class="col-12 d-flex justify-content-evenly flex-column align-items-center h-100">
                <div class="d-flex align-items-end h-50">
                    <h1 class="title-show">{{ __('ui.lookDetails') }}: "{{$product->title}}" </h1>
                </div>
                <div class="d-flex align-items-end h-50">
                    <a href="#section-show"><button class="btn-show-head mb-5"><i class="bi bi-arrow-down text-white"></i></button></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-5" id="section-show">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6 d-flex justify-content-center mb-5">
                <div id="carouselExample" class="carousel slide">
                    @if($product->images->isNotEmpty())
                    <div class="carousel-inner">
                        @foreach($product->images as $image)
                        <div class="position-relative">
                            <div class="carousel-item @if($loop->first)active @endif">
                                <img src="{{$image->getUrl(300,300)}}" class="img-show" alt="card">
                                <div class="carousel-gradient">
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                    @else
                    <div class="carousel-inner">
                        <div class="position-relative">

                            <div class="carousel-item active ">
                                <img src="{{!$product->images()->get()->isEmpty() ? $product->images()->first()->getUrl(300,300) : 'http://picsum.photos/300' }}" class="img-show" alt="card" width="100">
                        

                                <div class="carousel-gradient">
                                </div>
                            </div>

                        </div>

                        <div class="position-relative">

                            <div class="carousel-item ">
                                <img src="{{!$product->images()->get()->isEmpty() ? $product->images()->first()->getUrl(300,300) : 'http://picsum.photos/300' }}" class="img-show" alt="card" width="100">

                                <div class="carousel-gradient">
                                </div>
                            </div>

                        </div>

                        <div class="position-relative">
                            <div class="carousel-item ">
                                <img src="{{!$product->images()->get()->isEmpty() ? $product->images()->first()->getUrl(300,300) : 'http://picsum.photos/300' }}" class="img-show" alt="card" width="100">

                                <div class="carousel-gradient">
                                </div>
                            </div>
                        </div> 
                    </div>
                    @endif
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="card-body-show">
                <strong><h5 class="title-show-card" style="color: var(--acc2)">{{ __('ui.titolo') }} : {{$product->title}}</h5></strong>
                <strong><span class="text-show-card" style="color: var(--acc2)">{{ __('ui.descrizione') }} :</span></strong> <p>{{$product->body}}</p>
                <strong><span class="text-show-card" style="color: var(--acc2)">{{ __('ui.prezzo') }} :</span></strong><p> {{$product->price}}</p>
                <strong><span class="text-show-card" style="color: var(--acc2)">{{ __('ui.pubblicato') }} : </span></strong><p> {{ $product->created_at->format('d/m/Y') }}</p>
                <strong><span class="text-show-card" style="color: var(--acc2)">{{ __('ui.Autor') }}: </span></strong><p>{{$product->user->name ?? ''}}</p>
            </div>   
                    
                </div>
            </div>
        </div>
        
        
    </div>
    </x-layout>

