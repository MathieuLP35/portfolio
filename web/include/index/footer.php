<footer>
    <div class="container mt-3 d-flex flex-row justify-content-around flex-wrap">
            <p>Le Petitcorps Mathieu</p>
            <div><a href="https://www.linkedin.com/in/mathieu-le-petitcorps-6a650419a/" target="_blank" class="btn-social btn-outline-white text-white" title="Linkedin"><i class="fa fa-linkedin"></i></a></div>
            <a href="mention.html">
                <p><?php echo _FMENTION; ?></p>
            </a>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="js/chart-area-demo.js"></script>
    <script src="js/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-demo.js"></script>
    <script>
        var myVar;

        function myFunction() {
        myVar = setTimeout(showPage, 2500);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
        }
    </script>
    <script>
    $(document).ready(function(){
    $('[data-toggle="popover"]').popover();
    });
    </script>
</body>
</html>