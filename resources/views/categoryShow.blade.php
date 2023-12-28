<x-layout>
    <x-navbar/>
    <div class="background">
    <div class="container-fluid myhead">
        <div class="row h-100 align-items-center text-center">
            <div class="col-12">
                <h1 class="title-show">Esplora la categoria "{{$category->name}}"</h1>
            </div>
        </div>
    </div>
    
    
    <div class="container my-5 py-5">
        <div class="row justify-content-around">
                    @forelse($category->products as $product)
                    <div class="col-12 col-md-3 d-flex justify-content-center mt-4">
                        <x-card :product="$product"/>
                        <x-card-mobile :product="$product" class="mb-card text-center"/>
                        
                    </div>
                        @empty
                        <div class="col-12">
                            <p>Non sono presenti annunci per questa categoria</p>
                            <p>Pubblicane uno : <a href="{{route('Products.create')}}" class="btn-category-crea ms-3">Nuovo annuncio</a> </p>
                        </div>
                        @endforelse
        </div>
    </div>

</x-layout>