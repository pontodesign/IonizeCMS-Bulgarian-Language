<?php

/*
|---------------------------------------------------------------------------
| Езиков файл на Ionize
| --------------------------------------------------------------------------
|
| Език :       Български
| Преводач :   Милен Александров
| Линк :       http://www.TheMHouse.In
| Дата :       Събота, 9-ти Окт 2010
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
$lang['ionize_session_expired'] =                          'Вашата сесия е изтекла. Моля влезте отново.';

/*
|--------------------------------------------------------------------------
| Начална страница
|--------------------------------------------------------------------------
*/
$lang['ionize_dashboard_icon_add_page'] =                  'Нова страница';
$lang['ionize_dashboard_icon_mediamanager'] =              'Медия';
$lang['ionize_dashboard_icon_translation'] =               'Език';
$lang['ionize_dashboard_icon_google_analytics'] =          'Статистика';
$lang['ionize_dashboard_icon_articles'] =                  'Статии';

$lang['ionize_dashboard_title_content'] =                  'Съдържание';
$lang['ionize_dashboard_title_tools'] =	                   'Инструменти';
$lang['ionize_dashboard_title_settings'] =                 'Настройки';

$lang['ionize_dashboard_title_last_modified_articles'] =   'Последно обновени статии';
$lang['ionize_dashboard_title_last_connected_users'] =	   'Последно влезли потребители';
$lang['ionize_dashboard_title_last_registered_users'] =    'Последният регистриран потребител';
$lang['ionize_dashboard_title_orphan_pages'] =             'Единични страници';                  
$lang['ionize_dashboard_title_orphan_articles'] =          'Единични статии';  

/*
|--------------------------------------------------------------------------
| Структура
|--------------------------------------------------------------------------
*/
$lang['ionize_structure_main_menu'] =                      'Главно меню';
$lang['ionize_structure_system_menu'] =                    'Системно съдържание';
$lang['ionize_button_toggle_header'] =                     'Превключване на заглавието';

/*
|--------------------------------------------------------------------------
| Администрация : Меню
|--------------------------------------------------------------------------
*/
$lang['ionize_menu_content'] =                             'Съдържание';
$lang['ionize_menu_articles'] =                            'Статии';
$lang['ionize_menu_translation'] =                         'Превод';
$lang['ionize_menu_modules'] =                             'Модули';
$lang['ionize_menu_tools'] =                               'Инструменти';
$lang['ionize_menu_settings'] =                            'Настройки';
$lang['ionize_menu_help'] =                                'Помощ';

$lang['ionize_menu_menu'] =                                'Управление на меню';
$lang['ionize_menu_page'] =                                'Създай страница';
$lang['ionize_menu_article'] =                             'Създай статия';
$lang['ionize_menu_media_manager'] =                       'Медиа мениджър';

$lang['ionize_menu_modules_admin'] =                       'Администрация';

$lang['ionize_menu_site_settings'] =                       'Настройки на сайта';
$lang['ionize_menu_global'] =                              'Глобален';                
$lang['ionize_menu_theme'] =                               'Теми';
$lang['ionize_menu_technical_settings'] =                  'Разширени настройки';
$lang['ionize_menu_translations'] =                        'Статичен превод';

$lang['ionize_menu_site_settings_global'] =                'Настройки на сайта';
$lang['ionize_menu_site_settings_translations'] =          'Статичен превод';
$lang['ionize_menu_site_settings_technical'] =             'Разширени настройки';
$lang['ionize_menu_ionize_settings'] =                     'Системни настройки';

$lang['ionize_menu_users'] =                               'Потребители';
$lang['ionize_menu_languages'] =                           'Език';

$lang['ionize_menu_about'] =                               'За нас';
$lang['ionize_menu_documentation'] =                       'Документация';
$lang['ionize_menu_extend_fields'] =                       'Разширени области';
$lang['ionize_menu_content_elements'] =                    'Елементи на съдържанието';

