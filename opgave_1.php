<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

            <fieldset>
                <h2>Get and Post</h2>
                <dl class="clearfix">
                    <dt><label for="tekstveld1">tekstveld1?</label></dt>
                    <dd class="text">
                        <input type="text" id="tekstveld1" name="tekstveld1" value="" />
                    </dd>

                    <dt><label for="tekstveld2">tekstveld2?</label></dt>
                    <dd class="text">
                        <input type="text" id="tekstveld2" name="tekstveld2" value="<?php echo isset($_GET['tekstveld1']) ? htmlentities($_GET['tekstveld1']) : ''; ?>" />
                    </dd>

                    <dt class="full clearfix" id="lastrow">
                        <input type="submit" name="btnSubmit" value="Send" />
                    </dt>
                </dl>
            </fieldset>
        </form>
    </body>
</html>