
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


#瓶体表
CREATE TABLE `bottle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bottleId` varchar(20) DEFAULT NULL, #瓶体ID
  `proDate` date NOT NULL, #生产日期
  `yearDate` date NOT NULL, #年检日期
  `nextDate` date NOT NULL, #下次年检日期
  `bottleType` int(11) NOT NULL DEFAULT '0', #普通瓶体 智能瓶体
  `beyondDate` date NOT NULL, #超期与否 0 默认没有超期 1 已超期
  `status` int(11) NOT NULL DEFAULT '0', #0 正常  1已删除
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8

#缺气报警表单
 CREATE TABLE `warning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bottle_id` varchar(20) DEFAULT NULL, #瓶体id
  `xpoint` int(11) NOT NULL DEFAULT '0', #经度
  `ypoint` int(11) NOT NULL DEFAULT '0', #纬度
  `power` int(11) NOT NULL DEFAULT '0', #电池电量
  `status` tinyint(1) NOT NULL DEFAULT '0', #气体状态 0 默认正常 1缺气
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8

#订单表
CREATE TABLE `order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_trade_number` varchar(100) NOT NULL DEFAULT '',#订单号
  `user_id` int(11) NOT NULL DEFAULT '0',#用户id
  `username` varchar(50) NOT NULL DEFAULT '', #用户名
  `total_price` decimal(20,2) NOT NULL DEFAULT '0.00',#气体费用 由客服人员填写
  `send_price` decimal(20,2) NOT NULL DEFAULT '0.00',#配送费 由客服人员填写
  `status` tinyint(1) NOT NULL DEFAULT '0',#订单状态 0未完成 1已完成
  `bottle_id` int not null default 0,#瓶体id
  `parment_id` tinyint(1) not null default 1,#支付方式 0 微信支付 1 支付宝 2其它方式 由客服人员填写
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',#订单创建时间
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_trade_number` (`order_trade_number`),
  KEY `user_id` (`user_id`),
  KEY `create_time` (`create_time`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8
