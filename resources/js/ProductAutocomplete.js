$(function ()
{
    $("#search-product").on(function ()
    {
        $.ajax({
            type: "POST",
            url: "{{ route('Controllers/productController') }}",
            data: 'keyword=' + $(this).val(),
            beforeSend: function ()
            {
                $("#search-product").css("background", "#FFF url(img/LoaderIcon.gif) no-repeat 165px");
            },
            success: function (data)
            {
                $("#suggesstion-product").show();
                $("#suggesstion-product").html(data);
                $("#search-product").css("background", "#FFF");
            }
        });
    });
});

function selectProduct(val)
{
    $("#search-product").val(val);
    $("#suggesstion-product").hide();
}
