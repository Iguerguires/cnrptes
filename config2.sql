drop database if exists cnrptes;

create database cnrptes 
DEFAULT CHARACTER set utf8
default collate utf8_general_ci;

drop table if exists admin;

drop table if exists choisire;

drop table if exists comments;

drop table if exists federation;

drop table if exists message;

drop table if exists reservation;

drop table if exists slider;

drop table if exists theme;

/*drop table if exists type_resrvation;

/*==============================================================*/
/* Table: admin                                                 */
/*==============================================================*/
create table admin
(
   id_ad                int not null AUTO_INCREMENT,
   nom_ad               varchar(30) not null,
   pass_ad              varchar(30) not null,
   primary key (id_ad)
);

/*==============================================================*/
/* Table: choisire                                              */
/*==============================================================*/
/*create table choisire
(
   id_res               int not null ,
   id_tres              int not null ,
   primary key (id_res, id_tres)
);

/*==============================================================*/
/* Table: comments                                              */
/*==============================================================*/
create table comments
(
   id_comment           int not null AUTO_INCREMENT,
   id_theme             int not null,
   id_fed               int not null,
   reponse_id           int,
   post_id              int,
   timestamp            datetime,
   name                 varchar(30),
   message              text,
   primary key (id_comment)
);

/*==============================================================*/
/* Table: federation                                            */
/*==============================================================*/
create table federation
(
   id_fed               int not null AUTO_INCREMENT,
   nom_fed              varchar(30),
   email_fed            varchar(50),
   tel_fed              varchar(30),
   add_fed              varchar(70),
   pass_fed             varchar(30),
   primary key (id_fed)
);

/*==============================================================*/
/* Table: message                                               */
/*==============================================================*/
create table message
(
   id_msg               int not null AUTO_INCREMENT,
   id_ad                int not null,
   nom_msg              varchar(30) not null,
   email_msg            varchar(60) not null,
   sujet_msg            varchar(40) not null,
   con_msg              text not null,
   primary key (id_msg)
);

/*==============================================================*/
/* Table: reservation                                           */
/*==============================================================*/
create table reservation
(
   id_res               int not null AUTO_INCREMENT,
   id_fed               int not null,
   id_ad                int not null,
   num_s                int,
   date_deb             date,
   date_fin             date,
   type_res             varchar(40),
   etat                 boolean,
   primary key (id_res)
);

/*==============================================================*/
/* Table: slider                                               */
/*==============================================================*/
create table slider
(
   id_slider           int not null AUTO_INCREMENT,
   id_ad                int not null,
   url_img              varchar(255),
   titre_img           varchar(30),
   texte_img            text,
   primary key (id_slider)
);

/*==============================================================*/
/* Table: theme                                                 */
/*==============================================================*/
create table theme
(
   id_theme             int not null AUTO_INCREMENT,
   id_ad                int not null,
   url_img              varchar(255),
   date_theme           datetime,
   titer_theme          varchar(40),
   discription          text,
   primary key (id_theme)
);

/*==============================================================*/
/* Table: type_resrvation                                       */
/*==============================================================*/
/*create table type_resrvation
(
   id_tres              int not null AUTO_INCREMENT,
    type_res             varchar(40),
   
   primary key (id_tres)
);*/

/*alter table choisire add constraint FK_choisire foreign key (id_tres)
      references type_resrvation (id_tres) on delete restrict on update restrict;*/

/*alter table choisire add constraint FK_choisire2 foreign key (id_res)
      references reservation (id_res) on delete restrict on update restrict;*/

alter table comments add constraint FK_Association_10 foreign key (id_fed)
      references federation (id_fed) on delete restrict on update restrict;

alter table comments add constraint FK_lier foreign key (id_theme)
      references theme (id_theme) on delete restrict on update restrict;

alter table message add constraint FK_gerée2 foreign key (id_ad)
      references admin (id_ad) on delete restrict on update restrict;

alter table reservation add constraint FK_faire foreign key (id_fed)
      references federation (id_fed) on delete restrict on update restrict;

alter table reservation add constraint FK_gerée3 foreign key (id_ad)
      references admin (id_ad) on delete restrict on update restrict;

alter table slider add constraint FK_gerée1 foreign key (id_ad)
      references admin (id_ad) on delete restrict on update restrict;

alter table theme add constraint FK_gerée4 foreign key (id_ad)
      references admin (id_ad) on delete restrict on update restrict;

insert into admin (id_ad,nom_ad,pass_ad)
 values (null,"admin","hn");