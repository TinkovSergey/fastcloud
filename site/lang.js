(function () {
'use strict';

/* ═══════════════════════════════════════════════════════════════
   TRANSLATIONS
═══════════════════════════════════════════════════════════════ */
var T = {

ru: {
  /* sidebar nav */
  nav_overview:'Обзор', nav_servers:'Серверы', nav_create:'Создать',
  nav_ssh:'SSH-ключи', nav_billing:'Биллинг', nav_profile:'Профиль',
  balance:'Баланс', topup_btn:'+ Пополнить', logout:'Выйти',
  /* public nav */
  pub_pricing:'Тарифы', pub_locations:'Локации', pub_contacts:'Контакты',
  pub_login:'Войти', pub_register:'Создать аккаунт',
  /* page titles (used for .page-title and breadcrumb) */
  page_dashboard:'Обзор', page_servers:'Серверы', page_ssh:'SSH-ключи',
  page_billing:'Биллинг', page_profile:'Профиль',
  page_topup:'Пополнение баланса', page_create:'Создать сервер',
  page_deploying:'Запуск сервера', page_server_detail:'Управление сервером',
  /* breadcrumb parents */
  bc_servers:'Серверы', bc_billing:'Биллинг',
  /* dashboard */
  db_servers:'Серверов', db_cost:'Расход / мес', db_balance:'Баланс', db_uptime:'Аптайм',
  db_my_servers:'Серверы', db_expenses:'Расходы · последние 30 дней',
  db_create:'+ Создать сервер', db_all:'все 7 серверов →', db_console:'консоль',
  db_create_sm:'+ создать',
  /* servers */
  sv_all:'Все', sv_name:'Имя', sv_status:'Статус', sv_plan:'Тариф',
  sv_dc:'ДЦ', sv_ip:'IP', sv_manage:'Управлять', sv_create:'+ Создать',
  /* server detail tabs */
  sd_console:'Консоль', sd_overview:'Обзор', sd_network:'Сеть',
  sd_reinstall:'Перестановка ОС', sd_resize:'Ресайз',
  /* ssh keys */
  ssh_name:'Имя', ssh_fp:'Fingerprint', ssh_added:'Добавлен', ssh_del:'удалить',
  ssh_add_title:'Добавить ключ', ssh_howto:'Как получить ключ',
  ssh_name_label:'Название', ssh_key_label:'Публичный ключ', ssh_add_btn:'Добавить ключ',
  /* billing */
  bl_cur_balance:'Текущий баланс', bl_monthly:'Расход этого месяца', bl_method:'Способ оплаты',
  bl_topup:'+ Пополнить', bl_promo:'Промокод',
  bl_ops:'Операции', bl_docs:'Документы', bl_promos:'Промокоды',
  bl_date:'Дата', bl_desc:'Описание', bl_amount:'Сумма', bl_balance:'Баланс',
  /* profile */
  pr_personal:'Личные данные', pr_name:'Имя', pr_email:'E-mail',
  pr_no_change:'нельзя изменить', pr_save:'Сохранить',
  pr_change_pass:'Смена пароля', pr_cur_pass:'Текущий пароль', pr_new_pass:'Новый пароль',
  pr_upd_pass:'Обновить пароль', pr_danger:'Danger Zone',
  pr_del_warn:'Удаление аккаунта необратимо. Все серверы будут уничтожены.',
  pr_del_btn:'Удалить аккаунт',
  pr_account:'Аккаунт', pr_reg:'Регистрация', pr_active:'активен',
  /* top-up */
  tu_amount:'Сумма пополнения', tu_custom_label:'Другая сумма',
  tu_method:'Способ оплаты', tu_card:'Банковская карта', tu_usdt:'USDT (TRC-20)',
  tu_summary:'Итого к оплате', tu_credit_note:'зачислится на баланс',
  tu_cur_balance:'Текущий баланс', tu_topup_line:'Пополнение', tu_after:'Станет',
  tu_days_prefix:'хватит ещё на ~', tu_days_suffix:'день',
  tu_pay:'Пополнить',
  tu_card_num:'Номер карты', tu_expiry:'Срок действия', tu_cvv:'CVV / CVC', tu_holder:'Имя держателя',
  /* deploying */
  dep_title:'Создаём ваш сервер', dep_open:'Открыть сервер сейчас →',
  /* marketing footer */
  footer_product:'Продукт', footer_legal:'Юридические',
  footer_copy:'© 2026 FastCloud. Все права защищены.',
  footer_tagline:'VPS в Европе · NVMe · 24/7 RU',
  footer_terms:'Договор-оферта', footer_privacy:'Политика конфиденциальности',
  /* index hero */
  hero_title:'Самые быстрые<br>VPS <span style="color:var(--accent)">в Европе</span>',
  hero_sub:'NVMe SSD, AMD EPYC, сеть 10 Gbps. Развёртывание за 45 секунд. 4 дата-центра: FR · NL · DE · FI.',
  hero_cta:'Создать сервер →', hero_cta2:'Посмотреть тарифы',
  stat_launch:'до запуска', stat_dc:'в Европе', stat_support:'поддержка 24/7',
  feat1_title:'NVMe Gen4',
  feat1_desc:'Диски нового поколения. Скорость чтения до 7 GB/s — быстрее любого классического SSD.',
  feat2_title:'Anti-DDoS 10 Гбит/с',
  feat2_desc:'Включён во все тарифы без доплаты. Фильтрация на уровне сети, не влияет на латентность.',
  feat3_title:'1-click приложения',
  feat3_desc:'WordPress, Docker, n8n, GitLab, WireGuard — деплой за 30 секунд без ручной настройки.',
  feat4_title:'API + CLI',
  feat4_desc:'Полный REST API и Terraform-провайдер. Управляй инфраструктурой как кодом.',
  plans_title:'Популярные тарифы', plans_all:'все тарифы →',
  plan_per_mo:'/мес', plan_pick:'Выбрать', plan_popular:'★ выбор',
  dc_title:'4 дата-центра · сеть 10 Gbps',
  cta_title:'Готов попробовать?',
  cta_sub:'€5 на счёт после подтверждения e-mail · Без карты · Активация за 30 секунд',
  cta_btn:'Создать аккаунт →',
  /* pricing page */
  pricing_sub:'Фиксированная цена · NVMe SSD · Anti-DDoS включён · Бэкапы 14 дней',
  pricing_all:'Все', pricing_hourly:'Почасово', pricing_monthly:'Ежемесячно',
  plan_ddos:'Anti-DDoS 10 Гбит/с', plan_backups:'Бэкапы 14 дней', plan_support_txt:'Поддержка 24/7',
  plan_traffic:'трафик', plan_pick_arr:'Выбрать →',
  plan_dedicated:'Выделенный',
  plan_dedicated_desc:'Нужно больше? Обсудим конфигурацию индивидуально.',
  plan_dedicated_btn:'Написать →',
  /* auth — login */
  lg_welcome:'С возвращением.',
  lg_welcome_sub:'Серверы готовы — баланс, графики и консоль ждут внутри.',
  lg_feat_deploy:'Развёртывание за 45 с',
  lg_feat_dc_login:'4 ДЦ в Европе',
  lg_feat_support:'Поддержка 24/7 на русском',
  lg_form_title:'Войти в аккаунт',
  lg_password:'Пароль',
  lg_forgot:'Забыл?',
  lg_submit:'Войти →',
  lg_or:'или',
  lg_no_acc_html:'Нет аккаунта? <a href="register.html" style="color:var(--accent)">Зарегистрироваться</a>',
  /* auth — register */
  rg_title:'Самые быстрые VPS в Европе.',
  rg_sub:'€5 на счёт после подтверждения e-mail. Без карты — попробовать можно прямо сейчас.',
  rg_feat_dc:'4 ДЦ: FRA · AMS · PAR · HEL',
  rg_feat_pay:'Оплата картой или USDT',
  rg_form_title:'Создать аккаунт',
  rg_name:'Имя',
  rg_password:'Пароль',
  rg_agree_html:'Согласен с <a href="terms.html" style="color:var(--accent)">офертой</a> и <a href="privacy.html" style="color:var(--accent)">политикой</a>',
  rg_submit:'Зарегистрироваться →',
  rg_has_acc_html:'Уже есть аккаунт? <a href="login.html" style="color:var(--accent)">Войти</a>',
  /* auth — reset */
  rs_title:'Восстановление пароля',
  rs_sub:'Введите e-mail — пришлём ссылку для сброса.',
  rs_submit:'Отправить ссылку →',
  rs_back:'← Назад ко входу',
  /* locations */
  loc_hero_title_html:'4 дата-центра<br>в <span style="color:var(--accent)">сердце Европы</span>',
  loc_hero_sub:'NVMe Gen4 · сеть 10 Gbps · Anti-DDoS включён · одинаковые тарифы во всех локациях',
  loc_status_ok:'● Все ДЦ в норме',
  loc_online:'онлайн',
  loc_network:'Сеть',
  loc_storage:'Хранилище',
  loc_uptime_label:'Аптайм',
  loc_ping_title:'Пинг до крупных городов',
  loc_fra_country:'Германия · FRA',
  loc_ams_country:'Нидерланды · AMS',
  loc_par_country:'Франция · PAR',
  loc_hel_country:'Финляндия · HEL',
  loc_pick_fra:'Выбрать Frankfurt →',
  loc_pick_ams:'Выбрать Amsterdam →',
  loc_pick_par:'Выбрать Paris →',
  loc_pick_hel:'Выбрать Helsinki →',
  loc_feat1_title:'Одинаковые тарифы',
  loc_feat1_desc:'Цена не зависит от локации. Выбирай по пингу, не по бюджету.',
  loc_feat2_title:'Миграция между ДЦ',
  loc_feat2_desc:'Перенос сервера в другую локацию — через снапшот за несколько минут.',
  loc_feat3_title:'GDPR-совместимость',
  loc_feat3_desc:'Все дата-центры в юрисдикции ЕС. Данные не покидают Европу.',
  loc_feat4_title:'Peering в IX',
  loc_feat4_desc:'Прямые пиринги с крупнейшими европейскими интернет-биржами.',
  loc_cta_title:'Выбери локацию и запускайся',
  loc_cta_sub:'€5 на счёт · Активация за 30 секунд · Без верификации паспорта',
  loc_cta_btn:'Создать аккаунт →',
  /* contacts */
  ct_title:'Контакты',
  ct_support:'Поддержка 24/7',
  ct_sales:'Продажи',
  ct_legal_addr:'Юридический адрес',
  ct_form:'Форма обратной связи',
  ct_name:'Имя',
  ct_message:'Сообщение',
  ct_placeholder:'Напишите ваш вопрос…',
  ct_submit:'Отправить →',
  /* input placeholders */
  ph_name_eg:'Иван Петров',
  ph_pass_min:'мин. 10 символов',
  tu_expiry_ph:'ММ / ГГ',
  /* legal pages */
  breadcrumb_home:'Главная',
  sla_title:'Соглашение об уровне сервиса',
  legal_date:'Редакция от 1 мая 2026 г.',
  privacy_date_note:'Редакция от 1 мая 2026 г. · Соответствует GDPR',
  sla_kpi1_label:'Гарантированный аптайм', sla_kpi1_sub:'≤ 52 мин простоя в год',
  sla_kpi2_label:'Ответ поддержки', sla_kpi2_val:'10 мин', sla_kpi2_sub:'критические инциденты',
  sla_kpi3_label:'Компенсация', sla_kpi3_val:'до 30%', sla_kpi3_sub:'от месячного платежа',
  terms_body:
    '<h2>1. Общие положения</h2>' +
    '<p>Настоящий документ является публичной офертой FastCloud (далее — «Исполнитель») и содержит все существенные условия договора на оказание услуг виртуальных частных серверов (VPS/VDS).</p>' +
    '<p>Принятием оферты считается регистрация аккаунта и/или оплата любого тарифного плана. С момента акцепта договор считается заключённым на условиях настоящей оферты.</p>' +
    '<h2>2. Предмет договора</h2>' +
    '<p>Исполнитель предоставляет Заказчику доступ к виртуальным серверам (VPS) на серверах, расположенных в дата-центрах Европы, на условиях тарифного плана, выбранного Заказчиком.</p>' +
    '<p>Перечень тарифных планов, их технические характеристики и стоимость указаны на странице <a href="pricing.html">Тарифы</a>.</p>' +
    '<h2>3. Порядок оказания услуг</h2>' +
    '<p>3.1. Услуги активируются автоматически в течение 30 секунд после поступления оплаты на счёт Заказчика.</p>' +
    '<p>3.2. Доступ к серверу предоставляется по SSH и через веб-консоль в личном кабинете.</p>' +
    '<p>3.3. Исполнитель вправе приостановить оказание услуг при наличии задолженности или нарушении настоящей оферты.</p>' +
    '<h2>4. Стоимость и порядок расчётов</h2>' +
    '<p>4.1. Стоимость услуг соответствует выбранному тарифному плану. <strong>Цена фиксируется на весь срок действия договора</strong> и не изменяется в одностороннем порядке.</p>' +
    '<p>4.2. Оплата производится авансом путём пополнения внутреннего баланса. Принимаются банковские карты Visa/Mastercard, USDT (TRC-20), а также иные способы, указанные в разделе биллинга.</p>' +
    '<p>4.3. При нулевом балансе сервер переходит в статус «заморожен» и удаляется через 7 (семь) дней.</p>' +
    '<h2>5. Гарантии и ответственность</h2>' +
    '<p>5.1. Исполнитель гарантирует доступность инфраструктуры согласно условиям SLA (см. <a href="sla.html">Соглашение об уровне сервиса</a>).</p>' +
    '<p>5.2. Исполнитель не несёт ответственности за содержимое данных, хранимых на серверах Заказчика.</p>' +
    '<p>5.3. Ответственность Исполнителя ограничена суммой оплаченных, но неоказанных услуг.</p>' +
    '<h2>6. Запрещённые виды использования</h2>' +
    '<p>Запрещается использование серверов для: рассылки спама, организации DDoS-атак, распространения вредоносного ПО, хранения незаконного контента, а также иных действий, нарушающих законодательство применимой юрисдикции.</p>' +
    '<p>При выявлении нарушений Исполнитель вправе немедленно заблокировать сервер без возврата средств за оставшийся период.</p>' +
    '<h2>7. Конфиденциальность</h2>' +
    '<p>Обработка персональных данных осуществляется в соответствии с <a href="privacy.html">Политикой конфиденциальности</a>.</p>' +
    '<h2>8. Срок действия и расторжение</h2>' +
    '<p>8.1. Договор действует бессрочно с момента акцепта до момента удаления аккаунта Заказчиком или расторжения по инициативе Исполнителя.</p>' +
    '<p>8.2. Заказчик вправе расторгнуть договор в любое время, удалив все серверы и аккаунт в личном кабинете. Остаток баланса возвращается по запросу.</p>' +
    '<h2>9. Применимое право</h2>' +
    '<p>Настоящий договор регулируется законодательством юрисдикции регистрации Исполнителя. Споры разрешаются путём переговоров, а при недостижении согласия — в компетентном суде.</p>' +
    '<h2>10. Реквизиты</h2>' +
    '<p>FastCloud OÜ · Регистрационный номер: 12345678 · Адрес: Tallinn, Estonia<br>E-mail: <a href="mailto:legal@fastcloud.eu">legal@fastcloud.eu</a></p>',
  privacy_body:
    '<h2>1. Кто мы</h2>' +
    '<p>FastCloud OÜ (далее — «мы», «Компания») является оператором персональных данных в отношении информации, которую вы предоставляете при использовании сервиса fastcloud.eu.</p>' +
    '<h2>2. Какие данные мы собираем</h2>' +
    '<p><strong>Данные аккаунта:</strong> имя, адрес электронной почты, хэш пароля.</p>' +
    '<p><strong>Платёжные данные:</strong> последние 4 цифры карты, тип платёжного метода. Полные данные карты не хранятся — обработка производится через PCI DSS-сертифицированных провайдеров.</p>' +
    '<p><strong>Технические данные:</strong> IP-адрес, тип браузера, страницы посещений, время сессий — для обеспечения безопасности и улучшения сервиса.</p>' +
    '<p><strong>Данные серверов:</strong> конфигурации, имена серверов, журналы использования ресурсов.</p>' +
    '<h2>3. Как мы используем данные</h2>' +
    '<p>3.1. <strong>Оказание услуг</strong> — активация серверов, биллинг, техническая поддержка.</p>' +
    '<p>3.2. <strong>Безопасность</strong> — обнаружение мошенничества, защита аккаунта, соблюдение требований AML.</p>' +
    '<p>3.3. <strong>Коммуникации</strong> — уведомления о состоянии сервера, технические алерты, важные изменения в условиях.</p>' +
    '<p>3.4. <strong>Улучшение продукта</strong> — агрегированная аналитика использования сервиса.</p>' +
    '<p>Мы <strong>не продаём</strong> персональные данные третьим лицам.</p>' +
    '<h2>4. Основания обработки (GDPR)</h2>' +
    '<p>Исполнение договора (ст. 6(1)(b) GDPR) — основная часть обработки данных аккаунта и биллинга.<br>Законный интерес (ст. 6(1)(f) GDPR) — безопасность и предотвращение мошенничества.<br>Согласие (ст. 6(1)(a) GDPR) — маркетинговые коммуникации (опционально, можно отозвать).</p>' +
    '<h2>5. Хранение данных</h2>' +
    '<p>Данные аккаунта хранятся в течение срока действия договора + 3 года после закрытия аккаунта (для целей бухгалтерской отчётности и соблюдения законодательства).</p>' +
    '<p>Технические логи — 90 дней. Резервные копии серверов — 14 дней после удаления.</p>' +
    '<h2>6. Ваши права (GDPR)</h2>' +
    '<p>Вы вправе в любое время:</p>' +
    '<ul><li>запросить копию ваших данных (право на доступ)</li><li>исправить неточные данные (право на rectification)</li><li>удалить аккаунт и данные (право на забвение)</li><li>ограничить или возразить против обработки</li><li>получить данные в машиночитаемом формате (portability)</li></ul>' +
    '<p>Для реализации прав обратитесь на <a href="mailto:privacy@fastcloud.eu">privacy@fastcloud.eu</a>. Ответ — в течение 30 дней.</p>' +
    '<h2>7. Cookies</h2>' +
    '<p>Мы используем обязательные cookies для авторизации и сессий, а также аналитические cookies (с вашего согласия). Управление cookies доступно в настройках браузера.</p>' +
    '<h2>8. Передача данных</h2>' +
    '<p>Данные обрабатываются на серверах в Европейском союзе. При передаче данных за пределы ЕС применяются стандартные договорные положения (SCC), одобренные Европейской комиссией.</p>' +
    '<h2>9. Безопасность</h2>' +
    '<p>Данные передаются по TLS 1.3. Пароли хранятся в виде bcrypt-хэшей. Доступ сотрудников к данным ограничен принципом наименьших привилегий.</p>' +
    '<h2>10. Контакты DPO</h2>' +
    '<p>По вопросам защиты данных: <a href="mailto:privacy@fastcloud.eu">privacy@fastcloud.eu</a><br>FastCloud OÜ · Tallinn, Estonia</p>',
  sla_body:
    '<h2>1. Область применения</h2>' +
    '<p>Настоящее SLA определяет гарантии доступности инфраструктуры FastCloud и порядок компенсации при их нарушении. Действует для всех активных тарифных планов.</p>' +
    '<h2>2. Гарантия доступности</h2>' +
    '<p>FastCloud гарантирует доступность виртуальных серверов на уровне <strong>99,99% в месяц</strong>, что соответствует не более 4,3 минуты плановых и внеплановых простоев в месяц.</p>' +
    '<div style="background:var(--surface2);border:1px solid var(--border);border-radius:var(--r);overflow:hidden;margin:20px 0"><table class="tbl"><thead><tr><th>Уровень доступности</th><th>Макс. простой / месяц</th><th>Компенсация</th></tr></thead><tbody>' +
    '<tr><td style="color:var(--green);font-weight:600">99,99% и выше</td><td>≤ 4,3 мин</td><td>— (норма)</td></tr>' +
    '<tr><td>99,95% — 99,99%</td><td>до 21,9 мин</td><td>10% платежа</td></tr>' +
    '<tr><td>99,90% — 99,95%</td><td>до 43,8 мин</td><td>15% платежа</td></tr>' +
    '<tr><td>99,00% — 99,90%</td><td>до 7,3 ч</td><td>25% платежа</td></tr>' +
    '<tr><td style="color:var(--red)">Ниже 99,00%</td><td>более 7,3 ч</td><td>30% платежа</td></tr>' +
    '</tbody></table></div>' +
    '<h2>3. Что входит в расчёт простоя</h2>' +
    '<p>Простоем считается недоступность сервера по сети (ICMP + TCP-порт 22) в течение более 5 минут непрерывно, подтверждённая мониторинговой системой FastCloud.</p>' +
    '<p><strong>Не считается простоем:</strong></p>' +
    '<ul><li>Плановое техническое обслуживание с уведомлением за 48 часов</li><li>Недоступность по причине действий Заказчика (удаление правил фаервола, ошибки конфигурации)</li><li>DDoS-атаки на IP-адрес Заказчика (при наличии активной защиты)</li><li>Форс-мажорные обстоятельства</li></ul>' +
    '<h2>4. Уровни приоритета поддержки</h2>' +
    '<div style="background:var(--surface2);border:1px solid var(--border);border-radius:var(--r);overflow:hidden;margin:20px 0"><table class="tbl"><thead><tr><th>Приоритет</th><th>Описание</th><th>Первый ответ</th><th>Решение</th></tr></thead><tbody>' +
    '<tr><td><span class="dot dot-red">Критический</span></td><td>Сервер недоступен, данные под угрозой</td><td>10 минут</td><td>2 часа</td></tr>' +
    '<tr><td><span class="dot dot-yellow" style="--yellow:#f5c842">Высокий</span></td><td>Деградация производительности, частичный сбой</td><td>30 минут</td><td>8 часов</td></tr>' +
    '<tr><td><span class="dot dot-gray">Обычный</span></td><td>Вопросы настройки, биллинг</td><td>2 часа</td><td>24 часа</td></tr>' +
    '</tbody></table></div>' +
    '<h2>5. Порядок получения компенсации</h2>' +
    '<p>5.1. Компенсация начисляется на внутренний баланс аккаунта в виде кредита.</p>' +
    '<p>5.2. Для получения компенсации необходимо подать заявку через <a href="contacts.html">форму поддержки</a> в течение 30 дней с момента инцидента, указав временной диапазон и описание проблемы.</p>' +
    '<p>5.3. FastCloud рассматривает заявки в течение 5 рабочих дней и уведомляет о решении на e-mail.</p>' +
    '<p>5.4. Совокупный размер компенсации не превышает 30% от суммы ежемесячного платежа за затронутый тариф.</p>' +
    '<h2>6. Мониторинг и прозрачность</h2>' +
    '<p>Текущий статус всех систем доступен на странице статуса в режиме реального времени. История инцидентов публикуется и хранится не менее 12 месяцев.</p>' +
    '<h2>7. Изменения SLA</h2>' +
    '<p>FastCloud вправе изменять условия SLA с уведомлением Заказчика не менее чем за 30 дней. При несогласии с новыми условиями Заказчик вправе расторгнуть договор с возвратом остатка баланса.</p>',
},

en: {
  nav_overview:'Overview', nav_servers:'Servers', nav_create:'Create',
  nav_ssh:'SSH Keys', nav_billing:'Billing', nav_profile:'Profile',
  balance:'Balance', topup_btn:'+ Top Up', logout:'Sign Out',
  pub_pricing:'Pricing', pub_locations:'Locations', pub_contacts:'Contact',
  pub_login:'Sign In', pub_register:'Create Account',
  page_dashboard:'Overview', page_servers:'Servers', page_ssh:'SSH Keys',
  page_billing:'Billing', page_profile:'Profile',
  page_topup:'Top Up Balance', page_create:'Create Server',
  page_deploying:'Launching Server', page_server_detail:'Server Management',
  bc_servers:'Servers', bc_billing:'Billing',
  db_servers:'Servers', db_cost:'Cost / mo', db_balance:'Balance', db_uptime:'Uptime',
  db_my_servers:'Servers', db_expenses:'Expenses · last 30 days',
  db_create:'+ Create Server', db_all:'all 7 servers →', db_console:'console',
  db_create_sm:'+ create',
  sv_all:'All', sv_name:'Name', sv_status:'Status', sv_plan:'Plan',
  sv_dc:'DC', sv_ip:'IP', sv_manage:'Manage', sv_create:'+ Create',
  sd_console:'Console', sd_overview:'Overview', sd_network:'Network',
  sd_reinstall:'Reinstall OS', sd_resize:'Resize',
  ssh_name:'Name', ssh_fp:'Fingerprint', ssh_added:'Added', ssh_del:'delete',
  ssh_add_title:'Add Key', ssh_howto:'How to get a key',
  ssh_name_label:'Name', ssh_key_label:'Public Key', ssh_add_btn:'Add Key',
  bl_cur_balance:'Current Balance', bl_monthly:"This Month's Spend", bl_method:'Payment Method',
  bl_topup:'+ Top Up', bl_promo:'Promo Code',
  bl_ops:'Transactions', bl_docs:'Documents', bl_promos:'Promo Codes',
  bl_date:'Date', bl_desc:'Description', bl_amount:'Amount', bl_balance:'Balance',
  pr_personal:'Personal Details', pr_name:'Name', pr_email:'E-mail',
  pr_no_change:'cannot be changed', pr_save:'Save',
  pr_change_pass:'Change Password', pr_cur_pass:'Current Password', pr_new_pass:'New Password',
  pr_upd_pass:'Update Password', pr_danger:'Danger Zone',
  pr_del_warn:'Account deletion is irreversible. All servers will be destroyed.',
  pr_del_btn:'Delete Account',
  pr_account:'Account', pr_reg:'Registered', pr_active:'active',
  tu_amount:'Top-up Amount', tu_custom_label:'Custom Amount',
  tu_method:'Payment Method', tu_card:'Bank Card', tu_usdt:'USDT (TRC-20)',
  tu_summary:'Total to Pay', tu_credit_note:'will be credited to balance',
  tu_cur_balance:'Current Balance', tu_topup_line:'Top-up', tu_after:'Will become',
  tu_days_prefix:'enough for approx. ~', tu_days_suffix:'days',
  tu_pay:'Top Up',
  tu_card_num:'Card Number', tu_expiry:'Expiry Date', tu_cvv:'CVV / CVC', tu_holder:'Cardholder Name',
  dep_title:'Creating your server', dep_open:'Open server now →',
  footer_product:'Product', footer_legal:'Legal',
  footer_copy:'© 2026 FastCloud. All rights reserved.',
  footer_tagline:'VPS in Europe · NVMe · Support 24/7',
  footer_terms:'Terms of Service', footer_privacy:'Privacy Policy',
  hero_title:'The Fastest<br>VPS <span style="color:var(--accent)">in Europe</span>',
  hero_sub:'NVMe SSD, AMD EPYC, 10 Gbps network. Deploy in 45 seconds. 4 data centers: FR · NL · DE · FI.',
  hero_cta:'Create Server →', hero_cta2:'View Pricing',
  stat_launch:'to deploy', stat_dc:'in Europe', stat_support:'support 24/7',
  feat1_title:'NVMe Gen4',
  feat1_desc:'Next-gen drives. Read speeds up to 7 GB/s — faster than any classic SSD.',
  feat2_title:'Anti-DDoS 10 Gbps',
  feat2_desc:'Included in all plans at no extra cost. Network-level filtering with no impact on latency.',
  feat3_title:'1-click Apps',
  feat3_desc:'WordPress, Docker, n8n, GitLab, WireGuard — deployed in 30 seconds, zero manual setup.',
  feat4_title:'API + CLI',
  feat4_desc:'Full REST API and Terraform provider. Manage your infrastructure as code.',
  plans_title:'Popular Plans', plans_all:'all plans →',
  plan_per_mo:'/mo', plan_pick:'Select', plan_popular:'★ top pick',
  dc_title:'4 Data Centers · 10 Gbps Network',
  cta_title:'Ready to try?',
  cta_sub:'€5 credit after email confirmation · No card required · Active in 30 seconds',
  cta_btn:'Create Account →',
  pricing_sub:'Flat pricing · NVMe SSD · Anti-DDoS included · 14-day backups',
  pricing_all:'All', pricing_hourly:'Hourly', pricing_monthly:'Monthly',
  plan_ddos:'Anti-DDoS 10 Gbps', plan_backups:'14-day Backups', plan_support_txt:'Support 24/7',
  plan_traffic:'traffic', plan_pick_arr:'Select →',
  plan_dedicated:'Dedicated',
  plan_dedicated_desc:'Need more? Let\'s discuss a custom configuration.',
  plan_dedicated_btn:'Contact us →',
  lg_welcome:'Welcome back.',
  lg_welcome_sub:'Your servers are ready — balance, charts and console are waiting inside.',
  lg_feat_deploy:'Deploy in 45 seconds',
  lg_feat_dc_login:'4 DCs in Europe',
  lg_feat_support:'24/7 support',
  lg_form_title:'Sign in to your account',
  lg_password:'Password',
  lg_forgot:'Forgot?',
  lg_submit:'Sign In →',
  lg_or:'or',
  lg_no_acc_html:'No account? <a href="register.html" style="color:var(--accent)">Sign up</a>',
  rg_title:'The Fastest VPS in Europe.',
  rg_sub:'€5 credit after email confirmation. No card required — try it right now.',
  rg_feat_dc:'4 DCs: FRA · AMS · PAR · HEL',
  rg_feat_pay:'Pay by card or USDT',
  rg_form_title:'Create an account',
  rg_name:'Name',
  rg_password:'Password',
  rg_agree_html:'I agree to the <a href="terms.html" style="color:var(--accent)">Terms</a> and <a href="privacy.html" style="color:var(--accent)">Privacy Policy</a>',
  rg_submit:'Create Account →',
  rg_has_acc_html:'Already have an account? <a href="login.html" style="color:var(--accent)">Sign in</a>',
  rs_title:'Password Recovery',
  rs_sub:"Enter your email — we'll send a reset link.",
  rs_submit:'Send Reset Link →',
  rs_back:'← Back to Sign In',
  loc_hero_title_html:'4 Data Centers<br>in the <span style="color:var(--accent)">Heart of Europe</span>',
  loc_hero_sub:'NVMe Gen4 · 10 Gbps network · Anti-DDoS included · same pricing in all locations',
  loc_status_ok:'● All DCs operational',
  loc_online:'online',
  loc_network:'Network',
  loc_storage:'Storage',
  loc_uptime_label:'Uptime',
  loc_ping_title:'Ping to major cities',
  loc_fra_country:'Germany · FRA',
  loc_ams_country:'Netherlands · AMS',
  loc_par_country:'France · PAR',
  loc_hel_country:'Finland · HEL',
  loc_pick_fra:'Choose Frankfurt →',
  loc_pick_ams:'Choose Amsterdam →',
  loc_pick_par:'Choose Paris →',
  loc_pick_hel:'Choose Helsinki →',
  loc_feat1_title:'Same Pricing',
  loc_feat1_desc:"Price doesn't depend on location. Choose by latency, not budget.",
  loc_feat2_title:'DC Migration',
  loc_feat2_desc:'Move a server to another location — via snapshot in minutes.',
  loc_feat3_title:'GDPR Compliant',
  loc_feat3_desc:'All data centers are under EU jurisdiction. Data never leaves Europe.',
  loc_feat4_title:'IX Peering',
  loc_feat4_desc:'Direct peering with the largest European internet exchanges.',
  loc_cta_title:'Pick a location and get started',
  loc_cta_sub:'€5 credit · Activate in 30 seconds · No passport verification',
  loc_cta_btn:'Create Account →',
  ct_title:'Contacts',
  ct_support:'Support 24/7',
  ct_sales:'Sales',
  ct_legal_addr:'Legal Address',
  ct_form:'Contact Form',
  ct_name:'Name',
  ct_message:'Message',
  ct_placeholder:'Write your question…',
  ct_submit:'Send →',
  ph_name_eg:'John Smith',
  ph_pass_min:'min. 10 characters',
  tu_expiry_ph:'MM / YY',
  breadcrumb_home:'Home',
  sla_title:'Service Level Agreement',
  legal_date:'Edition of May 1, 2026',
  privacy_date_note:'Edition of May 1, 2026 · GDPR Compliant',
  sla_kpi1_label:'Guaranteed Uptime', sla_kpi1_sub:'≤ 52 min downtime per year',
  sla_kpi2_label:'Support Response', sla_kpi2_val:'10 min', sla_kpi2_sub:'critical incidents',
  sla_kpi3_label:'Compensation', sla_kpi3_val:'up to 30%', sla_kpi3_sub:'of monthly payment',
  terms_body:
    '<h2>1. General Provisions</h2>' +
    '<p>This document constitutes a public offer from FastCloud (hereinafter "Service Provider") and contains all essential terms of the agreement for virtual private server (VPS/VDS) services.</p>' +
    '<p>Acceptance of this offer is effected by registering an account and/or paying for any pricing plan. Upon acceptance, the agreement is deemed concluded under the terms of this offer.</p>' +
    '<h2>2. Subject Matter</h2>' +
    '<p>The Service Provider grants the Client access to virtual servers (VPS) on servers located in European data centers, under the terms of the pricing plan selected by the Client.</p>' +
    '<p>The list of pricing plans, their technical specifications and pricing are specified on the <a href="pricing.html">Pricing</a> page.</p>' +
    '<h2>3. Service Delivery</h2>' +
    '<p>3.1. Services are activated automatically within 30 seconds of payment being credited to the Client account.</p>' +
    '<p>3.2. Server access is provided via SSH and through the web console in the client dashboard.</p>' +
    '<p>3.3. The Service Provider reserves the right to suspend services in case of outstanding debt or breach of this offer.</p>' +
    '<h2>4. Pricing and Payment</h2>' +
    '<p>4.1. The cost of services corresponds to the selected pricing plan. <strong>The price is fixed for the entire term of the agreement</strong> and shall not be changed unilaterally.</p>' +
    '<p>4.2. Payment is made in advance by topping up the internal balance. Accepted methods include Visa/Mastercard bank cards, USDT (TRC-20), and other methods listed in the billing section.</p>' +
    '<p>4.3. When the balance reaches zero, the server enters "frozen" status and is deleted after 7 (seven) days.</p>' +
    '<h2>5. Warranties and Liability</h2>' +
    '<p>5.1. The Service Provider guarantees infrastructure availability in accordance with the SLA terms (see <a href="sla.html">Service Level Agreement</a>).</p>' +
    '<p>5.2. The Service Provider bears no responsibility for the content of data stored on the Client servers.</p>' +
    '<p>5.3. The liability of the Service Provider is limited to the amount of paid but unrendered services.</p>' +
    '<h2>6. Prohibited Uses</h2>' +
    '<p>The following uses of servers are prohibited: sending spam, organizing DDoS attacks, distributing malicious software, storing illegal content, and any other actions that violate applicable law.</p>' +
    '<p>Upon detection of violations, the Service Provider reserves the right to immediately block the server without refunding the remaining period.</p>' +
    '<h2>7. Confidentiality</h2>' +
    '<p>Personal data is processed in accordance with the <a href="privacy.html">Privacy Policy</a>.</p>' +
    '<h2>8. Term and Termination</h2>' +
    '<p>8.1. The agreement is effective indefinitely from the date of acceptance until the Client deletes their account or the agreement is terminated at the initiative of the Service Provider.</p>' +
    '<p>8.2. The Client may terminate the agreement at any time by deleting all servers and their account in the client dashboard. The remaining balance is refunded upon request.</p>' +
    '<h2>9. Governing Law</h2>' +
    '<p>This agreement is governed by the laws of the jurisdiction in which the Service Provider is registered. Disputes are resolved through negotiations and, if no agreement is reached, before a competent court.</p>' +
    '<h2>10. Details</h2>' +
    '<p>FastCloud OÜ · Registration number: 12345678 · Address: Tallinn, Estonia<br>E-mail: <a href="mailto:legal@fastcloud.eu">legal@fastcloud.eu</a></p>',
  privacy_body:
    '<h2>1. Who We Are</h2>' +
    '<p>FastCloud OÜ (hereinafter "we", "the Company") is the data controller in respect of the information you provide when using the fastcloud.eu service.</p>' +
    '<h2>2. Data We Collect</h2>' +
    '<p><strong>Account data:</strong> name, email address, password hash.</p>' +
    '<p><strong>Payment data:</strong> last 4 digits of card, payment method type. Full card details are not stored — processing is carried out by PCI DSS-certified providers.</p>' +
    '<p><strong>Technical data:</strong> IP address, browser type, pages visited, session times — for security purposes and service improvement.</p>' +
    '<p><strong>Server data:</strong> configurations, server names, resource usage logs.</p>' +
    '<h2>3. How We Use Data</h2>' +
    '<p>3.1. <strong>Service delivery</strong> — server activation, billing, technical support.</p>' +
    '<p>3.2. <strong>Security</strong> — fraud detection, account protection, AML compliance.</p>' +
    '<p>3.3. <strong>Communications</strong> — server status notifications, technical alerts, important changes to terms.</p>' +
    '<p>3.4. <strong>Product improvement</strong> — aggregated service usage analytics.</p>' +
    '<p>We do <strong>not sell</strong> personal data to third parties.</p>' +
    '<h2>4. Legal Basis for Processing (GDPR)</h2>' +
    '<p>Contract performance (Art. 6(1)(b) GDPR) — the main basis for processing account and billing data.<br>Legitimate interest (Art. 6(1)(f) GDPR) — security and fraud prevention.<br>Consent (Art. 6(1)(a) GDPR) — marketing communications (optional, can be withdrawn).</p>' +
    '<h2>5. Data Retention</h2>' +
    '<p>Account data is retained for the duration of the contract + 3 years after account closure (for accounting and legal compliance purposes).</p>' +
    '<p>Technical logs — 90 days. Server backups — 14 days after deletion.</p>' +
    '<h2>6. Your Rights (GDPR)</h2>' +
    '<p>You have the right at any time to:</p>' +
    '<ul><li>request a copy of your data (right of access)</li><li>correct inaccurate data (right to rectification)</li><li>delete your account and data (right to erasure)</li><li>restrict or object to processing</li><li>receive data in machine-readable format (portability)</li></ul>' +
    '<p>To exercise your rights, contact <a href="mailto:privacy@fastcloud.eu">privacy@fastcloud.eu</a>. Response within 30 days.</p>' +
    '<h2>7. Cookies</h2>' +
    '<p>We use essential cookies for authentication and sessions, as well as analytical cookies (with your consent). Cookie management is available in your browser settings.</p>' +
    '<h2>8. Data Transfers</h2>' +
    '<p>Data is processed on servers within the European Union. When transferring data outside the EU, standard contractual clauses (SCC) approved by the European Commission are applied.</p>' +
    '<h2>9. Security</h2>' +
    '<p>Data is transmitted over TLS 1.3. Passwords are stored as bcrypt hashes. Employee access to data is restricted by the principle of least privilege.</p>' +
    '<h2>10. DPO Contact</h2>' +
    '<p>For data protection inquiries: <a href="mailto:privacy@fastcloud.eu">privacy@fastcloud.eu</a><br>FastCloud OÜ · Tallinn, Estonia</p>',
  sla_body:
    '<h2>1. Scope</h2>' +
    '<p>This SLA defines the infrastructure availability guarantees of FastCloud and the compensation procedure in case of breach. Applies to all active pricing plans.</p>' +
    '<h2>2. Availability Guarantee</h2>' +
    '<p>FastCloud guarantees virtual server availability at <strong>99.99% per month</strong>, corresponding to no more than 4.3 minutes of planned and unplanned downtime per month.</p>' +
    '<div style="background:var(--surface2);border:1px solid var(--border);border-radius:var(--r);overflow:hidden;margin:20px 0"><table class="tbl"><thead><tr><th>Availability Level</th><th>Max downtime / month</th><th>Compensation</th></tr></thead><tbody>' +
    '<tr><td style="color:var(--green);font-weight:600">99.99% and above</td><td>≤ 4.3 min</td><td>— (standard)</td></tr>' +
    '<tr><td>99.95% — 99.99%</td><td>up to 21.9 min</td><td>10% credit</td></tr>' +
    '<tr><td>99.90% — 99.95%</td><td>up to 43.8 min</td><td>15% credit</td></tr>' +
    '<tr><td>99.00% — 99.90%</td><td>up to 7.3 h</td><td>25% credit</td></tr>' +
    '<tr><td style="color:var(--red)">Below 99.00%</td><td>over 7.3 h</td><td>30% credit</td></tr>' +
    '</tbody></table></div>' +
    '<h2>3. What Counts as Downtime</h2>' +
    '<p>Downtime is defined as server network unavailability (ICMP + TCP port 22) for more than 5 consecutive minutes, confirmed by the FastCloud monitoring system.</p>' +
    '<p><strong>Not counted as downtime:</strong></p>' +
    '<ul><li>Scheduled maintenance with 48-hour advance notice</li><li>Unavailability caused by Client actions (firewall rule deletion, configuration errors)</li><li>DDoS attacks on the Client IP address (when active protection is enabled)</li><li>Force majeure circumstances</li></ul>' +
    '<h2>4. Support Priority Levels</h2>' +
    '<div style="background:var(--surface2);border:1px solid var(--border);border-radius:var(--r);overflow:hidden;margin:20px 0"><table class="tbl"><thead><tr><th>Priority</th><th>Description</th><th>First Response</th><th>Resolution</th></tr></thead><tbody>' +
    '<tr><td><span class="dot dot-red">Critical</span></td><td>Server unavailable, data at risk</td><td>10 minutes</td><td>2 hours</td></tr>' +
    '<tr><td><span class="dot dot-yellow" style="--yellow:#f5c842">High</span></td><td>Performance degradation, partial outage</td><td>30 minutes</td><td>8 hours</td></tr>' +
    '<tr><td><span class="dot dot-gray">Normal</span></td><td>Configuration questions, billing</td><td>2 hours</td><td>24 hours</td></tr>' +
    '</tbody></table></div>' +
    '<h2>5. Compensation Process</h2>' +
    '<p>5.1. Compensation is credited to the account internal balance as a credit.</p>' +
    '<p>5.2. To receive compensation, submit a request via the <a href="contacts.html">support form</a> within 30 days of the incident, specifying the time range and problem description.</p>' +
    '<p>5.3. FastCloud reviews requests within 5 business days and notifies the decision by email.</p>' +
    '<p>5.4. The total compensation does not exceed 30% of the monthly payment for the affected plan.</p>' +
    '<h2>6. Monitoring and Transparency</h2>' +
    '<p>The current status of all systems is available on the status page in real time. Incident history is published and retained for at least 12 months.</p>' +
    '<h2>7. SLA Changes</h2>' +
    '<p>FastCloud may amend the SLA terms with at least 30 days notice to the Client. If the Client disagrees with the new terms, they may terminate the agreement with a refund of the remaining balance.</p>',
},

pt: {
  nav_overview:'Visão Geral', nav_servers:'Servidores', nav_create:'Criar',
  nav_ssh:'Chaves SSH', nav_billing:'Faturação', nav_profile:'Perfil',
  balance:'Saldo', topup_btn:'+ Recarregar', logout:'Sair',
  pub_pricing:'Preços', pub_locations:'Localizações', pub_contacts:'Contacto',
  pub_login:'Entrar', pub_register:'Criar Conta',
  page_dashboard:'Visão Geral', page_servers:'Servidores', page_ssh:'Chaves SSH',
  page_billing:'Faturação', page_profile:'Perfil',
  page_topup:'Recarregar Saldo', page_create:'Criar Servidor',
  page_deploying:'A Lançar Servidor', page_server_detail:'Gestão do Servidor',
  bc_servers:'Servidores', bc_billing:'Faturação',
  db_servers:'Servidores', db_cost:'Custo / mês', db_balance:'Saldo', db_uptime:'Uptime',
  db_my_servers:'Servidores', db_expenses:'Despesas · últimos 30 dias',
  db_create:'+ Criar Servidor', db_all:'todos os 7 servidores →', db_console:'consola',
  db_create_sm:'+ criar',
  sv_all:'Todos', sv_name:'Nome', sv_status:'Estado', sv_plan:'Plano',
  sv_dc:'DC', sv_ip:'IP', sv_manage:'Gerir', sv_create:'+ Criar',
  sd_console:'Consola', sd_overview:'Visão Geral', sd_network:'Rede',
  sd_reinstall:'Reinstalar SO', sd_resize:'Redimensionar',
  ssh_name:'Nome', ssh_fp:'Fingerprint', ssh_added:'Adicionado', ssh_del:'eliminar',
  ssh_add_title:'Adicionar Chave', ssh_howto:'Como obter uma chave',
  ssh_name_label:'Nome', ssh_key_label:'Chave Pública', ssh_add_btn:'Adicionar Chave',
  bl_cur_balance:'Saldo Actual', bl_monthly:'Gasto deste Mês', bl_method:'Método de Pagamento',
  bl_topup:'+ Recarregar', bl_promo:'Código Promo',
  bl_ops:'Transacções', bl_docs:'Documentos', bl_promos:'Códigos Promo',
  bl_date:'Data', bl_desc:'Descrição', bl_amount:'Valor', bl_balance:'Saldo',
  pr_personal:'Dados Pessoais', pr_name:'Nome', pr_email:'E-mail',
  pr_no_change:'não pode ser alterado', pr_save:'Guardar',
  pr_change_pass:'Alterar Palavra-passe', pr_cur_pass:'Palavra-passe Actual', pr_new_pass:'Nova Palavra-passe',
  pr_upd_pass:'Actualizar Palavra-passe', pr_danger:'Danger Zone',
  pr_del_warn:'A eliminação da conta é irreversível. Todos os servidores serão destruídos.',
  pr_del_btn:'Eliminar Conta',
  pr_account:'Conta', pr_reg:'Registado', pr_active:'activo',
  tu_amount:'Valor de Recarga', tu_custom_label:'Valor Personalizado',
  tu_method:'Método de Pagamento', tu_card:'Cartão Bancário', tu_usdt:'USDT (TRC-20)',
  tu_summary:'Total a Pagar', tu_credit_note:'será creditado no saldo',
  tu_cur_balance:'Saldo Actual', tu_topup_line:'Recarga', tu_after:'Ficará',
  tu_days_prefix:'suficiente para aprox. ~', tu_days_suffix:'dias',
  tu_pay:'Recarregar',
  tu_card_num:'Número do Cartão', tu_expiry:'Data de Validade', tu_cvv:'CVV / CVC', tu_holder:'Nome do Titular',
  dep_title:'A criar o seu servidor', dep_open:'Abrir servidor agora →',
  footer_product:'Produto', footer_legal:'Jurídico',
  footer_copy:'© 2026 FastCloud. Todos os direitos reservados.',
  footer_tagline:'VPS na Europa · NVMe · Suporte 24/7',
  footer_terms:'Termos de Serviço', footer_privacy:'Política de Privacidade',
  hero_title:'Os VPS Mais<br>Rápidos <span style="color:var(--accent)">da Europa</span>',
  hero_sub:'NVMe SSD, AMD EPYC, rede 10 Gbps. Implantação em 45 segundos. 4 centros de dados: FR · NL · DE · FI.',
  hero_cta:'Criar Servidor →', hero_cta2:'Ver Preços',
  stat_launch:'para implantar', stat_dc:'na Europa', stat_support:'suporte 24/7',
  feat1_title:'NVMe Gen4',
  feat1_desc:'Discos de nova geração. Velocidade de leitura até 7 GB/s — mais rápido que qualquer SSD clássico.',
  feat2_title:'Anti-DDoS 10 Gbps',
  feat2_desc:'Incluído em todos os planos sem custo extra. Filtragem ao nível da rede, sem impacto na latência.',
  feat3_title:'Apps 1-clique',
  feat3_desc:'WordPress, Docker, n8n, GitLab, WireGuard — implantados em 30 segundos sem configuração manual.',
  feat4_title:'API + CLI',
  feat4_desc:'API REST completa e provedor Terraform. Gerencie a infraestrutura como código.',
  plans_title:'Planos Populares', plans_all:'todos os planos →',
  plan_per_mo:'/mês', plan_pick:'Escolher', plan_popular:'★ mais popular',
  dc_title:'4 Centros de Dados · Rede 10 Gbps',
  cta_title:'Pronto para experimentar?',
  cta_sub:'€5 de crédito após confirmação do e-mail · Sem cartão · Ativação em 30 segundos',
  cta_btn:'Criar Conta →',
  pricing_sub:'Preço fixo · NVMe SSD · Anti-DDoS incluído · Backups 14 dias',
  pricing_all:'Todos', pricing_hourly:'Por hora', pricing_monthly:'Mensal',
  plan_ddos:'Anti-DDoS 10 Gbps', plan_backups:'Backups 14 dias', plan_support_txt:'Suporte 24/7',
  plan_traffic:'tráfego', plan_pick_arr:'Escolher →',
  plan_dedicated:'Dedicado',
  plan_dedicated_desc:'Precisa de mais? Vamos discutir uma configuração personalizada.',
  plan_dedicated_btn:'Contactar →',
  lg_welcome:'Bem-vindo de volta.',
  lg_welcome_sub:'Os seus servidores estão prontos — saldo, gráficos e consola esperam lá dentro.',
  lg_feat_deploy:'Implementação em 45 segundos',
  lg_feat_dc_login:'4 DCs na Europa',
  lg_feat_support:'Suporte 24/7',
  lg_form_title:'Entrar na conta',
  lg_password:'Palavra-passe',
  lg_forgot:'Esqueceu?',
  lg_submit:'Entrar →',
  lg_or:'ou',
  lg_no_acc_html:'Não tem conta? <a href="register.html" style="color:var(--accent)">Registar</a>',
  rg_title:'Os VPS Mais Rápidos da Europa.',
  rg_sub:'€5 de crédito após confirmação do e-mail. Sem cartão — experimente agora mesmo.',
  rg_feat_dc:'4 DCs: FRA · AMS · PAR · HEL',
  rg_feat_pay:'Pague com cartão ou USDT',
  rg_form_title:'Criar uma conta',
  rg_name:'Nome',
  rg_password:'Palavra-passe',
  rg_agree_html:'Concordo com os <a href="terms.html" style="color:var(--accent)">Termos</a> e a <a href="privacy.html" style="color:var(--accent)">Política de Privacidade</a>',
  rg_submit:'Criar Conta →',
  rg_has_acc_html:'Já tem conta? <a href="login.html" style="color:var(--accent)">Entrar</a>',
  rs_title:'Recuperação de Palavra-passe',
  rs_sub:'Introduza o seu e-mail — enviaremos uma ligação de redefinição.',
  rs_submit:'Enviar Ligação →',
  rs_back:'← Voltar ao Início de Sessão',
  loc_hero_title_html:'4 Centros de Dados<br>no <span style="color:var(--accent)">Coração da Europa</span>',
  loc_hero_sub:'NVMe Gen4 · rede 10 Gbps · Anti-DDoS incluído · preços iguais em todas as localizações',
  loc_status_ok:'● Todos os DCs operacionais',
  loc_online:'online',
  loc_network:'Rede',
  loc_storage:'Armazenamento',
  loc_uptime_label:'Uptime',
  loc_ping_title:'Ping para as principais cidades',
  loc_fra_country:'Alemanha · FRA',
  loc_ams_country:'Países Baixos · AMS',
  loc_par_country:'França · PAR',
  loc_hel_country:'Finlândia · HEL',
  loc_pick_fra:'Escolher Frankfurt →',
  loc_pick_ams:'Escolher Amsterdam →',
  loc_pick_par:'Escolher Paris →',
  loc_pick_hel:'Escolher Helsinki →',
  loc_feat1_title:'Preços Iguais',
  loc_feat1_desc:'O preço não depende da localização. Escolha pela latência, não pelo orçamento.',
  loc_feat2_title:'Migração entre DCs',
  loc_feat2_desc:'Mova um servidor para outra localização — via snapshot em minutos.',
  loc_feat3_title:'Conformidade GDPR',
  loc_feat3_desc:'Todos os centros de dados sob jurisdição da UE. Os dados nunca saem da Europa.',
  loc_feat4_title:'Peering em IX',
  loc_feat4_desc:'Peering directo com as maiores bolsas de internet europeias.',
  loc_cta_title:'Escolha uma localização e comece',
  loc_cta_sub:'€5 de crédito · Activação em 30 segundos · Sem verificação de passaporte',
  loc_cta_btn:'Criar Conta →',
  ct_title:'Contactos',
  ct_support:'Suporte 24/7',
  ct_sales:'Vendas',
  ct_legal_addr:'Endereço Legal',
  ct_form:'Formulário de Contacto',
  ct_name:'Nome',
  ct_message:'Mensagem',
  ct_placeholder:'Escreva a sua pergunta…',
  ct_submit:'Enviar →',
  ph_name_eg:'João Silva',
  ph_pass_min:'mín. 10 caracteres',
  tu_expiry_ph:'MM / AA',
  breadcrumb_home:'Início',
  sla_title:'Acordo de Nível de Serviço',
  legal_date:'Edição de 1 de maio de 2026',
  privacy_date_note:'Edição de 1 de maio de 2026 · Conformidade GDPR',
  sla_kpi1_label:'Disponibilidade Garantida', sla_kpi1_sub:'≤ 52 min de inactividade por ano',
  sla_kpi2_label:'Resposta de Suporte', sla_kpi2_val:'10 min', sla_kpi2_sub:'incidentes críticos',
  sla_kpi3_label:'Compensação', sla_kpi3_val:'até 30%', sla_kpi3_sub:'do pagamento mensal',
  terms_body:
    '<h2>1. Disposições Gerais</h2>' +
    '<p>Este documento constitui uma oferta pública da FastCloud (doravante "Prestador de Serviços") e contém todos os termos essenciais do contrato para serviços de servidor privado virtual (VPS/VDS).</p>' +
    '<p>A aceitação desta oferta efectua-se pelo registo de uma conta e/ou pelo pagamento de qualquer plano. Após a aceitação, o contrato considera-se celebrado nos termos desta oferta.</p>' +
    '<h2>2. Objecto do Contrato</h2>' +
    '<p>O Prestador de Serviços concede ao Cliente acesso a servidores virtuais (VPS) em servidores localizados em centros de dados europeus, nos termos do plano seleccionado pelo Cliente.</p>' +
    '<p>A lista de planos, as suas especificações técnicas e preços constam da página <a href="pricing.html">Preços</a>.</p>' +
    '<h2>3. Prestação de Serviços</h2>' +
    '<p>3.1. Os serviços são activados automaticamente no prazo de 30 segundos após o pagamento ser creditado na conta do Cliente.</p>' +
    '<p>3.2. O acesso ao servidor é fornecido via SSH e através da consola web no painel do cliente.</p>' +
    '<p>3.3. O Prestador de Serviços reserva-se o direito de suspender os serviços em caso de dívida pendente ou violação desta oferta.</p>' +
    '<h2>4. Preços e Pagamento</h2>' +
    '<p>4.1. O custo dos serviços corresponde ao plano seleccionado. <strong>O preço é fixado por todo o período do contrato</strong> e não pode ser alterado unilateralmente.</p>' +
    '<p>4.2. O pagamento é efectuado antecipadamente através do carregamento do saldo interno. São aceites cartões Visa/Mastercard, USDT (TRC-20) e outros métodos indicados na secção de faturação.</p>' +
    '<p>4.3. Quando o saldo chega a zero, o servidor entra no estado "congelado" e é eliminado após 7 (sete) dias.</p>' +
    '<h2>5. Garantias e Responsabilidade</h2>' +
    '<p>5.1. O Prestador de Serviços garante a disponibilidade da infra-estrutura de acordo com os termos do SLA (ver <a href="sla.html">Acordo de Nível de Serviço</a>).</p>' +
    '<p>5.2. O Prestador de Serviços não se responsabiliza pelo conteúdo dos dados armazenados nos servidores do Cliente.</p>' +
    '<p>5.3. A responsabilidade do Prestador de Serviços limita-se ao valor dos serviços pagos mas não prestados.</p>' +
    '<h2>6. Utilizações Proibidas</h2>' +
    '<p>É proibida a utilização de servidores para: envio de spam, organização de ataques DDoS, distribuição de software malicioso, armazenamento de conteúdo ilegal e quaisquer outras acções que violem a legislação aplicável.</p>' +
    '<p>Após detecção de violações, o Prestador de Serviços reserva-se o direito de bloquear imediatamente o servidor sem reembolso do período restante.</p>' +
    '<h2>7. Confidencialidade</h2>' +
    '<p>O tratamento de dados pessoais é efectuado em conformidade com a <a href="privacy.html">Política de Privacidade</a>.</p>' +
    '<h2>8. Vigência e Rescisão</h2>' +
    '<p>8.1. O contrato vigora por tempo indeterminado desde a data de aceitação até à eliminação da conta pelo Cliente ou rescisão por iniciativa do Prestador de Serviços.</p>' +
    '<p>8.2. O Cliente pode rescindir o contrato em qualquer momento, eliminando todos os servidores e a sua conta no painel do cliente. O saldo restante é reembolsado mediante pedido.</p>' +
    '<h2>9. Lei Aplicável</h2>' +
    '<p>Este contrato é regido pela legislação da jurisdição em que o Prestador de Serviços está registado. Os litígios são resolvidos por negociação e, se não for alcançado acordo, perante o tribunal competente.</p>' +
    '<h2>10. Dados da Empresa</h2>' +
    '<p>FastCloud OÜ · Número de registo: 12345678 · Morada: Tallinn, Estónia<br>E-mail: <a href="mailto:legal@fastcloud.eu">legal@fastcloud.eu</a></p>',
  privacy_body:
    '<h2>1. Quem Somos</h2>' +
    '<p>A FastCloud OÜ (doravante "nós", "a Empresa") é o responsável pelo tratamento dos dados que fornece ao utilizar o serviço fastcloud.eu.</p>' +
    '<h2>2. Dados que Recolhemos</h2>' +
    '<p><strong>Dados da conta:</strong> nome, endereço de e-mail, hash da palavra-passe.</p>' +
    '<p><strong>Dados de pagamento:</strong> últimos 4 dígitos do cartão, tipo de método de pagamento. Os dados completos do cartão não são armazenados — o processamento é efectuado por fornecedores certificados PCI DSS.</p>' +
    '<p><strong>Dados técnicos:</strong> endereço IP, tipo de browser, páginas visitadas, duração das sessões — para fins de segurança e melhoria do serviço.</p>' +
    '<p><strong>Dados dos servidores:</strong> configurações, nomes de servidores, registos de utilização de recursos.</p>' +
    '<h2>3. Como Utilizamos os Dados</h2>' +
    '<p>3.1. <strong>Prestação de serviços</strong> — activação de servidores, faturação, suporte técnico.</p>' +
    '<p>3.2. <strong>Segurança</strong> — detecção de fraude, protecção de conta, conformidade AML.</p>' +
    '<p>3.3. <strong>Comunicações</strong> — notificações sobre o estado do servidor, alertas técnicos, alterações importantes nos termos.</p>' +
    '<p>3.4. <strong>Melhoria do produto</strong> — análise agregada da utilização do serviço.</p>' +
    '<p><strong>Não vendemos</strong> dados pessoais a terceiros.</p>' +
    '<h2>4. Base Legal do Tratamento (RGPD)</h2>' +
    '<p>Execução do contrato (Art. 6(1)(b) RGPD) — base principal para o tratamento de dados de conta e faturação.<br>Interesse legítimo (Art. 6(1)(f) RGPD) — segurança e prevenção de fraude.<br>Consentimento (Art. 6(1)(a) RGPD) — comunicações de marketing (opcional, pode ser retirado).</p>' +
    '<h2>5. Conservação de Dados</h2>' +
    '<p>Os dados da conta são conservados durante o período de vigência do contrato + 3 anos após o encerramento da conta (para fins de contabilidade e conformidade legal).</p>' +
    '<p>Registos técnicos — 90 dias. Cópias de segurança dos servidores — 14 dias após eliminação.</p>' +
    '<h2>6. Os Seus Direitos (RGPD)</h2>' +
    '<p>Tem o direito, a qualquer momento, de:</p>' +
    '<ul><li>solicitar uma cópia dos seus dados (direito de acesso)</li><li>corrigir dados incorrectos (direito de rectificação)</li><li>eliminar a sua conta e dados (direito ao esquecimento)</li><li>limitar ou opor-se ao tratamento</li><li>receber dados em formato legível por máquina (portabilidade)</li></ul>' +
    '<p>Para exercer os seus direitos, contacte <a href="mailto:privacy@fastcloud.eu">privacy@fastcloud.eu</a>. Resposta no prazo de 30 dias.</p>' +
    '<h2>7. Cookies</h2>' +
    '<p>Utilizamos cookies essenciais para autenticação e sessões, bem como cookies analíticos (com o seu consentimento). A gestão de cookies está disponível nas definições do browser.</p>' +
    '<h2>8. Transferência de Dados</h2>' +
    '<p>Os dados são tratados em servidores situados na União Europeia. Quando os dados são transferidos para fora da UE, aplicam-se as cláusulas contratuais-tipo (CCT) aprovadas pela Comissão Europeia.</p>' +
    '<h2>9. Segurança</h2>' +
    '<p>Os dados são transmitidos via TLS 1.3. As palavras-passe são armazenadas como hashes bcrypt. O acesso dos colaboradores aos dados é restrito pelo princípio do menor privilégio.</p>' +
    '<h2>10. Contacto DPO</h2>' +
    '<p>Para questões de protecção de dados: <a href="mailto:privacy@fastcloud.eu">privacy@fastcloud.eu</a><br>FastCloud OÜ · Tallinn, Estónia</p>',
  sla_body:
    '<h2>1. Âmbito de Aplicação</h2>' +
    '<p>Este SLA define as garantias de disponibilidade da infra-estrutura da FastCloud e o procedimento de compensação em caso de incumprimento. Aplica-se a todos os planos activos.</p>' +
    '<h2>2. Garantia de Disponibilidade</h2>' +
    '<p>A FastCloud garante a disponibilidade dos servidores virtuais a <strong>99,99% por mês</strong>, o que corresponde a não mais de 4,3 minutos de inactividade planeada e não planeada por mês.</p>' +
    '<div style="background:var(--surface2);border:1px solid var(--border);border-radius:var(--r);overflow:hidden;margin:20px 0"><table class="tbl"><thead><tr><th>Nível de Disponibilidade</th><th>Inactividade máx. / mês</th><th>Compensação</th></tr></thead><tbody>' +
    '<tr><td style="color:var(--green);font-weight:600">99,99% e acima</td><td>≤ 4,3 min</td><td>— (normal)</td></tr>' +
    '<tr><td>99,95% — 99,99%</td><td>até 21,9 min</td><td>10% crédito</td></tr>' +
    '<tr><td>99,90% — 99,95%</td><td>até 43,8 min</td><td>15% crédito</td></tr>' +
    '<tr><td>99,00% — 99,90%</td><td>até 7,3 h</td><td>25% crédito</td></tr>' +
    '<tr><td style="color:var(--red)">Abaixo de 99,00%</td><td>mais de 7,3 h</td><td>30% crédito</td></tr>' +
    '</tbody></table></div>' +
    '<h2>3. O que Conta como Inactividade</h2>' +
    '<p>Inactividade é definida como indisponibilidade de rede do servidor (ICMP + porta TCP 22) por mais de 5 minutos consecutivos, confirmada pelo sistema de monitorização da FastCloud.</p>' +
    '<p><strong>Não conta como inactividade:</strong></p>' +
    '<ul><li>Manutenção programada com aviso prévio de 48 horas</li><li>Indisponibilidade causada por acções do Cliente (eliminação de regras de firewall, erros de configuração)</li><li>Ataques DDoS ao endereço IP do Cliente (quando a protecção activa está activada)</li><li>Circunstâncias de força maior</li></ul>' +
    '<h2>4. Níveis de Prioridade de Suporte</h2>' +
    '<div style="background:var(--surface2);border:1px solid var(--border);border-radius:var(--r);overflow:hidden;margin:20px 0"><table class="tbl"><thead><tr><th>Prioridade</th><th>Descrição</th><th>Primeira Resposta</th><th>Resolução</th></tr></thead><tbody>' +
    '<tr><td><span class="dot dot-red">Crítico</span></td><td>Servidor inacessível, dados em risco</td><td>10 minutos</td><td>2 horas</td></tr>' +
    '<tr><td><span class="dot dot-yellow" style="--yellow:#f5c842">Alto</span></td><td>Degradação de desempenho, falha parcial</td><td>30 minutos</td><td>8 horas</td></tr>' +
    '<tr><td><span class="dot dot-gray">Normal</span></td><td>Questões de configuração, faturação</td><td>2 horas</td><td>24 horas</td></tr>' +
    '</tbody></table></div>' +
    '<h2>5. Processo de Compensação</h2>' +
    '<p>5.1. A compensação é creditada no saldo interno da conta.</p>' +
    '<p>5.2. Para receber compensação, submeta um pedido através do <a href="contacts.html">formulário de suporte</a> no prazo de 30 dias após o incidente, indicando o intervalo de tempo e a descrição do problema.</p>' +
    '<p>5.3. A FastCloud analisa os pedidos no prazo de 5 dias úteis e notifica a decisão por e-mail.</p>' +
    '<p>5.4. A compensação total não excede 30% do pagamento mensal do plano afectado.</p>' +
    '<h2>6. Monitorização e Transparência</h2>' +
    '<p>O estado actual de todos os sistemas está disponível na página de estado em tempo real. O histórico de incidentes é publicado e conservado durante pelo menos 12 meses.</p>' +
    '<h2>7. Alterações ao SLA</h2>' +
    '<p>A FastCloud pode alterar os termos do SLA com um aviso prévio mínimo de 30 dias ao Cliente. Se o Cliente discordar dos novos termos, pode rescindir o contrato com reembolso do saldo restante.</p>',
}

};

/* ═══════════════════════════════════════════════════════════════
   HELPERS
═══════════════════════════════════════════════════════════════ */
function q(sel)  { return document.querySelector(sel); }
function qq(sel) { return document.querySelectorAll(sel); }

/* Set textContent, skip if element missing */
function set(sel, text) { var el = q(sel); if (el) el.textContent = text; }

/* Set only text nodes inside el (preserves child elements like SVG) */
function setTextNode(el, text) {
  if (!el) return;
  var replaced = false;
  el.childNodes.forEach(function(n) {
    if (n.nodeType === 3 && n.textContent.trim() && !replaced) {
      n.textContent = text; replaced = true;
    }
  });
  if (!replaced) el.appendChild(document.createTextNode(text));
}

/* Replace nav-item text while keeping the SVG icon intact */
function setNavText(href, text) {
  var el = q('.nav-item[href="' + href + '"]');
  if (!el) return;
  el.childNodes.forEach(function(n) {
    if (n.nodeType === 3 && n.textContent.trim()) n.textContent = text;
  });
}

/* ═══════════════════════════════════════════════════════════════
   PAGE-SPECIFIC HANDLERS
═══════════════════════════════════════════════════════════════ */
var handlers = {

'dashboard.html': function(tr) {
  /* KPI labels */
  qq('.kpi-label').forEach(function(el, i) {
    var labels = [tr.db_servers, tr.db_cost, tr.db_balance, tr.db_uptime];
    if (labels[i]) el.textContent = labels[i];
  });
  /* Section titles */
  qq('.section-title').forEach(function(el, i) {
    if (i === 0) el.textContent = tr.db_my_servers;
    if (i === 1) el.textContent = tr.db_expenses;
  });
  /* "+ Создать сервер" top button */
  qq('a.btn-primary[href="create.html"]').forEach(function(btn) {
    btn.textContent = tr.db_create;
  });
  /* small "+ создать" in card */
  qq('.card .btn-primary.btn-sm').forEach(function(btn) {
    btn.textContent = tr.db_create_sm;
  });
  /* table headers */
  qq('.tbl thead th').forEach(function(th, i) {
    var cols = [tr.sv_name, tr.sv_status, tr.sv_plan, tr.sv_dc, tr.sv_ip, ''];
    if (cols[i] !== undefined) th.textContent = cols[i];
  });
  /* console buttons */
  qq('a.btn-ghost.btn-sm[href="server-detail.html"]').forEach(function(btn) {
    btn.textContent = tr.db_console;
  });
  /* "все 7 серверов →" link */
  var allLink = q('a[href="servers.html"][style*="color:var(--accent)"]');
  if (allLink) allLink.textContent = tr.db_all;
},

'servers.html': function(tr) {
  /* "Все · N" filter chip — preserve the count */
  var allChip = q('.chip[data-filter="all"]');
  if (allChip) {
    var parts = allChip.textContent.split('·');
    allChip.textContent = parts[1] ? tr.sv_all + ' · ' + parts[1].trim() : tr.sv_all;
  }
  /* table headers */
  qq('.tbl thead th').forEach(function(th, i) {
    var cols = [tr.sv_name, tr.sv_status, tr.sv_plan, tr.sv_dc, tr.sv_ip, tr.sv_manage];
    if (cols[i] !== undefined) th.textContent = cols[i];
  });
  /* create button in header row */
  var hdr = q('.page-title') || q('.flex.items-center.mb-6');
  if (hdr) {
    var createBtn = (hdr.parentElement || hdr.closest('.cab-content')).querySelector('.btn-primary:not(.btn-sm)');
    if (createBtn) createBtn.textContent = tr.sv_create;
  }
},

'server-detail.html': function(tr) {
  var tabMap = {
    console: tr.sd_console, overview: tr.sd_overview,
    network: tr.sd_network, reinstall: tr.sd_reinstall, resize: tr.sd_resize
  };
  qq('.tab[data-tab]').forEach(function(tab) {
    if (tabMap[tab.dataset.tab]) tab.textContent = tabMap[tab.dataset.tab];
  });
},

'ssh-keys.html': function(tr) {
  /* table headers */
  qq('.tbl thead th').forEach(function(th, i) {
    var cols = [tr.ssh_name, tr.ssh_fp, tr.ssh_added, ''];
    if (cols[i] !== undefined) th.textContent = cols[i];
  });
  /* delete buttons */
  qq('.btn-danger.btn-sm').forEach(function(btn) { btn.textContent = tr.ssh_del; });
  /* section titles */
  qq('.section-title').forEach(function(el, i) {
    if (i === 0) el.textContent = tr.ssh_add_title;
    if (i === 1) el.textContent = tr.ssh_howto;
  });
  /* form labels */
  qq('label').forEach(function(el, i) {
    if (i === 0) el.textContent = tr.ssh_name_label;
    if (i === 1) el.textContent = tr.ssh_key_label;
  });
  /* add button */
  var addBtn = q('button.btn-primary');
  if (addBtn) addBtn.textContent = tr.ssh_add_btn;
},

'billing.html': function(tr) {
  /* KPI labels */
  qq('.kpi-label').forEach(function(el, i) {
    var labels = [tr.bl_cur_balance, tr.bl_monthly, tr.bl_method];
    if (labels[i]) el.textContent = labels[i];
  });
  /* buttons */
  var topupBtn = q('a.btn-primary[href="billing-topup.html"]');
  if (topupBtn) topupBtn.textContent = tr.bl_topup;
  qq('button.btn-ghost').forEach(function(btn) { btn.textContent = tr.bl_promo; });
  /* tabs */
  qq('.tabs .tab').forEach(function(el, i) {
    var tabs = [tr.bl_ops, tr.bl_docs, tr.bl_promos];
    if (tabs[i]) el.textContent = tabs[i];
  });
  /* table headers */
  qq('.tbl thead th').forEach(function(th, i) {
    var cols = [tr.bl_date, tr.bl_desc, tr.bl_amount, tr.bl_balance];
    if (cols[i] !== undefined) th.textContent = cols[i];
  });
},

'profile.html': function(tr) {
  /* section titles */
  qq('.section-title').forEach(function(el, i) {
    var titles = [tr.pr_personal, tr.pr_change_pass, tr.pr_danger, tr.pr_account];
    if (titles[i]) el.textContent = titles[i];
  });
  /* labels */
  qq('label').forEach(function(el, i) {
    var labels = [tr.pr_name, tr.pr_email, tr.pr_cur_pass, tr.pr_new_pass];
    if (labels[i]) el.textContent = labels[i];
  });
  /* "нельзя изменить" inline hint */
  var noChange = q('span[style*="pointer-events:none"]');
  if (noChange) noChange.textContent = tr.pr_no_change;
  /* Save button */
  var saveBtn = q('.btn-primary[style*="align-self"]');
  if (saveBtn) saveBtn.textContent = tr.pr_save;
  /* Update password button */
  var updBtn = q('.btn-ghost[style*="align-self"]');
  if (updBtn) updBtn.textContent = tr.pr_upd_pass;
  /* Delete button + warning */
  var delBtn = q('.btn-danger.btn-sm');
  if (delBtn) delBtn.textContent = tr.pr_del_btn;
  var delWarn = q('.card[style*="--red"] .text-sm');
  if (delWarn) delWarn.textContent = tr.pr_del_warn;
  /* Active status dot */
  var dot = q('.dot-green');
  if (dot) dot.textContent = tr.pr_active;
},

'billing-topup.html': function(tr) {
  /* section titles — left column (0,1) + summary (2) */
  qq('.section-title').forEach(function(el, i) {
    var titles = [tr.tu_amount, tr.tu_method, tr.tu_summary];
    if (titles[i]) el.textContent = titles[i];
  });
  /* payment method tabs (have SVG inside — preserve it) */
  var cardTab = q('.tab[data-pay="card"]');
  var usdtTab = q('.tab[data-pay="usdt"]');
  if (cardTab) setTextNode(cardTab, ' ' + tr.tu_card);
  if (usdtTab) setTextNode(usdtTab, ' ' + tr.tu_usdt);
  /* pay button text node (has SVG icon) */
  var payBtn = q('.create-summary a.btn-primary');
  if (payBtn) setTextNode(payBtn, ' ' + tr.tu_pay);
  /* days prefix/suffix around the #days-left span */
  var daysEl = q('#days-left');
  if (daysEl && daysEl.parentElement) {
    var nodes = Array.from(daysEl.parentElement.childNodes).filter(function(n) { return n.nodeType === 3; });
    if (nodes[0]) nodes[0].textContent = tr.tu_days_prefix;
    if (nodes[1]) nodes[1].textContent = ' ' + tr.tu_days_suffix;
  }
  /* card form placeholders */
  var expiryInp = q('input[placeholder="ММ / ГГ"], input[placeholder="MM / YY"], input[placeholder="MM / AA"]');
  if (expiryInp) expiryInp.placeholder = tr.tu_expiry_ph;
},

'create-deploying.html': function(tr) {
  var titleEl = q('[style*="font-size:24px"][style*="font-weight:800"]');
  if (titleEl) titleEl.textContent = tr.dep_title;
  var openBtn = q('a.btn-ghost[href="server-detail.html"]');
  if (openBtn) openBtn.textContent = tr.dep_open;
},

/* ── Marketing pages ── */

'index.html': function(tr) {
  /* hero */
  var heroTitle = q('.hero-title');
  if (heroTitle) heroTitle.innerHTML = tr.hero_title;
  set('.hero-sub', tr.hero_sub);
  var hero = q('.hero');
  if (hero) {
    var heroBtns = hero.querySelectorAll('a.btn');
    if (heroBtns[0]) heroBtns[0].textContent = tr.hero_cta;
    if (heroBtns[1]) heroBtns[1].textContent = tr.hero_cta2;
  }
  /* stats (skip SLA — it's a metric) */
  qq('.stat-label').forEach(function(el, i) {
    var labels = ['SLA', tr.stat_launch, tr.stat_dc, tr.stat_support];
    if (labels[i]) el.textContent = labels[i];
  });
  /* feature cards */
  qq('.feat-title').forEach(function(el, i) {
    var titles = [tr.feat1_title, tr.feat2_title, tr.feat3_title, tr.feat4_title];
    if (titles[i]) el.textContent = titles[i];
  });
  qq('.feat-desc').forEach(function(el, i) {
    var descs = [tr.feat1_desc, tr.feat2_desc, tr.feat3_desc, tr.feat4_desc];
    if (descs[i]) el.textContent = descs[i];
  });
  /* popular plans section */
  var sectionTitles = qq('.section-title');
  if (sectionTitles[0]) sectionTitles[0].textContent = tr.plans_title;
  set('a[href="pricing.html"][style*="color:var(--accent)"]', tr.plans_all);
  qq('.plan-price sub').forEach(function(el) { el.textContent = tr.plan_per_mo; });
  qq('.plan-card a[href="register.html"]').forEach(function(btn) { btn.textContent = tr.plan_pick; });
  var popChip = q('.chip.green');
  if (popChip) popChip.textContent = tr.plan_popular;
  /* DC section */
  if (sectionTitles[1]) sectionTitles[1].textContent = tr.dc_title;
  /* CTA block */
  set('.cta-title', tr.cta_title);
  set('.cta-sub', tr.cta_sub);
  var ctaBtn = q('.cta-block a.btn');
  if (ctaBtn) ctaBtn.textContent = tr.cta_btn;
},

'pricing.html': function(tr) {
  /* page header */
  var h1 = q('h1');
  if (h1) {
    h1.textContent = tr.pub_pricing;
    if (h1.nextElementSibling) h1.nextElementSibling.textContent = tr.pricing_sub;
  }
  /* filter chips */
  var chips = qq('.flex.items-center.gap-2.mb-6 .chip');
  if (chips[0]) chips[0].textContent = tr.pricing_all;
  if (chips[1]) chips[1].textContent = tr.pricing_hourly;
  if (chips[2]) chips[2].textContent = tr.pricing_monthly;
  /* plan prices /мес */
  qq('.plan-price sub').forEach(function(el) { el.textContent = tr.plan_per_mo; });
  /* plan feature checks */
  qq('.plan-check span').forEach(function(el) {
    var t = el.textContent.trim();
    if (t.indexOf('Anti-DDoS') !== -1) el.textContent = tr.plan_ddos;
    else if (t.indexOf('14') !== -1 || t.indexOf('Бэкап') !== -1 || t.indexOf('Backup') !== -1 || t.indexOf('dias') !== -1) el.textContent = tr.plan_backups;
    else if (t.indexOf('24') !== -1) el.textContent = tr.plan_support_txt;
  });
  /* "★ выбор" chip */
  var popChip = q('.chip.green');
  if (popChip) popChip.textContent = tr.plan_popular;
  /* "Выбрать →" buttons */
  qq('.plan-card a[href="register.html"]').forEach(function(btn) { btn.textContent = tr.plan_pick_arr; });
  /* dedicated card */
  var dedCard = q('.plan-card[style*="dashed"]');
  if (dedCard) {
    var dedTitle = dedCard.querySelector('[style*="font-weight:700"]');
    if (dedTitle) dedTitle.textContent = tr.plan_dedicated;
    var dedDesc = dedCard.querySelector('.text-sm');
    if (dedDesc) dedDesc.textContent = tr.plan_dedicated_desc;
    var dedBtn = dedCard.querySelector('.btn');
    if (dedBtn) dedBtn.textContent = tr.plan_dedicated_btn;
  }
},

'login.html': function(tr) {
  var left = q('.auth-left');
  if (left) {
    var h1 = left.querySelector('h1');
    if (h1) h1.textContent = tr.lg_welcome;
    var p = left.querySelector('p');
    if (p) p.textContent = tr.lg_welcome_sub;
    var feats = left.querySelectorAll('.auth-feat');
    if (feats[1]) feats[1].textContent = tr.lg_feat_deploy;
    if (feats[2]) feats[2].textContent = tr.lg_feat_dc_login;
    if (feats[3]) feats[3].textContent = tr.lg_feat_support;
  }
  set('h2', tr.lg_form_title);
  /* labels: 0=E-mail (skip), 1=Пароль */
  var labels = qq('label');
  if (labels[1]) labels[1].textContent = tr.lg_password;
  /* forgot link */
  var forgotLink = q('a[href="reset.html"]');
  if (forgotLink) forgotLink.textContent = tr.lg_forgot;
  /* sign-in button */
  var submitBtn = q('a.btn-primary');
  if (submitBtn) submitBtn.textContent = tr.lg_submit;
  /* "или" separator */
  var orEl = q('.flex.items-center.gap-2 .text-sm');
  if (orEl) orEl.textContent = tr.lg_or;
  /* "Нет аккаунта?" hint */
  var noAccEl = q('[style*="text-align:center"]');
  if (noAccEl) noAccEl.innerHTML = tr.lg_no_acc_html;
},

'register.html': function(tr) {
  var left = q('.auth-left');
  if (left) {
    var h1 = left.querySelector('h1');
    if (h1) h1.textContent = tr.rg_title;
    var p = left.querySelector('p');
    if (p) p.textContent = tr.rg_sub;
    var feats = left.querySelectorAll('.auth-feat');
    if (feats[1]) feats[1].textContent = tr.lg_feat_deploy;
    if (feats[2]) feats[2].textContent = tr.rg_feat_dc;
    if (feats[3]) feats[3].textContent = tr.rg_feat_pay;
  }
  set('h2', tr.rg_form_title);
  /* labels: 0=Имя, 1=E-mail (skip), 2=Пароль, 3=agree (innerHTML) */
  var labels = qq('label');
  if (labels[0]) labels[0].textContent = tr.rg_name;
  if (labels[2]) labels[2].textContent = tr.rg_password;
  if (labels[3]) labels[3].innerHTML = tr.rg_agree_html;
  /* input placeholders */
  var nameInp = q('input[type="text"]');
  if (nameInp) nameInp.placeholder = tr.ph_name_eg;
  var passInp = q('input[type="password"]');
  if (passInp) passInp.placeholder = tr.ph_pass_min;
  /* register button */
  var submitBtn = q('a.btn-primary');
  if (submitBtn) submitBtn.textContent = tr.rg_submit;
  /* "или" separator */
  var orEl = q('.flex.items-center.gap-2 .text-sm');
  if (orEl) orEl.textContent = tr.lg_or;
  /* "Уже есть аккаунт?" hint */
  var hasAccEl = q('[style*="text-align:center"]');
  if (hasAccEl) hasAccEl.innerHTML = tr.rg_has_acc_html;
},

'reset.html': function(tr) {
  var h2 = q('h2');
  if (h2) h2.textContent = tr.rs_title;
  var sub = q('.card .text-sm');
  if (sub) sub.textContent = tr.rs_sub;
  var submitBtn = q('button.btn-primary');
  if (submitBtn) submitBtn.textContent = tr.rs_submit;
  var backLink = q('a[href="login.html"]');
  if (backLink) backLink.textContent = tr.rs_back;
},

'locations.html': function(tr) {
  /* hero */
  var h1 = q('h1');
  if (h1) {
    h1.innerHTML = tr.loc_hero_title_html;
    if (h1.nextElementSibling) h1.nextElementSibling.textContent = tr.loc_hero_sub;
  }
  /* status chip */
  var statusChip = q('.chip.green');
  if (statusChip) statusChip.textContent = tr.loc_status_ok;
  /* DC cards */
  var dcData = [
    { country: tr.loc_fra_country, btn: tr.loc_pick_fra },
    { country: tr.loc_ams_country, btn: tr.loc_pick_ams },
    { country: tr.loc_par_country, btn: tr.loc_pick_par },
    { country: tr.loc_hel_country, btn: tr.loc_pick_hel }
  ];
  var specLabels = [tr.loc_network, tr.loc_storage, 'Anti-DDoS', tr.loc_uptime_label];
  qq('.grid-3 .card').forEach(function(card, i) {
    if (!dcData[i]) return;
    var ctry = card.querySelector('.flex.items-center.gap-3 .text-sm');
    if (ctry) ctry.textContent = dcData[i].country;
    var dot = card.querySelector('.dot-green');
    if (dot) dot.textContent = tr.loc_online;
    card.querySelectorAll('.text-xs').forEach(function(el, j) {
      if (specLabels[j]) el.textContent = specLabels[j];
    });
    var pingTitle = card.querySelector('.section-title');
    if (pingTitle) pingTitle.textContent = tr.loc_ping_title;
    var btn = card.querySelector('a.btn-ghost');
    if (btn) btn.textContent = dcData[i].btn;
  });
  /* feature cards */
  var fTitles = [tr.loc_feat1_title, tr.loc_feat2_title, tr.loc_feat3_title, tr.loc_feat4_title];
  var fDescs  = [tr.loc_feat1_desc,  tr.loc_feat2_desc,  tr.loc_feat3_desc,  tr.loc_feat4_desc];
  qq('.feat-title').forEach(function(el, i) { if (fTitles[i]) el.textContent = fTitles[i]; });
  qq('.feat-desc').forEach(function(el, i)  { if (fDescs[i])  el.textContent = fDescs[i];  });
  /* CTA */
  set('.cta-title', tr.loc_cta_title);
  set('.cta-sub',   tr.loc_cta_sub);
  var ctaBtn = q('.cta-block a.btn');
  if (ctaBtn) ctaBtn.textContent = tr.loc_cta_btn;
},

'terms.html': function(tr) {
  var h1 = q('h1');
  if (h1) {
    h1.textContent = tr.footer_terms;
    if (h1.nextElementSibling) h1.nextElementSibling.textContent = tr.legal_date;
  }
  var bcHome = q('a[href="index.html"][style*="color:var(--text3)"]');
  if (bcHome) bcHome.textContent = tr.breadcrumb_home;
  var bcCur = q('.flex.items-center.gap-2.mb-4 span[style*="color:var(--text2)"]');
  if (bcCur) bcCur.textContent = tr.footer_terms;
  var body = q('.legal-body');
  if (body) body.innerHTML = tr.terms_body;
  set('a.btn-ghost[href="privacy.html"]', tr.footer_privacy);
},

'privacy.html': function(tr) {
  var h1 = q('h1');
  if (h1) {
    h1.textContent = tr.footer_privacy;
    if (h1.nextElementSibling) h1.nextElementSibling.textContent = tr.privacy_date_note;
  }
  var bcHome = q('a[href="index.html"][style*="color:var(--text3)"]');
  if (bcHome) bcHome.textContent = tr.breadcrumb_home;
  var bcCur = q('.flex.items-center.gap-2.mb-4 span[style*="color:var(--text2)"]');
  if (bcCur) bcCur.textContent = tr.footer_privacy;
  var body = q('.legal-body');
  if (body) body.innerHTML = tr.privacy_body;
  set('a.btn-ghost[href="terms.html"]', tr.footer_terms);
},

'sla.html': function(tr) {
  var h1 = q('h1');
  if (h1) {
    h1.textContent = tr.sla_title;
    if (h1.nextElementSibling) h1.nextElementSibling.textContent = tr.legal_date;
  }
  var bcHome = q('a[href="index.html"][style*="color:var(--text3)"]');
  if (bcHome) bcHome.textContent = tr.breadcrumb_home;
  var bcCur = q('.flex.items-center.gap-2.mb-4 span[style*="color:var(--text2)"]');
  if (bcCur) bcCur.textContent = tr.sla_title;
  /* KPI cards */
  qq('.kpi-label').forEach(function(el, i) {
    var labels = [tr.sla_kpi1_label, tr.sla_kpi2_label, tr.sla_kpi3_label];
    if (labels[i]) el.textContent = labels[i];
  });
  qq('.kpi-sub').forEach(function(el, i) {
    var subs = [tr.sla_kpi1_sub, tr.sla_kpi2_sub, tr.sla_kpi3_sub];
    if (subs[i]) el.textContent = subs[i];
  });
  qq('.kpi-value').forEach(function(el, i) {
    if (i === 1) el.textContent = tr.sla_kpi2_val;
    if (i === 2) el.textContent = tr.sla_kpi3_val;
  });
  var body = q('.legal-body');
  if (body) body.innerHTML = tr.sla_body;
  set('a.btn-ghost[href="terms.html"]', tr.footer_terms);
  set('a.btn-ghost[href="privacy.html"]', tr.footer_privacy);
},

'contacts.html': function(tr) {
  set('h1', tr.ct_title);
  qq('.section-title').forEach(function(el, i) {
    var titles = [tr.ct_support, tr.ct_sales, tr.ct_legal_addr, tr.ct_form];
    if (titles[i]) el.textContent = titles[i];
  });
  /* labels: 0=Имя, 1=E-mail (skip), 2=Сообщение */
  qq('label').forEach(function(el, i) {
    var labels = [tr.ct_name, '', tr.ct_message];
    if (labels[i]) el.textContent = labels[i];
  });
  /* input placeholders */
  var nameInp = q('input[type="text"]');
  if (nameInp) nameInp.placeholder = tr.ph_name_eg;
  var textarea = q('textarea.inp');
  if (textarea) textarea.placeholder = tr.ct_placeholder;
  var submitBtn = q('button.btn-primary');
  if (submitBtn) submitBtn.textContent = tr.ct_submit;
},

};

/* ═══════════════════════════════════════════════════════════════
   APPLY LANGUAGE
═══════════════════════════════════════════════════════════════ */
function apply(lang) {
  var tr = T[lang] || T.ru;

  /* ── sidebar nav ── */
  setNavText('dashboard.html', tr.nav_overview);
  setNavText('servers.html',   tr.nav_servers);
  setNavText('create.html',    tr.nav_create);
  setNavText('ssh-keys.html',  tr.nav_ssh);
  setNavText('billing.html',   tr.nav_billing);
  setNavText('profile.html',   tr.nav_profile);

  /* ── sidebar balance widget ── */
  var balLabel = q('.sidebar-balance .text-sm');
  if (balLabel) balLabel.textContent = tr.balance;
  var topupSideBtn = q('.sidebar-balance .btn');
  if (topupSideBtn) topupSideBtn.textContent = tr.topup_btn;

  /* ── topbar logout tooltip ── */
  var logoutBtn = q('.topbar-logout');
  if (logoutBtn) logoutBtn.title = tr.logout;

  /* ── public marketing nav ── */
  set('a.mkt-nav-link[href="pricing.html"]',   tr.pub_pricing);
  set('a.mkt-nav-link[href="locations.html"]', tr.pub_locations);
  set('a.mkt-nav-link[href="contacts.html"]',  tr.pub_contacts);
  set('.mkt-nav a[href="login.html"]',          tr.pub_login);
  set('.mkt-nav a[href="register.html"]',       tr.pub_register);

  /* ── public marketing footer (shared across all mkt pages) ── */
  qq('.mkt-footer-label').forEach(function(el, i) {
    if (i === 0) el.textContent = tr.footer_product;
    if (i === 1) el.textContent = tr.footer_legal;
  });
  var footerCopy = q('.mkt-footer-copy');
  if (footerCopy) footerCopy.textContent = tr.footer_copy;
  var footerTagline = q('.mkt-footer-inner .text-sm[style*="color:var(--text3)"]');
  if (footerTagline) footerTagline.textContent = tr.footer_tagline;
  set('.mkt-footer-col a[href="pricing.html"]',  tr.pub_pricing);
  set('.mkt-footer-col a[href="contacts.html"]', tr.pub_contacts);
  set('.mkt-footer-col a[href="terms.html"]',    tr.footer_terms);
  set('.mkt-footer-col a[href="privacy.html"]',  tr.footer_privacy);

  /* ── page title + topbar breadcrumb (by pathname) ── */
  var page = (location.pathname.split('/').pop() || 'index.html').split('?')[0];
  var titleMap = {
    'index.html':           '',
    'pricing.html':         '',
    'locations.html':       '',
    'contacts.html':        '',
    'dashboard.html':       tr.page_dashboard,
    'servers.html':         tr.page_servers,
    'server-detail.html':   tr.page_server_detail,
    'ssh-keys.html':        tr.page_ssh,
    'billing.html':         tr.page_billing,
    'profile.html':         tr.page_profile,
    'billing-topup.html':   tr.page_topup,
    'create.html':          tr.page_create,
    'create-step2.html':    tr.page_create,
    'create-step3.html':    tr.page_create,
    'create-step4.html':    tr.page_create,
    'create-step5.html':    tr.page_create,
    'create-deploying.html':tr.page_deploying,
  };
  var pageTitle = titleMap[page];
  if (pageTitle) {
    var ptEl = q('.page-title');
    if (ptEl) ptEl.textContent = pageTitle;
    /* breadcrumb: deepest span with color:var(--text) */
    var bcCurrent = q('.cab-topbar .breadcrumb span[style*="color:var(--text)"]');
    if (bcCurrent) bcCurrent.textContent = pageTitle;
  }

  /* ── breadcrumb parent link ── */
  var bcParentMap = {
    'server-detail.html':   tr.bc_servers,
    'create-deploying.html':tr.bc_servers,
    'billing-topup.html':   tr.bc_billing,
    'create-step2.html':    tr.page_create,
    'create-step3.html':    tr.page_create,
    'create-step4.html':    tr.page_create,
    'create-step5.html':    tr.page_create,
  };
  if (bcParentMap[page]) {
    var bcParent = q('.cab-topbar a[style*="color:var(--text3)"]');
    if (bcParent) bcParent.textContent = bcParentMap[page];
  }

  /* ── data-i18n elements (static labels scattered across pages) ── */
  qq('[data-i18n]').forEach(function(el) {
    var key = el.dataset.i18n;
    if (tr[key] !== undefined) el.textContent = tr[key];
  });

  /* ── per-page handler ── */
  if (handlers[page]) handlers[page](tr);

  /* ── switcher active state ── */
  qq('.lang-btn').forEach(function(btn) {
    btn.classList.toggle('on', btn.dataset.lang === lang);
  });

  /* ── persist ── */
  try { localStorage.setItem('fc_lang', lang); } catch(e) {}
  document.documentElement.lang = lang;
}

/* ═══════════════════════════════════════════════════════════════
   INIT
═══════════════════════════════════════════════════════════════ */
function init() {
  var saved;
  try { saved = localStorage.getItem('fc_lang'); } catch(e) {}
  apply(saved || 'ru');
  qq('.lang-btn').forEach(function(btn) {
    btn.addEventListener('click', function() { apply(btn.dataset.lang); });
  });
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', init);
} else {
  init();
}

})();
