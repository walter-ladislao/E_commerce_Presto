<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateProduct extends Component
{

    use WithFileUploads;

    public $title;
    public $body;
    public $price;
    public $category;
    public $message;
    public $validated;
    public $temporary_images;
    public $images=[];
    // public $image;
    public $product;



    
    
    protected $rules=[
        'title'=>'required|min:4',
        'body'=>'required|min:8',
        'category'=>'required',
        'price'=>'required',
        'images.*'=>'image|max: 1024',
        'temporary_images.*'=>'image|max:1024'
    ];
    
    protected $messages= [
        'title.min'=>'Il titolo deve essere più lungo',
        'title.required'=>'Il titolo è obbligatorio',
        'body.min'=>'La descrizione deve essere almeno di 8 caratteri',
        'body.required'=>'La descrizione è obbligatoria',
        'category.required'=>'La categoria è obbligatoria',
        'price'=>'Il prezzo deve essere un numero',
        'temporary_images.required' => 'L\'immagine è richiesta',
        'temporary_images.*.image' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'L\'immagine deve essere massimo di 1mb',
        'images.image'=>'L\'immagine deve essere un immagine',
        'images.max'=>'L\'immagine deve essere massimo di 1mb'

    ];


    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])){
            
            foreach($this->temporary_images as $image){
                $this->images[]=$image;
            }
        }
    }

    public function removeImage($key){
        if(in_array($key,array_keys($this->images))){
            unset($this->images[$key]);
        }
    }
    
    public function updated($propertyName){
        
        $this->validateOnly($propertyName);
        
    }
    
    public function store(){
        $this->validate() ;
        $this->product = Category::find($this->category)->products()->create([
            'title'=>$this->title,
            'body'=>$this->body,
            // 'category_id'=>$this->category,
            'price'=>$this->price,
            'user_id'=> Auth::user()->id
        ]
        ); 
        if(count($this->images)){
            foreach($this->images as $image){
                // $this->product->images()->create(['path'=>$image->store('images','public')]);
                $newFileName = "products/{$this->product->id}";
                $newImage = $this->product->images()->create(['path'=>$image->store($newFileName,'public')]);


                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 300, 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
                
                
                
                
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        
        
        
        $this->reset();
        
        session()->flash('message','Prodotto aggiunto correttamente');
    }
    
    
    public function render()
    {
        return view('livewire.create-product');
    }
}
