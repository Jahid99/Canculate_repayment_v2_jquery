<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
         <title>Loan Repayment Calculation v2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
              #myDiv button {
                  color: #333;
      background-color: #fff;
      border-color: #ccc;

      padding: 6px 12px;
      margin-bottom: 22px;
      font-size: 14px;
      font-weight: 400;
      line-height: 1.42857143;

      white-space: nowrap;
      vertical-align: middle;
      width: 100%;

              }

              #myDiv button.pressed {
                  background-color: orange;
              }
          </style>

    </head>
    <body>

      <div class="row">

    <div id="myDiv">
         <div class="col-md-2 col-sm-2">
            <div id="hmasd" style=" margin-top: 87px;">
                <h4 id="" style="margin-bottom: -1px;"><b>Penalties</b></h4><br>
                <h4 id="" style="margin-bottom: -1px;"><b>Fees</b></h4><br>
                <h4 id="" style="margin-bottom: 0px;"><b>Interest</b></h4><br>
                <h4 id="" style="margin-bottom: 2px;"><b>Principal</b></h4>
            </div>

    </div>









  <div class="col-md-2 col-sm-2">
        <center><p style="font-size: 19px;    margin: 0 0 36px;">Old Months</p></center><br>
            <button type="button" id="old_month_div_1">2236.89</button>
            <input type="hidden" id="old_month_1" name="old_month_1" value="2236.89">
            <button type="button" id="old_month_div_2" style="    width: 57%;  ">400</button>
            <input type="hidden" id="old_month_2" name="old_month_2" value="400">
                        <span id="old_month_fee_show" style="position: absolute;margin: 7px 0px;"></span>
            <a href="#" id="old_month_extra_fee_a_tag" style="position: absolute;margin: 7px 12px;" data-toggle="modal" data-target="#oldMonthExtraFee">Edit Fee</a>
            <input type="hidden" id="old_month_extra_fee" name="old_month_extra_fee" value="">
                        <button type="button" id="old_month_div_3">2000</button>
            <input type="hidden" id="old_month_3" name="old_month_3" value="2000">
            <button type="button" id="old_month_div_4">16666.66</button>
            <input type="hidden" id="old_month_4" name="old_month_4" value="16666.66">
    </div>








         <div class="col-md-2 col-sm-2">
        <center><p style="font-size: 19px;    margin: 0 0 7px;">2nd Month Before Currrent Month</p></center><br>

<button type="button" id="first_month_div_1">693.78</button>
<input type="hidden" id="first_month_1" name="first_month_1" value="693.78">

<button type="button" id="first_month_div_2" style="width: 57%;">200</button>

<input type="hidden" id="first_month_2" name="first_month_2" value="200">
<span id="first_month_fee_show" style="position: absolute;margin: 7px 0px;"></span>
<a href="#" id="first_month_extra_fee_a_tag" style="position: absolute;margin: 7px 12px;" data-toggle="modal" data-target="#firstMonthExtraFee">Edit Fee</a>
<input type="hidden" id="first_month_extra_fee" name="first_month_extra_fee" value="">
<button type="button" id="first_month_div_3">1000</button>
<input type="hidden" id="first_month_3" name="first_month_3" value="1000">
<button type="button" id="first_month_div_4">8333.33</button>
<input type="hidden" id="first_month_4" name="first_month_4" value="8333.33">

