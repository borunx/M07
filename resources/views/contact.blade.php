<x-layouts.app title="Contacto">

    <x-layouts.navigation/>

    <section>
        <div class="container text-center mt-5 pb-5">
            <div class="row justify-content-center border  border-1 ">
                <div class="col-4 bg-light text-start p-5">
                    <h2>Ponte en contacto con el equipo de Othello</h2>
                    <p>Rellena el formulario o utiliza uno de los siguientes métodos:</p>
                    <div class="mb-3 col-8">
                        <button class="border border-0"><i class="fa fa-map-marker text-success"></i></button>
                        <span>Campus Nord UPC, Carrer de Jordi Girona, 1-3, 08034 Barcelona</span>
                    </div>
                    <div class="mb-3 col-8">
                        <button class="border border-0"><i class="fa fa-phone text-success"></i></button>
                        <span>+34 935183246</span>
                    </div>
                    <div class="mb-3 col-8">
                        <button class="border border-0"><i class="fa fa-envelope text-success"></i></button>
                        <span>othellogame@gmail.com</span>
                    </div>
                </div>
    
                <div class="col-8 text-green" style="background-color: #0E131F">
                    <h1 class="mt-4">Contáctanos</h1>
                    <form class="text-start fw-bold p-5">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control border-green bg-black rounded-pill" id="name" placeholder="name@example.com">
                            <label for="name">Nombre</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="password" class="form-control  border-green bg-black rounded-pill" id="email" placeholder="Password">
                            <label for="email">Email</label>
                          </div>
                        <div class="mb-3">
                            <label for="message" class="ms-2 mb-2">Mensaje</label>
                            <textarea class="form-control border-green bg-black rounded-4" rows="5" placeholder="Deja un mensaje" id="message"></textarea>
                          </div>
                          <div class=" border-0 mb-2 me-3 text-center">
                            <button class="btn btn-success px-5 py-2">Enviar</button>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </section>


    <x-layouts.footer/>

</x-layouts.app>