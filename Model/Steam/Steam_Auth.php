<?php
require_once '__php__.php';

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

            $steam_id = $matches[1];

            $db = new DB();
            User::steam_login($_SESSION['uid'],$steam_id);
            unset($db);
            Alert::alerts("اکانت استیم شما با موفقیت متصل شد!",null,"info");

            if (!headers_sent()) {
                header('Location: '.account("dashboard.php"));
            } else {
                ?>
                <script type="text/javascript">
                    window.location.href="<?=account("dashboard.php")?>";
                </script>
                <noscript>
                    <meta http-equiv="refresh" content="0;url=<?=account("dashboard.php")?>" />
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

/*
if (isset($_GET['update'])){
    unset($_SESSION['steam_uptodate']);
    require 'userInfo.php';
    header('Location: '.$_SERVER['PHP_SELF']);
    exit;
}*/