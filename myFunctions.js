function showCountry()
{
  var source=document.getElementById("country");
  var theText=source.options[source.selectedIndex].text;
  result.value=theText;
}
