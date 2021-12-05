<?php
require_once '__php__.php';

if (isset($_GET['steam_login'])){
    require 'openid.php';
    try {
        $openid = new LightOpenID(Domain_Name);

        if(!$openid->mode) {
            $openid->identity = 'https://steamcommunity.com/openid';
            header('Location: ' . $openid->authUrl());
        } elseif ($openid->mode == 'cancel') {
            echo 'User has canceled authentication!';
        } else {
            if($openid->validate()) {
                $id = $openid->identity;
                $ptn = "/^https?:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
                preg_match($ptn, $id, $matches);

                $_SESSION['steamid'] = $matches[1];
                if (!headers_sent()) {
                    header('Location: '.$_SERVER['PHP_SELF']);
                } else {
                    ?>
                    <script type="text/javascript">
                        window.location.href="<?=$_SERVER['PHP_SELF']?>";
                    </script>
                    <noscript>
                        <meta http-equiv="refresh" content="0;url=<?=$_SERVER['PHP_SELF']?>" />
                    </noscript>
                    <?php
                }
                exit;
            } else {
                echo "User is not logged in.\n";
            }
        }
    } catch(ErrorException $e) {
        echo $e->getMessage();
    }
}
/*
if (isset($_GET['update'])){
    unset($_SESSION['steam_uptodate']);
    require 'userInfo.php';
    header('Location: '.$_SERVER['PHP_SELF']);
    exit;
}*/