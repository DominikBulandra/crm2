$( document ).ready(function() {
    console.log( "basketready!" );

var html="";
var y = document.cookie;
  var res = y.split(";");
  var size= 0;
  for (var i = 0, len = res.length; i < len; i++) {
    if(res[i].includes("basket"))
    {
      html += (res[i]);
      html +=  ' <button onClick="delCookie(\'' + res[i] + '\')" />usuń</button>';
      size=size+1;
     
  html += ("<P>-------</P>");
  html += ("<a href= basket >przejdz</a>")
    }
    if (size==0)
    {
      html += ("<P>Koszyk pusty</P>");
    }
 
}
  
$('#basketdiv').html(html);
});