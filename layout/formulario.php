<section class="container form">
	  <p>Rellena el formulario para que nos comuniquemos con vos.</p>
	  
      <form method="post" action="./phpmailer.php" enctype="multipart/form-data ">
            
            <div class="form__grupo">
                <label>Nombre</label>
                <input placeholder="Juan" type="text" name="nombre" autocapitalize="words" autocomplete="off" />
            </div>
            <div class="form__grupo">
                <label>Apellido</label>
                <input placeholder="Rodriguez" type="text" name="apellido" autocapitalize="words" autocomplete="off" />
            </div>

            <div class="form__grupo"> 
                <label>Email</label>
                <input placeholder="tucorreo@correo.com" type="email" name="email" autocomplete="off" />
            </div>
            <div class="form__grupo">
                <label>Asunto del mensaje</label>
                <select name="asunto">
                    <option>Servicio 1</option>
                    <option>Servicio 2</option>
                    <option>Servicio 3</option>
                </select>
            </div>
            
            <div class="form__grupo">
                <label>Mensaje</label>
                <textarea placeholder="Escribí un mensaje..." style="resize: none"name="mensaje" >
                </textarea>
            </div>
            <div>
                <button class='btn' type="submit">Enviar mensaje</button>
            </div>
        </form>

	</section>
