# onlineExamination
This is the php-project forcollege assignment.
Sirno. | Topics
--- | --- 
1 | [Introduction](https://github.com/rathodloki/onlineExamination#Introduction)
2 | [Requirements of Analysis](https://github.com/rathodloki/onlineExamination#Requirements-of-Analysis)
3 | [System Design](https://github.com/rathodloki/onlineExamination#System-Design)
4 | [Glance Look](https://github.com/rathodloki/onlineExamination#Glance-Look)

## Introduction
<p>Online Examination is very helpful to users. The aim of this project is to provide quick. immediate and easy way to appear the exam. It can provide special advantages to the students/applicants. The online examination system can automatically add the marks allocated in each question to determine the total mark for the questions. A time limit can be set for the questions. Online Examination System allows jumping to specific questions based on the previous answer. The online examination system !limits the number of times a student can write a question. Login module helps the user to login to the site. For that he/she must type the username and password correctly. The login provision in this page helps the already registered user to directly access the site and there is a link for registration to a user who is new to this site. Student module is mainly for the students. T. helps the students to register for the exam and answer the exam. For registration name, address phone no, role id, password should be entered and other are filled. This will provide result after the exam according to correct and wrong answer. Administrator module is mainly for the administrator. This will contain the creation of question paper, preview of already created question paper, and the report of the administrator. For creating the question paper he/she must enter Exam ID. No: of questions, total time Marks per Question. Option type. For showing the preview of already created question paper he/she must enter the correct Exam id.</p>

<br>**Login Page** 
![ Login Page ](https://user-images.githubusercontent.com/67568211/116813192-3d6a5e00-ab70-11eb-9493-738c2bb6fb8f.PNG)


## Requirements of Analysis
<p>Online Examination is very helpful to users. The aim of this project is to provide quick. immediate and easy way to appear the exam. It can provide special advantages to the students/applicants. The online examination system can automatically add the marks allocated in each question to determine the total mark for the questions. A time limit can be set for the questions. Online Examination System allows jumping to specific questions based on the previous answer. The online examination system !limits the number of times a student can write a question. Login module helps the user to login to the site. For that he/she must type the username and password correctly. The login provision in this page helps the already registered user to directly access the site and there is a link for registration to a user who is new to this site. Student module is mainly for the students. T. helps the students to register for the exam and answer the exam. For registration name, address phone no, role id, password should be entered and other are filled. This will provide result after the exam according to correct and wrong answer. Administrator module is mainly for the administrator. This will contain the creation of question paper, preview of already created question paper, and the report of the administrator. For creating the question paper he/she must enter Exam ID. No: of questions, total time Marks per Question. Option type. For showing the preview of already created question paper he/she must enter the correct Exam id. </p>

## System Design

1. **Student Module** - The student module contain another module
    1. **Registration Module** - Each of the students must first register  with the software. For the registration part of the student will have to enter his details like name, address etc. and get a User Id from the software. Once the student register with software they are able to give the exam.
2. **Course Module** - The course module contain another three module
    1. **Course Registration** -This modules contain all the information about different courses. 
    1. **Question Entry** - This module contains all the question   of different subjects. The questions are multiple types. 
    1. **Mark Entry** - This module contains the mark details of different subjects.

3. **Exam Module** - This module is used for performing examination process. Time  slot is allotted for exam. Two hour for each exam. Copywriting not possible in    the exam. Result generation is also the part of this module. As the part of the result generation make the mark list. The mark list contains Register number, name, course, subject, semester, mark, etc.
4. **Administrators Module** - The module protected by user id and password.This is encrypted format. So Ordinary users of the software will not be permitted to enter this area of the software. The module will be focusing on the maintenance like Master Data entry operation. 

### Schema Design
![databse_schemapng](https://user-images.githubusercontent.com/67568211/116812783-2aef2500-ab6e-11eb-8c36-130ab6b23a85.png)
<br>**Activity Diagram of login process:** 
![Activity Diagram 0](https://user-images.githubusercontent.com/67568211/116812974-20815b00-ab6f-11eb-89c4-cf6ef46bbeb7.png)

## Glance Look
Here are some images from my Project:
<br>**HomePage**
![home](https://user-images.githubusercontent.com/67568211/116813277-b10c6b00-ab70-11eb-9e76-0ef35bb979ce.PNG)
<br>**Student Login Page**
![loginFull](https://user-images.githubusercontent.com/67568211/116813254-9639f680-ab70-11eb-983a-8db19bb70e41.PNG)
<br>**Exam Started**<br>
![takeexam](https://user-images.githubusercontent.com/67568211/116813318-db5e2880-ab70-11eb-965e-09956df620be.PNG)
<br>**Result**
![results](https://user-images.githubusercontent.com/67568211/116813343-fa5cba80-ab70-11eb-8202-b8b33c87f138.PNG)
<br>**Report**
![report](https://user-images.githubusercontent.com/67568211/116813803-51638f00-ab73-11eb-802d-ab93d672fa86.png)

**I hope you like my project :smile:.**<br>
Have great day :heart: :wave:
