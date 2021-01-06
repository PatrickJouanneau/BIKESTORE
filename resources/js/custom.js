$(function(){

    $("a[href='#"+tab1+"']").trigger( "click" );
    $("a[href='#"+tab2+"']").trigger( "click" );

 })


 $(function ()
 {
     $('#all-products').on("click", function ()
     {
         $.ajax({
             url: "/products/json",
             type: 'GET',
             cache: false,
             success: function (result)
             {
                 if (result)
                 {
                     var content = '';
                     result.forEach(prod =>
                     {
                         content += '<tr><td>' + prod.id + '</td><td>' + prod.name + '</td><td>' + prod.year + '</td><td>' + prod.brand + '</td><td>' + prod.category + '</td><td>' + prod.price + '</td> <td><a href="/products/' + prod.Id + '/edit"><img src="img/wrench.svg" alt="clé"></a></td> <td><a href="/products/' + prod.Id + '/delete"><img src="img/trash.svg" alt=""></a></td></tr>'
                     });
                     $('#body-product').html(
                         content
                     )
                 }

             },
             error: function ()
             {
                 alert("No");
             }
         });

     });
 });



 $(function ()
 {
     $('#all-stocks').on("click", function ()
     {
         $.ajax({
             url: "/stocks/json",
             type: 'GET',
             cache: false,
             success: function (result)
             {
                 if (result)
                 {
                     var content = '';
                     result.forEach(stk =>
                     {
                         content += '<tr><td>' + stk.id + '</td><td>' + stk.name + '</td><td>' + stk.quantity + '</td><td>' + stk.store + '</td><td>' + stk.year + '</td><td>' + stk.price + '</td></tr>'
                     });
                     $('#body-stock').html(
                         content
                     )
                 }

             },
             error: function ()
             {
                 alert("No");
             }
         });

     });
 });
