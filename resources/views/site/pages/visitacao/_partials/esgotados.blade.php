<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Agendamento</title>
    <style>
        .modal-dialog {
            width: 100% !important;
            height: 100% !important;
            margin: auto !important;
            padding: 0 !important;
        }

        .modal-content {
            height: 100% !important;
            width: 100% !important;
            min-height: 100% !important;
            border-radius: 0 !important;
        }
    </style>

</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G2C381GWDB"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-G2C381GWDB');
</script>

<body class="bg-light">
    <header class="container d-print-none">
        <div class="row">
            <div class="col-md-12 py-4 text-right">
                <div id="google_translate_element"></div>
                <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({
                            pageLanguage: 'pt',
                            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                            autoDisplay: false,
                            includedLanguages: ''
                        }, 'google_translate_element');
                    }
                </script>
                <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                </script>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="py-5 text-center">
                    <div style="margin: auto; text-align: center;">
                        <img src="/1.png" width="180px" style="text-align: center;">
                    </div>
                    <p class="lead pt-2">
                        Faça seu agendamento para a Fábrica do Papai Noel
                    </p>
                </div>
                <p>
                    A Fábrica do Papai Noel é um espaço lúdico e interativo, do qual proporciona a toda família, a
                    experiência única de conhecer os bastidores do grande Mundo Encantado do Natal, onde as crianças
                    podem ver o bom velhinho e seus fiéis ajudantes em ação, organizando as cartinhas que chegam e
                    preparando os presentes para serem entregues na tão aguardada noite de Natal.
                </p><br>
            </div>
        </div>
    </header>
    <main class="visitante d-print-none">
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <hr class="mb-3">
                </div>
            </div>

            <center>
                <h2>Vagas esgotadas</h2>
            </center>
            <br>
            <hr>
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    CPF não encontrado.
                </div>
            @endif

            <div class="alert alert-secondary" role="alert">
                <form action="/rec" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Reimpressão de inscrição</label>
                        <input type="cpf" name="cpf" class="form-control" id="cpf" placeholder="Digite seu CPF" aria-describedby="cpf">
                        <small id="emailHelp" class="form-text text-muted">Somente números</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Reimprimir</button>
                </form>
            </div>

            </form> {{-- fim formulario principal --}}
            <footer class="my-5 pt-5 text-muted text-center text-small d-print-none">
                <p class="mb-1">Secretaria de Cultura e Economia Criativa</p>
                <p><small>Navegadores suportados: Google Chrome, Microsoft Edge, Firefox</small></p>
            </footer>

            <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
                integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"
                integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous">
            </script>


            <script>
                $(document).ready(() => {

                    count = 0;


                    $('#deficiente').change(() => {
                        const selectSelecionado = $('#deficiente').children('option:selected').val()
                        if (selectSelecionado === 'Não') {
                            $('#nome_deficiencia').addClass('d-none')
                        } else {
                            $('#nome_deficiencia').removeClass('d-none')
                            // $('#div_tipo_deficiencia').css("display", "block")
                        }
                    })
                    $('#btn_dependentes').click(() => {
                        count++;
                        if (count == 1) {
                            $('#dependente01').css("display", "flex")
                        }
                        if (count == 2) {
                            $('#dependente02').css("display", "flex")
                        }
                    })
                })

                // console.log($("#horario_visitacao_data").val());
                $("#horario_visitacao_data").change(function() {
                    if ($("#horario_visitacao_data").val() == "01/12/2021") {
                        $("#01").css('display', 'flex');
                        $("#02").css('display', 'none');
                        $("#03").css('display', 'none');
                        $("#04").css('display', 'none');
                        $("#05").css('display', 'none');
                    }
                    if ($("#horario_visitacao_data").val() == "02/12/2021") {
                        $("#01").css('display', 'none');
                        $("#02").css('display', 'flex');
                        $("#03").css('display', 'none');
                        $("#04").css('display', 'none');
                        $("#05").css('display', 'none');
                    }
                    if ($("#horario_visitacao_data").val() == "03/12/2021") {
                        $("#01").css('display', 'none');
                        $("#02").css('display', 'none');
                        $("#03").css('display', 'flex');
                        $("#04").css('display', 'none');
                        $("#05").css('display', 'none');
                    }
                    if ($("#horario_visitacao_data").val() == "04/12/2021") {
                        $("#01").css('display', 'none');
                        $("#02").css('display', 'none');
                        $("#03").css('display', 'none');
                        $("#04").css('display', 'flex');
                        $("#05").css('display', 'none');
                    }
                    if ($("#horario_visitacao_data").val() == "05/12/2021") {
                        $("#01").css('display', 'none');
                        $("#02").css('display', 'none');
                        $("#03").css('display', 'none');
                        $("#04").css('display', 'none');
                        $("#05").css('display', 'flex');
                    }
                })
            </script>


</body>

</html>
