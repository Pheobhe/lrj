<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('be', array (
  'validators' => 
  array (
    'This value should be false.' => 'Значэнне павінна быць Не.',
    'This value should be true.' => 'Значэнне павінна быць Так.',
    'This value should be of type {{ type }}.' => 'Тып значэння павінен быць {{ type }}.',
    'This value should be blank.' => 'Значэнне павінна быць пустым.',
    'The value you selected is not a valid choice.' => 'Абранае вамі значэнне не сапраўднае.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Вы павінны выбраць хаця б {{ limit }} варыянт.|Вы павінны выбраць хаця б {{ limit }} варыянтаў.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Вы павінны выбраць не больш за {{ limit }} варыянт.|Вы павінны выбраць не больш за {{ limit }} варыянтаў.',
    'One or more of the given values is invalid.' => 'Адзін або некалькі пазначаных значэнняў з\'яўляецца несапраўдным.',
    'This field was not expected.' => 'Гэта поле не чакаецца.',
    'This field is missing.' => 'Гэта поле адсутнічае.',
    'This value is not a valid date.' => 'Гэта значэнне не з\'яўляецца карэктнай датай.',
    'This value is not a valid datetime.' => 'Гэта значэнне не з\'яўляецца карэктнай датай i часом.',
    'This value is not a valid email address.' => 'Гэта значэнне не з\'яўляецца карэктным адрасам электроннай пошты.',
    'The file could not be found.' => 'Файл не знойдзен.',
    'The file is not readable.' => 'Файл не чытаецца.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадта вялікі ({{ size }} {{ suffix }}). Максімальна дазволены памер {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-тып файлу некарэкты ({{ type }}). Дазволеныя MIME-тыпы файлу {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Значэнне павінна быць {{ limit }} або менш.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Значэнне занадта доўгае. Яно павінна мець {{ limit }} сімвал або менш.|Значэнне занадта доўгае. Яно павінна мець {{ limit }} сімвалаў або менш.',
    'This value should be {{ limit }} or more.' => 'Значэнне павінна быць {{ limit }} або больш.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Значэнне занадта кароткае. Яно павінна мець прынамсі {{ limit }} сімвал.|Значэнне занадта кароткае. Яно павінна мець прынамсі {{ limit }} сімвалаў.',
    'This value should not be blank.' => 'Значэнне не павінна быць пустым.',
    'This value should not be null.' => 'Значэнне не павінна быць null.',
    'This value should be null.' => 'Значэнне павінна быць null.',
    'This value is not valid.' => 'Значэнне з\'яўляецца не сапраўдным.',
    'This value is not a valid time.' => 'Значэнне не з\'яўляецца сапраўдным часам.',
    'This value is not a valid URL.' => 'Значэнне не з\'яўляецца сапраўдным URL-адрасам.',
    'The two values should be equal.' => 'Абодва значэнні павінны быць аднолькавымі.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадта вялікі. Максімальна дазволены памер {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файл занадта вялікі.',
    'The file could not be uploaded.' => 'Немагчыма запампаваць файл.',
    'This value should be a valid number.' => 'Значэнне павінна быць лікам.',
    'This file is not a valid image.' => 'Гэты файл не з\'яўляецца сапраўднай выявай.',
    'This is not a valid IP address.' => 'Значэнне не з\'яўляецца сапраўдным IP-адрасам.',
    'This value is not a valid language.' => 'Значэнне не з\'яўляецца сапраўдным мовай.',
    'This value is not a valid locale.' => 'Значэнне не з\'яўляецца сапраўднай лакаллю.',
    'This value is not a valid country.' => 'Значэнне не з\'яўляецца сапраўднай краінай.',
    'This value is already used.' => 'Гэта значэнне ўжо выкарыстоўваецца.',
    'The size of the image could not be detected.' => 'Немагчыма вызначыць памер выявы.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Гэта выява занадта вялікая ({{ width }}px). Дазваляецца максімальная шырыня {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Гэта выява занадта маленькая ({{ width }}px). Дазваляецца мінімальная шырыня {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Гэты выява занадта вялікая ({{ width }}px). Дазваляецца максімальная вышыня {{ max_width }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Гэта выява занадта маленькая ({{ width }}px). Дазваляецца мінімальная вышыня {{ min_width }}px.',
    'This value should be the user\'s current password.' => 'Значэнне павінна быць цяперашнім паролем карыстальніка.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Значэнне павінна мець {{ limit }} сімвал.|Значэнне павінна мець {{ limit }} сімвалаў.',
    'The file was only partially uploaded.' => 'Файл быў запампаваны толькі часткова.',
    'No file was uploaded.' => 'Файл не быў запампаваны.',
    'No temporary folder was configured in php.ini.' => 'У php.ini не была налажана часовая папка, або часовая папка не існуе.',
    'Cannot write temporary file to disk.' => 'Немагчыма запісаць часовы файл на дыск.',
    'A PHP extension caused the upload to fail.' => 'Пашырэнне PHP выклікала памылку загрузкі.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Калекцыя павінна змяшчаць прынамсі {{ limit }} элемент.|Калекцыя павінна змяшчаць прынамсі {{ limit }} элементаў.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Калекцыя павінна змяшчаць {{ limit }} або менш элемент.|Калекцыя павінна змяшчаць {{ limit }} або менш элементаў.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Калекцыя павінна змяшчаць роўна {{ limit }} элемент.|Калекцыя павінна змяшчаць роўна {{ limit }} элементаў.',
    'Invalid card number.' => 'Несапраўдны нумар карты.',
    'Unsupported card type or invalid card number.' => 'Тып карты не падтрымліваецца або несапраўдны нумар карты.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Несапраўдны міжнародны нумар банкаўскага рахунку (IBAN).',
    'This value is not a valid ISBN-10.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISBN-10 або ISBN-13.',
    'This value is not a valid ISSN.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISSN.',
    'This value is not a valid currency.' => 'Гэта значэнне не з\'яўляецца сапраўднай валютай.',
    'This value should be equal to {{ compared_value }}.' => 'Значэнне павінна раўняцца {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Значэнне павінна быць больш чым {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Значэнне павінна быць больш чым або раўняцца {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значэнне павінна быць ідэнтычным {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Значэнне павінна быць менш чым {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Значэнне павінна быць менш чым або раўняцца {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Значэнне не павінна раўняцца {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значэнне не павінна быць ідэнтычным {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Суадносіны бакоў выявы з\'яўляецца занадта вялікім ({{ ratio }}). Дазваляецца максімальныя суадносіны {{max_ratio}} .',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Суадносіны бакоў выявы з\'яўляецца занадта маленькімі ({{ ratio }}). Дазваляецца мінімальныя суадносіны {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Выява квадратная ({{width}}x{{height}}px). Квадратныя выявы не дазволены.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Выява ў альбомнай арыентацыі ({{ width }}x{{ height }}px). Выявы ў альбомнай арыентацыі не дазволены.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Выява ў партрэтнай арыентацыі ({{ width }}x{{ height }}px). Выявы ў партрэтнай арыентацыі не дазволены.',
    'An empty file is not allowed.' => 'Пусты файл не дазволены.',
    'The host could not be resolved.' => 'Не магчыма знайсці імя хоста.',
    'This value does not match the expected {{ charset }} charset.' => 'Гэта значэнне не супадае з чаканай {{ charset }} кадыроўкай.',
    'This is not a valid Business Identifier Code (BIC).' => 'Несапраўдны банкаўскі ідэнтыфікацыйны код (BIC).',
    'Error' => 'Памылка',
    'This is not a valid UUID.' => 'Гэта несапраўдны UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Значэнне павінна быць кратным {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Банкаўскі ідэнтыфікацыйны код (BIC) не звязан з IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Гэта значэнне павінна быць у фармаце JSON.',
    'This collection should contain only unique elements.' => 'Калекцыя павінна змяшчаць толькі ўнікальныя элементы.',
    'This value should be positive.' => 'Значэнне павінна быць дадатным.',
    'This value should be either positive or zero.' => 'Значэнне павінна быць дадатным ці нуль.',
    'This value should be negative.' => 'Значэнне павінна быць адмоўным.',
    'This value should be either negative or zero.' => 'Значэнне павінна быць адмоўным ці нуль.',
    'This value is not a valid timezone.' => 'Значэнне не з\'яўляецца сапраўдным гадзінным поясам.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Гэты пароль быў выкрадзены ў выніку ўзлому дадзеных, таму яго нельга выкарыстоўваць. Калі ласка, выкарыстоўвайце іншы пароль.',
    'This value should be between {{ min }} and {{ max }}.' => 'Значэнне павінна быць паміж {{min}} і {{max}}.',
    'This value is not a valid hostname.' => 'Значэнне не з\'яўляецца карэктным імем хаста.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Колькасць элементаў у гэтай калекцыі павінна быць кратным {{compared_value}}.',
    'This value should satisfy at least one of the following constraints:' => 'Значэнне павінна задавальняць як мінімум аднаму з наступных абмежаванняў:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Кожны элемент гэтай калекцыі павінен задавальняць свайму ўласнаму набору абмежаванняў.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Значэнне не з\'яўляецца карэктным міжнародным ідэнтыфікацыйным нумарам каштоўных папер (ISIN).',
    'This value should be a valid expression.' => 'Значэнне не з\'яўляецца сапраўдным выразам.',
    'This value is not a valid CSS color.' => 'Значэнне не з\'яўляецца дапушчальным колерам CSS.',
    'This value is not a valid CIDR notation.' => 'Значэнне не з\'яўляецца сапраўднай натацыяй CIDR.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Значэнне сеткавай маскі павінна быць ад {{min}} да {{max}}.',
    'This form should not contain extra fields.' => 'Гэта форма не павінна мець дадатковых палей.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Запампаваны файл быў занадта вялікім. Калі ласка, паспрабуйце запампаваць файл меншага памеру.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-токен не сапраўдны. Калі ласка, паспрабуйце яшчэ раз адправіць форму.',
    'This value is not a valid HTML5 color.' => 'Значэнне не з\'яўляецца карэктным HTML5 колерам.',
    'Please enter a valid birthdate.' => 'Калі ласка, увядзіце карэктную дату нараджэння.',
    'The selected choice is invalid.' => 'Выбраны варыянт некарэктны.',
    'The collection is invalid.' => 'Калекцыя некарэктна.',
    'Please select a valid color.' => 'Калі ласка, выберыце карэктны колер.',
    'Please select a valid country.' => 'Калі ласка, выберыце карэктную краіну.',
    'Please select a valid currency.' => 'Калі ласка, выберыце карэктную валюту.',
    'Please choose a valid date interval.' => 'Калі ласка, выберыце карэктны інтэрвал дат.',
    'Please enter a valid date and time.' => 'Калі ласка, увядзіце карэктныя дату і час.',
    'Please enter a valid date.' => 'Калі ласка, увядзіце карэктную дату.',
    'Please select a valid file.' => 'Калі ласка, выберыце карэктны файл.',
    'The hidden field is invalid.' => 'Значэнне схаванага поля некарэктна.',
    'Please enter an integer.' => 'Калі ласка, увядзіце цэлы лік.',
    'Please select a valid language.' => 'Калі ласка, выберыце карэктную мову.',
    'Please select a valid locale.' => 'Калі ласка, выберыце карэктную лакаль.',
    'Please enter a valid money amount.' => 'Калі ласка, увядзіце карэктную колькасць грошай.',
    'Please enter a number.' => 'Калі ласка, увядзіце нумар.',
    'The password is invalid.' => 'Няправільны пароль.',
    'Please enter a percentage value.' => 'Калі ласка, увядзіце працэнтнае значэнне.',
    'The values do not match.' => 'Значэнні не супадаюць.',
    'Please enter a valid time.' => 'Калі ласка, увядзіце карэктны час.',
    'Please select a valid timezone.' => 'Калі ласка, выберыце карэктны гадзінны пояс.',
    'Please enter a valid URL.' => 'Калі ласка, увядзіце карэктны URL.',
    'Please enter a valid search term.' => 'Калі ласка, увядзіце карэктны пошукавы запыт.',
    'Please provide a valid phone number.' => 'Калі ласка, увядзіце карэктны нумар тэлефона.',
    'The checkbox has an invalid value.' => 'Флажок мае некарэктнае значэнне.',
    'Please enter a valid email address.' => 'Калі ласка, увядзіце карэктны адрас электроннай пошты.',
    'Please select a valid option.' => 'Калі ласка, выберыце карэктны варыянт.',
    'Please select a valid range.' => 'Калі ласка, выберыце карэктны дыяпазон.',
    'Please enter a valid week.' => 'Калі ласка, увядзіце карэктны тыдзень.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Памылка аўтэнтыфікацыі.',
    'Authentication credentials could not be found.' => 'Дадзеныя аўтэнтыфікацыі не знойдзены.',
    'Authentication request could not be processed due to a system problem.' => 'Запыт аўтэнтыфікацыі не можа быць апрацаваны ў сувязі з праблемай у сістэме.',
    'Invalid credentials.' => 'Несапраўдныя дадзеныя аўтэнтыфікацыі.',
    'Cookie has already been used by someone else.' => 'Нехта іншы ўжо выкарыстаў гэтыя кукі (cookie).',
    'Not privileged to request the resource.' => 'Адсутнічаюць правы на запыт гэтага рэсурсу.',
    'Invalid CSRF token.' => 'Несапраўдны CSRF-токен.',
    'No authentication provider found to support the authentication token.' => 'Не знойдзен правайдар аўтэнтыфікацыі, які можа падтрымліваць гэты токен аўтэнтыфікацыі.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесія не даступна, яе час скончыўся, або кукі (cookies) выключаны.',
    'No token could be found.' => 'Токен не знойдзен.',
    'Username could not be found.' => 'Імя карыстальніка не знойдзена.',
    'Account has expired.' => 'Скончыўся тэрмін дзеяння акаўнта.',
    'Credentials have expired.' => 'Скончыўся тэрмін дзеяння дадзеных аўтэнтыфікацыі.',
    'Account is disabled.' => 'Акаўнт адключан.',
    'Account is locked.' => 'Акаўнт заблакіраван.',
    'Too many failed login attempts, please try again later.' => 'Зашмат няўдалых спроб уваходу, калі ласка, паспрабуйце пазней.',
    'Invalid or expired login link.' => 'Спасылка для ўваходу несапраўдная або пратэрмінаваная.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Занадта шмат няўдалых спроб уваходу ў сістэму, паспрабуйце спробу праз %minutes% хвіліну.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Занадта шмат няўдалых спроб уваходу ў сістэму, паспрабуйце спробу праз %minutes% хвілін.',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini o la carpeta configurada no existe.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'Este valor no es un UUID válido.',
    'This value should be a multiple of {{ compared_value }}.' => 'Este valor debería ser múltiplo de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Este Código de Identificación Bancaria (BIC) no está asociado con el IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Este valor debería ser un JSON válido.',
    'This collection should contain only unique elements.' => 'Esta colección debería tener exclusivamente elementos únicos.',
    'This value should be positive.' => 'Este valor debería ser positivo.',
    'This value should be either positive or zero.' => 'Este valor debería ser positivo o igual a cero.',
    'This value should be negative.' => 'Este valor debería ser negativo.',
    'This value should be either negative or zero.' => 'Este valor debería ser negativo o igual a cero.',
    'This value is not a valid timezone.' => 'Este valor no es una zona horaria válida.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Esta contraseña no se puede utilizar porque está incluida en un listado de contraseñas públicas obtenido gracias a fallos de seguridad de otros sitios y aplicaciones. Por favor utilice otra contraseña.',
    'This value should be between {{ min }} and {{ max }}.' => 'Este valor debería estar entre {{ min }} y {{ max }}.',
    'This value is not a valid hostname.' => 'Este valor no es un nombre de host válido.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'El número de elementos en esta colección debería ser múltiplo de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Este valor debería satisfacer al menos una de las siguientes restricciones:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Cada elemento de esta colección debería satisfacer su propio conjunto de restricciones.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Este valor no es un número de identificación internacional de valores (ISIN) válido.',
    'This value should be a valid expression.' => 'Este valor debería ser una expresión válida.',
    'This value is not a valid CSS color.' => 'Este valor no es un color CSS válido.',
    'This value is not a valid CIDR notation.' => 'Este valor no es una notación CIDR válida.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'El valor de la máscara de red debería estar entre {{ min }} y {{ max }}.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'This value is not a valid HTML5 color.' => 'Este valor no es un color HTML5 válido.',
    'Please enter a valid birthdate.' => 'Por favor, ingrese una fecha de cumpleaños válida.',
    'The selected choice is invalid.' => 'La opción seleccionada no es válida.',
    'The collection is invalid.' => 'La colección no es válida.',
    'Please select a valid color.' => 'Por favor, seleccione un color válido.',
    'Please select a valid country.' => 'Por favor, seleccione un país válido.',
    'Please select a valid currency.' => 'Por favor, seleccione una moneda válida.',
    'Please choose a valid date interval.' => 'Por favor, elija un intervalo de fechas válido.',
    'Please enter a valid date and time.' => 'Por favor, ingrese una fecha y hora válidas.',
    'Please enter a valid date.' => 'Por favor, ingrese una fecha valida.',
    'Please select a valid file.' => 'Por favor, seleccione un archivo válido.',
    'The hidden field is invalid.' => 'El campo oculto no es válido.',
    'Please enter an integer.' => 'Por favor, ingrese un número entero.',
    'Please select a valid language.' => 'Por favor, seleccione un idioma válido.',
    'Please select a valid locale.' => 'Por favor, seleccione una configuración regional válida.',
    'Please enter a valid money amount.' => 'Por favor, ingrese una cantidad de dinero válida.',
    'Please enter a number.' => 'Por favor, ingrese un número.',
    'The password is invalid.' => 'La contraseña no es válida.',
    'Please enter a percentage value.' => 'Por favor, ingrese un valor porcentual.',
    'The values do not match.' => 'Los valores no coinciden.',
    'Please enter a valid time.' => 'Por favor, ingrese una hora válida.',
    'Please select a valid timezone.' => 'Por favor, seleccione una zona horaria válida.',
    'Please enter a valid URL.' => 'Por favor, ingrese una URL válida.',
    'Please enter a valid search term.' => 'Por favor, ingrese un término de búsqueda válido.',
    'Please provide a valid phone number.' => 'Por favor, proporcione un número de teléfono válido.',
    'The checkbox has an invalid value.' => 'La casilla de verificación tiene un valor inválido.',
    'Please enter a valid email address.' => 'Por favor, ingrese una dirección de correo electrónico válida.',
    'Please select a valid option.' => 'Por favor, seleccione una opción válida.',
    'Please select a valid range.' => 'Por favor, seleccione un rango válido.',
    'Please enter a valid week.' => 'Por favor, ingrese una semana válida.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
    'Too many failed login attempts, please try again later.' => 'Demasiados intentos fallidos de inicio de sesión, inténtelo de nuevo más tarde.',
    'Invalid or expired login link.' => 'Enlace de inicio de sesión inválido o expirado.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Demasiados intentos fallidos de inicio de sesión, inténtelo de nuevo en %minutes% minuto.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Demasiados intentos fallidos de inicio de sesión, inténtelo de nuevo en %minutes% minutos.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;
