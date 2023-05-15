<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('he', array (
  'validators' => 
  array (
    'This value should be false.' => 'הערך צריך להיות שקר.',
    'This value should be true.' => 'הערך צריך להיות אמת.',
    'This value should be of type {{ type }}.' => 'הערך צריך להיות מסוג {{ type }}.',
    'This value should be blank.' => 'הערך צריך להיות ריק.',
    'The value you selected is not a valid choice.' => 'הערך שבחרת אינו חוקי.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'אתה צריך לבחור לפחות {{ limit }} אפשרויות.|אתה צריך לבחור לפחות {{ limit }} אפשרויות.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'אתה צריך לבחור לכל היותר {{ limit }} אפשרויות.|אתה צריך לבחור לכל היותר {{ limit }} אפשרויות.',
    'One or more of the given values is invalid.' => 'אחד או יותר מהערכים אינו חוקי.',
    'This field was not expected.' => 'שדה זה לא היה צפוי',
    'This field is missing.' => 'שדה זה חסר.',
    'This value is not a valid date.' => 'הערך אינו תאריך חוקי.',
    'This value is not a valid datetime.' => 'הערך אינו תאריך ושעה חוקיים.',
    'This value is not a valid email address.' => 'כתובת המייל אינה תקינה.',
    'The file could not be found.' => 'הקובץ לא נמצא.',
    'The file is not readable.' => 'לא ניתן לקרוא את הקובץ.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'הקובץ גדול מדי ({{ size }} {{ suffix }}). הגודל המרבי המותר הוא {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'סוג MIME של הקובץ אינו חוקי ({{ type }}). מותרים סוגי MIME {{ types }}.',
    'This value should be {{ limit }} or less.' => 'הערך צריך להכיל {{ limit }} תווים לכל היותר.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'הערך ארוך מידי. הוא צריך להכיל {{ limit }} תווים לכל היותר.|הערך ארוך מידי. הוא צריך להכיל {{ limit }} תווים לכל היותר.',
    'This value should be {{ limit }} or more.' => 'הערך צריך להכיל {{ limit }} תווים לפחות.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'הערך קצר מידי. הוא צריך להכיל {{ limit }} תווים לפחות.|הערך קצר מידי. הערך צריך להכיל {{ limit }} תווים לפחות.',
    'This value should not be blank.' => 'הערך לא אמור להיות ריק.',
    'This value should not be null.' => 'הערך לא אמור להיות ריק.',
    'This value should be null.' => 'הערך צריך להיות ריק.',
    'This value is not valid.' => 'הערך אינו חוקי.',
    'This value is not a valid time.' => 'הערך אינו זמן תקין.',
    'This value is not a valid URL.' => 'זאת אינה כתובת אתר תקינה.',
    'The two values should be equal.' => 'שני הערכים צריכים להיות שווים.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'הקובץ גדול מדי. הגודל המרבי המותר הוא {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'הקובץ גדול מדי.',
    'The file could not be uploaded.' => 'לא ניתן לעלות את הקובץ.',
    'This value should be a valid number.' => 'הערך צריך להיות מספר חוקי.',
    'This file is not a valid image.' => 'הקובץ הזה אינו תמונה תקינה.',
    'This is not a valid IP address.' => 'זו אינה כתובת IP חוקית.',
    'This value is not a valid language.' => 'הערך אינו שפה חוקית.',
    'This value is not a valid locale.' => 'הערך אינו אזור תקף.',
    'This value is not a valid country.' => 'הערך אינו ארץ חוקית.',
    'This value is already used.' => 'הערך כבר בשימוש.',
    'The size of the image could not be detected.' => 'לא ניתן לקבוע את גודל התמונה.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'רוחב התמונה גדול מדי ({{ width }}px). הרוחב המקסימלי הוא {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'רוחב התמונה קטן מדי ({{ width }}px). הרוחב המינימלי הוא {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'גובה התמונה גדול מדי ({{ height }}px). הגובה המקסימלי הוא {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'גובה התמונה קטן מדי ({{ height }}px). הגובה המינימלי הוא {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'הערך צריך להיות סיסמת המשתמש הנוכחי.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'הערך צריך להיות בדיוק {{ limit }} תווים.|הערך צריך להיות בדיוק {{ limit }} תווים.',
    'The file was only partially uploaded.' => 'הקובץ הועלה באופן חלקי.',
    'No file was uploaded.' => 'הקובץ לא הועלה.',
    'No temporary folder was configured in php.ini.' => 'לא הוגדרה תיקייה זמנית ב php.ini.',
    'Cannot write temporary file to disk.' => 'לא ניתן לכתוב קובץ זמני לדיסק.',
    'A PHP extension caused the upload to fail.' => 'סיומת PHP גרם להעלאה להיכשל.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'האוסף אמור להכיל {{ limit }} אלמנטים או יותר.|האוסף אמור להכיל {{ limit }} אלמנטים או יותר.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'האוסף אמור להכיל {{ limit }} אלמנטים או פחות.|האוסף אמור להכיל {{ limit }} אלמנטים או פחות.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'האוסף צריך להכיל בדיוק {{ limit }} אלמנטים.|האוסף צריך להכיל בדיוק {{ limit }} אלמנטים.',
    'Invalid card number.' => 'מספר הכרטיס אינו חוקי.',
    'Unsupported card type or invalid card number.' => 'סוג הכרטיס אינו נתמך או לא חוקי.',
    'This is not a valid International Bank Account Number (IBAN).' => 'מספר חשבון בנק בינלאומי אינו חוקי (IBAN).',
    'This value is not a valid ISBN-10.' => 'הערך אינו ערך ISBN-10 חוקי.',
    'This value is not a valid ISBN-13.' => 'הערך אינו ערך ISBN-13 חוקי.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'הערך אינו ערך ISBN-10 חוקי או ערך ISBN-13 חוקי.',
    'This value is not a valid ISSN.' => 'הערך אינו ערך ISSN חוקי.',
    'This value is not a valid currency.' => 'הערך אינו ערך מטבע חוקי.',
    'This value should be equal to {{ compared_value }}.' => 'הערך חייב להיות שווה ל {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'הערך חייב להיות גדול מ {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'הערך חייב להיות גדול או שווה ל {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'הערך חייב להיות זהה ל {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'הערך חייב להיות קטן מ {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'הערך חייב להיות קטן או שווה ל {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'הערך חייב להיות לא שווה ל {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'הערך חייב להיות לא זהה ל {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'היחס של התמונה הוא גדול מדי ({{ ratio }}). היחס המקסימלי האפשרי הוא {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'היחס של התמונה הוא קטן מדי ({{ ratio }}). היחס המינימלי האפשרי הוא {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'התמונה מרובעת ({{ width }}x{{ height }}px). אסורות תמונות מרובעות.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'התמונה היא לרוחב ({{ width }}x{{ height }}px). אסורות תמונות לרוחב.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'התמונה היא לאורך ({{ width }}x{{ height }}px). אסורות תמונות לאורך.',
    'An empty file is not allowed.' => 'אסור קובץ ריק.',
    'The host could not be resolved.' => 'לא הייתה אפשרות לזהות את המארח.',
    'This value does not match the expected {{ charset }} charset.' => 'הערך אינו תואם למערך התווים {{ charset }} הצפוי.',
    'This is not a valid Business Identifier Code (BIC).' => 'קוד זיהוי עסקי אינו חוקי (BIC).',
    'Error' => 'שגיאה',
    'This is not a valid UUID.' => 'הערך אינו ערך UUID חוקי.',
    'This value should be a multiple of {{ compared_value }}.' => 'הערך חייב להיות כפולה של {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'הקוד זיהוי עסקי (BIC) אינו משוייך ל IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'הערך אינו ערך JSON תקין.',
    'This collection should contain only unique elements.' => 'האוסף חייב להכיל רק אלמנטים ייחודיים.',
    'This value should be positive.' => 'הערך חייב להיות חיובי.',
    'This value should be either positive or zero.' => 'הערך חייב להיות חיובי או אפס.',
    'This value should be negative.' => 'הערך חייב להיות שלילי.',
    'This value should be either negative or zero.' => 'הערך חייב להיות שלילי או אפס.',
    'This value is not a valid timezone.' => 'הערך אינו אזור זמן תקין.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'סיסמא זו הודלפה בהדלפת מידע, אסור להשתמש בה. אנא השתמש בסיסמה אחרת.',
    'This value should be between {{ min }} and {{ max }}.' => 'הערך חייב להיות בין {{ min }} ו- {{ max }}.',
    'This value is not a valid hostname.' => 'ערך זה אינו שם מארח חוקי.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'מספר האלמנטים באוסף זה צריך להיות מכפיל של {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'ערך זה אמור לעמוד לפחות באחד התנאים הבאים:',
    'Each element of this collection should satisfy its own set of constraints.' => 'כל אלמנט באוסף זה אמור לעמוד בקבוצת התנאים שלו.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'ערך זה אינו מספר זיהוי ניירות ערך בינלאומי תקף (ISIN).',
    'This value should be a valid expression.' => 'ערך זה חייב להיות ביטוי חוקי.',
    'This value is not a valid CSS color.' => 'ערך זה אינו צבע CSS חוקי.',
    'This value is not a valid CIDR notation.' => 'ערך זה אינו סימון CIDR חוקי.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'הערך של מסכת הרשת חייב להיות בין {{ min }} ו {{ max }}.',
    'This form should not contain extra fields.' => 'הטופס לא צריך להכיל שדות נוספים.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'הקובץ שהועלה גדול מדי. נסה להעלות קובץ קטן יותר.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'אסימון CSRF אינו חוקי. אנא נסה לשלוח שוב את הטופס.',
    'This value is not a valid HTML5 color.' => 'ערך זה אינו צבע HTML5 חוקי.',
    'Please enter a valid birthdate.' => 'נא להזין את תאריך לידה תקני.',
    'The selected choice is invalid.' => 'הבחירה שנבחרה אינה חוקית.',
    'The collection is invalid.' => 'האוסף אינו חוקי.',
    'Please select a valid color.' => 'אנא בחר צבע חוקי.',
    'Please select a valid country.' => 'אנא בחר מדינה חוקית.',
    'Please select a valid currency.' => 'אנא בחר מטבע חוקי.',
    'Please choose a valid date interval.' => 'אנא בחר מרווח תאריכים חוקי.',
    'Please enter a valid date and time.' => 'אנא הזן תאריך ושעה תקנים.',
    'Please enter a valid date.' => 'נא להזין תאריך חוקי.',
    'Please select a valid file.' => 'אנא בחר קובץ חוקי.',
    'The hidden field is invalid.' => 'השדה הנסתר אינו חוקי.',
    'Please enter an integer.' => 'אנא הזן מספר שלם.',
    'Please select a valid language.' => 'אנא בחר שפה חוקי.',
    'Please select a valid locale.' => 'אנא בחר שפה מקומית.',
    'Please enter a valid money amount.' => 'אנא הזן סכום כסף חוקי.',
    'Please enter a number.' => 'אנא הזן מספר.',
    'The password is invalid.' => 'הסיסמה אינה חוקית.',
    'Please enter a percentage value.' => 'אנא הזן ערך באחוזים.',
    'The values do not match.' => 'הערכים אינם תואמים.',
    'Please enter a valid time.' => 'אנא הזן שעה חוקי.',
    'Please select a valid timezone.' => 'אנא בחר אזור זמן חוקי.',
    'Please enter a valid URL.' => 'נא להזין את כתובת אתר חוקית.',
    'Please enter a valid search term.' => 'אנא הזן מונח חיפוש חוקי.',
    'Please provide a valid phone number.' => 'אנא ספק מספר טלפון חוקי.',
    'The checkbox has an invalid value.' => 'לתיבת הסימון יש ערך לא חוקי.',
    'Please enter a valid email address.' => 'אנא הזן כתובת דוא"ל תקנית.',
    'Please select a valid option.' => 'אנא בחר אפשרות חוקית.',
    'Please select a valid range.' => 'אנא בחר טווח חוקי.',
    'Please enter a valid week.' => 'אנא הזן שבוע תקף.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'שגיאה באימות',
    'Authentication credentials could not be found.' => 'פרטי זיהוי לא נמצאו.',
    'Authentication request could not be processed due to a system problem.' => 'לא ניתן היה לעבד את בקשת אימות בגלל בעיית מערכת.',
    'Invalid credentials.' => 'שם משתמש או סיסמא שגויים.',
    'Cookie has already been used by someone else.' => 'עוגיה כבר שומשה.',
    'Not privileged to request the resource.' => 'אין הרשאה מתאימה.',
    'Invalid CSRF token.' => 'אסימון CSRF לא חוקי.',
    'No authentication provider found to support the authentication token.' => 'לא נמצא ספק אימות המתאימה לבקשה.',
    'No session available, it either timed out or cookies are not enabled.' => 'אין סיישן זמין, או שתם הזמן הקצוב או העוגיות אינן מופעלות.',
    'No token could be found.' => 'הטוקן לא נמצא.',
    'Username could not be found.' => 'שם משתמש לא נמצא.',
    'Account has expired.' => 'החשבון פג תוקף.',
    'Credentials have expired.' => 'פרטי התחברות פקעו תוקף.',
    'Account is disabled.' => 'החשבון מבוטל.',
    'Account is locked.' => 'החשבון נעול.',
    'Too many failed login attempts, please try again later.' => 'יותר מדי ניסיונות כניסה כושלים, אנא נסה שוב מאוחר יותר.',
    'Invalid or expired login link.' => 'קישור כניסה לא חוקי או שפג תוקפו.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'יותר מדי ניסיונות כניסה כושלים, אנא נסה שוב בוד %minutes% דקה.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'יותר מדי ניסיונות כניסה כושלים, אנא נסה שוב בוד %minutes% דקות.',
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
