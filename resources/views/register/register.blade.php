@extends('layouts.base') @prepend('styles') @section('content') 
<div class="container p-5 card my-5">
  <form id="registerForm" class="row g-3 needs-validation was-validated" novalidate>
    <div class="col-md-12">
      
      <label for="customer_type_id" class="form-label">Tipo de cliente</label>
      <select class="form-select" id="customer_type_id" name="customer_type_id" required>
        @foreach ($tipos_clientes as $tipo)
        <option value="{{$tipo->id}}">{{$tipo->description}}</option>
       @endforeach
        <!-- Agrega más opciones según tus necesidades -->
      </select>
      <div class="invalid-feedback">
        Please select a customer type.
      </div>
    </div>
    <div class="col-md-6">
      <label for="email" class="form-label">Correo Electronico</label>
      <input type="email" class="form-control" id="email_regitro" name="email" name="{{old('email')}}"required>
      <div class="invalid-feedback">
        Please provide a valid email.
      </div>
    </div>
    <div class="col-md-6">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password_registro" name="password"  required>
      <div class="invalid-feedback">
        Please provide a password.
      </div>
    </div>
    <div class="col-md-6">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" name="{{old('name')}}" required>
      <div class="invalid-feedback">
        Please provide a name.
      </div>
    </div>
    <div class="col-md-6 d-none" id="div_contact_name">
      <label for="contact_name" class="form-label">Nombre del contacto</label>
      <input type="text" class="form-control" id="contact_name" name="{{old('contact_name')}}"name="contact_name">
    </div>
    <div class="col-md-6 d-none" id="div_ruc">
      <label for="ruc" class="form-label">RUC</label>
      <input type="text" class="form-control" id="ruc" name="ruc" name="{{old('ruc')}}"> 
    </div>
    <div class="col-md-6 d-none" id="div_ubication">
      <label for="ubication" class="form-label ">Ubicacion</label>
      <input type="text" class="form-control" id="ubication" name="ubication" name="{{old('ubication')}}" required>
    </div>
    <div class="col-md-6">
      <label for="address" class="form-label">Direccion</label>
      <input type="text" class="form-control" id="address" name="address" name="{{old('address')}}" required>
      <div class="invalid-feedback">
        Please provide an address.
      </div>
    </div>
    <div class="col-md-6">
      <label for="phone" class="form-label">Telefono</label>
      <input type="text" class="form-control" id="phone" name="phone" name="{{old('phone')}}" required>
    </div>
   
      
    <div class="col-12">
      <button class="btn btn-primary registrar" onclick="enviar_registro()" type="button">Registrar</button>
    </div>
  </form>
</div>
<script>
  // Obtén una referencia al elemento select
const selectElement = document.getElementById("customer_type_id");

// Agrega un listener para el evento 'change'
selectElement.addEventListener("change", function() {
  // Lógica que deseas ejecutar cuando se cambie el valor del select
  const selectedValue = this.value;

  if (selectedValue==1){
    $("#div_contact_name").addClass("d-none")
    $("#div_ruc").addClass("d-none")
    // $("#ubication").removeClass("d-none")
  }else{
   
    $("#div_contact_name").removeClass("d-none")
    $("#div_ruc").removeClass("d-none")
    // $("#ubication").addClass("d-none")
  }

});
     function enviar_registro(){
      $.ajax({
			url: "https://digitalteiperu.com/api/registrer",
            
			data: new FormData(document.getElementById("registerForm")),
			method: "post",
			type: "json",
			enctype: "multipart/form-data", //usar siempre y cuando se usa con files
			contentType: false,
			cache: false,
			processData: false, 
			success: function(response) {
               console.log(response)
               
             },
              error: function() {
              
              }
            });
      
     }
// $(document).on('click', '.registrar', function() {
//   alert("presionado")
   
        // });
</script>
  
  @endsection