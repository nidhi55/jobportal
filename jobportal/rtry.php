<form>
  <input type="date" name="dt" id="dt1">
  <input type="submit" name="submit" class="key" onclick="myFunction()">
</form>
<script type="text/javascript">
 function myFunction() {
  var d = new Date(1999,12,31);
  var d1=Date("dt1");
  
  alert(d1);
}
</script>