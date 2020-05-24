function trocar_class(a) {
  var i = a.getElementsByTagName("i")[0];
  if(i.className == 'fa fa-angle-down')
    i.className = 'fa fa-angle-up';
  else
    i.className = 'fa fa-angle-down';
}