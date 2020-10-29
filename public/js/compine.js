//initialize Slider
$('#ex1').slider({
  // tooltip: 'always'
	// formatter: function(value) {
	// 	return 'Ποσότητα: ' + value;
	// }
});

//initialize select2 in create form
$(document).ready(function() {
//global defaults
$.fn.select2.defaults.set("theme", "bootstrap4");

    $('.js-multiple').select2({
     // theme: 'bootstrap4',
     tags: true, //Select2 can dynamically create new options from text input
     placeholder: "Επέλεξε Κατηγορία",
     tokenSeparators: [',', ' '],
		 width: 'resolve' //to be able to change width
    });

   $('.js-multiple-unit').select2({
   // theme: 'bootstrap4',
   tags: true,
   placeholder: "Επέλεξε Μονάδα",
   allowClear: true,
   tokenSeparators: [',', ' '],
   width: 'resolve' //to be able to change width
   });

    $('.js-multiple-cousine').select2({
    // theme: 'bootstrap4',
    tags: true,
    placeholder: "Επέλεξε κουζίνα",
    allowClear: true,
    tokenSeparators: [',', ' '],
    width: 'resolve' //to be able to change width
    });

    $('.js-multiple-ingretients').select2({
    // theme: 'bootstrap4',
    tags: true,
    // placeholder: "Επέλεξε συστατικά"
    placeholder: "Επέλεξε συστατικό",
    allowClear: true,
    tokenSeparators: [',', ' '],
    width: 'resolve' //to be able to change width
   });

   $('.js-multiple-tags').select2({
   // theme: 'bootstrap4',
   tags: true,
   placeholder: "Eτικέτα",
   tokenSeparators: [','],
   width: 'resolve' //to be able to change width
   // placeholder: {
   //    id: '-1', // the value of the option
   //    text: 'Select an option'
   //  }
  });
    $('.js-multiple-portion').select2({
    // theme: 'bootstrap4',
    tags: true,
    placeholder: "Eτικέτα",
    tokenSeparators: [',', ' '],
    width: 'resolve' //to be able to change width
    // placeholder: {
    //    id: '-1', // the value of the option
    //    text: 'Select an option'
    //  }
   });

});

const actualBtn = document.getElementById('actual-btn');

const fileChosen = document.getElementById('file-chosen');

actualBtn.addEventListener('change', function(){
  fileChosen.textContent = this.files[0].name
})

$('#reload').click(function () {
    $.ajax({
        type: 'GET',
        url: '../reload-captcha',
        success: function (data) {
            $(".captcha span").html(data.captcha);
        }
    });
});
