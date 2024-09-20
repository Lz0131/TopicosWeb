$(document).ready(function(){
    init();
    
    // llena el combo box con las opciones
    /*$.ajax({
        url: '/api/categories',
        type: 'GET',
        success: function (data) {
            var select = $('#cboxcategory');
            select.empty(); // Limpiar opciones previas
            select.append('<option value="" class="dropdown-item"> All </option>'); //opcion defaul
            $.each(data, function (index, category) {
                select.append('<option class="dropdown-item" value="' + category.id + '">' + category.name + '</option>');
            });
        },
        error: function (xhr, status, error) {
            console.error('Error al obtener categorías:', error);
        }
    });
    $('#cboxcategory').on('change', function () {
        var categoryId = $(this).val();
        updateTables(categoryId);
    }); */
});

function init()
{
    //new DataTable('#tblProducts1');
    //updateTables();
    new DataTable('#tblProducts2',{
        ajax: '/api/products',
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'sale_price' },
            { data: 'quantity' },
            { data: 'size' },
            { data: 'color'},
            {data: 'category.name'}
        ]
    });
    $('#cmbCategoryList').select2({
        ajax: {
          url: '/api/categories',
          dataType: 'json'
          // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
        }
      });
      $('#cmbCategoryList').on('select2:select', function (e) {
        var data = e.params.data;
        console.log("You selected: "+ data.id);
        $("#tblProducts2").DataTable().ajax.url("/api/products/" +data.id).load();
    });
    /*$.ajax({
        url: '/api/categories',
        type: 'GET',
        success: function (data) {
            var select = $('#cboxcategory');
            select.empty(); // Limpiar opciones previas
            $.each(data, function (index, category) {
                select.append('<option value="' + category.id + '">' + category.name + '</option>');
            });
        },
        error: function (xhr, status, error) {
            console.error('Error al obtener categorías:', error);
        }
    }); */
}

function updateTables(categoryId = null) {
    var ajaxUrl = '/api/products';

    // Si se seleccionó una categoría, agregar el parámetro de categoría a la URL
    if (categoryId) {
        ajaxUrl += '?category_id=' + categoryId;
    }

    // Actualizar la tabla dinámica con los productos filtrados
    $('#tblProducts2').DataTable({
        destroy: true, // Necesario para recrear la tabla con nuevos datos
        ajax: ajaxUrl,
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'sale_price' },
            { data: 'quantity' },
            { data: 'size' },
            { data: 'color' }
        ]
    });
}