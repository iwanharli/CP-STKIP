-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 04:04 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc_stkipmuh`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `idBerita` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `tanggal_berita` date NOT NULL,
  `penulis_berita` varchar(255) NOT NULL,
  `kategori_berita` varchar(255) DEFAULT NULL,
  `tags_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text NOT NULL,
  `status_berita` int(11) NOT NULL,
  `cover_berita` varchar(255) DEFAULT NULL,
  `id_komentar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`idBerita`, `judul_berita`, `tanggal_berita`, `penulis_berita`, `kategori_berita`, `tags_berita`, `isi_berita`, `status_berita`, `cover_berita`, `id_komentar`) VALUES
(1, 'The Glossary Of Telescopes', '2022-11-17', 'Admin', 'Pendidikan', 'Informasi', '                      <p class=\"excert\" style=\"margin-bottom: 10px; color: rgb(123, 131, 138); font-family: Roboto, sans-serif;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p><p style=\"margin-bottom: 10px; color: rgb(123, 131, 138); font-family: Roboto, sans-serif;\">Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed</p><p style=\"margin-bottom: 10px; color: rgb(123, 131, 138); font-family: Roboto, sans-serif;\">Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed <span style=\"color: rgb(119, 119, 119); font-style: italic; font-size: 1rem;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.</span></p><p style=\"font-family: Roboto, sans-serif;\"><b style=\"color: rgb(123, 131, 138);\">MCSE boot camps</b><font color=\"#7b838a\"> have its </font><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">supporters and its detractors</font><span style=\"color: rgb(123, 131, 138);\">. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower.</span></p><p style=\"color: rgb(123, 131, 138); font-family: Roboto, sans-serif;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the <u>willpower</u>.</p>                    ', 2, 'm-blog-1.jpg', 0),
(2, 'The Basics Of Buying A Telescope', '2022-11-17', 'Admin', 'Kegiatan', 'Sastra', '                                            <p></p><table class=\"table table-bordered\" style=\"text-align: justify;\"><tbody><tr><td style=\"text-align: center; \">1</td><td style=\"text-align: center; \">2</td></tr><tr><td style=\"text-align: center; \">3</td><td style=\"text-align: center; \"><p>4</p></td></tr></tbody></table><span style=\"color: rgb(123, 131, 138); font-family: Roboto, sans-serif; text-align: justify; font-size: 1rem;\"><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.&nbsp;</span><span style=\"font-size: 1rem;\">Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed&nbsp;</span><span style=\"font-size: 1rem;\">Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed&nbsp;</span><span style=\"font-size: 1rem; text-align: left; color: rgb(119, 119, 119); font-style: italic;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem; text-align: left; color: rgb(119, 119, 119); font-style: italic;\"><br></span></div></span><p style=\"text-align: justify; color: rgb(123, 131, 138); font-family: Roboto, sans-serif;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower.</p><p style=\"text-align: justify; color: rgb(123, 131, 138); font-family: Roboto, sans-serif;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower.</p><p></p>                                        ', 1, 'm-blog-2.jpg', 0),
(3, 'Astronomy Binoculars A Great Alternative', '2022-11-18', 'Admin', 'Organisasi', 'Pendidikan', '<p class=\"excert\" style=\"margin-bottom: 10px; color: rgb(123, 131, 138); font-family: Roboto, sans-serif; text-align: justify;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p><p style=\"margin-bottom: 10px; color: rgb(123, 131, 138); font-family: Roboto, sans-serif; text-align: justify;\">Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed</p><p style=\"margin-bottom: 10px; color: rgb(123, 131, 138); font-family: Roboto, sans-serif; text-align: justify;\">Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed&nbsp;<span style=\"color: rgb(119, 119, 119); font-style: italic; font-size: 1rem;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.</span></p>', 1, 'm-blog-3.jpg', 0),
(4, 'The Night Sky', '2022-11-16', 'Admin', 'Pendidikan', 'Sastra', '<p class=\"excert\" style=\"margin-bottom: 10px; text-align: justify; color: rgb(123, 131, 138); font-family: Roboto, sans-serif; margin-left: 25px;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.&nbsp;<span style=\"font-size: 1rem;\">Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed</span></p><p style=\"margin-bottom: 10px; text-align: justify; color: rgb(123, 131, 138); font-family: Roboto, sans-serif; margin-left: 25px;\">Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed&nbsp;<span style=\"color: rgb(119, 119, 119); font-style: italic; font-size: 1rem;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.</span></p>', 1, 'm-blog-4.jpg', 0),
(5, 'Telescopes 101', '2022-11-15', 'Admin', 'Organisasi', 'Pendidikan', '                                            <p class=\"excert\" style=\"text-align: justify; margin-bottom: 10px; color: rgb(123, 131, 138); font-family: Roboto, sans-serif; margin-left: 25px;\"><br></p><table class=\"table table-bordered\"><tbody><tr><td><div style=\"text-align: center;\">1</div></td><td style=\"text-align: center; \">2</td><td style=\"text-align: center; \">3</td></tr><tr><td style=\"text-align: center; \">4</td><td style=\"text-align: center; \">5</td><td style=\"text-align: center; \">6</td></tr><tr><td style=\"text-align: center; \">7</td><td style=\"text-align: center; \">8</td><td style=\"text-align: center; \">9</td></tr></tbody></table><p class=\"excert\" style=\"text-align: justify; margin-bottom: 10px; color: rgb(123, 131, 138); font-family: Roboto, sans-serif; margin-left: 25px;\"><br></p><p class=\"excert\" style=\"text-align: justify; margin-bottom: 10px; color: rgb(123, 131, 138); font-family: Roboto, sans-serif; margin-left: 25px;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction. <span style=\"font-size: 1rem;\">Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed</span></p><p style=\"text-align: justify; margin-bottom: 10px; color: rgb(123, 131, 138); font-family: Roboto, sans-serif; margin-left: 25px;\">Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed <span style=\"color: rgb(119, 119, 119); font-style: italic; font-size: 1rem;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.</span></p>                                        ', 1, 'm-blog-5.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `detail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `detail`) VALUES
(1, 'Home', 'Halaman Utama'),
(2, 'Profil', NULL),
(3, 'Pendaftaran Mahasiswa Baru', NULL),
(4, 'Prodi Bahasa & Sastra', NULL),
(5, 'Jurnal', NULL),
(6, 'Mahasiswa & Alumni', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `idPengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(255) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `tanggal_pengumuman` date NOT NULL,
  `file_pengumuman` varchar(255) DEFAULT NULL,
  `status_pengumuman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`idPengumuman`, `judul_pengumuman`, `isi_pengumuman`, `tanggal_pengumuman`, `file_pengumuman`, `status_pengumuman`) VALUES
