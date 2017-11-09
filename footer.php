<div class="row" style="margin-top:10px;">
    <div class="small-12">
        <a><nav style="display:inline-block">
                Current Time : 
            <span id="demo2"></span>

        </nav></a>
        <script>
            var myVar=setInterval(function(){myTimer()},1000);
            function myTimer() {
                var d = new Date();
                document.getElementById("demo2").innerHTML= d.toLocaleTimeString();

                }
        </script>
        
        <ul class="right">
          <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed and Coded by
              <a href="https://github.com/AnshulHedau" target="_blank">Anshul</a>,
                    <a href="#" target="_blank">Ronit</a> and <a href="#" target="_blank">Saurav</a>
                </div>
          
        </ul>
        
  </div>
</div>