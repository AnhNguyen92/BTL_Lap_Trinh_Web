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
    let password = $(this).attr("data-password");
    let lname = $(this).attr("data-lname");
    let fname = $(this).attr("data-fname");
    let gender = $(this).attr("data-gender");
    let birthday = $(this).attr("data-birthday");
    let status = $(this).attr("data-status");
    let role = $(this).attr("data-role");
    $('#id_u').val(id);
    $('#username_u').val(name);
    $('#password_u').val(password);
    $('#lname_u').val(lname);
    $('#fname_u').val(fname);
    $('#gender_u').val(gender);
    $('#birthday_u').val(birthday);
    $('#status_u').val(status);
    $('#role_u').val(role);
});

$(document).on('click','#update',function(e) {
    $('#err-username-u').removeClass("d-block").addClass("d-none");
    $('#err-password-u').removeClass("d-block").addClass("d-none");
    let username = $('#username_u').val().trim();
    let password = $('#password_u').val();
    let validInput = true;
    if (username.length < 6 || username.length > 100 ) {
        $('#err-username-u').removeClass("d-none").addClass("d-block");
        validInput = false;
    }
    if (password.length < 6 || password.length > 100 ) {
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
    $('#deleteUserModal').modal('show');
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
                $('#deleteUserModal').modal('hide');
                $("#"+dataResult).remove();
        
        }
    });
});

$(document).on('click','#btn-index',function(e) {
    e.prevenDefault();
    let data = $("#indexFrm").serialize();

    $.ajax({
        data: data,
        type: 4,
        url: "function.php",
        success: function(result){
            let dataResult = JSON.parse(result);
            if(dataResult.statusCode==200) {
                alert('Cập nhật thành công!'); 
                location.reload();						
            }
        }
    });
});
