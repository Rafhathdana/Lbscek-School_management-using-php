mysql -h 172.31.2.6 -u csb518 -p
mydb
 use csb518;
 show table

create table customer(customer_id int primary key NOT NULL, customer_name varchar(30) NOT NULL, phone_number varchar(11) NOT NULL);



create table book(book_id int primary key NOT NULL, title varchar(30) NOT NULL, author_name varchar(30) NOT NULL, price int(4) NOT NULL, publisher varchar(30) NOT NULL);


create table sales(
customer_id int NOT NULL,
book_id int NOT NULL,
order_date date NOT NULL,
quantity int NOT NULL,
FOREIGN KEY(customer_id) REFERENCES customer(customer_id),
FOREIGN KEY(book_id) REFERENCES book(book_id)
);

insert into customer values(100,'prasad',12345);
insert into customer values(101,'john',23456);
insert into customer values(102,'sam',34567);
  


insert into book values(2001,'DS','Samantha',400,'PHI');
insert into book values(2002,'CPGM','Samantha',300,'PHI');
insert into book values(2003,'DBMS','Navathe',500,'TMH');
insert into book values(2004,'DC','Forouzan',600,'TMH');
insert into book values(2005,'CN','stallings',500,'Pearson');
insert into book values(2006,'python','Lambert',200,'Pearson');

insert into sales values(100,2001,'2017-01-02',3);
insert into sales values(100,2002,'2016-04-02',4);
insert into sales values(102,2006,'2018-01-02',2);
insert into sales values(101,2005,'2017-05-02',1);


UPDATE 'sselect sum(price*quantity) from book,sales where book.book_id=2 and order_date between '2018-04-01' and '2019-03-30'ales' SET 'BOOK_ID' = '1001' [WHERE QUANTITY=3];
1. 
 select sum(price*quantity) from book,sales where book.book_id=2 and order_date between '2017-04-01' and '2018-03-30'
 
select sum(book.price*sales.quantity) as total from book,sales where book.book_id=sales.book_id and order_date between '2017-04-01' and '2018-03-30';

2.
 select publisher, sum(price) from book group by publisher having publisher<>'PHI';

 rough 


  ``and `   `and book_id=0002;
SELECT customer_id,book_id,order_date,quantity,sum(price)
from sales,book group by order_date between ____-04-01 and ____-03-31
select publisher, sum(price) from book where group by publisher not in (select publisher from book where publisher='dana'); 
SELECT customer_id,book_id,order_date,quantity
from sales group by order_date between ____-04-01 and ____-03-31








create table employee(Empno int primary key NOT NULL, Empname varchar(30) NOT NULL,Empaddress varchar(50) NOT NULL, salery varchar(10) NOT NULL, dept varchar(30) NOT NULL);

insert into employee values(2001,'Hari','Palakkad',30000,'Research');
insert into employee values(2002,'Devi','Kasaragod',40000,'Network');
insert into employee values(2003,'Gupta','Kannur',50000,'System Admin');
insert into employee values(2004,'Ravi','Calicut',60000,'HR');
insert into employee values(2005,'Rani','Calicut',70000,'hr');

1.

select sum(salery) as total from employee;

2.
select count(Empno) as total_employee from employee where salery<50000;

3.
select * from employee where salery=(select max(salery) from employee);

4.
select avg(salery) as average_salery from employee;






, , , , , , , 


create table student(Studentno int primary key NOT NULL, studentname varchar(30) NOT NULL,maths varchar(5) NOT NULL, physics varchar(5) NOT NULL, chemistry varchar(5) NOT NULL, C_programming varchar(5) NOT NULL, Department varchar(30) NOT NULL, Address varchar(50) NOT NULL);

create table book(book_id int primary key NOT NULL, title varchar(30) NOT NULL, author_name varchar(30) NOT NULL, price int(4) NOT NULL, publisher varchar(30) NOT NULL);


