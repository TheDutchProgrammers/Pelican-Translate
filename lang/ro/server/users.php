<?php

return [
    'permissions' => [
        'websocket_*' => 'Permite accesul la websocket pentru acest server.',
        'control_console' => 'Permite utilizatorului să trimită date către consola serverului.',
        'control_start' => 'Permite utilizatorului să pornească serverul.',
        'control_stop' => 'Permite utilizatorului să oprească serverul.',
        'control_restart' => 'Permite utilizatorului să repornească serverul.',
        'control_kill' => 'Permite utilizatorului oprească forțat serverul.',
        'user_create' => 'Permite utilizatorului să creeze noi conturi de utilizator pentru server.',
        'user_read' => 'Permite utilizatorului să vizualizeze utilizatorii asociați cu acest server.',
        'user_update' => 'Permite utilizatorului să modifice alți utilizatori asociați cu acest server.',
        'user_delete' => 'Permite utilizatorului să șteargă alți utilizatori asociați cu acest server.',
        'file_create' => 'Permite utilizatorului să creeze fişiere şi directoare noi.',
        'file_read' => 'Permite utilizatorului să vadă fișierele și dosarele asociate cu această instanță de server, precum și să vizualizeze conținutul acestora.',
        'file_update' => 'Permite utilizatorului să actualizeze fişierele şi dosarele asociate cu serverul.',
        'file_delete' => 'Permite utilizatorului să șteargă fișiere și directoare.',
        'file_archive' => 'Permite utilizatorului să creeze arhive de fișiere și să descompună arhivele existente.',
        'file_sftp' => 'Permite utilizatorului să efectueze acțiunile fișierelor de mai sus folosind un client SFTP.',
        'allocation_read' => 'Permite accesul la paginile de administrare a alocărilor de la server.',
        'allocation_update' => 'Permite utilizatorului să facă modificări la alocările serverului.',
        'database_create' => 'Permite utilizatorului să creeze o nouă bază de date pentru server.',
        'database_read' => 'Permite utilizatorului să vizualizeze bazele de date ale serverului.',
        'database_update' => 'Permite utilizatorului să facă modificări într-o bază de date. În cazul în care utilizatorul nu are permisiunea "Vizualizare parolă", de asemenea, acesta nu va putea modifica parola.',
        'database_delete' => 'Permite unui utilizator să șteargă o instanță a bazei de date.',
        'database_view_password' => 'Permite utilizatorului sa vadă parola bazei de date în sistem.',
        'schedule_create' => 'Permite unui utilizator să creeze un nou orar pentru server.',
        'schedule_read' => 'Permite unui utilizator permisiunea de a vizualiza programările pentru un server.',
        'schedule_update' => 'Permite unui utilizator să facă modificări la un program de server existent.',
        'schedule_delete' => 'Permite unui utilizator să șteargă un program pentru server.',
    ],
];
