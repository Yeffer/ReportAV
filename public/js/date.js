$(document).ready(function(){ 
            var fecha=new Date();
            var day=1;
            var month=0;
            var year=fecha.getFullYear();
            var urteko=year-17;

            jQuery(document).ready(function(){


            jQuery('#fechaNacimiento').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: false,
            changeYear: true,
            yearRange: '1900:'+urteko,
            maxDate: "today",
            numberOfMonths: 1,
            duration:'slow',
            //dateFormat: "d 'De' MM 'De' yy ",
            currentText: 'Ahora',
            closeText: 'Listo',
            altField: "#fechanacimiento",
            altFieldTimeOnly: false,
            altFormat: "dd-mm-yy",
            defaultDate: new Date(urteko, month, day),
            });
          });
      
            var fecha=new Date();
            var day=1;
            var month=0;
            var year=fecha.getFullYear();
            var urteko=year-17;

            jQuery(document).ready(function(){

            jQuery('#fechaExpedicion').datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: false,
            changeYear: true,
            yearRange: '1900:'+urteko,
            maxDate: "today",
            numberOfMonths: 1,
            duration:'slow',
            //dateFormat: "d 'De' MM 'De' yy ",
            currentText: 'Ahora',
            closeText: 'Listo',
            altField: "#fechaExpedicion",
            altFieldTimeOnly: false,
            altFormat: "dd/mm/yy",
            defaultDate: new Date(urteko, month, day),
            });
          });
});