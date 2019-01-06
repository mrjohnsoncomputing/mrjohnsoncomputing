<script>
  dom.onload(function() {
      let body = document.body;
      let html = document.documentElement;
      let height = Math.max( 
          body.scrollHeight, 
          body.offsetHeight, 
          html.clientHeight, 
          html.scrollHeight, 
          html.offsetHeight 
      );
      document.getElementsByClassName("navbar-side")[0].style.height = height+"px";
  });
</script>