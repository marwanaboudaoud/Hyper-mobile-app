<html>
<head>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            font-family: Verdana, Arial, sans-serif;
            background-color: #f6f6f9;
        }

        h1 {
            color: #F7972E;
            text-align: center;
        }

        .base-table {
            width: 600px;
        }

        .button {
            text-decoration: none;
            color: #fff;
            background-color: #F7972E;
            font-weight: bold;
            display: block;
            width: 300px;
            padding-top: 16px;
            padding-bottom: 16px;
            text-transform: uppercase;
            font-size: 13px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 50px;
            margin-top: 25px;
        }

        .footer {
            background-color: #F7972E;
        }

    </style>
</head>
<body>
<table class="base-table" align="center" cellspacing="0" cellpadding="0">
    <tr cellspacing="0" cellpadding="0">
        <td cellspacing="0" cellpadding="0">
            <h1>Account activeren</h1>
            <p>{{ $userModel->getEmail() }}</p>
            <p>Hier kan een tekst komen over het activeren van een account <br/>Zoals "Volg de link om een wachtwoord aan te maken en je wachtwoord te activeren!"</p>
        </td>
    </tr>
    <tr cellspacing="0" cellpadding="0">
        <td cellspacing="0" cellpadding="0" align="center">
            <a class="button" href="{{ $resetPasswordModel->getToken() }}" >Reset wachtwoord</a>
        </td>
    </tr>
    <tr cellspacing="0" cellpadding="0">
        <td cellspacing="0" cellpadding="0">
            <table class="footer" align="center" cellspacing="0" cellpadding="0" width="600px" height="100px">
                <tr cellspacing="0" cellpadding="0" >
                    <td cellspacing="0" cellpadding="0" align="center" >
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="148px" height="60px" viewBox="0 0 148 60" enable-background="new 0 0 148 60" xml:space="preserve">
                            <path fill="#FFFFFF" d="M5.728,5.596c0.199,0,0.36,0.162,0.36,0.361V19.3h0.081c0.135-0.378,0.365-0.759,0.689-1.14
                                c0.326-0.381,0.717-0.722,1.178-1.021c0.46-0.298,1.001-0.542,1.623-0.734c0.624-0.189,1.299-0.284,2.03-0.284
                                c1.542,0,2.787,0.237,3.734,0.712c0.947,0.475,1.684,1.135,2.211,1.979c0.527,0.844,0.886,1.834,1.076,2.977
                                c0.188,1.143,0.283,2.38,0.283,3.712v10.571c0,0.198-0.161,0.361-0.359,0.361h-5.368c-0.198,0-0.36-0.163-0.36-0.361v-9.348
                                c0-0.571-0.019-1.163-0.061-1.773c-0.041-0.612-0.162-1.177-0.365-1.692c-0.203-0.518-0.514-0.938-0.934-1.265
                                c-0.42-0.326-1.021-0.49-1.806-0.49s-1.42,0.144-1.907,0.429c-0.486,0.286-0.859,0.667-1.115,1.142
                                c-0.258,0.476-0.426,1.014-0.509,1.611c-0.08,0.6-0.121,1.225-0.121,1.877v9.51c0,0.198-0.161,0.361-0.36,0.361H0.359
                                C0.161,36.434,0,36.271,0,36.072V5.957c0-0.199,0.161-0.361,0.359-0.361H5.728z"/>
                            <path fill="#FFFFFF" d="M34.089,39.654c-0.406,1.061-0.799,1.999-1.178,2.815c-0.379,0.814-0.858,1.501-1.44,2.059
                                c-0.583,0.558-1.319,0.979-2.212,1.265c-0.893,0.287-2.07,0.428-3.53,0.428c-1.461,0-2.875-0.211-4.241-0.635
                                c-0.174-0.055-0.282-0.234-0.253-0.414l0.689-4.263c0.037-0.226,0.269-0.35,0.482-0.271c0.79,0.297,1.6,0.444,2.43,0.444
                                c0.675,0,1.23-0.077,1.664-0.226c0.432-0.15,0.791-0.367,1.075-0.652c0.286-0.284,0.521-0.633,0.711-1.041
                                c0.188-0.406,0.391-0.885,0.608-1.427l0.447-1.144l-8.426-19.479c-0.103-0.239,0.071-0.505,0.33-0.505h5.781
                                c0.147,0,0.281,0.091,0.335,0.23l4.983,12.862h0.081l4.26-12.845c0.049-0.147,0.186-0.248,0.341-0.248h5.466
                                c0.253,0,0.426,0.255,0.334,0.492L34.089,39.654z"/>
                            <path fill="#FFFFFF" d="M43.093,45.742v-6.373H36.9l-0.466,1.202c-0.421,1.101-0.839,2.103-1.242,2.968
                                c-0.39,0.837-0.895,1.553-1.455,2.203H43.093z"/>
                            <path fill="#FFFFFF" d="M128.335,45.75l-11.603-30.783l-10.012,24.402H54.215v6.373l56.767,0.022l5.682-14.248L128.521,60l18.867-60
                                L128.335,45.75z"/>
                            <path fill="#FFFFFF" d="M19.624,39.368H0.365c-0.199,0-0.359,0.161-0.359,0.361v5.65c0,0.2,0.161,0.361,0.359,0.361h18.228
	                            L19.624,39.368z"/>
                            <path fill="#FFFFFF" d="M51.21,26.52c0,1.496,0.427,2.706,1.279,3.632c0.852,0.925,2.048,1.387,3.591,1.387
                                c1.542,0,2.739-0.462,3.592-1.387c0.853-0.926,1.278-2.136,1.278-3.632c0-1.494-0.425-2.703-1.278-3.63
                                c-0.853-0.923-2.05-1.386-3.592-1.386c-1.543,0-2.74,0.463-3.591,1.386C51.638,23.816,51.21,25.025,51.21,26.52z M45.97,16.609
                                h4.881c0.198,0,0.36,0.162,0.36,0.361v2.25h0.081c0.245-0.354,0.562-0.715,0.954-1.081c0.391-0.369,0.852-0.702,1.38-1
                                c0.527-0.299,1.102-0.543,1.725-0.735c0.621-0.189,1.284-0.283,1.987-0.283c1.462,0,2.788,0.251,3.979,0.754
                                c1.19,0.503,2.211,1.21,3.064,2.121c0.852,0.912,1.507,1.992,1.967,3.242c0.46,1.252,0.69,2.624,0.69,4.12
                                c0,1.386-0.21,2.711-0.629,3.976c-0.42,1.264-1.015,2.387-1.786,3.366c-0.771,0.979-1.712,1.76-2.82,2.346
                                c-1.11,0.584-2.368,0.875-3.775,0.875c-1.271,0-2.455-0.196-3.55-0.59c-1.095-0.393-1.996-1.068-2.699-2.019h-0.081v11.058
                                c0,0.2-0.161,0.361-0.36,0.361H45.97c-0.199,0-0.359-0.161-0.359-0.361V16.97C45.61,16.771,45.771,16.609,45.97,16.609z"/>
                            <path fill="#FFFFFF" d="M83.891,24.276c0.027-1.033-0.311-1.917-1.014-2.651c-0.703-0.735-1.61-1.101-2.719-1.101
                                c-0.678,0-1.271,0.109-1.786,0.327c-0.514,0.219-0.953,0.495-1.318,0.836c-0.366,0.341-0.649,0.734-0.853,1.182
                                c-0.203,0.448-0.318,0.918-0.346,1.406H83.891z M88.732,32.773c0.169,0.125,0.201,0.375,0.066,0.535
                                c-0.932,1.105-2.082,1.97-3.445,2.594c-1.49,0.68-3.031,1.019-4.627,1.019c-1.516,0-2.942-0.244-4.281-0.734
                                c-1.34-0.488-2.503-1.188-3.491-2.099c-0.987-0.912-1.765-2.007-2.333-3.283c-0.567-1.28-0.853-2.707-0.853-4.285
                                c0-1.576,0.285-3.002,0.853-4.281c0.568-1.277,1.346-2.373,2.333-3.284c0.988-0.912,2.151-1.611,3.491-2.101
                                c1.339-0.488,2.766-0.732,4.281-0.732c1.406,0,2.684,0.244,3.834,0.732c1.15,0.49,2.125,1.189,2.922,2.101
                                c0.799,0.911,1.414,2.007,1.847,3.284c0.434,1.279,0.65,2.705,0.65,4.281v1.556c0,0.199-0.16,0.361-0.359,0.361H76.326
                                c-0.238,0-0.422,0.233-0.355,0.461c0.277,0.957,0.766,1.733,1.468,2.335c0.813,0.691,1.813,1.04,3.004,1.04
                                c1.001,0,1.847-0.227,2.536-0.675c0.598-0.389,1.129-0.873,1.594-1.455c0.121-0.151,0.334-0.187,0.49-0.073L88.732,32.773z"/>
                            <path fill="#FFFFFF" d="M94.06,16.609h5.368c0.199,0,0.359,0.162,0.359,0.362v2.82h0.08c0.65-1.223,1.421-2.141,2.314-2.754
                                c0.893-0.612,2.014-0.916,3.367-0.916c0.354,0,0.704,0.012,1.057,0.04c0.351,0.027,0.676,0.083,0.973,0.161v5.589
                                c-0.432-0.134-0.857-0.237-1.278-0.306c-0.42-0.067-0.858-0.102-1.319-0.102c-1.162,0-2.082,0.164-2.758,0.491
                                c-0.677,0.326-1.199,0.781-1.563,1.367c-0.364,0.585-0.603,1.284-0.71,2.098c-0.109,0.817-0.162,1.715-0.162,2.694v7.919
                                c0,0.198-0.16,0.361-0.359,0.361H94.06c-0.199,0-0.359-0.163-0.359-0.361V16.971C93.7,16.771,93.86,16.609,94.06,16.609z"/>
                        </svg>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
