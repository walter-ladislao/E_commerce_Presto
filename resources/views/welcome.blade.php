<x-layout>
    <header>
        <x-navbar />
        <div class="container-fluid overflow-hidden p-0">
            <div class="row p-0 m-0">
                <div class="col-12 p-0">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            
                            <div class="carousel-item position-relative active">
                                <div class="containerImg container-fluid watch">
                                    <div class="row h-100">
                                        <div
                                        class="col-12 col-md-12 text-white d-flex justify-content-center align-items-center flex-column">
                                        <h1 class="watch title-car text-center mt-5">
                                            {{__('ui.slang')}}
                                        </h1>
                                        
                                        
                                    </div>
                                    
                                    
                                    
                                    <div class="d-flex justify-content-end align-items-end h-50 firma flex-column">
                                        <h2 class="brand me-5">Presto.it</h2>
                                        <div class=" w-100 d-flex justify-content-center">
                                            @if (session('message'))
                                            <div class="alert alert-confirmed align-items-center justify-content-center d-flex mt-5" style="width:600px;">
                                                {{ session('message') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <img src="media/slogan.jpg" class="d-block w-100 img-car" alt="...">
                        </div>
                        
                        <div class="carousel-item position-relative">
                            <div class="containerImg container-fluid watch">
                                <div class="row h-100">
                                    <div
                                    class="col-12 col-md-12 text-white d-flex justify-content-center align-items-center">
                                    <h1 class="watch title-car text-center mb-3">
                                        {{__('ui.createproduct')}}
                                    </h1>
                                </div>
                                
                                <div class="col-12 col-md-12 d-flex justify-content-center align-items-start">
                                    <div class="zoom">
                                        <a href="{{ route('Products.create') }}"><button class="btn-crea">{{__('ui.startnow')}}</button></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <img src="media/crea.jpg" class="img-car1 d-block w-100" alt="">
                    </div>
                    
                    <div class="carousel-item position-relative">
                        <div class="containerImg2 container-fluid watch">
                            <div class="row h-100">
                                <div
                                class="col-12 col-md-12 text-white d-flex justify-content-center align-items-center">
                                <h1 class="watch title-car mb-3">
                                    {{ __('ui.ourads') }}
                                </h1>
                            </div>
                            
                            <div class="col-12 col-md-12 d-flex justify-content-center align-items-start">
                                <div class="zoom">
                                    <a href="{{ route('Products.index') }}"><button class="btn-crea">{{__('ui.showmore')}}</button></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <img src="media/annunci.jpg" class="media-annunci-header w-100 img-car1 "
                    alt="...">
                    <img class=" w-100 img-car1 media-annunci-header-giusto" src="/media/media-annunci.jpg"
                    alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button"
            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button"
        data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
</div>
</div>

</header>

<main class="mb-5">
    <h2 class="recent-h2 my-5">{{ __('ui.recentProducts') }}</h2>
    <div class="container mt-3">
        <div class="row justify-content-around text-center">
            @foreach ($products as $product)
            <div class="col-12 col-md-3 mt-4 d-flex justify-content-center">
                
                <x-card :product="$product"/>
                <x-card-mobile :product="$product" class="mb-card"/>
            </div>
            @endforeach
            {{-- @foreach ($products as $product)
                <div class="col-12 col-md-3 mt-4 d-flex justify-content-center">
                    
                    {{-- <x-card :product="$product" class="pc-card"/> --}}
                    {{-- <x-card-mobile :product="$product" class="mb-card"/>
                </div>
                @endforeach --}}
            </div>
        </div>
        
        
        <div class="container-fluid mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-end p-2">
                    <div class="card-with-us d-flex flex-column align-items-center justify-content-around">
                        <h2 class="h3-with-us">Lavora con noi</h2>
                        <a href="{{route('become.revisor')}}"><button type="submit" class="btn-with-us">Candidati ora</button></a>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 d-flex justify-content-between align-items-start flex-column p-2">
                    
                    <div class="card-with-us2 ">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 mt-2 pt-1 ">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button " data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Come posso creare un account?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Per creare subito il tuo account clicca su “registrati” e compia il form inserendo i tuoi dati, poi premi su registrati. Ricordati di scegliere una password sicura.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Come posso creare un annuncio?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Nella sezione dedicata troverai un pratico form dove inserire tutti i dettagli relativi all’oggetto che vuoi vendere. Una volta cliccato su “inserisci annuncio” io tuo prodotto sarà inviato al revisore che approverà l’annuncio.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Come posso caricare più foto?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Per caricare più foto nel tuo annuncio basterà selezionarle al momento della compilazione del form di creazione annuncio. Se ne hai aggiunta una per errore puoi eliminarla prima di inviare l’articolo.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Come posso guadagnare un’extra?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Inviaci la tua candidatura con il link che trovi qui in home, la valuteremo e ti comunicheremo subito il risultato: se entrerai a far parte del team come revisore controllerai gli annunci caricati, ricevendo un’adeguata retribuzione.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    Come posso trovare un annuncio?
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Quando inizi la tua ricerca su Presto, assicurati di utilizzare le parole chiave corrette. Le parole chiave sono quei termini o frasi che descrivono esattamente ciò che stai cercando. In questo modo i risultati saranno più pertinenti e avrai più probabilità di trovare ciò che desideri.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    Come proteggete i miei dati?
                                                </button>
                                            </h2>
                                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Se la password salvata in Presto risulta compresa in uno degli elenchi pubblici di dati trafugati, riceverai la notifica ed il relativo invito al cambio delle password. Per la tua sicurezza, ti basterà cambiare la password associata al tuo account. Sarai così al riparo da eventuali intrusioni esterne.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                    Cosa posso inserire nell’annuncio?
                                                </button>
                                            </h2>
                                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Gli annunci devono rispettare tutte le leggi e i regolamenti vigenti in Italia. Gli annunci vengono pubblicati sempre sotto la sola responsabilità dell'utente, che all'atto dell'inserimento dell'annuncio dichiara altresì di conoscere e accettare i termini di servizio.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</x-layout>
