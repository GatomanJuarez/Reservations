<?php
    session_start();
    $servidor = "localhost";
$usuario = "root";
$contra = "";
$bd = "reservations";

// Creando la conexion a la bd
$conexion = new mysqli($servidor, $usuario, $contra, $bd);
$conexion->set_charset("utf8");
// Checando la conexion
if ($conexion->connect_error) {
    die("Conexion Fallida: " . $conexion->connect_error);
}
$configuracion = file ('txt/reservados.txt');
            foreach ($configuracion as $pisos) {
            //echo $pisos ."<br>";
            }
?>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Reservaciones Aqui</title>
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>

    <body background="pictures/Pared.jpg" style="background-repeat: no-repeat">
        <header style="background: black">
            <?php
            echo(
                "<p style = \"color: white; padding: 5px\">
                Bienvenid@ ".$_SESSION["nombre"]."<br>
                Puedes reservar hasta ".$_SESSION["sillas"]." Asientos aún no reservados.</p>"
            );
        ?>
        </header>
        
        <div id="lienzo"></div>
        <script src="js/svg.min.js"></script>
        <script>
         function datosObtenerNuevoaa() {
    var silla = 0;
    var archivo = new XMLHttpRequest();
    archivo.open("GET", "txt/reservados.txt", false);
    archivo.onreadystatechange = function () {
        if (archivo.readyState === 4) {
            if (archivo.status === 200 || archivo.status == 0) {
                var Texto = archivo.responseText;
                silla = Texto;
            }
        }
    }
    archivo.send(null);
    return silla;
}
        var datosObtenidos2 = datosObtenerNuevoaa();
        var datosObtenidos = datosObtenidos2.split('\n');
        console.log(datosObtenidos);
            var sillaReservada = [],
                contador = 0,
                sillasDisponibles;

               
           
            // Lienzo SVG donde serán creados todos los objetos
            var lienzo = SVG('lienzo').size('100%', '271%');
            // Representa las mesas y las sillas del salón con sus atributos
            var mesa1 = [{
                color: '#550544',
                posicion: {
                    x: 70,
                    y: 140
                },
                sillas: [{
                        numero: 1,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 50,
                            y: 140
                        }
                    }, {
                        numero: 2,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 90,
                            y: 115
                        }
                    }, {
                        numero: 3,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 140,
                            y: 115
                        }
                    }, {
                        numero: 4,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 170,
                            y: 150
                        }
                    }, {
                        numero: 5,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 180,
                            y: 190
                        }
                    }, {
                        numero: 6,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 165,
                            y: 220
                        }
                    }, {
                        numero: 7,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 130,
                            y: 245
                        }
                    }, {
                        numero: 8,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 90,
                            y: 245
                        }
                    }, {
                        numero: 9,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 60,
                            y: 230
                        }
                    }, {
                        numero: 10,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 40,
                            y: 190
                        }
                    }


                ]
            }]
            ////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            var mesa2 = [{
                color: '#550544',
                posicion: {
                    x: 290,
                    y: 140
                },
                sillas: [{
                    numero: 11,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 270,
                        y: 140
                    }
                }, {
                    numero: 12,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 310,
                        y: 115
                    }
                }, {
                    numero: 13,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 360,
                        y: 115
                    }
                }, {
                    numero: 14,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 390,
                        y: 150
                    }
                }, {
                    numero: 15,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 400,
                        y: 190
                    }
                }, {
                    numero: 16,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 385,
                        y: 220
                    }
                }, {
                    numero: 17,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 350,
                        y: 245
                    }
                }, {
                    numero: 18,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 310,
                        y: 245
                    }
                }, {
                    numero: 19,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 280,
                        y: 230
                    }
                }, {
                    numero: 20,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 260,
                        y: 190
                    }
                }]
            }]
            ////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            var mesa3 = [{
                color: '#550544',
                posicion: {
                    x: 790,
                    y: 140
                },
                sillas: [{
                    numero: 21,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 770,
                        y: 140
                    }
                }, {
                    numero: 22,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 810,
                        y: 115
                    }
                }, {
                    numero: 23,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 860,
                        y: 115
                    }
                }, {
                    numero: 24,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 890,
                        y: 150
                    }
                }, {
                    numero: 25,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 900,
                        y: 190
                    }
                }, {
                    numero: 26,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 885,
                        y: 220
                    }
                }, {
                    numero: 27,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 850,
                        y: 245
                    }
                }, {
                    numero: 28,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 810,
                        y: 245
                    }
                }, {
                    numero: 29,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 780,
                        y: 230
                    }
                }, {
                    numero: 30,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 760,
                        y: 190
                    }
                }]
            }]
            ////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            var mesa4 = [{
                color: '#550544',
                posicion: {
                    x: 990,
                    y: 140
                },
                sillas: [{
                    numero: 31,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 970,
                        y: 140
                    }
                }, {
                    numero: 32,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1010,
                        y: 115
                    }
                }, {
                    numero: 33,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1060,
                        y: 115
                    }
                }, {
                    numero: 34,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1090,
                        y: 150
                    }
                }, {
                    numero: 35,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1100,
                        y: 190
                    }
                }, {
                    numero: 36,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1085,
                        y: 220
                    }
                }, {
                    numero: 37,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1050,
                        y: 245
                    }
                }, {
                    numero: 38,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1010,
                        y: 245
                    }
                }, {
                    numero: 39,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 980,
                        y: 230
                    }
                }, {
                    numero: 40,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 960,
                        y: 190
                    }
                }]
            }]
            ////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            var mesa5 = [{
                color: '#550544',
                posicion: {
                    x: 1190,
                    y: 140
                },
                sillas: [{
                    numero: 41,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1170,
                        y: 140
                    }
                }, {
                    numero: 42,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1210,
                        y: 115
                    }
                }, {
                    numero: 43,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1260,
                        y: 115
                    }
                }, {
                    numero: 44,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1290,
                        y: 150
                    }
                }, {
                    numero: 45,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1300,
                        y: 190
                    }
                }, {
                    numero: 46,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1285,
                        y: 220
                    }
                }, {
                    numero: 47,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1250,
                        y: 245
                    }
                }, {
                    numero: 48,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1210,
                        y: 245
                    }
                }, {
                    numero: 49,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1180,
                        y: 230
                    }
                }, {
                    numero: 50,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1160,
                        y: 190
                    }
                }]
            }]
            //#########################################
            //#########################################
            //#########################################
            var mesa6 = [{
                color: '#550544',
                posicion: {
                    x: 70,
                    y: 340
                },
                sillas: [{
                        numero: 51,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 50,
                            y: 340
                        }
                    }, {
                        numero: 52,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 90,
                            y: 315
                        }
                    }, {
                        numero: 53,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 140,
                            y: 315
                        }
                    }, {
                        numero: 54,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 170,
                            y: 350
                        }
                    }, {
                        numero: 55,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 180,
                            y: 390
                        }
                    }, {
                        numero: 56,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 165,
                            y: 420
                        }
                    }, {
                        numero: 57,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 130,
                            y: 445
                        }
                    }, {
                        numero: 58,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 90,
                            y: 445
                        }
                    }, {
                        numero: 59,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 60,
                            y: 430
                        }
                    }, {
                        numero: 60,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 40,
                            y: 390
                        }
                    }


                ]
            }]
            ////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            var mesa7 = [{
                color: '#550544',
                posicion: {
                    x: 290,
                    y: 340
                },
                sillas: [{
                    numero: 61,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 270,
                        y: 340
                    }
                }, {
                    numero: 62,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 310,
                        y: 315
                    }
                }, {
                    numero: 63,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 360,
                        y: 315
                    }
                }, {
                    numero: 64,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 390,
                        y: 350
                    }
                }, {
                    numero: 65,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 400,
                        y: 390
                    }
                }, {
                    numero: 66,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 385,
                        y: 420
                    }
                }, {
                    numero: 67,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 350,
                        y: 445
                    }
                }, {
                    numero: 68,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 310,
                        y: 445
                    }
                }, {
                    numero: 69,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 280,
                        y: 430
                    }
                }, {
                    numero: 70,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 260,
                        y: 390
                    }
                }]
            }]
            ////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            var mesa8 = [{
                color: '#550544',
                posicion: {
                    x: 790,
                    y: 340
                },
                sillas: [{
                    numero: 71,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 770,
                        y: 340
                    }
                }, {
                    numero: 72,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 810,
                        y: 315
                    }
                }, {
                    numero: 73,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 860,
                        y: 315
                    }
                }, {
                    numero: 74,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 890,
                        y: 350
                    }
                }, {
                    numero: 75,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 900,
                        y: 390
                    }
                }, {
                    numero: 76,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 885,
                        y: 420
                    }
                }, {
                    numero: 77,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 850,
                        y: 445
                    }
                }, {
                    numero: 78,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 810,
                        y: 445
                    }
                }, {
                    numero: 79,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 780,
                        y: 430
                    }
                }, {
                    numero: 80,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 760,
                        y: 390
                    }
                }]
            }]
            ////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            var mesa9 = [{
                color: '#550544',
                posicion: {
                    x: 990,
                    y: 340
                },
                sillas: [{
                    numero: 81,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 970,
                        y: 340
                    }
                }, {
                    numero: 82,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1010,
                        y: 315
                    }
                }, {
                    numero: 83,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1060,
                        y: 315
                    }
                }, {
                    numero: 84,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1090,
                        y: 350
                    }
                }, {
                    numero: 85,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1100,
                        y: 390
                    }
                }, {
                    numero: 86,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1085,
                        y: 420
                    }
                }, {
                    numero: 87,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1050,
                        y: 445
                    }
                }, {
                    numero: 88,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1010,
                        y: 445
                    }
                }, {
                    numero: 89,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 980,
                        y: 430
                    }
                }, {
                    numero: 90,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 960,
                        y: 390
                    }
                }]
            }]
            ////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            var mesa10 = [{
                color: '#550544',
                posicion: {
                    x: 1190,
                    y: 340
                },
                sillas: [{
                    numero: 91,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1170,
                        y: 340
                    }
                }, {
                    numero: 92,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1210,
                        y: 315
                    }
                }, {
                    numero: 93,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1260,
                        y: 315
                    }
                }, {
                    numero: 94,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1290,
                        y: 350
                    }
                }, {
                    numero: 95,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1300,
                        y: 390
                    }
                }, {
                    numero: 96,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1285,
                        y: 420
                    }
                }, {
                    numero: 97,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1250,
                        y: 445
                    }
                }, {
                    numero: 98,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1210,
                        y: 445
                    }
                }, {
                    numero: 99,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1180,
                        y: 430
                    }
                }, {
                    numero: 100,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1160,
                        y: 390
                    }
                }]
            }]

            ///#################################
            ///#################################
            ///#################################
            ///#################################
            ///#################################
            ///#################################
            var mesa11 = [{
                color: '#550544',
                posicion: {
                    x: 70,
                    y: 540
                },
                sillas: [{
                        numero: 101,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 50,
                            y: 540
                        }
                    }, {
                        numero: 102,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 90,
                            y: 515
                        }
                    }, {
                        numero: 103,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 140,
                            y: 515
                        }
                    }, {
                        numero: 104,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 170,
                            y: 550
                        }
                    }, {
                        numero: 105,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 180,
                            y: 590
                        }
                    }, {
                        numero: 106,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 165,
                            y: 620
                        }
                    }, {
                        numero: 107,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 130,
                            y: 645
                        }
                    }, {
                        numero: 108,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 90,
                            y: 645
                        }
                    }, {
                        numero: 109,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 60,
                            y: 630
                        }
                    }, {
                        numero: 110,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 40,
                            y: 590
                        }
                    }


                ]
            }]
            ////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            var mesa12 = [{
                color: '#550544',
                posicion: {
                    x: 290,
                    y: 540
                },
                sillas: [{
                    numero: 111,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 270,
                        y: 540
                    }
                }, {
                    numero: 112,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 310,
                        y: 515
                    }
                }, {
                    numero: 113,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 360,
                        y: 515
                    }
                }, {
                    numero: 114,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 390,
                        y: 550
                    }
                }, {
                    numero: 115,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 400,
                        y: 590
                    }
                }, {
                    numero: 116,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 385,
                        y: 620
                    }
                }, {
                    numero: 117,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 350,
                        y: 645
                    }
                }, {
                    numero: 118,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 310,
                        y: 645
                    }
                }, {
                    numero: 119,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 280,
                        y: 630
                    }
                }, {
                    numero: 120,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 260,
                        y: 590
                    }
                }]
            }]
            ////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            var mesa13 = [{
                color: '#550544',
                posicion: {
                    x: 790,
                    y: 540
                },
                sillas: [{
                    numero: 121,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 770,
                        y: 540
                    }
                }, {
                    numero: 122,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 810,
                        y: 515
                    }
                }, {
                    numero: 123,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 860,
                        y: 515
                    }
                }, {
                    numero: 124,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 890,
                        y: 550
                    }
                }, {
                    numero: 125,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 900,
                        y: 590
                    }
                }, {
                    numero: 126,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 885,
                        y: 620
                    }
                }, {
                    numero: 127,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 850,
                        y: 645
                    }
                }, {
                    numero: 128,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 810,
                        y: 645
                    }
                }, {
                    numero: 129,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 780,
                        y: 630
                    }
                }, {
                    numero: 130,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 760,
                        y: 590
                    }
                }]
            }]
            ////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            var mesa14 = [{
                color: '#550544',
                posicion: {
                    x: 990,
                    y: 540
                },
                sillas: [{
                    numero: 131,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 970,
                        y: 540
                    }
                }, {
                    numero: 132,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1010,
                        y: 515
                    }
                }, {
                    numero: 133,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1060,
                        y: 515
                    }
                }, {
                    numero: 134,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1090,
                        y: 550
                    }
                }, {
                    numero: 135,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1100,
                        y: 590
                    }
                }, {
                    numero: 136,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1085,
                        y: 620
                    }
                }, {
                    numero: 137,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1050,
                        y: 645
                    }
                }, {
                    numero: 138,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1010,
                        y: 645
                    }
                }, {
                    numero: 139,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 980,
                        y: 630
                    }
                }, {
                    numero: 140,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 960,
                        y: 590
                    }
                }]
            }]
            ////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            var mesa15 = [{
                color: '#550544',
                posicion: {
                    x: 1190,
                    y: 540
                },
                sillas: [{
                    numero: 141,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1170,
                        y: 540
                    }
                }, {
                    numero: 142,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1210,
                        y: 515
                    }
                }, {
                    numero: 143,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1260,
                        y: 515
                    }
                }, {
                    numero: 144,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1290,
                        y: 550
                    }
                }, {
                    numero: 145,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1300,
                        y: 590
                    }
                }, {
                    numero: 146,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1285,
                        y: 220
                    }
                }, {
                    numero: 147,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1250,
                        y: 645
                    }
                }, {
                    numero: 148,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1210,
                        y: 645
                    }
                }, {
                    numero: 149,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1180,
                        y: 630
                    }
                }, {
                    numero: 150,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1160,
                        y: 590
                    }
                }]
            }]
            //#########################################
            //#########################################
            //#########################################
            var mesa16 = [{
                color: '#550544',
                posicion: {
                    x: 70,
                    y: 740
                },
                sillas: [{
                        numero: 151,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 50,
                            y: 740
                        }
                    }, {
                        numero: 152,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 90,
                            y: 715
                        }
                    }, {
                        numero: 153,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 140,
                            y: 715
                        }
                    }, {
                        numero: 154,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 170,
                            y: 750
                        }
                    }, {
                        numero: 155,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 180,
                            y: 790
                        }
                    }, {
                        numero: 156,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 165,
                            y: 820
                        }
                    }, {
                        numero: 157,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 130,
                            y: 845
                        }
                    }, {
                        numero: 158,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 90,
                            y: 845
                        }
                    }, {
                        numero: 159,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 60,
                            y: 830
                        }
                    }, {
                        numero: 160,
                        color: '#30f6ff',
                        ocupada: false,
                        posicion: {
                            x: 40,
                            y: 790
                        }
                    }


                ]
            }]
            ////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            var mesa17 = [{
                color: '#550544',
                posicion: {
                    x: 290,
                    y: 740
                },
                sillas: [{
                    numero: 161,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 270,
                        y: 740
                    }
                }, {
                    numero: 162,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 310,
                        y: 715
                    }
                }, {
                    numero: 163,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 360,
                        y: 715
                    }
                }, {
                    numero: 164,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 390,
                        y: 750
                    }
                }, {
                    numero: 165,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 400,
                        y: 790
                    }
                }, {
                    numero: 166,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 385,
                        y: 820
                    }
                }, {
                    numero: 167,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 350,
                        y: 845
                    }
                }, {
                    numero: 168,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 310,
                        y: 845
                    }
                }, {
                    numero: 169,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 280,
                        y: 830
                    }
                }, {
                    numero: 170,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 260,
                        y: 790
                    }
                }]
            }]
            ////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            var mesa18 = [{
                color: '#550544',
                posicion: {
                    x: 790,
                    y: 740
                },
                sillas: [{
                    numero: 171,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 770,
                        y: 740
                    }
                }, {
                    numero: 172,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 810,
                        y: 715
                    }
                }, {
                    numero: 173,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 860,
                        y: 715
                    }
                }, {
                    numero: 174,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 890,
                        y: 750
                    }
                }, {
                    numero: 175,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 900,
                        y: 790
                    }
                }, {
                    numero: 176,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 885,
                        y: 820
                    }
                }, {
                    numero: 177,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 850,
                        y: 845
                    }
                }, {
                    numero: 178,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 810,
                        y: 845
                    }
                }, {
                    numero: 179,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 780,
                        y: 830
                    }
                }, {
                    numero: 180,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 760,
                        y: 790
                    }
                }]
            }]
            ////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            var mesa19 = [{
                color: '#550544',
                posicion: {
                    x: 990,
                    y: 740
                },
                sillas: [{
                    numero: 181,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 970,
                        y: 740
                    }
                }, {
                    numero: 182,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1010,
                        y: 715
                    }
                }, {
                    numero: 183,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1060,
                        y: 715
                    }
                }, {
                    numero: 184,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1090,
                        y: 750
                    }
                }, {
                    numero: 185,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1100,
                        y: 790
                    }
                }, {
                    numero: 186,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1085,
                        y: 820
                    }
                }, {
                    numero: 187,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1050,
                        y: 845
                    }
                }, {
                    numero: 188,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1010,
                        y: 845
                    }
                }, {
                    numero: 189,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 980,
                        y: 830
                    }
                }, {
                    numero: 190,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 960,
                        y: 790
                    }
                }]
            }]
            ////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////
            var mesa20 = [{
                color: '#550544',
                posicion: {
                    x: 1190,
                    y: 740
                },
                sillas: [{
                    numero: 191,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1170,
                        y: 740
                    }
                }, {
                    numero: 192,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1210,
                        y: 715
                    }
                }, {
                    numero: 193,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1260,
                        y: 715
                    }
                }, {
                    numero: 194,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1290,
                        y: 750
                    }
                }, {
                    numero: 195,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1300,
                        y: 790
                    }
                }, {
                    numero: 196,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1285,
                        y: 820
                    }
                }, {
                    numero: 197,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1250,
                        y: 845
                    }
                }, {
                    numero: 198,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1210,
                        y: 845
                    }
                }, {
                    numero: 199,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1180,
                        y: 830
                    }
                }, {
                    numero: 200,
                    color: '#30f6ff',
                    ocupada: false,
                    posicion: {
                        x: 1160,
                        y: 790
                    }
                }]
            }]


            var PistaBaile = [{
                color: '#e0e0e0',
                posicion: {
                    x: 420,
                    y: 500
                }
            }]
            for (var mesa of PistaBaile) {
                var mesaFigura = lienzo.circle(340).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

            }


            // Se agregan dinámicamente las mesas y sus sillas
            for (var mesa of mesa1) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[0] > 0 && conta == 0) {} 
                    else if (datosObtenidos[1] > 0 && conta == 1) {} 
                    else if (datosObtenidos[2] > 0 && conta == 2) {}
                    else if (datosObtenidos[3] > 0 && conta == 3) {} 
                    else if (datosObtenidos[4] > 0 && conta == 4) {} 
                    else if (datosObtenidos[5] > 0 && conta == 5) {}  
                    else if (datosObtenidos[6] > 0 && conta == 6) {}
                    else if (datosObtenidos[7] > 0 && conta == 7) {} 
                    else if (datosObtenidos[8] > 0 && conta == 8) {}
                    else if (datosObtenidos[9] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }

            }

            for (var mesa of mesa2) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                 var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[10] > 0 && conta == 0) {} 
                    else if (datosObtenidos[11] > 0 && conta == 1) {} 
                    else if (datosObtenidos[12] > 0 && conta == 2) {}
                    else if (datosObtenidos[13] > 0 && conta == 3) {} 
                    else if (datosObtenidos[14] > 0 && conta == 4) {} 
                    else if (datosObtenidos[15] > 0 && conta == 5) {}  
                    else if (datosObtenidos[16] > 0 && conta == 6) {}
                    else if (datosObtenidos[17] > 0 && conta == 7) {} 
                    else if (datosObtenidos[18] > 0 && conta == 8) {}
                    else if (datosObtenidos[19] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }
            }

            for (var mesa of mesa3) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                 var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[20] > 0 && conta == 0) {} 
                    else if (datosObtenidos[21] > 0 && conta == 1) {} 
                    else if (datosObtenidos[22] > 0 && conta == 2) {}
                    else if (datosObtenidos[23] > 0 && conta == 3) {} 
                    else if (datosObtenidos[24] > 0 && conta == 4) {} 
                    else if (datosObtenidos[25] > 0 && conta == 5) {}  
                    else if (datosObtenidos[26] > 0 && conta == 6) {}
                    else if (datosObtenidos[27] > 0 && conta == 7) {} 
                    else if (datosObtenidos[28] > 0 && conta == 8) {}
                    else if (datosObtenidos[29] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }
            }

            for (var mesa of mesa4) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                 var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[30] > 0 && conta == 0) {} 
                    else if (datosObtenidos[31] > 0 && conta == 1) {} 
                    else if (datosObtenidos[32] > 0 && conta == 2) {}
                    else if (datosObtenidos[33] > 0 && conta == 3) {} 
                    else if (datosObtenidos[34] > 0 && conta == 4) {} 
                    else if (datosObtenidos[35] > 0 && conta == 5) {}  
                    else if (datosObtenidos[36] > 0 && conta == 6) {}
                    else if (datosObtenidos[37] > 0 && conta == 7) {} 
                    else if (datosObtenidos[38] > 0 && conta == 8) {}
                    else if (datosObtenidos[39] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }

            }

            for (var mesa of mesa5) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

               var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[40] > 0 && conta == 0) {} 
                    else if (datosObtenidos[41] > 0 && conta == 1) {} 
                    else if (datosObtenidos[42] > 0 && conta == 2) {}
                    else if (datosObtenidos[43] > 0 && conta == 3) {} 
                    else if (datosObtenidos[44] > 0 && conta == 4) {} 
                    else if (datosObtenidos[45] > 0 && conta == 5) {}  
                    else if (datosObtenidos[46] > 0 && conta == 6) {}
                    else if (datosObtenidos[47] > 0 && conta == 7) {} 
                    else if (datosObtenidos[48] > 0 && conta == 8) {}
                    else if (datosObtenidos[49] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }
            }

            for (var mesa of mesa6) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                 var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[50] > 0 && conta == 0) {} 
                    else if (datosObtenidos[51] > 0 && conta == 1) {} 
                    else if (datosObtenidos[52] > 0 && conta == 2) {}
                    else if (datosObtenidos[53] > 0 && conta == 3) {} 
                    else if (datosObtenidos[54] > 0 && conta == 4) {} 
                    else if (datosObtenidos[55] > 0 && conta == 5) {}  
                    else if (datosObtenidos[56] > 0 && conta == 6) {}
                    else if (datosObtenidos[57] > 0 && conta == 7) {} 
                    else if (datosObtenidos[58] > 0 && conta == 8) {}
                    else if (datosObtenidos[59] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }

            }


            for (var mesa of mesa7) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                 var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[60] > 0 && conta == 0) {} 
                    else if (datosObtenidos[61] > 0 && conta == 1) {} 
                    else if (datosObtenidos[62] > 0 && conta == 2) {}
                    else if (datosObtenidos[63] > 0 && conta == 3) {} 
                    else if (datosObtenidos[64] > 0 && conta == 4) {} 
                    else if (datosObtenidos[65] > 0 && conta == 5) {}  
                    else if (datosObtenidos[66] > 0 && conta == 6) {}
                    else if (datosObtenidos[67] > 0 && conta == 7) {} 
                    else if (datosObtenidos[68] > 0 && conta == 8) {}
                    else if (datosObtenidos[69] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }

            }

            for (var mesa of mesa8) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[70] > 0 && conta == 0) {} 
                    else if (datosObtenidos[71] > 0 && conta == 1) {} 
                    else if (datosObtenidos[72] > 0 && conta == 2) {}
                    else if (datosObtenidos[73] > 0 && conta == 3) {} 
                    else if (datosObtenidos[74] > 0 && conta == 4) {} 
                    else if (datosObtenidos[75] > 0 && conta == 5) {}  
                    else if (datosObtenidos[76] > 0 && conta == 6) {}
                    else if (datosObtenidos[77] > 0 && conta == 7) {} 
                    else if (datosObtenidos[78] > 0 && conta == 8) {}
                    else if (datosObtenidos[79] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }

            }


            for (var mesa of mesa9) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[80] > 0 && conta == 0) {} 
                    else if (datosObtenidos[81] > 0 && conta == 1) {} 
                    else if (datosObtenidos[82] > 0 && conta == 2) {}
                    else if (datosObtenidos[83] > 0 && conta == 3) {} 
                    else if (datosObtenidos[84] > 0 && conta == 4) {} 
                    else if (datosObtenidos[85] > 0 && conta == 5) {}  
                    else if (datosObtenidos[86] > 0 && conta == 6) {}
                    else if (datosObtenidos[87] > 0 && conta == 7) {} 
                    else if (datosObtenidos[88] > 0 && conta == 8) {}
                    else if (datosObtenidos[89] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }

            }

            for (var mesa of mesa10) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                 var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[90] > 0 && conta == 0) {} 
                    else if (datosObtenidos[91] > 0 && conta == 1) {} 
                    else if (datosObtenidos[92] > 0 && conta == 2) {}
                    else if (datosObtenidos[93] > 0 && conta == 3) {} 
                    else if (datosObtenidos[94] > 0 && conta == 4) {} 
                    else if (datosObtenidos[95] > 0 && conta == 5) {}  
                    else if (datosObtenidos[96] > 0 && conta == 6) {}
                    else if (datosObtenidos[97] > 0 && conta == 7) {} 
                    else if (datosObtenidos[98] > 0 && conta == 8) {}
                    else if (datosObtenidos[99] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }

            }

            /////////////////////////////

            for (var mesa of mesa11) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                 var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[100] > 0 && conta == 0) {} 
                    else if (datosObtenidos[101] > 0 && conta == 1) {} 
                    else if (datosObtenidos[102] > 0 && conta == 2) {}
                    else if (datosObtenidos[103] > 0 && conta == 3) {} 
                    else if (datosObtenidos[104] > 0 && conta == 4) {} 
                    else if (datosObtenidos[105] > 0 && conta == 5) {}  
                    else if (datosObtenidos[106] > 0 && conta == 6) {}
                    else if (datosObtenidos[107] > 0 && conta == 7) {} 
                    else if (datosObtenidos[108] > 0 && conta == 8) {}
                    else if (datosObtenidos[109] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }

            }



            for (var mesa of mesa12) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                 var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[110] > 0 && conta == 0) {} 
                    else if (datosObtenidos[111] > 0 && conta == 1) {} 
                    else if (datosObtenidos[112] > 0 && conta == 2) {}
                    else if (datosObtenidos[113] > 0 && conta == 3) {} 
                    else if (datosObtenidos[114] > 0 && conta == 4) {} 
                    else if (datosObtenidos[115] > 0 && conta == 5) {}  
                    else if (datosObtenidos[116] > 0 && conta == 6) {}
                    else if (datosObtenidos[117] > 0 && conta == 7) {} 
                    else if (datosObtenidos[118] > 0 && conta == 8) {}
                    else if (datosObtenidos[119] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }

            }

            for (var mesa of mesa13) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                 var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[120] > 0 && conta == 0) {} 
                    else if (datosObtenidos[121] > 0 && conta == 1) {} 
                    else if (datosObtenidos[122] > 0 && conta == 2) {}
                    else if (datosObtenidos[123] > 0 && conta == 3) {} 
                    else if (datosObtenidos[124] > 0 && conta == 4) {} 
                    else if (datosObtenidos[125] > 0 && conta == 5) {}  
                    else if (datosObtenidos[126] > 0 && conta == 6) {}
                    else if (datosObtenidos[127] > 0 && conta == 7) {} 
                    else if (datosObtenidos[128] > 0 && conta == 8) {}
                    else if (datosObtenidos[129] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }
            }

            for (var mesa of mesa14) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                 var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[130] > 0 && conta == 0) {} 
                    else if (datosObtenidos[131] > 0 && conta == 1) {} 
                    else if (datosObtenidos[132] > 0 && conta == 2) {}
                    else if (datosObtenidos[133] > 0 && conta == 3) {} 
                    else if (datosObtenidos[134] > 0 && conta == 4) {} 
                    else if (datosObtenidos[135] > 0 && conta == 5) {}  
                    else if (datosObtenidos[136] > 0 && conta == 6) {}
                    else if (datosObtenidos[137] > 0 && conta == 7) {} 
                    else if (datosObtenidos[138] > 0 && conta == 8) {}
                    else if (datosObtenidos[139] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }

            }

            for (var mesa of mesa15) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                 var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[140] > 0 && conta == 0) {} 
                    else if (datosObtenidos[141] > 0 && conta == 1) {} 
                    else if (datosObtenidos[142] > 0 && conta == 2) {}
                    else if (datosObtenidos[143] > 0 && conta == 3) {} 
                    else if (datosObtenidos[144] > 0 && conta == 4) {} 
                    else if (datosObtenidos[145] > 0 && conta == 5) {}  
                    else if (datosObtenidos[146] > 0 && conta == 6) {}
                    else if (datosObtenidos[147] > 0 && conta == 7) {} 
                    else if (datosObtenidos[148] > 0 && conta == 8) {}
                    else if (datosObtenidos[149] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }

            }

            for (var mesa of mesa16) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                 var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[150] > 0 && conta == 0) {} 
                    else if (datosObtenidos[151] > 0 && conta == 1) {} 
                    else if (datosObtenidos[152] > 0 && conta == 2) {}
                    else if (datosObtenidos[153] > 0 && conta == 3) {} 
                    else if (datosObtenidos[154] > 0 && conta == 4) {} 
                    else if (datosObtenidos[155] > 0 && conta == 5) {}  
                    else if (datosObtenidos[156] > 0 && conta == 6) {}
                    else if (datosObtenidos[157] > 0 && conta == 7) {} 
                    else if (datosObtenidos[158] > 0 && conta == 8) {}
                    else if (datosObtenidos[159] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }

            }


            for (var mesa of mesa17) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                 var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[160] > 0 && conta == 0) {} 
                    else if (datosObtenidos[161] > 0 && conta == 1) {} 
                    else if (datosObtenidos[162] > 0 && conta == 2) {}
                    else if (datosObtenidos[163] > 0 && conta == 3) {} 
                    else if (datosObtenidos[164] > 0 && conta == 4) {} 
                    else if (datosObtenidos[165] > 0 && conta == 5) {}  
                    else if (datosObtenidos[166] > 0 && conta == 6) {}
                    else if (datosObtenidos[167] > 0 && conta == 7) {} 
                    else if (datosObtenidos[168] > 0 && conta == 8) {}
                    else if (datosObtenidos[169] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }

            }

            for (var mesa of mesa18) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                 var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[170] > 0 && conta == 0) {} 
                    else if (datosObtenidos[171] > 0 && conta == 1) {} 
                    else if (datosObtenidos[172] > 0 && conta == 2) {}
                    else if (datosObtenidos[173] > 0 && conta == 3) {} 
                    else if (datosObtenidos[174] > 0 && conta == 4) {} 
                    else if (datosObtenidos[175] > 0 && conta == 5) {}  
                    else if (datosObtenidos[176] > 0 && conta == 6) {}
                    else if (datosObtenidos[177] > 0 && conta == 7) {} 
                    else if (datosObtenidos[178] > 0 && conta == 8) {}
                    else if (datosObtenidos[179] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }

            }


            for (var mesa of mesa19) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);
                var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[180] > 0 && conta == 0) {} 
                    else if (datosObtenidos[181] > 0 && conta == 1) {} 
                    else if (datosObtenidos[182] > 0 && conta == 2) {}
                    else if (datosObtenidos[183] > 0 && conta == 3) {} 
                    else if (datosObtenidos[184] > 0 && conta == 4) {} 
                    else if (datosObtenidos[185] > 0 && conta == 5) {}  
                    else if (datosObtenidos[186] > 0 && conta == 6) {}
                    else if (datosObtenidos[187] > 0 && conta == 7) {} 
                    else if (datosObtenidos[188] > 0 && conta == 8) {}
                    else if (datosObtenidos[189] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }

            }

            for (var mesa of mesa20) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                 var conta=0;
                for (var silla of mesa.sillas) {
                    if (datosObtenidos[190] > 0 && conta == 0) {} 
                    else if (datosObtenidos[191] > 0 && conta == 1) {} 
                    else if (datosObtenidos[192] > 0 && conta == 2) {}
                    else if (datosObtenidos[193] > 0 && conta == 3) {} 
                    else if (datosObtenidos[194] > 0 && conta == 4) {} 
                    else if (datosObtenidos[195] > 0 && conta == 5) {}  
                    else if (datosObtenidos[196] > 0 && conta == 6) {}
                    else if (datosObtenidos[197] > 0 && conta == 7) {} 
                    else if (datosObtenidos[198] > 0 && conta == 8) {}
                    else if (datosObtenidos[199] > 0 && conta == 9) {}
                      
                        else{
                        var color = silla.ocupada ? mesa.color : silla.color;

                        var sillaFigura = lienzo.circle(20).attr({
                            fill: color
                        }).move(silla.posicion.x, silla.posicion.y);

                        sillaFigura.numero = silla.numero;
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                            sillaReservada.push(this.numero);
                            contador++;
                            for (var i = 0; i < sillaReservada.length; i++) {
                                //console.log(sillaReservada[i]);
                            }
                        }
                    });
                }
                conta ++;
                }

            }

            function comprobar(){
                if (contador < sillasDisponibles && sillasDisponibles > 0) {
                    var actualizar =  sillasDisponibles - contador;
                    console.log(actualizar);
                location.href = "actualizar.php?disponible=" + actualizar;
                mostrar();
                }
                else{
                    alert("Ya no puedes reservar mas sillas");
                }
            }

            function mostrar() {
                
  
              
                var mensaje2 = confirm("¿Deseas guardar tus reservaciones?");
                if (mensaje2) {
                    location.href = "reservar.php?sillas=" + sillaReservada;
                   
                }
                
              
                //location.href = "actualizar.php?total=" + total;
                
                
                }
                
            
                

        </script>
        <a href="#"><img src="pictures/Fleca.png" title="Ir arriba" style="position: fixed; bottom: 10px; right: 2%;" height="50" /></a>
        <a href="#"><img src="pictures/guardar2.png" title="Ir arriba" style="position: fixed; bottom: 10px; right: 8%;" height="50" onclick="mostrar()" /></a>
        
    </body>

    </html>
