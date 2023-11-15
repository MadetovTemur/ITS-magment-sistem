
    <script src="../assets/ajax/jquery-3.7.1.js"></script>  

    <script>
        $(document).ready(function(){
            $("#navLinks li:nth-child(<?php echo $page ?? '0'?>) a").addClass('active');
        });
    </script>
    <script type="text/javascript" src="../assets/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
  </body>
</html>