<input type="hidden" name="first_month_due_date" value="2018-10-07">

    </div>



     <div class="col-md-2 col-sm-2">
        <center><p style="font-size: 19px;    margin: 0 0 7px;">1st Month Before Current Month</p></center><br>
            <button type="button" id="second_month_div_1">404.44</button>
            <input type="hidden" id="second_month_1" name="second_month_1" value="404.44">
            <button type="button" id="second_month_div_2" style="width: 57%;">200</button>
            <input type="hidden" id="second_month_2" name="second_month_2" value="200">
                        <span id="second_month_fee_show" style="position: absolute;margin: 7px 0px;"></span>
            <a href="#" id="second_month_extra_fee_a_tag" style="position: absolute;margin: 7px 12px;" data-toggle="modal" data-target="#secondMonthExtraFee">Edit Fee</a>
            <input type="hidden" id="second_month_extra_fee" name="second_month_extra_fee" value="">
                        <button type="button" id="second_month_div_3">1000</button>
            <input type="hidden" id="second_month_3" name="second_month_3" value="1000">
            <button type="button" id="second_month_div_4">8333.33</button>
            <input type="hidden" id="second_month_4" name="second_month_4" value="8333.33">
            <input type="hidden" name="second_month_due_date" value="2018-11-07">
    </div>



        <div class="col-md-2 col-sm-2">
         <center><p style="font-size: 19px;    margin: 0 0 36px;">Current Month</p></center><br>
           <button type="button" id="third_month_div_1">124.44</button>
           <input type="hidden" id="third_month_1" name="third_month_1" value="124.44">
            <button type="button" id="third_month_div_2" style="width: 57%;">200</button>
            <input type="hidden" id="third_month_2" name="third_month_2" value="200">
                        <span id="third_month_fee_show" style="position: absolute;margin: 7px 0px;"></span>
            <a href="#" id="third_month_extra_fee_a_tag" style="position: absolute;margin: 7px 12px;" data-toggle="modal" data-target="#thirdMonthExtraFee">Edit Fee</a>
            <input type="hidden" id="third_month_extra_fee" name="third_month_extra_fee" value="">
                        <button type="button" id="third_month_div_3">1000</button>
            <input type="hidden" id="third_month_3" name="third_month_3" value="1000">
            <button type="button" id="third_month_div_4">8333.33</button>
            <input type="hidden" id="third_month_4" name="third_month_4" value="8333.33">
            <input type="hidden" name="third_month_due_date" value="2018-12-07">
    </div>

    <input type="hidden" name="get_the_current_month_due_date_id" value="425">

                                                         <div class="col-md-2 col-sm-2">
         <center><p style="font-size: 21px;    margin: 0 0 36px;">Total Pay Now</p></center><br>
         <button id="total_pay_div_1" disabled="" style="    border-color: green;">00.00</button>
         <input type="hidden" id="total_pay_1" name="total_pay_1" value="00.00">
            <button id="total_pay_div_2" disabled="" style="    border-color: green;">00.00</button>
            <input type="hidden" id="total_pay_2" name="total_pay_2" value="00.00">
            <button id="total_pay_div_3" disabled="" style="    border-color: green;">00.00</button>
            <input type="hidden" id="total_pay_3" name="total_pay_3" value="00.00">
            <button id="total_pay_div_4" disabled="" style="    border-color: green;">00.00</button>
            <input type="hidden" id="total_pay_4" name="total_pay_4" value="00.00">

    </div>

    <input type="hidden" id="input_hidden_field" name="input_hidden_field[]" value="">
    <input type="hidden" id="input_hidden_field2" name="input_hidden_field2" value="a:5:{i:1;a:6:{s:8:&quot;due_date&quot;;s:10:&quot;2018-08-07&quot;;s:2:&quot;id&quot;;i:421;s:9:&quot;penalties&quot;;d:1263.1111065999999;s:4:&quot;fees&quot;;s:6:&quot;200.00&quot;;s:8:&quot;interest&quot;;s:9:&quot;1000.0000&quot;;s:9:&quot;principal&quot;;s:9:&quot;8333.3333&quot;;}i:2;a:6:{s:8:&quot;due_date&quot;;s:10:&quot;2018-09-07&quot;;s:2:&quot;id&quot;;i:422;s:9:&quot;penalties&quot;;d:973.7777742999999;s:4:&quot;fees&quot;;s:6:&quot;200.00&quot;;s:8:&quot;interest&quot;;s:9:&quot;1000.0000&quot;;s:9:&quot;principal&quot;;s:9:&quot;8333.3333&quot;;}i:3;a:6:{s:8:&quot;due_date&quot;;s:10:&quot;2018-10-07&quot;;s:2:&quot;id&quot;;i:423;s:9:&quot;penalties&quot;;d:693.7777753;s:4:&quot;fees&quot;;s:6:&quot;200.00&quot;;s:8:&quot;interest&quot;;s:9:&quot;1000.0000&quot;;s:9:&quot;principal&quot;;s:9:&quot;8333.3333&quot;;}i:4;a:6:{s:8:&quot;due_date&quot;;s:10:&quot;2018-11-07&quot;;s:2:&quot;id&quot;;i:424;s:9:&quot;penalties&quot;;d:404.444443;s:4:&quot;fees&quot;;s:6:&quot;200.00&quot;;s:8:&quot;interest&quot;;s:9:&quot;1000.0000&quot;;s:9:&quot;principal&quot;;s:9:&quot;8333.3333&quot;;}i:5;a:6:{s:8:&quot;due_date&quot;;s:10:&quot;2018-12-07&quot;;s:2:&quot;id&quot;;i:425;s:9:&quot;penalties&quot;;d:124.444444;s:4:&quot;fees&quot;;s:6:&quot;200.00&quot;;s:8:&quot;interest&quot;;s:9:&quot;1000.0000&quot;;s:9:&quot;principal&quot;;s:9:&quot;8333.3333&quot;;}}">




    <div class="col-md-8 col-sm-8">
         <br>


         <b class="select_again" style="font-size:20px;visibility:hidden"><a href="create">Click Here</a> to Select Again.</b>


    </div>

