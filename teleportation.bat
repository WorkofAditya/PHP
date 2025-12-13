@echo off
set source="D:\BCA\DS"
set destination="C:\wamp64\www"

xcopy %source% %destination% /E /I /Y

echo Done.
pause