/*
|--------------------------------------------------------------------------
| Глобални заглавия
|--------------------------------------------------------------------------
*/
$lang['ionize_title_welcome'] =                            'Добре дошли в IonizeCMS';
$lang['ionize_title_structure'] =                          'Структура';
$lang['ionize_title_options'] =	                           'Опции';
$lang['ionize_title_advanced'] =                           'Други опции';
$lang['ionize_title_dates'] =                              'Дати';
$lang['ionize_title_informations'] =                       'Информация';
$lang['ionize_title_authorization'] =                      'Разрешен достъп';
$lang['ionize_title_metas'] =                              'Мета данни';
$lang['ionize_title_modules'] =                            'Управление на модули';
$lang['ionize_title_menu'] =                               'Управление на меню';
$lang['ionize_title_documentation'] =                      'Документация';
$lang['ionize_title_ionize_settings'] =                    'Системни настройки';
$lang['ionize_title_help'] =                               'Помощ';

$lang['title_delete_installer'] =                          'Изтрийте install/ директорията';
$lang['title_ionize_installation'] =                       'Ionize Инсталация';

$lang['ionize_title_site_settings'] =                      'Уеб сайт настройки';
$lang['ionize_title_technical_settings'] =                 'Допълнителни настройки';

/*
|--------------------------------------------------------------------------
| Потвърдителни данни 
|--------------------------------------------------------------------------
*/
$lang['ionize_modal_confirmation_title'] =                 'Потвърждавате ли ?';
$lang['ionize_modal_information_title'] =                  'Информация';
$lang['ionize_modal_alert_title'] =                        'Внимание';
$lang['ionize_modal_error_title'] =                        'Грешка';

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
$lang['ionize_message_menu_ordered'] =                     'Менюто е подредено';                   //????????????????
$lang['ionize_message_menu_deleted'] =                     'Менюто е изтрито';
$lang['ionize_message_menu_not_deleted'] =                 'Менюто не изтрито';



/*
|--------------------------------------------------------------------------
| Content Elements 
|--------------------------------------------------------------------------
*/
$lang['ionize_button_save_element'] =                      'Запази този елемент';

$lang['ionize_title_content_element_list'] =               'Съдържание на елементи';
$lang['ionize_title_add_content_element'] =                'Добави елемент';
$lang['ionize_title_edit_content_element'] =               'Промени елемента';
$lang['ionize_title_element_edit'] =                       'Промени елемента';
$lang['ionize_title_element_new'] =                        'Ново съдържание на елемента';
$lang['ionize_title_element_field_edit'] =                 'Промени съдържанито на елемента';

$lang['ionize_title_element_fields'] =                     'Полета';

$lang['ionize_label_element_set_name'] =                   'Запази името';
$lang['ionize_label_content_element'] =                    'Content Element';
$lang['ionize_label_add_content_element'] =                'Добави елемент';
$lang['ionize_label_back_to_element_list'] =               'Върни се към елементите';
$lang['ionize_label_see_element_detail'] =                 'Детайли на елемент';

$lang['ionize_message_content_element_name_saved'] =       'New name saved';
$lang['ionize_message_content_element_saved'] =            'Content Element saved';
$lang['ionize_message_content_element_not_saved'] =        'Content Element not saved';
$lang['ionize_message_delete_element_definition'] =        'Delete this content definition ?';
$lang['ionize_message_element_ordered'] =                  'Elements ordered';
$lang['ionize_message_element_copied'] =                   'Element copied !';
$lang['ionize_message_element_moved'] =                    'Element moved !';

$lang['ionize_label_create_element'] =                     'Създай елемент';
$lang['ionize_message_element_field_deleted'] =            'Element field deleted';
$lang['ionize_message_element_field_not_deleted'] =        'Element field not deleted';
$lang['ionize_message_element_field_saved'] =              'Content Element saved';
$lang['ionize_message_element_field_not_saved'] =          'Content Element not saved';
$lang['ionize_message_element_in_use'] =                   'This element has fields or is in use and can\'t be deleted.';
$lang['ionize_message_element_cannot_be_added_to_parent'] = 'This element can\'t be added to this parent !';
$lang['ionize_message_element_definition_name_already_exists'] = 'Another Element has already this name !';

