<?php

/*
|--------------------------------------------------------------------------
|
| Превод на инсталацията 
|
| Език : 	    Български
| Преводач :	Милен Александров
| Линк :        http://www.TheMHouse.In
| Дата :        Събота, 9-ти Окт 2010
|
|--------------------------------------------------------------------------
*/

$lang = array();


/*
|--------------------------------------------------------------------------
| Общи данни 
|--------------------------------------------------------------------------
*/
$lang['title_ionize_installation'] = 		        'Инсталация';
 
$lang['title_system_check'] = 		                'Резултат от проверка на системата';
$lang['title_database_settings'] = 	                'Настройки на базата данни';
$lang['title_user_account'] = 	                    'Администраторски акаунт';
$lang['title_default_language'] = 	                'Език по подразбиране';
$lang['title_sample_data'] = 	                    'Инсталирай примерен сайт?';
 
$lang['button_next_step'] = 		                'Следваща стъпка';
$lang['button_skip_next_step'] = 	                'Пропусни & Следваща стъпка';
$lang['button_save_next_step'] = 	                'Запази & Към следващата стъпка';
$lang['button_install_test_data'] = 	            "Инсталирай тестова информация";
$lang['button_start_migrate'] = 		            'Стартирай миграция на базата данни';

$lang['nav_check'] =                                'Проверка';
$lang['nav_db'] =                                   'База данни';
$lang['nav_settings'] =                             'Настройки';
$lang['nav_end'] =                                  'Край';


/*
|--------------------------------------------------------------------------
| Проверка
|--------------------------------------------------------------------------
*/
$lang['php_version'] = 			                    'PHP >= 5';
$lang['php_version_found'] = 	                    'PHP версия';
$lang['mysql_support'] = 		                    'MySQL подръжка';
$lang['mysql_version_found'] = 	                    'MySQL версия';
$lang['file_uploads'] = 		                    'Качване на файлове';
$lang['mcrypt'] = 				                    'PHP Mcrypt Lib';
$lang['gd_lib'] = 				                    'PHP GD Lib';
$lang['write_config_dir'] = 	                    '<b>/application/config/</b>';
$lang['write_files'] = 			                    '<b>/files/</b>';
$lang['config_check_errors'] = 	                    'Някой настройки не са коректни.<br/>Моля коригирайте и продължете инсталацията.';
$lang['welcome_text'] = 		                    "<p>Добре дошли в света на Ionize!<br/>Тези стъпки ще ти помогнат да инсталираш Ionize.</p>";
$lang['write_check_text'] = 	                    "<p>Следните файлове и папки нямат права...</p>";
$lang['system_check_text'] =                        "<p>Ionize изисква всички настройки да бъдат ОК.</p>";
 

/*
|--------------------------------------------------------------------------
| База данни 
|--------------------------------------------------------------------------
*/
$lang['database_driver'] = 			                'Driver';
$lang['database_hostname'] = 		                'Име на хоста';
$lang['database_name'] = 			                'База данни';
$lang['database_username'] = 		                'Потребител';
$lang['database_password'] = 		                'Парола';
$lang['database_create'] = 			                'Създай база данни';
$lang['title_database_create'] = 	                'Базата е създадена';
$lang['db_create_text'] = 			                "<p>Желаете да мигрирате или инсталирате нова база данни:</p><p><b class=\"highlight\">Нова инсталация</b> : Базата данни и таблиците са създадени<br/><b class=\"highlight2\">Ъпгрейд</b> : Следващата стъпка ще провери дали е нужен ъпгрейд</p>";
$lang['db_create_prerequisite'] = 			        "Потребителят трябва да има права да създаде база данни.<br/>Ако вашата база данни вече съществува, не я проверявайте.";
$lang['database_error_missing_settings'] = 	        'Част от информацията липсва.<br/>Моля, попълнете всички полета !';
$lang['database_success_install'] = 		        '<b class="ex">Базата от данни беше успешно инсталирана.</b>';
$lang['database_success_install_no_settings_needed'] = 		'<b class="ex">Базата данни е OK.</b><br/>Тъй като базата данни вече съществува, стъпките с настройките на сайта ще бъдат пропуснати.';
$lang['database_success_migrate'] = 		        '<b class="ex">Базата от данни беше успешно обновена.</b>';
$lang['database_error_coud_not_connect'] = 		    'Връзката към базата данни е неуспешна с тези настройки';
$lang['database_error_database_dont_exists'] = 		"Базата данни не съществува !";
$lang['database_error_writing_config_file'] = 		"<b>Грешка :</b><br/>Файла <b style=\"color:#000;\">/application/config/database.php</b> няма права!<br/>Проверете вашите права.";
$lang['database_error_coud_not_write_database'] = 	"<b>Грешка :</b><br/> Невъзможно е да се запишат данни в базата данни.<br/>Проверете правата на базата данни.";
$lang['database_error_coud_not_create_database'] =  "Инсталаторът не може да създаде база данни. Проверете базата данни има ли права.";
$lang['database_error_no_ionize_tables'] = 			"Базата данни която сте избрали не е база данни на Ionize. Моля, проверете отново.";
$lang['database_error_no_users_to_migrate'] = 		"To user account to upgrade";

