Instructions
// kausta sisenemine
cd kaustaNimi

// kaustas väljumine
cd ..

// käskude ajalugu
history

// GIT
git clone https://romilrobtsenkov@github.com/romilrobtsenkov/kursus.git
//
//
//git add .
//
//git commit -m "Sõnum muudatustest"
//
//git push origin master 

// kui annab Forbidden error'i siis võib olla salvestuse URL vale, saab muuta nt nii
git remote set-url origin https://romilrobtsenkov@github.com/romilrobtsenkov/kursus.git

andmebaas

if16
ifikad16

mysql -uif16 -pifikad16
show databases;

use if16_case112
select * from user sample;




    Fork'i ülesande/projekti repositoorium (leiab github.com/veebiprogrammeerimine-2016s).
    Clone'i see repositoorium enda arvutisse/serverisse ja määra repositooriumi URL kuhu edaspidi muudatusi salvestad. git clone https://USERNAME@github.com/USERNAME/REPOSITORY.git
    Muuda faile ülesande lahendamiseks ja Commit'i iga olulisem muudatus, kasutades kahte käsku. git add . git commit -m "Added this functionality to the app"
    Veendu, et kogu kood on Commit'itud. git status
    Push/sync'i GitHub'i. git push origin
    Ava pull request ülesande originaalses repositooriumis. Ülesannete tähtajaks on järgmise tunni algus, kui pole teisiti kirjas.
    Muudatusi ja täiendusi võib push'ida repositooriumisse, kuni ette antud kuupäevani.

