<?php
$tokens = array();

function generate_token($user){
    global $tokens;
    $token = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 10)),0,10);

    if(array_key_exists($user,$tokens)){
        if(count($tokens[$user]) >= 10){
            array_shift($tokens[$user]);

        }
        $tokens[$user][]= $token;

    } else {
        $tokens[$user] = array($token);
    }
    return $token;
}

function verify_token($user,$token){
    global $tokens;
    if(array_key_exists($user,$tokens)){
        if(in_array($token,$tokens[$user])){
            $index = array_search($token,$tokens[$user]);
            unset($tokens[$user][$index]);
            return true;
        } else {
            return false;
        }
    }
    return false;
}

$user1 = "user1";
$user2 = "user2";

$token1_1 = generate_token($user1);
print("token untuk user1 adalah " . $token1_1);
echo "<br>";

$token1_2 = generate_token($user1);
print("token untuk user1 ke-2 adalah " . $token1_2);
echo "<br>";

$token1_3 = generate_token($user1);
print("token untuk user1 ke-3 adalah " . $token1_3);
echo "<br>";

$token1_4 = generate_token($user1);
print("token untuk user1 ke-4 adalah " . $token1_4);
echo "<br>";

$token1_5 = generate_token($user1);
print("token untuk user1 ke-5 adalah " . $token1_5);
echo "<br>";

$token1_6 = generate_token($user1);
print("token untuk user1 ke-6 adalah " . $token1_6);
echo "<br>";

$token1_7 = generate_token($user1);
print("token untuk user1 ke-7 adalah " . $token1_7);
echo "<br>";

$token1_8 = generate_token($user1);
print("token untuk user1 ke-8 adalah " . $token1_8);
echo "<br>";

$token1_9 = generate_token($user1);
print("token untuk user1 ke-9 adalah " . $token1_9);
echo "<br>";

$token1_10 = generate_token($user1);
print("token untuk user1 ke-10 adalah " . $token1_10);
echo "<br>";

print_r($tokens);
echo "<br>";

$token1_11 = generate_token($user1);
print("token untuk user1 ke-11 adalah " . $token1_11);
echo "<br>";

print_r($tokens);
echo "<br>";

$token2_1 = generate_token($user2);
print("token untuk user2 adalah " . $token2_1);
echo "<br>";

print("verifikasi token untuk user1 : " . (verify_token($user1,$token1_1) ? "true" : "false"));
echo "<br>";

print_r($tokens);
echo "<br>";

print("verifikasi token untuk user1 : " . (verify_token($user1,$token1_2) ? "true" : "false"));
echo "<br>";

print_r($tokens);
echo "<br>";

print("verifikasi token untuk user2 : " . (verify_token($user2,$token1_3) ? "true" : "false"));
echo "<br>";

print_r($tokens);
echo "<br>";

print("verifikasi token untuk user2 : " . (verify_token($user2,$token2_1) ? "true" : "false"));
echo "<br>";

print_r($tokens);
echo "<br>";
?>