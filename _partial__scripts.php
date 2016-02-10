<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
  // Counter seit Start des LMIV
  var startLMIV = new Date(2014, 11, 13);
  var now = new Date;
  var result = Math.round( (now - startLMIV) / (1000 * 60 * 60 * 24) ); // round the amount of days
  document.getElementById("dayCounterLMIV").innerHTML = result;
</script>
