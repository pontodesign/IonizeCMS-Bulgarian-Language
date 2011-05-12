<?php

/*
|---------------------------------------------------------------------------
| ������ ���� �� Ionize
|---------------------------------------------------------------------------
|
| ���� :       ���������
| �������� :   ����� �����������
| ���� :       http://www.TheMHouse.In
| ���� :       ���������, 12-�� ����� 2011
|
|---------------------------------------------------------------------------
*/

$lang = array();

/*
|--------------------------------------------------------------------------
| ���� ����� 
|--------------------------------------------------------------------------
*/
$lang['title_ionize_installation'] = 		        '����������';
 
$lang['title_system_check'] = 		                '�������� �� �������� �� ���������';
$lang['title_database_settings'] = 	                '��������� �� ������ �����';
$lang['title_user_account'] = 	                    '���������������� ������';
$lang['title_sample_data'] = 	                    '���������� �������� ����?';
 
$lang['button_next_step'] = 		                '�������� ������';
$lang['button_skip_next_step'] = 	                '�������� & �������� ������';
$lang['button_save_next_step'] = 	                '������ & ��� ���������� ������';
$lang['button_install_test_data'] = 	            "���������� ������� ����������";
$lang['button_start_migrate'] = 		            '��������� �������� �� ������ �����';

$lang['nav_check'] =                                '��������';
$lang['nav_db'] =                                   '���� �����';
$lang['nav_settings'] =                             '���������';
$lang['nav_end'] =                                  '����';

/*
|--------------------------------------------------------------------------
| ��������
|--------------------------------------------------------------------------
*/
$lang['php_version'] = 			                    'PHP >= 5';
$lang['php_version_found'] = 	                    'PHP ������';
$lang['mysql_support'] = 		                    'MySQL ��������';
$lang['mysql_version_found'] = 	                    'MySQL ������';
$lang['file_uploads'] = 		                    '������� �� �������';
$lang['mcrypt'] = 				                    'PHP Mcrypt Lib';
$lang['gd_lib'] = 				                    'PHP GD Lib';
$lang['write_config_dir'] = 	                    '<b>/application/config/</b>';
$lang['write_files'] = 			                    '<b>/files/</b>';
$lang['config_check_errors'] = 	                    '����� ��������� �� �� ��������.<br/>���� ����������� � ���������� ������������.';
$lang['welcome_text'] = 		                    "<p>����� ����� � IonizeCMS!<br/>���� ������ �� �� �������� �� ���������� Ionize.</p>";
$lang['write_check_text'] = 	                    "<p>�������� ������� � ����� ����� �����...</p>";
$lang['system_check_text'] =                        "<p>Ionize ������� ������ ��������� �� ����� ��.</p>";

/*
|--------------------------------------------------------------------------
| ���� ����� 
|--------------------------------------------------------------------------
*/
$lang['database_driver'] = 			                'Driver';
$lang['database_hostname'] = 		                '��� �� �����';
$lang['database_name'] = 			                '���� �����';
$lang['database_username'] = 		                '����������';
$lang['database_password'] = 		                '������';
$lang['database_create'] = 			                '������ ���� �����';
$lang['title_database_create'] = 	                '������ � ���������';
$lang['db_create_text'] = 			                "<p>������� �� ��������� ��� ����������� ���� ���� �����:</p><p><b class=\"highlight\">���� ����������</b> : ������ ����� � ��������� �� ���������<br/><b class=\"highlight2\">�������</b> : ���������� ������ �� ������� ���� � ����� �������</p>";
$lang['db_create_prerequisite'] = 			        "������������ ������ �� ��� ����� �� ������� ���� �����.<br/>��� ������ ���� ����� ���� ����������, �� � ������������.";
$lang['database_error_missing_settings'] = 	        '���� �� ������������ ������.<br/>����, ��������� ������ ������ !';
$lang['database_success_install'] = 		        '<b class="ex">������ �� ����� ���� ������� �����������.</b>';
$lang['database_success_install_no_settings_needed'] = 		'<b class="ex">������ ����� � OK.</b><br/>��� ���� ������ ����� ���� ����������, �������� � ����������� �� ����� �� ����� ����������.';
$lang['database_success_migrate'] = 		        '<b class="ex">������ �� ����� ���� ������� ��������.</b>';
$lang['database_error_coud_not_connect'] = 		    '�������� ��� ������ ����� � ��������� � ���� ���������';
$lang['database_error_database_dont_exists'] = 		"������ ����� �� ���������� !";
$lang['database_error_writing_config_file'] = 		"<b>������ :</b><br/>����� <b style=\"color:#000;\">/application/config/database.php</b> ���� �����!<br/>��������� ������ �����.";
$lang['database_error_coud_not_write_database'] = 	"<b>������ :</b><br/> ���������� � �� �� ������� ����� � ������ �����.<br/>��������� ������� �� ������ �����.";
$lang['database_error_coud_not_create_database'] =  "������������ �� ���� �� ������� ���� �����. ��������� ������ ����� ��� �� �����.";
$lang['database_error_no_ionize_tables'] = 			"������ ����� ����� ��� ������� �� � ���� ����� �� Ionize. ����, ��������� ������.";
$lang['database_error_no_users_to_migrate'] = 		"To user account to upgrade";

