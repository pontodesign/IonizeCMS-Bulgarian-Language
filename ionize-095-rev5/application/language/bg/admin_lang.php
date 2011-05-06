<?php

/*
|---------------------------------------------------------------------------
| Езиков файл на Ionize
| --------------------------------------------------------------------------
|
| Език :       Български
| Преводач :   Милен Александров
| Линк :        http://www.pontodesign.bg
| Дата :        Четвъртък, 7-ми Април 2010
|
|
| Употреба
| --------------------------------------------------------------------------
|
| Етикети :				                ionize_label_*
| Бутони :			                    ionize_button_*
| Меню :				                ionize_menu_*
| Заглавие на страница, заглавие :		ionize_title_*
| Съобщение :				            ionize_message_*
|							            ionize_*_message_*
| Известия / Съобщения :			    ionize_notify_*
|							            ionize_*_notify_*
| Помощ (inline) :			            ionize_help_*
|
| Бележка : При провод на модули виднаги трябва да започва с представка 'module_name'
|			Пример :
|			$lang['module_fancyupload_label_folder'] =			'Път към папката';
|
| Документация :	    Всеки етикет трябва да има заглави /title/
| 						Стойноста на заглавието помага на потребителя да разбере за какво служи
|						Пример : 
|						Етикет : $lang['ionize_label_appears'] = 'Среща се в менюто';
|						Заглавие на етикет : $lang['ionize_help_appears'] = 'Елементът ще се вижда в менюто';
|
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Влизане в администрацията
|--------------------------------------------------------------------------
*/
$lang['ionize_home'] =                                     'Начало';
$lang['ionize_login'] =                                    'Влез';
$lang['ionize_logout'] =                                   'Излез';
$lang['ionize_goback'] =                                   'Върни се към сайта';
$lang['ionize_website'] =                                  'Виж сайта';
$lang['ionize_logged_as'] =                                'Добре дошъл';
$lang['ionize_login_name'] =                               'Потребителско име';
$lang['ionize_login_password'] =                           'Парола';
$lang['ionize_login_remember'] =                           'Запомни ме';
$lang['ionize_login'] =	                                   'Влез';
$lang['ionize_forgot_password'] =                          'Забравена парола ?';


/*
|--------------------------------------------------------------------------
| Начална страница
|--------------------------------------------------------------------------
*/
$lang['ionize_dashboard_icon_add_page'] =                  'Нова страница';
$lang['ionize_dashboard_icon_mediamanager'] =              'Медии';
$lang['ionize_dashboard_icon_translation'] =               'Превеждане';
$lang['ionize_dashboard_icon_google_analytics'] =          'Статистика';

$lang['ionize_dashboard_title_content'] =                  'Съдържание';
$lang['ionize_dashboard_title_tools'] =	                   'Инструменти';
$lang['ionize_dashboard_title_settings'] =                 'Настройки';

$lang['ionize_dashboard_title_last_modified_articles'] =   'Последно обновени статии';
$lang['ionize_dashboard_title_last_connected_users'] =	   'Последно влезли потребители';
$lang['ionize_dashboard_title_orphan_pages'] =             'Единични страници';                  
$lang['ionize_dashboard_title_orphan_articles'] =          'Единични статии';                    


/*
|--------------------------------------------------------------------------
| Структура
|--------------------------------------------------------------------------
*/
$lang['ionize_structure_main_menu'] =                      'Главно меню';
$lang['ionize_structure_system_menu'] =                    'Системно съдържание';


/*
|--------------------------------------------------------------------------
| Администрация : Меню
|--------------------------------------------------------------------------
*/
$lang['ionize_menu_content'] =                             'Съдържание';
$lang['ionize_menu_translation'] =                         'Превод';
$lang['ionize_menu_modules'] =                             'Модули';
$lang['ionize_menu_tools'] =                               'Инструменти';
$lang['ionize_menu_settings'] =                            'Настройки';
$lang['ionize_menu_help'] =                                'Помощ';

$lang['ionize_menu_menu'] =                                'Управление на меню...';
$lang['ionize_menu_page'] =                                'Създай страница...';
$lang['ionize_menu_article'] =                             'Създай статия...';
$lang['ionize_menu_media_manager'] =                       'Медиа мениджър';

$lang['ionize_menu_modules_admin'] =                       'Администрация...';

$lang['ionize_menu_site_settings'] =                       'Настройки на сайта...';
$lang['ionize_menu_global'] =                              'Глобален...';                
$lang['ionize_menu_theme'] =                               'Теми...';
$lang['ionize_menu_technical_settings'] =                  'Разширени настройки...';
$lang['ionize_menu_translations'] =                        'Статичен превод';

$lang['ionize_menu_site_settings_global'] =                'Настройки на сайта';
$lang['ionize_menu_site_settings_translations'] =          'Статичен превод';
$lang['ionize_menu_site_settings_technical'] =             'Разширени настройки';

$lang['ionize_menu_users'] =                               'Потребители...';
$lang['ionize_menu_languages'] =                           'Език...';

