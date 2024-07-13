<?php


function generateRandomString($n)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}


class Authentication
{
    public $listUserToken = [
        'userA' => [],
        "userB" => [],
        "userC" => []
    ];


    public function generateToken(string $userName)
    {
        // CHECK USERNAME ADA ATAU TIDAK
        if (!array_key_exists($userName, $this->listUserToken)) {
            return "User not found";
        }

        // GENERATE TOKEN
        $token = generateRandomString(32);

        // CHECK LENGTH ARRAY TOKEN
        if (count($this->listUserToken[$userName]) >= 10) {
            // REMOVE FIRST INDEX

            array_shift($this->listUserToken[$userName]);
        }
        // PUSH NEW TOKEN
        array_push($this->listUserToken[$userName], $token);

        // RETURN GENERATED TOKEN
        return $token;
    }


    public function verifyToken(string $userName, string $token)
    {

        $isValid = true;

        if (!in_array($token, $this->listUserToken[$userName])) {
            $isValid = false;
        }
        return $isValid;
    }
}

function main()
{
    // EXAMPLE
    $userData = "userA";

    $instance = new Authentication();

    // SIMULATE 10 DATA
    for ($i = 0; $i < 10; $i++) {
        $instance->generateToken($userData);
    }


    // 
    echo "CURRENT 10 USER TOKEN: \n";
    print_r($instance->listUserToken[$userData]);

    // SIMULATE ADD NEW TOKEN
    $instance->generateToken($userData);

    // SIMULATE 10 DATA AFTER ADD NEW TOKEN
    echo "CURRENT 10 USER TOKEN AFTER ADD NEW TOKEN: \n";
    print_r($instance->listUserToken[$userData]);

    // SIMULATE VERIFY TOKEN

    $sampleToken =  $instance->generateToken($userData);

    echo "IS TOKEN VALID: " . $instance->verifyToken($userData, $sampleToken);
}

main();