$lang['ionize_title_element_field_new'] =                  'New Element field';
$lang['ionize_message_element_field_name_exists'] =        'This field already exists !';


/*
|--------------------------------------------------------------------------
| Глобални форми, етикети и помощ
|--------------------------------------------------------------------------
*/
$lang['ionize_label_change'] =                             'Промени';
$lang['ionize_label_multilingual'] =                       'Многоезичност';
$lang['ionize_label_internal_id'] =                        'Вътрешно ID';
$lang['ionize_label_online'] =                             'Онлайн';
$lang['ionize_label_offline'] =                            'Офлайн';
$lang['ionize_label_set_offline'] =                        'Задайте Офлайн';
$lang['ionize_label_set_online'] =                         'Задайте Онлайн';
$lang['ionize_label_edit'] =                               'Редактирай';
$lang['ionize_label_delete'] =                             'Изтрий';
$lang['ionize_label_unlink'] =                             'Премахни връзката';
$lang['ionize_label_status'] =                             'Статус';
$lang['ionize_label_max_upload_size'] =	                   'Макс. качване';
$lang['ionize_label_file_uploads'] =                       'Качи ?';
$lang['ionize_label_site_email'] =                         'Емайл хост';
$lang['ionize_label_linkto'] =                             'Линк към...';
$lang['ionize_label_drop_link_here'] =                     'пуснете линка тук...';
$lang['ionize_label_drop_page_here'] =                     'пуснете страницата тук...';
$lang['ionize_label_drop_article_here'] =                  'пуснете статията тук...';
$lang['ionize_label_remove_link'] =                        'Изтрий линка';
$lang['ionize_label_url'] =                                'URL';
$lang['ionize_label_see_online'] =                         'Вижте онлайн';
$lang['ionize_label_flag'] =                               'Маркер';
$lang['ionize_label_flags'] =                              'Маркери';
$lang['ionize_label_edit_flags'] =                         'Редактирай на маркерите';

$lang['ionize_label_page'] =                               'Страница';
$lang['ionize_label_article'] =                            'Статия';
$lang['ionize_label_media'] =                              'Медиа';
$lang['ionize_label_users'] =                              'Потребители';
$lang['ionize_label_user'] =                               'Потребител';
$lang['ionize_label_table'] =                              'Таблица';

$lang['ionize_label_name'] =                               'Име';
$lang['ionize_label_id'] =                                 'ID';
$lang['ionize_label_parent'] =                             'Родител';
$lang['ionize_label_permanent_url'] =                      'Постоянно URL';
$lang['ionize_label_view'] =                               'Виж';
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

$lang['ionize_label_copy_to_other_languages'] =            'Копирай на други език';

