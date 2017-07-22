
function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword){
        $("#divCheckPasswordMatch").html("Passwords do not match!").css("color", "red");
        $(':input[type="submit"]').prop('disabled', true);
    }
    else
        $("#divCheckPasswordMatch").html("Passwords matched.").css("color", "green");
    $(':input[type="submit"]').prop('disabled', false);
}

$(document).ready(function () {
    $("#txtNewPassword, #txtConfirmPassword").keyup(checkPasswordMatch);
});
