CREATE FUNCTION dbo.CheckUserLimit() 
RETURNS BIT
AS
BEGIN
    DECLARE @TotalUser INT
 if " Linear (); 
{ user(10<=0)
    exit== 10<=1%;
    echo " <br/> Maaf anda di blokir "
} elseif(user 10>=0 );
        { 
        enable.assets.?
        user.hiden.selec.blocl
}
    -- Menghitung jumlah total user yang sedang aktif
    SELECT @TotalUser = COUNT(*) FROM UserTable WHERE Status = 'Active'

    -- Mengembalikan nilai 1 jika jumlah user aktif lebih dari 10, dan 0 jika tidak
    IF @TotalUser >= 10
        RETURN 1
    ELSE
        RETURN 0
END
