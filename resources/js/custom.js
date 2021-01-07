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
                         content += '<tr><td>' + prod.id + '</td><td>' + prod.name + '</td><td>' + prod.year + '</td><td>' + prod.brand + '</td><td>' + prod.category + '</td><td>' + prod.price + '</td> <td><a href="/products/' + prod.id + '/edit"><img src="img/wrench.svg" alt="clé"></a></td> <td><a href="/products/' + prod.id + '/delete"><img src="img/trash.svg" alt=""></a></td></tr>'
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
                         content += '<tr><td>' + stk.id + '</td><td>' + stk.name + '</td><td>' + stk.quantity + '</td><td>' + stk.store + '</td><td>' + stk.year + '</td><td>' + stk.price + '</td> <td><a href="/stocks/' + stk.id + '/edit"><img src="img/wrench.svg" alt="clé"></a></td> <td><a href="/stocks/' + stk.id + '/delete"><img src="img/trash.svg" alt=""></a></td></tr>'
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



 $(function ()
 {
     $('#all-customers').on("click", function ()
     {
         $.ajax({
             url: "/customers/json",
             type: 'GET',
             cache: false,
             success: function (result)
             {
                 if (result)
                 {
                     var content = '';
                     result.forEach(cust =>
                     {
                         content += '<tr><td>' + cust.id + '</td><td>' + cust.nom + '</td><td>' + cust.prenom + '</td><td>' + cust.street + '</td><td>' + cust.city + '</td><td>' + cust.cp + '</td><td>' + cust.state + '</td><td>' + cust.phone + '</td><td>' + cust.mail + '</td> <td><a href="/customers/' + cust.id + '/edit"><img src="img/wrench.svg" alt="clé"></a></td> <td><a href="/customers/' + cust.id + '/delete"><img src="img/trash.svg" alt=""></a></td></tr>'
                     });
                     $('#body-customer').html(
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
     $('#all-orders').on("click", function ()
     {
         $.ajax({
             url: "/orders/json",
             type: 'GET',
             cache: false,
             success: function (result)
             {
                 if (result)
                 {
                     var content = '';
                     result.forEach(ord =>
                     {
                         content += '<tr><td>' + ord.id + '</td><td>' + ord.cust + '</td><td>' + ord.status + '</td><td>' + ord.ordDat + '</td><td>' + ord.reqDat + '</td><td>' + ord.shipDat + '</td><td>' + ord.store + '</td><td>' + ord.staff + '</td></tr>'
                     });
                     $('#body-order').html(
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
     $('#all-orderItems').on("click", function ()
     {
         $.ajax({
             url: "/orderItems/json",
             type: 'GET',
             cache: false,
             success: function (result)
             {
                 if (result)
                 {
                     var content = '';
                     result.forEach(orIte =>
                     {
                         content += '<tr><td>' + orIte.oId + '</td><td>' + orIte.iId + '</td><td>' + orIte.name + '</td><td>' + orIte.qti + '</td><td>' + orIte.price + '</td><td>' + orIte.disc + '</td></tr>'
                     });
                     $('#body-orderItem').html(
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
