$(document ).ready(function() {
  $('code').click(function() {
    $(this).addClass('language-none');
    $('span', this).contents().unwrap();
    $(this).wrapInner('<style contenteditable class="editable-style" type="text/css"></style>');
   // $(this).replace(/\r?\n/g, '');
    $(this).contents().unwrap();
  });

  // $('style[contenteditable]').blur(function() {
  //   $(this).wrapInner('<code class="language-css"></code>');
  //   $(this).contents().unwrap();
  // })
});