(1, 'PENGUMUMAN 1', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\"><br></span></div><table class=\"table table-bordered\"><tbody><tr><td>test</td><td>test</td><td>test</td><td>test</td></tr><tr><td>1</td><td>1</td><td>2</td><td>3</td></tr><tr><td>4</td><td>5</td><td>6</td><td>8</td></tr></tbody></table><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus ex, commodo id dolor sodales, interdum iaculis dolor. Sed tortor est, condimentum posuere vestibulum ac, feugiat sit amet neque. Nam suscipit aliquet tellus eu ullamcorper. Fusce quis lacinia sapien, quis finibus sem. Etiam tristique volutpat nunc sed venenatis. Quisque in mauris viverra, vestibulum turpis sit amet, lacinia turpis. Nam volutpat massa convallis, ultrices erat in, vestibuslum nisi. Fusce auctor odio ex, sed congue augue scelerisque quis. Ut fringilla est lectus, scelerisque rutrum sem egestas sit amet. Donec eu lobortis dolor. Sed ut lobortis tortor. Cras aliquet hendrerit mi, vitae viverra lacus blandit vitae. Morbi non ex vestibulum, sodales lectus quis, sagittis nunc. Aenean leo metus, suscipit eu euismod at, vestibulum ut metus. Fusce a molestie justo. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n\r\nProin lorem metus, tempus a purus id, laoreet pellentesque ex. Aenean pellentesque posuere justo, ac sagittis elit efficitur vel. Proin euismod urna ut pharetra tincidunt. Etiam tempor tortor vel quam sollicitudin maximus. Nam iaculis convallis nulla et pretium. Sed accumsan ultricies libero, sed mollis mauris rutrum eget. Nunc malesuada lacus velit, tristique scelerisque felis hendrerit at.\r\n\r\nDuis lacinia blandit urna ut egestas. Quisque porttitor nulla lobortis, scelerisque mauris quis, blandit augue. Etiam ac nisi vitae risus elementum ultrices quis ut lorem. Donec porttitor aliquet justo sed euismod. In luctus augue ut libero vehicula elementum. Suspendisse gravida viverra tellus, in dictum sapien vulputate nec. Phasellus felis lacus, ultrices sit amet eros non, euismod porttitor nulla. Aliquam cursus sapien eu sem convallis luctus. Vestibulum facilisis nunc ac justo aliquet consequat vel vel est. Aliquam erat volutpat.\r\n\r\nAenean efficitur velit eu odio sollicitudin accumsan. Integer congue volutpat lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas vel pharetra tortor. Ut nec imperdiet libero. Nulla eget euismod enim, at sagittis odio. In eu interdum orci, quis mattis purus. Donec tincidunt tempor pretium.\r\n\r\nPraesent dui nulla, luctus vel tellus vel, luctus sodales mauris. In quis efficitur tellus. Donec velit neque, volutpat ac mi non, efficitur dapibus ex. Aliquam vitae odio mattis, molestie magna sed, vestibulum dui. Integer quis nibh tristique, ultrices ipsum non, mattis tortor. Praesent rhoncus aliquet est ac maximus. Pellentesque faucibus sagittis purus, hendrerit ultricies est ullamcorper eu. In sit amet elit interdum, feugiat augue quis, dapibus lectus. Nullam vel rutrum felis. Sed consectetur eget sem in tristique. Donec non urna quam. Mauris facilisis tristique augue vel aliquam. Integer aliquam sem accumsan nibh hendrerit, ac eleifend massa fringilla. Duis rhoncus dapibus metus, nec ultricies eros finibus eu.</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\"><br></span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\"><br></span></div>', '2022-11-16', '201610370311278_IstarHamalHaris_ProposalTa.pdf', 1),
(2, 'PENGUMUMAN 2', '                                        Place <em>some</em> <u>text</u> <strong>here</strong>\r\n                                    ', '0001-11-30', '201610370311278_IstarHamalHaris_ProposalTa.docx', 2),
(3, 'PENGUMUMAN 3', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word \"and\" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their projects again and again. And if she hasn’t been rewritten, then they are still using her.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One</span></div>', '2022-11-16', '201610370311278_IstarHamalHsssssssssssssssssssssssssssssssssssssssssssssssssssssssssaris_ProposalTa.pdf', 0),
(4, 'PENGUMUMAN 4', '<div id=\"idTextPanel\" class=\"jqDnR\" style=\"margin: 0px; padding: 0px; position: relative; color: rgb(102, 102, 102); font-family: Verdana, Geneva, Helvetica, sans-serif; font-size: 11px;\"><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: normal; font-family: Verdana, Geneva, sans-serif; font-size: 10px;\">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because</p><div style=\"text-align: justify; \"><br></div></div>', '2022-11-16', 'file pendukung.pdf', 1),
(5, 'PENGUMUMAN 5', '                                                                                                                        Place <em>some</em> <u>text</u> <strong>here5</strong>                                                                        ', '2022-11-25', 'file pendukung.pdf', 2),
(6, 'PENGUMUMAN 6', '                                          Place <em>some</em> <u>text</u> <strong>here123</strong>                  ', '2022-11-16', 'file pendukung.pdf', 2),
(7, 'PENGUMUMAN 7', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere', '2022-11-15', 'file pendukung.pdf', 1),
(8, 'PENGUMUMAN 8', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,', '2022-10-31', '201610370311278_IstarHamalHaris_ProposalTa.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `nama`, `username`, `password`) VALUES
(1, 'ADMINISTRATOR 1', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idBerita`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`idPengumuman`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `idBerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `idPengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
