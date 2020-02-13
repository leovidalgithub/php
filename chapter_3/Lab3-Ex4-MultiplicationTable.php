<?php include "includes/header.php" ?>

<body>
    <div id="page" align="center">
        <div id="content" style="width:800px">
            <?php include "includes/logo.php" ?>
            <?php include "includes/headerDiv.php" ?>
            <?php include "includes/menu.php" ?>
            <div id="contenttext">
                <?php include "includes/title.php" ?>
                <div class="bodytext" style="padding:12px;">
                    <form class="container" name="theForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div>
                            <label for="numbers">Select a Number : </label>
                            <select style="font-size: 1.2rem;" id="numbers" name="numbers">
                                <?php
                                    for ($i = 1; $i < 10; $i++)
                                        echo "<option value='$i'>$i</option>";
                                ?>
                            </select>
                        </div>
                        <div>
                            <input type="submit" name="submit" value="Get Multiplication Talbe">
                        </div>
                    </form>

                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numbers"])) {
                            $number = $_POST['numbers'];
                            echo "<div class='w3-container'>
                                       <table class='w3-table-all w3-centered' style='width:200px;'>
                                           <thead>
                                               <tr class='w3-red'>
                                                   <th>Operation</th>
                                                   <th>Result</th>
                                               </tr>
                                           </thead>
                                           <tbody>";
                            for ($i = 1; $i < 10; $i++) {
                                echo "<tr>";
                                echo "<td> $number x $i = </td>";
                                echo "<td>" . ($number * $i) . "</td>";
                                echo "</tr>";
                            };
                            echo "</tbody>
                                </table>
                            </div><hr>";
                        };
                    ?>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php"; ?>
    </div>

    <script>
        (function(d) {
            if (d.getElementById('numbers')) {
                d.getElementById('numbers').focus();
            }
        })(document);
    </script>
</body>

</html>