<div class="col-md-3  col-sm-1">
         <h4 id=""><b>Excess Amount</b></h4>
         <h4 id=""><b>Total Amount</b></h4>
    </div>

<div class="col-md-1  col-sm-1">
         <h4 id="excess_amount_div">12000.00</h4>
         <input type="hidden" id="excess_amount" name="excess_amount" value="12000.00">
         <h4 id="total_amount_div">12000.00</h4>
         <input type="hidden" id="total_amount" name="total_amount" value="12000.00">
    </div>

</div>
</div>

<script>

$(() => {
'use strict';
var excess_amount = parseFloat($('#excess_amount').val());
var elems = [];
$('button').click(function() {
$(this).toggleClass('pressed');




var div_id = $(this).attr('id');
var input_id = div_id.replace('_div','');

if( ($(this).hasClass("pressed"))){
 elems.push(input_id);
}else{
 elems.splice(elems.indexOf(input_id), 1);
}
$('#input_hidden_field').val(JSON.stringify(elems));




 if((parseFloat($('#excess_amount').val())-parseFloat($(this).text()))<=0 && ($(this).hasClass("pressed"))){
     $(this).text(parseFloat($('#excess_amount').val()));
     var ret_id = div_id.replace('_div','');
     $('#'+ret_id).val(parseFloat($('#excess_amount').val()));
     $('#excess_amount').val('0.00');
     $('#excess_amount_div').text('0.00');
     $('#myDiv button').prop('disabled', true);
     $('.select_again').css("visibility", "visible");
     $(this).preventDefault();
 }


//For Penalties
if( ($(this).hasClass("pressed")) && div_id.includes('1')){

 var box_val1 = parseFloat($(this).text());
 var val1 = box_val1 + parseFloat($('#total_pay_1').val());
 document.getElementById("total_pay_div_1").innerHTML = parseFloat(val1).toFixed(2);
 $('#total_pay_1').val(parseFloat(val1).toFixed(2));



 var myaccess = parseFloat($('#excess_amount').val())-box_val1;
 document.getElementById("excess_amount_div").innerHTML = parseFloat(myaccess).toFixed(2);
 $('#excess_amount').val(parseFloat(myaccess).toFixed(2));




}else if(!($(this).hasClass("pressed")) && div_id.includes('1')){

 var box_val1 = parseFloat($(this).text());
 var val1 =  parseFloat($('#total_pay_1').val()) - box_val1;
 document.getElementById("total_pay_div_1").innerHTML = parseFloat(val1).toFixed(2);
 $('#total_pay_1').val(parseFloat(val1).toFixed(2));

 var myaccess = parseFloat($('#excess_amount').val())+box_val1;
 document.getElementById("excess_amount_div").innerHTML = parseFloat(myaccess).toFixed(2);
 $('#excess_amount').val(parseFloat(myaccess).toFixed(2));

}






//For Fees
if( ($(this).hasClass("pressed")) && div_id.includes('2')){

 var box_val1 = parseFloat($(this).text());
 var val1 = box_val1 + parseFloat($('#total_pay_2').val());
 document.getElementById("total_pay_div_2").innerHTML = parseFloat(val1).toFixed(2);
 $('#total_pay_2').val(parseFloat(val1).toFixed(2));


 var myaccess = parseFloat($('#excess_amount').val())-box_val1;
 document.getElementById("excess_amount_div").innerHTML = parseFloat(myaccess).toFixed(2);
 $('#excess_amount').val(parseFloat(myaccess).toFixed(2));

}else if(!($(this).hasClass("pressed")) && div_id.includes('2')){

 var box_val1 = parseFloat($(this).text());
 var val1 =  parseFloat($('#total_pay_2').val()) - box_val1;
 document.getElementById("total_pay_div_2").innerHTML = parseFloat(val1).toFixed(2);
 $('#total_pay_2').val(parseFloat(val1).toFixed(2));


 var myaccess = parseFloat($('#excess_amount').val())+box_val1;
 document.getElementById("excess_amount_div").innerHTML = parseFloat(myaccess).toFixed(2);
 $('#excess_amount').val(parseFloat(myaccess).toFixed(2));


}






//For Interest
if( ($(this).hasClass("pressed")) && div_id.includes('3')){

 var box_val1 = parseFloat($(this).text());
 var val1 = box_val1 + parseFloat($('#total_pay_3').val());
 document.getElementById("total_pay_div_3").innerHTML = parseFloat(val1).toFixed(2);
 $('#total_pay_3').val(parseFloat(val1).toFixed(2));


 var myaccess = parseFloat($('#excess_amount').val())-box_val1;
 document.getElementById("excess_amount_div").innerHTML = parseFloat(myaccess).toFixed(2);
 $('#excess_amount').val(parseFloat(myaccess).toFixed(2));

}else if(!($(this).hasClass("pressed")) && div_id.includes('3')){

 var box_val1 = parseFloat($(this).text());
 var val1 =  parseFloat($('#total_pay_3').val()) - box_val1;
 document.getElementById("total_pay_div_3").innerHTML = parseFloat(val1).toFixed(2);
 $('#total_pay_3').val(parseFloat(val1).toFixed(2));


 var myaccess = parseFloat($('#excess_amount').val())+box_val1;
 document.getElementById("excess_amount_div").innerHTML = parseFloat(myaccess).toFixed(2);
 $('#excess_amount').val(parseFloat(myaccess).toFixed(2));


}





//For Principal
if( ($(this).hasClass("pressed")) && div_id.includes('4')){

 var box_val1 = parseFloat($(this).text());
 var val1 = box_val1 + parseFloat($('#total_pay_4').val());
 document.getElementById("total_pay_div_4").innerHTML = parseFloat(val1).toFixed(2);
 $('#total_pay_4').val(parseFloat(val1).toFixed(2));


 var myaccess = parseFloat($('#excess_amount').val())-box_val1;
 document.getElementById("excess_amount_div").innerHTML = parseFloat(myaccess).toFixed(2);
 $('#excess_amount').val(parseFloat(myaccess).toFixed(2));

}else if(!($(this).hasClass("pressed")) && div_id.includes('4')){

 var box_val1 = parseFloat($(this).text());
 var val1 =  parseFloat($('#total_pay_4').val()) - box_val1;
 document.getElementById("total_pay_div_4").innerHTML = parseFloat(val1).toFixed(2);
 $('#total_pay_4').val(parseFloat(val1).toFixed(2));


 var myaccess = parseFloat($('#excess_amount').val())+box_val1;
 document.getElementById("excess_amount_div").innerHTML = parseFloat(myaccess).toFixed(2);
 $('#excess_amount').val(parseFloat(myaccess).toFixed(2));


}






});
});