$lang['ionize_menu_about'] =                               'За нас';
$lang['ionize_menu_documentation'] =                       'Документация';
$lang['ionize_menu_extend_fields'] =                       'Разширени области';


/*
|--------------------------------------------------------------------------
| Глобални заглавия
|--------------------------------------------------------------------------
*/
$lang['ionize_title_welcome'] =                            'Добре дошъл в света на Ionize';
$lang['ionize_title_structure'] =                          'Структура';
$lang['ionize_title_options'] =	                           'Опции';
$lang['ionize_title_advanced'] =                           'Други опции';
$lang['ionize_title_dates'] =                              'Дати';
$lang['ionize_title_informations'] =                       'Информация';
$lang['ionize_title_authorization'] =                      'Разрешен достъп';
$lang['ionize_title_metas'] =                              'Мета данни';
$lang['ionize_title_modules'] =                            'Управление на модули';
$lang['ionize_title_menu'] =                               'Управление на меню';
 
$lang['title_delete_installer'] =                          'Изтрийте install/ директорията';
$lang['title_ionize_installation'] =                       'Ionize Инсталация';


/*
|--------------------------------------------------------------------------
| Потвърдителни данни 
|--------------------------------------------------------------------------
*/
$lang['ionize_modal_confirmation_title'] =                 'Потвърждавате ли ?';


/*
|--------------------------------------------------------------------------
| Меню 
|--------------------------------------------------------------------------
*/
$lang['ionize_title_add_menu'] =                           'Добави меню';
$lang['ionize_button_save_new_menu'] =                     'Запази меню';

$lang['ionize_title_existing_menu'] =                      'Съществуващо меню';
$lang['ionize_message_menu_saved'] =                       'Менюто е запазено';
$lang['ionize_message_menu_not_saved'] =                   'Менюто не запазено';
$lang['ionize_message_menu_already_exists'] =              'Това меню вече съществува';
$lang['ionize_message_menu_updated'] =                     'Менюто е обновено';
$lang['ionize_message_menu_ordered'] =                     'Редът на менюто';                   //????????????????
$lang['ionize_message_menu_deleted'] =                     'Менюто е изтрито';
$lang['ionize_message_menu_not_deleted'] =                 'Менюто не изтрито';


/*
|--------------------------------------------------------------------------
| Глобални форми, етикети и помощ
|--------------------------------------------------------------------------
*/

$lang['ionize_label_online'] =                             'Онлайн';
$lang['ionize_label_offline'] =                            'Офлайн';
$lang['ionize_label_set_offline'] =                        'Задайте Офлайн';
$lang['ionize_label_set_online'] =                         'Задайте Онлайн';
$lang['ionize_label_edit'] =                               'Редактирай';
$lang['ionize_label_delete'] =                             'Изтрий';
$lang['ionize_label_status'] =                             'Статус';
$lang['ionize_label_max_upload_size'] =	                   'Макс. качване';
$lang['ionize_label_file_uploads'] =                       'Качи ?';
$lang['ionize_label_site_email'] =                         'Емайл хост';
$lang['ionize_label_linkto'] =                             'Линк към...';
$lang['ionize_label_remove_link'] =                        'Изтрий линка';
$lang['ionize_label_url'] =                                'URL';
$lang['ionize_label_see_online'] =                         'Вижте онлайн';

$lang['ionize_label_page'] =                               'Страница';
$lang['ionize_label_article'] =                            'Статия';

$lang['ionize_label_name'] =                               'Име';
$lang['ionize_label_id'] =                                 'ID';
$lang['ionize_label_parent'] =                             'Родител';
$lang['ionize_label_permanent_url'] =                      'Постоянно URL';
$lang['ionize_label_template'] =                           'Виж';
$lang['ionize_label_article_template'] =                   'Виж статията';

$lang['ionize_label_title'] =                              'Заглавие';
$lang['ionize_label_subtitle'] =                           'Подзаглавие';
$lang['ionize_label_meta_title'] =                         'Заглавие на стр.';
$lang['ionize_label_text'] =                               'Текст';
$lang['ionize_label_content'] =                            'Съдържание';
$lang['ionize_label_category'] =                           'Катогория';
$lang['ionize_label_ordering'] =                           'Ред';                   //????????????????
$lang['ionize_label_pictures'] =                           'Снимки';
$lang['ionize_label_music'] =                              'Музика';
$lang['ionize_label_videos'] =                             'Видео';
$lang['ionize_label_files'] =                              'Файлове';
$lang['ionize_label_default'] =                            'По подразбиране';
$lang['ionize_label_code'] =                               'Код';
$lang['ionize_label_toggle_editor'] =                      'Виж / Скрий HTML';
 
$lang['ionize_label_in_menu'] =                            'Среща се в менюто';
$lang['ionize_label_parent'] =                             'Родител';
$lang['ionize_label_meta_keywords'] =                      'Ключови думи';
$lang['ionize_label_meta_description']=                    'Описание';
$lang['ionize_label_created'] =                            'Дата на съз.';
$lang['ionize_label_updated'] =                            'Дата на обн.';
$lang['ionize_label_publish_on'] =                         'Публикуване';
$lang['ionize_label_publish_off'] =                        'Непубликуван';
$lang['ionize_label_permanent_url'] =                      'Постоянно URL';
$lang['ionize_label_add_media'] =                          'Добави медиа';
$lang['ionize_label_author'] =                             'Автор';
$lang['ionize_label_updater'] =                            'Обновяване';                   

