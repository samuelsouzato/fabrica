<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovante de Inscrição</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <style>
        body {
            background-image: url(snow-fundo.png);
            background-repeat: no-repeat;
        }

        #div-principal {
            padding-right: 70px;
            padding-top: 40px;
            padding-left: 70px;
            padding-bottom: 20px;
            margin: 0;
        }

        #div-infos {
            padding-right: 60px;
            padding-left: 60px;
            color: rgb(45, 71, 63);
        }

        #descricao-page-comprovante-text {
            font-size: 15px;
            color: rgb(53, 95, 81);
        }

        #texto-comprovacao {
            color: rgb(73, 110, 98);
            font-size: 21px;
            margin-top: -10px;
        }

        .divider {
            position: relative;
            height: 1px;
        }

        .div-transparent:before {
            position: absolute;
            top: 0;
            width: 100%;
            height: 1px;
            background-color: rgb(106, 202, 138);
        }

        #place-qr {
            border: 1px;
            border-color: chocolate;
            border-style: solid;
            margin-top: 24px;
            width: 130px;
            height: 130px;
            float: right;
        }

        #wrap-all {
            max-width: 800px;
            margin: auto;
            background-color: white;
        }

        #label-espaco-comprovante {
            font-size: 15px;
        }

        #label-data-comprovante {
            font-size: 15px;
        }

        #label-horario-comprovante {
            font-size: 15px;
        }

        #infos-espaco-visitacao {
            padding-top: 15px;
            color: rgb(45, 71, 63);
        }

        #texto-title {
            color: rgb(73, 110, 98);
            font-size: 21px;
        }

        #infos-visitante {
            padding-right: 60px;
            padding-top: 30px;
            padding-left: 60px;
        }

        #label-documento-comprovante {
            font-size: 15px;
            color: rgb(70, 97, 89);
            line-height: 22px;
        }

        #label-nome-comprovante {
            font-size: 15px;
        }

        #label-contato-comprovante {
            font-size: 15px;
        }

        #label-deficiencia-comprovante {
            font-size: 15px;
        }

        #infos-visitante-visitacao {
            color: rgb(45, 71, 63);
            padding-top: 15px;
        }

        #observacoes-importantes {
            padding-right: 60px;
            padding-left: 60px;
            padding-top: 30px;
        }

        #div-importantes-observacoes {
            padding-top: 18px;
            color: rgb(45, 71, 63);
        }

        #label-nome-dependente-comprovante {
            font-size: 15px;

        }

        #label-data-dependente-comprovante {
            font-size: 15px;
        }

        #infos-visitante-dependente-visitacao {
            color: rgb(45, 71, 63);
            padding-top: 15px;
        }
    </style>
</head>