$lang['ionize_help_status'] =                              'Ако сте влезли като администратор, ще видите този елемент на уеб сайта дори да не е онлайн';
$lang['ionize_help_online'] =                              'Is this element globally online?';//???????????????????
$lang['ionize_help_online_lang'] =                         'Is this translation online for this language?'; //???????????????????
$lang['ionize_help_publish_on'] =                          'Публикуване на елементите на тази дата и да се замени с показваната дата';
$lang['ionize_help_publish_off'] =                         'Непубликувани елемента на тази дата'; 
$lang['ionize_help_online_lang'] =                         'Искате ли да бъде видим за този език ?';
$lang['ionize_help_url'] =                                 'URL елемент'; 
$lang['ionize_help_flag'] =                                'An internal marked, just to be organized.';
$lang['ionize_help_flags'] =                               'Internal markers, just to be organized.';
$lang['ionize_help_help'] =                                'Показва помощ или пояснение като това, което в момента четете. Или не ..';
$lang['ionize_help_copy_to_other_languages'] =             'Копирай на други език';

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
$lang['ionize_button_ok'] =                                'ОК';
$lang['ionize_button_confirm'] =                           'Потвърди';
$lang['ionize_button_cancel'] =                            'Откажи';
$lang['ionize_button_add_page'] =                          'Добави страница';
$lang['ionize_button_switch_online'] =                     'Онлайн / Офлайн';
$lang['ionize_button_filter'] =                            'Филтър';

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
$lang['ionize_message_element_not_found'] =                'Този елемент не е намерен !';
$lang['ionize_confirm_element_delete'] =                   'Искате ли да изтриете този елемент ?';
$lang['ionize_message_missing_params'] =                   'Липсващи настройки';
$lang['ionize_message_operation_ok'] =                     'Действието е извършено';
$lang['ionize_message_operation_nok'] =                    'Действието е неуспешно';
$lang['ionize_message_delete_installer'] =                 'ВАЖНО : <br/>Поради причини за сигурност моля изтрийте <b>"/install"</b> папката. Ionize няма да бъде достъпен докато не бъде изтрита тази директория.';
$lang['ionize_message_no_circular_link'] =                 'Кръгли връзки не са позволени';       //?????????????????
$lang['ionize_message_target_link_not_unique'] =           'Елементът трябва да бъде уникален в списъка!';
$lang['button_delete_installer_done_admin'] =              'Готово! Отиди в Администрацията';
$lang['button_delete_installer_done_site'] =               'Готово! Отиди в сайта';
$lang['ionize_message_item_used_by_data_no_delete'] =      'Тази позиция се използва и не може да бъде изтрита';
$lang['ionize_message_url_not_found'] =                    'URL адреса не е намерен';
$lang['ionize_message_url_got_404'] =                      'Този адрес връша 404 грешка';

/*
|--------------------------------------------------------------------------
| Администрация : Език
|--------------------------------------------------------------------------
*/
$lang['ionize_label_copy_content'] =                       'Копирай съдържанието';
$lang['ionize_label_copy_all_content'] =                   'Копирай цялото съдържание';
$lang['ionize_label_copy_article_content'] =               'Включва статиите';
$lang['ionize_label_force_lang_urls'] =                    'Force lang in URLs'; //????????????????????
$lang['ionize_title_language'] =                           'Управление на езика';
$lang['ionize_title_existing_languages'] =                 'Съществуващ език';
$lang['ionize_title_add_language'] =                       'Добави език';
$lang['ionize_title_advanced_language'] =                  'Разширени функции';
$lang['ionize_title_lang_urls'] =                          'URL адреси и езици';
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
$lang['ionize_button_copy_content'] =                      'Копирай съдържанието';
$lang['ionize_help_clean_lang_tables'] =                   'Изтрий съдържанието на езиковите таблици чрез премахване на цялото съдържание за несъществуващи езици';
$lang['ionize_confirmation_clean_lang'] =                  'Цялото съдържание на не описан език ще бъде премахнато от езиковите таблици...';
$lang['ionize_message_lang_tables_cleaned'] =              'Съдържанието на таблиците е изчистено';
$lang['ionize_help_copy_content'] =                        'Copy the element content from one language to another. Copy of all content (titles, subtitle, content, etc.)';
$lang['ionize_help_copy_all_content'] =                    'Copy the whole website content from one language to another. Doesn\'t replace existing content';
$lang['ionize_help_copy_article_content'] =                'Also copy content for linked articles';
$lang['ionize_confirmation_clean_lang'] =                  'All the content of not defined language will be removed from lang tables...';
$lang['ionize_message_lang_tables_cleaned'] =              'Content tables cleaned';
$lang['ionize_message_article_content_copied'] =           'Article content copied';
$lang['ionize_message_source_destination_lang_not_different'] = 'Source and destination language must be different!';
$lang['ionize_message_page_content_copied'] =              'Page content copied';
$lang['ionize_message_page_article_content_copied'] =      'Page & articles content copied';
$lang['ionize_message_confirm_copy_whole_content'] =       'Do you really want to copy the whole content to this language?';
$lang['ionize_message_lang_content_copied'] =              'Lang content copy successful';

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
$lang['ionize_title_filter_userslist'] =                   'Филтър на списъка с потребители';