$lang['ionize_label_groups'] =                             'Групи';

$lang['ionize_label_installed'] =                          'Инсталирани';
$lang['ionize_label_hide_options'] =                       'Скрий Опциите';
$lang['ionize_label_show_options'] =                       'Покажи Опциите';

$lang['ionize_help_status'] =                              'Ако сте влезли като администратор, ще видите този елемент на уеб сайта дори да не е онлайн';
$lang['ionize_help_publish_on'] =                          'Публикуване на елементите на тази дата и да се замени с показваната дата';
$lang['ionize_help_publish_off'] =                         'Непубликувани елемента на тази дата'; 
$lang['ionize_help_online_lang'] =                         'Искате ли да бъде видим за този език ?';
$lang['ionize_help_url'] =                                 'URL елемент';              


/*
|--------------------------------------------------------------------------
| Глобални форми и бутони
|--------------------------------------------------------------------------
*/
$lang['ionize_button_save'] =                              'Запази';
$lang['ionize_button_save_close'] =                        'Запази & затвори';
$lang['ionize_button_send'] =                              'Изпрати';
$lang['ionize_button_next'] =                              'Следващ';
$lang['ionize_button_delete'] =                            'Изтрий';
$lang['ionize_button_new'] =                               'Нов';
$lang['ionize_button_close'] =                             'Затвори';
$lang['ionize_button_yes'] =                               'Да';
$lang['ionize_button_no'] =                                'Не';
$lang['ionize_button_confirm'] =                           'Потвърди';
$lang['ionize_button_cancel'] =                            'Откажи';
$lang['ionize_button_add_page'] =                          'Добави страница';
$lang['ionize_button_switch_online'] =                     'Онлайн / Офлайн';

$lang['ionize_button_save_new_lang'] =                     'Добавете този език';
$lang['ionize_button_save_page'] =                         'Запази страницата';
$lang['ionize_button_save_article'] =                      'Запази статията';
$lang['ionize_button_save_module_settings'] =              'Запази настройките';
$lang['ionize_button_save_views'] =                        'Запази';            
$lang['ionize_button_save_themes'] =                       'Използвай тази тема';
$lang['ionize_button_save_settings'] =                     'Запази настройките';


/*
|--------------------------------------------------------------------------
| Глобални съобщения
|--------------------------------------------------------------------------
*/

$lang['ionize_confirm_element_delete'] =                   'Искате ли да изтриете този елемент ?';
$lang['ionize_message_missing_params'] =                   'Липсващи настройки';
$lang['ionize_message_operation_ok'] =                     'Действието е извършено';
$lang['ionize_message_operation_nok'] =                    'Действието е неуспешно';
$lang['ionize_message_delete_installer'] =                 'ВАЖНО : <br/>Поради причини за сигурност моля изтрийте <b>"/install"</b> папката. Ionize няма да бъде достъпен докато не бъде изтрита тази директория.';
$lang['ionize_message_no_circular_link'] =                 'Кръгли връзки не са позволени';       //?????????????????
$lang['button_delete_installer_done_admin'] =              'Готово! Отиди в Администрацията';
$lang['button_delete_installer_done_site'] =               'Готово! Отиди в сайта';


/*
|--------------------------------------------------------------------------
| Администрация : Език
|--------------------------------------------------------------------------
*/
$lang['ionize_title_language'] =                           'Управление на езика';
$lang['ionize_title_existing_languages'] =                 'Съществуващ език';
$lang['ionize_title_add_language'] =                       'Добави език';
$lang['ionize_title_advanced_language'] =                  'Разширени функции';
$lang['ionize_message_no_languages'] =                     '<strong>Не съществуващ език</strong>. <br/> Моля създайте език.';
$lang['ionize_message_lang_saved'] =                       'Езика е запазен';
$lang['ionize_message_lang_not_saved'] =                   'Езика не е запазен';
$lang['ionize_message_lang_file_not_saved'] =              'Грешка : Няма права за писане в application/config/language.php';
$lang['ionize_message_lang_code_already_exists'] =         'Този езиков код съществува';
$lang['ionize_message_lang_not_deleted'] =                 'Езика не е изтрит';
$lang['ionize_message_lang_deleted'] =                     'Езика е изтрит';
$lang['ionize_message_lang_ordered'] =                     'Languages ordered';             //????????????????????
$lang['ionize_message_lang_not_ordered'] =                 'Languages not ordered';         //???????????????????? 
$lang['ionize_message_lang_updated'] =                     'Езика е обновен';
$lang['ionize_notify_advanced_language'] =                 'Използвайте тази функция само ако знаете какво правите.';
$lang['ionize_button_clean_lang_tables'] =                 'Изтрий езиковите таблица';
$lang['ionize_help_clean_lang_tables'] =                   'Изтрий съдържанието на езиковите таблици чрез премахване на цялото съдържание за несъществуващи езици';
$lang['ionize_confirmation_clean_lang'] =                  'Цялото съдържание на не описан език ще бъде премахнато от езиковите таблици...';
$lang['ionize_message_lang_tables_cleaned'] =              'Съдържанието на таблиците е изчистено';


