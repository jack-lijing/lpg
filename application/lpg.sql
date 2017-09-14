
# 客户表
CREATE TABLE `customer`(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL, #用户名
  `address` varchar(100) NOT NULL, #用户地址
  `idCard` varchar(20) DEFAULT NULL, #身份证号
  `phone` varchar(20) DEFAULT NULL, #手机号
  `bottleId` varchar(20) DEFAULT NULL, #瓶体ID
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `customer` VALUES (1,'冯筱乐','浙江省衢州市柯城区巨化花径二期71-2-302','330802199709214414','13967020327',NULL),
(2,'魏航焘','浙江省金华市武义县白洋街道春江花园72幢2单元201','330723199806282159','15958427533',NULL),
(3,'童姚瑞','浙江省永康市九铃西路1052-1辉煌建材','330722199806257934','15158908910',NULL),
(4,'包焓凌','浙江省衢州市龙游县新华路58-4','330825199804010174','13567062833',NULL),
(5,'杨兵','浙江省永康市城南路100号永康市第一中学','36232419980425181X','13777909251',NULL),
(6,'马铱晴','浙江省桐乡市洲泉镇清河村北浜里8号马铱晴（收）','330483199801064427','13819312363',NULL),
(7,'叶文静','浙江省永嘉县瓯北镇阳光大道瓯城花苑1幢5E','330324199809231028','13758738242',NULL),
(8,'范红儿','浙江省杭州市淳安县千岛湖镇排岭北路40号3幢2单元304室','330127199710240029','13175038968',NULL),
(9,'应祎珺','浙江省金华市永康市五金城五金北路80号','330722199807235323','13758977100',NULL),
(10,'曹冬妮','浙江省海宁市袁花镇红新村曹家场2号','330481199801181225','15968347621',NULL),


#瓶体表
create table `bottle`(
`id` int not null auto_increment,
`bottleId` varchar(20) DEFAULT NULL, #瓶体ID
`proDate` int(11) unsigned not null default 0,#生产日期
`yearDate` int not null default 0, #年检日期
`nextDate` int not null default 0, #下次年检日期
`bottleType` int not null default 0, #瓶体类型 0 普通瓶体 1 智能瓶体
`beyondDate` int not null default 0, #超期与否 0 默认没有超期 1 已超期
primary key(id)
)engine=InnoDB default charset=utf8;

#缺气报警表单
create table `warning`(
id int not null auto_increment,
bottle_id varchar(20) default null, #瓶体id
xpoint int not null default '', #经度
ypoint int not null default '', #纬度
power int not null default 0, #缺气与否 0 否 1 是
primary key (id)
)engine=InnoDB default charset=utf8;


#订单表
create table order(
id int(11) unsigned not null auto_increment,
order_trade_number varchar(100) not null default '',#订单编号
user_id int  not null default  0,#客户的id
username varchar(50) not null default '',#客户名
pay_time varchar(20)  not null default '',#订单时间
status tinyint(1) not null default 1,#气体状态
create_time int(11) unsigned not null default 0, #送气时间
total_price decimal(20,2) not null default '0.00',#气体费用
send_price decimal(20,2) not null default '0.00' #配送费
bottle_id int  not null default  0,#瓶体id
parment_id tinyint(1) not null default 1,#支付方式 0 微信支付 1 支付宝 2其它方式
update_time int(11) unsigned not null default 0,
primary key (id),
unique key order_trade_number (order_trade_number),
key user_id(user_id),
key create_time(create_time)
)engine=InnoDB auto_increment=1 default charset=utf8;
