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
            'icon' => 'book',
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
            'icon' => 'users',
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
            'icon' => 'file',
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
            'icon' => 'layers',
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
            'icon' => 'book',
        ],
        [
            'title' => 'Progress',
            'icon' => 'loader',
        ],
    ],
];
