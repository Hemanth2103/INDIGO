create table products(pid serial primary key, pname text not null, prate int not NULL,pimage text,pimagealt text,prating int not null,pqt int not null,pcusine text not null);

create table profile(uid serial primary key,username text not null,
firstname text not null,
lastname text not null,
email text not null,
phonenumber bigint not null,
address text not null,
city text not null,
country text not null,
zip bigint not null,
gender text not null,
dob date not null,
profileimage text not null);

create table users(uid serial primary key,username text not null,password text not null);

insert into table users values(1,'hs788','hs788');

insert into products values(1,'Chicken Biryani',10,'chickenbiryani.jpg','chickenbiryani',4,1,'Indian');

insert into profile values(1,'hs788','Hemanth Reddy','Sudini','hs788@nau.edu',9284339589,'1830 South Milton Rd',
'Flagstaff','AZ','86001','M','04/03/2001','1_hs788.png');