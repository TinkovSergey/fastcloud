<div x-data="{
    tr(msg) {
        var map = {
            'If the email address is associated with an account, you will receive an email with instructions on how to reset your password.':
                'Если указанный e-mail зарегистрирован, мы отправим письмо со ссылкой для сброса пароля.',
            'Verification email sent.':
                'Письмо для подтверждения отправлено.',
            'Coupon code already applied':
                'Промокод уже применён.',
            'Too many attempts. Please try again later.':
                'Слишком много попыток. Попробуйте позже.',
            'Coupon code applied successfully':
                'Промокод успешно применён.',
            'No coupon code applied':
                'Промокод не применён.',
            'Coupon code removed successfully':
                'Промокод удалён.',
            'Your cart is empty':
                'Корзина пуста.',
            'You must accept the terms of service':
                'Необходимо принять условия использования.',
            'This coupon can no longer be used':
                'Промокод больше не действует.',
            'An error occurred while processing your order. Please try again later.':
                'Ошибка при оформлении заказа. Попробуйте позже.',
        };
        return map[msg] || msg;
    }
}">
    <template x-for="(notification, index) in $store.notifications.notifications" :key="notification.id">
        <div
            x-show="notification.show"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-2"
            @click="$store.notifications.removeNotification(notification.id)"
            :style="{
                position: 'fixed',
                top: (20 + index * 68) + 'px',
                left: '50%',
                transform: 'translateX(-50%)',
                zIndex: 9999,
                cursor: 'pointer',
                minWidth: '280px',
                maxWidth: '420px',
                padding: '12px 16px',
                borderRadius: '10px',
                background: 'var(--fc-surface2)',
                boxShadow: '0 4px 24px rgba(0,0,0,.4)',
                borderLeft: '3px solid ' + (notification.type === 'success' ? 'var(--fc-lime)' : 'var(--fc-red)')
            }">
            <p x-text="tr(notification.message)"
               style="margin:0;font-size:13.5px;line-height:1.5;color:var(--fc-text);font-family:var(--fc-font);"></p>
        </div>
    </template>
</div>
