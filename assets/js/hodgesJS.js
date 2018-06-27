
$(function () {
var base_url = "http://localhost/visualgeco/";

    $('#btnLogin').click(function iniciarSesion(e) {

        e.preventDefault();
        var run = $('#run').val();
        var pass = $('#pass').val();

        if (run == "" || pass == "") {
            M.toast({ html: "debe llenar todos los campos" });
        } else {

            $.ajax({
                url: 'iniciarSesion',
                type: 'POST',
                dataType: 'json',
                data: { run: run, pass: pass },
                success: function (i) {
                    M.toast({ html: i.msg });

                },
                error: function (e) {
                    M.toast({ html: "parace que tenemos un problema....por favor reintente!!!" + e });
                }


            });

        }

    });


    $('#enviar_usuario').click(function insertarUsuario(e) {
        e.preventDefault();
        var run = $("#run").val();
        var nombre = $("#nombre").val();
        var apellidoP = $("#apellidoP").val();
        var apellidoM = $("#apellidoM").val();
        var correo = $("#correo").val();
        var pass = $("#pass").val();
        var idCategoria = $("#idCategoria").val();
        $.ajax({
            url: 'insertarUsuario',
            type: 'POST',
            dataType: 'json',
            data: { run: run, nombre: nombre, apellidoP: apellidoP, apellidoM: apellidoM, correo: correo, pass: pass, idCategoria: idCategoria },
            success: function (o) {
                M.toast({ html: o.msg });
            },
            error: function (e) {
                M.toast({ html: "error en js: " + e });

            }
        });
    });


});

