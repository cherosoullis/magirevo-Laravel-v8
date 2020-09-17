// $("#name").on('keyup',function(){
//     // $("#slug").val($(this).val());
//     $("#slug").val(slugify($(this).val(), {
//       lower: true,
//       strict: true,
//     }));
// });
//
//
// console.log(slugify('το όνομα μου είναι'));
$(document).ready(function() {
  var minlength = 3;//check if more than 5 characters

$("#name").on('keyup',function(){
  // $("#slug").val($(this).val());
  $("#slug").val(slugify($(this).val(), {
    lower: true,
    strict: true,
  }));
  var sluging = slugify($(this).val());
  if (sluging.length >= minlength ){ //if there is slug performe the check
    console.log('true');
    $.ajax({
       type:"GET",
       url:"/slugList",
       success:function(res){
         // console.log(res);
        if(res){
            $.each(res,function(key,value){
              // var slug = $("#slug").val();
              // console.log("slug field value:"+sluging);
              // console.log(value);
              // if(sluging==value){ //doing only one loop
              //   value = value+"-1";
              //   $("#slug").val(value);
              // }
              // console.log("slug field value:"+ $("#slug").val());
              // var name = $("#slug").val()+'-';
              var name =  $("#name").val().concat('-')
              var increament = 0;
              while($("#slug").val()==value){
                increament = increament+1;
                // console.log('The field is'+$("#slug").val());
                $("#slug").val(name+increament);
              }
                // console.log(num++)
                // value = value+"-1";
                // $("#slug").val(value);
              //};
            });
            }else{
               $("#dynamicTable").empty();
            }
           }
        });
  }

});



});