$lang['ionize_label_username'] =                           'Влез';
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
$lang['ionize_label_join_date'] =                          'Регистрация';
$lang['ionize_label_users_count'] =                        'Брой потребители';
$lang['ionize_label_all_groups'] =                         '-- Всички групи --';
$lang['ionize_label_last_registered'] =                    'Последно регистрирани';
$lang['ionize_label_users_per_page'] =                     'Потребители / страница';
$lang['ionize_label_filter_result'] =                      'Резултат от филтъра';

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
$lang['ionize_label_site_title'] =                         'Заглавие на сайта';
$lang['ionize_title_visual_help'] =                        'Visual help';
$lang['ionize_label_show_help_tips'] =                     'Покажи помощ в полето';
$lang['ionize_title_admin_panel_languages'] =              'Език на администрацията';
$lang['ionize_title_admin_panel_datetime'] =               'Дата и час';
$lang['ionize_label_display_connected_label'] =            'Свързани етикети';
$lang['ionize_help_display_connected_label'] =             'Показва етикет в горния ляв ъгъл на сайта, когато сте влезли в Админ панела';

$lang['ionize_onchange_ionize_settings'] =                 'Административния панел ще се презареди, след като запазите настройките.';

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
$lang['ionize_title_form_antispam_key'] =                  'Антиспам JS ключ';
$lang['ionize_title_article_management'] =                 'Управление на статии';
$lang['ionize_title_admin_url'] =                          'Административен адрес';

$lang['ionize_label_thumb_automatic'] =                    'Автоматичен';
$lang['ionize_label_files_path'] =                         'Папка за медиа';
$lang['ionize_label_media_type_picture'] =                 'Разширения на снимки';
$lang['ionize_label_media_type_video'] =                   'Разширения на видео';
$lang['ionize_label_media_type_music'] =                   'Разширения на музика';
$lang['ionize_label_media_type_file'] =	                   'Разширения на файлове';
$lang['ionize_label_filemanager'] =                        'Файлов мениджър';
$lang['ionize_label_theme'] =                              'Тема';
$lang['ionize_label_media_thumb_size'] =                   'Настройка на малки снимки';
$lang['ionize_label_theme_admin'] =                        'Админ тема';
$lang['ionize_label_db_driver'] =                          'Driver';
$lang['ionize_label_db_host'] =                            'Хост';
$lang['ionize_label_db_name'] =                            'База данни';
$lang['ionize_label_db_user'] =                            'Потребител';
$lang['ionize_label_db_pass'] =                            'Парола';
$lang['ionize_label_google_analytics'] =                   'Google Analytics';
$lang['ionize_label_tinybuttons'] =                        'TinyMCE';
$lang['ionize_label_restore_tinybuttons'] =                'Възстанови стандартните настройки на TinyMCE';

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
$lang['ionize_label_setting_picture_max_width'] =          'Снимки макс. Ширина';
$lang['ionize_label_setting_picture_max_height'] =         'Снимки макс. Височина';

$lang['ionize_onchange_filemanager'] =                     'You have to reload the admin panel (CTRL + R) after saving changes.';
$lang['ionize_onchange_texteditor'] =                      'You have to reload the admin panel (CTRL + R) after saving changes.';

$lang['ionize_label_current_antispam_key'] =               'Текущ ключ';
$lang['ionize_label_refresh_antispam_key'] =               'Презареди ключа';

$lang['ionize_label_texteditor'] =                         'Текстов редактор';

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

$lang['ionize_message_admin_url_error'] =                  'Адреса за администрацията не може да бъде празен и трябва да съдържа само букви.';
$lang['ionize_confirm_change_admin_url'] =                 'Не забравяйте да запомните новия адрес! След като запазите настройките, админ панела ще се презареди.';

