<?php
/**
 *    This file is part of OXID eShop Community Edition.
 *
 *    OXID eShop Community Edition is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    OXID eShop Community Edition is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @package   lang
 * @copyright (C) OXID eSales AG 2003-2016
 * @version OXID eShop CE
 * @translators: ascheider (10), asot (4), compisat (26), cyberkatze (8), ET (10), ilya (1095), mantgomery (2), marco (1337), muslimukas (4), Natalia I (244), pianoservis (334), riefi (9), savisko (18), unicum (35), usmaxx (23), vanilla thunder (49), vlad13 (1)
 */

$sLangName  = 'Русский';

// -------------------------------
// RESOURCE IDENTIFIER = STRING
// -------------------------------
$aLang = array(
'charset' => 'utf-8',
'ATTENTION' => 'Пожалуйста, обратите внимание',
'BUTTON_BEGIN_INSTALL' => 'Начать установку',
'BUTTON_DB_INSTALL' => 'Создать базу данных сейчас',
'BUTTON_LICENCE' => 'Дальше',
'BUTTON_PROCEED_INSTALL' => 'Начать установку',
'BUTTON_RADIO_INSTALL_DB_DEMO' => 'Установить демо-данные',
'BUTTON_RADIO_LICENCE_ACCEPT' => 'Я <strong>принимаю</strong> условия лицензионного соглашения.',
'BUTTON_RADIO_LICENCE_NOT_ACCEPT' => 'Я <strong>не принимаю</strong> условия лицензионного соглашения.',
'BUTTON_RADIO_NOT_INSTALL_DB_DEMO' => '<strong>Не</strong> установить демо-данные',
'BUTTON_START_INSTALL' => 'Снова начать установку',
'BUTTON_WRITE_DATA' => 'Сохранить базу данных сейчас',
'BUTTON_WRITE_LICENCE' => 'Сохранить лицензионный ключ',
'ERROR_BAD_DEMODATA' => 'ОШИБКА: проблема со следующей SQL-командой:',
'ERROR_BAD_SERIAL_NUMBER' => 'ОШИБКА: серийный номер неверный!',
'ERROR_BAD_SQL' => 'ОШИБКА: (таблицы) проблемы со следующими SQL-командами:',
'ERROR_CONFIG_FILE_IS_NOT_WRITABLE' => 'ОШИБКА: %s/config.inc.php невозможно редактировать!',
'ERROR_COULD_NOT_CREATE_DB' => 'ОШИБКА: база данный %s не существует, также ее невозможно создать!',
'ERROR_COULD_NOT_FIND_FILE' => 'Установщик не смог найти файл "%s"',
'ERROR_COULD_NOT_OPEN_CONFIG_FILE' => 'Невозможно открыть config.inc.php. Пожалуйста, прочтите FAQ или форум или свяжитесь со службой поддержки OXID.',
'ERROR_COULD_NOT_READ_FILE' => 'Установщик не смог открыть файл "%s"!',
'ERROR_COULD_NOT_WRITE_TO_FILE' => 'Установщик не смог отредактировать файл "%s"!',
'ERROR_DB_ALREADY_EXISTS' => 'ОШИБКА: возможно в базе данных уже существует база данных OXID. Пожалуйста, удалите ее.',
'ERROR_DB_CONNECT' => 'ОШИБКА: невозможно соединиться с базой данных!',
'ERROR_FILL_ALL_FIELDS' => 'ОШИБКА: пожалуйста, заполните все обязательные поля!',
'ERROR_MYSQL_VERSION_DOES_NOT_FIT_REQUIREMENTS' => 'Версия MySQL не соответствует системным требованиям.',
'ERROR_NOT_AVAILABLE' => 'ОШИБКА: %s не существует!',
'ERROR_NOT_WRITABLE' => 'ОШИБКА: %s невозможно редактировать!',
'ERROR_OPENING_SQL_FILE' => 'ОШИБКА: невозможно открыть SQL-файл %s!',
'ERROR_PASSWORDS_DO_NOT_MATCH' => 'Пароли не совпадают',
'ERROR_PASSWORD_TOO_SHORT' => 'Пароль слишком короткий',
'ERROR_SETUP_CANCELLED' => 'Установка прервана, так как Вы не согласились с условиями лицензионного соглашения.',
'ERROR_USER_NAME_DOES_NOT_MATCH_PATTERN' => 'Пожалуйста, укажите существующий e-mail!',
'ERROR_VIEWS_CANT_CREATE' => 'ОШИБКА: невозможно создать Views. Пожалуйста, проверьте Ваши права пользователя для базы данных.',
'ERROR_VIEWS_CANT_DROP' => 'ОШИБКА: невозможно удалить Views. Пожалуйста, проверьте Ваши права пользователя для базы данных.',
'ERROR_VIEWS_CANT_SELECT' => 'ОШИБКА: нет доступа к Views. Пожалуйста, проверьте Ваши права пользователя для базы данных.',
'FOOTER_OXID_ESALES' => '© OXID eSales AG 2003 - Y',
'HEADER_META_MAIN_TITLE' => 'OXID eShop Мастер установки',
'HEADER_TEXT_SETUP_NOT_RUNS_AUTOMATICLY' => 'Если установка не начнется через несколько секунд, пожалуйста нажмите',
'HERE' => 'здесь',
'LOAD_DYN_CONTENT_NOTICE' => 'Если флажок установлен, вы увидите дополнительное меню в админке вашего OXID eShop.</р><р>В этом меню вы получите дополнительную информацию о электронной коммерции сервисов, таких как Google поиск товара.</р> <р>Вы можете изменить эти настройки в любое время.',
'MOD_ALLOW_URL_FOPEN' => 'allow_url_fopen or fsockopen to port 80',
'MOD_BC_MATH' => 'BCMath',
'MOD_BUG53632' => 'Возможные проблемы на сервере из-за ошибок PHP',
'MOD_CURL' => 'cURL',
'MOD_FILE_UPLOADS' => 'Загрузка файлов включена (file_uploads)',
'MOD_GD_INFO' => 'GDlib v2 [v1] вкл. поддержку JPEG',
'MOD_INI_SET' => 'ini_set разрешено',
'MOD_I_CONV' => 'ICONV',
'MOD_J_SON' => 'JSON',
'MOD_LIB_XML2' => 'LIB XML2',
'MOD_MB_STRING' => 'mbstring',
'MOD_MOD_REWRITE' => 'Модуль mod_rewrite Apache',
'MOD_MYSQL_CONNECT' => 'Клиент коннектор MySQL для MySQL 5',
'MOD_OPEN_SSL' => 'OpenSSL',
'MOD_PHP4_COMPAT' => 'Режим совместимости Zend должен быть выключен',
'MOD_PHP_CONFIG' => 'Конфигурация PHP',
'MOD_PHP_EXTENNSIONS' => 'Расширения PHP',
'MOD_PHP_VERSION' => 'PHP как минимум версии 5.2.10',
'MOD_PHP_XML' => 'DOM',
'MOD_REGISTER_GLOBALS' => 'register_globals должен быть выключен',
'MOD_REQUEST_URI' => 'REQUEST_URI набор',
'MOD_SERVER_CONFIG' => 'Конфигурация сервера',
'MOD_SERVER_PERMISSIONS' => 'Файлы / папки права доступа',
'MOD_SESSION_AUTOSTART' => 'session.auto_start должен быть выключен',
'MOD_SOAP' => 'SOAP',
'MOD_TOKENIZER' => 'Tokenizer',
'MOD_UNICODE_SUPPORT' => 'UTF-8 поддержка',
'MOD_ZEND_OPTIMIZER' => 'Установлен Zend Optimizer или Zend Guard Loader',
'MOD_ZEND_PLATFORM_OR_SERVER' => 'Установлен Zend Platform или Zend Server',
'PRIVACY_POLICY' => 'Заявление о конфиденциальности',
'SELECT_DELIVERY_COUNTRY' => 'Главная страна доставки',
'SELECT_DELIVERY_COUNTRY_HINT' => 'При необходимости, включите больше стран доставки в админ панели.',
'SELECT_PLEASE_CHOOSE' => 'Выбирайте, пожалуйста',
'SELECT_SETUP_LANG' => 'Язык для установки',
'SELECT_SETUP_LANG_SUBMIT' => 'Выбирайте',
'SELECT_SHOP_LANG' => 'Язык магазина',
'SELECT_SHOP_LANG_HINT' => 'При необходимости, включите больше языков в админ.',
'SELECT_SHOP_LOCATION' => 'Ваш рынок',
'SELECT_SHOP_LOCATION_HINT' => 'Пожалуйста, выберите рынок, на который сосредоточен магазин. В соответствии с этим, дополнительные услуги электронной коммерции будут загружены с сервера OXID, если вы включите на это.',
'SETUP_CONFIG_PERMISSIONS' => 'Из-за соображений безопасности переведите config.inc.php файл в режим "только для чтения"!',
'SETUP_DIR_DELETE_NOTICE' => 'Из соображений безопасности удалите каталог установки, если это еще не сделано в процессе установки.',
'STEP_0_DESC' => 'На этом этапе мы проверяем, соответствует ли Ваша система требованиям:',
'STEP_0_ERROR_TEXT' => 'Ваша система не подходит под системные требования',
'STEP_0_ERROR_URL' => 'http://www.oxid-esales.com/en/products/community-edition/system-requirements',
'STEP_0_TEXT' => '<ul class="req"><li class="pass"> - Ваша система соответствует требованиям</li><li class="pmin"> - Требование не является, или только частично подходит. OXID eShop будет работать в любом случае, и может быть установлен ..</li><li class="fail"> - Ваша система не соответствует требованиям OXID eShop не будет работать без него и не может быть установлена.</li><li class="null"> - Tребование не может быть проверено.</ul>',
'STEP_0_TITLE' => 'Проверить Системные требования',
'STEP_1_ADDRESS' => 'OXID eSales AG<br>
                                                    Bertoldstr. 48<br>
                                                    79098 Freiburg<br>
                                                    Deutschland<br>',
'STEP_1_CHECK_UPDATES' => 'Проверять наличие обновлений регулярно',
'STEP_1_DESC' => 'Добро пожаловать в мастер установки OXID eShop',
'STEP_1_TEXT' => 'Пожалуйста, внимательно прочитайте следующие инструкции, чтобы гарантировать гладкую установку.',
'STEP_1_TITLE' => 'Добро пожаловать',
'STEP_2_TITLE' => 'Лицензионные условия',
'STEP_3_1_CREATING_TABLES' => 'Создание таблиц, применяя данные ...',
'STEP_3_1_DB_CONNECT_IS_OK' => 'Подключение к базе данных успешно протестировано ...',
'STEP_3_1_DB_CREATE_IS_OK' => 'База данных %s успешно создана ...',
'STEP_3_1_TITLE' => 'База данных - создается ...',
'STEP_3_2_CONTINUE_INSTALL_OVER_EXISTING_DB' => 'Если вы хотите перезаписать существующие данные  нажмите кнопку установить в любом случае',
'STEP_3_2_CREATING_DATA' => 'База данных успешно создана. Пожалуйста, подождите ...',
'STEP_3_2_TITLE' => 'Создаются таблицы баз данных ...',
'STEP_3_CREATE_DB_WHEN_NO_DB_FOUND' => 'Если база данных не существует, она будет создана',
'STEP_3_DB_DATABSE_NAME' => 'Имя базы данных',
'STEP_3_DB_DEMODATA' => 'Демо данные',
'STEP_3_DB_HOSTNAME' => 'Имя хоста базы данных или IP',
'STEP_3_DB_PASSWORD' => 'Пароль базы данных',
'STEP_3_DB_PASSWORD_SHOW' => 'Показать пароль',
'STEP_3_DB_USER_NAME' => 'Пользователь базы данных',
'STEP_3_DESC' => 'Будет создано Базу данных и необходимые таблицы. Пожалуйста, предоставьте информацию:',
'STEP_3_TITLE' => 'База данных',
'STEP_3_UTFINFO' => 'UTF-8 кодировка обеспечивает лучшую поддержку для специальных символов, чем другие кодировок. Это особенно важно для многоязычных eShops. Тем не менее, кодировка UTF-8 немного медленнее, чем стандарт кодирования (ИСО 8859-15). <br /> Если вы планируете, использовать в Ваш Интернет-магазине разные языки, Вы должны использовать UTF-8. Если Вы просто хотите, чтобы обеспечить несколько языков, используя соответствующие наборы символов (например, английский, немецкий, французский), Вам не нужно UTF-8.',
'STEP_3_UTFMODE' => 'Используйте кодировку символов UTF-8',
'STEP_3_UTFNOTSUPPORTED' => 'OXID eShop не может работать в UTF-8 режиме, в связи с:',
'STEP_3_UTFNOTSUPPORTED1' => 'Отсутствует модуль PHP MBstring',
'STEP_3_UTFNOTSUPPORTED2' => 'Установленный PCRE не поддерживает UTF-8',
'STEP_4_1_DATA_WAS_WRITTEN' => 'Проверка и запись данных успешна. Пожалуйста, подождите ...',
'STEP_4_1_TITLE' => 'Каталоги - создаются ...',
'STEP_4_ADMIN_LOGIN_NAME' => 'e-mail администратора (используется в качестве логина)',
'STEP_4_ADMIN_PASS' => 'Пароль администратора',
'STEP_4_ADMIN_PASS_CONFIRM' => 'Подтвердите пароль администратора',
'STEP_4_ADMIN_PASS_MINCHARS' => 'свободный выбор, мин. 6 символов',
'STEP_4_DESC' => 'Пожалуйста, предоставьте необходимые данные для запуска OXID eShop:',
'STEP_4_SHOP_DIR' => 'Каталог для OXID eShop',
'STEP_4_SHOP_TMP_DIR' => 'Каталог для временных данных',
'STEP_4_SHOP_URL' => 'Shop URL',
'STEP_4_TITLE' => 'Настройка интернет-магазина OXID eShop',
'STEP_5_1_SERIAL_ADDED' => 'Лицензионный ключ успешно сохранен! <br> Подождите пожалуйста ...',
'STEP_5_1_TITLE' => 'Лицензионный ключ - работает...',
'STEP_5_DESC' => 'Пожалуйста, введите лицензионный ключ для OXID eShop:',
'STEP_5_LICENCE_DESC' => 'Предоставленный ключ действителен в течение 30 дней. После этого периода все изменения остаются если вставить действующий лицензионный ключ.',
'STEP_5_LICENCE_KEY' => 'Лицензионный ключ',
'STEP_5_TITLE' => 'OXID eShop лицензия',
'STEP_6_DESC' => 'OXID eShop успешно установлен',
'STEP_6_LINK_TO_SHOP' => 'Доступ к ваш магазин',
'STEP_6_LINK_TO_SHOP_ADMIN_AREA' => 'Доступ к Вашей администрации магазина',
'STEP_6_TITLE' => 'OXID eShop успешно установлен',
'STEP_6_TO_SHOP' => 'В магазин',
'STEP_6_TO_SHOP_ADMIN' => 'До администрации магазина',
'TAB_0_DESC' => 'Проверка, соответствует ли Ваша система требованиям',
'TAB_0_TITLE' => 'Технические предпосылки',
'TAB_1_DESC' => 'Добро пожаловать в мастер установки OXID eShop',
'TAB_1_TITLE' => 'Привет!',
'TAB_2_DESC' => 'Подтвердите лицензионные условия',
'TAB_2_TITLE' => 'Лицензионные условия',
'TAB_3_DESC' => 'Проверка соединения базы данных, построение таблиц',
'TAB_3_TITLE' => 'База данных',
'TAB_4_DESC' => 'Настройка каталогов и выбор логина адміністратора',
'TAB_4_TITLE' => 'Каталог и Войти',
'TAB_5_DESC' => 'Примените лицензионный ключ',
'TAB_5_TITLE' => 'Лицензия',
'TAB_6_DESC' => 'Установка прошла успешно',
'TAB_6_TITLE' => 'финиш',
'USE_DYNAMIC_PAGES' => 'Для увеличения успеха в Вашем бизнесе получите дополнительную информацию с сервера Oxid в. Дополнительную информацию Вы найдете в наших',
);
