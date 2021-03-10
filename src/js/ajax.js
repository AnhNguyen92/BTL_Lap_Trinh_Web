$(document).on('click','#btn-add',function(e) {
    $('#err-username').removeClass("d-block").addClass("d-none");
    $('#err-password').removeClass("d-block").addClass("d-none");
    let username = $('#username').val().trim();
    let password = $('#password').val();
    let validInput = true;
    if (username.length < 6 || username.length > 100) {
        $('#err-username').removeClass("d-none").addClass("d-block");
        validInput = false;
    }
    if (password.length < 6 || password.length > 100) {
        $('#err-password').removeClass("d-none").addClass("d-block");
        validInput = false;
    }
    if (validInput) {
        let data = $("#user_form").serialize();
        $.ajax({
            data: data,
            type: "post",
            url: "function.php",
            success: function(result) {
                console.log(result);
                let dataResult = JSON.parse(result);
                if(dataResult.statusCode==200) {
                    $('#addUserModal').modal('hide');
                    alert('Thêm mới thành công!'); 
                    location.reload();						
                }
                else if(dataResult.statusCode==201){
                    alert(dataResult);
                }
            }
        });
    }
});

$(document).on('click','.update',function(e) {
    let id = $(this).attr("data-id");
    let name = $(this).attr("data-username");
    let year = $(this).attr("data-password");
    $('#id_u').val(id);
    $('#username_u').val(name);
    $('#year_u').val(year);
});

$(document).on('click','#update',function(e) {
    $('#err-username-u').removeClass("d-block").addClass("d-none");
    $('#err-password-u').removeClass("d-block").addClass("d-none");
    let name = $('#username_u').val().trim();
    let year = $('#password_u').val();
    let validInput = true;
    if (name.length < 6 || username.length > 100 ) {
        $('#err-username-u').removeClass("d-none").addClass("d-block");
        validInput = false;
    }
    if (name.length < 6 || username.length > 100 ) {
        $('#err-password-u').removeClass("d-none").addClass("d-block");
        validInput = false;
    }
    if (validInput) {
        let data = $("#update_form").serialize();

        $.ajax({
            data: data,
            type: "post",
            url: "function.php",
            success: function(result){
                    let dataResult = JSON.parse(result);
                    if(dataResult.statusCode==200){
                        $('#editUserModal').modal('hide');
                        alert('Cập nhật thành công!'); 
                        location.reload();						
                    }
                    else if(dataResult.statusCode==201){
                        alert(dataResult);
                    }
            }
        });
    }
    
});

$(document).on("click", ".delete", function() { 
    let id=$(this).attr("data-id");
    $('#id_d').val(id);
    
});

$(document).on("click", "#delete", function() { 
    $.ajax({
        url: "function.php",
        type: "POST",
        cache: false,
        data:{
            type:3,
            id: $("#id_d").val()
        },
        success: function(dataResult){
                $('#deleteUserrModal').modal('hide');
                $("#"+dataResult).remove();
        
        }
    });
});