function doSomething(element, e) {


var myval = element.value;

document.getElementById("excess_amount_div").innerHTML = myval;
$('#excess_amount').val(myval);

document.getElementById("total_amount_div").innerHTML = myval;
$('#total_amount').val(myval);


}
</script>

<!-- Modal -->
<div id="oldMonthExtraFee" class="modal fade" role="dialog">
  <div class="modal-dialog">
     <!-- Modal content-->
     <div class="modal-content">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">×</button>
           <h4 class="modal-title">Edit Fee</h4>
        </div>
        <div class="modal-body">

              <div class="form-group">
                 <label for="usr">Fee:</label>
                 <input type="number" class="form-control" id="old_month_extra_fee_input" name="old_month_extra_fee_input" required="">

              </div>
              <input id="btnSubmit" onclick="mycallbackfunction_oldmonth();" class="btn btn-success legitRipple" type="button" value="Update">

        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-default legitRipple" data-dismiss="modal">Close<span class="legitRipple-ripple" style="left: 49.0368%; top: 73.6842%; transform: translate3d(-50%, -50%, 0px); width: 225.475%; opacity: 0;"></span></button>
        </div>
     </div>
  </div>
</div>

<!-- Modal -->
<div id="firstMonthExtraFee" class="modal fade" role="dialog">
  <div class="modal-dialog">
     <!-- Modal content-->
     <div class="modal-content">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">×</button>
           <h4 class="modal-title">Edit Fee</h4>
        </div>
        <div class="modal-body">

              <div class="form-group">
                 <label for="usr">Fee:</label>
                 <input type="number" class="form-control" id="first_month_extra_fee_input" name="first_month_extra_fee_input" required="">

              </div>
              <input id="btnSubmit" onclick="mycallbackfunction_firstmonth();" class="btn btn-success legitRipple" type="button" value="Update">

        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-default legitRipple" data-dismiss="modal">Close<span class="legitRipple-ripple" style="left: 49.0368%; top: 73.6842%; transform: translate3d(-50%, -50%, 0px); width: 225.475%; opacity: 0;"></span></button>
        </div>
     </div>
  </div>
