/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2019/7/12 8:41:07                            */
/*==============================================================*/


drop table if exists activity;

drop table if exists college;

drop table if exists group;

drop table if exists hold;

drop table if exists institution;

drop table if exists lectures;

drop table if exists stu_activity;

drop table if exists stu_lecture;

drop table if exists volunteer;

/*==============================================================*/
/* Table: activity                                              */
/*==============================================================*/
create table activity
(
   activity_id          int not null,
   activity_time        varchar(1024),
   activity_site        varchar(1024),
   activity_theme       varchar(1024),
   primary key (activity_id)
);

/*==============================================================*/
/* Table: college                                               */
/*==============================================================*/
create table college
(
   college_id           int not null,
   college_name         varchar(50),
   college_leader       varchar(50),
   college_vnum         int,
   primary key (college_id)
);

/*==============================================================*/
/* Table: group                                                 */
/*==============================================================*/
create table group
(
   group_id             int not null,
   group_name           varchar(50),
   primary key (group_id)
);

/*==============================================================*/
/* Table: hold                                                  */
/*==============================================================*/
create table hold
(
   ins_id               int not null,
   activity_id          int not null,
   isactive             bool,
   money                float,
   primary key (ins_id, activity_id)
);

/*==============================================================*/
/* Table: institution                                           */
/*==============================================================*/
create table institution
(
   ins_id               int not null,
   ins_name             varchar(100),
   ins_phonenum         varchar(50),
   primary key (ins_id)
);

/*==============================================================*/
/* Table: lectures                                              */
/*==============================================================*/
create table lectures
(
   lecture_id           int not null,
   lecturer             varchar(50),
   lecture_date         date,
   primary key (lecture_id)
);

/*==============================================================*/
/* Table: stu_activity                                          */
/*==============================================================*/
create table stu_activity
(
   activity_id          int not null,
   stu_id               int not null,
   volunteer_time       float,
   primary key (activity_id, stu_id)
);

/*==============================================================*/
/* Table: stu_lecture                                           */
/*==============================================================*/
create table stu_lecture
(
   lecture_id           int not null,
   stu_id               int not null,
   lecture_grade        int,
   primary key (lecture_id, stu_id)
);

/*==============================================================*/
/* Table: volunteer                                             */
/*==============================================================*/
create table volunteer
(
   stu_id               int not null,
   college_id           int,
   group_id             int,
   stu_name             varchar(50),
   stu_college          varchar(100),
   stu_gender           varchar(10),
   stu_nation           varchar(30),
   stu_age              int,
   primary key (stu_id)
);

alter table hold add constraint FK_hold foreign key (ins_id)
      references institution (ins_id);

alter table hold add constraint FK_hold2 foreign key (activity_id)
      references activity (activity_id);

alter table stu_activity add constraint FK_stu_activity foreign key (activity_id)
      references activity (activity_id);

alter table stu_activity add constraint FK_stu_activity2 foreign key (stu_id)
      references volunteer (stu_id);

alter table stu_lecture add constraint FK_stu_lecture foreign key (lecture_id)
      references lectures (lecture_id);

alter table stu_lecture add constraint FK_stu_lecture2 foreign key (stu_id)
      references volunteer (stu_id);

alter table volunteer add constraint FK_stu_college foreign key (college_id)
      references college (college_id);

alter table volunteer add constraint FK_stu_group foreign key (group_id)
      references group (group_id);