$lang['ionize_message_error_no_files_path'] =              'Трябва да бъде зададена папка за медиа файлове!';
$lang['ionize_message_error_writing_file'] =               'Грешка в правата на файла';
$lang['ionize_message_error_writing_config_file'] =        'application/config/config.php няма права за писане !';
$lang['ionize_message_error_writing_medias_file'] =        'application/config/medias.php няма права за писане !';
$lang['ionize_message_error_writing_database_file'] =      'application/config/database.php няма права за писане !';
$lang['ionize_message_error_writing_email_file'] =         'application/config/email.php няма права за писане !';
$lang['ionize_message_error_writing_ionize_file'] =        'application/config/ionize.php няма права за писане !';

$lang['ionize_help_setting_google_analytics'] =            'Пълният Google скрипт, който копирате от сайта на Google Analytics';
$lang['ionize_help_setting_files_path'] =                  'Показва медиа папка. Не се променят физическите името на папката'; 
$lang['ionize_help_setting_system_thumb_list'] =           'Thumbnails displayed by ionize in image list and picture edit window'; //???
$lang['ionize_help_setting_media_type_picture'] =          'Файлови разширения, разделени със запетая';
$lang['ionize_help_setting_media_type_music'] =	           'Файлови разширения, разделени със запетая';
$lang['ionize_help_setting_media_type_video'] =	           'Файлови разширения, разделени със запетая';
$lang['ionize_help_setting_media_type_file'] =             'Файлови разширения, разделени със запетая';
$lang['ionize_help_media_thumb_size'] =                    'Размер на картинките е в пиксели';
$lang['ionize_help_tinybuttons'] =                         'Вижте TinyMCE документацията';
$lang['ionize_help_setting_picture_max_height'] =          'Picture which exceed these size will be resized during the Upload process.';
$lang['ionize_help_setting_picture_max_width'] =           'Picture which exceed these size will be resized during the Upload process.';

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
$lang['ionize_title_create_page'] =                        'Създай страница';
$lang['ionize_title_new_page'] =                           'Нова страница';
$lang['ionize_title_edit_page'] =                          'Промени страницата';
$lang['ionize_title_page_parent'] =                        'Родител';

$lang['ionize_title_help_articles_types'] =                'За типовете';

$lang['ionize_label_page_online'] =                        'Онлайн страница';
$lang['ionize_label_page_content_online'] =                'Онлайн за този език';
$lang['ionize_label_articles'] =                           'Статии';
$lang['ionize_label_add_article'] =                        'Добави статия';
$lang['ionize_label_appears'] =                            'Покажи в менюто';
$lang['ionize_label_link'] =                               'Линк';
$lang['ionize_label_pagination_nb'] =                      'Статии / страница';
$lang['ionize_label_article_list_template'] =              'Виж списъка';
$lang['ionize_label_page_delete_date'] =                   'Изтрита дата за страницата';
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
$lang['ionize_message_drop_only_article'] =                'Моля поставете само една статия!';

$lang['ionize_help_page_online'] =                         'Тази страница онлайн ли е?';
$lang['ionize_help_page_content_online'] =                 'Тази страницата трябва да е онлайн за този език?';
$lang['ionize_help_page_url'] =                            'Линка на страницата, трябва да бъде уникален';
$lang['ionize_help_page_link'] =                           'Internal or External HTTP link. Replace the default page link';  //?????????
$lang['ionize_help_pagination'] =                          'Ако > 0, активиране номерацията на страниците.';  //?????????
$lang['ionize_help_article_list_template'] =               'If more than 1 article on the page, use of this view to display each article';
$lang['ionize_help_appears'] =                             'Да се вижда ли тази страница в менюто ?';
$lang['ionize_help_page_meta'] =                           'Replace the global website META when not empty';   //?????????
$lang['ionize_help_page_window_title'] =                   'Заглавие на страницата';
$lang['ionize_help_home_page'] =                           'Тази страница главна ли е за сайта Ви ?';
$lang['ionize_help_add_page_to_menu'] =                    'Add a page to this menu';
$lang['ionize_help_page_drop_article_here'] =              'Drag an article from the left tree by selecting its name.';
$lang['ionize_label_help_articles_types_and_views'] =      'About Types & Views';
$lang['ionize_label_help_articles_types'] =                'About Types';

