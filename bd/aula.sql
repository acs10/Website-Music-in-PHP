-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 03-Mar-2016 às 11:22
-- Versão do servidor: 5.5.46-0ubuntu0.14.04.2
-- versão do PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `aula`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(1500) NOT NULL,
  `cantor` varchar(1500) NOT NULL,
  `musica` varchar(1500) NOT NULL,
  `cifra` varchar(1500) NOT NULL,
  `video` varchar(1500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `cantor`, `musica`, `cifra`, `video`) VALUES
(1, 'Aquele 1%', 'Marcos e Belluti Part.Weslei Safadão', '/musica/aquele-1.mp3', 'cifra/aquele-1.txt', 'JFnWGEDZGBk'),
(2, 'Piloto automatico', 'Supercombo', 'musica/piloto_automatico.mp3', 'cifra/pilotoautomatico.txt', 'YW4-V0xQkTg'),
(3, 'Radio-Video', 'System of a Down', 'musica/radio-video.mp3', 'cifra/radio-video.txt', 'qIDzPUt20F4'),
(4, 'Camarote', 'Wesley Safadão', '/musicas/Wesley Safada?o - Camarote [Clipe Oficial].mp3', 'cifra/camarote.txt', 'g-FIuQFDAxI'),
(5, 'Maus Bocados', 'Cristiano Araujo', '/musica/Cristiano Araújo - Maus Bocados.mp3', 'cifra/maus.txt', '0ZrH5yyWHqE'),
(6, 'Suite 14', 'Henrique & Diego part Mc guime', '/musica/Henrique & Diego - Suíte 14 ft. Mc Guimê.mp3', 'cifra/suite14.txt', 'gmvFLIuVAbA'),
(7, 'Escreve Ai', 'Luan Santana', '/musica/Luan Santana - Escreve aí - (Vídeo Oficial) - -DVD Luan Santana Acústico-.mp3', 'cifra/escreveai.txt', 'ysZP--fcgnc'),
(8, 'Não quero mais', 'Ludmila', '/musica/Não Quero Mais (Clipe Oficial) - Ludmilla.mp3', 'cifra/naoqueromais.txt', 'm5h_vEh8Noo'),
(9, 'Metralhadora', 'Banda Vingadora', '/musica/Banda Vingadora - Metralhadora [Clipe Oficial].mp3', 'cifra/metralhadora.txt', 'YzCoZGsod0c'),
(10, 'Ta Tranquilo Ta Favorável ', 'MC Bin Laden ', '/musica/MC Bin Laden - Ta Tranquilo Ta Favorável (Clipe Oficial).mp3', 'cifra/tatranquilotafavoravel.txt', 'vkJ5Lc0WwVw'),
(11, 'Sosseguei', 'Jorge & Mateus', '/musica/Jorge & Mateus - Sosseguei  - -DVD Como Sempre Feito Nunca- [Em Breve nas Lojas].mp3', 'cifra/sosseguei.txt', 'vZcjAmfkemk'),
(12, 'Pergunta Boba', 'Jorge & Mateus', '/musica/Jorge & Mateus - Pergunta Boba - Part. Maestro Pinocchio (Vídeo Oficial).mp3', 'cifra/perguntaboba.txt', 'UcXckYdkSDQ'),
(13, 'NA HORA DA RAIVA ', 'Henrique e Juliano ', '/musica/Henrique e Juliano - NA HORA DA RAIVA - DVD Novas Histórias - Ao vivo em Recife.mp3', 'cifra/nahoradaraiva.txt', 'X8jD3F9PI7Q');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nome` varchar(500) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  UNIQUE KEY `senha` (`senha`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `login`, `senha`) VALUES
('', '', ''),
('Andre Costa', 'andre', '123'),
('annaraquel', 'anna', '1234'),
('renatacardoso', 'renata', '12345'),
('Iury Landin', 'landin07', '4002'),
('andre', 'andre', '4444'),
('a', 'a', '555'),
('a', 'andre', 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
