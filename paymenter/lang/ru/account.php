<?php

return [
    'account' => 'Аккаунт',
    'personal_details' => 'Личные данные',
    'security' => 'Безопасность',
    'credits' => 'Баланс',

    'change_password' => 'Изменить пароль',

    'two_factor_authentication' => 'Двухфакторная аутентификация',
    'two_factor_authentication_description' => 'Добавьте дополнительный уровень защиты, включив двухфакторную аутентификацию.',
    'two_factor_authentication_enabled' => 'Двухфакторная аутентификация включена.',
    'two_factor_authentication_enable' => 'Включить двухфакторную аутентификацию',
    'two_factor_authentication_disable' => 'Отключить двухфакторную аутентификацию',
    'two_factor_authentication_disable_description' => 'Вы уверены, что хотите отключить двухфакторную аутентификацию? Это снизит защиту вашего аккаунта.',
    'two_factor_authentication_enable_description' => 'Для включения двухфакторной аутентификации отсканируйте QR-код ниже с помощью приложения-аутентификатора, например Google Authenticator или Authy.',
    'two_factor_authentication_qr_code' => 'Отсканируйте QR-код с помощью приложения-аутентификатора:',
    'two_factor_authentication_secret' => 'Или введите код вручную:',

    'sessions' => 'Сессии',
    'sessions_description' => 'Управляйте активными сессиями и завершайте их на других браузерах и устройствах.',
    'logout_sessions' => 'Завершить эту сессию',
    'current_device' => 'Текущее устройство',

    'input' => [
        'current_password' => 'Текущий пароль',
        'current_password_placeholder' => 'Ваш текущий пароль',
        'new_password' => 'Новый пароль',
        'new_password_placeholder' => 'Ваш новый пароль',
        'confirm_password' => 'Подтверждение пароля',
        'confirm_password_placeholder' => 'Подтвердите новый пароль',

        'two_factor_code' => 'Введите код из приложения-аутентификатора',
        'two_factor_code_placeholder' => 'Код двухфакторной аутентификации',

        'currency' => 'Валюта',
        'amount' => 'Сумма',
        'payment_gateway' => 'Платёжный шлюз',
    ],

    'notifications' => [
        'password_changed' => 'Пароль успешно изменён.',
        'password_incorrect' => 'Текущий пароль неверен.',
        'two_factor_enabled' => 'Двухфакторная аутентификация включена.',
        'two_factor_disabled' => 'Двухфакторная аутентификация отключена.',
        'two_factor_code_incorrect' => 'Неверный код.',
        'session_logged_out' => 'Сессия завершена.',
    ],

    'no_credit' => 'На вашем балансе нет средств.',
    'add_credit' => 'Пополнить баланс',
    'credit_deposit' => 'Пополнение баланса (:currency)',

    'payment_methods' => 'Способы оплаты',
    'recent_transactions' => 'Последние транзакции',
    'saved_payment_methods' => 'Сохранённые способы оплаты',
    'setup_payment_method' => 'Добавить новый способ оплаты',
    'no_saved_payment_methods' => 'Нет сохранённых способов оплаты.',
    'saved_payment_methods_description' => 'Управляйте сохранёнными способами оплаты для быстрой оплаты и автоплатежей.',
    'no_saved_payment_methods_description' => 'Добавьте способ оплаты для ускорения будущих платежей и включения автоплатежей за услуги.',
    'add_payment_method' => 'Добавить способ оплаты',
    'payment_method_statuses' => [
        'active' => 'Активен',
        'inactive' => 'Неактивен',
        'expired' => 'Истёк',
        'pending' => 'Ожидание',
    ],
    'payment_method_added' => 'Способ оплаты добавлен.',
    'payment_method_add_failed' => 'Не удалось добавить способ оплаты. Попробуйте ещё раз.',
    'services_linked' => 'Услуг привязано: :count',
    'remove' => 'Удалить',
    'remove_payment_method' => 'Удалить способ оплаты',
    'remove_payment_method_confirm' => 'Вы уверены, что хотите удалить :name? Это действие необратимо.',
    'expires' => 'Истекает :date',
    'cancel' => 'Отмена',
    'confirm' => 'Да, удалить',
    'email_notifications' => 'Email-уведомления',
    'in_app_notifications' => 'Уведомления в приложении',
    'notifications_description' => 'Управляйте настройками уведомлений — по email, в приложении или обоими способами.',
    'notification' => 'Уведомление',

    'push_notifications' => 'Push-уведомления',
    'push_notifications_description' => 'Включите push-уведомления для получения обновлений в браузере в реальном времени.',
    'enable_push_notifications' => 'Включить push-уведомления',
    'push_status' => [
        'not_supported' => 'Ваш браузер не поддерживает push-уведомления.',
        'denied' => 'Push-уведомления заблокированы. Разрешите их в настройках браузера.',
        'subscribed' => 'Push-уведомления включены.',
    ],
];
