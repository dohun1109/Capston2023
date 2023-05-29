function check_input()
{
    if (!document.login.id.value)
    {
        alert("아이디를 입력하세요.");    
        document.login.id.focus();
        return;
    }

    if (!document.login.pass.value)
    {
        alert("비밀번호를 입력하세요.");    
        document.login.pass.focus();
        return;
    }
    document.login.submit();
}