$lang['database_migration_from_090'] = 			    'Тази база данни има нужда от ъпгрейд.<br/>Обновяване към версия : <b class="highlight2">0.90</b>';
$lang['database_migration_from_092'] = 			    'Тази база данни има нужда от ъпгрейд.<br/>Обновяване към версия : <b class="highlight2">0.92</b>';
$lang['database_migration_from_093'] = 			    'Тази база данни има нужда от ъпгрейд.<br/>Обновяване към версия : <b class="highlight2">0.93</b>';
$lang['database_migration_from_094'] = 			    'Тази база данни има нужда от ъпгрейд.<br/>Обновяване към версия : <b class="highlight2">0.9.4</b>';

$lang['database_migration_text'] = 		             "<p class=\"error\"><b>СЪОБЩЕНИЕ :</b><br/> Базата данни ще бъде обновена.<b><br/>Моля направете бекъп на базата данни преди ъпгрейда.</p>";


/*
|--------------------------------------------------------------------------
| Настройки
|--------------------------------------------------------------------------
*/
$lang['lang_code'] = 		                        'Код (2 символа)';
$lang['lang_name'] = 		                        'Име';
$lang['settings_default_lang_title'] = 		        'Език по подразбиране';
$lang['settings_default_lang_text'] = 		        'Вашият сайт се нуждае от език по подразбиране.<br/>Можете да посетите <a target="_blank" href="http://en.wikipedia.org/wiki/ISO_639-1">Wikipedia ISO 639-1 page</a> за повече информация за езиковите кодове.';
$lang['settings_error_missing_lang_code'] =         "Езиковия код е задължителен";
$lang['settings_error_missing_lang_name'] =         "Езиковия код е задължителен";
$lang['settings_error_lang_code_2_chars'] =         "Езиковия код трябва да е 2 символа. Пример : \"bg\"";
$lang['settings_error_write_rights'] =              "Няма права върху <b>/application/config/laguage.php</b>. Моля проверете дали този файл има права.";
$lang['settings_error_write_rights_config'] =       "Няма права върху <b>/application/config/config.php</b>. Моля проверете дали този файл има права.";


/*
|--------------------------------------------------------------------------
| Потребител 
|--------------------------------------------------------------------------
*/
$lang['user_introduction'] = 	                    'Вие ще се свържете към административния панел със следните данни.';
$lang['username'] = 			                    'Потребител (мин. 4 сим)';
$lang['screen_name'] = 			                    'Пълно име';
$lang['email'] = 				                    'Емайл';
$lang['password'] = 			                    'Парола (мин. 4 сим)';
$lang['password2'] = 			                    'Потвърди паролата';
$lang['user_error_missing_settings'] = 			    'Моля, попълнете всички полета !';
$lang['user_error_not_enough_char'] = 			    'Потребителя и паролата трябва да бъдат най-малко 4 символа!';
$lang['user_error_email_not_valid'] = 			    'Емйла не е валиден. Моля коригирайте го.';
$lang['user_error_passwords_not_equal'] = 		    'Паролата и паролата за потвърждение не са правилни. ';
$lang['user_info_admin_exists'] = 		            'Този потребител вече съществува в базата данни.<br/>Можете да пропуснете тази стъпка, ако не желаете да създавате или актуализирате администраторския профил.';
$lang['encryption_key'] = 			                'Ключ';
$lang['encryption_key_text'] = 		                "Ionize се нуждае от 128 bits ключ.<br />
									                 Този код ще кодира вашия потребителски профил и всички данни. <br/>
									                 Ще бъде записан в <b>/application/config/config.php</b> файл.";
$lang['no_encryption_key_found'] = 	                 "Ключът за шифроване не е намерен. Потребителския акаунт не е мигриран. <b>Необходимо е да създадете нов потребител</b>.";


/*
|--------------------------------------------------------------------------
| Примерни данни 
|--------------------------------------------------------------------------
*/
$lang['data_install_intro'] = 	                    "Ако за първи път използвате Ionize, необходимо е да инсталирате примерни данни.<br/>
								                     Тези данни включват : ";
$lang['data_install_list'] = 	                    "<li>Пълния комплект на базата данни, нужни да тествате Ionize,</li>
								                     <li>1 примерна тема</li>";
$lang['title_skip_this_step'] = 	                "Пропусни тази стъпка";


/*
|--------------------------------------------------------------------------
| Край на инсталацията
|--------------------------------------------------------------------------
*/
$lang['title_finish'] = 		                    'Инсталацията е завършена';
$lang['finish_text'] = 			                    '<b>ВАЖНО</b>: <br/>Необходимо е да изтриете "<b>/install</b>" папката ръчно преди да влезете в сайта или администрацията.';
$lang['button_go_to_admin'] = 	                    'Отиди в администрацията';
$lang['button_go_to_site'] = 	                    'Отиди в сайта';