$lang['database_migration_from'] = 			        '���� ���� ����� ��� ����� �� �������.<br/>���������� ��� ������ : ';

$lang['database_migration_text'] = 		             "<p class=\"error\"><b>��������� :</b><br/> ������ ����� �� ���� ��������.<b><br/>���� ��������� ����� �� ������ ����� ����� ��������.</p>"; 
 
/*
|--------------------------------------------------------------------------
| ���������
|--------------------------------------------------------------------------
*/
$lang['lang_code'] = 		                        '��� (2 �������)';
$lang['lang_name'] = 		                        '���';
$lang['settings_default_lang_title'] = 		        '���� �� ������������';
$lang['settings_default_lang_text'] = 		        '������ ���� �� ������ �� ���� �� ������������.<br/>������ �� �������� <a target="_blank" href="http://en.wikipedia.org/wiki/ISO_639-1">Wikipedia ISO 639-1 page</a> �� ������ ���������� �� ��������� ������.';
$lang['settings_error_missing_lang_code'] =         "�������� ��� � ������������";
$lang['settings_error_missing_lang_name'] =         "�������� ��� � ������������";
$lang['settings_error_lang_code_2_chars'] =         "�������� ��� ������ �� � 2 �������. ������ : \"bg\"";
$lang['settings_error_write_rights'] =              "���� ����� ����� <b>/application/config/laguage.php</b>. ���� ��������� ���� ���� ���� ��� �����.";
$lang['settings_error_write_rights_config'] =       "���� ����� ����� <b>/application/config/config.php</b>. ���� ��������� ���� ���� ���� ��� �����.";
$lang['settings_error_admin_url'] =                 "����� URL ������ ������ �� ���� ���� �� �����, ��� ������ ���� ��� ��������� �������";
$lang['settings_admin_url_title'] = 		        '��������������� ����� URL';
$lang['settings_admin_url_text'] = 		            '����� �� ������������ �� ������� ���� ����� � ��-������������.';
$lang['admin_url'] =                                '����� URL';

/*
|--------------------------------------------------------------------------
| ���������� 
|--------------------------------------------------------------------------
*/
$lang['user_introduction'] = 	                    '��� �� �� �������� ��� ���������������� ����� ��� �������� �����.';
$lang['username'] = 			                    '���������� (���. 4 ���)';
$lang['screen_name'] = 			                    '����� ���';
$lang['email'] = 				                    '�����';
$lang['password'] = 			                    '������ (���. 4 ���)';
$lang['password2'] = 			                    '�������� ��������';
$lang['user_error_missing_settings'] = 			    '����, ��������� ������ ������ !';
$lang['user_error_not_enough_char'] = 			    '����������� � �������� ������ �� ����� ���-����� 4 �������!';
$lang['user_error_email_not_valid'] = 			    '����� �� � �������. ���� ����������� ��.';
$lang['user_error_passwords_not_equal'] = 		    '�������� � �������� �� ������������ �� �� ��������. ';
$lang['user_info_admin_exists'] = 		            '���� ���������� ���� ���������� � ������ �����.<br/>������ �� ���������� ���� ������, ��� �� ������� �� ��������� ��� ������������� ����������������� ������.';
$lang['encryption_key'] = 			                '����';
$lang['encryption_key_text'] = 		                "Ionize �� ������ �� 128 bits ����.<br />
									                 ���� ��� �� ������ ����� ������������� ������ � ������ �����. <br/>
									                 �� ���� ������� � <b>/application/config/config.php</b> ����.";
$lang['no_encryption_key_found'] = 	                 "������ �� ��������� �� � �������. �������������� ������ �� � ��������. <b>���������� � �� ��������� ��� ����������</b>.";

/*
|--------------------------------------------------------------------------
| �������� ����� 
|--------------------------------------------------------------------------
*/
$lang['data_install_intro'] = 	                    "��� �� ����� ��� ���������� Ionize, ���������� � �� ����������� �������� �����.<br/>
								                     ���� ����� �������� : ";
$lang['data_install_list'] = 	                    "<li>������ �������� �� ������ �����, ����� �� �������� Ionize,</li>
								                     <li>1 �������� ����</li>";
$lang['title_skip_this_step'] = 	                "�������� ���� ������";

/*
|--------------------------------------------------------------------------
| ���� �� ������������
|--------------------------------------------------------------------------
*/
$lang['title_finish'] = 		                    '������������ � ���������';
$lang['finish_text'] = 			                    '<b>�����</b>: <br/>���������� � �� �������� "<b>/install</b>" ������� ����� ����� �� ������� � ����� ��� ���������������.';
$lang['button_go_to_admin'] = 	                    '����� � ���������������';
$lang['button_go_to_site'] = 	                    '����� � �����';

/* ���� �� install_lang.php */
/* ������ ��: ./install/language/bg/isntall_lang.php */