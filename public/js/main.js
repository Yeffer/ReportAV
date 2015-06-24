/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){    
    
   $( "#buscarCargo" ).autocomplete({
          source: "searchUser",
      minLength: 3,
      select: function(event, ui) {
        $('#buscarCargo').val(ui.item.codigo);                
                $('#id').val(ui.item.id);
                $('#codigo').val(ui.item.codigo);
                $('#tipo').val(ui.item.tipo);
                $('#descripcion').val(ui.item.descripcion);
                $('#salarioBasico').val(ui.item.salarioBasico);
                $('#variable').val(ui.item.variable);
                $('#pago').val(ui.item.pago);
      }

    });
});

