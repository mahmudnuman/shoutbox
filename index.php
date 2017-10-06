<?php
include_once "classes/shout.php";
$shout=new shout();



?>
<!DOCTYPE html>
<html>
<head>
    <title>SHOUT BOX BY MAHMUD NUMAN</title>
    <link rel="stylesheet" href="style.css" />

</head>
    <body>

    <div class="wrapper clr" >
        <header class="headsection clr">
            <h2> SHOUT BOX with PHP(OOP) & MySQLi</h2>
        </header>
        <section class="content clr">
            <div class="box">
                <ul>
                    <?php
                        $get_data=$shout->getAllData();
                        if ($get_data){

                            while ($data=$get_data->fetch_assoc()){ ?>
                                <li><span><?php echo $data['time'] ?></span>-<b><?php echo $data['name']; ?> </b><?php echo $data['body']; ?></li>
                           <?php } } ?>
                </ul>

            </div>
            <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $shoutdata=$shout->insertData($_POST);

        }



            ?>
            <div class="shoutform clr">
                <form action="" method="post">

                <table>

                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td><input type="text" name="name" required placeholder="Please Enter Your Name" /></td>
                    </tr>
                    <tr>
                        <td>Body</td>
                        <td>:</td>
                        <td><input type="text" name="body" required placeholder="Please Enter Your Message" /></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Shout It"/></td>

                    </tr>
                </table>

                </form>

            </div>
        </section>
        <footer class="footsection clr">
        <h2> Copyright &copy; Mahmud Numan</h2>

        </footer>
    </div>
    </body>
</html>