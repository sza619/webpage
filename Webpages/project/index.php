<!DOCTYPE html>
<html lang="en">
<head>
    <title>Database</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            img{
                width: 20vw;
                margin-left: 30px;
                margin-top: 20px;
            }
            form{
                display: flex;
                flex-direction: column;
                margin-top: 1vh;
                margin-right: 3vw;
            }
            p{font-size: large;}
            table{background-color:rgb(166, 233, 250);}
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
            span{
            display: grid;
            grid-template-columns: 1fr 2fr;
            margin-bottom: 5px;
            }
        </style>
</head>

    <body>
        <div class="p-5 bg-info text-center">
            <center><h1>Form</h1></center>
            <p>Details about the resultant images after processing</p>
        </div>
        <div class="container mt-5">
            <table class="table">
                
                    <td>
                        <form action="modified.php" method="post">
                            
                            <p><b>Cultivator</b></p>
                                <span><label>ID:</label>
                                <input type="text" name="id" placeholder="123456" pattern="[0-9]{6}" required></span>
                                <span><label>Farm Location:</label>
                                <input type="text" name="fl" required></span>
                                <span><label>Harvest Date:</label>
                                <input type="date" name="hdate" required></span>
                            <p>
                                <b>Distributor</b></p>
                                <span><label>Name:</label>
                                <input type="text" name="dn" pattern="[A-Za-z]+" required></span>
                                <span><label>Batch Number:</label>
                                <input type="text" name="bn" placeholder="123" pattern="[0-9]{3}" required></span>
                                <span><label>Distribution Date:</label>
                                <input type="date" name="ddate" required></span>
                            
                            <p><b>Arrival</b></p>
                                <span><label>Arrival Date:</label>
                                <input type="date" name="adate" required></span>
                            <p><b>Quality</b></p>
                                    <span><input type="radio" name="q" required>
                                    <label>Accept</label></span>
                                    <span><input type="radio" name="q" required>
                                    <label>Reject</label></span>
                            <p><b>Remarks</b></p>
                                <textarea style="width: 20vw;" name="r"></textarea>
                            <center><input type="submit" class="btn btn-primary mt-3"></input></center>
                        </form>
                    </td>
                </tr>
                <!--<tr>
                    <td><img src="C:/Users/PER 12/Desktop/webpage/webpages/images/test(2).jfif"></td>
                    <td></td>
                    <td>
                        <form action="data.php" method="post">
                            <label for="date">Date</label>
                            <input type="date" name="date" required>
                            <label for="date">Distributor</label>
                            <input type="text" name="dis" required>
                            <label for="date">Supplier</label>
                            <input type="text" name="sup" required>
                            <label for="date">Idk</label>
                            <input type="text" name="idk" required>
                            <center><input type="submit" class="btn btn-primary mt-3"></input></center>
                        </form>
                    </td>
                </tr>-->
            </table>
        </div>
    </body>
</html>