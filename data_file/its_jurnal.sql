-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 08 2023 г., 12:28
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `its_jurnal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `rt_jurnale`
--

CREATE TABLE `rt_jurnale` (
  `sundetn_id` varchar(10) NOT NULL,
  `12.65` varchar(4) DEFAULT '0',
  `12.10` varchar(4) DEFAULT '0',
  `f` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `rt_jurnale`
--

INSERT INTO `rt_jurnale` (`sundetn_id`, `12.65`, `12.10`, `f`) VALUES
('1', '4', NULL, ''),
('2', '0', NULL, ''),
('23', NULL, NULL, ''),
('34', NULL, NULL, ''),
('78', NULL, NULL, ''),
('908', NULL, NULL, ''),
('e', '0', '0', '		</nav>\r\n        <section class=\"welcome-text d-flex justify-content-center align-items-center flex-column\">\r\n        	<!-- <img src=\"./img/logo.png\" > -->\r\n        	<h4>Welcome to ITS</h4>\r\n        	<p>Lux et Veritas Light and Truth</p>\r\n        </section>\r\n        <section id=\"about\"\r\n                 class=\"d-flex justify-content-center align-items-center flex-column\">\r\n        	<div class=\"card mb-3 card-1\">\r\n			  <div class=\"row g-0\">\r\n			    <div class=\"col-md-4\">\r\n			      <img src=\"./assets/img/logo.png\" class=\"img-fluid rounded-start\" >\r\n			    </div>\r\n			    <div class=\"col-md-8\">\r\n			      <div class=\"card-body\">\r\n			        <h5 class=\"card-title\">About Us</h5>\r\n			        <p class=\"card-text\">Iterfeyis Teacher Sisteam,   php javascrip</p>\r\n			        <p class=\"card-text\"><small class=\"text-muted\">BPO School</small></p>\r\n			      </div>\r\n			    </div>\r\n			  </div>\r\n			</div>\r\n        </section>\r\n        <section id=\"contact\"\r\n                 class=\"d-flex justify-content-center align-items-center flex-column\">\r\n        	<form method=\"post\"\r\n    	          action=\"\" name=\"message_bpo\">\r\n        		<h3>Contact Us</h3>\r\n        		<?php if (isset($_GET[\'error\'])) { ?>\r\n	    		<div class=\"alert alert-danger\" role=\"alert\">\r\n				  <?=$_GET[\'error\']?>\r\n				</div>\r\n				<?php } ?>\r\n			  <div class=\"mb-3\">\r\n			    <label for=\"exampleInputEmail1\" class=\"form-label\">Email address</label>\r\n			    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" name=\"email\" aria-describedby=\"emailHelp\" required>\r\n			    <div id=\"emailHelp\" class=\"form-text\">We\'ll never share your email with anyone else.</div>\r\n			  </div>\r\n			  <div class=\"mb-3\">\r\n			    <label class=\"form-label\">Full Name</label>\r\n			    <input type=\"text\" name=\"full_name\" required class=\"form-control\">\r\n			  </div>\r\n			  <div class=\"mb-3\">\r\n			    <label class=\"form-label\">Message</label>\r\n			    <textarea class=\"form-control\"name=\"message\" required rows=\"4\" maxlength=\"300\"></textarea>\r\n			  </div>\r\n			  <button type=\"submit\" class=\"btn btn-primary\">Send</button>\r\n			</form>\r\n        </section>\r\n        <div class=\"text-center text-light\">\r\n        	Copyright &copy; 2021 BPO. All rights reserved.\r\n        </div>\r\n\r\n    	</div>\r\n    </div>\r\n\r\n		</nav>\r\n        <section class=\"welcome-text d-flex justify-content-center align-items-center flex-column\">\r\n        	<!-- <img src=\"./img/logo.png\" > -->\r\n        	<h4>Welcome to ITS</h4>\r\n        	<p>Lux et Veritas Light and Truth</p>\r\n        </section>\r\n        <section id=\"about\"\r\n                 class=\"d-flex justify-content-center align-items-center flex-column\">\r\n        	<div class=\"card mb-3 card-1\">\r\n			  <div class=\"row g-0\">\r\n			    <div class=\"col-md-4\">\r\n			      <img src=\"./assets/img/logo.png\" class=\"img-fluid rounded-start\" >\r\n			    </div>\r\n			    <div class=\"col-md-8\">\r\n			      <div class=\"card-body\">\r\n			        <h5 class=\"card-title\">About Us</h5>\r\n			        <p class=\"card-text\">Iterfeyis Teacher Sisteam,   php javascrip</p>\r\n			        <p class=\"card-text\"><small class=\"text-muted\">BPO School</small></p>\r\n			      </div>\r\n			    </div>\r\n			  </div>\r\n			</div>\r\n        </section>\r\n        <section id=\"contact\"\r\n                 class=\"d-flex justify-content-center align-items-center flex-column\">\r\n        	<form method=\"post\"\r\n    	          action=\"\" name=\"message_bpo\">\r\n        		<h3>Contact Us</h3>\r\n        		<?php if (isset($_GET[\'error\'])) { ?>\r\n	    		<div class=\"alert alert-danger\" role=\"alert\">\r\n				  <?=$_GET[\'error\']?>\r\n				</div>\r\n				<?php } ?>\r\n			  <div class=\"mb-3\">\r\n			    <label for=\"exampleInputEmail1\" class=\"form-label\">Email address</label>\r\n			    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" name=\"email\" aria-describedby=\"emailHelp\" required>\r\n			    <div id=\"emailHelp\" class=\"form-text\">We\'ll never share your email with anyone else.</div>\r\n			  </div>\r\n			  <div class=\"mb-3\">\r\n			    <label class=\"form-label\">Full Name</label>\r\n			    <input type=\"text\" name=\"full_name\" required class=\"form-control\">\r\n			  </div>\r\n			  <div class=\"mb-3\">\r\n			    <label class=\"form-label\">Message</label>\r\n			    <textarea class=\"form-control\"name=\"message\" required rows=\"4\" maxlength=\"300\"></textarea>\r\n			  </div>\r\n			  <button type=\"submit\" class=\"btn btn-primary\">Send</button>\r\n			</form>\r\n        </section>\r\n        <div class=\"text-center text-light\">\r\n        	Copyright &copy; 2021 BPO. All rights reserved.\r\n        </div>\r\n\r\n    	</div>\r\n    </div>\r\n\r\n		</nav>\r\n        <section class=\"welcome-text d-flex justify-content-center align-items-center flex-column\">\r\n        	<!-- <img src=\"./img/logo.png\" > -->\r\n        	<h4>Welcome to ITS</h4>\r\n        	<p>Lux et Veritas Light and Truth</p>\r\n        </section>\r\n        <section id=\"about\"\r\n                 class=\"d-flex justify-content-center align-items-center flex-column\">\r\n        	<div class=\"card mb-3 card-1\">\r\n			  <div class=\"row g-0\">\r\n			    <div class=\"col-md-4\">\r\n			      <img src=\"./assets/img/logo.png\" class=\"img-fluid rounded-start\" >\r\n			    </div>\r\n			    <div class=\"col-md-8\">\r\n			      <div class=\"card-body\">\r\n			        <h5 class=\"card-title\">About Us</h5>\r\n			        <p class=\"card-text\">Iterfeyis Teacher Sisteam,   php javascrip</p>\r\n			        <p class=\"card-text\"><small class=\"text-muted\">BPO School</small></p>\r\n			      </div>\r\n			    </div>\r\n			  </div>\r\n			</div>\r\n        </section>\r\n        <section id=\"contact\"\r\n                 class=\"d-flex justify-content-center align-items-center flex-column\">\r\n        	<form method=\"post\"\r\n    	          action=\"\" name=\"message_bpo\">\r\n        		<h3>Contact Us</h3>\r\n        		<?php if (isset($_GET[\'error\'])) { ?>\r\n	    		<div class=\"alert alert-danger\" role=\"alert\">\r\n				  <?=$_GET[\'error\']?>\r\n				</div>\r\n				<?php } ?>\r\n			  <div class=\"mb-3\">\r\n			    <label for=\"exampleInputEmail1\" class=\"form-label\">Email address</label>\r\n			    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" name=\"email\" aria-describedby=\"emailHelp\" required>\r\n			    <div id=\"emailHelp\" class=\"form-text\">We\'ll never share your email with anyone else.</div>\r\n			  </div>\r\n			  <div class=\"mb-3\">\r\n			    <label class=\"form-label\">Full Name</label>\r\n			    <input type=\"text\" name=\"full_name\" required class=\"form-control\">\r\n			  </div>\r\n			  <div class=\"mb-3\">\r\n			    <label class=\"form-label\">Message</label>\r\n			    <textarea class=\"form-control\"name=\"message\" required rows=\"4\" maxlength=\"300\"></textarea>\r\n			  </div>\r\n			  <button type=\"submit\" class=\"btn btn-primary\">Send</button>\r\n			</form>\r\n        </section>\r\n        <div class=\"text-center text-light\">\r\n        	Copyright &copy; 2021 BPO. All rights reserved.\r\n        </div>\r\n\r\n    	</div>\r\n    </div>\r\n\r\n		</nav>\r\n        <section class=\"welcome-text d-flex justify-content-center align-items-center flex-column\">\r\n        	<!-- <img src=\"./img/logo.png\" > -->\r\n        	<h4>Welcome to ITS</h4>\r\n        	<p>Lux et Veritas Light and Truth</p>\r\n        </section>\r\n        <section id=\"about\"\r\n                 class=\"d-flex justify-content-center align-items-center flex-column\">\r\n        	<div class=\"card mb-3 card-1\">\r\n			  <div class=\"row g-0\">\r\n			    <div class=\"col-md-4\">\r\n			      <img src=\"./assets/img/logo.png\" class=\"img-fluid rounded-start\" >\r\n			    </div>\r\n			    <div class=\"col-md-8\">\r\n			      <div class=\"card-body\">\r\n			        <h5 class=\"card-title\">About Us</h5>\r\n			        <p class=\"card-text\">Iterfeyis Teacher Sisteam,   php javascrip</p>\r\n			        <p class=\"card-text\"><small class=\"text-muted\">BPO School</small></p>\r\n			      </div>\r\n			    </div>\r\n			  </div>\r\n			</div>\r\n        </section>\r\n        <section id=\"contact\"\r\n                 class=\"d-flex justify-content-center align-items-center flex-column\">\r\n        	<form method=\"post\"\r\n    	          action=\"\" name=\"message_bpo\">\r\n        		<h3>Contact Us</h3>\r\n        		<?php if (isset($_GET[\'error\'])) { ?>\r\n	    		<div class=\"alert alert-danger\" role=\"alert\">\r\n				  <?=$_GET[\'error\']?>\r\n				</div>\r\n				<?php } ?>\r\n			  <div class=\"mb-3\">\r\n			    <label for=\"exampleInputEmail1\" class=\"form-label\">Email address</label>\r\n			    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" name=\"email\" aria-describedby=\"emailHelp\" required>\r\n			    <div id=\"emailHelp\" class=\"form-text\">We\'ll never share your email with anyone else.</div>\r\n			  </div>\r\n			  <div class=\"mb-3\">\r\n			    <label class=\"form-label\">Full Name</label>\r\n			    <input type=\"text\" name=\"full_name\" required class=\"form-control\">\r\n			  </div>\r\n			  <div class=\"mb-3\">\r\n			    <label class=\"form-label\">Message</label>\r\n			    <textarea class=\"form-control\"name=\"message\" required rows=\"4\" maxlength=\"300\"></textarea>\r\n			  </div>\r\n			  <button type=\"submit\" class=\"btn btn-primary\">Send</button>\r\n			</form>\r\n        </section>\r\n        <div class=\"text-center text-light\">\r\n        	Copyright &copy; 2021 BPO. All rights reserved.\r\n        </div>\r\n\r\n    	</div>\r\n    </div>');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `rt_jurnale`
--
ALTER TABLE `rt_jurnale`
  ADD UNIQUE KEY `sundetn_id` (`sundetn_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