/*
|--------------------------------------------------------------------------
| Администрация : Потребители и групи
|--------------------------------------------------------------------------
*/
$lang['ionize_title_users'] =                              'Управление на потребители';
$lang['ionize_title_user_edit'] =                          'Редактиране на потребители';
$lang['ionize_title_existing_users'] =                     'Съществуващи потребители';
$lang['ionize_title_existing_groups'] =                    'Съществуващи групи';
$lang['ionize_title_group_edit'] =                         'Редактиране на групи';
$lang['ionize_title_add_user'] =                           'Добави потребител';
$lang['ionize_title_add_group'] =                          'Добави група';
$lang['ionize_title_change_password'] =                    'Смени парола';
$lang['ionize_title_users_export'] =                       'Експортирай потребител';
$lang['ionize_title_user_meta'] =                          'Потребителски мета данни';

$lang['ionize_label_username'] =                           'ID (име за вход)';
$lang['ionize_label_screen_name'] =                        'Пълно име';
$lang['ionize_label_email'] =                              'Емайл';
$lang['ionize_label_group'] =                              'Група';
$lang['ionize_label_password'] =                           'Парола';
$lang['ionize_label_password2'] =                          'Потвърди';
$lang['ionize_label_group_name'] =                         'Име';
$lang['ionize_label_group_title'] =                        'Заглавие';
$lang['ionize_label_group_level'] =                        'Ниво';
$lang['ionize_label_group_description'] =                  'Описание';
$lang['ionize_label_export_meta'] =                        'За да експортирате';
$lang['ionize_label_export_format'] =                      'Формат';
$lang['ionize_label_last_visit'] =                         'Последно посещение';

$lang['ionize_message_user_updated'] =                     'Потребителя е обновен';
$lang['ionize_message_user_not_saved'] =                   'Потребителя не е обновен';
$lang['ionize_message_user_saved'] =                       'Потребителя е запазен';
$lang['ionize_message_user_exists'] =                      'Потребителя вече е в базата данни!';
$lang['ionize_message_user_deleted'] =                     'Потребителя е изтрит';
$lang['ionize_message_user_cannot_delete_yourself'] =      'Не можете да изтриете вашия потребител!';
$lang['ionize_message_group_updated'] =                    'Гупата е обновена';
$lang['ionize_message_group_not_saved'] =                  'Гупата не е обновена';
$lang['ionize_message_group_saved'] =                      'Гупата е запазена';
$lang['ionize_message_group_deleted'] =                    'Гупата е изтрита';
$lang['ionize_message_users_exported'] =                   'Потребителя е експортиран';
$lang['ionize_message_users_not_exported'] =               'Потребителя не е експортиран';

$lang['ionize_button_export'] =	                           'Експорт';


/*
|--------------------------------------------------------------------------
| Администрация : Настройки
|--------------------------------------------------------------------------
*/

$lang['ionize_label_site_title'] =                         'Заглавие на стр.';
$lang['ionize_message_settings_saved'] =                   'Настройките са запазени';
$lang['ionize_title_admin_ui_options'] =                   'Екран на администрацията';
$lang['ionize_label_show_help_tips'] =                     'Покажи помоща в полето';


/*
|--------------------------------------------------------------------------
| Администрация : Технически настройки
|--------------------------------------------------------------------------
*/
$lang['ionize_title_themes'] =                             'Теми';
$lang['ionize_title_theme'] =                              'Тема';
$lang['ionize_title_translation'] =                        'Статичен превод';
$lang['ionize_title_database'] =                           'База данни';
$lang['ionize_title_mail_send'] =                          'Настройки на емайла';
$lang['ionize_title_media_management'] =                   'Медиа мениджър';
$lang['ionize_title_google_analytics'] =                   'Статистика';
$lang['ionize_title_thumb_new'] =                          'Нова малка снимка';
$lang['ionize_title_thumbs'] =                             'Малка снимка';
$lang['ionize_title_thumbs_system'] =                      'Система за малки снимки Ionize';

$lang['ionize_label_files_path'] =                         'Папка за медиа';
$lang['ionize_label_media_type_picture'] =                 'Разширения на снимки';
$lang['ionize_label_media_type_video'] =                   'Разширения на видео';
$lang['ionize_label_media_type_music'] =                   'Разширения на музика';
$lang['ionize_label_media_type_file'] =	                   'Разширения на файлове';
$lang['ionize_label_filemanager'] =                        'Файлов мениджър';
$lang['ionize_label_theme'] =                              'Тема';
$lang['ionize_label_theme_admin'] =                        'Админ тема';
$lang['ionize_label_db_driver'] =                          'Driver';
$lang['ionize_label_db_host'] =                            'Хост';
$lang['ionize_label_db_name'] =                            'База данни';
$lang['ionize_label_db_user'] =                            'Потребител';
$lang['ionize_label_db_pass'] =                            'Парола';
$lang['ionize_label_google_analytics'] =                   'Google Analytics';

