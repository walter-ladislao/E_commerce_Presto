<x-layout>
    <x-navbar/>
    <div class="container-fluid revisor">
        <div class="row h-100">
            <div class="col-12 col-md-12 d-flex justify-content-center align-item-center revisor-col">
                <h1 class="revisor-title text-center">
                    {{$product_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    {{-- <div class="col-12 mt-5 d-flex justify-content-evenly align-items-center ">
        <button type="" class="btn btn-dark shadow ">Annunci accettati </button>
        
        <button type="" class="btn btn-dark shadow ">Annunci rifiutati </button>
    </div> --}}
    
    @if ($product_to_check)
    <div class="container container-carousel">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mb-5">
                <div>
                    <div id="carouselExample" class="carousel slide" >
                        @if($product_to_check->images->isNotEmpty())
                        <div class="carousel-inner">
                            @foreach($product_to_check->images as $image)
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
                                
                                <div class="carousel-item active">
                                    <img src="http://picsum.photos/300" class="img-show" alt="card" width="100">
                                    
                                    
                                    <div class="carousel-gradient">
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="position-relative">
                                
                                <div class="carousel-item">
                                    <img src="http://picsum.photos/300" class="img-show" alt="card" width="100">
                                    
                                    
                                    <div class="carousel-gradient">
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="position-relative">
                                
                                <div class="carousel-item">
                                    <img src="http://picsum.photos/300" class="img-show" alt="card" width="100">
                                    
                                    
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
            </div>
            <div class="col-11 col-md-6  card-body-revisor  p-3">
                <div >
                    
                    <strong><h5 class=" text-center tc-accent" style="color: var(--acc2)">{{$product_to_check->title}}</h5></strong>
                    <strong><span class="" style="color: var(--acc2)">Descrizione :</strong></span> <p>{{$product_to_check->body}}</p>
                    <strong><span class="" style="color: var(--acc2)">Prezzo :</strong></span> <p>{{$product_to_check->price}}€</p>
                    <strong><span class="" style="color: var(--acc2)">Pubblicato :</strong></span> <p>{{ $product_to_check->created_at->format('d/m/Y') }}</p>
                    <strong><span class="" style="color: var(--acc2)">Autore:</strong></span> <p>{{$product_to_check->user->name ?? ''}}</p>
                    
                    <div class="d-flex justify-content-evenly align-items-center ">
                        
                        <form class="" action="{{route('revisor.accept_product', ['product'=>$product_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn-revisor-acc shadow m-0"><strong>Accetta</strong></button>
                        </form>
                        @if($product_to_check)
                        <form action="{{route('revisor.reject_product', ['product'=>$product_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn-revisor-dec shadow m-0"><strong>Rifiuta</strong></button>
                        </form>
                        @endif
                        
                    </div>
                     
                    <div class="d-flex justify-content-evenly align-items-center ">
                        
                        <form class="" action="{{route('revisor.accept_product', ['product'=>$product_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn-revisor-acc shadow m-0"><strong>Accetta</strong></button>
                        </form>
                        @if($product_to_check)
                        <form action="{{route('revisor.reject_product', ['product'=>$product_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn-revisor-dec shadow m-0"><strong>Rifiuta</strong></button>
                        </form>
                        @endif
                        
                    </div>
                </div>
                
            </div>
           
            <div class="col-12 col-md-6  align-items-center justify-content-center d-flex">
                @if (session('message'))
                <div class="alert mt-5 alert-confirmed align-items-center justify-content-center d-flex">
                    {{ session('message') }}
                </div>
                @endif
            </div>
        </div>
    </div>
    
    
    @endif
    <div class="container mt-5">
        
        <div class="row justify-content-around align-items-center ">
            @if($product_to_check)
            
            @foreach($product_to_check->images as $image)
            <div class="col-11 col-md-5 card-body-revisor mr-3 mb-5">
                <h5 class="tc-accent mt-3 align-items-center text-center">Tags</h5>
                <div class="p-2 ">
                    @if ($image->labels)
                    @foreach ($image->labels as $label)
                    <div class="container align-items-center justify-content-center d-flex">
                        <div class="row">
                            <div class="col-12">
                                <strong><p class="tc-tags" >{{$label}}/</p></strong>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                    @endif
                </div>
            </div>
            
                <div class="col-11 col-md-5 card-body-revisor">
                    <div class="">
                        <strong><h5 class="tc-accent">Revisione Immagini</h5></strong>
                        <strong> <p>Adulti : <span class="{{$image->adult}}"></span></p></strong>
                        <strong><p>Satira : <span class="{{$image->spoof}}"></span></p></strong>
                        <strong><p>Medicina : <span class="{{$image->medical}}"></span></p></strong>
                        <strong><p>Violenza : <span class="{{$image->violence}}"></span></p></strong>
                        <strong><p>Contenuto Ammiccante : <span class="{{$image->racy}}"></span></p>  </strong>        
                    </div>
                </div>
               

            @endforeach
            
            
            @endif
            
        </div>
    </div>
    <div class="container">
    <div class="row btn-list-mb">         
        <div class="col-12 col-md-12  d-flex align-items-end justify-content-center my-5">                             
            
            @if($product_checked)
            <form action="{{route('revisor.resume_product', ['product'=>$product_checked])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="Btn-revisor "> 
                    <i class="bi bi-arrow-left-short text-white m-0 p-0 sign-revisor"></i>
                    <div class="text-revisor">Annulla
                    </div>
                </button>
            </form>
            @endif
        </div>
    </div>
</div>
    
    
    
    
    
    {{-- @if (!$product_to_check)
        <div class="col-12 col-md-6">
            <form action="{{route('revisor.resume_product', ['product'=>$product_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-warning shadow">Torna indietro</button>
            </form>
        </div>
        @endif --}}
        
        
    </x-layout>