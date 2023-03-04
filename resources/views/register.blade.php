<x-layouts.app title="Registro">

    <section class="h-100 position-relative" style="background-image: url('/img/hecker.jpg'); background-repeat: no-repeat;">
        <div class="container">
            <div class="row position-absolute top-50 start-50 translate-middle">
                <div class="col-3 bg-light text-start p-3">
                    <h1>Unete a nosotros</h1>
                    <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                   
                </div>
                <div class="col-6 p-3" style="background-color: #0E131F">
                    <form action="{{ url('register-add') }}" method="post" class="row g-3">
                        @csrf
                        <h2 class="text-center" style="color: #5EE4A3">Registro</h2>
                        <div class="col-md-6 form-floating">
                          <input type="text" class="form-control rounded-pill" id="name" name="name" placeholder="> Nombre" style="background-color: #0E131F; border-color:#5EE4A3">
                          <label for="name" style="color: #5EE4A3">> Nombre</label>
                        </div>
                        <div class="col-md-6 form-floating">
                          <input type="text" class="form-control rounded-pill" id="last_name" name="last_name" placeholder="> Apellidos" style="background-color: #0E131F; border-color:#5EE4A3">
                          <label for="lastname" style="color: #5EE4A3">> Apellido</label>
                        </div>
                        <div class="col-md-12 form-floating">
                            <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="> Email" style="background-color: #0E131F; border-color:#5EE4A3">
                            <label for="email" style="color: #5EE4A3">> Email</label>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="password" class="form-control rounded-pill" name="password" id="password" placeholder="> Contraseña" style="background-color: #0E131F; border-color:#5EE4A3">
                            <label for="password" style="color: #5EE4A3">> Contraseña</label>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="password" class="form-control rounded-pill text-white" name="re_password" id="password_confirmation" placeholder="> Repite Contraseña" style="background-color: #0E131F; border-color:#5EE4A3">
                            <label for="re_password" style="color: #5EE4A3">> Repetir Contraseña</label>
                        </div>            
                        <div class="text-center mb-4">
                            <button type="submit" class="btn text-white w-25 rounded-0" style="background-color: #5EE4A3" type="submit" value="Registrarse">Unete</button>
                        </div>
                    
                        <a href="{{ route('home') }}" class="text-center text-decoration-none text-white">Volver a Home</a>
                    </form>
                </div>
            </div>
        </div>
    </section>


</x-layouts.app>
