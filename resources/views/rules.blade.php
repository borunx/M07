<x-layouts.app title="Como jugar">

    <x-layouts.navigation/>

        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h1 class="mt-5">¿Como jugar?</h1>
                    </div>
                </div>
                <h3 class="pt-5 pb-3">Reglas</h3>
                <div class="row justify-content-center mb-5 text-start">
                    <div class="col-4">
                        <img src="img/icons8-1-key-48.png" alt="">
                        <h5>Regla 1</h5>
                        <p class="col-10">A cada jugador se le asigna un color y fichas. El  jugador al que se le han asignado las fichas de color negro empieza el juego, 
                    poniendo la primera ficha en una posición valida (formando un sandwich con las fichas de color blanco).</p>
                    </div>
                    <div class="col-4">
                        <img src="img/icons8-2-key-48.png" alt="">
                        <h5>Regla 2</h5>
                        <p class="col-10">Hacer un sandwich quiere decir rodear una o más fichas del jugador oponente con dos fichas de tu color.</p>
                    </div>
                    <div class="col-4">
                        <img src="img/icons8-3-key-48.png" alt="">
                        <h5>Regla 3</h5>
                        <p class="col-10">Después del movimiento, todas las fichas blancas que se encuentren dentro del sandwich creado por las fichas negras, se vuelven del color del jugador que ha conseguido tal formación.
                     Los sandwiches se pueden hacer en cualquier dirección.</p>
                    </div>
                    <div class="col-4">
                        <img src="img/icons8-4-key-48.png" alt="">
                        <h5>Regla 4</h5>
                        <p class="col-10">Si un jugador no puede hacer ningún sandwich, el turno se acaba.</p>
                    </div>
                    <div class="col-4">
                        <img src="img/icons8-5-key-48.png" alt="">
                        <h5>Regla 5</h5>
                        <p class="col-10">Cuando ninguno de los jugadores pueda añadir ningúna ficha (el tablero esté completo), se acaba el juego.</p>
                    </div>
                    <div class="col-4">
                        <img src="img/icons8-6-key-48.png" alt="">
                        <h5>Regla 6</h5>
                        <p class="col-10">El ganador es el jugador con más discos de su color en el tablero.</p>
                    </div>
    
                </div>
            </div>
            <div class="container-fluid text-white py-2" style="background-color: #0A2640;">
                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-12 text-center mt-5 mb-5">
                        <h2>Conflictos</h2>
                    </div>
                    <div class="col-4 fs-1 fw-bold">
                        <ul class="list-inline">
                            <li class="list-inline-item me-5"><img src="img/example-1.png" alt=""></li>
                            <li class="list-inline-item me-5"><i class="bi bi-arrow-right"></i></li>
                            <li class="list-inline-item"><img src="img/example-1.2.png" alt=""></li>
                          </ul>
                    </div>
        
                    <div class="col-4">
                    En este caso, si el turno del jugador es el de las fichas negras, poniendo la ficha en la posición marcada con una X, automáticamente, hará sandwich con todas las demás blancas, por lo tanto, todas las fichas pasarán a ser blancas. Recordemos que se puede hacer sandwich tanto en diagonal, horizontal y vertical.
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-12 text-center">
                    </div> 
                    <div class="col-4">
                    En este caso, si el turno del jugador es el de las fichas blancas, poniendo la ficha en la posición marcada con una X, automáticamente, hará sandwich con su primera ficha blanca. Es decir, no se puede saltar fichas de su propio color para hacer sandwich.
                    </div>
                    <div class="col-4 fs-1">
                        <ul class="list-inline">
                            <li class="list-inline-item me-5"><img src="img/example-2.png" alt=""></li>
                            <li class="list-inline-item me-5"><i class="bi bi-arrow-right"></i></li>
                            <li class="list-inline-item"><img src="img/example-2.1.png" alt=""></li>
                          </ul>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-12 text-center">
                    </div>
                    <div class="col-4 fs-1">
                        <ul class="list-inline">
                            <li class="list-inline-item me-5"><img src="img/example-3.png" alt=""></li>
                            <li class="list-inline-item me-5"><i class="bi bi-arrow-right"></i></li>
                            <li class="list-inline-item"><img src="img/example-3.1.png" alt=""></li>
                          </ul>
                    </div>
        
                    <div class="col-4">
                    En este caso, si el turno del jugador es el de las fichas negras, poniendo la ficha en la posición marcada con una X, a pesar de que hará sandwich con las fichas verticales, se genera otro sandwich en horizontal, pero este no se realiza. Es decir, cuando se hace un sandwich y de este sale otro,  únicamente se cuenta el primero.
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center py-5">
                    <div class="col-12 text-center">
                        <h2 class="pb-4">Ganador</h2>
                    </div>
                    <div class="col-12 text-start mb-4">
                        <h5>Quien gana?</h5>
                        <p>El que consigue tener el mayor número de fichas en el tablero.</p>
                    </div>
                    <div class="col-12 text-start mb-4">
                        <h5>Como subir de nivel?</h5>
                        <p>Cada vez que se gana una partida se le suma 1 nivel al ganador.</p>
                    </div>
                </div>
            </div>
        </section>

    <x-layouts.footer/>

</x-layouts.app>