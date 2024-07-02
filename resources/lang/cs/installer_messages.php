<?php 

return [
    'title' => 'Instalační program laravel',
    'next' => 'Další krok',
    'back' => 'Předchozí',
    'finish' => 'Nainstalujte',
    'forms' => [
        'errorTitle' => 'Došlo k následujícím chybám:',
    ],
    'welcome' => [
        'templateTitle' => 'Vítejte',
        'title' => 'Instalační program laravel',
        'message' => 'Průvodce snadnou instalací a nastavením.',
        'next' => 'Zkontrolujte požadavky',
    ],
    'requirements' => [
        'templateTitle' => 'Krok 1 | Požadavky na server',
        'title' => 'Požadavky na server',
        'next' => 'Zkontrolujte oprávnění',
    ],
    'permissions' => [
        'templateTitle' => 'Krok 2 | Oprávnění',
        'title' => 'Oprávnění',
        'next' => 'Nakonfigurujte prostředí',
    ],
    'environment' => [
        'menu' => [
            'templateTitle' => 'Krok 3 | Nastavení prostředí',
            'title' => 'Nastavení prostředí',
            'desc' => 'Vyberte, jak chcete konfigurovat soubor <code> .env </code> aplikací.',
            'wizard-button' => 'Nastavení průvodce formulářem',
            'classic-button' => 'Klasický textový editor',
        ],
        'wizard' => [
            'templateTitle' => 'Krok 3 | Nastavení prostředí | Průvodce',
            'title' => 'Průvodce <code> .env </code>',
            'tabs' => [
                'environment' => 'životní prostředí',
                'database' => 'Databáze',
                'application' => 'aplikace',
            ],
            'form' => [
                'name_required' => 'Název prostředí je povinný.',
                'app_name_label' => 'Název aplikace',
                'app_name_placeholder' => 'Název aplikace',
                'app_environment_label' => 'Prostředí aplikace',
                'app_environment_label_local' => 'Místní',
                'app_environment_label_developement' => 'Rozvoj',
                'app_environment_label_qa' => 'Qa',
                'app_environment_label_production' => 'Výroba',
                'app_environment_label_other' => 'jiný',
                'app_environment_placeholder_other' => 'Vstupte do svého prostředí ...',
                'app_debug_label' => 'Ladění aplikace',
                'app_debug_label_true' => 'Skutečný',
                'app_debug_label_false' => 'Nepravdivé',
                'app_log_level_label' => 'Úroveň protokolu aplikace',
                'app_log_level_label_debug' => 'ladit',
                'app_log_level_label_info' => 'informace',
                'app_log_level_label_notice' => 'oznámení',
                'app_log_level_label_warning' => 'Varování',
                'app_log_level_label_error' => 'chyba',
                'app_log_level_label_critical' => 'kritický',
                'app_log_level_label_alert' => 'výstraha',
                'app_log_level_label_emergency' => 'nouzový',
                'app_url_label' => 'Adresa URL aplikace',
                'app_url_placeholder' => 'Adresa URL aplikace',
                'db_connection_failed' => 'Nelze se připojit k databázi.',
                'db_connection_label' => 'Připojení k databázi',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Hostitel databáze',
                'db_host_placeholder' => 'Hostitel databáze',
                'db_port_label' => 'Port databáze',
                'db_port_placeholder' => 'Port databáze',
                'db_name_label' => 'Jméno databáze',
                'db_name_placeholder' => 'Jméno databáze',
                'db_username_label' => 'Jméno uživatele databáze',
                'db_username_placeholder' => 'Jméno uživatele databáze',
                'db_password_label' => 'Heslo databáze',
                'db_password_placeholder' => 'Heslo databáze',
                'app_tabs' => [
                    'more_info' => 'Více informací',
                    'broadcasting_title' => '',
                    'broadcasting_label' => 'Broadcast Driver',
                    'broadcasting_placeholder' => 'Broadcast Driver',
                    'cache_label' => 'Ovladač mezipaměti',
                    'cache_placeholder' => 'Ovladač mezipaměti',
                    'session_label' => 'Řidič relace',
                    'session_placeholder' => 'Řidič relace',
                    'queue_label' => 'Ovladač fronty',
                    'queue_placeholder' => 'Ovladač fronty',
                    'redis_label' => 'Ovladač Redis',
                    'redis_host' => 'Hostitel Redis',
                    'redis_password' => 'Znovu heslo',
                    'redis_port' => 'Port Redis',
                    'mail_label' => 'Pošta',
                    'mail_driver_label' => 'Ovladač pošty',
                    'mail_driver_placeholder' => 'Ovladač pošty',
                    'mail_host_label' => 'Hostitel pošty',
                    'mail_host_placeholder' => 'Hostitel pošty',
                    'mail_port_label' => 'Poštovní port',
                    'mail_port_placeholder' => 'Poštovní port',
                    'mail_username_label' => 'Poštovní uživatelské jméno',
                    'mail_username_placeholder' => 'Poštovní uživatelské jméno',
                    'mail_password_label' => 'Heslo pro poštu',
                    'mail_password_placeholder' => 'Heslo pro poštu',
                    'mail_encryption_label' => 'Šifrování pošty',
                    'mail_encryption_placeholder' => 'Šifrování pošty',
                    'pusher_label' => 'Posunovač',
                    'pusher_app_id_label' => 'ID aplikace Pusher',
                    'pusher_app_id_palceholder' => 'ID aplikace Pusher',
                    'pusher_app_key_label' => 'Klíč aplikace Pusher',
                    'pusher_app_key_palceholder' => 'Klíč aplikace Pusher',
                    'pusher_app_secret_label' => 'Tajemství aplikace Pusher',
                    'pusher_app_secret_palceholder' => 'Tajemství aplikace Pusher',
                ],
                'buttons' => [
                    'setup_database' => 'Nastavení databáze',
                    'setup_application' => 'Instalační aplikace',
                    'install' => 'Nainstalujte',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Krok 3 | Nastavení prostředí | Klasický editor',
            'title' => 'Klasický editor prostředí',
            'save' => 'Uložit .env',
            'back' => 'Použijte Průvodce formulářem',
            'install' => 'Uložit a nainstalovat',
        ],
        'success' => 'Vaše nastavení souboru .env bylo uloženo.',
        'errors' => 'Soubor .env nelze uložit. Vytvořte jej prosím ručně.',
    ],
    'install' => 'Nainstalujte',
    'installed' => [
        'success_log_message' => 'Instalační program laravel byl úspěšně nainstalován dne',
    ],
    'final' => [
        'title' => 'Instalace dokončena',
        'templateTitle' => 'Instalace dokončena',
        'finished' => 'Aplikace byla úspěšně nainstalována.',
        'migration' => '',
        'exit' => 'Kliknutím sem nabídku ukončíte',
        'console' => 'Výstup z aplikační konzole:',
        'log' => 'Záznam protokolu instalace:',
        'env' => 'Konečný soubor .env:',
    ],
    'updater' => [
        'title' => 'Laravel Updater',
        'welcome' => [
            'title' => 'Vítejte v programu Updater',
            'message' => 'Vítejte v průvodci aktualizací.',
        ],
        'overview' => [
            'title' => 'Přehled',
            'install_updates' => 'Nainstalujte aktualizace',
            'message' => 'Je zde 1 aktualizace.|Existuje :number aktualizací.',
        ],
        'final' => [
            'title' => 'Hotovo',
            'finished' => 'Databáze aplikace byla úspěšně aktualizována.',
            'exit' => 'Kliknutím sem nabídku ukončíte',
        ],
        'log' => [
            'success_message' => 'Instalační program Laravel byl úspěšně AKTUALIZOVÁN dne',
        ],
    ],
];