<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Настройки',
    'settings_save' => 'Сохранить настройки',
    'settings_save_success' => 'Настройки сохранены',

    // App Settings
    'app_customization' => 'Настройки',
    'app_features_security' => 'Функции & Безопасность',
    'app_name' => 'Имя приложения',
    'app_name_desc' => 'Имя отображается в заголовке email отправленных системой.',
    'app_name_header' => 'Отображать имя приложения в заголовке',
    'app_public_access' => 'Публичный доступ',
    'app_public_access_desc' => 'Включение этой опции позволит неавторизованным посетителям получить доступ к содержимому вашего BookStack.',
    'app_public_access_desc_guest' => 'Публичный доступ контролируется через настройки пользователя "Guest"',
    'app_public_access_toggle' => 'Разрешить публичный доступ',
    'app_public_viewing' => 'Разрешить публичный просмотр?',
    'app_secure_images' => 'Загрузка изображений с высоким уровнем безопасности.',
    'app_secure_images_toggle' => 'Включить загрузку изображений с высоким уровнем безопасности',
    'app_secure_images_desc' => 'Для высокой производительности все изображения являются общедоступными. Этот параметр добавляет случайную строку перед URL изображения. Убедитесь, что индексация каталогов отключена, для предотвращения легкого доступа.',
    'app_editor' => 'Редактор страницы',
    'app_editor_desc' => 'Выберите, какой редактор будет использоваться всеми пользователями для редактирования страниц.',
    'app_custom_html' => 'Пользовательский контент заголовка HTML',
    'app_custom_html_desc' => 'Любой контент, добавленный здесь, будет вставлен в нижнюю часть раздела <head> каждой страницы. Это удобно для переопределения стилей или добавления кода аналитики.',
    'app_logo' => 'Лого приложения',
    'app_logo_desc' => 'Это изображение должно быть 43px в высоту. <br>Большое изображение будет уменьшено.',
    'app_primary_color' => 'Основной цвет приложения',
    'app_primary_color_desc' => 'Значение должно быть указано в hex-формате. <br>Оставьте пустым чтобы использовать цвет по умолчанию.',
    'app_homepage' => 'Стартовая страница приложения',
    'app_homepage_desc' => 'Выберите страницу, которая будет отображаться на главной странице вместо стандартной. Права на страницы игнорируются для выбранных страниц.',
    'app_homepage_select' => 'Выберите страницу',
    'app_disable_comments' => 'Отключение комментов',
    'app_disable_comments_toggle' => 'Отключить комментарии',
    'app_disable_comments_desc' => 'Отключение комментов на всех страницах. Существующие комментарии отображаться не будут.',

    // Registration Settings
    'reg_settings' => 'Настройки регистрации',
    'reg_enable' => 'Разрешить регистрацияю',
    'reg_enable_toggle' => 'Разрешить регистрацию',
    'reg_enable_desc' => 'Если регистрация разрешена, пользователь сможет зарегистрироваться в системе самомтоятельно. При регистрации назначается роль пользователя по умолчанию',
    'reg_default_role' => 'Роль пользователя по умолчанию после регистрации',
    'reg_email_confirmation' => 'Подтверждение электонной почты',
    'reg_email_confirmation_toggle' => 'Требовать подтверждение по электронной почте',
    'reg_confirm_email_desc' => 'Если используется ограничение по домену, подтверждение будет обязательно, а этот пункт проигнорирован.',
    'reg_confirm_restrict_domain' => 'Ограничить регистрацию по домену',
    'reg_confirm_restrict_domain_desc' => 'Введите список доменов почты через запятую, для которых разрешена регистрация. Пользователям будет отправлено письмо для подтверждения адреса перед входом в приложение. <br> Обратите внимание, что пользователи смогут изменить свои адреса уже после регистрации.',
    'reg_confirm_restrict_domain_placeholder' => 'Без ограничений',

    // Maintenance settings
    'maint' => 'Обслуживание',
    'maint_image_cleanup' => 'Очистка изображений',
    'maint_image_cleanup_desc' => 'Сканирует содержимое страниц и предыдущих версий и определяет изображения, которые не используются. Убедитесь, что у вас есть резервная копия базы данных и папки изображений перед запуском этой функции.',
    'maint_image_cleanup_ignore_revisions' => 'Пропускать изображения в версиях',
    'maint_image_cleanup_run' => 'Выполнить очистку',
    'maint_image_cleanup_warning' => 'Найдено :count возможно бесполезных изображений. Вы уверены, что хотите удалить эти изображения?',
    'maint_image_cleanup_success' => ':count возможно бесполезных изображений было найдено и удалено!',
    'maint_image_cleanup_nothing_found' => 'Не найдено ни одного бесполезного изображения!',

    // Role Settings
    'roles' => 'Роли',
    'role_user_roles' => 'Роли пользователя',
    'role_create' => 'Добавить роль',
    'role_create_success' => 'Роль упешно добавлена',
    'role_delete' => 'Удалить роль',
    'role_delete_confirm' => 'Это удалит роль с именем \':roleName\'.',
    'role_delete_users_assigned' => 'Эта роль назначена :userCount пользователям. Если вы хотите перенести их из этой роли, выберите новую роль ниже.',
    'role_delete_no_migration' => 'Не мигрировать пользователей',
    'role_delete_sure' => 'Вы уверены что хотите удалить данную роль?',
    'role_delete_success' => 'Роль успешно удалена',
    'role_edit' => 'Редактировать роль',
    'role_details' => 'Детали роли',
    'role_name' => 'Имя роли',
    'role_desc' => 'Краткое описание роли',
    'role_external_auth_id' => 'Внешние ID авторизации',
    'role_system' => 'Системные разрешения',
    'role_manage_users' => 'Управление пользователями',
    'role_manage_roles' => 'Управление ролями и правами на роли',
    'role_manage_entity_permissions' => 'Управление правами на все книги, главы и страницы',
    'role_manage_own_entity_permissions' => 'Управление разрешениями для собственных книг, разделов и страниц',
    'role_manage_settings' => 'Управление настройками приложения',
    'role_asset' => 'Разрешение для активации',
    'role_asset_desc' => 'Эти разрешения контролируют доступ по умолчанию к параметрам внутри системы. Разрешения на книги, главы и страницы перезапишут эти разрешения.',
    'role_asset_admins' => 'Администраторы автоматически получают доступ ко всему контенту, но эти опции могут отображать или скрывать параметры пользовательского интерфейса.',
    'role_all' => 'Все',
    'role_own' => 'Владелец',
    'role_controlled_by_asset' => 'Контролируется активом, в который они загружены',
    'role_save' => 'Сохранить роль',
    'role_update_success' => 'Роль успешно обновлена',
    'role_users' => 'Пользователи с данной ролью',
    'role_users_none' => 'Нет пользователей с данной ролью',

    // Users
    'users' => 'Пользователи',
    'user_profile' => 'Профиль пользователя',
    'users_add_new' => 'Добавить пользователя',
    'users_search' => 'Поиск пользователей',
    'users_details' => 'Данные пользователя',
    'users_details_desc' => 'Задайте имя для этого пользователя, чтобы другие могли его узнать',
    'users_details_desc_no_email' => 'Задайте имя для этого пользователя, чтобы другие могли его узнать',
    'users_role' => 'Роли пользователя',
    'users_role_desc' => 'Назначьте роли пользователю. Если назначено несколько ролей, разрешения будут суммироваться и пользователь получит все права назначенных ролей.',
    'users_password' => 'Пароль пользователя',
    'users_password_desc' => 'Установите пароль для входа в приложение. Должно быть не менее 5 символов.',
    'users_external_auth_id' => 'Внешний ID аутентификации',
    'users_external_auth_id_desc' => 'Этот ID используется для связи с вашей LDAP системой.',
    'users_password_warning' => 'Заполните ниже только если вы хотите сменить свой пароль.',
    'users_system_public' => 'Этот пользователь представляет любых гостевых пользователей, которые посещают ваше приложение. Он не может использоваться для входа в систему и назначается автоматически.',
    'users_delete' => 'Удалить пользователя',
    'users_delete_named' => 'Удалить пользователя :userName',
    'users_delete_warning' => 'Это полностью удалит пользователя с именем \':userName\' из системы.',
    'users_delete_confirm' => 'Вы уверены что хотите удалить этого пользователя?',
    'users_delete_success' => 'Пользователи успешно удалены',
    'users_edit' => 'Редактировать пользователя',
    'users_edit_profile' => 'Редактировать профиль',
    'users_edit_success' => 'Пользователь успешно обновлен',
    'users_avatar' => 'Аватар пользователя',
    'users_avatar_desc' => 'Выберите изображение. Изображение должно быть квадратным, размером около 256px.',
    'users_preferred_language' => 'Предпочитаемый язык',
    'users_preferred_language_desc' => 'Этот параметр изменит язык интерфейса приложения. Это не влияет на созданный пользователем контент.',
    'users_social_accounts' => 'Аккаунты Соцсетей',
    'users_social_accounts_info' => 'Здесь вы можете подключить другие учетные записи для более быстрого и легкого входа в систему. Отключение учетной записи здесь не разрешено. Отменить доступ к настройкам вашего профиля в подключенном социальном аккаунте.',
    'users_social_connect' => 'Подключить аккаунт',
    'users_social_disconnect' => 'Отключить аккаунт',
    'users_social_connected' => ':socialAccount аккаунт упешно подключен к вашему профилю.',
    'users_social_disconnected' => ':socialAccount аккаунт успешно отключен от вашего профиля.',


];
