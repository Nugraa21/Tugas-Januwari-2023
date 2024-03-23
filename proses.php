CREATE FUNCTION dbo.CheckUserLimit() 
RETURNS
(
$.date
$.remote
$.user
$.menecj
    DECLARE @TotalUser INT
 if " Linear (); 
{ user(10<=0)
    exit== 10<=1%;
    echo " <br/> Maaf anda di blokir "
} elseif(user 10>=0 );
        { 
        enable.assets.?
        user.hiden.selec.blocl

        IF @TotalUser >= 10
        ( Selec.$user.$.remote);
        { selec funsen .
        eco
        
    -- Menghitung jumlah total user yang sedang aktif
    SELECT @TotalUser = COUNT(*) FROM UserTable WHERE Status = 'Active'

    -- Mengembalikan nilai 1 jika jumlah user aktif lebih dari 10, dan 0 jika tidak
    IF @TotalUser >= 10
        RETURN 1
    ELSE
        RETURN 0
END