insert into student values(100,'Hari',50,60,45,75,'CSE','Kasaragod');
insert into student values(101,'Devi',60,55,78,40,'CSE','Kasaragod');
insert into student values(102,'Sam',45,77,88,45,'IT','Kannur');
insert into student values(103,'SreeHari',90,75,77,60,'IT','Calicut');
insert into student values(104,'Rani',91,98,89,52,'ECE','Kannur');
insert into student values(105,'Raj',88,77,67,48,'CSE','Palakkad');



1.
select studentno , studentname from student where C_programming < 50 order by C_programming;


2.
select studentno , studentname ,Department from student order by Department;

3.
select * from student where studentname like 's%';
4.


select count(Department) as department_count ,avg(maths) as maths_avg ,Department from student group by Department;



create table emp(empid int primary key NOT NULL, Empname varchar(30) NOT NULL,deptNo varchar(30) NOT NULL, salery varchar(10) NOT NULL);

insert into emp values(2001,'Hari','1006',30000);
insert into emp values(2002,'Devi','1002',40000);
insert into emp values(2003,'Gupta','1003',50000);
insert into emp values(2004,'Ravi','1004',60000);
insert into emp values(2005,'Rani','1007',70000);


create table dept(deptNo int primary key NOT NULL, deptName varchar(30) NOT NULL,deptLocation varchar(30) NOT NULL);

insert into dept values(1001,'Hr','Calicut');
insert into dept values(1002,'Marketing','Cochin');
insert into dept values(1003,'Sales','Trivandrum');
insert into dept values(1004,'Testing','Bangalore');
insert into dept values(1005,'Development','Bangalore');




Employees (emp_id, emp_name, dept_no, emp_salary)
i.
Display the employee details, departments that the departments are same in both the employees and department

select empid ,Empname, emp.deptNo ,salery, deptName ,deptLocation  from emp,dept where emp.deptNo=dept.deptNo;

ii.
Display the employee detail whose departments are not same in both the employees and departments

select * from emp where empid not in (select empid from emp,dept where emp.deptNo=dept.deptNo)

iii. Display the details of those who draw the salary greater than the average salary

select empname,salery from emp where salery> (select avg(salery) from emp);

iv. Display all the department numbers available with the department and employee tables
avoiding duplicates

select deptNo FROM dept union select deptNo from emp where deptNo not in (select dept.deptNo from emp,dept where emp.deptNo=dept.deptNo);

5.

select deptNo from emp where deptNo not in (select dept.deptNo from emp,dept where emp.deptNo=dept.deptNo);create view sstudent as select studentno,studentname,Department,Address from student;



create view sstudent as select studentno,studentname,Department,Address from student;

create view ssstudent as select studentno,studentname,maths, physics, chemistry, C_programming from student;









create table table1(var1 int(3) NOT NULL,var2 int(3) NOT NULL, sum int(3) NULL);
create table table2(var1 int(3) NOT NULL,var2 int(3) NOT NULL,sum int(3) NULL);

Create trigger updateSum Before insert On table1 For each row Set new.sum=new.var1+new.var2;

Create trigger updateTable2 After delete On table1 For each row insert into table2 values(old.var1,old.var2,old.sum);


insert into table1 values(3,6,null);


select * from table1;

select * from table2;

delete from table1 where var1=3;


select * from table1;


select * from table2;



create table Item (itemid int primary key NOT NULL, idesc varchar(30) NOT NULL, qty_on_hand varchar(30) NOT NULL, price int(7) NOT NULL, category varchar(30) NOT NULL);

create table saless(
Sid int NOT NULL,
itemid int NOT NULL,
qty_sold int NOT NULL,
price int(7) NOT NULL,
total int(7) NOT NULL,
FOREIGN KEY(itemid) REFERENCES Item(itemid),
FOREIGN KEY(price) REFERENCES Item(price));


Sales (Sid, itemid, qty_sold, price, total)
Item (itemid, idesc, qty_on_hand, price, category)








