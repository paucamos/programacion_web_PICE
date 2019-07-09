<html>
<head>
    <script src="../../tema5_jquery/jquery-3.4.1.min.js"></script>
    <script src="../jquery-ui-1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="../jquery-ui-1.12.1/jquery-ui.css">
</head>
<style>
    .modal {
        display: none;
    }
</style>
<body>
<table border="1">
    <tr>
        <th>Empresa</th>
        <th>Contacte</th>
    </tr>
    <?php
    include('conection.php');
    $query = "SELECT * FROM suppliers";
    $result = $con->query($query);

    while ($row = $result->fetch_assoc()) {
        echo "<tr id='element" . $row['SupplierID'] . "'>";
            echo "<td>" . $row['CompanyName'] . "</td>";
            echo "<td>" . $row['ContactName'] . "</td>";
            echo "<td id='" . $row['SupplierID'] . "' class='supplier-id'>Elimina</td>";
        echo "</tr>";
    }
    ?>
</table>
<div id="dialog-confirm" title="Empty the recycle bin?" class="modal">
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>These items will be
        permanently deleted and cannot be recovered. Are you sure?</p>
</div>
<script>
    $(function () {
        $('.supplier-id').click(function () {
            var id = this.id;
            var link = "ex10_modifica.php";
            $.ajax({
                url: link,
                method: "POST",
                data: {
                    supplierId: id
                },
                success: function (data) {
                    if (data > 0) {
                        $('.modal').css("display", "block");
                        $("#dialog-confirm").dialog({
                            resizable: false,
                            height: "auto",
                            width: 400,
                            modal: true,
                            buttons: {
                                "Elimina": function () {
                                    $(this).dialog("close");
                                    $.ajax({
                                        url: "ex10_elimina.php",
                                        method: "POST",
                                        data: {
                                            supplierId: id
                                        },
                                        success: function (data, status) {
                                            $('#element' + id).remove();
                                        }
                                    });
                                },
                                "Reubica": function () {

                                },
                                "Cancela": function () {
                                    $(this).dialog("close");
                                }
                            }
                        });
                    } else {
                        $.ajax({
                            url: "ex10_elimina.php",
                            method: "POST",
                            data: {
                                supplierId: id
                            },
                            success: function (data, status) {
                                $('#element' + id).remove();
                            }
                        });
                    }
                }
            });
        });
    });
</script>
</body>
</html>