/*
|--------------------------------------------------------------------------
| Администрация : Медиа
|--------------------------------------------------------------------------
*/
$lang['ionize_title_medias'] =	                           'Медии';
$lang['ionize_title_thumbs_status'] =                      'Статус на малките снимки';
$lang['ionize_title_informations'] =                       'Информация';

$lang['ionize_label_file_size'] =                          'Размер на файла';
$lang['ionize_label_reload_picture_list'] =                'Презареди списъка';
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
$lang['ionize_label_media_container'] =                    'Албуми';

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
$lang['ionize_message_alt_desc_for_mp3'] =                 'Because this media is an MP3, the following <strong>Description</strong> and the <strong>Alternative text</strong> are generated from MP3 file\'s ID3 tags.';

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
$lang['ionize_select_no_parent'] =                         '-- Никой --';
$lang['ionize_select_no_category'] =                       '-- Никой --';

$lang['ionize_title_create_article'] =                     'Създай статия';
$lang['ionize_title_new_article'] =                        'Нова статия';
$lang['ionize_title_edit_article'] =                       'Промени статията';
$lang['ionize_title_comments'] =                           'Коментари';
$lang['ionize_title_duplicate_article'] =                  'Дублирай статия';
$lang['ionize_title_duplicate_source_context'] =           'Източник статия';
$lang['ionize_title_duplicate_destination'] =              'Дестинация';

$lang['ionize_title_article_context'] =                    'Контекст на статия';
$lang['ionize_title_content'] =                            'Съдържание';
$lang['ionize_label_article_in'] =                         'В';
$lang['ionize_label_article_online'] =                     'Онлайн статия';
$lang['ionize_label_article_content_online'] =             'Онлайн съдържание';
$lang['ionize_label_parents'] =                            'Родител';
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
$lang['ionize_label_content_for_lang'] =                   'Съдържание';
$lang['ionize_label_online_for_lang'] =                    'Онлайн';
$lang['ionize_label_actions'] =                            'Действие';
$lang['ionize_label_pages'] =                              'Страници';
$lang['ionize_label_drag_to_page'] =                       'Плъзнете към страница';
$lang['ionize_label_article_edit_context'] =               'Настройки';
$lang['ionize_label_article_filter'] =                     'Филтър';
$lang['ionize_label_article_context_edition'] =            'Editing context';

$lang['ionize_message_article_not_saved'] =                'Статията не запазена : Липсващи данни';
$lang['ionize_message_article_saved'] =	                   'Статията е запазена';
$lang['ionize_message_article_name_exists'] =              'Статия със същото име вече съществува!';
$lang['ionize_message_article_url_exists'] =               'Статия със същото URL вече съществува!';
$lang['ionize_message_article_ordered'] =                  'Article ordored';                            //????????
$lang['ionize_message_article_duplicate_no_name_change'] = 'Дублираната статия трябва да има друго име за автор!';
$lang['ionize_message_article_duplicated'] =               'Статията е дублирана';
$lang['ionize_message_article_not_duplicated'] =           'Статията не е дублирана';
$lang['ionize_message_article_needs_url_or_title'] =       'Моля въведете заглавие или URL на езика по подразбиране !';
$lang['ionize_message_drop_only_page'] =                   'Моля плъзнете само страница!';
$lang['ionize_message_parent_page_unlinked'] =             'Страниците и статиите, успешно са премахнати линковете';
$lang['ionize_confirm_article_page_unlink'] =              'Премахни линка на тази страница от статията ?';
$lang['ionize_message_article_already_linked_to_page'] =   'Статията вече е свързана към страница';
$lang['ionize_message_article_linked_to_page'] =           'Статията е свързана със страницата';
$lang['ionize_message_article_context_saved'] =            'Настройките на статиите са запазени';
$lang['ionize_message_article_lang_copied'] =              'Lang data copied. Save please !';

