-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- ホスト: 127.0.0.1
-- 生成日時: 2013 年 12 月 05 日 14:02
-- サーバのバージョン: 5.5.27
-- PHP のバージョン: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `thscontest`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` char(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  `kananame` varchar(20) NOT NULL,
  `post` char(2) NOT NULL,
  `offtitle` varchar(20) NOT NULL,
  `joinyear` char(4) NOT NULL,
  `birth` char(8) NOT NULL,
  `sex` char(1) NOT NULL,
  `extnumber` char(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `employee`
--

INSERT INTO `employee` (`id`, `name`, `kananame`, `post`, `offtitle`, `joinyear`, `birth`, `sex`, `extnumber`) VALUES
('001002', '川原洋', 'カワハラヒロシ', '31', '', '2000', '19780722', '1', '3107'),
('001004', '古河信義', 'フルカワノブヨシ', '22', '主任', '2000', '19780821', '1', '2206'),
('001005', '奥野利明', 'オクノトシアキ', '22', '応用ソフトウェア開発課長', '2000', '19780117', '1', '2203'),
('001009', '西口寛治', 'ニシグチカンジ', '14', '主任', '2000', '19780222', '1', '1406'),
('001010', '堀内均', 'ホリウチヒトシ', '06', '第一マーケッティング課長', '2000', '19781022', '1', '0604'),
('001012', '伊東武信', 'イトウタケノブ', '06', '第一マーケッティング課長', '2000', '19780308', '1', '0603'),
('001013', '荻原毅雄', 'オギワラタケオ', '12', '', '2000', '19780918', '1', '1210'),
('001015', '小澤十郎', 'オザワジュウロウ', '12', '', '2000', '19780401', '1', '1209'),
('001017', '川上和茂', 'カワカミカズシゲ', '31', '主任', '2000', '19780818', '1', '3103'),
('001018', '吉川昇', 'ヨシカワノボル', '22', '主任', '2000', '19781015', '1', '2207'),
('001020', '国分和裕', 'コクブカズヒロ', '12', '主任', '2000', '19780715', '1', '1204'),
('001021', '永瀬俊郎', 'ナガセトシロウ', '12', '第二システム開発課長', '2000', '19780914', '1', '1203'),
('002001', '西野咲良', 'ニシノサラ', '21', '基本ソフトウェア開発課長', '2000', '19781113', '2', '2104'),
('002006', '亀井琴子', 'カメイコトコ', '13', '主任', '2000', '19780527', '2', '1306'),
('002016', '秋田詩織', 'アキタシオリ', '07', '第二マーケッティング課長', '2000', '19780702', '2', '0703'),
('002019', '内海貴美', 'ウツミキミ', '22', '応用ソフトウェア開発課長', '2000', '19781112', '2', '2204'),
('011001', '小松忠男', 'コマツタダオ', '11', '主任', '2001', '19790804', '1', '1115'),
('011004', '矢口文昭', 'ヤグチフミアキ', '14', 'Ｗｅｂ開発課長', '2001', '19790730', '1', '1404'),
('011005', '筒井栄作', 'ツツイエイサク', '14', '', '2001', '19790226', '1', '1410'),
('011008', '村田正好', 'ムラタマサヨシ', '14', '主任', '2001', '19790823', '1', '1407'),
('011010', '船橋忠一', 'フナバシチュウイチ', '21', '主任', '2001', '19791209', '1', '2106'),
('011011', '三原龍五', 'ミハラリュウゴ', '22', '主任', '2001', '19790221', '1', '2208'),
('011012', '滝田進', 'タキタススム', '22', '', '2001', '19791130', '1', '2209'),
('011015', '森山啓一', 'モリヤマケイイチ', '11', '', '2001', '19790305', '1', '1121'),
('011017', '外山勝夫', 'ソトヤマカツオ', '13', '', '2001', '19791213', '1', '1310'),
('011020', '堀井孝幸', 'ホリイタカユキ', '07', '第二マーケッティング課長', '2001', '19790602', '1', '0704'),
('012002', '滝本正巳', 'タキモトマサミ', '11', '主任', '2001', '19791114', '2', '1116'),
('012021', '西脇日奈', 'ニシワキヒナ', '07', '主任', '2001', '19790121', '2', '0706'),
('021001', '小泉誠', 'コイズミマコト', '06', '主任', '2002', '19801109', '1', '0608'),
('021002', '野間拓哉', 'ノマタクヤ', '06', '', '2002', '19801027', '1', '0610'),
('021006', '羽鳥栄蔵', 'ハトリエイゾウ', '21', '', '2002', '19800418', '1', '2111'),
('021008', '楠一司', 'クスノキカズシ', '22', '', '2002', '19800507', '1', '2210'),
('021010', '柳川守弘', 'ヤナガワモリヒロ', '21', '', '2002', '19800416', '1', '2110'),
('021011', '坂元昌弘', 'サカモトマサヒロ', '22', '', '2002', '19800214', '1', '2209'),
('021015', '柴山義彦', 'シバヤマヨシヒコ', '14', '主任', '2002', '19800320', '1', '1408'),
('022005', '松下杏奈', 'マツシタアンナ', '21', '主任', '2002', '19801214', '2', '2108'),
('022007', '村上由紀江', 'ムラカミユキエ', '21', '主任', '2002', '19800727', '2', '2107'),
('022012', '富岡渚', 'トミオカナギサ', '14', '', '2002', '19800610', '2', '1410'),
('031001', '白石英一', 'シライシエイイチ', '22', '', '2003', '19810123', '1', '2210'),
('031002', '北野忠良', 'キタノタダヨシ', '22', '', '2003', '19811122', '1', '2211'),
('031007', '堀越公平', 'ホリコシコウヘイ', '12', '主任', '2003', '19810218', '1', '1205'),
('031008', '白木雅也', 'シロキマサヤ', '12', '', '2003', '19810617', '1', '1210'),
('031010', '赤塚武男', 'アカツカタケオ', '12', '主任', '2003', '19810612', '1', '1206'),
('031011', '小田孝一', 'オダコウイチ', '14', '', '2003', '19810623', '1', '1412'),
('031012', '平林啓介', 'ヒラバヤシケイスケ', '14', '', '2003', '19810429', '1', '1411'),
('032004', '堀内満里奈', 'ホリウチマリナ', '11', '主任', '2003', '19810418', '2', '1117'),
('032005', '柳川菜々子', 'ヤナガワナナコ', '11', '主任', '2003', '19811027', '2', '1118'),
('041002', '安井孝夫', 'ヤスイタカオ', '07', '主任', '2004', '19820423', '1', '0708'),
('041003', '岩城司', 'イワキツカサ', '07', '主任', '2004', '19820225', '1', '0707'),
('041007', '戸塚忠広', 'トツカタダヒロ', '21', '', '2004', '19820308', '1', '2111'),
('041010', '田上真幸', 'タガミマサキ', '06', '', '2004', '19820507', '1', '0610'),
('041014', '永瀬道夫', 'ナガセミチオ', '12', '主任', '2004', '19820808', '1', '1208'),
('041017', '井口和秀', 'イグチカズヒデ', '12', '主任', '2004', '19820120', '1', '1207'),
('041020', '南田豊樹', 'ミナミダトヨキ', '21', '', '2004', '19820311', '1', '2112'),
('041022', '小柳健夫', 'コヤナギタケオ', '21', '', '2004', '19820926', '1', '2113'),
('041024', '須藤一博', 'スドウカズヒロ', '14', '', '2004', '19820314', '1', '1412'),
('042005', '立花日菜乃', 'タチバナヒナノ', '11', '', '2004', '19820718', '2', '1121'),
('042006', '田川結花', 'タガワユイカ', '22', '', '2004', '19821017', '2', '2213'),
('042008', '古河涼音', 'フルカワスズネ', '21', '', '2004', '19820619', '2', '2112'),
('042011', '河村真奈', 'カワムラマナ', '06', '', '2004', '19820711', '2', '0611'),
('042012', '日野瑞姫', 'ヒノミズキ', '06', '主任', '2004', '19820202', '2', '0609'),
('042023', '鵜飼愛菜', 'ウカイアイナ', '22', '', '2004', '19821014', '2', '2212'),
('051003', '高崎清助', 'タカサキセイスケ', '13', '', '2005', '19830723', '1', '1311'),
('051004', '舟木孝三', 'フナキコウゾウ', '07', '', '2005', '19830624', '1', '0711'),
('052001', '宇佐美萌香', 'ウサミモエカ', '14', '', '2005', '19830914', '2', '1413'),
('052010', '石崎静香', 'イシサキシズカ', '07', '主任', '2005', '19830422', '2', '0709'),
('052011', '末永桃', 'スエナガモモ', '05', '', '2005', '19830214', '2', '0504'),
('052012', '宮坂友紀', 'ミヤサカユキ', '01', '主任', '2005', '19831028', '2', '0103'),
('052014', '菅光', 'カンヒカル', '11', '', '2005', '19830724', '2', '1122'),
('052015', '坂田里歩', 'サカタリホ', '13', '', '2005', '19830802', '2', '1312'),
('061002', '浜野雅典', 'ハマノマサノリ', '13', '', '2006', '19840310', '1', '1312'),
('061007', '高見道夫', 'タカミミチオ', '31', '主任', '2006', '19840926', '1', '3104'),
('061013', '竹田眞', 'タケダマコト', '11', '', '2006', '19840315', '1', '1122'),
('061014', '石塚浩幸', 'イシヅカヒロユキ', '21', '', '2006', '19840318', '1', '2113'),
('062001', '藤川美玲', 'フジカワミレイ', '13', '', '2006', '19840606', '2', '1313'),
('062006', '山村紗良', 'ヤマムラサラ', '12', '', '2006', '19840323', '2', '1211'),
('062008', '寺西悠花', 'テラニシユウカ', '21', '', '2006', '19841208', '2', '2114'),
('062009', '玉木英子', 'タマギエイコ', '22', '', '2006', '19841206', '2', '2214'),
('062010', '手島由貴', 'テジマユキ', '11', '', '2006', '19841002', '2', '1123'),
('071005', '渥美貞雄', 'アツミサダオ', '22', '', '2007', '19850721', '1', '2214'),
('071006', '畠山晃一', 'ハタケヤマコウイチ', '11', '', '2007', '19850623', '1', '1124'),
('071008', '石橋大地', 'イシバシダイチ', '06', '', '2007', '19850506', '1', '0611'),
('071010', '石野金作', 'イシノキンサク', '07', '', '2007', '19850427', '1', '0711'),
('071011', '立川利一', 'タチカワトシカズ', '12', '', '2007', '19850420', '1', '1211'),
('071013', '柳川公子', 'ヤナガワキミコ', '02', '主任', '2007', '19850607', '1', '0204'),
('072004', '古屋俊子', 'フルヤトシコ', '21', '', '2007', '19850426', '2', '2115'),
('072012', '岩間彩希', 'イワマサキ', '11', '', '2007', '19850415', '2', '1123'),
('081002', '三原和彦', 'ミハラカズヒコ', '11', '', '2008', '19861114', '1', '1124'),
('081003', '横川信生', 'ヨコカワノブオ', '13', '', '2008', '19861127', '1', '1314'),
('081006', '若山猛', 'ワカヤマタケシ', '21', '', '2008', '19860402', '1', '2115'),
('081008', '徳田光昭', 'トクタミツアキ', '31', '', '2008', '19861029', '1', '3108'),
('081012', '島田裕二', 'シマダユウジ', '06', '', '2008', '19860304', '1', '0612'),
('081015', '平良一輝', 'ヒラヨシカズキ', '21', '', '2008', '19861218', '1', '2116'),
('081016', '小寺康彦', 'オデラヤスヒコ', '21', '', '2008', '19861202', '1', '2116'),
('082005', '岸田千春', 'キシダチハル', '14', '', '2008', '19860901', '2', '1414'),
('082013', '石原愛', 'イシハラアイ', '14', '', '2008', '19860730', '2', '1413'),
('082014', '毛利敏子', 'モウリトシコ', '12', '', '2008', '19860804', '2', '1212'),
('091005', '小菅日出男', 'コスゲヒデオ', '03', '主任', '2009', '19870622', '1', '0303'),
('091010', '伊藤信明', 'イトウノブアキ', '11', '', '2009', '19870315', '1', '1125'),
('091012', '北岡六郎', 'キタオカロクロウ', '06', '', '2009', '19870902', '1', '0612'),
('091013', '小室善一', 'コムロゼンイチ', '12', '', '2009', '19870402', '1', '1212'),
('091016', '坂野富男', 'サカノトミオ', '21', '', '2009', '19870418', '1', '2117'),
('092004', '武内信子', 'タケウチノブコ', '22', '', '2009', '19870428', '2', '2215'),
('092014', '毛利優香', 'モウリユウカ', '14', '', '2009', '19870724', '2', '1414'),
('092015', '馬場亜紀子', 'ババアキコ', '14', '', '2009', '19871202', '2', '1415'),
('092018', '伊沢瑞貴', 'イザワミズキ', '22', '', '2009', '19870620', '2', '2216'),
('101001', '堀川吉雄', 'ホリカワヨシオ', '13', '', '2010', '19881107', '1', '1315'),
('101007', '小杉二郎', 'コスギジロウ', '14', '', '2010', '19880401', '1', '1415'),
('101008', '草野定男', 'クサノサダオ', '11', '', '2010', '19880517', '1', '1125'),
('101009', '嶋田源治', 'シマダゲンジ', '12', '', '2010', '19880726', '1', '1213'),
('101010', '窪田悦哉', 'クボタエツヤ', '06', '', '2010', '19880427', '1', '0613'),
('101011', '生田国彦', 'イクタクニヒコ', '07', '', '2010', '19881212', '1', '0712'),
('101014', '明石秀之', 'アカイシヒデユキ', '13', '', '2010', '19880302', '1', '1314'),
('102012', '水島志歩', 'ミズシマシホ', '07', '', '2010', '19881201', '2', '0712'),
('102016', '北村玲子', 'キタムラレイコ', '14', '', '2010', '19880917', '2', '1416'),
('111001', '久米正記', 'クメマサキ', '05', '', '2011', '19890213', '1', '0504'),
('111002', '西岡四郎', 'ニシオカシロウ', '07', '', '2011', '19890806', '1', '0713'),
('111003', '野原肇', 'ノバラハジメ', '11', '', '2011', '19891020', '1', '1126'),
('111010', '高嶋敏雄', 'タカシマトシオ', '13', '', '2011', '19890502', '1', '1315'),
('111013', '中嶋公彦', 'ナカジマキミヒコ', '14', '', '2011', '19891020', '1', '1418'),
('111015', '長野昇', 'ナガノノボル', '31', '', '2011', '19890722', '1', '3109'),
('111016', '三上猛', 'ミカミタケシ', '12', '', '2011', '19890417', '1', '1214'),
('111018', '福井勝雄', 'フクイカツオ', '14', '', '2011', '19890920', '1', '1417'),
('112017', '日下彩加', 'クサカアヤカ', '11', '', '2011', '19890419', '2', '1126'),
('112020', '土井忍', 'ドイシノブ', '14', '', '2011', '19890321', '2', '1416'),
('121001', '森下尚三', 'モリシタショウゾウ', '14', '', '2012', '19900505', '1', '1418'),
('121002', '中澤寛治', 'ナカザワカンジ', '11', '', '2012', '19900202', '1', '1127'),
('121003', '長坂俊一', 'ナガサカシュンイチ', '11', '', '2012', '19900907', '1', '1128'),
('121004', '白川博司', 'シラカワヒロシ', '12', '', '2012', '19900419', '1', '1214'),
('121006', '大場善一', 'オオバゼンイチ', '12', '', '2012', '19900922', '1', '1215'),
('121007', '辻英二', 'ツジエイジ', '31', '', '2012', '19901124', '1', '3110'),
('121008', '徳永力雄', 'トクナガリキオ', '22', '', '2012', '19900419', '1', '2217'),
('121009', '国分義信', 'コクブヨシノブ', '06', '', '2012', '19901112', '1', '0614'),
('131010', '武井美明', 'タケイヨシアキ', '07', '', '2013', '19910205', '1', '0714'),
('131012', '武藤誠一', 'タケフジセイイチ', '31', '', '2013', '19910311', '1', '3111'),
('131014', '藤原重義', 'フジワラシゲヨシ', '11', '', '2013', '19911103', '1', '1130'),
('131015', '大熊勝三', 'オオクマカツゾウ', '21', '', '2013', '19910207', '1', '2118'),
('131017', '林八郎', 'ハヤシハチロウ', '14', '', '2013', '19910623', '1', '1420'),
('131019', '久米章夫', 'クメアキオ', '12', '', '2013', '19910906', '1', '1216'),
('132013', '猪俣紗希', 'イノマタサキ', '11', '', '2013', '19910128', '2', '1129'),
('132016', '長崎香奈子', 'ナガサキカナコ', '21', '', '2013', '19910228', '2', '2119'),
('132018', '島津雅江', 'シマヅマサエ', '14', '', '2013', '19910309', '2', '1419'),
('142001', '五味利子', 'ゴミトシコ', '03', '', '2014', '19920312', '2', '0304'),
('941003', '亀田政信', 'カメダマサノブ', '02', '', '1994', '19721222', '1', '0202'),
('941015', '大沼堅助', 'オオヌマケンスケ', '01', '総務部長', '1994', '19720615', '1', '0101'),
('941020', '栗山保', 'クリヤマタモツ', '03', '経理部長', '1994', '19721129', '1', '0301'),
('941022', '野村真幸', 'ノムラマサキ', '04', '人事部長', '1994', '19721024', '1', '0401'),
('942007', '北沢琴羽', 'キタザワコトハ', '05', '管理課長', '1994', '19720722', '2', '0502'),
('942023', '有田菜帆', 'アリタナホ', '04', '', '1994', '19720706', '2', '0402'),
('951002', '和田正記', 'ワダマサキ', '07', '第二マーケティング部長', '1995', '19730221', '1', '0701'),
('951003', '村瀬光信', 'ムラセミツノブ', '11', '', '1995', '19731007', '1', '1120'),
('951005', '浜田隆明', 'ハマダタカアキ', '14', '主任', '1995', '19730713', '1', '1405'),
('951007', '平岡達郎', 'ヒラオカタツロウ', '14', 'Ｗｅｂ開発部長', '1995', '19730417', '1', '1401'),
('951009', '平賀岩雄', 'ヒラガイワオ', '21', '', '1995', '19730805', '1', '2109'),
('951012', '板橋健三郎', 'イタバシケンザブロウ', '06', '第一マーケッティング部長', '1995', '19730518', '1', '0601'),
('951015', '高井俊二', 'タカイシュンジ', '13', '', '1995', '19730402', '1', '1307'),
('951022', '浜本一義', 'ハマモトカズヨシ', '31', '', '1995', '19730804', '1', '3106'),
('951024', '福元斎', 'フクモトヒトシ', '22', '応用ソフトウェア開発部長', '1995', '19731108', '1', '2201'),
('951025', '平松道雄', 'ヒラマツミチオ', '11', '第一システム開発部長', '1995', '19731019', '1', '1111'),
('951027', '井沢守彦', 'イザワモリヒコ', '13', 'ソリューション開発部長', '1995', '19730505', '1', '1301'),
('951029', '石川恒夫', 'イシカワツネオ', '02', '業務部長', '1995', '19731225', '1', '0201'),
('952011', '本村幸子', 'ホンムラサチコ', '06', '主任', '1995', '19730816', '2', '0605'),
('952020', '倉持柚希', 'クラモチユズキ', '12', '第二システム開発部長', '1995', '19730408', '2', '1201'),
('952021', '長崎若奈', 'ナガサキワカナ', '31', '', '1995', '19730503', '2', '3105'),
('961002', '小笠原幸仁', 'オガサワラユキヒト', '13', '', '1996', '19740515', '1', '1308'),
('961010', '小坂亮', 'オサカアキラ', '21', '基本ソフトウェア開発部長', '1996', '19740111', '1', '2101'),
('961018', '岩瀬和明', 'イワセカズアキ', '02', '業務課長', '1996', '19740601', '1', '0203'),
('962001', '高木杏里', 'タカギアンリ', '01', '総務課長', '1996', '19741119', '2', '0102'),
('962006', '塚田沙也香', 'ツカダサヤカ', '21', '基本ソフトウェア開発課長', '1996', '19741107', '2', '2102'),
('962020', '和泉舞桜', 'イズミマオ', '13', '主任', '1996', '19740922', '2', '1304'),
('962021', '吉原凜', 'ヨシワラリン', '06', '第一マーケッティング課長', '1996', '19740703', '2', '0602'),
('971001', '古沢基之', 'フルサワモトユキ', '07', '第二マーケッティング課長', '1997', '19750714', '1', '0702'),
('971003', '倉持勝久', 'クラモチカツヒサ', '05', '管理部長', '1997', '19750325', '1', '0501'),
('971004', '吉原正次', 'ヨシワラショウジ', '06', '主任', '1997', '19751002', '1', '0606'),
('971007', '今村豊吉', 'イマムラトヨキチ', '11', '第一システム開発課長', '1997', '19750925', '1', '1113'),
('971009', '田島雅俊', 'タジママサトシ', '13', 'ソリューション開発課長', '1997', '19751030', '1', '1302'),
('972005', '加藤貞子', 'カトウサダコ', '11', '第一システム開発課長', '1997', '19750220', '2', '1112'),
('972013', '三谷美奈江', 'ミタニミナエ', '14', 'Ｗｅｂ開発課長', '1997', '19750216', '2', '1402'),
('972018', '椎名麻里', 'シイナマリ', '14', '', '1997', '19751009', '2', '1409'),
('972019', '杉原寛子', 'スギハラヒロコ', '21', '', '1997', '19751231', '2', '2110'),
('981008', '三田正彦', 'ミタマサヒコ', '22', '応用ソフトウェア開発課長', '1998', '19760302', '1', '2202'),
('981012', '北原和茂', 'キタハラカズシゲ', '31', 'カスタマサポート部長', '1998', '19760804', '1', '3101'),
('981020', '上田貴英', 'ウエダタカヒデ', '04', '人事課長', '1998', '19760206', '1', '0403'),
('982010', '福田心美', 'フクダココミ', '31', 'カスタマサポート課長', '1998', '19761220', '2', '3102'),
('982013', '白鳥仁美', 'シラトリヒトミ', '05', '主任', '1998', '19760725', '2', '0503'),
('982014', '相馬堂下', 'ソウマドウシタ', '03', '経理課長', '1998', '19760201', '2', '0302'),
('982017', '宍戸美紀子', 'シシドミキコ', '03', '経理課長補佐', '1998', '19760721', '2', '0302'),
('991002', '関口雄也', 'セキグチユウヤ', '04', '主任', '1999', '19770427', '1', '0404'),
('991004', '星健夫', 'ホシタケオ', '22', '主任', '1999', '19771108', '1', '2205'),
('991008', '藤井和幸', 'フジイカズユキ', '21', '主任', '1999', '19771208', '1', '2105'),
('991010', '中原勇蔵', 'ナカハラユウゾウ', '13', 'ソリューション開発課長', '1999', '19770803', '1', '1303'),
('991012', '芦田次雄', 'アシダツギオ', '07', '主任', '1999', '19771126', '1', '0705'),
('991018', '関谷祐一', 'セキヤユウイチ', '07', '', '1999', '19770511', '1', '0710'),
('991020', '住田修三', 'スミダシュウゾウ', '11', '主任', '1999', '19770925', '1', '1114'),
('991021', '室井和比古', 'ムロイカズヒコ', '13', '', '1999', '19770720', '1', '1309'),
('991022', '西本甫', 'ニシモトハジメ', '13', '主任', '1999', '19771209', '1', '1305'),
('992003', '川名朋子', 'カワナトモコ', '12', '第二システム開発課長', '1999', '19771111', '2', '1202'),
('992006', '冨永静', 'トミナガシズ', '21', '基本ソフトウェア開発課長', '1999', '19771019', '2', '2103'),
('992011', '宇佐美江民', 'ウサミエミ', '06', '主任', '1999', '19770327', '2', '0607'),
('992023', '増井晴', 'マスイハル', '14', 'Ｗｅｂ開発課長', '1999', '19771107', '2', '1403');

-- --------------------------------------------------------

--
-- テーブルの構造 `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` char(2) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `post`
--

INSERT INTO `post` (`id`, `name`) VALUES
('01', '総務部'),
('02', '業務部'),
('03', '経理部'),
('04', '人事部'),
('05', '管理部'),
('06', '第一マーケッティング部'),
('07', '第二マーケッティング部'),
('11', '第一システム開発部'),
('12', '第二システム開発部'),
('13', 'ソリューション開発部'),
('14', 'Ｗｅｂ開発部'),
('21', '基本ソフトウェア開発部'),
('22', '応用ソフトウェア開発部'),
('31', 'カスタマサポート部');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
