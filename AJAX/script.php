<script>
  $(document).ready(function(){
    $("#getContent").click(function(){
    $.get("babynames.php",
 {name: $("#name").val(), gender: $("#gender").val(),   
 type:"xml"},processResponse);
   });
   function processResponse(data) {
     $(data).find('rank').each(function() {
       var rank = $(this).text();
       var year = $(this).attr("year");
       var name = $("#name").val();
       var str = "In " + year + " " + name + " was number " 
                           + rank + "<br/>";
       $("#updateArea").append(str);
     });
   }
  });
</script>