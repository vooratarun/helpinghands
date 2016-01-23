-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2014 at 12:39 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `helpinghand`
--

-- --------------------------------------------------------

--
-- Table structure for table `need`
--

CREATE TABLE IF NOT EXISTS `need` (
  `sno` int(11) NOT NULL,
  `name` text NOT NULL,
  `id` text NOT NULL,
  `batch` text NOT NULL,
  `branch` text NOT NULL,
  `class` text NOT NULL,
  `dorm` text NOT NULL,
  `phone` text NOT NULL,
  `gen` text NOT NULL,
  `pblm` text NOT NULL,
  `address` text NOT NULL,
  `fname` text NOT NULL,
  `occ` text NOT NULL,
  `income` text NOT NULL,
  `ration` text NOT NULL,
  `ip` text NOT NULL,
  `mac` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `need`
--

INSERT INTO `need` (`sno`, `name`, `id`, `batch`, `branch`, `class`, `dorm`, `phone`, `gen`, `pblm`, `address`, `fname`, `occ`, `income`, `ration`, `ip`, `mac`, `date`) VALUES
(1, 'BANDI.MOJESH', 'N110043', 'PUC-II', 'None', 'M1', 'GAMA-2', '9703499522', 'M', 'Respected sir,I want some help from you,because I have no money for to go to home for this dasaraa vaccation.I humbly request you to grant me some money .Thank you sir.', 'komanapalli(vill),\r\nhiramandalam(md),\r\npeddaseedhi(post),\r\nSrikakulam(dist)\r\npin:532214', 'SIMHADRI', 'FARMER', '28000', 'I DONT KNOW', '10.2.37.43', '', '0000-00-00'),
(2, 'EDADASU LAKSHMANA RAO', 'N090333', 'E2', 'CHEM', 'A2-G1', 'BT-1', '9676978100', 'M', 'sir, I lost my purse in the dorm,it contains Rs 500. So i want to money for going to my home(bus charges.)', 'Ravivalasa(vill),\r\nChiipurupalli(MD),\r\nVizianagaram.\r\n', 'SOMULU', 'Daily Labour', '15000', '-', '10.5.1.53', '', '0000-00-00'),
(3, 'T. Chandra mohan', 'N091441', 'E2', 'CE', 'A2-G8', 'BT-36', '9642726160', 'M', 'Travelling charges', 'Adiandhra street,\r\n\r\nTekkali(V & M & P),\r\n\r\nSrikakulam (Dist).', 'T. Simmayya', 'labour', '36000', 'WAP012711400073', '10.5.8.61', '', '0000-00-00'),
(4, 'BALIVADA SOMESWARARAO', 'N091825', 'E2', 'CSE', 'SF10', 'BT-73', '7799374181', 'M', 'To go home on Holidays(Dusara),I don''t have money to go home.So please provide the money for the charges.', 'Balivada.Someswararao\r\nS/O Simhachalam,\r\nViswanadhapuram (Village),\r\nT.Lingala padu (Post),\r\nKotabommali(Mandal),\r\nSrikakulam(Dist).', 'BALIVADA SIMHACHALAM', 'Daily Labour', '40,000', 'WAP012869100036', '10.4.20.49', '', '0000-00-00'),
(5, 'BADISA NARASIMHA RAO', 'N090135', 'E2', 'ECE', 'SF2', 'BT-80', '8008029972', 'M', 'Travelling Expenses to HYD to my grand father (Guardian) as he stays there...\r\nas i dont have my parents.', 'past address when my mother alive\r\nKonakanchi,\r\npenuganchiprolu Mandal,\r\nKrishna Dist.', 'BIKSHAMAYYA(Guardian)', 'Daily labour', '-', '-', '10.4.12.44', '', '0000-00-00'),
(1, 'AMMATI SAMPATH', 'N083518', 'E3', 'MME', 'CG4', 'BSF-93B', '9000097167', 'M', 'NERVE PAINS', 'PULLURU(VILLAGE),GARLA(MANDAL),\r\nKHAMMAM(DISTRICT), \r\nH.NO: 2-7 ,\r\nPINCODE:507210.', 'RAMESH', 'LABOUR', '20,000', 'WAP222200900312', '10.3.4.46', '', '0000-00-00'),
(1, 'RAVI KIRAN.S', 'N120654', 'PUC-I', 'None', 'O2', 'beta 4', '9704803180', 'M', 'mentally disturbed.i wanna die', 'east godavary\r\npeddapuram\r\nkondapalli kothuru\r\n3-63\r\n533437', 'ratnaji rao', 'labour', '36000', 'is not known', '10.2.14.40', '', '0000-00-00'),
(1, 'S.Ravi Kiran', 'N120654', 'PUC-I', 'None', 'O2', 'Beta 4', '7702327516', 'M', 'naku heart lo chala pain ga vundi.nak theliyakundane nenu bayapaduthunnanu.evarithonu matladaleka pothunnanu.evaritho matladina nak eduposthundi ventane heart lo pain vachesthundi.nenu asalu chadavaleka pothunnanu.maa income actual ga cheppalante chalala thakkuva sir.nak okkokasari suicide chesukovalanipisthudi sir.nak okkoka sari em cheyyalo ardham kavadam ledu.nak ila vundi ani intlo cheppaleka pothunnanu.sir please give a solution for my problem.na problem cheppadaniki kuda veelu kavadam ledu.na problem meru ardham chesukogalaru ani asisthunnanu sir.please nannu brathikinchandi. ', 'kondapalli,\r\npeddapuram,\r\neast godavary\r\nd.no 3-63.', 'S.Ratnaji Rao', 'Labour', '36000', 'WAP0420046A0102', '10.2.14.40', '', '0000-00-00'),
(1, 'Uppathi Bala krishna', 'N100479', 'E1', 'None', 'A2-T5', 'BF-41', '9885338458', 'M', 'I don''t have the money because my money was theft by someone else,I want money for daily need,after I will give that money to Helping Hands', 'G.mekapadu,kandukuru', 'Malakondaiah', 'farmer', '41,000', 'no', '10.5.15.112', '', '0000-00-00'),
(1, 'P.HEMAVATHI', 'N120974', 'PUC-I', 'None', 'K12', 'SIGMA-9', '9493435680', 'F', 'My Hand not working.', 'JANNIVALASA(VILLAGE), RAMABHADRAPURAM(MANDAL), VIJAYANAGARAM(DISTIC).', 'RAMA MOHANA RAO', 'FARMER', '32,000', 'TAP021302045778', '10.2.12.222', '', '0000-00-00'),
(1, 'G.Tarak Sagar', 'N120519', 'PUC-I', 'None', 'K11', 'Alpha-12', '8497928600', 'M', 'I am handicapped', 'Nandur,Ponnur[MNDL],Guntur[Dist].', 'G.Narasimharao', 'Farmer', '36,000', 'WAP074803200010', '10.2.11.168', '', '0000-00-00'),
(1, 'G.Tarak Sagar', 'N120519', 'PUC-I', 'None', 'K11', 'Alpha-12', '8497928600', 'M', 'I am handicapped I want Tricycle', 'Nandur Ponnur[MNDL] Guntur[Dist]', 'G.Narasimharao', 'Farmer', '36,000', 'WAP074803200010', '10.2.11.168', '', '0000-00-00'),
(1, 'T.SreeLakshmi', 'N120108', 'PUC-I', 'None', 'K3', 'Rho-3', '8501067644', 'F', 'Annaya this is not my problem.oka akka baga chaduvutundi anta kani tanaki liver padaipoyindi.valla Amma,Nanna varini  virini adigi eightlacks collect chesaranta nenu mana helping hands nunchi sahayam pondalanukuntunanu daya chesi ventane reply evvandi annaya.', 'T.SreeLakshmi,\r\nG/O K.Venkateswaramma,\r\nVambay colony,\r\nA.S Nagar,\r\nVijayawada.', 'K.Venkateswaramma', 'Dialy Wage earner', '60,000', 'WAP0684133B0020', '10.2.3.49', '', '0000-00-00'),
(1, 'M.Sai krishna', 'N110701', 'PUC-II', 'None', 'M1', 'ETA-5', '-', 'M', 'See this image ,,, and please save her ', '-', '-', '-', '-', '-', '10.2.37.31', '', '0000-00-00'),
(1, 'Gedela.Saikumar', 'N100362', 'E1', 'None', 'A2-F9', 'BF-34', '7893930904', 'M', 'Daily needs problem.', 'Dasari street,\r\nKurupam,\r\nVizianagaram,\r\nPIN-535524', 'Lakshmana Rao', 'Labour', '30000', 'WAP020301100088', '10.5.19.98', '', '0000-00-00'),
(1, 'D.MOHAN', 'N110228', 'PUC-II', 'None', 'M1', 'ETA-1', '7382560708', 'M', 'EYE PROBLEM', 'VIZIANAGARAM', 'GOWRI  MOTHER', 'CARPENTER', '30,000/-', 'NO', '10.2.37.55', '', '0000-00-00'),
(1, 'U.RAJKUMAR', 'N120853', 'PUC-I', 'None', 'O6', 'beta-8', '7386494839', 'M', 'NO PROBLEM', 'CHEBROLU  \r\nGOLLAPROLU MANDAL\r\nEAST GODAVARI\r\nRAMULAVARI VEEDHI\r\nD.NO-14-98', 'U.DURGABABU', 'AGRICULTURAL LABOUR', '40000', 'WAP O4O', '10.2.18.52', '', '0000-00-00'),
(1, 'K.PULLARAO', 'N120857', 'PUC-I', 'None', 'O6', 'BETA-8', '9963717424', 'M', 'NO PROBLEM\r\n', 'VATSAVAYA\r\nKRISHNA DIST\r\n5-61', 'K. JOHN', 'AGRICULTURAL LABOUR', '40000', 'WAP O4O', '10.2.18.52', '', '0000-00-00'),
(1, 'K.PULLARAO', 'N120857', 'PUC-I', 'None', 'O6', 'BETA-8', '9963717424', 'M', 'NO', 'VATSASVAYA', 'K.LOHN', 'AGRICULTURAL LABOUR', '40000', 'WAP O4O', '10.2.18.52', '', '0000-00-00'),
(1, 'k.kurmarao', 'N120471', 'PUC-I', 'None', 'K10', 'Alpha-11', 'no phonenumber', 'M', 'to buy daily needs.i have no money because i came with only 250.i spent 150 to travel charges and gave fine 100.so i have nothing to go to pongal also.my mom was daily labour and my father was died at my childhood and there is no senior to me also.', 'KONTIPUDI KURMARAO\r\nS/O SIVA KUMAR [LATE]\r\nS/O RAVANAMMA\r\nDHARMAPURI [VILLAGE]\r\nVIZIANAGARAM [MANDAL]\r\nVIZIANAGARAM [DISTRICT]\r\nPINCODE:535004', 'Ravanamma', 'Daily labour', '18,000', 'WAP0228068A0470', '10.2.10.139', '', '0000-00-00'),
(1, 'ch Saikrishna', 'N120524', 'PUC-I', 'None', 'K11', 'Alpha 12', '8790615654', 'M', 'I am came from nizamabad deistic . i want to go this pongal holidays to my home . but i have not money to go my home. also medicines. so please help me.', 'my address is ch Saikrishna suddapally vill,dichpally man , nizamabad dis , H NO 1-66', 'Narayana', 'Agriculture', '28000', 'WAP182125100151 ', '10.2.11.104', '', '0000-00-00'),
(1, 'ch Saikrishna', 'N120524', 'PUC-I', 'None', 'K11', 'alpha 12', '8790615654', 'M', 'I am came from NIZAMABAD . i want to this holidays . but i have not money . so please give money to go my home.', 'village:suddapally , mandal:dichpally , deistic:nizamabad , H NO : 1-66', 'ch Narayana', 'agriculture', '36000', 'WAP182125100151', '10.2.11.104', '', '0000-00-00'),
(1, 'POGIRI SRIKANYA', 'N100909', 'E1', 'None', 'CG2', 'CG-3', '9160763055', 'F', 'I request to helping hands.I want to help from helping hands.I have need not money for daily needs purpose.Please help me.This is my request to helping hands.\r\nThankyou.', 'P.Srikanya\r\nD/O.P.Gavarayya\r\nLakhanapuram(village)(post)\r\nvizianagaram(di)\r\ngarugubilli(md)\r\npin code:525535', 'POGIRI GAVARAYYA', 'AGRICULTURE LABOUR', '36,000', 'WAP020501300052', '10.3.2.2', '', '0000-00-00'),
(1, 'ch Saikrishna', 'N120524', 'PUC-I', 'None', 'K11', 'alpha 12', '8790615654', 'M', 'i came from Nizamabad distic. For these holidays i did not have money to go my village. so please give me some money.', 'H NO:1-66 , village:suddapally , mandal:dichpally , Nizamabad .', 'ch Narayana', 'agriculture', '36000', 'WAP182125100151', '10.2.11.104', '', '0000-00-00'),
(1, 'TUMULA TIRUMALA', 'N110272', 'PUC-II', 'None', 'L1', 'GAMMA-7', '9603751321', 'M', 'Sir,\r\n    My spectacles was expired out. So,I am unable to read with it.I am unable to buy a new one. So that I need your help and I hope you will help me.Thanking you sir. ', 'MAKKUVA(village),(post),(mandal),\r\nhouse no:9-66,\r\ncaste:kurakula,\r\nvizianagaram(district),\r\npin code:535547.', 'T.SATTIRAJU(late),mother:T.MANGAMMA', 'LABOR', '20,000/-', 'WAP020702200091', '10.2.25.34', '', '0000-00-00'),
(1, 'SHAIK ARAFATH', 'N091388', 'E1', 'None', 'CG4', 'BF-85', '9949905255', 'M', 'i don''t have money to go to home plz provide me some money', '7-46,Kummaragaruvu,\r\nSakhinetipalli,\r\nEast godavari,\r\nAndhra Pradesh.', 'ANWAR', 'Buchar', '36000', 'WAP045', '10.3.4.49', '', '0000-00-00'),
(1, 'POGIRI SRIKANYA', 'N100909', 'E1', 'None', 'CG2', 'CG-3', '9160763055', 'F', 'I request to helping hands.I want to help from the helping hands.i have no money for the daily needs and travelling charges.i am from vizianagaram distict.please help me.', 'P.Srikanya\r\nd/o.p.gavarayya\r\nlakhanapuram(village)(post)\r\nvizianagaram(distict)\r\ngarugubilli(md)\r\npin code:525535', 'GAVARAYYA', 'AGRICULTURE LABOUR', '36,000', 'WAP020501300052', '10.3.2.2', '', '0000-00-00'),
(1, 'K.suresh', 'N100692', 'E1', 'None', 'CF3', 'BF-59', '9010456133', 'M', 'i need money for go to pongal holidays', 'komatlagudem', 'Chittibabu', 'kukunoor, khammamam', '30000', '-', '10.3.13.92', '', '0000-00-00'),
(1, 'RACHEETI RAJASEKHAR', 'N110861', 'PUC-II', 'None', 'O7', 'ETA-10', 'no', 'M', 'Charges for holidays.', 'Pothalapadu\r\nTharlupadu\r\nPrakasam', 'CHINNA BUDDAIAH', 'DAILY WAGE WORKER', '18,000', 'WAP081002100121', '10.2.31.25', '', '0000-00-00'),
(1, 'POGIRI SRIKANYAn', 'N100909', 'E1', 'None', 'CG2', 'cg3', '9160763055', 'F', 'I request to helping hands.I want to help from the helping hands.i have no money for  travelling charges.i am from vizianagaram distict.please help me.', 'P.Srikanya\r\nD/O.P.gavarayya\r\nlakhanapuram(village)\r\ngarugubilli(md)\r\nvizianagaram(di)\r\npin code:525535', 'GAVARAYYA', 'LABOUR', '36000', 'WAP020501300052', '10.3.2.2', '', '0000-00-00'),
(1, 'K.suresh', 'N100692', 'E1', 'None', 'CF3', 'BF-59', '9603109241', 'M', 'To the helping hands chairman,\r\nfrom\r\nk.suresh\r\nN100692\r\ncf-3\r\nreason:I belonged to a poor family.I dont have enough money.I need your help to go to my home in these holidays.\r\nthanking you sir,\r\n                  yours faithfully\r\n                  k.suresh\r\n\r\n', 'k.suresh\r\nkomatlagudem\r\nkukkunooru(mandal)\r\nkhammam(dist)\r\npincode-507114', 'Chittibabu', 'farmer', '28000', '-', '10.3.13.92', '', '0000-00-00'),
(1, 'veeranjaneyulu', 'N120084', 'PUC-I', 'None', 'K2', 'ALPHA-3', '9494605845', 'M', 'I HAVE A DOUBT HELPING HANDS MONEY WHAT ARE YOU DOING  TELL ME', 'MEDIKONDURU,MEDOKONDURU(MONDAL),GUNTUR', 'SRINIVASARAO', 'FORMER', '26000', 'NO', '10.2.2.35', '', '0000-00-00'),
(1, 'RAJANA SATISH', 'N110133', 'PUC-II', 'None', 'L5', '-', '-', 'M', '-', '-', '-', '-', '-', '-', '10.2.19.41', '', '0000-00-00'),
(1, 'PRATHIPATI ASHOK KUMAR', 'N110611', 'PUC-II', 'None', 'L11', 'ETA-3', '9542032024', 'M', 'DAIY NEEDS ', 'malleila(post)\r\ntiruvuru(md)\r\nkrishna(dt)\r\n', 'PRATHIPATI YESU', 'NO LAND', '20,000', 'WAP12345246', '10.2.35.39', '', '0000-00-00'),
(1, 'Kondaveti Raja', 'N080567', 'E3', 'ME', 'A2-F3', 'Sky con', '9848099223', 'M', 'We what your help.We are lake of money.I new a old age home.There so many old people in it.i want only 100000000 only to help them because they what live forever.Please send me that money quickely.', 'Maharaja Mahal,DNo:-3-5-999,\r\nMaharaja road,Mumbai-509456', 'Kondaveti Raju', 'Bussiness man deals in minerals extraction.', '1000000000/-', 'wap27652438792', '10.2.11.112', '', '0000-00-00'),
(1, 'RACHEETI RAJASEKHAR', 'N110861', 'PUC-II', 'None', 'L7', 'ETA-10', 'NONE', 'M', 'FOR DAILY NEEDS LIKE SOAPS,NOTEBOOKS, ALSO THIS SEMESTER''S RECORDS.', 'POTHALAPADU(VILLAGE)\r\nTARLUPADU(MANDAL)\r\nPRAKASAM(DISTRICT)', 'RACHEETI CHINNA BUDDAIAH', 'DAILY WAGE SERVER', '25,000/-', 'WAP081002100121', '10.2.31.241', '', '0000-00-00'),
(1, 'RACHEETI RAJASEKHAR', 'N110861', 'PUC-II', 'None', 'L7', 'ETA-10', 'N0', 'M', 'I had no money to buy soaps,books etc..\r\nSo i need some money from the Helping hands.', 'POTHALAPADU(VILLAGE),\r\nTARLUPADU(MANDAL),\r\nPRAKASAM(DISTRICT).', 'R.CHINNA BUDDAIAH', 'DAILY WAGE SERVER', '25,000', 'WAP081002100121', '10.2.31.53', '', '0000-00-00'),
(1, 'RACHEETI RAJASEKHAR', 'N110861', 'PUC-II', 'None', 'L7', 'ETA-10', 'NO', 'M', 'I had no money to buy some books,soaps etc.\r\nSo please request to i need help from the Helping hands. ', 'POTHALAPADU(VILLAGE),\r\nTARLUPADU(MANDAL),\r\nPRAKASAM(DISTRICT).', 'R.CHINNA BUDDAIAH', 'DAILY WAGE SERVER', '25,000', 'WAP081002100121', '10.2.31.53', '', '0000-00-00'),
(1, 'from PUC-1 student', 'N120-----', 'PUC-I', 'None', 'Select1', 'omega', '9533371031', 'M', 'i have m.s.casio .But i want to buy e.s.casio for my convinience.i have no enough money to buy it.i give you my ms calculator and some money please buy es calculator for me or you do any other management.please!if i am asking is wrong,please forgive me.', 'no', 'n', 'daily labour', '18,000/-', 'no', '10.2.5.131', '', '0000-00-00'),
(1, 'P.HemaVathi', 'N120974', 'PUC-I', 'None', 'K12', 'Sigma-9', '9493435680', 'F', 'My right hand is not working.', 'Jannivalasa (village), Ramabhadra Puram (Mandal),Vijayanagaram (distic)', 'P.Rama Mohan Rao', 'farmer', '32,000', 'no', '10.2.12.222', '', '0000-00-00'),
(1, 'G.Tarak Sagar', 'N120519', 'PUC-I', 'None', 'K11', 'Alpha-12', '8497928600', 'M', 'I am Physically Handicapped.I cannot pay  the money to Dobi(washerman).So please help me.', 'Nandur(village),Ponnur(Md),Guntur(Dist).', 'G.Narasimha Sagar', 'Farmer', '36,000', 'WAP074803200010', '10.2.11.168', '', '0000-00-00'),
(1, 'G.Tarak Sagar', 'N120519', 'PUC-I', 'None', 'K11', 'Alpha-12', '8497928600', 'M', 'I am Physically Handicapped.I cannot pay  the money to Dobi(washerman).So please help me.', 'Nandur(village),Ponnur(Md),Guntur(Dist).', 'G.Narasimha Sagar', 'Farmer', '36,000', 'WAP074803200010', '10.2.11.168', '', '0000-00-00'),
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '10.2.11.168', '', '0000-00-00'),
(1, 'KONDA VINEETHA', 'N110247', 'PUC-II', 'None', 'L7', 'THETA-2', '9491019399', 'F', 'I need to buy records but i haven''t money to buy because of poverty so i want to share my problems with u through this golden opportunity.', 'K Vineetha,D/o Surya Mahalakshmi,5-14,Mori(v),Sakhinetipalli(M),East Godavari(Dst),AP.pin-533250', 'KONDA SURYA MAHALAKSHMI', 'WEAVER', '15,000', 'WAP045902900172', '10.2.31.120', '', '0000-00-00'),
(1, 'K.Abhishiktha', 'N101018', 'E1', 'None', 'CF2', 'F-36(k3)', '8790558098', 'F', 'daily needs and to purchase a record.lack of money for present.', 'near hebron church\r\nN.S.P.Colony\r\nTripuranthakam \r\nTripuranthakam mandal\r\nprakasam district.', 'B.Glory', 'junior resource person(mahila society)', '30,000', 'TAP080308389197', '10.3.12.20', '', '0000-00-00'),
(1, 'G.Tarak Sagar', 'N120519', 'PUC-I', 'None', 'K11', 'Alpha-12', '8497928600', 'M', 'I am Physically Handicapped.I am give to my clothes to Dobi to washing.But I cannot pay the money to dobi because my money problem please help me.', 'Nandur(village),Ponnur(Md),Guntur(Dist).', 'G.Narasimha Sagar', 'Farmer', '36,000', 'WAP074803200010', '10.2.11.168', '', '0000-00-00'),
(1, 'G.Tarak Sagar', 'N120519', 'PUC-I', 'None', 'K11', 'Alpha-12', '8497928600', 'M', 'I Physically handicapped.I cannot pay the money to Dobi.', 'Nandur(village),Ponnur(Md),Guntur(Dist)', 'G.Narasimha Sagar', 'Farmer', '36,000', 'WAP074803200010', '10.2.11.168', '', '0000-00-00'),
(1, 'M.Praveen', 'N120958', 'PUC-I', 'None', 'K1', 'Beta-10', '9652103467', 'M', 'headache', 'palakollu', 'Narayana', 'agriculture', '1,00000', '30450958020', '10.2.20.73', '', '0000-00-00'),
(1, 'ALETI MANOJKUMAR', 'N120893', 'PUC-I', 'None', 'O7', 'BETA-9', '9666823449(IT''S MY FATHER''S NO.)', 'M', 'Sir I am a physically challenged student. I can''t wash my clothes. My parents were very poor. So I can''t pay  money to washerman.you are kept the washing mechine in B-Tech campus. But it is so far.So I request you to please help me(physically challenged students).\r\n', 'N120893\r\nAleti ManojKumar\r\nPUC-1\r\nOmega-7\r\nBeta-9\r\n\r\n', 'ALETI GANAPATHI', 'DAILY LABOUR', '36,000/-', 'WAP013400800276', '10.2.19.36', '', '0000-00-00'),
(1, 'ALETI MANOJ KUMAR', 'N120893', 'PUC-II', 'None', 'O7', 'BETA-9', '9666823449', 'M', 'SIR,I AM PHYSICAL CHALLENGED STUDENT. I CAN''T WASH MY CLOTHES.MY PARENTS HAVE NOT PAY MONEY TO WASHER MAN SO PLEASE PAT MONEY TO WASHER MAN FOR ME', 'N120893\r\nOMEGA-7\r\nBETA-9', 'ALETI ', 'DAILY WISE LABOUR', '40,000', ' WAP013400800276', '10.2.19.36', '', '0000-00-00'),
(1, 'Manoj kumar', 'N090299', 'PUC-I', 'CHEM', 'K2', 'BT-51', '9052551800', 'M', 'Notjing', 'jsldkjlksdjf', 'D Pentayya', 'coolie', '36000', '4444444444444444444444444', '10.4.16.50', '', '0000-00-00'),
(1, 'Manoj kumar', 'N090299', 'PUC-I', 'CE', 'L3', 'BT-51', '9052551800', 'M', 'None', 'NBone', 'D Pentayya', 'coolie', '36000', '4444444444444444444444444', '10.4.16.50', '', '2014-02-17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
