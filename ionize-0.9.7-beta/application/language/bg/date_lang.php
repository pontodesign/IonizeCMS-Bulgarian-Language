<?php

/*
|---------------------------------------------------------------------------
| Езиков файл на Ionize
| --------------------------------------------------------------------------
|
| Език :       Български
| Преводач :   Милен Александров
| Линк :       http://www.TheMHouse.In
| Дата :       Четвъртък, 12-ти Април 2011
|
|---------------------------------------------------------------------------
|
| Date format, translated
| To use with the a date field through tags
| This format uses days and months translation like defined in this file, if the PHP date format code is used.
|
| 
|  Example of usage : 
|  		$lang['dateformat_short'] = 'd m Y';	View call : <ion:date format="short" />		Output : 15 01 2011
|  		$lang['dateformat_medium'] = 'd M Y'; 	View call : <ion:date format="medium" />	Output : 15 jan 2011
|  		$lang['dateformat_long'] = 'l F d Y';	View call : <ion:date format="long" />		Output : saturday january 15 2011
| 
|  You can create your own format and call it in views :
| 		$lang['dateformat_complete'] = 'l F d Y H:i:s';		
|        View call : <ion:date format="complete" />	Output : saturday january 15 2011 20:54:21
|
|---------------------------------------------------------------------------
| 
 */
 
$lang['dateformat_short'] = 'm d Y';
$lang['dateformat_medium'] = 'M d Y';
$lang['dateformat_long'] = 'F d Y';

$lang['dateformat_complete'] = 'l d F Y \a\t H\hi';

/* 
| 
|  PHP day date format 'D' translations
|  Lowercase. For other day date format (Ucase, etc.) use the "manip" tag attribute
|  Ex : <articles:date format="D" manip="ucase" />
| 
 */

$lang['mon'] = 'пон';
$lang['tue'] = 'вто';
$lang['wed'] = 'сря';
$lang['thu'] = 'чет';
$lang['fri'] = 'пет';
$lang['sat'] = 'съб';
$lang['sun'] = 'нед';

/*
|  
|  PHP day date format 'l' translations
| 
 */

$lang['monday'] =    'понеделник';
$lang['tuesday'] =   'вторник';
$lang['wednesday'] = 'сряда';
$lang['thursday'] =  'четвъртък';
$lang['friday'] =    'петък';
$lang['saturday'] =  'събота';
$lang['sunday'] =    'неделя';

/*
|  
| PHP month date format 'M' translations
| 
 */
$lang['jan'] = 'яну';
$lang['feb'] = 'фер';
$lang['mar'] = 'мар';
$lang['apr'] = 'апр';
$lang['may'] = 'май';
$lang['jun'] = 'юни';
$lang['jul'] = 'юли';
$lang['aug'] = 'авг';
$lang['sep'] = 'сеп';
$lang['oct'] = 'окт';
$lang['nov'] = 'ное';
$lang['dec'] = 'дек';

/* 
| 
| PHP month date format 'F' translations
| 
 */
 
$lang['january'] =   'януари';
$lang['february'] =  'февруари';
$lang['march'] =     'март';
$lang['april'] =     'април';
$lang['may'] =       'май';
$lang['june'] =      'юни';
$lang['july'] =      'юли';
$lang['august'] =    'август';
$lang['september'] = 'септември';
$lang['october'] =   'октомври';
$lang['november'] =  'ноември';
$lang['december'] =  'декември'; 

/* Край на date_lang.php */
/* Намира се: ./application/language/bg/date_lang.php */

?>