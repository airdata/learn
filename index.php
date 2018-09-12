<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='index' />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <!-- Google Tag Manager -->
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MSTD3T7');</script>
<!-- End Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-6674956-7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-6674956-7');
    </script>
<!-- Global site tag (gtag.js) - Google Analytics -->

        <meta charset="utf-8">
            <html lang="en">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
    
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"> <!--320-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    
        <link rel="icon" href="mapt/images/favicon.ico">
    
        <link rel="stylesheet" href="mapt/css/bootstrap.css">
        <link rel="stylesheet" href="mapt/css/bootstrap-xl.css">
        
        <link rel="stylesheet" href="mapt/css/jquery-ui.css">
        <link rel="stylesheet" href="mapt/css/jquery-ui.theme.css">
        
        <link rel="stylesheet" href="mapt/css/filter.formatter.css">
        <link rel="stylesheet" href="mapt/css/jquery.tablesorter.pager.css">
        <link rel="stylesheet" href="mapt/css/font-awesome.css">
        <link rel="stylesheet" href="mapt/css/google-fonts.css">
        <link rel="stylesheet" href="mapt/css/devicon.css">
    
        <link rel="stylesheet" href="mapt/css/mapt.css">
        <link rel="stylesheet" href="mapt/css/custom.css">
    
        <script src="mapt/js/jquery.js"></script>
        <script src="mapt/js/jquery-ui.js"></script>
        <script src="mapt/js/bootstrap.js"></script>
        <script src="mapt/js/jquery.magnific-popup.js"></script>   
        <script src="mapt/js/jquery.tablesorter.combined.js"></script>
        <script src="mapt/js/widget-filter-formatter-jui.js"></script>
        <script src="mapt/js/jquery.tablesorter.pager.js"></script>
    
        <script src="mapt/js/custom.js"></script>

        <title>Video Lessons for Coders Programmers Developers</title>
    </head>
    
    <body class="home-body">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MSTD3T7"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<cms:editable name='main_content' type='richtext'>

    <div id="wrapper-main"> 
        <div id="page-content-wrapper">
    <a href="rumenlishkoff@gmail.com" id="back_to_top" class="back-to-top"><img src="mapt/images/kopimi.svg"></a>    
    <div id="main-wrapper" class="container-fluid">
        <div class="col-sm-12 col-lg-offset-1 col-lg-10" id="home">
            <div class="row no-gutter">
              <div class="col-xs-12">
                <h3 class="product-title text-center">
                    <p><b>Video Lessons for Coders Programmers Developers</b></p>
                </h3>
                <h4 class="text-center">
                    <strong>
                        <a href="https://rumen.pro/">@Author |</a>
                        <a href="http://github.com/airdata">@GitHub |</a>
                        <a href="https://www.linkedin.com/in/rumen-lishkov/">@Linkedin |</a>
                        <a href="https://www.facebook.com/rumenlishkov">@Facebook</a>
                    </strong>
                </h4>
              </div>
            </div>
	</cms:editable>

            <hr class="divider">
            <div class="row">
                <div class="col-sm-12">
                    <div class="informaltable">
                        <div class="pager">
                            <span>Page: <select class="gotoPage"></select></span>
                            <span class="btn btn-default first">
                                <i class="fa fa-fast-backward" aria-hidden="true"></i>
                            </span>
                            <span class="btn btn-default prev">
                                <i class="fa fa-step-backward" aria-hidden="true"></i>
                            </span>
                            <span class="pagedisplay"></span>
                            <span class="btn btn-default next">
                                <i class="fa fa-step-forward" aria-hidden="true"></i>
                            </span>
                            <span class="btn btn-default last">
                                <i class="fa fa-fast-forward" aria-hidden="true"></i>
                            </span>
                            <span>
                                <select class="pagesize">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </span>
                            <span class="btn btn-default reset">Reset Search</span>
                        </div>
                        
                        <table id="book_list" class="book-list">
                        <thead>
                            <tr>
                                <th class="right filter-false" data-sorter="digit"><p>#</p></th>
                                <th data-sorter="text" data-placeholder="Search by title"><p>Title | Заглавие</p></th>
                                <th data-sorter="text" data-placeholder="Search by author"><p>Author(s) | Автор/и</p></th>
                                <th class="center filter-select filter-onlyAvail"><p>Category | Категория</p></th>
                                <th class="center" data-placeholder="Select date"><p>Pub Date | Публикувано</p></th>
                                <th class="center" data-sorter="digit" data-placeholder="Enter digits"><p>ISBN</p></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="right light"><p>1</p></td>
                                <td class="left"><p><a href="mph/all-seeing-eye/ASE Vol 2 No 1 as received 8-11-14.pdf  " target="_blank">Learning Salt</a></p></td>
                                <td class="left"><p>Seth House</p></td>
                                <td class="capit center"><p>Networking &amp; Servers</p></td>
                                <td class="center nowrap" data-date="1487808000"><p>23 Feb 2017</p></td>
                                <td class="center"><p>9781785884368</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>2</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786469816/videos/" target="_blank">Mastering VMware vSphere 6.5</a></p></td>
                                <td class="left"><p>Atindra Chaturvedi</p></td>
                                <td class="capit center"><p>Virtualization</p></td>
                                <td class="center nowrap" data-date="1487721600"><p>22 Feb 2017</p></td>
                                <td class="center"><p>9781786469816</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>3</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786460264/videos/" target="_blank">Unity Virtual Reality - Volume 1</a></p></td>
                                <td class="left"><p>Jonathan Linowes</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1487635200"><p>21 Feb 2017</p></td>
                                <td class="center"><p>9781786460264</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>4</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787283770/videos/" target="_blank">Advanced Data Mining projects with R</a></p></td>
                                <td class="left"><p>Pradeepta Mishra</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1487548800"><p>20 Feb 2017</p></td>
                                <td class="center"><p>9781787283770</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>5</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787283299/videos/" target="_blank">Julia Solutions</a></p></td>
                                <td class="left"><p>Jalem Raj Rohit</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781787283299</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>6</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787128644/videos/" target="_blank">Machine Learning with Open CV and Python</a></p></td>
                                <td class="left"><p>Joe Minichino</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1487116800"><p>15 Feb 2017</p></td>
                                <td class="center"><p>9781787128644</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>7</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787121249/videos/" target="_blank">SQL Server 2016 Database Reporting</a></p></td>
                                <td class="left"><p>Dr. Dallas Snider</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1487116800"><p>15 Feb 2017</p></td>
                                <td class="center"><p>9781787121249</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>8</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786465719/videos/" target="_blank">Ansible 2 for Beginners</a></p></td>
                                <td class="left"><p>David Cohen</p></td>
                                <td class="capit center"><p>Ansible</p></td>
                                <td class="center nowrap" data-date="1486944000"><p>13 Feb 2017</p></td>
                                <td class="center"><p>9781786465719</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>9</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781788295116/videos/" target="_blank">Building Practical Recommendation Engines – Part 2</a></p></td>
                                <td class="left"><p>Suresh Kumar Gorakala</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781788295116</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>10</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787280397/videos/" target="_blank">Beginning C++ Game Programming - Part 2</a></p></td>
                                <td class="left"><p>John Horton</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781787280397</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>11</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787287648/videos/" target="_blank">Building Practical Recommendation Engines – Part 1</a></p></td>
                                <td class="left"><p>Suresh Kumar Gorakala</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781787287648</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>12</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787287259/videos/" target="_blank">OpenCV 3 by Example</a></p></td>
                                <td class="left"><p>David Millán Escrivá, Prateek Joshi, Vinícius Godoy</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781787287259</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>13</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782175247/videos/" target="_blank">Fundamentals of R Programming and Statistical Analysis</a></p></td>
                                <td class="left"><p>Radia Johnson</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781782175247</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>14</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787286184/videos/" target="_blank">Yii2 Application Development Solutions- Volume 1</a></p></td>
                                <td class="left"><p>Alexander Makarov, Andrey Bogdanov, Dimitry Foures</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781787286184</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>15</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787284517/videos/" target="_blank">Modern Python Solutions Part 1</a></p></td>
                                <td class="left"><p>Steven F. Lott</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781787284517</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>16</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787283954/videos/" target="_blank">R Data Mining Projects</a></p></td>
                                <td class="left"><p>Pradeepta Mishra</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781787283954</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>17</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787124141/videos/" target="_blank">Mastering Bootstrap 4</a></p></td>
                                <td class="left"><p>Laurence Svekis</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781787124141</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>18</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785889646/videos/" target="_blank">Web Development with Angular 2 and Bootstrap</a></p></td>
                                <td class="left"><p>Tarun Sharma</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781785889646</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>19</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787122895/videos/" target="_blank">Drupal 8 for Beginners</a></p></td>
                                <td class="left"><p>Jason Blanda</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781787122895</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>20</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785880605/videos/" target="_blank">Unity 5: Creating the Game Environment</a></p></td>
                                <td class="left"><p>Dr. Edward Lavieri</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781785880605</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>21</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787281608/videos/" target="_blank">Learning React.js User Interfaces</a></p></td>
                                <td class="left"><p>Ben Fhala</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781787281608</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>22</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787286948/videos/" target="_blank">Building a Game with Unity and Blender</a></p></td>
                                <td class="left"><p>Lee Zhi Eng</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781787286948</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>23</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787120884/videos/" target="_blank">Getting Started with Unity 2D Game Development</a></p></td>
                                <td class="left"><p>Dr. Ashley Godbold</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781787120884</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>24</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787280823/videos/" target="_blank">Mastering Magento 2</a></p></td>
                                <td class="left"><p>Sergii Ivashchenko</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781787280823</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>25</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786468239/videos/" target="_blank">Mastering Go Programming</a></p></td>
                                <td class="left"><p>Mina Andrawos</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1485820800"><p>31 Jan 2017</p></td>
                                <td class="center"><p>9781786468239</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>26</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787125513/videos/" target="_blank">Unity 5.x Game Development Projects</a></p></td>
                                <td class="left"><p>Abdelrahman Saher, Francesco Sapio</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1485734400"><p>30 Jan 2017</p></td>
                                <td class="center"><p>9781787125513</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>27</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787121065/videos/" target="_blank">Advanced VMware vRealize Operations Manager</a></p></td>
                                <td class="left"><p>Chris Slater, Scott Norris</p></td>
                                <td class="capit center"><p>Virtualization</p></td>
                                <td class="center nowrap" data-date="1485734400"><p>30 Jan 2017</p></td>
                                <td class="center"><p>9781787121065</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>28</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787287556/videos/" target="_blank">Ionic 2 Solutions</a></p></td>
                                <td class="left"><p>Hoc Phan</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1485734400"><p>30 Jan 2017</p></td>
                                <td class="center"><p>9781787287556</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>29</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786461636/videos/" target="_blank">Python Machine Learning - Part 1</a></p></td>
                                <td class="left"><p>Jason Wolosonovich</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1485475200"><p>27 Jan 2017</p></td>
                                <td class="center"><p>9781786461636</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>30</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787129139/videos/" target="_blank">Test-Driven Android</a></p></td>
                                <td class="left"><p>Brandan Jones</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1485475200"><p>27 Jan 2017</p></td>
                                <td class="center"><p>9781787129139</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>31</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783988402/videos/" target="_blank">Mastering Node.js</a></p></td>
                                <td class="left"><p>Joris Hermans</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1485475200"><p>27 Jan 2017</p></td>
                                <td class="center"><p>9781783988402</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>32</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786465207/videos/" target="_blank">Introduction to TypeScript</a></p></td>
                                <td class="left"><p>Kamran Ayub</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1485475200"><p>27 Jan 2017</p></td>
                                <td class="center"><p>9781786465207</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>33</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787285620/videos/" target="_blank">Reactive Java 9</a></p></td>
                                <td class="left"><p>Manuel Vicente Vivo</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1485302400"><p>25 Jan 2017</p></td>
                                <td class="center"><p>9781787285620</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>34</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783984589/videos/" target="_blank">Learning ElasticSearch 5.0</a></p></td>
                                <td class="left"><p>Ethan Anthony</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1485216000"><p>24 Jan 2017</p></td>
                                <td class="center"><p>9781783984589</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>35</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786460226/videos/" target="_blank">Getting Started with PHP 7</a></p></td>
                                <td class="left"><p>Budi Irawan</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1485129600"><p>23 Jan 2017</p></td>
                                <td class="center"><p>9781786460226</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>36</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784391867/videos/" target="_blank">DevOps for Web Developers</a></p></td>
                                <td class="left"><p>Mitesh Soni</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1484870400"><p>20 Jan 2017</p></td>
                                <td class="center"><p>9781784391867</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>37</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787125506/videos/" target="_blank">Learning Angular components - Second Edition</a></p></td>
                                <td class="left"><p>Juri Strumpflohner</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1484870400"><p>20 Jan 2017</p></td>
                                <td class="center"><p>9781787125506</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>38</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787121454/videos/" target="_blank">Functional PHP 7</a></p></td>
                                <td class="left"><p>Luis Atencio</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1484784000"><p>19 Jan 2017</p></td>
                                <td class="center"><p>9781787121454</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>39</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786467935/videos/" target="_blank">Data Science with Spark</a></p></td>
                                <td class="left"><p>Eric Charles</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1484697600"><p>18 Jan 2017</p></td>
                                <td class="center"><p>9781786467935</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>40</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785880988/videos/" target="_blank">Building iOS 10 Applications with Swift</a></p></td>
                                <td class="left"><p>Cecil Costa</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1484611200"><p>17 Jan 2017</p></td>
                                <td class="center"><p>9781785880988</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>41</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786463265/videos/" target="_blank">Mastering Wireshark 2</a></p></td>
                                <td class="left"><p>Andrew Crouthamel</p></td>
                                <td class="capit center"><p>Networking &amp; Servers</p></td>
                                <td class="center nowrap" data-date="1484611200"><p>17 Jan 2017</p></td>
                                <td class="center"><p>9781786463265</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>42</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787124134/videos/" target="_blank">Jenkins Bootcamp</a></p></td>
                                <td class="left"><p>Jason Taylor</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1484611200"><p>17 Jan 2017</p></td>
                                <td class="center"><p>9781787124134</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>43</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787285873/videos/" target="_blank">Learning React.js Scalable and High-Performance Apps</a></p></td>
                                <td class="left"><p>Ben Fhala</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1484611200"><p>17 Jan 2017</p></td>
                                <td class="center"><p>9781787285873</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>44</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786466440/videos/" target="_blank">Machine Learning with TensorFlow</a></p></td>
                                <td class="left"><p>Shams Ul Azeem</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1484524800"><p>16 Jan 2017</p></td>
                                <td class="center"><p>9781786466440</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>45</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786466693/videos/" target="_blank">Building Data Visualizations with D3 and Angular 2</a></p></td>
                                <td class="left"><p>Matt Dionis</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1484092800"><p>11 Jan 2017</p></td>
                                <td class="center"><p>9781786466693</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>46</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787282094/videos/" target="_blank">Building an RPG with Unity 5.x</a></p></td>
                                <td class="left"><p>Vahé Karamian</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1483056000"><p>30 Dec 2016</p></td>
                                <td class="center"><p>9781787282094</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>47</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787289895/videos/" target="_blank">Unity 5.x by Example</a></p></td>
                                <td class="left"><p></p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1483056000"><p>30 Dec 2016</p></td>
                                <td class="center"><p>9781787289895</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>48</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787281004/videos/" target="_blank">Apache Spark 2 for Beginners</a></p></td>
                                <td class="left"><p>Rajanarayanan Thottuvaikkatumana</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1483056000"><p>30 Dec 2016</p></td>
                                <td class="center"><p>9781787281004</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>49</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787283664/videos/" target="_blank">Django by Example</a></p></td>
                                <td class="left"><p>Antonio Melé</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1483056000"><p>30 Dec 2016</p></td>
                                <td class="center"><p>9781787283664</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>50</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787123717/videos/" target="_blank">Camtasia 8 Masterclass: Video Editing - Beginner To Advanced</a></p></td>
                                <td class="left"><p></p></td>
                                <td class="capit center"><p>Business</p></td>
                                <td class="center nowrap" data-date="1482969600"><p>29 Dec 2016</p></td>
                                <td class="center"><p>9781787123717</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>51</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785884535/videos/" target="_blank">Learning QlikView® 12</a></p></td>
                                <td class="left"><p>B. Diane Blackwood</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1482969600"><p>29 Dec 2016</p></td>
                                <td class="center"><p>9781785884535</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>52</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787125452/videos/" target="_blank">Infusionsoft Fundamentals</a></p></td>
                                <td class="left"><p>Paul Sokol</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1482969600"><p>29 Dec 2016</p></td>
                                <td class="center"><p>9781787125452</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>53</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786460493/videos/" target="_blank">JSF Scopes and Navigation</a></p></td>
                                <td class="left"><p>Anghel Leonard</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1482969600"><p>29 Dec 2016</p></td>
                                <td class="center"><p>9781786460493</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>54</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787284128/videos/" target="_blank">Beginning C++ Game Programming - Part 1</a></p></td>
                                <td class="left"><p>John Horton</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1482969600"><p>29 Dec 2016</p></td>
                                <td class="center"><p>9781787284128</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>55</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787125810/videos/" target="_blank">Learning Redux</a></p></td>
                                <td class="left"><p>Sam Slotsky </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1482969600"><p>29 Dec 2016</p></td>
                                <td class="center"><p>9781787125810</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>56</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785880117/videos/" target="_blank">Mastering Clip Studio</a></p></td>
                                <td class="left"><p>Elizabeth Staley</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1482883200"><p>28 Dec 2016</p></td>
                                <td class="center"><p>9781785880117</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>57</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786468000/videos/" target="_blank">Unity 5 Scripting and Gameplay Mechanics</a></p></td>
                                <td class="left"><p>Alan Thorn</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1482883200"><p>28 Dec 2016</p></td>
                                <td class="center"><p>9781786468000</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>58</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787120686/videos/" target="_blank">Automated UI Testing in Java</a></p></td>
                                <td class="left"><p>Mykola Kolisnyk</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1482883200"><p>28 Dec 2016</p></td>
                                <td class="center"><p>9781787120686</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>59</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787128033/videos/" target="_blank">Python Machine Learning Projects</a></p></td>
                                <td class="left"><p>Alexander T. Combs</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1482883200"><p>28 Dec 2016</p></td>
                                <td class="center"><p>9781787128033</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>60</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787280496/videos/" target="_blank">Python Parallel Programming Solutions</a></p></td>
                                <td class="left"><p>Giancarlo Zaccone</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1482796800"><p>27 Dec 2016</p></td>
                                <td class="center"><p>9781787280496</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>61</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787120822/videos/" target="_blank">Android Game Development for Beginners</a></p></td>
                                <td class="left"><p>James Saeed</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1482710400"><p>26 Dec 2016</p></td>
                                <td class="center"><p>9781787120822</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>62</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785287237/videos/" target="_blank">Advanced Data Analysis with Haskell</a></p></td>
                                <td class="left"><p>James Church</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1482710400"><p>26 Dec 2016</p></td>
                                <td class="center"><p>9781785287237</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>63</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786465542/videos/" target="_blank">Learning Haskell Programming</a></p></td>
                                <td class="left"><p>Hakim Cassimally</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1482364800"><p>22 Dec 2016</p></td>
                                <td class="center"><p>9781786465542</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>64</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786468376/videos/" target="_blank">Unreal Engine 4.x Projects</a></p></td>
                                <td class="left"><p>Mike Sill</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1482192000"><p>20 Dec 2016</p></td>
                                <td class="center"><p>9781786468376</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>65</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785885563/videos/" target="_blank">Angular 2 Web Development with TypeScript</a></p></td>
                                <td class="left"><p>Sergey Barskiy</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1481673600"><p>14 Dec 2016</p></td>
                                <td class="center"><p>9781785885563</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>66</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785880506/videos/" target="_blank">Learning Android N Application Development</a></p></td>
                                <td class="left"><p>Soham Mondal</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1481587200"><p>13 Dec 2016</p></td>
                                <td class="center"><p>9781785880506</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>67</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787124042/videos/" target="_blank">Migrating to Angular 2 – Second Edition</a></p></td>
                                <td class="left"><p>Alain Chautard</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1481500800"><p>12 Dec 2016</p></td>
                                <td class="center"><p>9781787124042</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>68</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786467492/videos/" target="_blank">Designing AWS Environments</a></p></td>
                                <td class="left"><p>Wayde Gilchrist</p></td>
                                <td class="capit center"><p>Virtualization</p></td>
                                <td class="center nowrap" data-date="1481155200"><p>8 Dec 2016</p></td>
                                <td class="center"><p>9781786467492</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>69</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787283657/videos/" target="_blank">TypeScript Projects</a></p></td>
                                <td class="left"><p>Ivo Gabe de Wolff</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1480464000"><p>30 Nov 2016</p></td>
                                <td class="center"><p>9781787283657</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>70</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787280151/videos/" target="_blank">Tkinter GUI Application Development Projects</a></p></td>
                                <td class="left"><p>Bhaskar Chaudhary</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1480464000"><p>30 Nov 2016</p></td>
                                <td class="center"><p>9781787280151</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>71</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787282063/videos/" target="_blank">R Machine Learning solutions</a></p></td>
                                <td class="left"><p>Yu-Wei, Chiu (David Chiu)</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1480464000"><p>30 Nov 2016</p></td>
                                <td class="center"><p>9781787282063</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>72</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787121997/videos/" target="_blank">Introduction to QGIS Python Programming</a></p></td>
                                <td class="left"><p>Erik Westra</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1480377600"><p>29 Nov 2016</p></td>
                                <td class="center"><p>9781787121997</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>73</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784393915/videos/" target="_blank">Mastering Flask</a></p></td>
                                <td class="left"><p>Alexander Putilin, Jack Stouffer</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1480291200"><p>28 Nov 2016</p></td>
                                <td class="center"><p>9781784393915</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>74</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786468772/videos/" target="_blank">Build Complex Express Sites with Redis and Socket.io</a></p></td>
                                <td class="left"><p>Joshua Johanan</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1480291200"><p>28 Nov 2016</p></td>
                                <td class="center"><p>9781786468772</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>75</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785286094/videos/" target="_blank">Getting Started with PhoneGap</a></p></td>
                                <td class="left"><p>Kerri Shotts</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1480032000"><p>25 Nov 2016</p></td>
                                <td class="center"><p>9781785286094</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>76</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787122802/videos/" target="_blank">Python Data Visualization Solutions</a></p></td>
                                <td class="left"><p>Dimitry Foures, Giuseppe Vettigli, Igor Milovanović</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1479945600"><p>24 Nov 2016</p></td>
                                <td class="center"><p>9781787122802</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>77</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786465375/videos/" target="_blank">Clip Studio Paint EX Fundamentals</a></p></td>
                                <td class="left"><p>Elizabeth Staley</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1479859200"><p>23 Nov 2016</p></td>
                                <td class="center"><p>9781786465375</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>78</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787285750/videos/" target="_blank">Learning React.js Data Visualization</a></p></td>
                                <td class="left"><p>Ben Fhala</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1479168000"><p>15 Nov 2016</p></td>
                                <td class="center"><p>9781787285750</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>79</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786460103/videos/" target="_blank">Go Projects</a></p></td>
                                <td class="left"><p>Ben Tranter, Rostislav Dzinko</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1479081600"><p>14 Nov 2016</p></td>
                                <td class="center"><p>9781786460103</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>80</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786464781/videos/" target="_blank">Mastering R Programming</a></p></td>
                                <td class="left"><p>Selva Prabhakaran</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1479081600"><p>14 Nov 2016</p></td>
                                <td class="center"><p>9781786464781</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>81</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786468697/videos/" target="_blank">Network Analysis Using Wireshark 2</a></p></td>
                                <td class="left"><p>Alex Kuzmenko</p></td>
                                <td class="capit center"><p>Networking &amp; Servers</p></td>
                                <td class="center nowrap" data-date="1478822400"><p>11 Nov 2016</p></td>
                                <td class="center"><p>9781786468697</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>82</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786462527/videos/" target="_blank">Mastering Puppet for Large Infrastructures</a></p></td>
                                <td class="left"><p>Thomas Uphill</p></td>
                                <td class="capit center"><p>Virtualization</p></td>
                                <td class="center nowrap" data-date="1478822400"><p>11 Nov 2016</p></td>
                                <td class="center"><p>9781786462527</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>83</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786466990/videos/" target="_blank">Python Projects</a></p></td>
                                <td class="left"><p>Burkhard A. Meier</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1478736000"><p>10 Nov 2016</p></td>
                                <td class="center"><p>9781786466990</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>84</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787129122/videos/" target="_blank">R for Data Science Solutions</a></p></td>
                                <td class="left"><p>Yu-Wei, Chiu (David Chiu)</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1478476800"><p>7 Nov 2016</p></td>
                                <td class="center"><p>9781787129122</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>85</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787129320/videos/" target="_blank">PHP 7 Programming Solutions</a></p></td>
                                <td class="left"><p>Doug Bierer</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1478476800"><p>7 Nov 2016</p></td>
                                <td class="center"><p>9781787129320</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>86</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787121645/videos/" target="_blank">Linux Shell Scripting Solutions</a></p></td>
                                <td class="left"><p>Sarath Lakshman, Shantanu Tushar</p></td>
                                <td class="capit center"><p>Networking &amp; Servers</p></td>
                                <td class="center nowrap" data-date="1478044800"><p>2 Nov 2016</p></td>
                                <td class="center"><p>9781787121645</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>87</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787121577/videos/" target="_blank">Learning VMware vRealize Operations Manager</a></p></td>
                                <td class="left"><p>Chris Slater, Scott Norris</p></td>
                                <td class="capit center"><p>Virtualization</p></td>
                                <td class="center nowrap" data-date="1477612800"><p>28 Oct 2016</p></td>
                                <td class="center"><p>9781787121577</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>88</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787124400/videos/" target="_blank">Node.js Projects</a></p></td>
                                <td class="left"><p>Fernando Monteiro</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1477612800"><p>28 Oct 2016</p></td>
                                <td class="center"><p>9781787124400</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>89</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787127692/videos/" target="_blank">Python Machine Learning Solutions</a></p></td>
                                <td class="left"><p>Prateek Joshi</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1477612800"><p>28 Oct 2016</p></td>
                                <td class="center"><p>9781787127692</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>90</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786463746/videos/" target="_blank">Mastering Python - Second Edition</a></p></td>
                                <td class="left"><p>Daniel Arbuckle </p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1477526400"><p>27 Oct 2016</p></td>
                                <td class="center"><p>9781786463746</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>91</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786469939/videos/" target="_blank">Drupal 8 Development Solutions</a></p></td>
                                <td class="left"><p>Matt Glaman</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1477526400"><p>27 Oct 2016</p></td>
                                <td class="center"><p>9781786469939</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>92</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786461711/videos/" target="_blank">Getting Started with System Center 2016 Operations Manager</a></p></td>
                                <td class="left"><p>Jerome Jones</p></td>
                                <td class="capit center"><p>Virtualization</p></td>
                                <td class="center nowrap" data-date="1477440000"><p>26 Oct 2016</p></td>
                                <td class="center"><p>9781786461711</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>93</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787124981/videos/" target="_blank">Learning React Reusable Components</a></p></td>
                                <td class="left"><p>Ben Fhala</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1477353600"><p>25 Oct 2016</p></td>
                                <td class="center"><p>9781787124981</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>94</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787121348/videos/" target="_blank">Learning Full Stack React</a></p></td>
                                <td class="left"><p>Ben Fhala</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1477353600"><p>25 Oct 2016</p></td>
                                <td class="center"><p>9781787121348</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>95</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787122321/videos/" target="_blank">Installing SharePoint 2013 Using PowerShell</a></p></td>
                                <td class="left"><p>Kameswara Sarma Uppuluri</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1477267200"><p>24 Oct 2016</p></td>
                                <td class="center"><p>9781787122321</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>96</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787127005/videos/" target="_blank">Swift 3 - Learn to Code with Apple&#039;s New Language</a></p></td>
                                <td class="left"><p>Nick Walter</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1477267200"><p>24 Oct 2016</p></td>
                                <td class="center"><p>9781787127005</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>97</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786466495/videos/" target="_blank">Learning vSphere 6</a></p></td>
                                <td class="left"><p>Glen Martin</p></td>
                                <td class="capit center"><p>Virtualization</p></td>
                                <td class="center nowrap" data-date="1477008000"><p>21 Oct 2016</p></td>
                                <td class="center"><p>9781786466495</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>98</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787127074/videos/" target="_blank">A 15 Hour C# 6.0 Course – The Core Language</a></p></td>
                                <td class="left"><p>Tom Owsiak</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1477008000"><p>21 Oct 2016</p></td>
                                <td class="center"><p>9781787127074</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>99</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785887079/videos/" target="_blank">Learning ReactJS</a></p></td>
                                <td class="left"><p>Samer Buna</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1476748800"><p>18 Oct 2016</p></td>
                                <td class="center"><p>9781785887079</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>100</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786463234/videos/" target="_blank">Cocos2d-x Solutions</a></p></td>
                                <td class="left"><p>Akihiro Matsuura</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1476748800"><p>18 Oct 2016</p></td>
                                <td class="center"><p>9781786463234</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>101</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785888236/videos/" target="_blank">Angular 2 Projects</a></p></td>
                                <td class="left"><p>Levi Botelho</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1476662400"><p>17 Oct 2016</p></td>
                                <td class="center"><p>9781785888236</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>102</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787129726/videos/" target="_blank">Learn MeteorJS By Building 10 Real World Projects</a></p></td>
                                <td class="left"><p>Eduonix </p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1476662400"><p>17 Oct 2016</p></td>
                                <td class="center"><p>9781787129726</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>103</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786463586/videos/" target="_blank">Ember.js Solutions</a></p></td>
                                <td class="left"><p>Erik Hanchett</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1475452800"><p>3 Oct 2016</p></td>
                                <td class="center"><p>9781786463586</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>104</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785884252/videos/" target="_blank">Getting Started with R for Data Science</a></p></td>
                                <td class="left"><p>Mykola Kolisnyk, Richard Skeggs</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1475193600"><p>30 Sep 2016</p></td>
                                <td class="center"><p>9781785884252</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>105</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786468048/videos/" target="_blank">Mastering DevOps</a></p></td>
                                <td class="left"><p>Dave Mangot</p></td>
                                <td class="capit center"><p>DevOps</p></td>
                                <td class="center nowrap" data-date="1475193600"><p>30 Sep 2016</p></td>
                                <td class="center"><p>9781786468048</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>106</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786465528/videos/" target="_blank">Python GUI Programming Solutions</a></p></td>
                                <td class="left"><p>Burkhard A. Meier</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1475193600"><p>30 Sep 2016</p></td>
                                <td class="center"><p>9781786465528</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>107</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786464439/videos/" target="_blank">Unity 5 Fundamentals</a></p></td>
                                <td class="left"><p>Dr. Edward Lavieri</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1475193600"><p>30 Sep 2016</p></td>
                                <td class="center"><p>9781786464439</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>108</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786464743/videos/" target="_blank">The Complete Guide to Node.js</a></p></td>
                                <td class="left"><p>Joshua Johanan</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1475193600"><p>30 Sep 2016</p></td>
                                <td class="center"><p>9781786464743</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>109</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786467980/videos/" target="_blank">Mastering Windows PowerShell 5 Administration</a></p></td>
                                <td class="left"><p>Heiko Horn</p></td>
                                <td class="capit center"><p>Networking &amp; Servers</p></td>
                                <td class="center nowrap" data-date="1475107200"><p>29 Sep 2016</p></td>
                                <td class="center"><p>9781786467980</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>110</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786460004/videos/" target="_blank">PHP Projects</a></p></td>
                                <td class="left"><p>Michael Lively</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1475020800"><p>28 Sep 2016</p></td>
                                <td class="center"><p>9781786460004</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>111</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786464101/videos/" target="_blank">Learning Windows Server Hyper-V 2016</a></p></td>
                                <td class="left"><p>Craig Thomas Ellrod</p></td>
                                <td class="capit center"><p>Virtualization</p></td>
                                <td class="center nowrap" data-date="1475020800"><p>28 Sep 2016</p></td>
                                <td class="center"><p>9781786464101</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>112</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786463531/videos/" target="_blank">Mastering Tableau 10</a></p></td>
                                <td class="left"><p>Tim Messar</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1474934400"><p>27 Sep 2016</p></td>
                                <td class="center"><p>9781786463531</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>113</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787123908/videos/" target="_blank">SharePoint 2013 Development Using C# - Part 2: Advanced Application Development</a></p></td>
                                <td class="left"><p>Kameswara Sarma Uppuluri</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1474934400"><p>27 Sep 2016</p></td>
                                <td class="center"><p>9781787123908</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>114</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787126350/videos/" target="_blank">SharePoint 2013 Development Using C# - Part 1: The Essentials of Application Development</a></p></td>
                                <td class="left"><p>Kameswara Sarma Uppuluri</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1474934400"><p>27 Sep 2016</p></td>
                                <td class="center"><p>9781787126350</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>115</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787120655/videos/" target="_blank">CSS Specialist Designation</a></p></td>
                                <td class="left"><p>Andrew Snyder-Spak</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1474934400"><p>27 Sep 2016</p></td>
                                <td class="center"><p>9781787120655</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>116</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787123915/videos/" target="_blank">Taming Big Data with Spark Streaming and Scala – Hands On!</a></p></td>
                                <td class="left"><p>Frank Kane</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1474848000"><p>26 Sep 2016</p></td>
                                <td class="center"><p>9781787123915</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>117</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787123793/videos/" target="_blank">Learn MongoDB by Building Ten Projects</a></p></td>
                                <td class="left"><p>Eduonix </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1474848000"><p>26 Sep 2016</p></td>
                                <td class="center"><p>9781787123793</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>118</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787129931/videos/" target="_blank">Taming Big Data with Apache Spark and Python - Hands On!</a></p></td>
                                <td class="left"><p>Frank Kane</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1474848000"><p>26 Sep 2016</p></td>
                                <td class="center"><p>9781787129931</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>119</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787127975/videos/" target="_blank">HTML5 Specialist Designation</a></p></td>
                                <td class="left"><p>Mark Lassoff</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1474848000"><p>26 Sep 2016</p></td>
                                <td class="center"><p>9781787127975</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>120</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787126299/videos/" target="_blank">Learn Scala Programming Language From Scratch</a></p></td>
                                <td class="left"><p>Eduonix </p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1474588800"><p>23 Sep 2016</p></td>
                                <td class="center"><p>9781787126299</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>121</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787127258/videos/" target="_blank">First Careful Steps Towards Success In C#</a></p></td>
                                <td class="left"><p>Tom Owsiak</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1474588800"><p>23 Sep 2016</p></td>
                                <td class="center"><p>9781787127258</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>122</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787128385/videos/" target="_blank">The Go Programming Language Guide - Code Like a Pro</a></p></td>
                                <td class="left"><p>Eduonix </p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1474588800"><p>23 Sep 2016</p></td>
                                <td class="center"><p>9781787128385</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>123</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787122758/videos/" target="_blank">Configuring SharePoint 2013 Server for App Development</a></p></td>
                                <td class="left"><p>Kameswara Sarma Uppuluri</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1474502400"><p>22 Sep 2016</p></td>
                                <td class="center"><p>9781787122758</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>124</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786462039/videos/" target="_blank">Learning OpenStack</a></p></td>
                                <td class="left"><p>Venu Murthy</p></td>
                                <td class="capit center"><p>Virtualization</p></td>
                                <td class="center nowrap" data-date="1474416000"><p>21 Sep 2016</p></td>
                                <td class="center"><p>9781786462039</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>125</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787127081/videos/" target="_blank">Data Science and Machine Learning with Python - Hands On!</a></p></td>
                                <td class="left"><p>Frank Kane</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1474416000"><p>21 Sep 2016</p></td>
                                <td class="center"><p>9781787127081</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>126</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787121881/videos/" target="_blank">Angular 2 Fundamentals for Web Developers</a></p></td>
                                <td class="left"><p>Eduonix </p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1474243200"><p>19 Sep 2016</p></td>
                                <td class="center"><p>9781787121881</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>127</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787129849/videos/" target="_blank">Apache Spark with Scala</a></p></td>
                                <td class="left"><p>Frank Kane</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1473724800"><p>13 Sep 2016</p></td>
                                <td class="center"><p>9781787129849</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>128</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787125568/videos/" target="_blank">Taming Big Data with MapReduce and Hadoop - Hands On!</a></p></td>
                                <td class="left"><p>Frank Kane</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1473638400"><p>12 Sep 2016</p></td>
                                <td class="center"><p>9781787125568</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>129</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786464927/videos/" target="_blank">Socket.IO Solutions</a></p></td>
                                <td class="left"><p>Tyson Cadenhead</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1472688000"><p>1 Sep 2016</p></td>
                                <td class="center"><p>9781786464927</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>130</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786466716/videos/" target="_blank">Software Defined Networking with VMware NSX</a></p></td>
                                <td class="left"><p>Matthias Eisner, Yves Sandfort</p></td>
                                <td class="capit center"><p>Virtualization</p></td>
                                <td class="center nowrap" data-date="1472601600"><p>31 Aug 2016</p></td>
                                <td class="center"><p>9781786466716</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>131</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785887499/videos/" target="_blank">Learning Data Mining with R</a></p></td>
                                <td class="left"><p>Romeo Kienzler</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1472601600"><p>31 Aug 2016</p></td>
                                <td class="center"><p>9781785887499</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>132</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786467928/videos/" target="_blank">Learning Spring Boot</a></p></td>
                                <td class="left"><p>Greg L. Turnquist</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1472601600"><p>31 Aug 2016</p></td>
                                <td class="center"><p>9781786467928</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>133</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785286346/videos/" target="_blank">Unity 5 for Beginners</a></p></td>
                                <td class="left"><p>Alan Thorn</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1472601600"><p>31 Aug 2016</p></td>
                                <td class="center"><p>9781785286346</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>134</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785286025/videos/" target="_blank">Learning Node.js</a></p></td>
                                <td class="left"><p>C Y Kan</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1472601600"><p>31 Aug 2016</p></td>
                                <td class="center"><p>9781785286025</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>135</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786466235/videos/" target="_blank">React Native Projects</a></p></td>
                                <td class="left"><p>Joshua Lyman</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1472515200"><p>30 Aug 2016</p></td>
                                <td class="center"><p>9781786466235</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>136</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783984725/videos/" target="_blank">Angular 2 Essentials</a></p></td>
                                <td class="left"><p>John Munsch </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1472515200"><p>30 Aug 2016</p></td>
                                <td class="center"><p>9781783984725</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>137</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786464057/videos/" target="_blank">Expert Programming in C# and .NET</a></p></td>
                                <td class="left"><p>Reynald Adolphe</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1472515200"><p>30 Aug 2016</p></td>
                                <td class="center"><p>9781786464057</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>138</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785288432/videos/" target="_blank">Clip Studio Paint EX - Creating and Exporting Pages</a></p></td>
                                <td class="left"><p>Liz Staley</p></td>
                                <td class="capit center"><p>Linux</p></td>
                                <td class="center nowrap" data-date="1472428800"><p>29 Aug 2016</p></td>
                                <td class="center"><p>9781785288432</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>139</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786468796/videos/" target="_blank">Mastering docker</a></p></td>
                                <td class="left"><p>Shrikrishna Holla</p></td>
                                <td class="capit center"><p>Docker</p></td>
                                <td class="center nowrap" data-date="1469750400"><p>29 Jul 2016</p></td>
                                <td class="center"><p>9781786468796</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>140</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785885716/videos/" target="_blank">Data Mining with Python: Implementing Classification and Regression</a></p></td>
                                <td class="left"><p>Saimadhu Polamuri</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1469750400"><p>29 Jul 2016</p></td>
                                <td class="center"><p>9781785885716</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>141</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785881350/videos/" target="_blank">Machine Learning with Scala</a></p></td>
                                <td class="left"><p>Alex Minnaar</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1469750400"><p>29 Jul 2016</p></td>
                                <td class="center"><p>9781785881350</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>142</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785285844/videos/" target="_blank">Mastering HTML5 Game Development</a></p></td>
                                <td class="left"><p>Daniel Albu</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1469750400"><p>29 Jul 2016</p></td>
                                <td class="center"><p>9781785285844</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>143</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785882685/videos/" target="_blank">Learning ECMAScript 6: Moving to the New JavaScript</a></p></td>
                                <td class="left"><p>Joris Hermans</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1469664000"><p>28 Jul 2016</p></td>
                                <td class="center"><p>9781785882685</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>144</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786464323/videos/" target="_blank">JSF Fundamentals</a></p></td>
                                <td class="left"><p>Anghel Leonard </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1469664000"><p>28 Jul 2016</p></td>
                                <td class="center"><p>9781786464323</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>145</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785880841/videos/" target="_blank">Getting Started with Haskell Data Analysis</a></p></td>
                                <td class="left"><p>James Church</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1469577600"><p>27 Jul 2016</p></td>
                                <td class="center"><p>9781785880841</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>146</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785884733/videos/" target="_blank">Introducing Rails 5: Learning Web Development the Ruby Way</a></p></td>
                                <td class="left"><p>Kingsley Ijomah</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1469404800"><p>25 Jul 2016</p></td>
                                <td class="center"><p>9781785884733</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>147</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786463869/videos/" target="_blank">Introduction to R Programming</a></p></td>
                                <td class="left"><p>Selva Prabhakaran</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1469404800"><p>25 Jul 2016</p></td>
                                <td class="center"><p>9781786463869</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>148</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787128026/videos/" target="_blank">Certified Web Development Professional Level II</a></p></td>
                                <td class="left"><p>Mark Lassoff</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1467244800"><p>30 Jun 2016</p></td>
                                <td class="center"><p>9781787128026</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>149</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783286676/videos/" target="_blank">Building Games with SFML</a></p></td>
                                <td class="left"><p></p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1467244800"><p>30 Jun 2016</p></td>
                                <td class="center"><p>9781783286676</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>150</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786465870/videos/" target="_blank">Java Programming for Beginners</a></p></td>
                                <td class="left"><p>Zachary Kingston</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1467244800"><p>30 Jun 2016</p></td>
                                <td class="center"><p>9781786465870</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>151</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787124325/videos/" target="_blank">Node.js for Beginners</a></p></td>
                                <td class="left"><p>Zeke Nierenberg</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1467244800"><p>30 Jun 2016</p></td>
                                <td class="center"><p>9781787124325</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>152</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787126558/videos/" target="_blank">Python for Beginners</a></p></td>
                                <td class="left"><p>Alex Bowers</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1467244800"><p>30 Jun 2016</p></td>
                                <td class="center"><p>9781787126558</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>153</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786469298/videos/" target="_blank">SQL Database for Beginners</a></p></td>
                                <td class="left"><p>Martin Holzke</p></td>
                                <td class="capit center"><p>Networking &amp; Servers</p></td>
                                <td class="center nowrap" data-date="1467244800"><p>30 Jun 2016</p></td>
                                <td class="center"><p>9781786469298</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>154</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787121027/videos/" target="_blank">HTML &amp; CSS For Beginners with HTML5</a></p></td>
                                <td class="left"><p>Mark Lassoff</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1467244800"><p>30 Jun 2016</p></td>
                                <td class="center"><p>9781787121027</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>155</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787126701/videos/" target="_blank">Game Development with Python</a></p></td>
                                <td class="left"><p>Kevin O'Flaherty</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1467244800"><p>30 Jun 2016</p></td>
                                <td class="center"><p>9781787126701</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>156</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787121874/videos/" target="_blank">Design for Coders</a></p></td>
                                <td class="left"><p>Joseph Caserto</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1467244800"><p>30 Jun 2016</p></td>
                                <td class="center"><p>9781787121874</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>157</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786460905/videos/" target="_blank">.NET For Beginners</a></p></td>
                                <td class="left"><p>Bruce Landry</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1467244800"><p>30 Jun 2016</p></td>
                                <td class="center"><p>9781786460905</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>158</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787129504/videos/" target="_blank">CSS Development with CSS3</a></p></td>
                                <td class="left"><p>Zachary Kingston</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1467244800"><p>30 Jun 2016</p></td>
                                <td class="center"><p>9781787129504</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>159</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787126459/videos/" target="_blank">GitHub Fundamentals</a></p></td>
                                <td class="left"><p>Ed Matthews</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1467244800"><p>30 Jun 2016</p></td>
                                <td class="center"><p>9781787126459</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>160</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787126817/videos/" target="_blank">C++ for Beginners</a></p></td>
                                <td class="left"><p>David Pither-Patterson</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1467244800"><p>30 Jun 2016</p></td>
                                <td class="center"><p>9781787126817</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>161</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787122635/videos/" target="_blank">Ruby on Rails for Beginners</a></p></td>
                                <td class="left"><p>Daniel Lefebvre</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1467244800"><p>30 Jun 2016</p></td>
                                <td class="center"><p>9781787122635</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>162</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781787120464/videos/" target="_blank">Project Management with Microsoft Project</a></p></td>
                                <td class="left"><p>Beth Mosolgo-Clark</p></td>
                                <td class="capit center"><p>Business</p></td>
                                <td class="center nowrap" data-date="1467244800"><p>30 Jun 2016</p></td>
                                <td class="center"><p>9781787120464</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>163</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786461322/videos/" target="_blank">Advanced JavaScript Development</a></p></td>
                                <td class="left"><p>Marco Covarrubias</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1467244800"><p>30 Jun 2016</p></td>
                                <td class="center"><p>9781786461322</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>164</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786463975/videos/" target="_blank">Angular 2 Deep Dive</a></p></td>
                                <td class="left"><p>Mathieu Chauvinc</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1467158400"><p>29 Jun 2016</p></td>
                                <td class="center"><p>9781786463975</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>165</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786464491/videos/" target="_blank">Deep Learning with TensorFlow</a></p></td>
                                <td class="left"><p>Dan Van Boxel</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1466726400"><p>24 Jun 2016</p></td>
                                <td class="center"><p>9781786464491</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>166</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785882357/videos/" target="_blank">Learning Swift 2</a></p></td>
                                <td class="left"><p>Victor Sigler</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1466553600"><p>22 Jun 2016</p></td>
                                <td class="center"><p>9781785882357</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>167</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786468918/videos/" target="_blank">HTML5 Game Development - Second Edition</a></p></td>
                                <td class="left"><p>Thomas Makzan</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1464739200"><p>1 Jun 2016</p></td>
                                <td class="center"><p>9781786468918</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>168</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785882159/videos/" target="_blank">Mastering MEAN Web Development: Expert Full Stack JavaScript</a></p></td>
                                <td class="left"><p>Shane A. Stillwell</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1464739200"><p>1 Jun 2016</p></td>
                                <td class="center"><p>9781785882159</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>169</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785885945/videos/" target="_blank">Learning ASP.NET Web API</a></p></td>
                                <td class="left"><p>Brij Bhushan Mishra</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1464739200"><p>1 Jun 2016</p></td>
                                <td class="center"><p>9781785885945</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>170</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785281617/videos/" target="_blank">Mastering Grunt</a></p></td>
                                <td class="left"><p>Bertrand Chevrier</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1464652800"><p>31 May 2016</p></td>
                                <td class="center"><p>9781785281617</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>171</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785284649/videos/" target="_blank">Learning Scala Web Development</a></p></td>
                                <td class="left"><p>Andriy Redko</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1464566400"><p>30 May 2016</p></td>
                                <td class="center"><p>9781785284649</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>172</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785284557/videos/" target="_blank">Building a Responsive Application with Bootstrap</a></p></td>
                                <td class="left"><p>Vedran Cindrić</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1464566400"><p>30 May 2016</p></td>
                                <td class="center"><p>9781785284557</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>173</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783988518/videos/" target="_blank">Learning Lodash 4.0</a></p></td>
                                <td class="left"><p>Eric Adams </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1461974400"><p>30 Apr 2016</p></td>
                                <td class="center"><p>9781783988518</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>174</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785284311/videos/" target="_blank">RESTful Web API Design with Node.js</a></p></td>
                                <td class="left"><p>Saleh Hamadeh</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1461888000"><p>29 Apr 2016</p></td>
                                <td class="center"><p>9781785284311</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>175</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785889998/videos/" target="_blank">Mastering Swift 2 Programming</a></p></td>
                                <td class="left"><p>Dan Beaulieu</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1461888000"><p>29 Apr 2016</p></td>
                                <td class="center"><p>9781785889998</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>176</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785886508/videos/" target="_blank">Advanced Swift 2 Application Development</a></p></td>
                                <td class="left"><p>Paul Napier</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1461888000"><p>29 Apr 2016</p></td>
                                <td class="center"><p>9781785886508</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>177</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786468994/videos/" target="_blank">Beginning Python</a></p></td>
                                <td class="left"><p>William Fiset</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1461888000"><p>29 Apr 2016</p></td>
                                <td class="center"><p>9781786468994</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>178</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785280719/videos/" target="_blank">Learning Dart</a></p></td>
                                <td class="left"><p>Joris Hermans</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1461888000"><p>29 Apr 2016</p></td>
                                <td class="center"><p>9781785280719</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>179</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785884702/videos/" target="_blank">Learning Angular 2 Directives</a></p></td>
                                <td class="left"><p>Juri Strumpflohner</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1461628800"><p>26 Apr 2016</p></td>
                                <td class="center"><p>9781785884702</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>180</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785883156/videos/" target="_blank">Learning PHP 7</a></p></td>
                                <td class="left"><p>Nicola Pietroluongo</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1459382400"><p>31 Mar 2016</p></td>
                                <td class="center"><p>9781785883156</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>181</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785280351/videos/" target="_blank">Learning Python Web Penetration Testing</a></p></td>
                                <td class="left"><p>Christian Martorella</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1459382400"><p>31 Mar 2016</p></td>
                                <td class="center"><p>9781785280351</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>182</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785882067/videos/" target="_blank">Julia for Data Science</a></p></td>
                                <td class="left"><p>Ivo Balbaert</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1459296000"><p>30 Mar 2016</p></td>
                                <td class="center"><p>9781785882067</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>183</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785885907/videos/" target="_blank">Migrating to Angular 2</a></p></td>
                                <td class="left"><p>Alain Chautard</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1459296000"><p>30 Mar 2016</p></td>
                                <td class="center"><p>9781785885907</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>184</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785882890/videos/" target="_blank">Learning R for Data Visualization</a></p></td>
                                <td class="left"><p>Dr. Fabio Veronesi</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1459123200"><p>28 Mar 2016</p></td>
                                <td class="center"><p>9781785882890</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>185</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785286834/videos/" target="_blank">Introduction to ASP.NET MVC 6</a></p></td>
                                <td class="left"><p>Mike Perrenoud</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1457654400"><p>11 Mar 2016</p></td>
                                <td class="center"><p>9781785286834</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>186</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785883873/videos/" target="_blank">Deep Learning with Python</a></p></td>
                                <td class="left"><p>Eder Santana</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1456704000"><p>29 Feb 2016</p></td>
                                <td class="center"><p>9781785883873</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>187</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783989867/videos/" target="_blank">Learning LESS</a></p></td>
                                <td class="left"><p>Anthony Killeen</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1456704000"><p>29 Feb 2016</p></td>
                                <td class="center"><p>9781783989867</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>188</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785283413/videos/" target="_blank">Web Development with Node.JS and MongoDB</a></p></td>
                                <td class="left"><p>Andrew Marcinkevičius</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1454112000"><p>30 Jan 2016</p></td>
                                <td class="center"><p>9781785283413</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>189</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786469144/videos/" target="_blank">Introducing Ionic 2</a></p></td>
                                <td class="left"><p>Mathieu Chauvinc</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1454112000"><p>30 Jan 2016</p></td>
                                <td class="center"><p>9781786469144</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>190</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783551750/videos/" target="_blank">Web API Development with Flask</a></p></td>
                                <td class="left"><p>Gergo Bogdan</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1454112000"><p>30 Jan 2016</p></td>
                                <td class="center"><p>9781783551750</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>191</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783989805/videos/" target="_blank">Mastering Django Web Development</a></p></td>
                                <td class="left"><p>Kevin Veroneau , Matthew Nuzum</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1453939200"><p>28 Jan 2016</p></td>
                                <td class="center"><p>9781783989805</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>192</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784391836/videos/" target="_blank">Learning Akka</a></p></td>
                                <td class="left"><p>Salma Khater</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1453939200"><p>28 Jan 2016</p></td>
                                <td class="center"><p>9781784391836</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>193</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786463258/videos/" target="_blank">Learning CSS</a></p></td>
                                <td class="left"><p>Ben Fhala</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1451520000"><p>31 Dec 2015</p></td>
                                <td class="center"><p>9781786463258</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>194</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784392130/videos/" target="_blank">UX Design for Web Developers</a></p></td>
                                <td class="left"><p>Chris R Becker</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1451520000"><p>31 Dec 2015</p></td>
                                <td class="center"><p>9781784392130</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>195</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786469724/videos/" target="_blank">Mastering CSS3 Selectors</a></p></td>
                                <td class="left"><p>Ben Fhala</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1451433600"><p>30 Dec 2015</p></td>
                                <td class="center"><p>9781786469724</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>196</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786467188/videos/" target="_blank">Mastering CSS3 Colors</a></p></td>
                                <td class="left"><p>Ben Fhala</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1451433600"><p>30 Dec 2015</p></td>
                                <td class="center"><p>9781786467188</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>197</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785889608/videos/" target="_blank">Application Development with Swift 2</a></p></td>
                                <td class="left"><p>Paul Napier</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1451433600"><p>30 Dec 2015</p></td>
                                <td class="center"><p>9781785889608</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>198</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785288067/videos/" target="_blank">Learning Application Deployment with Laravel</a></p></td>
                                <td class="left"><p>James Dow</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1451347200"><p>29 Dec 2015</p></td>
                                <td class="center"><p>9781785288067</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>199</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781786467942/videos/" target="_blank">Mastering HTML5 Canvas</a></p></td>
                                <td class="left"><p>Ben Fhala</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1451347200"><p>29 Dec 2015</p></td>
                                <td class="center"><p>9781786467942</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>200</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784397982/videos/" target="_blank">Go for Web Development</a></p></td>
                                <td class="left"><p>Larry Price</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1451347200"><p>29 Dec 2015</p></td>
                                <td class="center"><p>9781784397982</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>201</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783985487/videos/" target="_blank">Mastering Selenium Testing Tools</a></p></td>
                                <td class="left"><p>Ripon Al Wasim, Thomas Sundberg</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1450828800"><p>23 Dec 2015</p></td>
                                <td class="center"><p>9781783985487</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>202</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782175650/videos/" target="_blank">Mastering TypeScript</a></p></td>
                                <td class="left"><p>David Sherret</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1450051200"><p>14 Dec 2015</p></td>
                                <td class="center"><p>9781782175650</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>203</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782174899/videos/" target="_blank">Learning AngularJS Testing</a></p></td>
                                <td class="left"><p>Rudolf Olah</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1449532800"><p>8 Dec 2015</p></td>
                                <td class="center"><p>9781782174899</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>204</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783552580/videos/" target="_blank">Mastering Meteor: Powerful Reactive Applications with Full-Stack JavaScript</a></p></td>
                                <td class="left"><p>George Mcknight</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1448841600"><p>30 Nov 2015</p></td>
                                <td class="center"><p>9781783552580</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>205</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783555291/videos/" target="_blank">Learning Highcharts</a></p></td>
                                <td class="left"><p>Jonathan Wong, Zsolt Gere</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1448841600"><p>30 Nov 2015</p></td>
                                <td class="center"><p>9781783555291</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>206</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785888113/videos/" target="_blank">Learning Hadoop 2</a></p></td>
                                <td class="left"><p>Randal Scott King</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1448582400"><p>27 Nov 2015</p></td>
                                <td class="center"><p>9781785888113</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>207</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784396596/videos/" target="_blank">Learning Redis</a></p></td>
                                <td class="left"><p>Scott Ganyo</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1448496000"><p>26 Nov 2015</p></td>
                                <td class="center"><p>9781784396596</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>208</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785880971/videos/" target="_blank">Web Visualization with HTML5, CSS3, and JavaScript</a></p></td>
                                <td class="left"><p>Ben Fhala</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1448236800"><p>23 Nov 2015</p></td>
                                <td class="center"><p>9781785880971</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>209</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783984848/videos/" target="_blank">Beginning docker</a></p></td>
                                <td class="left"><p>Donald Simpson, Jeff Lindsay</p></td>
                                <td class="capit center"><p>Docker</p></td>
                                <td class="center nowrap" data-date="1447891200"><p>19 Nov 2015</p></td>
                                <td class="center"><p>9781783984848</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>210</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784391355/videos/" target="_blank">Learning JavaScript Promises: Practical Applications in ES6 and AngularJS</a></p></td>
                                <td class="left"><p>Mathieu Chauvinc</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1446163200"><p>30 Oct 2015</p></td>
                                <td class="center"><p>9781784391355</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>211</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782175698/videos/" target="_blank">Learning JavaScript Data Structures and Algorithms</a></p></td>
                                <td class="left"><p>Rodrigo Formigone Silveira</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1446163200"><p>30 Oct 2015</p></td>
                                <td class="center"><p>9781782175698</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>212</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783553037/videos/" target="_blank">Mastering Yii 2</a></p></td>
                                <td class="left"><p>Vitalii Tron</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1446076800"><p>29 Oct 2015</p></td>
                                <td class="center"><p>9781783553037</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>213</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785888014/videos/" target="_blank">JavaScript Design Patterns 20 Patterns for Advancing Your JavaScript Skills</a></p></td>
                                <td class="left"><p>Ben Fhala</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1446076800"><p>29 Oct 2015</p></td>
                                <td class="center"><p>9781785888014</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>214</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784398774/videos/" target="_blank">Learning Yii 2</a></p></td>
                                <td class="left"><p>Matthew Beaumont</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1445558400"><p>23 Oct 2015</p></td>
                                <td class="center"><p>9781784398774</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>215</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784399542/videos/" target="_blank">Developing Real Time Applications with WebRTC</a></p></td>
                                <td class="left"><p>Andrés Estévez, Antón Román Portabales, Atul Pundhir, Simón Roca</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1443571200"><p>30 Sep 2015</p></td>
                                <td class="center"><p>9781784399542</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>216</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785288784/videos/" target="_blank">Mastering ReactJS</a></p></td>
                                <td class="left"><p>Simon Højberg</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1443571200"><p>30 Sep 2015</p></td>
                                <td class="center"><p>9781785288784</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>217</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783980734/videos/" target="_blank">Mastering JavaScript Design Patterns: A Practical Introduction to Building Better Applications</a></p></td>
                                <td class="left"><p>Alexandr Truhin (bumbu)</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1443571200"><p>30 Sep 2015</p></td>
                                <td class="center"><p>9781783980734</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>218</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785888212/videos/" target="_blank">Responsive Web Design: Advancing your Design to the Modern Web</a></p></td>
                                <td class="left"><p>Ben Fhala</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1443571200"><p>30 Sep 2015</p></td>
                                <td class="center"><p>9781785888212</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>219</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784399320/videos/" target="_blank">Learning Web Development with the MEAN Stack</a></p></td>
                                <td class="left"><p>Michael Perrenoud</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1443571200"><p>30 Sep 2015</p></td>
                                <td class="center"><p>9781784399320</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>220</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783283736/videos/" target="_blank">Building Interactive Data Visualizations with D3.js</a></p></td>
                                <td class="left"><p>Alex Simoes, Michael Westbay</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1441929600"><p>11 Sep 2015</p></td>
                                <td class="center"><p>9781783283736</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>221</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785288296/videos/" target="_blank">Learning Knockout.JS</a></p></td>
                                <td class="left"><p>Robert Gaut</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1440979200"><p>31 Aug 2015</p></td>
                                <td class="center"><p>9781785288296</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>222</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785289910/videos/" target="_blank">Mastering AngularJS UI Development</a></p></td>
                                <td class="left"><p>Leon Revill</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1440979200"><p>31 Aug 2015</p></td>
                                <td class="center"><p>9781785289910</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>223</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784391348/videos/" target="_blank">Mastering JavaScript</a></p></td>
                                <td class="left"><p>Ben Fhala</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1440979200"><p>31 Aug 2015</p></td>
                                <td class="center"><p>9781784391348</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>224</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785285530/videos/" target="_blank">Learning Backbone.js Testing</a></p></td>
                                <td class="left"><p>Jonathan Freeman</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1440460800"><p>25 Aug 2015</p></td>
                                <td class="center"><p>9781785285530</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>225</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785284465/videos/" target="_blank">Beginning Ionic Hybrid Application Development</a></p></td>
                                <td class="left"><p>Troy Miles</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1439769600"><p>17 Aug 2015</p></td>
                                <td class="center"><p>9781785284465</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>226</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784392321/videos/" target="_blank">Learning Firebase</a></p></td>
                                <td class="left"><p>Mark Nutter</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1439510400"><p>14 Aug 2015</p></td>
                                <td class="center"><p>9781784392321</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>227</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784396381/videos/" target="_blank">Mastering Cassandra</a></p></td>
                                <td class="left"><p>C Y Kan</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1438300800"><p>31 Jul 2015</p></td>
                                <td class="center"><p>9781784396381</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>228</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785288265/videos/" target="_blank">Learning Grunt</a></p></td>
                                <td class="left"><p>Dan Wellman</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1438300800"><p>31 Jul 2015</p></td>
                                <td class="center"><p>9781785288265</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>229</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783554294/videos/" target="_blank">Learning Flask</a></p></td>
                                <td class="left"><p>Lalith Polepeddi </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1438300800"><p>31 Jul 2015</p></td>
                                <td class="center"><p>9781783554294</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>230</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784399399/videos/" target="_blank">Introducing Dart</a></p></td>
                                <td class="left"><p>James Slocum</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1438214400"><p>30 Jul 2015</p></td>
                                <td class="center"><p>9781784399399</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>231</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785287800/videos/" target="_blank">Learning Functional JavaScript</a></p></td>
                                <td class="left"><p>Christian Johansen</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1438214400"><p>30 Jul 2015</p></td>
                                <td class="center"><p>9781785287800</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>232</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783554218/videos/" target="_blank">Introducing AngularJS</a></p></td>
                                <td class="left"><p>Mathieu Chauvinc</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1435622400"><p>30 Jun 2015</p></td>
                                <td class="center"><p>9781783554218</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>233</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783285174/videos/" target="_blank">Building a Responsive Site with Zurb Foundation</a></p></td>
                                <td class="left"><p>Andrea Moretti</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1435622400"><p>30 Jun 2015</p></td>
                                <td class="center"><p>9781783285174</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>234</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783554157/videos/" target="_blank">Learning Django Web Development</a></p></td>
                                <td class="left"><p>Matthew Nuzum</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1435622400"><p>30 Jun 2015</p></td>
                                <td class="center"><p>9781783554157</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>235</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783554317/videos/" target="_blank">Mastering Express Web Application Development</a></p></td>
                                <td class="left"><p>Michael Heap</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1435622400"><p>30 Jun 2015</p></td>
                                <td class="center"><p>9781783554317</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>236</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784396176/videos/" target="_blank">Introducing Grunt: The JavaScript Task Runner</a></p></td>
                                <td class="left"><p>Daniel Linn</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1435622400"><p>30 Jun 2015</p></td>
                                <td class="center"><p>9781784396176</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>237</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784391874/videos/" target="_blank">Mastering CSS</a></p></td>
                                <td class="left"><p>Rich Finelli </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1434067200"><p>12 Jun 2015</p></td>
                                <td class="center"><p>9781784391874</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>238</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785287329/videos/" target="_blank">Learning AngularJS Directives</a></p></td>
                                <td class="left"><p>John Munsch </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1432944000"><p>30 May 2015</p></td>
                                <td class="center"><p>9781785287329</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>239</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783989461/videos/" target="_blank">Mastering Kendo UI</a></p></td>
                                <td class="left"><p>Chuck Catron </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1432857600"><p>29 May 2015</p></td>
                                <td class="center"><p>9781783989461</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>240</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784394509/videos/" target="_blank">Building Responsive Data Visualizations with D3.js</a></p></td>
                                <td class="left"><p>Merrill Cook </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1432857600"><p>29 May 2015</p></td>
                                <td class="center"><p>9781784394509</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>241</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781785287602/videos/" target="_blank">JavaScript High Performance</a></p></td>
                                <td class="left"><p>Ben Fhala</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1432857600"><p>29 May 2015</p></td>
                                <td class="center"><p>9781785287602</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>242</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784399122/videos/" target="_blank">Kalilinux Web App Testing</a></p></td>
                                <td class="left"><p>Jack (linkcabin)</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1432598400"><p>26 May 2015</p></td>
                                <td class="center"><p>9781784399122</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>243</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783985784/videos/" target="_blank">Mastering D3.js</a></p></td>
                                <td class="left"><p>Swizec Teller </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1430352000"><p>30 Apr 2015</p></td>
                                <td class="center"><p>9781783985784</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>244</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783554232/videos/" target="_blank">Learning Git</a></p></td>
                                <td class="left"><p>Sam Slotsky </p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1430352000"><p>30 Apr 2015</p></td>
                                <td class="center"><p>9781783554232</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>245</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783988969/videos/" target="_blank">Mastering Python</a></p></td>
                                <td class="left"><p>Daniel Arbuckle</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1430352000"><p>30 Apr 2015</p></td>
                                <td class="center"><p>9781783988969</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>246</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784393588/videos/" target="_blank">Learning Meteor Application Development</a></p></td>
                                <td class="left"><p>Isaac Strack</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1430265600"><p>29 Apr 2015</p></td>
                                <td class="center"><p>9781784393588</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>247</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783284153/videos/" target="_blank">Building a Search Server with Elasticsearch</a></p></td>
                                <td class="left"><p>Daniel Beach </p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1430092800"><p>27 Apr 2015</p></td>
                                <td class="center"><p>9781783284153</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>248</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784395063/videos/" target="_blank">Mastering MEAN Web Development</a></p></td>
                                <td class="left"><p>Luke Madera</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1429747200"><p>23 Apr 2015</p></td>
                                <td class="center"><p>9781784395063</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>249</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783285631/videos/" target="_blank">Building Applications with Ext JS</a></p></td>
                                <td class="left"><p>Simon Elliston Ball</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1427760000"><p>31 Mar 2015</p></td>
                                <td class="center"><p>9781783285631</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>250</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783284115/videos/" target="_blank">Building Databases with Redis</a></p></td>
                                <td class="left"><p>Rostyslav Dzinko</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1427760000"><p>31 Mar 2015</p></td>
                                <td class="center"><p>9781783284115</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>251</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784391621/videos/" target="_blank">Rapid Underscore.js</a></p></td>
                                <td class="left"><p>Thomas Parslow </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1427673600"><p>30 Mar 2015</p></td>
                                <td class="center"><p>9781784391621</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>252</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784390679/videos/" target="_blank">docker for Web Developers</a></p></td>
                                <td class="left"><p>Ian Miell </p></td>
                                <td class="capit center"><p>Docker</p></td>
                                <td class="center nowrap" data-date="1427673600"><p>30 Mar 2015</p></td>
                                <td class="center"><p>9781784390679</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>253</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784391508/videos/" target="_blank">Web Development with AngularJS and Bootstrap</a></p></td>
                                <td class="left"><p>Simeon Cheeseman </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1427414400"><p>27 Mar 2015</p></td>
                                <td class="center"><p>9781784391508</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>254</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782169994/videos/" target="_blank">Alfresco 4 Enterprise Content Management Implementation</a></p></td>
                                <td class="left"><p>Alen Subat, Ben Chevallereau</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1426032000"><p>11 Mar 2015</p></td>
                                <td class="center"><p>9781782169994</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>255</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784393373/videos/" target="_blank">Rapid Gulp</a></p></td>
                                <td class="left"><p>Matthew Brandly </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1425513600"><p>5 Mar 2015</p></td>
                                <td class="center"><p>9781784393373</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>256</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783988068/videos/" target="_blank">Mastering PrimeFaces</a></p></td>
                                <td class="left"><p>Josh Juneau</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1425513600"><p>5 Mar 2015</p></td>
                                <td class="center"><p>9781783988068</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>257</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783554416/videos/" target="_blank">Rapid D3.js</a></p></td>
                                <td class="left"><p>Michael Westbay</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1424995200"><p>27 Feb 2015</p></td>
                                <td class="center"><p>9781783554416</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>258</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849697040/videos/" target="_blank">Mastering Prezi</a></p></td>
                                <td class="left"><p>Minh Thompson </p></td>
                                <td class="capit center"><p>Linux</p></td>
                                <td class="center nowrap" data-date="1422662400"><p>31 Jan 2015</p></td>
                                <td class="center"><p>9781849697040</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>259</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783559541/videos/" target="_blank">Learning Axure RP</a></p></td>
                                <td class="left"><p>Stuart Hopper</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1422576000"><p>30 Jan 2015</p></td>
                                <td class="center"><p>9781783559541</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>260</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783983926/videos/" target="_blank">Learning MongoDB</a></p></td>
                                <td class="left"><p>Daniel Watrous</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1422576000"><p>30 Jan 2015</p></td>
                                <td class="center"><p>9781783983926</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>261</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782172918/videos/" target="_blank">Building Real-time Communication Applications Using Twilio</a></p></td>
                                <td class="left"><p>Michael Peacock</p></td>
                                <td class="capit center"><p>Virtualization</p></td>
                                <td class="center nowrap" data-date="1421971200"><p>23 Jan 2015</p></td>
                                <td class="center"><p>9781782172918</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>262</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783554133/videos/" target="_blank">Mastering Git</a></p></td>
                                <td class="left"><p>Thom Parkin </p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1419984000"><p>31 Dec 2014</p></td>
                                <td class="center"><p>9781783554133</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>263</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783554331/videos/" target="_blank">Learning Object Oriented JavaScript</a></p></td>
                                <td class="left"><p>Ben Fhala</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1419984000"><p>31 Dec 2014</p></td>
                                <td class="center"><p>9781783554331</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>264</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784390419/videos/" target="_blank">Rapid SASS</a></p></td>
                                <td class="left"><p>Brock Nunn </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1419984000"><p>31 Dec 2014</p></td>
                                <td class="center"><p>9781784390419</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>265</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783554478/videos/" target="_blank">Deploying AngularJS</a></p></td>
                                <td class="left"><p>Thomas Tuts </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1419897600"><p>30 Dec 2014</p></td>
                                <td class="center"><p>9781783554478</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>266</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783989881/videos/" target="_blank">Learning Express Web Application Development</a></p></td>
                                <td class="left"><p>Matthew Nuzum</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1419552000"><p>26 Dec 2014</p></td>
                                <td class="center"><p>9781783989881</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>267</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783989904/videos/" target="_blank">Learning WebRTC Application Development</a></p></td>
                                <td class="left"><p>Alessandro Arrichiello </p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1419206400"><p>22 Dec 2014</p></td>
                                <td class="center"><p>9781783989904</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>268</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784391102/videos/" target="_blank">Rapid PrimeFaces</a></p></td>
                                <td class="left"><p>Anghel Leonard </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1418860800"><p>18 Dec 2014</p></td>
                                <td class="center"><p>9781784391102</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>269</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784395452/videos/" target="_blank">Rapid Redis</a></p></td>
                                <td class="left"><p>Scott Ganyo </p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1418860800"><p>18 Dec 2014</p></td>
                                <td class="center"><p>9781784395452</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>270</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783283699/videos/" target="_blank">Building an Application with AngularJS</a></p></td>
                                <td class="left"><p>Gabriel Schenker </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1418342400"><p>12 Dec 2014</p></td>
                                <td class="center"><p>9781783283699</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>271</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783988624/videos/" target="_blank">Building Single Page Web Apps with AngularJS</a></p></td>
                                <td class="left"><p>Raoni Boaventura</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1417564800"><p>3 Dec 2014</p></td>
                                <td class="center"><p>9781783988624</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>272</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783989768/videos/" target="_blank">Rapid LESS</a></p></td>
                                <td class="left"><p>Reme Le Hane</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1417132800"><p>28 Nov 2014</p></td>
                                <td class="center"><p>9781783989768</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>273</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783553013/videos/" target="_blank">Rapid Highcharts</a></p></td>
                                <td class="left"><p>Tom Hombergs </p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1417046400"><p>27 Nov 2014</p></td>
                                <td class="center"><p>9781783553013</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>274</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783553051/videos/" target="_blank">Rapid Cassandra</a></p></td>
                                <td class="left"><p>C Y Kan</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1416960000"><p>26 Nov 2014</p></td>
                                <td class="center"><p>9781783553051</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>275</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784397258/videos/" target="_blank">Rapid Lo-Dash</a></p></td>
                                <td class="left"><p>Adam England </p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1416787200"><p>24 Nov 2014</p></td>
                                <td class="center"><p>9781784397258</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>276</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783554256/videos/" target="_blank">Rapid Flask</a></p></td>
                                <td class="left"><p>Gareth Dwyer</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1416355200"><p>19 Nov 2014</p></td>
                                <td class="center"><p>9781783554256</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>277</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783552993/videos/" target="_blank">Rapid Ghost</a></p></td>
                                <td class="left"><p>Dane Grant</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1415232000"><p>6 Nov 2014</p></td>
                                <td class="center"><p>9781783552993</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>278</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783286539/videos/" target="_blank">Building Web Applications with Spring MVC</a></p></td>
                                <td class="left"><p>Koushik Kothagal</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1414713600"><p>31 Oct 2014</p></td>
                                <td class="center"><p>9781783286539</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>279</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781784397654/videos/" target="_blank">Rapid Ember.js</a></p></td>
                                <td class="left"><p>William Hart</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1414368000"><p>27 Oct 2014</p></td>
                                <td class="center"><p>9781784397654</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>280</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783288922/videos/" target="_blank">Building a Rich Internet Application with Vaadin</a></p></td>
                                <td class="left"><p>Mikołaj Olszewski</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1412035200"><p>30 Sep 2014</p></td>
                                <td class="center"><p>9781783288922</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>281</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783989782/videos/" target="_blank">Rapid PhantomJS</a></p></td>
                                <td class="left"><p>Stefan Judis</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1410307200"><p>10 Sep 2014</p></td>
                                <td class="center"><p>9781783989782</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>282</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782167662/videos/" target="_blank">Effective Gradle Implementation</a></p></td>
                                <td class="left"><p>Lee Fox, Ryan Vanderwerf</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1409184000"><p>28 Aug 2014</p></td>
                                <td class="center"><p>9781782167662</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>283</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782164449/videos/" target="_blank">Beginning PhoneGap</a></p></td>
                                <td class="left"><p>Keyang Xiang</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1409184000"><p>28 Aug 2014</p></td>
                                <td class="center"><p>9781782164449</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>284</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783989966/videos/" target="_blank">Rapid Bootstrap</a></p></td>
                                <td class="left"><p>Brock Nunn</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1408406400"><p>19 Aug 2014</p></td>
                                <td class="center"><p>9781783989966</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>285</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783985067/videos/" target="_blank">Learning AngularJS</a></p></td>
                                <td class="left"><p>Jack Herrington</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1407888000"><p>13 Aug 2014</p></td>
                                <td class="center"><p>9781783985067</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>286</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782177425/videos/" target="_blank">Enterprise Identity Management with Microsoft Forefront Identity Management</a></p></td>
                                <td class="left"><p>Kent Nordström</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1406246400"><p>25 Jul 2014</p></td>
                                <td class="center"><p>9781782177425</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>287</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782177302/videos/" target="_blank">Building Interactive Dashboards with Tableau</a></p></td>
                                <td class="left"><p>Tony Kau</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1405900800"><p>21 Jul 2014</p></td>
                                <td class="center"><p>9781782177302</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>288</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783286393/videos/" target="_blank">Building a RepRap 3D Printer</a></p></td>
                                <td class="left"><p>Bram de Vries, Morris Winkler, Sam Muirhead</p></td>
                                <td class="capit center"><p>Linux</p></td>
                                <td class="center nowrap" data-date="1404086400"><p>30 Jun 2014</p></td>
                                <td class="center"><p>9781783286393</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>289</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782176985/videos/" target="_blank">Building and Managing a Virtual Environment with Hyper-V Server 2012 R2</a></p></td>
                                <td class="left"><p>Eric Siron</p></td>
                                <td class="capit center"><p>Virtualization</p></td>
                                <td class="center nowrap" data-date="1404086400"><p>30 Jun 2014</p></td>
                                <td class="center"><p>9781782176985</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>290</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783559909/videos/" target="_blank">Building an Architectural Walkthrough Using Unity</a></p></td>
                                <td class="left"><p>Stefan Boeykens</p></td>
                                <td class="capit center"><p>Linux</p></td>
                                <td class="center nowrap" data-date="1401408000"><p>30 May 2014</p></td>
                                <td class="center"><p>9781783559909</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>291</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783283712/videos/" target="_blank">Building Games with Scratch 2.0</a></p></td>
                                <td class="left"><p>Dennis G. Jerz</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1401321600"><p>29 May 2014</p></td>
                                <td class="center"><p>9781783283712</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>292</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783284290/videos/" target="_blank">Building an App UI with PrimeFaces</a></p></td>
                                <td class="left"><p>Kobus du Toit</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1401235200"><p>28 May 2014</p></td>
                                <td class="center"><p>9781783284290</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>293</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783284030/videos/" target="_blank">Building Hadoop Clusters</a></p></td>
                                <td class="left"><p>Sean Mikha</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1400716800"><p>22 May 2014</p></td>
                                <td class="center"><p>9781783284030</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>294</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782170761/videos/" target="_blank">Salesforce CRM: The Definitive Admin</a></p></td>
                                <td class="left"><p>Edward Encarnacion</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1398988800"><p>2 May 2014</p></td>
                                <td class="center"><p>9781782170761</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>295</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849696180/videos/" target="_blank">UDK Game Development</a></p></td>
                                <td class="left"><p>John P. Doran</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1398729600"><p>29 Apr 2014</p></td>
                                <td class="center"><p>9781849696180</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>296</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783286157/videos/" target="_blank">Building Web Applications with Clojure</a></p></td>
                                <td class="left"><p>Tomek Lipski</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1398384000"><p>25 Apr 2014</p></td>
                                <td class="center"><p>9781783286157</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>297</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783286010/videos/" target="_blank">Designing Moodle Themes</a></p></td>
                                <td class="left"><p>Susan Smith Nash</p></td>
                                <td class="capit center"><p>Linux</p></td>
                                <td class="center nowrap" data-date="1398211200"><p>23 Apr 2014</p></td>
                                <td class="center"><p>9781783286010</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>298</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783550074/videos/" target="_blank">Building a Road using Civil 3D</a></p></td>
                                <td class="left"><p>Seth Cohen</p></td>
                                <td class="capit center"><p>Linux</p></td>
                                <td class="center nowrap" data-date="1396915200"><p>8 Apr 2014</p></td>
                                <td class="center"><p>9781783550074</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>299</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783558766/videos/" target="_blank">Building a 2D Game with GameMaker: Studio</a></p></td>
                                <td class="left"><p>Nathan Auckett</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1396828800"><p>7 Apr 2014</p></td>
                                <td class="center"><p>9781783558766</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>300</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783283675/videos/" target="_blank">Building an Application with CoffeeScript</a></p></td>
                                <td class="left"><p>Darko Bozhinovski</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1396396800"><p>2 Apr 2014</p></td>
                                <td class="center"><p>9781783283675</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>301</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783284337/videos/" target="_blank">Building Interactive Graphs with ggplot2 and Shiny</a></p></td>
                                <td class="left"><p>Christophe Ladroue</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1396224000"><p>31 Mar 2014</p></td>
                                <td class="center"><p>9781783284337</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>302</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783283811/videos/" target="_blank">Building Your First Application with Go</a></p></td>
                                <td class="left"><p>Rostyslav Dzinko</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1393545600"><p>28 Feb 2014</p></td>
                                <td class="center"><p>9781783283811</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>303</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783285754/videos/" target="_blank">RESTful Services with ASP.NET Web API</a></p></td>
                                <td class="left"><p>Fanie Reynders</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1393372800"><p>26 Feb 2014</p></td>
                                <td class="center"><p>9781783285754</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>304</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782164982/videos/" target="_blank">Building a Responsive Website with Bootstrap</a></p></td>
                                <td class="left"><p>Brock Nunn</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1393200000"><p>24 Feb 2014</p></td>
                                <td class="center"><p>9781782164982</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>305</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783286133/videos/" target="_blank">Building Android Games with OpenGL ES</a></p></td>
                                <td class="left"><p>Amerigo Moscaroli</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1391040000"><p>30 Jan 2014</p></td>
                                <td class="center"><p>9781783286133</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>306</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781783559466/videos/" target="_blank">Building an E-learning Course with Camtasia Studio 8</a></p></td>
                                <td class="left"><p>Joe Deegan</p></td>
                                <td class="capit center"><p>Linux</p></td>
                                <td class="center nowrap" data-date="1391040000"><p>30 Jan 2014</p></td>
                                <td class="center"><p>9781783559466</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>307</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782167839/videos/" target="_blank">Pentaho Reporting</a></p></td>
                                <td class="left"><p>Francesco Corti</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1390435200"><p>23 Jan 2014</p></td>
                                <td class="center"><p>9781782167839</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>308</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849694940/videos/" target="_blank">Oracle Coherence Quickstart</a></p></td>
                                <td class="left"><p>Ahmet Fuat Sungur</p></td>
                                <td class="capit center"><p>Networking &amp; Servers</p></td>
                                <td class="center nowrap" data-date="1390435200"><p>23 Jan 2014</p></td>
                                <td class="center"><p>9781849694940</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>309</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782168638/videos/" target="_blank">Building a Data Mart with Pentaho Data Integration</a></p></td>
                                <td class="left"><p>Diethard Steiner</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1388448000"><p>31 Dec 2013</p></td>
                                <td class="center"><p>9781782168638</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>310</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849695886/videos/" target="_blank">HTML5 Game Development</a></p></td>
                                <td class="left"><p>Makzan</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1388448000"><p>31 Dec 2013</p></td>
                                <td class="center"><p>9781849695886</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>311</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782163664/videos/" target="_blank">Expert Metasploit Penetration Testing</a></p></td>
                                <td class="left"><p>Abhinav Singh </p></td>
                                <td class="capit center"><p>Networking &amp; Servers</p></td>
                                <td class="center nowrap" data-date="1387497600"><p>20 Dec 2013</p></td>
                                <td class="center"><p>9781782163664</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>312</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782164302/videos/" target="_blank">Moodle 2.3 Multimedia</a></p></td>
                                <td class="left"><p>Silvina Paola Hillar</p></td>
                                <td class="capit center"><p>Linux</p></td>
                                <td class="center nowrap" data-date="1387324800"><p>18 Dec 2013</p></td>
                                <td class="center"><p>9781782164302</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>313</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849697460/videos/" target="_blank">CryENGINE SDK Game Programming Essentials</a></p></td>
                                <td class="left"><p>Richard Marcoux III</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1385683200"><p>29 Nov 2013</p></td>
                                <td class="center"><p>9781849697460</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>314</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782168270/videos/" target="_blank">Build a Network Application with Node</a></p></td>
                                <td class="left"><p>Joe Stanco</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1385596800"><p>28 Nov 2013</p></td>
                                <td class="center"><p>9781782168270</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>315</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782177180/videos/" target="_blank">Creating Reports with SQL Server 2012 Reporting Services</a></p></td>
                                <td class="left"><p>Dr. Dallas Snider</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1385424000"><p>26 Nov 2013</p></td>
                                <td class="center"><p>9781782177180</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>316</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782164203/videos/" target="_blank">Cassandra Administration</a></p></td>
                                <td class="left"><p>C Y Kan</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1384473600"><p>15 Nov 2013</p></td>
                                <td class="center"><p>9781782164203</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>317</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782166665/videos/" target="_blank">Learning Apache Maven 3</a></p></td>
                                <td class="left"><p>Kapila Bogahapitiya</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1384473600"><p>15 Nov 2013</p></td>
                                <td class="center"><p>9781782166665</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>318</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782162964/videos/" target="_blank">jQuery UI Development</a></p></td>
                                <td class="left"><p>Ben Fhala</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1383177600"><p>31 Oct 2013</p></td>
                                <td class="center"><p>9781782162964</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>319</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782170488/videos/" target="_blank">Oracle Data Integrator Essentials</a></p></td>
                                <td class="left"><p>Andreas Nobbmann</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1383177600"><p>31 Oct 2013</p></td>
                                <td class="center"><p>9781782170488</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>320</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782162483/videos/" target="_blank">JBoss EAP Configuration, Deployment, and Administration</a></p></td>
                                <td class="left"><p>Jason Shepherd </p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1383004800"><p>29 Oct 2013</p></td>
                                <td class="center"><p>9781782162483</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>321</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782169123/videos/" target="_blank">Moodle for Mobile Learning</a></p></td>
                                <td class="left"><p>Graeme Boxwell</p></td>
                                <td class="capit center"><p>Linux</p></td>
                                <td class="center nowrap" data-date="1380499200"><p>30 Sep 2013</p></td>
                                <td class="center"><p>9781782169123</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>322</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849689243/videos/" target="_blank">JIRA 6 Essentials</a></p></td>
                                <td class="left"><p>Patrick Li</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1380499200"><p>30 Sep 2013</p></td>
                                <td class="center"><p>9781849689243</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>323</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782165729/videos/" target="_blank">Getting Started with Apache Maven</a></p></td>
                                <td class="left"><p>Russell Gold</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1380499200"><p>30 Sep 2013</p></td>
                                <td class="center"><p>9781782165729</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>324</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782165705/videos/" target="_blank">Responsive Web Design – From Concept to Complete Site</a></p></td>
                                <td class="left"><p>Joshua Miller</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1380153600"><p>26 Sep 2013</p></td>
                                <td class="center"><p>9781782165705</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>325</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782165521/videos/" target="_blank">Getting Started with Magento</a></p></td>
                                <td class="left"><p>Scott Tolinski</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1380153600"><p>26 Sep 2013</p></td>
                                <td class="center"><p>9781782165521</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>326</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782163947/videos/" target="_blank">Mastering Magento</a></p></td>
                                <td class="left"><p>Franklin Strube</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1378339200"><p>5 Sep 2013</p></td>
                                <td class="center"><p>9781782163947</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>327</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782166146/videos/" target="_blank">Building a Website with Drupal</a></p></td>
                                <td class="left"><p>Irene Kraus</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1378080000"><p>2 Sep 2013</p></td>
                                <td class="center"><p>9781782166146</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>328</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849696326/videos/" target="_blank">Unreal Development Kit Game Programming with UnrealScript</a></p></td>
                                <td class="left"><p>Alan Thorn</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1377820800"><p>30 Aug 2013</p></td>
                                <td class="center"><p>9781849696326</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>329</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782168652/videos/" target="_blank">Spring Security</a></p></td>
                                <td class="left"><p>Eugen Paraschiv</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1377734400"><p>29 Aug 2013</p></td>
                                <td class="center"><p>9781782168652</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>330</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782165507/videos/" target="_blank">Zabbix Network Monitoring Essentials</a></p></td>
                                <td class="left"><p>Christoph Haas</p></td>
                                <td class="capit center"><p>Networking &amp; Servers</p></td>
                                <td class="center nowrap" data-date="1377648000"><p>28 Aug 2013</p></td>
                                <td class="center"><p>9781782165507</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>331</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782165460/videos/" target="_blank">R Graph Essentials</a></p></td>
                                <td class="left"><p>Ehsan Karim</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1377216000"><p>23 Aug 2013</p></td>
                                <td class="center"><p>9781782165460</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>332</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782165682/videos/" target="_blank">Learning Joomla! 3 Extension Development</a></p></td>
                                <td class="left"><p>Donna Vincent</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1376956800"><p>20 Aug 2013</p></td>
                                <td class="center"><p>9781782165682</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>333</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782164500/videos/" target="_blank">Penetration Testing for Highly-Secured Environments</a></p></td>
                                <td class="left"><p>Aaron Johns</p></td>
                                <td class="capit center"><p>Networking &amp; Servers</p></td>
                                <td class="center nowrap" data-date="1375660800"><p>5 Aug 2013</p></td>
                                <td class="center"><p>9781782164500</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>334</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782162469/videos/" target="_blank">Java EE Development with NetBeans 7</a></p></td>
                                <td class="left"><p>David R. Heffelfinger</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1375228800"><p>31 Jul 2013</p></td>
                                <td class="center"><p>9781782162469</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>335</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782164180/videos/" target="_blank">HTML5 Animation and Transition</a></p></td>
                                <td class="left"><p>Mario Andrés Pagella</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1375228800"><p>31 Jul 2013</p></td>
                                <td class="center"><p>9781782164180</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>336</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782166160/videos/" target="_blank">Moodle for Training and Professional Development</a></p></td>
                                <td class="left"><p>Susan Smith Nash</p></td>
                                <td class="capit center"><p>Linux</p></td>
                                <td class="center nowrap" data-date="1375228800"><p>31 Jul 2013</p></td>
                                <td class="center"><p>9781782166160</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>337</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849696142/videos/" target="_blank">Mastering Unity 4 Scripting</a></p></td>
                                <td class="left"><p>Kyle D'Aoust</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1375228800"><p>31 Jul 2013</p></td>
                                <td class="center"><p>9781849696142</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>338</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849697408/videos/" target="_blank">CryENGINE 3 SDK Level Design</a></p></td>
                                <td class="left"><p>Nick Floyd</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1375142400"><p>30 Jul 2013</p></td>
                                <td class="center"><p>9781849697408</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>339</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782164487/videos/" target="_blank">Beginning Yii</a></p></td>
                                <td class="left"><p>Chris Backhouse</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1375056000"><p>29 Jul 2013</p></td>
                                <td class="center"><p>9781782164487</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>340</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782162926/videos/" target="_blank">Kalilinux - Backtrack Evolved: Assuring Security by Penetration Testing</a></p></td>
                                <td class="left"><p>Justin Hutchens</p></td>
                                <td class="capit center"><p>Networking &amp; Servers</p></td>
                                <td class="center nowrap" data-date="1372377600"><p>28 Jun 2013</p></td>
                                <td class="center"><p>9781782162926</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>341</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782165484/videos/" target="_blank">Play! Framework for Web Application Development</a></p></td>
                                <td class="left"><p>Martin Gontovnikas</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1372377600"><p>28 Jun 2013</p></td>
                                <td class="center"><p>9781782165484</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>342</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782161189/videos/" target="_blank">Drupal 7 Module Development</a></p></td>
                                <td class="left"><p>Trevor James</p></td>
                                <td class="capit center"><p>Web Development</p></td>
                                <td class="center nowrap" data-date="1372291200"><p>27 Jun 2013</p></td>
                                <td class="center"><p>9781782161189</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>343</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849689304/videos/" target="_blank">Microsoft SQL Server Analysis Services Demystified</a></p></td>
                                <td class="left"><p>Jen Stirrup</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1372291200"><p>27 Jun 2013</p></td>
                                <td class="center"><p>9781849689304</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>344</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849696128/videos/" target="_blank">Getting Started with Unity 4 Scripting</a></p></td>
                                <td class="left"><p>Juan Sebastian Muñoz</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1370390400"><p>5 Jun 2013</p></td>
                                <td class="center"><p>9781849696128</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>345</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782160847/videos/" target="_blank">Getting started with Apache Solr Search Server</a></p></td>
                                <td class="left"><p>Robert Elwell</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1370304000"><p>4 Jun 2013</p></td>
                                <td class="center"><p>9781782160847</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>346</p></td>
                                <td class="left"><p><a href="mph " target="_blank">XNA 3D Toolkit</a></p></td>
                                <td class="left"><p>Dustin Heffron, Larry D. Louisiana</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1370304000"><p>4 Jun 2013</p></td>
                                <td class="center"><p>9781849695688</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>347</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849695305/videos/" target="_blank">Unity 3D Game Development by Example</a></p></td>
                                <td class="left"><p>Adam Maxwell</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1369958400"><p>31 May 2013</p></td>
                                <td class="center"><p>9781849695305</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>348</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849689328/videos/" target="_blank">Microsoft Dynamics GP Techniques</a></p></td>
                                <td class="left"><p>Ian Grieve</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1369958400"><p>31 May 2013</p></td>
                                <td class="center"><p>9781849689328</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>349</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849689281/videos/" target="_blank">IBM Cognos 10 Report Studio Fundamentals</a></p></td>
                                <td class="left"><p>Abhishek Sanghani</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1369958400"><p>31 May 2013</p></td>
                                <td class="center"><p>9781849689281</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>350</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849699532/videos/" target="_blank">Fast Track to Adobe Captivate 6</a></p></td>
                                <td class="left"><p>Anita Horsley</p></td>
                                <td class="capit center"><p>Linux</p></td>
                                <td class="center nowrap" data-date="1369958400"><p>31 May 2013</p></td>
                                <td class="center"><p>9781849699532</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>351</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849696388/videos/" target="_blank">Excel 2013 Dashboard Design</a></p></td>
                                <td class="left"><p>Tony Kau</p></td>
                                <td class="capit center"><p>Big Data &amp; Business Intelligence</p></td>
                                <td class="center nowrap" data-date="1369958400"><p>31 May 2013</p></td>
                                <td class="center"><p>9781849696388</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>352</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849689366/videos/" target="_blank">Getting Started with Citrix XenApp 6.5</a></p></td>
                                <td class="left"><p>Craig Ellrod</p></td>
                                <td class="capit center"><p>Virtualization</p></td>
                                <td class="center nowrap" data-date="1369958400"><p>31 May 2013</p></td>
                                <td class="center"><p>9781849689366</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>353</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849689342/videos/" target="_blank">Oracle APEX Techniques</a></p></td>
                                <td class="left"><p>Scott Wesley</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1369872001"><p>30 May 2013</p></td>
                                <td class="center"><p>9781849689342</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>354</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849694889/videos/" target="_blank">OpenCV Computer Vision Application Programming</a></p></td>
                                <td class="left"><p>Sebastian Montabone</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1369872001"><p>30 May 2013</p></td>
                                <td class="center"><p>9781849694889</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>355</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849689267/videos/" target="_blank">Implementing Microsoft Forefront Unified Access Gateway 2010</a></p></td>
                                <td class="left"><p>Erez Ben-Ari</p></td>
                                <td class="capit center"><p>Application Development</p></td>
                                <td class="center nowrap" data-date="1369872001"><p>30 May 2013</p></td>
                                <td class="center"><p>9781849689267</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>356</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781849695701/videos/" target="_blank">XNA 3D Game Development By Example</a></p></td>
                                <td class="left"><p>Brecht Kets, Thomas Goussaert</p></td>
                                <td class="capit center"><p>Game Development</p></td>
                                <td class="center nowrap" data-date="1369872001"><p>30 May 2013</p></td>
                                <td class="center"><p>9781849695701</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>357</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782160885/videos/" target="_blank">Moodle Course Development</a></p></td>
                                <td class="left"><p>Joe Deegan</p></td>
                                <td class="capit center"><p>Linux</p></td>
                                <td class="center nowrap" data-date="1369872002"><p>30 May 2013</p></td>
                                <td class="center"><p>9781782160885</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>358</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/N2xG/S7kduwHmt/courses/9781782161202/videos/" target="_blank">BackTrack 5 Wireless Penetration Testing</a></p></td>
                                <td class="left"><p>Farrukh Haroon Farhat</p></td>
                                <td class="capit center"><p>Networking &amp; Servers</p></td>
                                <td class="center nowrap" data-date="1369872003"><p>30 May 2013</p></td>
                                <td class="center"><p>9781782161202</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>359</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/KUUQ/4jCS5fkQP" target="_blank">AWS - Explore Amazon Web Services</a></p></td>
                                <td class="left"><p>TutsPlus</p></td>
                                <td class="capit center"><p>AWS</p></td>
                                <td class="center nowrap" data-date="1369872004"><p>30 May 2018</p></td>
                                <td class="center"><p>9781782161203</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>361</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/L4Hf/dRRnkLSC2" target="_blank">AWS - DevOps Sec Govern Validation</a></p></td>
                                <td class="left"><p>DevOps</p></td>
                                <td class="capit center"><p>AWS</p></td>
                                <td class="center nowrap" data-date="1369872005"><p>30 May 2018</p></td>
                                <td class="center"><p>9781782161204</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>362</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/4JUH/4HjytxvdW" target="_blank">AWS - DevOps Continuous Delivery and Process Automation</a></p></td>
                                <td class="left"><p>AWS </p></td>
                                <td class="capit center"><p>DevOps</p></td>
                                <td class="center nowrap" data-date="1369872006"><p>30 May 2018</p></td>
                                <td class="center"><p>9781782161207</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>363</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/7uch/kpzRx8wfC" target="_blank">AWS - Fundamentals for System Administrators</a></p></td>
                                <td class="left"><p>AWS</p></td>
                                <td class="capit center"><p>AWS</p></td>
                                <td class="center nowrap" data-date="1369872007"><p>30 May 2018</p></td>
                                <td class="center"><p>9781782161206</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>364</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/34nB/j2JqvD42V" target="_blank">AWS - An Overview ofCloud Computing with Amazon Web Services</a></p></td>
                                <td class="left"><p>O'Reilly</p></td>
                                <td class="capit center"><p>AWS</p></td>
                                <td class="center nowrap" data-date="1369872001"><p>30 May 2018</p></td>
                                <td class="center"><p>9781782161211</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>365</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/CpEb/vsQzbRT1T" target="_blank">AWS - Web Hosting & cloud Computing With AWS</a></p></td>
                                <td class="left"><p>AWS</p></td>
                                <td class="capit center"><p>AWS</p></td>
                                <td class="center nowrap" data-date="1369872001"><p>30 May 2018</p></td>
                                <td class="center"><p>9781782161219</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>366</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/34nB/j2JqvD42V" target="_blank">Continuous Delivery Using docker And Ansible</a></p></td>
                                <td class="left"><p>Ansible</p></td>
                                <td class="capit center"><p>Ansible</p></td>
                                <td class="center nowrap" data-date="1369872008"><p>30 May 2018</p></td>
                                <td class="center"><p>9781782161209</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>367</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/EkV6/rh9po9gDp" target="_blank">AWS - Certified SysOps Administrator</a></p></td>
                                <td class="left"><p>Elias Khnaser</p></td>
                                <td class="capit center"><p>AWS</p></td>
                                <td class="center nowrap" data-date="1369872009"><p>30 May 2018</p></td>
                                <td class="center"><p>9781782161218</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>368</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/LvdB/Sx8xXySNT" target="_blank">AWS - Certified Solutions Architect</a></p></td>
                                <td class="left"><p>Ryan Kroonenburg</p></td>
                                <td class="capit center"><p>AWS</p></td>
                                <td class="center nowrap" data-date="1369872010"><p>30 May 2018</p></td>
                                <td class="center"><p>9781782161204</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>369</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/2VAt/CA7CPwD59" target="_blank">AWS - Certified SysOps Administrator Associate Level</a></p></td>
                                <td class="left"><p>AWS</p></td>
                                <td class="capit center"><p>AWS</p></td>
                                <td class="center nowrap" data-date="1369872011"><p>30 May 2018</p></td>
                                <td class="center"><p>9781782161217</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>370</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/M6UP/PgtBKMJuG" target="_blank">Mastering Thelinux Command Line</a></p></td>
                                <td class="left"><p>AWS</p></td>
                                <td class="capit center"><p>Linux</p></td>
                                <td class="center nowrap" data-date="1369872012"><p>30 May 2018</p></td>
                                <td class="center"><p>9781782161210</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>371</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/7Stz/bPT3gWuPw" target="_blank">Linux Kernels and Logging for System Administration</a></p></td>
                                <td class="left"><p>AWS</p></td>
                                <td class="capit center"><p>Linux</p></td>
                                <td class="center nowrap" data-date="1369872111"><p>30 May 2018</p></td>
                                <td class="center"><p>9781782161211</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>372</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/5NTw/YGrXWrj3n" target="_blank">Linux Command Line Basics</a></p></td>
                                <td class="left"><p>Linux</p></td>
                                <td class="capit center"><p>Linux</p></td>
                                <td class="center nowrap" data-date="1369872023"><p>30 May 2018</p></td>
                                <td class="center"><p>9781782161212</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>373</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/Ftmt/ryY1sHRtD" target="_blank">Bash Scripting</a></p></td>
                                <td class="left"><p>Linux</p></td>
                                <td class="capit center"><p>Linux</p></td>
                                <td class="center nowrap" data-date="1369872801"><p>30 May 2018</p></td>
                                <td class="center"><p>9781782161221</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>374</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/Frpp/TQdF1cZ5a" target="_blank">Learn DevOps Continuously Deliver Better Software</a></p></td>
                                <td class="left"><p>DevOps</p></td>
                                <td class="capit center"><p>DevOps</p></td>
                                <td class="center nowrap" data-date="1369872901"><p>30 May 2015</p></td>
                                <td class="center"><p>9781782161214</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>375</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/LGqn/xrZS8Xqvi" target="_blank">Hands-on Ansible</a></p></td>
                                <td class="left"><p>Pluralsight</p></td>
                                <td class="capit center"><p>Ansible</p></td>
                                <td class="center nowrap" data-date="1369872301"><p>30 May 2018</p></td>
                                <td class="center"><p>9781782161215</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>376</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/AFhv/TxU1DtPux" target="_blank">Machine Learning with Go</a></p></td>
                                <td class="left"><p>Linux</p></td>
                                <td class="capit center"><p>Go Lang &amp; Machine Learning</p></td>
                                <td class="center nowrap" data-date="1369872201"><p>30 May 2018</p></td>
                                <td class="center"><p>9781782161213</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>377</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/8kAq/FgPCAAoAc" target="_blank">AWS - Certified Solutions Architect by Elias Khnaser</a></p></td>
                                <td class="left"><p>Pluralsight</p></td>
                                <td class="capit center"><p>AWS</p></td>
                                <td class="center nowrap" data-date="1369872601"><p>1 June 2018</p></td>
                                <td class="center"><p>9781782161300</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>378</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/FNvE/mTdek3xWu" target="_blank">AWS - Architecting Highly Available Systems on AWS by Richard Seroter</a></p></td>
                                <td class="left"><p>Pluralsight</p></td>
                                <td class="capit center"><p>AWS</p></td>
                                <td class="center nowrap" data-date="1369872501"><p>1 June 2018</p></td>
                                <td class="center"><p>9781782161301</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>379</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/J9ss/omDK7vifE" target="_blank">AWS - Automating AWS and vSphere with Terraform</a></p></td>
                                <td class="left"><p>Pluralsight</p></td>
                                <td class="capit center"><p>Terraform</p></td>
                                <td class="center nowrap" data-date="1369872041"><p>1 June 2018</p></td>
                                <td class="center"><p>9781782161302</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>380</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/EBdw/KkKjyFDVy" target="_blank">AWS - LearningCloud Computing With Amazon Web Services</a></p></td>
                                <td class="left"><p>Infinite Skills</p></td>
                                <td class="capit center"><p>AWS</p></td>
                                <td class="center nowrap" data-date="1369872301"><p>2 June 2018</p></td>
                                <td class="center"><p>9781782161303</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>381</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/FnqK/X2YTY7Cdj" target="_blank">AWS - Continuous Delivery - Automation for certified DevOps Engineer</a></p></td>
                                <td class="left"><p>FreeCoursesOnline</p></td>
                                <td class="capit center"><p>AWS</p></td>
                                <td class="center nowrap" data-date="1369872031"><p>2 June 2018</p></td>
                                <td class="center"><p>9781782161304</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>382</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/EPJ3/AUbHifVgf" target="_blank">AWS - Continuous Delivery - CodePipeline, CodeBuild, CodeDeploy</a></p></td>
                                <td class="left"><p>FreeCoursesOnline</p></td>
                                <td class="capit center"><p>AWS</p></td>
                                <td class="center nowrap" data-date="1369872021"><p>2 June 2018</p></td>
                                <td class="center"><p>9781782161305</p></td>
                            </tr>                  
                            <tr>
                                <td class="right light"><p>383</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/35xE/NmBJodjBm" target="_blank">AWS - Deploying docker Containers to Amazon Web Services</a></p></td>
                                <td class="left"><p>O'Reilly</p></td>
                                <td class="capit center"><p>Docker</p></td>
                                <td class="center nowrap" data-date="1369872159"><p>2 June 2018</p></td>
                                <td class="center"><p>9781782161306</p></td>
                            </tr>                  
                            <tr>
                                <td class="right light"><p>384</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/JmTY/jRWiTQzk8" target="_blank">AWS - for DevOps High Availability and Elasticity</a></p></td>
                                <td class="left"><p>FreeCoursesOnline</p></td>
                                <td class="capit center"><p>DevOps</p></td>
                                <td class="center nowrap" data-date="1369872199"><p>2 June 2018</p></td>
                                <td class="center"><p>9781782161357</p></td>
                            </tr>                  
                            <tr>
                                <td class="right light"><p>385</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/2j49/xjxC2PAh4" target="_blank">AWS - Serverless with AWS Lambda</a></p></td>
                                <td class="left"><p>FreeCoursesOnline</p></td>
                                <td class="capit center"><p>AWS</p></td>
                                <td class="center nowrap" data-date="1369872120"><p>3 June 2018</p></td>
                                <td class="center"><p>9781782161348</p></td>
                            </tr>                  
                            <tr>
                                <td class="right light"><p>386</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/DQEZ/LeEZsUc39" target="_blank">AWS - DevOps for Automation</a></p></td>
                                <td class="left"><p>FreeCoursesOnline</p></td>
                                <td class="capit center"><p>DevOps</p></td>
                                <td class="center nowrap" data-date="1369872199"><p>3 June 2018</p></td>
                                <td class="center"><p>9781782161337</p></td>
                            </tr>                  
                            <tr>
                                <td class="right light"><p>387</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/AYc7/NrkB3qZHu" target="_blank">AWS - Learning AWSCloudformation</a></p></td>
                                <td class="left"><p>FreeCoursesOnline</p></td>
                                <td class="capit center"><p>Docker</p></td>
                                <td class="center nowrap" data-date="1369872120"><p>3 June 2018</p></td>
                                <td class="center"><p>9781782161328</p></td>
                            </tr>                       
                            <tr>
                                <td class="right light"><p>388</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/FnwG/vsGP3frp6" target="_blank">AWS - Amazon Web Services - Deploying and Provisioning </a></p></td>
                                <td class="left"><p>FreeCoursesOnline</p></td>
                                <td class="capit center"><p>Docker</p></td>
                                <td class="center nowrap" data-date="1369872120"><p>3 June 2018</p></td>
                                <td class="center"><p>9781782161318</p></td>
                            </tr>  
                            <tr>
                                <td class="right light"><p>389</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/F9mr/y3o5rrGsd" target="_blank">AWS - Auditing AWS Environments for Security and Best Practices by Chad Smith</a></p></td>
                                <td class="left"><p>Pluralsight</p></td>
                                <td class="capit center"><p>AWS</p></td>
                                <td class="center nowrap" data-date="1369872120"><p>9 June 2018</p></td>
                                <td class="center"><p>9781782161309</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>390</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/291W/CzStrmj3N" target="_blank">Docker - Integrating docker With DevOps Automated Workflows</a></p></td>
                                <td class="left"><p>Nigel Poulton</p></td>
                                <td class="capit center"><p>Docker</p></td>
                                <td class="center nowrap" data-date="1369872120"><p>3 June 2018</p></td>
                                <td class="center"><p>9781782161309</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>391</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/FSsi/df7oD5vgS" target="_blank">Lynda - Learning Terraform</a></p></td>
                                <td class="left"><p>Lynda</p></td>
                                <td class="capit center"><p>Terraform</p></td>
                                <td class="center nowrap" data-date="1535241600"><p>13 July 2018</p></td>
                                <td class="center"><p>9781782161310</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>392</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/95vc/4wvJ7a9dE" target="_blank">Pluralsight - Deep Dive - Terraform</a></p></td>
                                <td class="left"><p>Pluralsight</p></td>
                                <td class="capit center"><p>Terraform</p></td>
                                <td class="center nowrap" data-date="1535241600"><p>13 July 2018</p></td>
                                <td class="center"><p>9781782161311</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>393</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/6kQ6/WXNkQ7Pnh" target="_blank">Pluralsight - Terraform - Getting Started</a></p></td>
                                <td class="left"><p>Pluralsight</p></td>
                                <td class="capit center"><p>Terraform</p></td>
                                <td class="center nowrap" data-date="1535241600"><p>13 July 2018</p></td>
                                <td class="center"><p>9781782161312</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>394</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/JyV8/VAaDZ8eBg" target="_blank">AWS - VPC Operations</a></p></td>
                                <td class="left"><p>Pluralsight</p></td>
                                <td class="capit center"><p>Terraform</p></td>
                                <td class="center nowrap" data-date="1535241600"><p>13 July 2018</p></td>
                                <td class="center"><p>9781782161313</p></td>
                            </tr>        
                            <tr>
                                <td class="right light"><p>395</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/JsTL/SeydQu8NR" target="_blank">PureMix - Andrew Scheps Mixing Fly Rasta Out of the Box</a></p></td>
                                <td class="left"><p>PureMix</p></td>
                                <td class="capit center"><p>Music Production</p></td>
                                <td class="center nowrap" data-date="1535481242"><p>28 August 2018</p></td>
                                <td class="center"><p>9781782161314</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>396</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/M4A5/LSgexC6yC" target="_blank">PureMix - Inside The Mix. Pharrell Williams & Daft Punk</a></p></td>
                                <td class="left"><p>PureMix</p></td>
                                <td class="capit center"><p>Music Production</p></td>
                                <td class="center nowrap" data-date="1535481242"><p>28 August 2018</p></td>
                                <td class="center"><p>9781782161315</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>397</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/3LkY/wyf67FnKb" target="_blank">PureMix - Mark Needham Mixing Imagine Dragons</a></p></td>
                                <td class="left"><p>PureMix</p></td>
                                <td class="capit center"><p>Music Production</p></td>
                                <td class="center nowrap" data-date="1535481242"><p>28 August 2018</p></td>
                                <td class="center"><p>9781782161316</p></td>
                            </tr>
                            <tr>
                                <td class="right light"><p>398</p></td>
                                <td class="left"><p><a href="https://cloud.mail.ru/public/JaQv/5FJsEFtso" target="_blank">PureMix - Producing Carribean's Guitar Sounds</a></p></td>
                                <td class="left"><p>PureMix</p></td>
                                <td class="capit center"><p>Music Production</p></td>
                                <td class="center nowrap" data-date="1535481242"><p>28 August 2018</p></td>
                                <td class="center"><p>9781782161317 </p></td>
                            </tr>                       
                        </tbody>            
                        </table>
                        
                        <div class="pager">
                            <span>Page: <select class="gotoPage"></select></span>
                            <span class="btn btn-default first">
                                <i class="fa fa-fast-backward" aria-hidden="true"></i>
                            </span>
                            <span class="btn btn-default prev">
                                <i class="fa fa-step-backward" aria-hidden="true"></i>
                            </span>
                            <span class="pagedisplay"></span>
                            <span class="btn btn-default next">
                                <i class="fa fa-step-forward" aria-hidden="true"></i>
                            </span>
                            <span class="btn btn-default last">
                                <i class="fa fa-fast-forward" aria-hidden="true"></i>
                            </span>
                            <span>
                                <select class="pagesize">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                </select>
                            </span>
                            <span class="btn btn-default reset">Reset Search</span>
                                <h3 class="text-center">
                                    <a href="https://www.rumen.pro"> <img src="mapt/images/s1-BIG-Purple-2.png"  alt="" width="100" height="90"/></a>
                                </h3>
                            <h5 class="product-title">
                                <a href="https://www.rumen.pro">|| www.rumen.pro</a><a href="https://www.ops.rumen.pro">|| www.ops.rumen.pro</a><a href="https://www.learn.rumen.pro">|| www.learn.rumen.pro</a><a href="https://www.wiki.rumen.pro"> || www.wiki.rumen.pro ||</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
    </body>
    </html>
    <?php COUCH::invoke(); ?>