$lang['ionize_label_smtp_protocol'] =                      'Протокол';
$lang['ionize_label_smtp_host'] =                          'Хост';
$lang['ionize_label_smtp_user'] =                          'Потребител';
$lang['ionize_label_smtp_pass'] =                          'Парола';
$lang['ionize_label_smtp_port'] =                          'Порт';
$lang['ionize_label_email_charset'] =                      'Енкодинг';
$lang['ionize_label_email_mailtype'] =                     'Формат';
$lang['ionize_label_mailpath'] =                           'Емайл директория';

$lang['ionize_label_thumb_dir'] =                          'Папка';
$lang['ionize_label_thumb_size'] =                         'Големина';
$lang['ionize_label_thumb_sizeref'] =                      'Референтен';
$lang['ionize_label_thumb_sizeref_width'] =                'Ширина';
$lang['ionize_label_thumb_sizeref_height'] =               'Височина';
$lang['ionize_label_thumb_square'] =                       'Квадрат';
$lang['ionize_label_thumb_unsharp'] =                      'Unsharp филтър';               //???????????????
$lang['ionize_label_thumb_list'] =                         'Списък снимки';
$lang['ionize_label_thumb_edition'] =                      'Издание на снимка';
$lang['ionize_label_thumbs_system'] =                      'Списък снимки / промени';

$lang['ionize_title_db_version'] =                         'База данни';
$lang['ionize_title_php_version'] =                        'PHP';

$lang['ionize_message_database_not_saved'] =               'Неправилни настройки на базата данни';
$lang['ionize_message_database_not_exist'] =               'Избраната база не съществува';
$lang['ionize_message_database_connection_error'] =        'Връзката към базата данни е невъзможна';
$lang['ionize_message_database_saved'] =                   'Настройките на базата данни за записани успешно';

$lang['ionize_message_smtp_not_saved'] =                   'Емайл настройките липсват или са грешни';
$lang['ionize_message_smtp_saved'] =                       'Емайл настройките са записани';

$lang['ionize_message_thumb_saved'] =                      'Картинките са записани';
$lang['ionize_message_thumb_not_saved'] =                  'Картинките не са записани';
$lang['ionize_message_thumb_deleted'] =                    'Картинките са изтрити';
$lang['ionize_message_thumb_not_deleted'] =                'Картинките не са изтрити';

$lang['ionize_message_error_writing_file'] =               'Грешка на правата на файл';
$lang['ionize_message_error_writing_medias_file'] =        'application/config/medias.php няма права за писане !';
$lang['ionize_message_error_writing_database_file'] =      'application/config/database.php няма права за писане !';
$lang['ionize_message_error_writing_email_file'] =         'application/config/email.php няма права за писане !';

$lang['ionize_help_setting_google_analytics'] =            'Пълният Google скрипт, който копирате от сайта на Google Analytics';
$lang['ionize_help_setting_files_path'] =                  'Показва медиа папка. Не се променят физическите името на папката'; 
$lang['ionize_help_setting_system_thumb_list'] =           'Thumbnails displayed by ionize in image list and picture edit window'; //???
$lang['ionize_help_setting_media_type_picture'] =          'Файлови разширения, разделени със запетая';
$lang['ionize_help_setting_media_type_music'] =	           'Файлови разширения, разделени със запетая';
$lang['ionize_help_setting_media_type_video'] =	           'Файлови разширения, разделени със запетая';
$lang['ionize_help_setting_media_type_file'] =             'Файлови разширения, разделени със запетая';


/*
|--------------------------------------------------------------------------
| Администрация : Теми (темплейти)
|--------------------------------------------------------------------------
*/
$lang['ionize_title_views_list'] =                         'Списък на текущите теми';
$lang['ionize_title_view_edit'] =                          'Издание';
$lang['ionize_title_views_translations'] =                 'Статичен превод на текущата тема';
$lang['ionize_label_view_filename'] =                      'Файл';
$lang['ionize_label_view_folder'] =                        'Папка';
$lang['ionize_label_view_name'] =                          'Име';
$lang['ionize_label_view_type'] =                          'Тип';
$lang['ionize_label_current_theme'] =                      'Текуща тема';

$lang['ionize_select_no_type'] =                           '-- Без тип --';
$lang['ionize_message_views_saved'] =                      'Настройките са записани';

$lang['ionize_message_view_saved'] =                       'Настройките са записани';

/*
|--------------------------------------------------------------------------
| Администрация : Страници
|--------------------------------------------------------------------------
*/
$lang['ionize_title_pages'] =                              'Страници';
$lang['ionize_title_new_page'] =                           'Създай страница';
$lang['ionize_title_edit_page'] =                          'Промени страницата';

