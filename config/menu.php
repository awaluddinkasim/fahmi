<?php

return [
    'admin' => [
        [
            'title' => 'Dashboard',
            'route' => 'admin.dashboard',
            'icon' => 'home',
        ],
        [
            'title' => 'Manajemen Kursus',
            'icon' => 'home',
            'submenu' => [
                [
                    'title' => 'Semua Kursus',
                ],
                [
                    'title' => 'Tambah Kursus Baru',
                ],
                [
                    'title' => 'Kategori',
                ]
            ]
        ],
        [
            'title' => 'Manajemen User',
            'icon' => 'home',
            'submenu' => [
                [
                    'title' => 'Admin',
                ],
                [
                    'title' => 'User',
                ]
            ]
        ],
        [
            'title' => 'Laporan',
            'icon' => 'home',
        ]
    ],
    'user' => [
        [
            'title' => 'Dashboard',
            'route' => 'dashboard',
            'icon' => 'home',
        ],
        [
            'title' => 'Katalog Kursus',
            'icon' => 'home',
            'submenu' => [
                [
                    'title' => 'Semua Kursus',
                ],
                [
                    'title' => 'Kursus Populer',
                ],
                [
                    'title' => 'Kategori',
                ]
            ],
        ],
        [
            'title' => 'Kursus Saya',
            'route' => 'dashboard',
            'icon' => 'home',
        ],
        [
            'title' => 'Progress',
            'route' => 'dashboard',
            'icon' => 'home',
        ],
    ],
];
