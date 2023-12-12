<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <!-- bostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
<div class="d-flex">
        <aside>
            <h1 style="text-align: center; color: #fff; margin-top: 20px;">TANGKASA</h1>
            <hr style="color: #fff; margin: 0 20px;">
            <div class="items">
                <button class="d-flex link" onclick="setActiveLink(this)" id="home-tab">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 83 83" fill="none">
                        <path d="M34.5834 69.1667V48.4167H48.4167V69.1667H65.7084V41.5H76.0834L41.5 10.375L6.91669 41.5H17.2917V69.1667H34.5834Z" fill="white" />
                    </svg>
                    <p>Home</p>
                </button>
                <button class="d-flex link" onclick="setActiveLink(this)" id="information-tab">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 83 83" fill="none">
                        <path d="M51.875 55.3334H31.125C30.2078 55.3334 29.3282 55.6978 28.6796 56.3463C28.0311 56.9949 27.6667 57.8745 27.6667 58.7917C27.6667 59.709 28.0311 60.5886 28.6796 61.2372C29.3282 61.8857 30.2078 62.2501 31.125 62.2501H51.875C52.7922 62.2501 53.6719 61.8857 54.3205 61.2372C54.969 60.5886 55.3334 59.709 55.3334 58.7917C55.3334 57.8745 54.969 56.9949 54.3205 56.3463C53.6719 55.6978 52.7922 55.3334 51.875 55.3334ZM31.125 34.5834H34.5834C35.5006 34.5834 36.3802 34.2191 37.0288 33.5705C37.6773 32.9219 38.0417 32.0423 38.0417 31.1251C38.0417 30.2079 37.6773 29.3282 37.0288 28.6797C36.3802 28.0311 35.5006 27.6667 34.5834 27.6667H31.125C30.2078 27.6667 29.3282 28.0311 28.6796 28.6797C28.0311 29.3282 27.6667 30.2079 27.6667 31.1251C27.6667 32.0423 28.0311 32.9219 28.6796 33.5705C29.3282 34.2191 30.2078 34.5834 31.125 34.5834ZM51.875 41.5001H31.125C30.2078 41.5001 29.3282 41.8644 28.6796 42.513C28.0311 43.1616 27.6667 44.0412 27.6667 44.9584C27.6667 45.8756 28.0311 46.7553 28.6796 47.4038C29.3282 48.0524 30.2078 48.4167 31.125 48.4167H51.875C52.7922 48.4167 53.6719 48.0524 54.3205 47.4038C54.969 46.7553 55.3334 45.8756 55.3334 44.9584C55.3334 44.0412 54.969 43.1616 54.3205 42.513C53.6719 41.8644 52.7922 41.5001 51.875 41.5001ZM68.1638 52.878C67.8349 52.5631 67.4471 52.3163 67.0225 52.1517C66.6097 51.9645 66.1617 51.8677 65.7084 51.8677C65.2551 51.8677 64.807 51.9645 64.3942 52.1517C63.9697 52.3163 63.5819 52.5631 63.253 52.878C62.9475 53.2142 62.7018 53.6001 62.5267 54.0192C62.2619 54.649 62.1895 55.3432 62.3188 56.0141C62.448 56.6849 62.7731 57.3025 63.253 57.7888C63.5761 58.1094 63.9593 58.3629 64.3807 58.535C64.802 58.7071 65.2532 58.7944 65.7084 58.7917C66.1603 58.7863 66.6068 58.6923 67.0225 58.5151C67.4416 58.3399 67.8276 58.0943 68.1638 57.7888C68.6437 57.3025 68.9687 56.6849 69.098 56.0141C69.2272 55.3432 69.1549 54.649 68.89 54.0192C68.7149 53.6001 68.4693 53.2142 68.1638 52.878ZM69.1667 30.9176C69.1307 30.5999 69.0611 30.2869 68.9592 29.9838V29.6726C68.7929 29.317 68.5711 28.9901 68.3021 28.7042L47.5521 7.95425C47.2662 7.68525 46.9394 7.46344 46.5838 7.29716C46.4806 7.2825 46.3758 7.2825 46.2725 7.29716C45.9212 7.09569 45.5332 6.96636 45.1313 6.91675H24.2084C21.4568 6.91675 18.8178 8.00983 16.8721 9.95552C14.9265 11.9012 13.8334 14.5401 13.8334 17.2917V65.7084C13.8334 68.46 14.9265 71.099 16.8721 73.0446C18.8178 74.9903 21.4568 76.0834 24.2084 76.0834H51.875C52.7922 76.0834 53.6719 75.7191 54.3205 75.0705C54.969 74.4219 55.3334 73.5423 55.3334 72.6251C55.3334 71.7079 54.969 70.8282 54.3205 70.1797C53.6719 69.5311 52.7922 69.1667 51.875 69.1667H24.2084C23.2912 69.1667 22.4115 68.8024 21.763 68.1538C21.1144 67.5053 20.75 66.6256 20.75 65.7084V17.2917C20.75 16.3745 21.1144 15.4949 21.763 14.8463C22.4115 14.1978 23.2912 13.8334 24.2084 13.8334H41.5V24.2084C41.5 26.96 42.5931 29.599 44.5388 31.5446C46.4845 33.4903 49.1234 34.5834 51.875 34.5834H62.25V41.5001C62.25 42.4173 62.6144 43.2969 63.263 43.9455C63.9115 44.5941 64.7912 44.9584 65.7084 44.9584C66.6256 44.9584 67.5052 44.5941 68.1538 43.9455C68.8023 43.2969 69.1667 42.4173 69.1667 41.5001V30.9176ZM51.875 27.6667C50.9578 27.6667 50.0782 27.3024 49.4296 26.6538C48.7811 26.0053 48.4167 25.1256 48.4167 24.2084V18.7097L57.3738 27.6667H51.875ZM65.7084 62.2501C64.7912 62.2501 63.9115 62.6144 63.263 63.263C62.6144 63.9116 62.25 64.7912 62.25 65.7084V72.6251C62.25 73.5423 62.6144 74.4219 63.263 75.0705C63.9115 75.7191 64.7912 76.0834 65.7084 76.0834C66.6256 76.0834 67.5052 75.7191 68.1538 75.0705C68.8023 74.4219 69.1667 73.5423 69.1667 72.6251V65.7084C69.1667 64.7912 68.8023 63.9116 68.1538 63.263C67.5052 62.6144 66.6256 62.2501 65.7084 62.2501Z" fill="white" />
                    </svg>
                    <p>Information</p>
                </button>
                <button class="d-flex link" onclick="setActiveLink(this)"  id="content-tab">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 97 97" fill="none">
                        <path d="M10.3928 23.3839C10.3928 19.9384 11.7615 16.6341 14.1978 14.1978C16.6341 11.7615 19.9384 10.3928 23.3839 10.3928H73.616C77.0615 10.3928 80.3658 11.7615 82.8021 14.1978C85.2384 16.6341 86.6071 19.9384 86.6071 23.3839V73.616C86.6071 77.0615 85.2384 80.3658 82.8021 82.8021C80.3658 85.2384 77.0615 86.6071 73.616 86.6071H23.3839C19.9384 86.6071 16.6341 85.2384 14.1978 82.8021C11.7615 80.3658 10.3928 77.0615 10.3928 73.616V23.3839ZM23.3839 15.5893C21.3166 15.5893 19.334 16.4105 17.8722 17.8722C16.4105 19.334 15.5893 21.3166 15.5893 23.3839V73.616C15.5893 75.6833 16.4105 77.6659 17.8722 79.1277C19.334 80.5895 21.3166 81.4107 23.3839 81.4107H55.4285V15.5893H23.3839ZM73.616 81.4107C75.6833 81.4107 77.6659 80.5895 79.1277 79.1277C80.5895 77.6659 81.4107 75.6833 81.4107 73.616V64.0893H60.625V81.4107H73.616ZM81.4107 58.8928V38.1071H60.625V58.8928H81.4107ZM81.4107 32.9107V23.3839C81.4107 21.3166 80.5895 19.334 79.1277 17.8722C77.6659 16.4105 75.6833 15.5893 73.616 15.5893H60.625V32.9107H81.4107ZM26.8482 25.9821C24.4578 25.9821 22.5178 27.9221 22.5178 30.3125V42.4375C22.5178 44.8278 24.4578 46.7678 26.8482 46.7678H44.1696C46.56 46.7678 48.5 44.8278 48.5 42.4375V30.3125C48.5 27.9221 46.56 25.9821 44.1696 25.9821H26.8482ZM27.7143 41.5714V31.1785H43.3035V41.5714H27.7143ZM22.5178 56.2946C22.5178 55.6055 22.7916 54.9447 23.2788 54.4574C23.7661 53.9701 24.4269 53.6964 25.116 53.6964H45.9018C46.5908 53.6964 47.2517 53.9701 47.739 54.4574C48.2262 54.9447 48.5 55.6055 48.5 56.2946C48.5 56.9837 48.2262 57.6446 47.739 58.1318C47.2517 58.6191 46.5908 58.8928 45.9018 58.8928H25.116C24.4269 58.8928 23.7661 58.6191 23.2788 58.1318C22.7916 57.6446 22.5178 56.9837 22.5178 56.2946ZM25.116 65.8214C24.4269 65.8214 23.7661 66.0951 23.2788 66.5824C22.7916 67.0697 22.5178 67.7305 22.5178 68.4196C22.5178 69.1087 22.7916 69.7696 23.2788 70.2568C23.7661 70.7441 24.4269 71.0178 25.116 71.0178H45.9018C46.5908 71.0178 47.2517 70.7441 47.739 70.2568C48.2262 69.7696 48.5 69.1087 48.5 68.4196C48.5 67.7305 48.2262 67.0697 47.739 66.5824C47.2517 66.0951 46.5908 65.8214 45.9018 65.8214H25.116Z" fill="white" />
                    </svg>
                    <p>Content</p>
                </button>
                <button class="d-flex link" onclick="setActiveLink(this)" id="calendar-tab">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 189 189" fill="none">
                        <g clip-path="url(#clip0_21_151)">
                            <path d="M177.188 17.698L129.896 17.6982V5.927C129.896 2.6638 127.253 0.020752 123.99 0.020752C120.727 0.020752 118.084 2.6638 118.084 5.927V17.6952H70.8337V5.927C70.8337 2.6638 68.1906 0.020752 64.9274 0.020752C61.6642 0.020752 59.0212 2.6638 59.0212 5.927V17.6952H11.8125C5.28905 17.6952 0 22.9843 0 29.5077V177.164C0 183.687 5.28905 188.976 11.8125 188.976H177.188C183.711 188.976 189 183.687 189 177.164V29.5077C189 22.987 183.711 17.698 177.188 17.698ZM177.188 177.164H11.8125V29.5077H59.0212V35.4583C59.0212 38.7213 61.6642 41.3645 64.9274 41.3645C68.1906 41.3645 70.8337 38.7213 70.8337 35.4583V29.5107H118.084V35.4612C118.084 38.7244 120.727 41.3675 123.99 41.3675C127.253 41.3675 129.896 38.7244 129.896 35.4612V29.5107H177.188V177.164ZM135.844 94.4792H147.656C150.916 94.4792 153.562 91.8332 153.562 88.573V76.7605C153.562 73.5002 150.916 70.8542 147.656 70.8542H135.844C132.584 70.8542 129.938 73.5002 129.938 76.7605V88.573C129.938 91.8332 132.584 94.4792 135.844 94.4792ZM135.844 141.726H147.656C150.916 141.726 153.562 139.083 153.562 135.82V124.008C153.562 120.747 150.916 118.101 147.656 118.101H135.844C132.584 118.101 129.938 120.747 129.938 124.008V135.82C129.938 139.086 132.584 141.726 135.844 141.726ZM100.406 118.101H88.5938C85.3335 118.101 82.6875 120.747 82.6875 124.008V135.82C82.6875 139.083 85.3335 141.726 88.5938 141.726H100.406C103.666 141.726 106.312 139.083 106.312 135.82V124.008C106.312 120.75 103.666 118.101 100.406 118.101ZM100.406 70.8542H88.5938C85.3335 70.8542 82.6875 73.5002 82.6875 76.7605V88.573C82.6875 91.8332 85.3335 94.4792 88.5938 94.4792H100.406C103.666 94.4792 106.312 91.8332 106.312 88.573V76.7605C106.312 73.4973 103.666 70.8542 100.406 70.8542ZM53.1562 70.8542H41.3438C38.0835 70.8542 35.4375 73.5002 35.4375 76.7605V88.573C35.4375 91.8332 38.0835 94.4792 41.3438 94.4792H53.1562C56.4165 94.4792 59.0625 91.8332 59.0625 88.573V76.7605C59.0625 73.4973 56.4165 70.8542 53.1562 70.8542ZM53.1562 118.101H41.3438C38.0835 118.101 35.4375 120.747 35.4375 124.008V135.82C35.4375 139.083 38.0835 141.726 41.3438 141.726H53.1562C56.4165 141.726 59.0625 139.083 59.0625 135.82V124.008C59.0625 120.75 56.4165 118.101 53.1562 118.101Z" fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_21_151">
                                <rect width="189" height="189" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <p>Calender</p>
                </button>
                <button class="d-flex link" onclick="setActiveLink(this)" id="calculator-tab">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 83 83" fill="none">
                        <path d="M24.2083 6.91675H58.7916C60.626 6.91675 62.3853 7.64547 63.6824 8.94259C64.9796 10.2397 65.7083 11.999 65.7083 13.8334V69.1667C65.7083 71.0012 64.9796 72.7604 63.6824 74.0576C62.3853 75.3547 60.626 76.0834 58.7916 76.0834H24.2083C22.3739 76.0834 20.6146 75.3547 19.3175 74.0576C18.0203 72.7604 17.2916 71.0012 17.2916 69.1667V13.8334C17.2916 11.999 18.0203 10.2397 19.3175 8.94259C20.6146 7.64547 22.3739 6.91675 24.2083 6.91675ZM24.2083 13.8334V27.6667H58.7916V13.8334H24.2083ZM24.2083 34.5834V41.5001H31.125V34.5834H24.2083ZM38.0416 34.5834V41.5001H44.9583V34.5834H38.0416ZM51.875 34.5834V41.5001H58.7916V34.5834H51.875ZM24.2083 48.4167V55.3334H31.125V48.4167H24.2083ZM38.0416 48.4167V55.3334H44.9583V48.4167H38.0416ZM51.875 48.4167V55.3334H58.7916V48.4167H51.875ZM24.2083 62.2501V69.1667H31.125V62.2501H24.2083ZM38.0416 62.2501V69.1667H44.9583V62.2501H38.0416ZM51.875 62.2501V69.1667H58.7916V62.2501H51.875Z" fill="white" />
                    </svg>
                    <p>Calculator</p>
                </button>
            </div>
        </aside>
        <div style="width: 70%;">
            <nav class="navbar" style="padding-top: 0px; padding-right: 100px !important">
                <div class="container-fluid" style="padding: 0px;">
                    <span>
                        <a class="navbar-brand">Kelola Akun</a>
                    </span>
                    <span class="d-flex">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #fff;">
                                <img src="style/image/admin.svg" width="70px" height="70px" alt="admin">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" style="color: #000; margin: 0 auto; text-align: center;" href="#">LOGOUT</a></li>
                            </ul>
                        </div>
                    </span>
                </div>
            </nav>

            <div class="d-flex contain">
                <div class="container-fluid">
                    <article>
                        <div id="home-content" style="display:none;">
                            <?php include 'home_admin.php' ?>
                        </div>
                        <div id="information-content">
                            <?php include 'info_admin.php' ?>
                        </div>
                        <div id="content-content" style="display:none;">
                            <?php include 'content_admin.php' ?>
                        </div>
                        <div id="calendar-content" style="display:none;">
                            <?php include 'calendars_admin.php' ?>
                        </div>
                        <div id="calculator-content" style="display:none;">
                            <?php include 'calculator.php' ?>
                        </div>


                    </article>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const homeTab = document.getElementById('home-tab');
            const informationTab = document.getElementById('information-tab');
            const contentTab = document.getElementById('content-tab');
            const calendarTab = document.getElementById('calendar-tab');
            const calculatorTab = document.getElementById('calculator-tab');

            const homeContent = document.getElementById('home-content');
            const informationContent = document.getElementById('information-content');
            const contentContent = document.getElementById('content-content');
            const calendarContent = document.getElementById('calendar-content');
            const calculatorContent = document.getElementById('calculator-content');

            function showHome() {
                homeContent.style.display = 'block';
                informationContent.style.display = 'none';
                calendarContent.style.display = 'none';
                contentContent.style.display = 'none';
                calculatorContent.style.display = 'none';
            }

            function showInformation() {
                homeContent.style.display = 'none';
                informationContent.style.display = 'block';
                contentContent.style.display = 'none';
                calendarContent.style.display = 'none';
                calculatorContent.style.display = 'none';
            }

            function showContent() {
                homeContent.style.display = 'none';
                informationContent.style.display = 'none';
                contentContent.style.display = 'block';
                calendarContent.style.display = 'none';
                calculatorContent.style.display = 'none';
            }

            function showCalendar() {
                informationContent.style.display = 'none';
                contentContent.style.display = 'none';
                homeContent.style.display = 'none';
                calendarContent.style.display = 'block';
                calculatorContent.style.display = 'none';
            }
            function showCalculator() {
                homeContent.style.display = 'none';
                informationContent.style.display = 'none';
                contentContent.style.display = 'none';
                calendarContent.style.display = 'none';
                calculatorContent.style.display = 'block';
            }


            homeTab.addEventListener('click', showHome);
            informationTab.addEventListener('click', showInformation);
            contentTab.addEventListener('click', showContent);
            calendarTab.addEventListener('click', showCalendar);
            calculatorTab.addEventListener('click', showCalculator);
        });
        showHome();

    </script>
</body>

</html>