<?php
{   
    // Example of global var
    $var1 = 1;
    function global_var() 
    {
        global $var1;
        echo "Global var ".$var1."<br>";
    }

    
    global_var(); // function call
    
    // Example of local var
    function local_var() 
    {
        $var2 = 10;
        echo "Local var ".$var2."<br>";
    }

    local_var(); // function call

    // Example of static var
    function static_var() 
    {
        static $var3 = 100;
        $var3 ++; // increment value by 1
        echo "Static var ".$var3."<br>";
    }

    // function call 
    static_var();
    static_var();
    static_var();
}
?>