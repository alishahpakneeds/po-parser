<?php 
    include_once 'PoParser.php';
    $ob = new PoParser();
    $ob->uploadParseFile();
?>
<html>
    <head>
        <style>
            body h1,body div.form_content{
                margin-left: 20px;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <h1>Upload Po File</h1>
        <div>
            <?php  $ob->printFlash("success"); ?>
        </div>
        <div class="form_content" style="">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                <table cellspacing="0" cellpadding="2">
                    <tr>
                        <td><label>Upload Po File</label></td>
                        <td><input type="file" id="po_file" name="po_file" accept=".po" /></td>
                    </tr>
                    <tr>
                        <td><label>Include Header</label></td>
                        <td><input type="checkbox" id="include_header" name="include_header" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Upload & Convert" />
                            <span style="clear:both"><?php echo $ob->error; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Result</td>
                        <td>
                            <?php
                                if(isset($_GET['resx_file'])){
                                    echo "<a href='".$ob->getUploadedUrl().$_GET['resx_file'].".resx' target='_blank'>";
                                        echo $_GET['resx_file'];
                                    echo "</a>";
                                }
                            ?>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>