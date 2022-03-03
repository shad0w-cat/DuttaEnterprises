<?php
session_start();
session_unset();
session_destroy();
echo "Redirecting ........ <br>";
echo '<script> 
console.log("redirecting");
var i = 0;
var redirect = setInterval(function () {
    console.log("redirecting");
    i++; 
    if (i>2)
    {
        clearInterval(redirect);
        window.location.href="login";
    }
}, 1000);
</script>
';
?>