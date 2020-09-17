function loadPreview(input, id) {
  id = id || '#preview_img';
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      $('#image').val(input.files[0]['name']);
      // console.log(input.files[0]['name']);
      reader.onload = function (e) {
          $(id)

                  .attr('src', e.target.result)
                  .width(350)
                  .height(350);
console.log(e.target.result);

      };

      reader.readAsDataURL(input.files[0]);
  }
}
