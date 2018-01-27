<?php
    session_start();
?>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Reservaciones Aqui</title>
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
        <div id="lienzo">

        </div>

        <script src="js/svg.min.js"></script>
        <script>
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

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.



                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });



                }

            }









            for (var mesa of mesa2) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }

            for (var mesa of mesa3) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }
            }

            for (var mesa of mesa4) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }

            for (var mesa of mesa5) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }

            for (var mesa of mesa6) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }


            for (var mesa of mesa7) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }

            for (var mesa of mesa8) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }


            for (var mesa of mesa9) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }

            for (var mesa of mesa10) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }

            /////////////////////////////






            for (var mesa of mesa11) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }



            for (var mesa of mesa12) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }

            for (var mesa of mesa13) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }
            }

            for (var mesa of mesa14) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }

            for (var mesa of mesa15) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }

            for (var mesa of mesa16) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }


            for (var mesa of mesa17) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }

            for (var mesa of mesa18) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }


            for (var mesa of mesa19) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }

            for (var mesa of mesa20) {
                var mesaFigura = lienzo.circle(100).attr({
                    fill: mesa.color
                }).move(mesa.posicion.x, mesa.posicion.y);

                for (var silla of mesa.sillas) {
                    var color = silla.ocupada ? mesa.color : silla.color;

                    var sillaFigura = lienzo.circle(20).attr({
                        fill: color
                    }).move(silla.posicion.x, silla.posicion.y);

                    sillaFigura.numero = silla.numero;

                    // Adjunta el evento click con su callback para responder por cada silla.
                    // Aquí se pueden enviar datos al servidor si se requiere.
                    sillaFigura.click(function() {
                        confirmar = confirm("¿Estás seguro que deseas resevarla?");
                        if (confirmar) {
                            this.attr({
                                fill: '#00c853'
                            })
                            console.log('Seleccionaste la silla: ' + this.numero);
                        }
                    });
                }

            }

        </script>
        <a href="#"><img src="pictures/Fleca.png" title="Ir arriba" style="position: fixed; bottom: 10px; right: 2%;" height="50" /></a>

    </body>

    </html>
