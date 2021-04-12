$(function(){
    function onInputSearchUsers(){
        let searchString = $('#Search').val();
        $.get(
            'searchUsers.php',
            {search:searchString},
            onAjaxSearchUsers
        );
    }
    
    function onAjaxSearchUsers(dataUsers){
        $('#zone').html(dataUsers);
    }
    
    $('#Search').on('input',onInputSearchUsers);
});
