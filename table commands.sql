create table loans 
(customerId int auto_increment, customerName varchar(50), fatherName varchar(50), motherName varchar(50), email varchar(256),
phoneNo varchar(15), dob date, address text, occupation varchar(30), ccupation_name varchar(30), loan int, income int, 
loc varchar(20), loanAmount int, purchase varchar(2), approval bool, Primary key (customerId));

create table contacts 
(contactId int auto_increment, customerName varchar(50), email varchar(256), phoneNo varchar(15),
enquiry text, Primary key (contactId));

create table users 
(customerId int, username varchar(30), passwd varchar(30), primary key (username));