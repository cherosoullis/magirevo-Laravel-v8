$(document).ready(function() {
  // Chnage fontawsome base on text input using event listener
  $('.summernoteDescription').summernote({
      placeholder: 'Καταχωρήστε μια μικρή περιγραφή' ,
      // lang: 'ko-KR',
      tabsize: 2,
      height: 150
    });


  const source = document.getElementById('execution');
  const plus = document.getElementById('fa-plus');
  const inputHandler = function(e) {
    if (e.target.value < 1) //if text box is empty prevent adding field
    {
      // plus.style.color='red';
      plus.style.opacity = '0.2';
      plus.style.cursor = 'not-allowed';
    }else{
      plus.style.opacity = '1';
      plus.style.cursor = 'pointer';
    }
    console.log(e.target.value);
    // console.log(e.data);

  }
  source.addEventListener('input', inputHandler);

  // var i = 1;
  // var id = $(".nav-tabs").children().length;
  // console.log(id);
  //
  // $("#add-description").click(function(){
  //   var tabname = $("#tabname").val();
  //   console.log(tabname);
  //   ++i;
  //   $(".nav-tabs").append('<li class="nav-item navpanel" ><a class="nav-link" href="#description'+i+'" data-toggle="tab">'+tabname+'</a><span>x</span></li>');
  //   $(".tab-content").append('<div class="tab-pane" id="description'+i+'"><textarea name="description[]" id="description'+i+'" class="summernote'+i+'" required></textarea></div>');
  //
  //   $(".summernote"+i).summernote();
  //   $("#tabname").val('');
  //   console.log($("#tabname").val());
  // });

  $(".nav-tabs").on("click", "a", function (e) {
          e.preventDefault();
          if (!$(this).hasClass('add-contact')) {
              $(this).tab('show');
          }
      })
      .on("click", "span", function () {
          var anchor = $(this).siblings('a');
          $(anchor.attr('href')).remove();
          $(this).parent().remove();
          $(".nav-tabs li").children('a').first().click();
      });

  $('.add-execution').click(function (e) {
      e.preventDefault();
      var id = $(".nav-tabs").children().length; //think about it ;)
      console.log(id);
      var tabname = $('#execution').val();
      var tabId = 'execution_' + id;
      if (tabname.length < 1) //if text box is empty prevent adding field
      {
        window.alert("Πρέπει να καταχωρηθεί τίτλος για εκτέλεση");
        return false;
      };//I have added hidden field to get the title of the tab
      $(this).closest('li').before('<li class="nav-item"><input name="exectitle[]" id="exectitle" class="input-text" type="hidden" readonly value="'+tabname+'"><a class="nav-link" href="#execution_0'+id+'" data-toggle="tab">'+tabname+'</a><span><i class="fas fa-minus"></i></span></li>');
      $('.tab-content').append('<div class="tab-pane" id="execution_0'+id+'"><div class="tab-pane" id="execution"><textarea name="execution[]" class="summernote'+id+'" required></textarea></div></div>');
     $('.nav-tabs li:nth-child(' + id + ') a').click();
     // $('#execution').val('');
     //Summernote needs to be instantianted
     $('.summernote'+id).summernote({
         placeholder: 'Καταχωρήστε '+id+'ο Βήμα' ,
         // lang: 'ko-KR',
         tabsize: 2,
         height: 200
       });
       //Empty the text field for new value
       // $('#execution').val('');
       // tabname.value = '';
       // $("#file-input").val(null);
       $('#execution').val(null);
       plus.style.opacity = '0.2';
       plus.style.cursor = 'not-allowed';
  });

});
