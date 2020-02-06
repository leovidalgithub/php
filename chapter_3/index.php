<?php include "includes/header.php" ?>

<body>
    <div id="page" align="center">
        <div id="content" style="width:800px">
            <?php include "includes/logo.php" ?>
            <?php include "includes/headerDiv.php" ?>
            <?php include "includes/menu.php" ?>
            <div id="contenttext">
                <?php include "includes/title.php" ?>
                <div class="bodytext" style="padding:12px;" align="justify">
                    <?php
                    if (isset($_POST['submit'])) {
                        include "includes/result.php";
                    } else {
                        include "includes/form.php";
                    }
                    ?>
                </div>
            </div>
            <?php include "includes/footer.php"; ?>
        </div>
    </div>
    <script>
        (function(d) {
            if (d.getElementById('empid')) {
                d.getElementById('empid').focus();
            }
            var backbtn = d.getElementById('gobackbutton');
            if (backbtn) {
                backbtn.addEventListener('click', function() {
                    d.location.href = '';
                });
            }
        })(document);
    </script>
</body>

</html>