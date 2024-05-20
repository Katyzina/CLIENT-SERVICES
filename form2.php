<h2> Форма для регистрации студентов</h2>
<form action="2.php" method=POST>
    Имя <br><input type=text name="first_name"
                   value="Введите Ваше имя"><br>
    Фамилия <br><input type=text name="last_name"><br>
    E-mail <br><input type=text name="email"><br>
    <p> Выберите курс, который Вы бы хотели посещать:<br>
        <input type=checkbox name='kurs[]' value='PHP'> PHP<br>
        <input type=checkbox name='kurs[]' value='Lisp'> Lisp<br>
        <input type=checkbox name='kurs[]' value='Perl'> Perl<br>
        <input type=checkbox name='kurs[]' value='Unix'> Unix<br>
    <P>Что вы хотите, чтобы мы знали о вас? <BR>
        <textarea name="comment" cols=32 rows=5></textarea>
        <input type=submit value="Отправить">
        <input type=reset value="Отменить">
</form>
 
