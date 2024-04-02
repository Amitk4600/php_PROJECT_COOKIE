<?php
echo "
<script>
function display(input)
{
    let password = document.getElementById(input);
    let eye = document.getElementById('eye_' + input);

    if(password.type === 'password'){
        password.type = 'text'
    }else{
    
        password.type = 'password'
    }

}
</script>
"

?>