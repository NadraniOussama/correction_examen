import random
if __name__ == '__main__':
  # print("this is the end goal table schema \ncode_E | first_name | last_name | telephone | email | filiere | password | note\n\n")
  filePath = "etudiant.sql"
  f = open("sql/etudiant.sql" , "w")
  filiere_list=[["SMI","science math informatique"],["SMP","science math physique"],["SMA","science math appliquer"],]
  output_str ="""
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
"""
  maxi = 50
  for i in range(0, maxi):
    code_e = "e"+str(i)
    first_name = "prenom_"+str(i)
    last_name = "nom_"+str(i)
    note = str(random.randrange(0,20))
    telephone = "0"+str(random.randrange(500000000,699999999)) #telephone number range
    email = first_name+"."+last_name+"@usmba.ac.ma"
    #select a filiere rand
    list_rand = random.randrange(len(filiere_list))
    filiere = filiere_list[list_rand][0]
    #end
    passwd=code_e+first_name
    st="('"+code_e+"','"+first_name+"','"+last_name+"','"+telephone+"','"+email+"','"+filiere+"','"+passwd+"','"+note+"')"
    if i == maxi - 1 :
      st += ";\n\n"
    else:
      st += ",\n"

    output_str += st
  output_str += """ALTER TABLE `etudiant`
ADD PRIMARY KEY (`code_E`),
ADD UNIQUE KEY `code_E` (`code_E`,`major`);
COMMIT;
        """
  f.write(output_str)
 # +------------------------------------ structure de la table ------------------------+
 # print("\n\tthis is the end goal table schema \ncode_E | first_name | last_name | telephone | email | filiere | password | note")

 # print(filiere_list)
 # print("\n\tfilieres list")
 # for i in range(len(filiere_list)):
  # print(filiere_list[i][0],",",filiere_list[i][1])
 # print("EN D filieres list")


