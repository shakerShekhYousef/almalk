<?php

function myTestFunction()
{
    return 'this is a simple test function from readerstacks.com';
}

function returnError($errNum, $msg)
{
    return response()->json([
        'status' => false,
        'errNum' => $errNum,
        'msg' => $msg,
    ]);
}

function returnSuccessMessage($msg = '', $errNum = '0000')
{
    return ['status' => true,
        'errNum' => $errNum,
        'msg' => $msg, ];
}

function returnData($key, $value, $msg = '')
{
    return response()->json([
        'status' => true,
        'errNum' => 'S000',
        'msg' => $msg,
        $key => $value,
    ]);
}