<body>
    <div id="wrap-all">
        <center style="padding-top: 16px">
            <button type="button" onclick="imprimir()">Imprimir comprovante</button>
        </center>
        <div id="div-principal" align=center>
            <div style="margin: auto; text-align: center;">
                <img src="/1.png" width="160px" style="text-align: center;">
            </div>
            <h1 class="ui header" style="color: rgb(60, 145, 202); font-size: 16px;">FÁBRICA DO PAPAI NOEL</h1>

            <h1 class="ui header" id="texto-comprovacao">Inscrição realizada para
                {{ $row->horario_visitacao_data }} - {{ $row->horario_visitacao_hora_inicio }}
            </h1>

            <center style="padding-top: 16px">
                <button type="button" onclick="imprimir()">Imprimir comprovante</button>
            </center>
            <img src="https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl='{{$code}}'">
            <div style="max-width: 500px;">

                <p id="descricao-page-comprovante-text"
                    style="padding-top: 15px; padding-bottom: 15px; font-size: 20px important!;">Salve este
                    comprovante, você vai precisar apresentar (impresso ou na tela do celular) na entrada do evento
                    junto com o documento de
                    identificação cadastrado.</p>
            </div>
        </div>


        <div id="infos-visitante">
            <h1 class="ui header" id="texto-title">Informações do Inscrito</h1>
            <div class="divider div-transparent"></div>

            <div id="infos-visitante-visitacao">
                <p id="label-nome-comprovante"><b>Nome: {{ $visitante_cadastrato->nome_completo }}</b> </p>
                <p id="label-documento-comprovante"><b>Contato: {{ $visitante_cadastrato->contato ?? '' }}</b> </p>
                @isset($visitante_cadastrato->deficiencia)
                    <p id="label-documento-comprovante"><b>Deficiência: {{ $visitante_cadastrato->deficiencia ?? '' }}</b>
                    </p>
                @endisset
            </div>
            <hr>
            @isset($visitante_cadastrato->dependente_nome)
                <div id="infos-visitante-visitacao">
                    <p id="label-nome-comprovante"><b>Nome: {{ $visitante_cadastrato->dependente_nome }}</b> </p>
                    <p id="label-documento-comprovante"><b>Data Nascimento:
                            {{ $visitante_cadastrato->dependente_data_nascimento ?? '' }}</b> </p>
                    <p id="label-documento-comprovante"><b>CPF: {{ $visitante_cadastrato->dependente_cpf ?? '' }}</b> </p>
                </div>
            @endisset
            @isset($visitante_cadastrato->dependente2_nome)
                <div id="infos-visitante-visitacao">
                    <p id="label-nome-comprovante"><b>Nome: {{ $visitante_cadastrato->dependente2_nome }}</b> </p>
                    <p id="label-documento-comprovante"><b>Data Nascimento:
                            {{ $visitante_cadastrato->dependente2_data_nascimento ?? '' }}</b> </p>
                    <p id="label-documento-comprovante"><b>CPF: {{ $visitante_cadastrato->dependente2_cpf ?? '' }}</b> </p>
                </div>
            @endisset
        </div>
        <div id="observacoes-importantes">
            <h1 class="ui header" id="texto-title">INFORMAÇÕES AO VISITANTE</h1>
            <div class="divider div-transparent"></div>
            <div id="div-importantes-observacoes">
                <b>
                    <p id="label-documento-comprovante"> ● O local de encontro para iniciar a visitação será na Recepção da Fábrica do Papai Noel, localizada em frente ao Palácio da Justiça do Amazonas (prédio amarelo) atrás do Teatro Amazonas, Av. Eduardo Ribeiro com a rua 10 de Julho. A Recepção da Fábrica se encontra devidamente sinalizada e será o ponto de partida da visitação;
                    </p>

                    <p id="label-documento-comprovante"> ● É necessário chegar com 20 minutos de antecedência no local citado acima;</p>

                    <p id="label-documento-comprovante"> ● Ao chegar no local de encontro (Recepção da Fábrica), os visitantes deverão apresentar o comprovante do agendamento para realizar a visitação na Fábrica;  </p>

                    <p id="label-documento-comprovante"> ● A entrada do público será realizada no horário marcado do agendamento. Após o tempo expirado, será necessário realizar novo agendamento;  </p>

                    <p id="label-documento-comprovante"> ● O comprovante de agendamento só é válido para o dia e horário presentes no mesmo, não sendo permitido a utilização dele em dias e horários diferentes;  </p>

                    <p id="label-documento-comprovante"> ● Será estipulado o número de até 25 (vinte e cinco) visitantes (entre adultos e crianças) por horário de visitação, com duração média de até 30 minutos cada; </p>

                    <p id="label-documento-comprovante"> ● É terminantemente proibido o visitante (adulto ou criança) se dispersar do grupo, uma vez que todas as visitas serão mediadas por um condutor cultural; </p>

                    <p id="label-documento-comprovante"> ● Eu AUTORIZO a Secretaria de Estado de Cultura e Economia Criativa do Amazonas a utilizar a imagem do menor de idade que for capturada durante a visita à Fábrica do Papai Noel, em todo e qualquer material entre imagens de vídeo, fotos e voz. A presente autorização é concedida a título gratuito, abrangendo o uso da imagem acima mencionada, das seguintes formas: folhetos em geral, anúncios em revistas, jornais e TV; sites e portais; e redes sociais (facebook, instagram, twitter, youtube e demais plataformas digitais de streaming e compartilhamento de dados).  </p>
            </div>
        </div>
    </div>
    <center style="padding-top: 16px">
        <button type="button" onclick="imprimir()">Imprimir comprovante</button>
    </center>
    <script>
        function imprimir() {
            window.print();
        }
    </script>
</body>

</html>
