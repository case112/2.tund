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

mysql -uif16 -pifikad16
show databases;

use if16_case112
select * from user sample;