// Inline help
$lang['ionize_help_article_online'] =                      'Тази статията онлайн ли е?';
$lang['ionize_help_article_content_online'] =              'Това съдържание онлайн ли е?';
$lang['ionize_help_indexed'] =	                           'Ако избрете тази опция пълния текст на статията ще бъде индексиран (за търсещи машини)';
$lang['ionize_help_article_link'] =	                       'HTTP линк. Може да се използва за връзка с етикета';
$lang['ionize_help_articles_types'] =                      'Вид статия. Полезно за разграничаване на статиите в страниците';
$lang['ionize_help_article_window_title'] =	               'Заглавие на страницата';
$lang['ionize_help_article_context'] =                     'Edit the article\'s page context data';
$lang['ionize_help_missing_translated_content'] =          'Some language content translation is missing';
$lang['ionize_help_orphan_article'] =                      'Orphan article. Not linked to any page.';
$lang['ionize_help_article_filter'] =                      'Filter articles (not fully implemented)';

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
$lang['ionize_title_types_exist'] =                        'Съществуващи типове';
$lang['ionize_title_type_new'] =                           'Нови типове';
$lang['ionize_title_type_edit'] =                          'Редактиране типа на статията';
$lang['ionize_title_extend_table_field'] =                 'Table field';

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
$lang['ionize_label_field_length'] =                       'Дължина';
$lang['ionize_label_field_auto_increment'] =               'Автоматично увеличение';
$lang['ionize_label_field_null'] =                         'NULL ?';
$lang['ionize_label_field_unsigned'] =                     'Неподписан';

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
$lang['ionize_label_add_field'] =                          'Добави област';
$lang['ionize_label_extend_field_for_all'] =               'Universal';
$lang['ionize_label_extend_field_for_pages'] =             'Pages';
$lang['ionize_label_extend_field_for_articles'] =          'Articles';
$lang['ionize_label_extend_field_for_medias'] =            'Medias';
$lang['ionize_label_extend_field_parent'] =                'Parent';
$lang['ionize_label_extend_field_global'] =                'Global';

$lang['ionize_title_extend_field_new'] =                   'Ново разширено поле';
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
$lang['ionize_message_field_must_have_a_name'] =           'Полето трябва да има име';
$lang['ionize_message_varchar_int_must_have_length'] =     'VARCHAR или INT поле трябва да е по-дълго';
$lang['ionize_message_field_name_sql_reserved'] =          'Името на полето е запазена дума от SQL. Моля променето го.';

$lang['ionize_help_ef_parent'] =                           'Limit this extend field to a kind of parent or not';
$lang['ionize_help_ef_global'] =                           'Is the extend field always visible for each element ?';
$lang['ionize_help_ef_name'] =                             'Key to use with the field tag';                     //???????
$lang['ionize_help_ef_values'] =                           'key:value, separated by a line break';             //???????
$lang['ionize_help_ef_default_value'] =                    'Ако изберете радио бутона или отметка, поставете вашия ключ';
$lang['ionize_help_ef_description'] =                      'Покажи помощ за потребителя в тази област';           //???????
$lang['ionize_help_label_label'] =                         'Покажи етикета на тази област в Ionize';
$lang['ionize_help_field_length'] =                        'Дължина на полето';

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
$lang['ionize_label_add_translation'] =                    'Добави превод';
$lang['ionize_message_delete_translation'] =               'Изтрийте този превод?';

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
$lang['ionize_label_database_tables'] =                    'SQL';

$lang['ionize_message_module_install_error_no_config'] =   'Грешка : Модул без config.xml';
$lang['ionize_message_module_install_error_config_write'] = 'Грешка в : application/config/modules.php';
$lang['ionize_message_module_page_conflict'] =             'Грешка : URL-то си противоречи с вече съществуваща страница';
$lang['ionize_message_module_install_database_error'] =    'Грешка : Невъзможно е да инсталирате модула';
$lang['ionize_message_module_saved'] =                     'Модула е инсталиран';
$lang['ionize_message_module_uninstalled'] =               'Модула е деинсталиран';
$lang['ionize_message_module_not_installed'] =             'Модула не е инсталиран !';

/* Край на admin_lang.php */
/* Намира се: ./application/language/bg/admin_lang.php */