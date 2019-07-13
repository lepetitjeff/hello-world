<html>
    <head>
        <title>PHP Calculator Script</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src='jquery.js'></script>
        <script type='text/javascript'>
            function calculator()
            {
                var num1 = $("#txtnum1").val();
                var num2 = $("#txtnum2").val();
                var operator = $("#seloptr").val();
                if (num1=='' || num2=='') {
                   alert("Enter Proper Values To Calculate");
                }
                else{
                      $('.load').show();
                      $("#btn").hide();
                      $.ajax({
                             type: "POST",
                             url: "ajax-reply.php",
                             data:{num1:num1,num2:num2,operator:operator},
                             success: function(data){
                                 //alert(data);
                                 if (data) {
                                 $('#answer').val(data);         
                                 }               
                             },
                             complete: function(){
                                                  $('.load').hide();
                                                  $("#btn").show();                     
                             }
                      })
                }    
            }
            function reset()
            {
                var num1 = $("#txtnum1").val('');
                var num2 = $("#txtnum2").val('');
                $('#answer').val('');
            }
            function checnum(as)
            {
                var dd = as.value;
                var regex = /^[0-9.]+$/;
                    if (!regex.test(dd)){
                        dd = dd.substring(0,(dd.length-1));
                        as.value = dd;
                    }
            }
            function chk(){
                var sds = document.getElementById("dum");
                if(sds == null){
                    alert("You are using a free package.\n You are not allowed to remove the tag.\n");
                }
                var sdss = document.getElementById("dumdiv");
                if(sdss == null){
                    alert("You are using a free package.\n You are not allowed to remove the tag.\n");
                    document.getElementById("content").style.visibility="hidden";
                }
            }
            window.onload=chk;
        </script>
    </head>
    <body>
        <div class='frms resp_code' align='center' id='content'>
            <center><b>PHP Calculator Script</b></center><br><br>
            <b>  Number 1 : </b><input type='text' name='num1' style='width:18%' id='txtnum1' maxlength='10' onkeyup=checnum(this)>
            <b>  Operators : </b><select name='options' style='width:7%' id='seloptr'>
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>%</option>
            </select>
            <b>  Number 2 : </b><input type='text' name='num2' style='width:18%' id='txtnum2' maxlength='10' onkeyup=checnum(this)><br>
            <img src='loading.gif' class='load' style='display:none;'>
            <input type='submit' value='Calculate' onclick='calculator()' id='btn'>
            <input type='reset' value='Reset' onclick='reset()'><br>
            <b>Answer is : </b><input type='text' name='answer' style='width:25%' id='answer' readonly><br>
            <div  align='center' style="font-size: 10px;color: #dadada;" id="dumdiv">
                <a href="https://www.hscripts.com" id="dum" style="font-size: 10px;color: #dadada;text-decoration:none;color: #dadada;">&copy;h</a>
            </div>
        </div>
    </body>
</html>