$lang['ionize_label_articles'] =                           'Статии';
$lang['ionize_label_add_article'] =                        'Добави статия';
$lang['ionize_label_appears'] =	                           'Да се вижда ли в менюто';
$lang['ionize_label_link'] =                               'Линк';
$lang['ionize_label_page_extendfields'] =                  'Разширени области';         
$lang['ionize_label_add_extendfield'] =	                   'Добави поле';
$lang['ionize_label_pagination_nb'] =                      'Статии / страница';
$lang['ionize_label_article_list_template'] =              'Списък оглед';              
$lang['ionize_label_page_delete_date'] =                   'Дата за изтриване';
$lang['ionize_label_menu'] =                               'Меню';
$lang['ionize_label_home_page'] =                          'Начална страница';

$lang['ionize_select_default_view'] =                      '-- По подразбиране --';
$lang['ionize_select_everyone'] =                          '-- Всички --';

$lang['ionize_message_page_name_exists'] =                 'Тази страница вече съществува!';
$lang['ionize_message_page_url_exists'] =                  'Страница с това URL вече съществува !';
$lang['ionize_message_page_saved'] =                       'Страницата е запазена';
$lang['ionize_message_page_not_saved'] =                   'Страницата не е запазена';
$lang['ionize_message_page_not_exist'] =                   'Страницата не съществува';
$lang['ionize_message_page_ordered'] =                     'Page ordered';                  //?????????
$lang['ionize_message_page_needs_url_or_title'] =          'Моля въведете заглавие или URL на езика по подразбиране  !'; 

$lang['ionize_help_page_link'] =                           'Internal or External HTTP link. Replace the default page link';  //?????????
$lang['ionize_help_pagination'] =                          'If > 0, activate the pagination of article.';  //?????????
$lang['ionize_help_article_list_template'] =               'If more than 1 article on the page, use of this view to display each article';
$lang['ionize_help_appears'] =                             'Да се вижда ли тази страница в менюто ?';
$lang['ionize_help_page_meta'] =                           'Replace the global website META when not empty';   //?????????
$lang['ionize_help_page_window_title'] =                   'Заглавие на страницата';
$lang['ionize_help_home_page'] =                           'Тази страница главна ли е за сайта Ви ?';



/*
|--------------------------------------------------------------------------
| Администрация : Медиа
|--------------------------------------------------------------------------
*/
$lang['ionize_title_medias'] =	                           'Медии';
$lang['ionize_title_thumbs_status'] =                      'Статус на малките снимки';
$lang['ionize_title_informations'] =                       'Информация';

$lang['ionize_label_file_size'] =                          'Раземер на файла';
$lang['ionize_label_reload_picture_list'] =                'Обнови списъка';
$lang['ionize_message_no_picture'] =                       'Няма снимки';
$lang['ionize_message_no_music'] =                         'Няма аудио файлове';
$lang['ionize_message_no_video'] =                         'Няма видео файлове';
$lang['ionize_message_no_file'] =                          'Няма файлове';

$lang['ionize_label_init_thumb'] =                         'Init thumbnails';               //???????????
$lang['ionize_label_attach_media'] =                       'Добави медиа';
$lang['ionize_label_detach_media'] =                       'Премахни медиа';
$lang['ionize_label_detach_all_pictures'] =                'Премахни всички снимки';
$lang['ionize_label_detach_all_videos'] =                  'Премахни всички видеа';
$lang['ionize_label_detach_all_musics'] =                  'Премахни всичката музика';
$lang['ionize_label_detach_all_files'] =                   'Премахни всички файлове';
$lang['ionize_label_init_all_thumbs'] =	                   'Обнови всички снимки';            
$lang['ionize_label_copyright'] =                          'Авторско право';
$lang['ionize_label_date'] =                               'Дата';
$lang['ionize_label_alt'] =                                'Алтернативен текст';
$lang['ionize_label_link'] =                               'Линк';
$lang['ionize_label_description'] =                        'Описание';
$lang['ionize_label_reload_media_list'] =                  'Обнови медиа листа';

$lang['ionize_message_please_save_first'] =                'Запазете преди да добавите медиа';
$lang['ionize_message_media_not_authorized'] =             'Типът медиа не е разрешен !';
$lang['ionize_message_media_attached'] =                   'Медиата е свързана';
$lang['ionize_message_media_detached'] =                   'Медиата не е свързана';
$lang['ionize_message_no_media_to_detach'] =               'Няма елементи за премахване!';
$lang['ionize_message_no_picture'] =                       'Няма снимки за премахване';
$lang['ionize_message_no_video'] =                         'Няма видео за премахване';
$lang['ionize_message_no_music'] =                         'Няма музика за премахване';
$lang['ionize_message_no_file'] =                          'Няма файлове за премахване';
$lang['ionize_message_media_not_detached'] =               'Няма свързана медиа';              
$lang['ionize_message_media_already_attached'] =           'Медиата вече е свързана';
$lang['ionize_message_media_data_saved'] =                 'Медиа данните са запазени';
$lang['ionize_message_media_data_not_saved'] =             'Медиа данните не са запазени';
$lang['ionize_message_thumb_initialized'] =                'Thumbnail regenerated';            //?????????

$lang['ionize_message_media_reordered'] =                  'Medias ordered';                   //?????????