</div>

<!-- Modal -->
<div id="secondMonthExtraFee" class="modal fade" role="dialog">
  <div class="modal-dialog">
     <!-- Modal content-->
     <div class="modal-content">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">×</button>
           <h4 class="modal-title">Edit Fee</h4>
        </div>
        <div class="modal-body">

              <div class="form-group">
                 <label for="usr">Fee:</label>
                 <input type="number" class="form-control" id="second_month_extra_fee_input" name="second_month_extra_fee_input" required="">

              </div>
              <input id="btnSubmit" onclick="mycallbackfunction_secondmonth();" class="btn btn-success legitRipple" type="button" value="Update">

        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-default legitRipple" data-dismiss="modal">Close<span class="legitRipple-ripple" style="left: 49.0368%; top: 73.6842%; transform: translate3d(-50%, -50%, 0px); width: 225.475%; opacity: 0;"></span></button>
        </div>
     </div>
  </div>
</div>

<!-- Modal -->
<div id="thirdMonthExtraFee" class="modal fade" role="dialog">
  <div class="modal-dialog">
     <!-- Modal content-->
     <div class="modal-content">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">×</button>
           <h4 class="modal-title">Edit Fee</h4>
        </div>
        <div class="modal-body">

              <div class="form-group">
                 <label for="usr">Fee:</label>
                 <input type="number" class="form-control" id="third_month_extra_fee_input" name="third_month_extra_fee_input" required="">

              </div>
              <input id="btnSubmit" onclick="mycallbackfunction_thirdmonth();" class="btn btn-success legitRipple" type="button" value="Update">

        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-default legitRipple" data-dismiss="modal">Close<span class="legitRipple-ripple" style="left: 49.0368%; top: 73.6842%; transform: translate3d(-50%, -50%, 0px); width: 225.475%; opacity: 0;"></span></button>
        </div>
     </div>
  </div>
</div>
<script type="text/javascript">
    function mycallbackfunction_oldmonth(){

        if($('#old_month_extra_fee_input').val()==''){
              alert('Feild Must Not be empty');
              preventDefault();
        }
        $("#old_month_extra_fee_a_tag").css("display", "none");

        $('#old_month_2').val($('#old_month_extra_fee_input').val());
        document.getElementById("old_month_div_2").innerHTML = $('#old_month_extra_fee_input').val();

        $('#oldMonthExtraFee').modal('toggle');


    }


     function mycallbackfunction_firstmonth(){

        if($('#first_month_extra_fee_input').val()==''){
              alert('Feild Must Not be empty');
              preventDefault();
        }
        $("#first_month_extra_fee_a_tag").css("display", "none");



        $('#first_month_2').val($('#first_month_extra_fee_input').val());
        document.getElementById("first_month_div_2").innerHTML = $('#first_month_extra_fee_input').val();

        $('#firstMonthExtraFee').modal('toggle');


    }



    function mycallbackfunction_secondmonth(){

        if($('#second_month_extra_fee_input').val()==''){
              alert('Feild Must Not be empty');
              preventDefault();
        }
        $("#second_month_extra_fee_a_tag").css("display", "none");


        $('#second_month_2').val($('#second_month_extra_fee_input').val());
        document.getElementById("second_month_div_2").innerHTML = $('#second_month_extra_fee_input').val();

        $('#secondMonthExtraFee').modal('toggle');


    }

      function mycallbackfunction_thirdmonth(){

        if($('#third_month_extra_fee_input').val()==''){
              alert('Feild Must Not be empty');
              preventDefault();
        }
        $("#third_month_extra_fee_a_tag").css("display", "none");

        $('#third_month_2').val($('#third_month_extra_fee_input').val());
        document.getElementById("third_month_div_2").innerHTML = $('#third_month_extra_fee_input').val();

        $('#thirdMonthExtraFee').modal('toggle');


    }

</script>
    </body>
</html>
