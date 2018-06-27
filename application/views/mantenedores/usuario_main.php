<div class="row">
    <div class="col l4 offset-l1 s12">
        <div class="card-panel">
            <h5>Registrar Usuarios</h5>
            <br>
            <form id="formulario" name="formulario" method="POST">
                <div class="input-field ">
                    <input type="text" id="run" name="run" class="validate">
                    <label for="runUs">run</label>
                </div>
                <div class="input-field ">
                    <input type="text" id="nombre" name="nombre" class="validate">
                    <label for="nombreUs">nombre</label>
                </div>
                <div class="input-field ">
                    <input type="text" id="apellidoP" name="apellidoP" class="validate">
                    <label for="apellidoPUs">apellidoP</label>
                </div>
                <div class="input-field ">
                    <input type="text" id="apellidoM" name="apellidoM" class="validate">
                    <label for="apellidoMUs">apellidoM</label>
                </div>

                <div class="input-field ">
                    <input type="correo" id="correo" name="correo">
                    <label for="correoUs" data-error="wrong" data-success="right">Email</label>
                </div>
                <div class="input-field ">
                    <input type="password" id="pass" name="pass" class="validate">
                    <label for="passUs">pass</label>
                </div>
                <div class="input-field ">
                    <input type="numb" id="idCategoria" name="idCategoria" class="validate">
                    <label for="idCategoriaUs">cargo</label>
                </div>
                <a class="btn waves-effect waves-light blue" id="enviar_usuario">enviar
                    <i class="material-icons right">send</i>
                </a>

            </form>

        </div>
    </div>
    <div class="col l6 s12">
    <div class="card">
    <div class="card-content">
      <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test4">Test 1</a></li>
        <li class="tab"><a class="active" href="#test5">Test 2</a></li>
        <li class="tab"><a href="#test6">Test 3</a></li>
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="test4">Test 1</div>
      <div id="test5">Test 2</div>
      <div id="test6">Test 3</div>
    </div>
  </div>
    </div>
</div>