// Изключения
$lang['ionize_exception_folder_creation'] =                'Грешка при създаването папка';
$lang['ionize_exception_no_thumbs_settings'] =             'Настройки : Няма определени малки картинки!';
$lang['ionize_exception_getimagesize'] =                   'PHP : Функцията getimagesize не е намерена!';
$lang['ionize_exception_getimagesize_get'] =               'Не е възможно да се вземе размера на изображението';
$lang['ionize_exception_chmod'] =                          'PHP : Не е възможно използването на CHMOD';
$lang['ionize_exception_unlink'] =                         'PHP : Не е възможно да се изтрие файла';
$lang['ionize_exception_image_resize'] =                   'Image Lib : Не е възможно да се оразмери снимката';
$lang['ionize_exception_image_crop'] =                     'Image Lib : Не е възможно да се изреже снимката';
$lang['ionize_exception_copy'] =                           'PHP : Не може да се копира снимката';
$lang['ionize_exception_no_source_file'] =                 'Файла не е намерен';
$lang['ionize_exception_memory_limit'] =                   'Достигна ли сте PHP Memory limit-а';
$lang['ionize_exception_image_lib'] =                      'Image Lib Грешка';                


/*
|--------------------------------------------------------------------------
| Администрация : Статии
|--------------------------------------------------------------------------
*/
$lang['ionize_title_articles'] =                           'Статии';
$lang['ionize_select_no_category'] =                       '-- Никой --';

$lang['ionize_title_create_article'] =                     'Нова статия';
$lang['ionize_title_edit_article'] =                       'Промени статията';
$lang['ionize_title_comments'] =                           'Коментари';
$lang['ionize_title_duplicate_article'] =                  'Дублирай статия';

$lang['ionize_label_indexed'] =                            'Индекс';
$lang['ionize_label_categories'] =                         'Категории';
$lang['ionize_label_edit_categories'] =                    'Промени категорията';
$lang['ionize_label_new_category'] =                       'Създай категория';
$lang['ionize_label_comment_allow'] =                      'Разрешавам';
$lang['ionize_label_comment_autovalid'] =                  'Автоматично потвърждаване';
$lang['ionize_label_comment_expire'] =                     'Лимит по дата';
$lang['ionize_label_tags'] =                               'Етикети';                        
$lang['ionize_label_existing_tags'] =                      'Съществуващите бележки';
$lang['ionize_label_ordering_first'] =                     'първи';
$lang['ionize_label_ordering_last'] =                      'последен';
$lang['ionize_label_ordering_after'] =                     'след...';

$lang['ionize_message_article_not_saved'] =                'Статията не запазена : Липсващи данни';
$lang['ionize_message_article_saved'] =	                   'Статията е запазена';
$lang['ionize_message_article_name_exists'] =              'Статия със същото име вече съществува!';
$lang['ionize_message_article_url_exists'] =               'Статия със същото URL вече съществува!';
$lang['ionize_message_article_ordered'] =                  'Article ordored';                            //????????
$lang['ionize_message_article_duplicate_no_name_change'] = 'Дублираната статия трябва да има друго име за автор!';
$lang['ionize_message_article_duplicated'] =               'Статията е дублирана';
$lang['ionize_message_article_not_duplicated'] =           'Статията не е дублирана';
$lang['ionize_message_article_needs_url_or_title'] =       'Моля въведете заглавие или URL на езика по подразбиране !';

// Inline help
$lang['ionize_help_indexed'] =	                           'Ако избрете тази опция пълния текст на статията ще бъде индексиран (за търсещи машини)';
$lang['ionize_help_article_link'] =	                       'HTTP линк. Може да се използва за връзка с етикета';
$lang['ionize_help_articles_types'] =                      'Вид статия. Полезно за разграничаване на статиите в страниците';
$lang['ionize_help_article_window_title'] =	               'Заглавие на страницата';

$lang['ionize_button_duplicate_article'] =                 'Дублиране на статия';


/*
|--------------------------------------------------------------------------
| Администрация : Категория, Видове & extend fields
|--------------------------------------------------------------------------
*/
$lang['ionize_title_categories'] =                         'Категории';
$lang['ionize_title_category_new'] =                       'Нова категория';
$lang['ionize_title_category_edit'] =                      'Категории : Редактирай';
$lang['ionize_title_category_exist'] =                     'Съществуваща категория';

$lang['ionize_title_types'] =                              'Видове';
$lang['ionize_title_article_type_new'] =                   'Нов вид';
$lang['ionize_title_article_type_edit'] =                  'Редактиране категорията на статията';

$lang['ionize_label_categories'] =                         'Категории';
$lang['ionize_label_category'] =                           'Категория';
$lang['ionize_label_edit_categories'] =                    'Промени категориите';
$lang['ionize_label_edit_category'] =                      'Промени категорията';
$lang['ionize_label_new_category'] =                       'Създай категория';

$lang['ionize_label_type'] =                               'Вид';
$lang['ionize_label_label'] =                              'Етикет';
$lang['ionize_label_edit_types'] =                         'Промени вида';
$lang['ionize_label_new_type'] =                           'Нов вид';
$lang['ionize_label_values'] =                             'Стойности';                      
$lang['ionize_label_default_value'] =                      'Стойности по подразбиране';  

