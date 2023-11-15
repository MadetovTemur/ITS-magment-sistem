


    <script>
        $(document).ready(function(){
            $("#navLinks li:nth-child(<?php echo $page ?? '0'?>) a").addClass('active');
        });

        const date = new Date();

        var m = new String(date.getMinutes()),
            h = new String(date.getHours()),
            dd = new String(date.getDate()),
            mm = new String(date.getMonth()),
            yy = new String(date.getFullYear()),
            hdate = document.getElementById('date');

        hdate.innerHTML =  h+":"+m+" "+dd+"/"+mm+"/"+yy;

        setInterval( () => {
            const date = new Date();

            var m = new String(date.getMinutes()),
                h = new String(date.getHours()),
                dd = new String(date.getDate()),
                mm = new String(date.getMonth()),
                yy = new String(date.getFullYear()),
                hdate = document.getElementById('date');


            hdate.innerHTML = h+":"+m+"  "+dd+"/"+mm+"/"+yy;
        },7000);

    </script>
    <script type="text/javascript" src="../assets/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
    <?= $script ?? null ?>
  </body>
</html>