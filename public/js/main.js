
$('.view-ticket-guest').on('click', function () {
    $.ajax({
        type:'POST',
        url:'get-ticket-data',
        data:{
            ref:$("#ref").val(),
            _token: $('#token').val()
        },
        success:function(data){
            if(data != "null"){
                var Jdata = JSON.parse(data);
                console.log(Jdata.customer_name);
                $("#name").val(Jdata.customer_name),
                $("#pname").val(Jdata.problem_discription),
                    $("#email").val(Jdata.email),
                    $("#mobile").val(Jdata.phone),
                    $("#rname").val(Jdata.reply)

            }else{
                alert("no data found");
            }
        },
        error:function(err){
            console.log(err);
        }

    });
});
