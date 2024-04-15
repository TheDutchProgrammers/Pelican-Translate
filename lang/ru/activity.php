<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Не удалось войти',
        'success' => 'Вход выполнен',
        'password-reset' => 'Пароль сброшен',
        'reset-password' => 'Запрошен сброс пароля',
        'checkpoint' => 'Two-factor authentication requested',
        'recovery-token' => 'Использован резервный код 2FA',
        'token' => 'Пройдена двухфакторная проверка',
        'ip-blocked' => 'Blocked request from unlisted IP address for :identifier',
        'sftp' => [
            'fail' => 'Не удалось войти в SFTP',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Изменена эл. почта с :old на :new',
            'password-changed' => 'Изменен пароль',
        ],
        'api-key' => [
            'create' => 'Создан новый API ключ :identifier',
            'delete' => 'Удален API ключ :identifier',
        ],
        'ssh-key' => [
            'create' => 'Добавлен ключ SSH :fingerprint в аккаунт',
            'delete' => 'SSH ключ :fingerprint удален из аккаунта',
        ],
        'two-factor' => [
            'create' => 'Включена двухфакторная авторизация',
            'delete' => 'Двухфакторная авторизация отключена',
        ],
    ],
    'server' => [
        'reinstall' => 'Сервер переустановлен',
        'console' => [
            'command' => 'Выполнено ":command" на сервере',
        ],
        'power' => [
            'start' => 'Сервер запущен',
            'stop' => 'Сервер остановлен',
            'restart' => 'Сервер перезапущен',
            'kill' => 'Процесс сервера принудительно завершен',
        ],
        'backup' => [
            'download' => 'Скачана резервная копия :name',
            'delete' => 'Удалена резервная копия :name',
            'restore' => 'Восстановлена резервная копия :name (удалены файлы: :truncate)',
            'restore-complete' => 'Восстановление резервной копии :name завершено',
            'restore-failed' => 'Не удалось восстановить резервную копию :name',
            'start' => 'Запущено резервное копирование :name',
            'complete' => 'Резервная копия :name отмечена как завершенная',
            'fail' => 'Не удалось создать резервную копию :name',
            'lock' => 'Защищена резервная копия :name',
            'unlock' => 'Разблокирована резервная копия :name',
        ],
        'database' => [
            'create' => 'Создана база данных :name',
            'rotate-password' => 'Изменен пароль для базы данных :name',
            'delete' => 'Удалена база данных :name',
        ],
        'file' => [
            'compress_one' => ':directory:file архивирован',
            'compress_other' => 'Архивировано :count файлов из директории :directory',
            'read' => 'Просмотрено содержимое :file',
            'copy' => 'Создана копия :file',
            'create-directory' => 'Создана папка :directory:name',
            'decompress' => 'Разархивировано :files файлов в :directory',
            'delete_one' => 'Deleted :directory:files.0',
            'delete_other' => 'Удалено :count файлов из :directory',
            'download' => 'Скачан :file',
            'pull' => 'Скачан файл из :url в :directory',
            'rename_one' => ':directory:files.0.from переименован в :directory:files.0.to',
            'rename_other' => 'Переименовано :count файлов в :directory',
            'write' => 'Обновлено содержание :file',
            'upload' => 'Начата загрузка файлов',
            'uploaded' => 'Загружено :directory:file',
        ],
        'sftp' => [
            'denied' => 'Подключение по SFTP заблокировано из-за отсутствия разрешений',
            'create_one' => 'Создан :files.0',
            'create_other' => 'Создано :count новых файлов',
            'write_one' => 'Изменено содержание файла :files.0',
            'write_other' => 'Изменено содержание :count файлов',
            'delete_one' => 'Удален :files.0',
            'delete_other' => 'Удалено :count файлов',
            'create-directory_one' => 'Создана директория :files.0',
            'create-directory_other' => 'Создано :count директорий',
            'rename_one' => ':files.0.from переименован в :files.0.to',
            'rename_other' => 'Переименовано или перемещено :count файлов',
        ],
        'allocation' => [
            'create' => 'Добавлен порт :allocation',
            'notes' => 'Updated the notes for :allocation from ":old" to ":new"',
            'primary' => ':allocation установлен как основной порт сервера',
            'delete' => 'Deleted the :allocation allocation',
        ],
        'schedule' => [
            'create' => 'Created the :name schedule',
            'update' => 'Updated the :name schedule',
            'execute' => 'Manually executed the :name schedule',
            'delete' => 'Deleted the :name schedule',
        ],
        'task' => [
            'create' => 'Created a new ":action" task for the :name schedule',
            'update' => 'Updated the ":action" task for the :name schedule',
            'delete' => 'Deleted a task for the :name schedule',
        ],
        'settings' => [
            'rename' => 'Название сервера изменено с :old на :new',
            'description' => 'Описание сервера изменено с :old на :new',
        ],
        'startup' => [
            'edit' => 'Переменная :variable изменена с ":old" на ":new"',
            'image' => 'Образ Docker обновлен с :old на :new',
        ],
        'subuser' => [
            'create' => 'Добавлен подпользователь :email',
            'update' => 'Обновлены права подпользователя :email',
            'delete' => 'Подпользователь :email удален',
        ],
    ],
];
