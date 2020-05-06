/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     04/05/2020 23:01:53                          */
/*==============================================================*/


drop table if exists Comment;

drop table if exists Event;

drop table if exists User;

/*==============================================================*/
/* Table: Comment                                               */
/*==============================================================*/
create table Comment
(
   idComment            int not null auto_increment,
   idEvent              int not null,
   comment              varchar(254),
   dateComment          datetime,
   author               varchar(254),
   primary key (idComment)
);

/*==============================================================*/
/* Table: Event                                                 */
/*==============================================================*/
create table Event
(
   idEvent              int not null auto_increment,
   name                 varchar(254),
   description          varchar(254),
   dateBegin            datetime,
   dateEnd              datetime,
   planner              varchar(254),
   primary key (idEvent)
);

/*==============================================================*/
/* Table: User                                                  */
/*==============================================================*/
create table User
(
   idUser               int not null auto_increment,
   username             varchar(254) UNIQUE,
   password             varchar(254),
   primary key (idUser)
);

alter table Comment add constraint FK_association1 foreign key (idEvent)
      references Event (idEvent) on delete restrict on update restrict;

