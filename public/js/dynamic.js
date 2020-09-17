// Used for Select 2 in Create Form for dynamic adding ingredients
$(document).ready(function() {
// console.log('data');


var i = 1;

$("#addTitle").click(function(){
  ++i;
$("#dynamicTable").append('<tr class="incrow'+i+'">'+
'<td colspan="4"><input type="text" name="addIngredients['+i+'][heading]" placeholder="Τίτλος:Υλικά Συνταγής" style="width: 100%" class="form-control" /></td>'+
'<td><button type="button" class="btn btn-danger remove-tr">Διαγραφή</button></td></tr>');
});

$("#add").click(function(){
    ++i;

    $.ajax({
       type:"GET",
       url:"/ingretientsList",
       success:function(res){
        if(res){
          $("#dynamicTable").append('<tr class="incrow'+i+'">'+
          '<td><input type="text" name="addIngredients['+i+'][qty]" placeholder="Καταχώρησε Ποσότητα" style="width: 100%" class="form-control qty" /></td>'+
          '<td><select name="addIngredients['+i+'][unit]" data-placeholder="Επιλέξτε Μονάδα" style="width: 100%" class="form-control js-multiple-unit"><option></option><option value="κ.γ.">Κουταλάκι Γλυκού</option><option value="κ.σ.">Κουτάλι Σούπους</option><option value="φλ.">Φλυντζάνι</option><option value="σκ.">Σκελίδα</option><option value="κουτί">Κουτί</option><option value="κούπα">Κούπα</option><option value="pieces">Τεμάχιο</option><option value="2">Δέσμη</option><option value="2">Πρέζα</option><option value="gr">Γραμμάρια</option><option value="Kg">Κιλά</option><option value="ml">Χιλιοστόλιτρα </option><option value="l">Λίτρα</option></select></td>'+
          // '<td><input type="text" name="addmore['+i+'][unit]" placeholder="Καταχώρησε Μονάδα Μέτρησης" class="form-control unit" /></td>'+
          '<td><select name="addIngredients['+i+'][incredient]" data-placeholder="Επιλέξτε Συστατικό" style="width: 100%" class="form-control incred incredient'+i+' js-multiple">'+
          '<option></option>');
            $.each(res,function(key,value){
            $('.incredient'+i).append('<option value="'+key+'">'+value+'</option>');
            });
            $("#dynamicTable").append('</select></td>');
            $('.incrow'+i).append('<td><input type="text" name="addIngredients['+i+'][details]" placeholder="Σημειώσεις" class="form-control" /></td>' +
            '<td><button type="button" class="btn btn-danger remove-tr">Διαγραφή</button></td></tr>');
          // '<td><input type="text" name="addmore['+i+'][incredient]" placeholder="Καταχώρησε Συστατικό" class="form-control" /></td>'+

          $('.js-multiple').select2({
            tags: true
            // theme: 'bootstrap4',
            // tags: true,
            // placeholder: "Επέλεξε συστατικά",
            // tokenSeparators: [',', ' ']
           });
           $('.js-multiple-unit').select2({
             width: 'resolve',
             tags: true,
             // theme: 'bootstrap4',

             placeholder: "Επέλεξε συστατικό",
             allowClear: true,
             tokenSeparators: [',', ' ']
            });

        }else{
           $("#dynamicTable").empty();
        }
       }
    });


});

$(document).on('click', '.remove-tr', function(){
     $(this).parents('tr').remove();
});
});
