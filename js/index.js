$(document).ready(function(){
    
    // new DataTable('#example');

    var dataTable = $('#datos_usuario').DataTable({
        "processing":true,
        "serverSide": true,
        "order":[],
        "ajax":{
            url:"../obtener_registro.php",
            type: "POST",
        },
        "columnsDefs":[
            {
                "targets": [0,3,4],
                "orderable":false
            }
        ]
    })
})


