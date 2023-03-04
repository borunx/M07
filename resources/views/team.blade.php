<x-layouts.app title="Como jugar">

    <x-layouts.navigation/>

    <section>
        <div class="container text-center mt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <h1>Equipo Othello</h1>
                    <p>Conoce al equipo de Othello, proyecto conjunto entre la UPC y el instituo Provençana.</p>
                    
                </div>
            </div>
            <div class="row justify-content-center">
                <h5 class="display-5 fw-bold mt-5 mb-3">TEAM UPC</h5>
                @foreach ($names_upc as $upc)
                    <div class="col-md-3">
                        <div class="bg-light p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="" width="90">
                            <h5 class="mt-3 name">{{ $upc }}</h5>
                            <span class="work d-block">Desarrolador/a Othello</span>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row justify-content-center">
                <h5 class="display-5 fw-bold mt-5 mb-3">TEAM PROVENÇANA</h5>
                @foreach ($names_proven as $proven)
                    <div class="col-md-2">
                        <div class="bg-light p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="" width="90">
                            <h5 class="mt-3 name">{{ $proven }}</h5>
                            <span class="work d-block">Desarrolador/a Web</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-layouts.footer/>

</x-layouts.app>
