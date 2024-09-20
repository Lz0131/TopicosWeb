$(document).ready(function(){
    init();
    // llena el combo box con las opciones
    $.ajax({
        url: '/api/categories',
        type: 'GET',
        success: function (data) {
            var select = $('#cboxcategory');
            select.empty(); // Limpiar opciones previas
            select.append('<option value=""> All </option>'); //opcion defaul
            $.each(data, function (index, category) {
                select.append('<option value="' + category.id + '">' + category.name + '</option>');
            });
        },
        error: function (xhr, status, error) {
            console.error('Error al obtener categorías:', error);
        }
    });
    $('#cboxcategory').on('change', function () {
        var categoryId = $(this).val();
        updateTables(categoryId);
    });
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
            { data: 'color'}
        ]
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