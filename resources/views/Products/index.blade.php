<x-layout>
    <x-navbar/>
    <div class="background">
    <div class="container-fluid myhead-annunci">
        <div class="row text-center h-100 align-items-center">
            <div class="col-12">
                <h1 class="title-show">{{ __('ui.allProducts') }}</h1>
            </div>
        </div>
    </div>
    
    
    <div class="container pt-5 pb-5">
        <div class="row justify-content-around text-center">
            @forelse ($products as $product)
            <div class="col-12 col-md-3 mt-4 d-flex justify-content-center">
                
                <x-card :product="$product" />
                <x-card-mobile :product="$product" class="mb-card"/>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-warning shadow">

                    <p class="lead">Non ci sono annunci per questa ricerca</p>

                </div>
            </div>
            @endforelse
        </div>
    </div>

            <div class="position-relative div-pagination">
                {{$products->links()}}
            </div>
        
</div>
</x-layout>