$lang['ionize_message_category_name_exists'] =             'Вече има категория с това име!';
$lang['ionize_message_category_saved'] =                   'Категорията е запазена';
$lang['ionize_message_category_not_saved'] =               'Категорията не е запазена';
$lang['ionize_message_category_deleted'] =                 'Категорията е изтрита';
$lang['ionize_message_category_not_deleted'] =             'Категорията не е изтрита';
$lang['ionize_message_category_name_exists'] =             'Тази категория вече съществува !';

$lang['ionize_message_article_type_saved'] =               'Категорията на статията е запазена';
$lang['ionize_message_article_type_not_saved'] =           'Категорията на статията не е запазена';
$lang['ionize_message_article_type_deleted'] =             'Вида е изтрит';
$lang['ionize_message_article_type_not_deleted'] =         'Вида не е изтрит';
$lang['ionize_message_type_exists'] =                      'Категорията на статията вече съществува';

$lang['ionize_label_type_text'] =                          'Въвеждане на текст'; 
$lang['ionize_label_type_textarea'] =                      'Текстово поле';
$lang['ionize_label_type_editor'] =                        'Текстово поле + Редактор';
$lang['ionize_label_type_checkbox'] =                      'Отметка';                                 
$lang['ionize_label_type_radio'] =                         'Радио бутон';                                   
$lang['ionize_label_type_select'] =                        'Избери';
$lang['ionize_label_type_datetime'] =                      'Дата & Време';

$lang['ionize_title_extend_field_new'] =                   'Ново разширено поле';
$lang['ionize_title_extend_new_page_extend'] =             'Поле на страницата';
$lang['ionize_title_extend_new_article_extend'] =          'Поле на статията';
$lang['ionize_title_extend_new_media_extend'] =            'Поле на медиа';
$lang['ionize_title_extend_fields'] =                      'Разширена област';
$lang['ionize_title_extend_field'] =                       'Разширени области';

$lang['ionize_label_extend_fields_activate'] =             'Активирай';
$lang['ionize_label_extend_field_type'] =                  'Вид';
$lang['ionize_label_extend_field_translated'] =            'Не може да се преведе';
$lang['ionize_label_extend_field_context'] =               'Контекст';

$lang['ionize_message_extend_field_name_exists'] =         'Разширено поле с това име вече съществува';
$lang['ionize_message_extend_field_saved'] =               'Разширеното поле е запазено';
$lang['ionize_message_extend_field_not_saved'] =           'Грешка : Моля въведете правилно име!';
$lang['ionize_message_extend_field_deleted'] =             'Разширеното поле е изтрито';
$lang['ionize_message_extend_field_not_deleted'] =         'Разширеното поле не е изтрито';
 
$lang['ionize_help_ef_name'] =                             'Key to use with the field tag';                     //???????
$lang['ionize_help_ef_values'] =                           'key:value, separated by a line break';             //???????
$lang['ionize_help_ef_default_value'] =                    'Ако изберете радио бутона или отметка, поставете вашия ключ';
$lang['ionize_help_ef_description'] =                      'Displayed user help about this field';           //???????


/*
|--------------------------------------------------------------------------
| Администрация : Преводи
|--------------------------------------------------------------------------
*/
$lang['ionize_message_language_files_saved'] =             'Превода е запазен';
$lang['ionize_message_language_dir_creation_fail'] =       'Невъзможно създаване на папка';
$lang['ionize_message_language_file_creation_fail'] =      'Писането върху файла е невъзможно';
$lang['ionize_label_expand_all'] =                         'Отвори';
$lang['ionize_label_collapse_all'] =                       'Затвори';


/*
|--------------------------------------------------------------------------
| Администрация : Медиа мениджър
|--------------------------------------------------------------------------
*/
$lang['ionize_image_manager'] =	                           'Снимки';
$lang['ionize_file_manager'] =                             'Файлове';


/*
|--------------------------------------------------------------------------
| Администрация : Модули
|--------------------------------------------------------------------------
*/
$lang['ionize_title_modules_list'] =                       'Модули';
$lang['ionize_label_module_name'] =                        'Име';
$lang['ionize_label_module_uri'] =                         'URI';
$lang['ionize_label_module_install'] =                     'Инсталирай';
$lang['ionize_label_module_uninstall'] =                   'Премахни';

$lang['ionize_message_module_install_error_no_config'] =   'Грешка : Модул без config.xml';
$lang['ionize_message_module_install_error_config_write'] = 'Грешка в : application/config/modules.php';
$lang['ionize_message_module_page_conflict'] =             'Грешка : URL-то си противоречи с вече съществуваща страница';
$lang['ionize_message_module_install_database_error'] =    'Грешка : Невъзможно е да инсталирате модула';
$lang['ionize_message_module_saved'] =                     'Модула е инсталиран';
$lang['ionize_message_module_uninstalled'] =               'Модула е деинсталиран';
$lang['ionize_message_module_not_installed'] =             'Модула не е инсталиран !';


