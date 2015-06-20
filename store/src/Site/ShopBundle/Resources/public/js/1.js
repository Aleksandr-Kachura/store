$( document ).ready(function() {
    $(".addtocart").click(function() {
        var id =  $('#prodid').val();
       // alert(id);
        $.ajax({
            type: "GET",
            url: "http://store/app_dev.php/ajax?id="+id,
            // url: "{{ path('my_app_greeting') }}",

            success: function(data)
            {
                //   $('span#send_mess').html(data.message);
                //alert(date.message);
                $( "#dialog" ).dialog();
                location.reload();

            }
        });

    });

    $(".checkbox").change(function()
    {
        var filter = $('input[name=filter\\[\\]]:checkbox:checked').map(function(){return $(this).val();}).get();
       // alert(filter);
        var slug =  $('#slug').val();
        $.ajax({
            type: "GET",
          //  url: "http://store/app_dev.php/ajaxfilter",
            url: pathfilter,
            data: {ids : filter, slug : slug },

            // url: "{{ path('my_app_greeting') }}",

            success: function(data)
            {
                //   $('span#send_mess').html(data.message);
                ///alert(date.error);
                //alert(data.message);
                if(data.error==true)
                {
                    var inputString=data.prod;
                }
                else
                {
                    var inputString=data.prod;
                }
                //alert(inputString);
                $( ".center_content").replaceWith('<div class="center_content" >'+inputString+'</div>');
               /* $( "#dialog" ).dialog();
                location.reload();*/

            }
        });
        //var text = $(this).html().removeClass(".checkbox");
        /*$(".center_content").removeClass(".center_content");
        alert($( ".center_content" ).html());*/
       /* var inputString=111;
        $( ".center_content").replaceWith('<div class="center_content" >'+inputString+'</div>');*/


    });


});