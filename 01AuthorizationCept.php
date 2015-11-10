<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('open page Viewer and authorization error.The password field blank');
$I->amOnPage('/');

//1. Поле «email» оставить пустым.
//Поле «пароль»заполнить любоми значениями.
//Нажать на кнопку «Войти»
$I->fillField('password', 'test123');
$I->click('Войти');
$I->see('Ошибка авторизации. Поле email не может быть пустым');

$I->

//2. В поле «email» ввести «moderator@basic»
//Поле «пароль» оставить пустым.
//Нажать на кнопку «Войти»
$I->fillField('email', 'moderator@basic');
$I->click('Войти');
$I->waitForElement('#agree_button', 30); // secs
$I->see('Ошибка авторизации. Поле password не может быть пустым');

//3. Поле «email» оставить пустым.
//Поле «пароль» оставить пустым.
//Нажать на кнопку «Войти»
$I->click('Войти');
$I->see('Ошибка авторизации. Поле email не может быть пустым');

//4. Поле «email» оставить пустым.
//Поле «пароль» оставить пустым.
//несколько раз кликнуть на кнопку «Войти»
$I->doubleClick('Войти');


$I->see('Ошибка авторизации. Поле email не может быть пустым');

//5. Поле «email» оставить пустым переместив в него курсор.
//Поле «пароль» оставить пустым.
//Нажать на кнопку «Enter»
$I->click('email');
$I->pressKey('INPUT#jobs_name.form-control.input-lg','', WebDriverKeys::ENTER);
$I->see('Ошибка авторизации. Поле email не может быть пустым');

//6. Поле «email» оставить пустым.
//Поле «пароль» оставить пустым переместив в него курсор.
//Нажать на кнопку «Enter»
$I->click('password');
$I->pressKey('INPUT#jobs_name.form-control.input-lg','', WebDriverKeys::ENTER);
$I->see('Ошибка авторизации. Поле email не может быть пустым');

//7. Поле «email» ввести " moderator@basic@.
//Поле «пароль» ввести "Darkness".
//Нажать на кнопку «Enter»
$I->fillField('email', 'moderator@basic@');
$I->fillField('password', 'Darkness');
$I->pressKey('INPUT#jobs_name.form-control.input-lg','', WebDriverKeys::ENTER);
$I->see('Ошибка авторизации. Проверьте правильность ввода логина и пароля')
?>