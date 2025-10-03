<input id="n1"><input id="n2"><input id="n3">
<button onclick="h()">=</button>
<p id="c"></p>
<script>
function h(){
  let o=(+n1.value+ +n2.value+ +n3.value)/3;
  c.innerText=`Ort: ${o.toFixed(1)} - ${o>=50?"Geçti":"Kaldı"}`;
}
</script>
