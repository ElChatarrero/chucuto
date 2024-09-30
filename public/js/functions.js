
$("#estado").change(event => {
  $.get(`/municipios/${event.target.value}`, function(res, sta){
  //  console.log(res);
    $("#municipio").empty();
    $("#parroquia").empty();
    $("#municipio").append(`<option value="">Seleccione</option>`)
    res.forEach(element => {
      $("#municipio").append(`<option value=${element.id}> ${element.nombre} </option>`);
    });
  });
});

$("#municipio").change(event => {
  $.get(`/parroquias/${event.target.value}`, function(res, sta){
    $("#parroquia").empty();
    //console.log(res);
    $("#parroquia").append(`<option value="">Seleccione</option>`)
    res.forEach(element => {
      $("#parroquia").append(`<option value=${element.id}> ${element.nombre} </option>`);
    });
  });
});

$("#categoriaId").change(event => {
  $.get(`/marca/${event.target.value}`, function(res, sta){
    $("#marcaId").empty();
    $("#marcaId").append(`<option value="">Seleccione</option>`)
    res.forEach(element => {
      $("#marcaId").append(`<option value=${element.id}> ${element.denominacion} </option>`);
    });
  });
});

$("#marcaId").change(event => {
  $.get(`/modelo/${event.target.value}`, function(res, sta){
    $("#modeloId").empty();
    //console.log(res);
    $("#modeloId").append(`<option value="">Seleccione</option>`)
    res.forEach(element => {
      $("#modeloId").append(`<option value=${element.id}> ${element.denominacion} </option>`);
    });
  });
});

$.ajaxSetup({
 headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 }
});

//        BUSCAR CEDULA EN EL SAIME       //
$('#buscar').click(function(e){
  e.preventDefault();

  var cedula = $("input[name=cedula]").val();

  $('#nombre').val('');
  $('#apellido').val('');

  $.ajax({
    url:'/buscarcedula/',
    data:{'cedula':cedula},
    type:'post',
    success:  function (response) {
        if (response.mensaje == 'Fallido')
        {
          Swal.fire({
            icon: 'warning',
            title: 'LA CEDULA NO APARECE!!',
            text: "VERIFIQUE DE NUEVO O CONSULTE CON EL ADMINITRADOR.",
            showConfirmButton: false,
            timer: 2500
          })
        }
        if (response.mensaje == 'Duplicado')
        {
          Swal.fire({
            icon: 'warning',
            title: 'YA ESTA REGISTRADO!!',
            text: "EL LUCHADOR YA SE ENCUENTRA REGISTRADO",
            showConfirmButton: false,
            timer: 2500
          })
        }
        else
        {
          $('#nombre').val(response.nombre);
          $("#apellido").val(response.apellido);
          $("#solicitante_id").val(response.id);
        }
    },
    statusCode: {
        404: function() {
          alert('web no encontrada');
        }
    },
    error:function(x,xs,xt){

        alert ("Error intente de nuevo");
    }
  });
});

// $("#estado").change(event => {
//     $.get(`/municipios/${event.target.value}`, function(res, sta){
//     //  console.log(res);
//       $("#municipio").empty();
//       $("#parroquia").empty();
//       $("#municipio").append(`<option value="">Seleccione</option>`)
//       res.forEach(element => {
//         $("#municipio").append(`<option value=${element.id}> ${element.nombre} </option>`);
//       });
//     });
//   });

  $('#pais').change(event => {
    var selectValor =$('#pais').val();

    //console.log(selectValor);
    //let campoInput = $('#estado');

    if (selectValor == 'VE') {
        $("#estados").show();
        $("#municipios").show();
        $("#parroquias").show();
    }else {
        $("#estados").hide();
        $("#municipios").hide();
        $("#parroquias").hide();
        //alert('esta es la opcion 2')
    }
});

function myFunction(){
	let fecha_salida = Date.parse(document.getElementById("fecha_salida").value);
	let fecha_devolucion = Date.parse(document.getElementById("fecha_devolucion").value);



	if (fecha_salida > fecha_devolucion)
	{
        Swal.fire({
            icon: 'warning',
            title: 'Upss, esta fecha no puede ser colocada',
            showConfirmButton: false,
            timer: 1500
    })
    $("#fecha_devolucion").val("");
	}

    //document.getElementById("fecha_salida").innerHTML="";

    //fecha_salida.value = "";
}
function myFunction2(){
    let fecha_solicitud = Date.parse(document.getElementById("fecha_solicitud").value);
    let fecha_salida = Date.parse(document.getElementById("fecha_salida").value);

    if (fecha_solicitud > fecha_salida)
	{
        Swal.fire({
            icon: 'warning',
            title: 'Upss, la fecha es menor a la fecha de solicitud',
            showConfirmButton: false,
            timer: 1500
    })
    $("#fecha_salida").val("");
	}
}



// $(document).ready(function () {
//     let campoInput = $('#estado');
//     let pais = $('#pais').val();
//     console.log(pais);
//      console.log(campoInput);
//     $("#pais").change(function () {
//         if (pais == "VE") {
//             console.log(pais)
//             campoInput.show();
//         } else {
//             console.log(pais)
//             campoInput.hide();
//         }
//     });
//   });



