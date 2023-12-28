<div>
    
    
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <x-navbar/>
    
    <div class="container-fluid myhead-crea">
        <div class="row align-items-center h-100 text-center">
            <div class="col-12">
                <h1 class="title-show">Crea il tuo annuncio qui sotto</h1>
            </div>
        </div>
    </div>
    
    
    <div class="col-12 align-items-center justify-content-center d-flex">
    @if (session('message'))
                <div class="alert  alert-confirmed align-items-center justify-content-center d-flex">
                    {{ session('message') }}
                </div>
     @endif
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div class="container-fluid mb-5">
        <div class="row justify-content-center">
            <div class="col-12 form-body form-create-body">
                
                <form wire:submit.prevent="store">
                    
                    <div class="form-text">
                        <label for="title" class="form-label form-sub-text">Titolo</label>
                        <input type="text" id="title" wire:model.blur='title' name="title" class=" form_style form-create">
                        @error('title') <span class="error">{{ $message }}</span> @enderror 
                    </div>
                    <div class="mb-3 form-text">
                        <label for="body" class="form-label form-sub-text">Descrizione</label>
                        <textarea id="body" wire:model='body' rows="3" name="body" class=" form_style form-create @error ('body') is-invalid @enderror"></textarea>
                        @error('body')
                        {{$message}}
                        @enderror
                    </div>
                    
                    <select class="form-select form-text form_style form-create" wire:model='category' aria-label="Default select example">
                        
                        <option selected  id="category" class="form-sub-text">Categoria</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <div class="form-text">
                        <label for="price" class="form-label form-sub-text">Prezzo</label>
                        <input type="number" step="0.01" id="price" wire:model='price' name="price" class=" form_style form-create
                        @error ('price') is-invalid @enderror">
                        @error('price')
                        {{$message}}
                        @enderror
                    </div>
                    <div class='mb-3 mt-4'>
                        <input wire:model="temporary_images" type="file" name="images" multiple class="form-control form_style form-create form-file mx-auto shadow @error('temporary_images.*') is-invalid @enderror"
                        placeholder="Img"/> @error('temporary_images.*')
                        <p class="text-danger mt-2">{{$message}}</p>
                        @enderror
                    </div>
                    {{-- <input wire:model='temporary_images' type="file" name="images" multiple class="form-control shadow @error('temporary_images.*')is-invalid @enderror" placeholder="Img">
                    @error('temporary_images.*')
                    <p class="text-danger mt-2">{{$message}}</p>
                    @enderror --}}
                    @if (!empty ($images))
                    <div class="row">
                        <div class="col-12">
                        <p>Anteprima foto :</p>
                        <div class="row shadow py-4">
                        @foreach ($images as $key => $image)
                        <div class="col-12 col-md-6 d-flex justify-content-center align-items-center flex-column">
                            <div class="img-preview shadow rounded img-fluid" style="background-image: url({{$image->temporaryUrl()}}); background-size: cover; background-position: center;"></div>
                            <button type="button" class="btn-delete-photo mt-2" wire:click="removeImage({{$key}})"><i class="bi bi-trash3-fill"></i></button> 
                        </div>
                        @endforeach 
                    </div>
                </div>
                    </div>
                    @endif
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="form-btn mt-5">Inserisci</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        
    </div>
    
