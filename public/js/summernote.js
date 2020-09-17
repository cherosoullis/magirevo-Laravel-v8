//Initialization of summernote
$(document).ready(function() {
    // $('#summernote').summernote();
    $('.summernote').summernote({
        placeholder: 'Καταχωρήστε τη περιγραφή της συνταγής',
        // lang: 'ko-KR',
        tabsize: 2,
        height: 200
      });
    $('.summernote1').summernote({
        placeholder: 'Καταχωρήστε Επόμενο βήμα',
        // lang: 'ko-KR',
        tabsize: 2,
        height: 200
      });
});
