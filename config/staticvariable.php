<?php

class StaticVariable
{
    static $user = null;
    static $navbarPendeta = [
        [
            "name" => "Home",
            "url" => "/pendeta",
            "icon" => '<i class="fa fa-home" aria-hidden="true"></i>',
            "isGroup" => false
        ],
        [
            "isGroup" => true,
            "name" => "Keluarga",
            "navbars" => [
                [
                    "name" => "Data Keluarga",
                    "url" => "/pendeta/data/keluarga",
                    "icon" => '<i class="fa fa-users" aria-hidden="true"></i>',
                ],
            ]
        ],
        // Change Here...
        [
            "isGroup" => true,
            "name" => "Jemaat",
            "navbars" => [
                [
                    "name" => "Data Jemaat",
                    "url" => "/pendeta/data/jemaat",
                    "icon" => '<i class="fa fa-users" aria-hidden="true"></i>',
                ], [
                    "name" => "Laporan Statistik",
                    "url" => "/pendeta/laporan/statistik",
                    "icon" => '<i class="fa fa-line-chart" aria-hidden="true"></i>',
                ]
            ]
        ],

    ];
}
