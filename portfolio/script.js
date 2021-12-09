



$('*').click(function (e) {
  e.stopPropagation();
  $('#kasas').text(event.target.nodeName);
  $(this).css('text-transform', 'uppercase');
  
  console.log($(this).length);
})