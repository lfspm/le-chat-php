<?php
/*
* LE CHAT-PHP - a PHP Chat based on LE CHAT - Bulgarian translation
*
* Copyright (C) 2015-2018 Daniel Winzen <d@winzen4.de>
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

//Native language name: Български
$T=[
	'nodb' => 'Няма връзка с базата данни!',
	'nodbsetup' => 'Няма връзка с базата данни, моля създайте база данни и редактирайте скрипта да използва правилната база данни със съответния потребител и парола.',
	'changelang' => 'Смени езика:',
	'expire' => 'Невалидна/изтекла сесия',
	'kicked' => 'Ти беше изгонен от чата!',
	'invalnick' => 'Невалиден ник (Максимум %1$d символа и трябва да съвпада с регулярния израз "%2$s")',
	'invalpass' => 'Невалидна парола (Най-малко %1$d символа и трябва да съвпада с регулярния израз "%2$s")',
	'noconfirm' => 'Полето за потвърждение на паролата не съвпада!',
	'incorregex' => 'Невалиден регулярен израз!',
	'bottom' => 'Най-долу',
	'top' => 'Горе',
	'choose' => '(избери)',
	'setup' => 'Инсталация на чата',
	'init' => 'Първоначална инсталация',
	'sulogin' => 'Потребителско име на супер-администратора:',
	'sunick' => 'Ник на супер-администратора:',
	'supass' => 'Парола на супер-администратора:',
	'suconfirm' => 'Потвърди паролата:',
	'susuccess' => 'Успешна регистрация!',
	'initbtn' => 'Инициализация на чата',
	'initdbexist' => 'Таблиците в базата данни вече съществуват! За да продължите, моля първо изтрийте тези таблици ръчно.',
	'initsuexist' => 'Вече съществува супер-администратор!',
	'initgosetup' => 'Отиди към страницата за инсталация',
	'captcha' => 'Captcha',
	'enabled' => 'Разрешено',
	'onlyguests' => 'Само за гости',
	'disabled' => 'Забранено',
	'simple' => 'Просто',
	'moderate' => 'Умерено',
	'extreme' => 'Екстремно',
	'nick' => 'Ник:',
	'pass' => 'Парола:',
	'globalloginpass' => 'Глобална парола:',
	'login' => 'Вход',
	'dbupdate' => 'Базата данни бе успешно обновена!',
	'sysmessages' => 'Системни съобщения',
	'msgenter' => 'Влизане',
	'msgexit' => 'Напускане',
	'msgmemreg' => 'Членът е регистриран',
	'msgsureg' => 'Кандидатът е регистриран',
	'msgkick' => 'Изгонен',
	'msgmultikick' => 'Множество изгонени',
	'msgallkick' => 'Всички са изгонени',
	'msgclean' => 'Стаята беше почистена',
	'dateformat' => '<a target="_blank" href="http://php.net/manual/en/function.date.php#refsect1-function.date-parameters">Формат на дата</a>',
	'admfunc' => 'Административни функции',
	'allguests' => 'Всички гости',
	'cleanmsgs' => 'Изчисти съобщенията',
	'room' => 'Цялата стая',
	'selection' => 'Избор',
	'cleannick' => 'Следния ник:',
	'clean' => 'Изчисти',
	'kickchat' => 'Изгони потребител (%d минути)',
	'kickreason' => 'Причина:',
	'kickpurge' => 'Заличи съобщенията',
	'kick' => 'Изгони',
	'logoutinact' => 'Изкарай неактивен потребител от чата',
	'logout' => 'Изкарай',
	'sessions' => 'Виж активните сесии',
	'view' => 'Виж',
	'filter' => 'Филтър',
	'guestacc' => 'Промени достъпа за гост',
	'guestallow' => 'Позволи',
	'guestwait' => 'Позволи с чакалня',
	'adminallow' => 'Изисквай одобрение от модератор',
	'guestdisallow' => 'Само членове',
	'addsuguest' => 'Регистрирай кандидат',
	'register' => 'Регистрирай',
	'admmembers' => 'Членове',
	'memdel' => 'Изтрий от базата данни',
	'memdeny' => 'Забрани достъп (!)',
	'memsuguest' => 'Направи кандидат (G)',
	'memreg' => 'Направи обикновен член',
	'memmod' => 'Направи модератор (M)',
	'memsumod' => 'Направи супер-модератор (SM)',
	'memadm' => 'Направи администратор (A)',
	'change' => 'Промени',
	'regguest' => 'Регистрирай гост',
	'regmem' => 'Регистрирай нов член',
	'sessact' => 'Активни сесии',
	'sessnick' => 'Ник',
	'sesstimeout' => 'Изтичане след',
	'sessua' => 'User-Agent',
	'fid' => 'Филтър ID:',
	'match' => 'Съвпадение',
	'replace' => 'Замени',
	'allowpm' => 'Разреши в ЛС',
	'regex' => 'Регулярен израз',
	'apply' => 'Приложи',
	'newfilter' => 'Нов филтър:',
	'add' => 'Добави',
	'noframes' => 'Този чат използва <b>фреймове</b>. Моля позволете фреймовете във вашия браузър или използвайте друг, подходящ.',
	'delselmes' => 'Изтрий избраните съобщения',
	'staffnotes' => 'Бележки на екипа',
	'adminnotes' => 'Администраторски бележки',
	'notessaved' => 'Бележките са запазени!',
	'lastedited' => 'Последна редакция от %1$s на %2$s',
	'savenotes' => 'Запази бележките',
	'waitingroom' => 'Чакалня',
	'waittext' => 'Добре дошъл, %1$s, влизането ти беше отложено, ще можеш да влезеш в чата след %2$d секунди.',
	'admwaittext' => 'Добре дошъл, %1$s, влизането ти беше отложено, ще можеш да влезеш в чата след като бъдеш одобрен от модератор.',
	'waitreload' => 'Ако тази страница не се презарежда сама на всеки %d секунди, моля използвайте бутона за презареждане по-долу за да я презаредите ръчно',
	'reload' => 'Презареди',
	'rules' => 'Правила',
	'talkto' => 'Изпрати до',
	'toall' => 'Всички в чата',
	'tomem' => 'Само до членовете',
	'tostaff' => 'Само до екипа',
	'toadmin' => 'Само до админ',
	'alsopurge' => 'Също заличи съобщенията',
	'dellast' => 'Изтрий последното съобщение',
	'delall' => 'Изтрий всички съобщения',
	'switchsingle' => 'Превключи на многоредово поле',
	'switchmulti' => 'Превключи на едноредово поле',
	'help' => 'Помощ',
	'helpguest' => 'Предназначението на всички функции трябва да е ясно, просто използвай бутоните. В профила си можеш да променяш интервала на опресняване на чата и цвета на шрифта, а също така и да игнорираш потребители.<br><u>Забележка:</u> Това е чат, така че ако спреш да чатиш, след известно време ще бъдеш амтоматично изкаран от чата.',
	'helpembed' => 'Ако искаш да вградиш изображение в поста си, просто използвай тага [img] пред линка с изображението. Пример: [img]http://example.com/images/file.jpg ще вгради изображението в поста ти.',
	'helpmem' => 'Членове: Вие ще имате някои допълнителни опции. Може да променяте цвета на фона, да променяте паролата си по всяко време, и разбира се, да изтриете акаунта си.',
	'helpmod' => 'Модератори: Забележете админ бутона най-долу. Натискането му ще изведе страница, през която ще можете да почистите стаята, да гоните потребители, да преглеждате всички активни сесии и да забраните напълно достъпа на гости, ако е необходимо.',
	'helpadm' => 'Администратори: Вие ще можете допълнително да регистрирате гости, да редактирате профили на членове и да регистрирате нови никове.',
	'profile' => 'Твоят профил',
	'ignore' => 'Игнорирай',
	'unignore' => 'Спри да игнорираш',
	'refreshrate' => 'Честота на опресняване (5-150 секунди)',
	'fontcolour' => 'Цвят на шрифта',
	'viewexample' => 'Виж примери',
	'bgcolour' => 'Цвят на фона',
	'fontface' => 'Облик на шрифта',
	'roomdefault' => 'По подразбиране за стаята',
	'bold' => 'Получер',
	'italic' => 'Курсив',
	'small' => 'Малък',
	'fontexample' => 'Пример за избрания шрифт',
	'timestamps' => 'Покажи времеви маркери',
	'embed' => 'Вграждане на изображения',
	'incognito' => 'Режим Инкогнито',
	'changenick' => 'Промени ник',
	'changepass' => 'Промени парола',
	'oldpass' => 'Стара парола:',
	'newpass' => 'Нова парола:',
	'confirmpass' => 'Потвърди новата парола:',
	'savechanges' => 'Запази промените',
	'reloadpb' => 'Презареди пощенската кутия',
	'reloadmsgs' => 'Презареди съобщенията',
	'chgprofile' => 'Профил',
	'adminbtn' => 'Администрация',
	'admnotes' => 'Администраторски бележки',
	'notes' => 'Бележки',
	'clone' => 'Клонирай',
	'randh' => 'Правила & Помощ',
	'exit' => 'Изход от чата',
	'bye' => 'Чао, драги %s, скоро те очакваме отново!',
	'colourtable' => 'Таблица с цветове',
	'backtoprofile' => 'Обратно в твоя профил',
	'copy' => 'Препиши:',
	'choosecol' => 'Гости, изберете цвят:',
	'randomcol' => 'Произволен цвят',
	'enter' => 'Влез в чата',
	'error' => 'Грешка',
	'members' => 'Членове',
	'guests' => 'Гости',
	'approveguests' => '%d нови гости чакат одобрение',
	'allowchecked' => 'Допусни избраните',
	'allowall' => 'Допусни всички',
	'denychecked' => 'Не допускай избраните',
	'denyall' => 'Не допускай никого',
	'denymessage' => 'Изпрати съобщение до недопуснатите:',
	'butallowdeny' => 'Изпрати',
	'waitempty' => 'Няма повече заявки за присъединяване, чакащи одобрение.',
	'wrongcaptcha' => 'Грешна Captcha',
	'captchaexpire' => 'Captcha-та е вече използвана или е изтекла.',
	'noguests' => 'Съжаляваме, но в момента се допускат само членове!',
	'curchat' => 'В стаята има %d потребители:',
	'cantreg' => 'Не мога да регистрирам %s',
	'alreadyreged' => '%s е вече регистриран.',
	'successreg' => '%s е успешно регистриран.',
	'cantchgstat' => 'Не мога да променя статуса на %s',
	'succdel' => '%s е успешно изтрит от базата данни.',
	'succchg' => 'Статусът за %s бе успешно променен.',
	'wrongpass' => 'Грешна парола!',
	'wrongglobalpass' => 'Грешна глобална парола!',
	'succprofile' => 'Профилът ти беше успешно съхранен.',
	'backtologin' => 'Обратно към страницата за вход.',
	'backtochat' => 'Обратно към чата.',
	'Beige' => 'Бежово',
	'Black' => 'Черно',
	'Blue' => 'Синьо',
	'BlueViolet' => 'Виолетово-синьо',
	'Brown' => 'Кафяво',
	'Cyan' => 'Зелено-синьо',
	'DarkBlue' => 'Тъмносиньо',
	'DarkGreen' => 'Тъмнозелено',
	'DarkRed' => 'Тъмночервено',
	'DarkViolet' => 'Тъмновиолетово',
	'DeepSkyBlue' => 'Небесно синьо',
	'Gold' => 'Златно',
	'Grey' => 'Сиво',
	'Green' => 'Зелено',
	'HotPink' => 'Топло розово',
	'Indigo' => 'Индиго',
	'LightBlue' => 'Светлосиньо',
	'LightGreen' => 'Светлозелено',
	'LimeGreen' => 'Липовозелено',
	'Magenta' => 'Лилаво-червено (Маджента)',
	'Olive' => 'Тъмно жълто-зелено',
	'Orange' => 'Оранжево',
	'OrangeRed' => 'Оранжево-червено',
	'Purple' => 'Лилаво',
	'Red' => 'Червено',
	'RoyalBlue' => 'Кралско синьо',
	'SeaGreen' => 'Морско зелено',
	'Sienna' => 'Златисто-жълто (Охра)',
	'Silver' => 'Сребърно',
	'Tan' => 'Жълто-кафяво',
	'Teal' => 'Синьо-зелено',
	'Violet' => 'Виолетово',
	'White' => 'Бяло',
	'Yellow' => 'Жълто',
	'YellowGreen' => 'Жълто-зелено',
	'redirectto' => 'Пренасочване към:',
	'nonhttp' => 'Заявен е не-http линк:',
	'httpredir' => 'Ако не работи, опитай това:',
	'actions' => 'Действия',
	'sesip' => 'IP-адрес',
	'css' => 'CSS стил',
	'memberexpire' => 'Изтичане на сесията на членове (минути)',
	'guestexpire' => 'Изтичане на сесията за гости (минути)',
	'kickpenalty' => 'Наказание с изгонване (минути)',
	'entrywait' => 'Време за изчакване в чакалнята (секунди)',
	'captchatime' => 'Валидност на Captcha-та (секунди)',
	'messageexpire' => 'Съобщенията изтичат след (минути)',
	'messagelimit' => 'Лимит на съобщенията (публичен)',
	'maxmessage' => 'Максимална дължина на съобщението',
	'confirm' => 'Сигурен ли си?',
	'yes' => 'Да',
	'no' => 'Не',
	'colbg' => 'Цвят на фона',
	'coltxt' => 'Цвят на текста',
	'maxname' => 'Максимална дължина на ник',
	'minpass' => 'Минимална дължина на паролата',
	'defaultrefresh' => 'Интервал на опресняване на съобщенията по подразбиране  (секунди)',
	'suguests' => 'Позволи кандидати',
	'rulestxt' => 'Правила (html)',
	'imgembed' => 'Вгради изображения',
	'trackip' => 'Покажи IP-то на сесията',
	'captchachars' => 'Символи, използвани за Captcha-та',
	'memkick' => 'Членовете могат да гонят, ако няма модератор в стаята',
	'forceredirect' => 'Пренасочване',
	'redirect' => 'Мой скрипт за пренасочване',
	'backuprestore' => 'Бекъп и възстановяване',
	'backup' => 'Направи бекъп',
	'restore' => 'Възстанови',
	'settings' => 'Настройки',
	'linkfilter' => 'Филтър за линкове',
	'chatname' => 'Име на чата',
	'destroy' => 'Унищожи чата',
	'destroyed' => 'Успешно унищожи чата',
	'topic' => 'Тема',
	'passreset' => 'Нулирай парола',
	'cantresetpass' => 'Не мога да нулирам паролата',
	'succpassreset' => 'Успешно нулира паролата',
	'entermsg' => '%s влезе в чата.',
	'exitmsg' => '%s напусна чата.',
	'memregmsg' => '%s вече е регистриран член.',
	'suregmsg' => '%s вече е регистриран кандидат.',
	'kickmsg' => '%s беше изгонен.',
	'multikickmsg' => '%s бяха изгонени.',
	'allkickmsg' => 'Всички гости бяха изгонени.',
	'cleanmsg' => '%s беше почистена.',
	'sendallmsg' => '%s - ',
	'sendmemmsg' => '[М] %s - ',
	'sendmodmsg' => '[Екип] %s - ',
	'sendadmmsg' => '[Админ] %s - ',
	'sendprvmsg' => '[%1$s до %2$s] - ',
	'msgsendall' => 'Съобщение до всички',
	'msgsendmem' => 'Съобщение само до членовете',
	'msgsendmod' => 'Съобщение само до екипа',
	'msgsendadm' => 'Съобщение само до администраторите',
	'msgsendprv' => 'Лично съобщение',
	'numnotes' => 'Брой версии на бележки, които да се пазят',
	'revisions' => 'Версии:',
	'older' => 'По-стари',
	'newer' => 'По-нови',
	'accessdenied' => 'Достъпът е забранен',
	'loggedinas' => 'В момента си логнат като %s и нямаш достъп до тази част.',
	'newnickname' => 'Нов ник:',
	'nicknametaken' => 'Този ник се използва от друг',
	'nopass' => 'Невалидна парола (поне %d символа), не променям ника',
	'gdextrequired' => 'Добавката gd за PHP е необходима за тази функционалност. Моля, първо я инсталирайте.',
	'memcachedextrequired' => 'Добавката memcached за PHP е необходима за кеш функционалностите. Моля, първо я инсталирайте или върнете настройките за memcached обратно на false.',
	'sodiumextrequired' => 'Добавката libsodium за PHP е необходима the криптиращата функционалност. Моля, първо я инсталирайте или върнете настройките за криптиране обратно на false.',
	'pdo_mysqlextrequired' => 'Добавката pdo_mysql за PHP е необходима за избрания драйвер за базата данни. Моля, първо я инсталирайте.',
	'pdo_pgsqlextrequired' => 'Добавката pdo_pgsql за PHP е необходима за избрания драйвер за базата данни. Моля, първо я инсталирайте.',
	'pdo_sqliteextrequired' => 'Добавката pdo_sqlite за PHP е необходима за избрния драйвер за базата данни. Моля, първо я инсталирайте.',
	'jsonextrequired' => 'Добавката json за PHP е необходима за тази функционалност. Моля, първо я инсталирайте.',
	'sendmail' => 'Изпрати мейл при ново публично съобщение',
	'mailsender' => 'Изпрати мейл, използвайки този адрес',
	'mailreceiver' => 'Изпрати мейл до този адрес',
	'modfallback' => 'Използвай чакалня, ако няма модератор да одобрява гостите',
	'regpass' => 'Повтори паролата <br>за да се регистрираш',
	'guestreg' => 'Разреши на гостите да се регистрират сами',
	'asmember' => 'Като член',
	'assuguest' => 'Като кандидат',
	'fatalerror' => 'Фатална грешка',
	'prevmatch' => 'Съвпадението ти беше както следва',
	'matchtoolong' => 'Съвпадението ти беше прекалено дълго. Може да използваш най-много 255 символа. Опитай се да го разделиш.',
	'nocache' => 'Автоматично скролиране (за старите браузъри или сортиране от горе надолу).',
	'disablepm' => 'Забрани личните съобщения',
	'disablechat' => 'Забрани чата',
	'disabletext' => 'Съобщение относно забранения чат (html)',
	'disabledtext' => 'Временно забранен',
	'defaulttz' => 'Часова зона по подрзбиране',
	'tz' => 'Часова зона',
	'optional' => '(опционално)',
	'userloggedin' => 'Потребителят с това потребителско име е вече логнат.',
	'regednick' => 'Този ник е на регистриран член.',
	'eninbox' => 'Позволи офлайн пощенска кутия',
	'inboxmsgs' => 'Прочети %d съобщения в пощенската ти кутия',
	'offline' => '(офлайн)',
	'deleteacc' => 'Изтрий акаунт',
	'eninnone' => 'За никого',
	'eninall' => 'За всички',
	'eninmem' => 'Само за членове',
	'eninstaff' => 'Само за екипа',
	'eninadmin' => 'Само за администратори',
	'nickregex' => 'Регулярен израз за никове',
	'passregex' => 'Регулярен израз за пароли',
	'externalcss' => 'Линк към външен CSS файл',
	'greetingmsg' => 'Добре дошъл, %s!',
	'entryhelp' => 'Ако този фрейм не се презареди след %d секунди, ще е необходимо да позволите автоматичното презареждане (meta презареждане) в своя браузър. Също се уверете, че нямате уеб филтър, локален филтър или добавка за браузъра, която да блокира автоматичното презареждане! Такива са например "Polipo", "NoScript", и други.<br>Възможно решение е (също в случай на грешки при презареждане на ниво сървър/прокси) да използвате бутона за ръчно презареждане на вашия браузър.',
	'enablegreeting' => 'Покажи приветствено съобщение преди да покажеш самото съобщение',
	'unban' => 'Премахни бан',
	'sortupdown' => 'Подреди съобщенията от горе надолу',
	'sortframe' => 'Преподредба',
	'cs' => 'Чувствително към малки и големи букви',
	'hidechatters' => 'Скрий списъка с потребители',
	'enfileupload' => 'Позволи качването на файлове',
	'msgattache' => 'Прикачен файл',
	'filenotfound' => 'Файлът не е намерен!',
	'maxuploadsize' => 'Максимален размер на файл в KB',
	'maxsize' => 'Макс %d KB',
	'cssupdate' => 'Забележка: CSS-ът по подразбиране е вече вграден в кода и може да бъде премахнат от CSS настройките',
	'manualrefresh' => 'Необходимо ръчно опресняване',
	'personalnotes' => 'Лични бележки',
	'filtermodkick' => 'Прилагай филтъра за изгонване и за модераторите',
];
