# Area
INSERT INTO Area VALUES (1,"12345678","Filologia Românica");
INSERT INTO Area VALUES (2,"10300007","Ciência da computação");
INSERT INTO Area VALUES (3,"70505004"," História do Brasil");

# Pesquisador
INSERT INTO Pesquisador VALUES ("05797153867","Elian Conceição Luz","","","5","","UFBA","0");
INSERT INTO Pesquisador VALUES ("05797153868","Douglas Douglas","","","5","","UFBA","1");

# Projeto
INSERT INTO Projeto VALUES (1,"Edição de Documentos da Bahia Colonial","Descrição","05797153867");
INSERT INTO Projeto VALUES (2,"Edição de Documentos Ultramarinos","Descrição","05797153867");

# Estudo
INSERT INTO Estudo VALUES (1,"Edição de Documentos da Miséricórdia da Bahia","Justificativa","Objetivo",1);
INSERT INTO Estudo VALUES (2,"Edição de Documentos Diversos da Bahia Colonial","Justificativa","Objetivo",2);

# Instituicao
INSERT INTO InstituicaoCustodiadora VALUES (1,"Arquivo Público do Estado da Bahia");
INSERT INTO InstituicaoCustodiadora VALUES (2,"Biblioteca Nacional do Brasil");

# Secao
INSERT INTO Secao VALUES (1,"Religiosos",1);
INSERT INTO Secao VALUES (2,"Digital - Arquivo Histórico Ultramarino",1);

# Fonte
INSERT INTO Fonte VALUES (1,"Doc - 01","Misericórdia da Bahia","0001","-","-","2022-01-01","2022-01-01");
INSERT INTO Fonte VALUES (2,"Doc - 02","Misericórdia da Bahia","0001","-","-","2022-01-01","2022-01-01");
INSERT INTO Fonte VALUES (3,"Doc - 03","Misericórdia da Bahia","0001","-","-","2022-01-01","2022-01-01");
INSERT INTO Fonte VALUES (4,"Doc - 04","Misericórdia da Bahia","0001","-","-","2022-01-01","2022-01-01");
INSERT INTO Fonte VALUES (5,"Doc - 05","Misericórdia da Bahia","0001","-","-","2022-01-01","2022-01-01");
INSERT INTO Fonte VALUES (6,"Doc - 06","Misericórdia da Bahia","0001","-","-","2022-01-01","2022-01-01");
INSERT INTO Fonte VALUES (7,"Doc - 07","Misericórdia da Bahia","0001","-","-","2022-01-01","2022-01-01");
INSERT INTO Fonte VALUES (8,"Doc - 01","Conselho Ultramarino","0002","-","-","2022-01-01","2022-01-01");

# Transcricao
INSERT INTO Transcricao VALUES (1,"___Arrendamento que se faz a
Aos doze dias do mês de novembro de mil seiscentos
cinquenta e nove anos nesta Cidade do Salvador no Con
sistório da Santa Casa da Misericórdia dela apareceu
Manoel Vieira Francês e por ele foi dito que queria ar
rendar um sítio de terra nas da Saubara que ficaram
o Padre Francisco de Araújo em uma paragem que chamam
o Cajú e se lhe concedeu e assentou ","Conservadora",1,"2022-01-01");
INSERT INTO Transcricao VALUES (2,"___Arrendamento que se faz a
Aos doze dias do mês de novembro de mil seiscentos
cinquenta e nove anos nesta Cidade do Salvador no Con
sistório da Santa Casa da Misericórdia dela apareceu
Manoel Vieira Francês e por ele foi dito que queria ar
rendar um sítio de terra nas da Saubara que ficaram
o Padre Francisco de Araújo em uma paragem que chamam
o Cajú e se lhe concedeu e assentou ","Conservadora",2,"2022-01-01");

# Nota
INSERT INTO Nota VALUES (1,"Francisco daRocha Barbosa","Francisco da Rocha Barbosa","Escrivão da Santa Casa",1,1);

# Variante
INSERT INTO Variante VALUES(1, "Francisco Barbosa",1);

# Publicacao
INSERT INTO Publicacao VALUES (1,"Estudo dos elementos intrínsecos constitutivos do formulário em testamentos coloniais","LUZ, E. C. Estudo dos elementos intrínsecos constitutivos do formulário em testamentos coloniais. Cadernos do CNLF, v. 22, p. 431-441, 2018.","0001","2022-01-01",null,null);

# Criterio
INSERT INTO Criterio VALUES(1, "Desdobrar as abreviaturas entre com uso de parênteses");

# FonSec
INSERT INTO FonSec VALUES (1,1,"604-1");
INSERT INTO FonSec VALUES (2,1,"604-2");
INSERT INTO FonSec VALUES (3,1,"604-3");
INSERT INTO FonSec VALUES (4,1,"604-4");
INSERT INTO FonSec VALUES (5,1,"604-5");
INSERT INTO FonSec VALUES (6,1,"604-6");
INSERT INTO FonSec VALUES (7,1,"604-7");
INSERT INTO FonSec VALUES (8,2,"01-1");

# FonNot;
INSERT INTO FonNot VALUES(1,1,"05797153867",1);

# FonPub;
INSERT INTO FonPub VALUES(1,1,"05797153867",1);

# FonTra;
INSERT INTO FonTra VALUES(1,1,"05797153867",1);
INSERT INTO FonTra VALUES(2,2,"05797153867",1);

# EstFon;
INSERT INTO EstFon VALUES(1,1,"2022-01-01");
INSERT INTO EstFon VALUES(1,2,"2022-01-01");
INSERT INTO EstFon VALUES(1,3,"2022-01-01");
INSERT INTO EstFon VALUES(1,4,"2022-01-01");
INSERT INTO EstFon VALUES(1,5,"2022-01-01");
INSERT INTO EstFon VALUES(1,6,"2022-01-01");
INSERT INTO EstFon VALUES(1,7,"2022-01-01");
INSERT INTO EstFon VALUES(2,8,"2022-01-01");

# EstPes;
INSERT INTO  EstPes VALUES(1,"05797153867");
INSERT INTO  EstPes VALUES(2,"05797153868");

# TraCri;
INSERT INTO TraCri VALUES(1,1);

# AreEst;
INSERT INTO  AreEst VALUES(1,1,"1");
INSERT INTO  AreEst VALUES(1,2,"1");
INSERT INTO  AreEst VALUES(2,2,"0");
INSERT INTO  AreEst VALUES(3,2,"0");

