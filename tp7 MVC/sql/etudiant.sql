
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `etudiant` (
  `code_E` varchar(4) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `filiere` varchar(3) DEFAULT NULL,
  `password` varchar(13) DEFAULT NULL,
  `note` int(2) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `etudiant` (`code_E`, `first_name`, `last_name`, `telephone`, `email`, `filiere`, `password`, `note`) VALUES
('e0','prenom_0','nom_0','0574118101','prenom_0.nom_0@usmba.ac.ma','SMA','e0prenom_0','10'),
('e1','prenom_1','nom_1','0602530442','prenom_1.nom_1@usmba.ac.ma','SMP','e1prenom_1','11'),
('e2','prenom_2','nom_2','0528372541','prenom_2.nom_2@usmba.ac.ma','SMI','e2prenom_2','7'),
('e3','prenom_3','nom_3','0609048714','prenom_3.nom_3@usmba.ac.ma','SMP','e3prenom_3','11'),
('e4','prenom_4','nom_4','0598191311','prenom_4.nom_4@usmba.ac.ma','SMP','e4prenom_4','13'),
('e5','prenom_5','nom_5','0500910833','prenom_5.nom_5@usmba.ac.ma','SMA','e5prenom_5','10'),
('e6','prenom_6','nom_6','0573041735','prenom_6.nom_6@usmba.ac.ma','SMI','e6prenom_6','14'),
('e7','prenom_7','nom_7','0681768140','prenom_7.nom_7@usmba.ac.ma','SMP','e7prenom_7','14'),
('e8','prenom_8','nom_8','0633876068','prenom_8.nom_8@usmba.ac.ma','SMP','e8prenom_8','4'),
('e9','prenom_9','nom_9','0582777132','prenom_9.nom_9@usmba.ac.ma','SMI','e9prenom_9','18'),
('e10','prenom_10','nom_10','0553859710','prenom_10.nom_10@usmba.ac.ma','SMP','e10prenom_10','5'),
('e11','prenom_11','nom_11','0567138438','prenom_11.nom_11@usmba.ac.ma','SMP','e11prenom_11','3'),
('e12','prenom_12','nom_12','0681451696','prenom_12.nom_12@usmba.ac.ma','SMP','e12prenom_12','4'),
('e13','prenom_13','nom_13','0679863350','prenom_13.nom_13@usmba.ac.ma','SMA','e13prenom_13','2'),
('e14','prenom_14','nom_14','0573165206','prenom_14.nom_14@usmba.ac.ma','SMI','e14prenom_14','9'),
('e15','prenom_15','nom_15','0537740039','prenom_15.nom_15@usmba.ac.ma','SMA','e15prenom_15','6'),
('e16','prenom_16','nom_16','0652818384','prenom_16.nom_16@usmba.ac.ma','SMP','e16prenom_16','19'),
('e17','prenom_17','nom_17','0547933836','prenom_17.nom_17@usmba.ac.ma','SMI','e17prenom_17','18'),
('e18','prenom_18','nom_18','0564445511','prenom_18.nom_18@usmba.ac.ma','SMP','e18prenom_18','15'),
('e19','prenom_19','nom_19','0571165627','prenom_19.nom_19@usmba.ac.ma','SMA','e19prenom_19','15'),
('e20','prenom_20','nom_20','0516463256','prenom_20.nom_20@usmba.ac.ma','SMA','e20prenom_20','3'),
('e21','prenom_21','nom_21','0698527220','prenom_21.nom_21@usmba.ac.ma','SMA','e21prenom_21','19'),
('e22','prenom_22','nom_22','0621962112','prenom_22.nom_22@usmba.ac.ma','SMP','e22prenom_22','2'),
('e23','prenom_23','nom_23','0544424720','prenom_23.nom_23@usmba.ac.ma','SMP','e23prenom_23','2'),
('e24','prenom_24','nom_24','0554564795','prenom_24.nom_24@usmba.ac.ma','SMP','e24prenom_24','16'),
('e25','prenom_25','nom_25','0541486613','prenom_25.nom_25@usmba.ac.ma','SMA','e25prenom_25','1'),
('e26','prenom_26','nom_26','0522547356','prenom_26.nom_26@usmba.ac.ma','SMA','e26prenom_26','12'),
('e27','prenom_27','nom_27','0643217115','prenom_27.nom_27@usmba.ac.ma','SMA','e27prenom_27','2'),
('e28','prenom_28','nom_28','0548122304','prenom_28.nom_28@usmba.ac.ma','SMI','e28prenom_28','19'),
('e29','prenom_29','nom_29','0561390818','prenom_29.nom_29@usmba.ac.ma','SMP','e29prenom_29','17'),
('e30','prenom_30','nom_30','0520547373','prenom_30.nom_30@usmba.ac.ma','SMP','e30prenom_30','9'),
('e31','prenom_31','nom_31','0589142608','prenom_31.nom_31@usmba.ac.ma','SMI','e31prenom_31','4'),
('e32','prenom_32','nom_32','0546848673','prenom_32.nom_32@usmba.ac.ma','SMA','e32prenom_32','12'),
('e33','prenom_33','nom_33','0605243516','prenom_33.nom_33@usmba.ac.ma','SMP','e33prenom_33','7'),
('e34','prenom_34','nom_34','0571130476','prenom_34.nom_34@usmba.ac.ma','SMI','e34prenom_34','0'),
('e35','prenom_35','nom_35','0510616794','prenom_35.nom_35@usmba.ac.ma','SMP','e35prenom_35','10'),
('e36','prenom_36','nom_36','0556870316','prenom_36.nom_36@usmba.ac.ma','SMI','e36prenom_36','16'),
('e37','prenom_37','nom_37','0598142180','prenom_37.nom_37@usmba.ac.ma','SMI','e37prenom_37','18'),
('e38','prenom_38','nom_38','0516324200','prenom_38.nom_38@usmba.ac.ma','SMA','e38prenom_38','1'),
('e39','prenom_39','nom_39','0602567208','prenom_39.nom_39@usmba.ac.ma','SMI','e39prenom_39','7'),
('e40','prenom_40','nom_40','0501226538','prenom_40.nom_40@usmba.ac.ma','SMI','e40prenom_40','16'),
('e41','prenom_41','nom_41','0690283484','prenom_41.nom_41@usmba.ac.ma','SMI','e41prenom_41','8'),
('e42','prenom_42','nom_42','0511534757','prenom_42.nom_42@usmba.ac.ma','SMA','e42prenom_42','9'),
('e43','prenom_43','nom_43','0509786395','prenom_43.nom_43@usmba.ac.ma','SMP','e43prenom_43','15'),
('e44','prenom_44','nom_44','0582908175','prenom_44.nom_44@usmba.ac.ma','SMP','e44prenom_44','13'),
('e45','prenom_45','nom_45','0656140520','prenom_45.nom_45@usmba.ac.ma','SMI','e45prenom_45','15'),
('e46','prenom_46','nom_46','0676960713','prenom_46.nom_46@usmba.ac.ma','SMA','e46prenom_46','18'),
('e47','prenom_47','nom_47','0591077118','prenom_47.nom_47@usmba.ac.ma','SMA','e47prenom_47','15'),
('e48','prenom_48','nom_48','0509417741','prenom_48.nom_48@usmba.ac.ma','SMI','e48prenom_48','12'),
('e49','prenom_49','nom_49','0528839711','prenom_49.nom_49@usmba.ac.ma','SMP','e49prenom_49','12');

ALTER TABLE `etudiant`
ADD PRIMARY KEY (`code_E`),
ADD UNIQUE KEY `code_E` (`code_E`,`major`);
COMMIT;
        