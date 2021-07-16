
$(document).ready(function() {

    function tiempo() {

        $.ajax({
            url: "estadoSesion.php",
            method: "POST",
            success: function(data) {

                if (data == '1') {

                    alert('Se acabo el tiempo de 3 segundos!');
                    window.location.href = "login.php";
                }
            }
        })
    }
    setInterval(function() {

        tiempo();
    }, 3000);
});
