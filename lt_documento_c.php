<script>
function resizeIframe(idIframe){
          var miIframe=document.getElementById(idIframe);
          var alturaPagina=miIframe.contentWindow.document.body.scrollHeight+20;
          miIframe.style.height=alturaPagina+"px"; 
}
</script>


<iframe src="lt_documento.php?v=<?php echo $_GET['v']; ?>" style="width:717px;height:900px" frameborder="0" scrolling="auto" id="phrame" onLoad="resizeIframe(this.id);"></iframe>