<?php

return [
    'email' => [
        'title' => 'Изменить эл. почту',
        'updated' => 'Ваш адрес эл. почты был изменен.',
    ],
    'password' => [
        'title' => 'Изменить пароль',
        'requirements' => 'Длина вашего нового пароля должна быть не менее 8 символов.',
        'updated' => 'Ваш пароль был изменен.',
    ],
    'two_factor' => [
        'button' => 'Настроить 2-Факторную Аутентификацию',
        'disabled' => 'Двухфакторная аутентификация была отключена для вашего аккаунта. Вам больше не будет предлагаться предоставить код при входе.',
        'enabled' => 'Двухфакторная аутентификация была включена для вашего аккаунта! Теперь при входе вы будете обязаны предоставить код, сгенерированный вашим устройством.',
        'invalid' => 'Указанный код недействителен.',
        'setup' => [
            'title' => 'Настройка двухфакторной аутентификации',
            'help' => 'Не удается просканировать код? Введите код ниже в приложение:',
            'field' => 'Введите код',
        ],
        'disable' => [
            'title' => 'Отключить двухфакторную авторизацию',
            'field' => 'Введите код',
        ],
    ],
];