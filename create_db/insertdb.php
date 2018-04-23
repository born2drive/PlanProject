﻿<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cookbook";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
	die("conn error");
}
$sql = "INSERT INTO `recipes` (`aa`, `name`, `instructions`, `ingr1`, `image_id`, `del_rec`, `ctime`, `category`, `rec_uid`) VALUES
(1, 'Кекс', 'Яйцата (3 бр) и захарта (1 1/2 ч.ч.) се разбиват до побеляване. Добавят се олиото (1/2 к.ч.), брашното (3 ч.ч.), млякото (1 ч.ч.), ванилията (1 ч.л.) и бакпулверът (1 ч.л.). Сместа се разбива много добре.\r\n\r\nТестото се разделя на две. В едната част се изсипва какаото (5 с.л.) и се разбърква. Форма за кекс се намазва с олио и се поръсва с брашно. В нея се изсипва бялото кексово тесто. Върху него се изсипва кафявото тесто, като целта е то да се излее в средата на бялото и да обиколи формата. Кексът се пече при 180 градуса за 45 минути. Разрязва се след като изстине и по желание се поръсва с пудра захар.', '3 ч.ч. брашно<br>3 яйца<br>1/2 к.ч. олио<br>1 1/2 ч.ч. захар<br>1 ч.ч. прясно мляко<br>5 с.л. какао<br>1 ч.л. ванилия<br>1 ч.л. бакпулвер<br>2 с.л. пудра захар<br>', '2.jpg', 0, 55, 'Десерт', 2),
(2, 'пица \"Карбонара\"', 'Разтворете маята в топличкото прясно мляко с мялко захар. Пресейте брашното и в кладенче посредата добавете всичко останалите и продукти без олиото + активиралата се мая. Замесете гладко тесто, като накрая доомесите с олиото и го оставете да втаса, покрито в алуминиево фолио в купа. \r\n\r\nСлед това тестото се разтегля с ръце и се слага в голяма тава или дъска, поръсена с галета. Запича се леко и се вади. Отгоре се маже със сметана, разпределят се кръгчета лук по желание, резени бекон, гъби. Поръсва се щипка-две сол и риган. Отново се пече и към края се запича за няколко минути с кашкавала. ', 'брашно - 2 ч.ч.<br>захар - 1 - 2 ч.л.<br>олио - 2 с.л.<br>яйца - 1 бр.<br>мая - 12 г<br>сол - 1/2 ч. л.<br>вода - 1/2 ч.ч. или прясно мляко<br>бекон - 200 г<br>гъби - 100<br>сметана - 3 - 4 с.л.<br>кашкавал - на око<br>риган - на око<br>', '1.png', 0, 30, 'Основно ястие', 2),
(3, 'Спагети', 'Спагетите (400 г) се сваряват във вряща подсолена вода според указанията на опаковката. След това се отцеждат и изплакват.\r\n\r\nПрез това време, докато спагетите се варят, се омесва каймата за кюфтетата. За целта се смесват каймата (1/2 кг), ситно накълцаните магданоз (4 стръка) и лук (1 глава), суровото яйце (1 бр), кимионът (1/2 ч.л.), черният пипер (1/2 ч.л.) и солта. Всичко се разбърква много добре и от получената смес се оформят малки кюфтета. Те се пържат или пекат в тавичка до готовност.\r\n\r\nНакрая се приготвя доматеният сос. За целта доматите от консерва (800 г), които за предварително нарязани на ситно, се изсипват заедно със сока от консервата в тиган. Към тях се добавя олио (4 с.л.) и доматено пюре (4 с.л.). Варят се, докато сосът се сгъсти.\r\n\r\nВ порционни чинии се поставят сварените спагети, които се заливат с доматен сос и отгоре се поставят кюфтетата. Пастата се поръсва с пресен магданоз и се сервира веднага.', '400 г спагети<br>1/2 кг кайма<br>1 глава лук<br>4 стръка магданоз<br>1 яйце<br>1/2 ч.л. кимион<br>1/2 ч.л. черен пипер<br>сол<br>800 г домати<br>4 с.л. доматено пюре<br>4 с.л. олио<br>', 'kima.jpg', 0, 60, 'Аперитив', 2),
(4, 'Салата', 'Измитите старателно домати (3 бр) и краставици (1 бр) се нарязват на средни по големина парчета. Поставят се в купа и към тях се добавят маслините (80 бр), нарязаният на колелца червен лук (1 глава), нарязаната на ивици зелена чушка (1 бр), а също и подправките - зехтин (6 с.л.) и сол. Салатата се разбърква старателно и се разпределя в порционни чинии. Във всяка порция се поставя плочка сирене Фета (200 г), полива се с малко зехтин и се поръсва със сушен риган (1 ч.л.). Сервира се веднага.', '3 домата<br>1 краставица<br>1 зелена чушка<br>80 маслини<br>1 глава червен лук<br>200 г сирене Фета<br>6 с.л. зехтин<br>1 ч.л. риган<br>сол<br>', '50997c099dc71.jpg', 0, 15, 'Салата', 2),
(5, 'Тиквеник', 'Тиквата се обелва и настъргва на ренде (или с кухненски робот). Една лъжица зехтин се загрява в тиган на умерен огън. Добавя се настърганата тиква, посолява се, прибавят се стръкчетата мащерка и се задушава, докато водата на тиквата се изпари, на мен ми отне около 15 минути, понеже тиквата беше доста водна (накрая се получава нещо като тиквено пюре). Оставя се да изстине.\r\n\r\nФурната се загрява на 160 градуса. В купа се разбиват яйцата, добавят се нарязаните на едро ядки и нарязаните на кубчета краве сирене и моцарела. Добавя се тиквата и се разбърква добре.\r\n\r\nТавата се намазва с малко зехтин. Шест кори се налагат, със застъпване, така че половината от дължината им да остане извън тавата. Дъното се застила със сгъната на две кора. Корите се намазват със зехтин. Отгоре се разпределя половината плънка. Покрива се с две сгънати кори, като част от краищата им може да се застъпят, намазват се с малко зехтин. Отгоре се разпределя остатъка от плънката, покрива се с последната кора, сгъната на две и се намазва с малко зехтин. Останалите краища на корите се захлупват към средата на тавата, така че да покрият цялата повърхност на баницата. Отгоре се поставят няколко бучици масло и се пече в продължение на 25 – 30 минути, докато се зачерви. ', 'Около 1 кг тиква<br>100 г моцарела<br>100 г сирене<br>50 г ядки пекан (може да се заменят с орехи)<br>2 яйца<br>5-6 стръка прясна мащерка<br>10 броя кори за баница (обикновени)<br>Около 30 мл зехтин<br>10 г масло<br>', '3.jpg', 0, 75, 'Аперитив', 2),
(6, 'Картофена салата', 'Картофите (300 г) и морковите (1 бр) се сваряват и нарязват на едро. Празът (1 стрък) се нарязва на колелца и се претрива със солта. Киселите краставички (4 бр) се нарязват на едро. Всичко това се смесва с майонезата (4 с.л.) и лимоновия сок (1 с.л.). Салатата се разбърква добре и се поднася охладена.', '300 г картофи<br>1 стрък праз<br>4 кисели краставички<br>1 морков<br>4 с.л. майонеза<br>1 с.л. лимонов сок<br>сол<br>', '4.jpg', 0, 30, 'Салата', 2),
(7, 'Сладкиш с банани и ябълки', 'В тавичка или ринг натрошаваме маслените бисквити. Разтопяваме маслото на котлона и го изсипваме върху бисквитите. Разбъркваме и заравняваме. В случая се получава нещо като блат.\r\n\r\nОбелваме бананите и ги нарязваме на колелца. Върху така получения блат подреждаме кръгчетата банан така, че да се покрие целият блат. \r\n\r\nПодготвяме си смес от яйцата брашното, захарта и хубаво ги разбъркваме. Настъргваме двете ябълки и тях добавяме към сместа.\r\n\r\nДобре разбъркваме полученото и заливаме блата с наредените върху него банани. Слагаме да се пече във фурната на 180 градуса до зачервяване. \r\n\r\nКогато е готов сладкишът, вадим и поръсваме с пудра захар.', 'банани - 2 бр.<br>ябълки - 2 бр.<br>масло - 125 г<br>бисквити - 250 г маслени<br>яйца - 5 бр.<br>пудра захар - 1 ч.ч.<br>брашно - 1 ч.ч.<br>', '5.jpg', 0, 40, 'Десерт', 2),
(8, 'Пържено свинско', 'От посочените продукти се приготвя марината, в която се слага нарязаното на парченца свинско месо (1 кг) за 3-4 часа. Когато месото се маринова, се нанизва на шишове и се пече на скара до пълна готовност.\r\n\r\nТова традиционно ястие в Кипър се поднася най-често със сос от кисело мляко, настъргана краставица, чесън и мента; ориз, зелена салата или със салатата, която виждате на снимката. Тя се приготвя от зеле, домати, зелена чушка, краставица, кориандър, сол, зехтин.', '1 кг свинско месо<br>2 с.л. лимонов сок<br>1 с.л. риган<br>8 с.л. зехтин<br>листенца босилек<br>сол<br>черен пипер<br>', '1.jpeg', 0, 180, 'Основно ястие', 2)";

if ($conn->query($sql) === TRUE) {
    echo "Записването успешно.";
} else {
    echo "Грешка " . $conn->error;
}
$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
	die("conn error");
}
$sql_users= "INSERT INTO `users` (`firstn`, `lastn`, `email`, `username`, `passw`) VALUES
('Stoqn', 'Popov', 'email@mail.com', 'admin', 'admin'),
('Georgi', 'Mihalev', 'mail@mail.com', 'admin2', 'admin2')";

if ($conn->query($sql_users) === TRUE) {
    echo "Записването успешно.";
} else {
    echo "Грешка " . $conn->error;
}
$conn->close();

?>