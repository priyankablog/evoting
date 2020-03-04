<!DOCTYPE html>
<html>


    <head>
        <meta charset="utf-8">
        <title>My Govrn | About-Us Page</title>
        <!-- Stylesheets -->
        <?php
        $this->load->view('headlink');
        ?>

        <link href="<?php echo base_url(); ?>visitor/css/mycss.css" rel="stylesheet">
        <!--Favicon-->
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    </head>

    <body>
        <div class="page-wrapper">

            <!-- Preloader -->
            <div class="preloader"></div> 

            <!-- Main Header / Header Style Two -->
            <header class="main-header header-style-two">
                <?php
                $this->load->view('header');
                ?>

                <?php
                $this->load->view('middleheader');
                ?>
                <?php
                $this->load->view('menu');
                ?>


                <div class="menu-overlay"></div>



            </header>

            <section class="page-title" style="background-image: url(<?php echo base_url(); ?>visitor/images/background/aboutus.jpg);background-size: cover; background-position: right bottom;">

                <div class="auto-container">
                    <h1>About Us</h1>
                    <ul class="bread-crumb">
                        <li><a href="<?php echo base_url(); ?>Home">Home</a></li>

                        <li class="active">About Us</li>
                    </ul>
                </div>
            </section>
            <div class="services-section style-two">
                <div class="container">
                    <div class="sec-title" style="margin-top: -70px;">

                        <h3 style="line-height: 2.6em;">About <span class="theme_color">Us</span></h3>
                        <span class="separator"></span>
                    </div>  
                    <div class="container" style="margin-bottom: -190px;margin-top: -80px;">
                        <div class="mycss" id="mycss1">
                            <p>Elections in the United States are held for government officials at the federal, state, and local levels. At the federal level, the nation's head of state, the President, is elected indirectly by the people of each state, through an Electoral College. Today, these electors almost always vote with the popular vote of their state. All members of the federal legislature, the Congress, are directly elected by the people of each state. There are many elected offices at state level, each state having at least an elective Governor and legislature. There are also elected offices at the local level, in counties, cities, towns, townships, boroughs, and villages. According to a study by political scientist Jennifer Law

                                less, there were 519,682 elected officials in the United States as of 2012.
                            </p>
                            <p>

                                While the United States Constitution does set parameters for the election of federal officials, state law, not federal, regulates most aspects of elections in the U.S., including primaries, the eligibility of voters (beyond the basic constitutional definition), the running of each state's electoral college, as well as the running of state and local elections. All elections—federal, state, and local—are administered by the individual states.
                            </p>
                            <p>

                                The restriction and extension of voting rights to different groups has been a contested process throughout United States history. The federal government has also been involved in attempts to increase voter turnout, by measures such as the National Voter Registration Act of 1993. The financing of elections has also long been controversial, because private sources make up substantial amounts of campaign contributions, especially in federal elections. Voluntary public funding for candidates willing to accept spending limits was introduced in 1974 for presidential primaries and elections. The Federal Elections Commission, created in 1975 by an amendment to the Federal Election Campaign Act has the responsibility to disclose campaign finance information, to enforce the provisions of the law such as the limits and prohibitions on contributions, and to oversee the public funding of U.S. Presidential elections.
                                Contents.
                            </p>
                            <p>

                                Encrypted connections are in place as well as adherence to the OWASP Top Ten List (for defense against web application vulnerabilities); the SANS Top 20 Internet Security Vulnerabilities reference and much more. ElectionsOnline’s web site is scanned regularly for:

                                PCI (Payment Card Industry) compliance by an ASV (Approved Scanning Vendor) to identify and eliminate vulnerabilities.
                                site availability by SiteUptime. See live statistics about site uptime.
                                The site is hosted in a cloud-based, SOC3 Certified data center enjoying 99.9% uptime and:
                                a redundant power supply capable of lasting indefinitely.
                                a rapid fire suppression system.
                                24/7 network monitoring to ensure immediate action is taken should a problem arise.
                                24/7 building security utilizing biometric scanners to authenticate individuals entering the facility.
                                For more, check out Security and Reliability Enhancements.
                            </p>
                            <p>
                                Pioneered by ElectionsOnline, the ballot and any associated emails integrate with social media tools such as email, LinkedIn, Twitter and Google+ as a way of permitting voters to encourage fellow voters to also vote, increasing voter participation.
                            </p>
                            <p>The ballot software permits integration into your own web site to have the look and feel of your site. This also permits voters to access the ballot by logging into your site, something they may already be accustomed to doing, and not having to visit a third party’s website to vote. For a full explanation see the Evote API Documentation.</p>
                            <p>
                                Associate up to four pieces of custom data such as age, gender, geography, et cetera, with your voters to facilitate segmenting election results to see how different demographic segments of the electorate voted.
                            </p>
                            <p>
                                Conduct the pre-election activity of nominating and vetting potential clients using the ElectionsOnline system and allow selected candidates to flow right into the final ballot setup to streamline the overall election administration process. See Using the Nomination Engine for step-by-step instructions.
                            </p>
                            <p>Evote generates ballots that display well on all desktop computers plus the many varieties of mobile devices and tablets in common use so voters may comfortably vote from anywhere at any time using the device of their choice.</p>
                            <p>This replaces the Saved Ballot Template feature and means you may save time creating a new election by simply copying a previous election. For complex ballots using voter groups, special interest groups and other system features, this means you prevent going through all that setup repeatedly and only need to provide candidate names and election dates for elections after the first.</p>
                            <p>Ballot Shuffling outputs the candidates’ names in random order on each request of the ballot. This eliminates the concern that the candidate whose name appears first in the list has an advantage.

                                Shuffling may be enabled on some positions and not others.</p>
                            <p>You may attach candidate biographical information to the ballot so it is available by clicking the candidate’s name. These biographies may also include a photograph of the candidate. For an example, see this site’s Sample Ballot which includes candidate biographies with photos.</p>
                            <p>To remove the burden on the election administrator from having to submit candidate biographical material into the system, you may permit the candidates to submit their own materials. This feature supports the ability to designate a deadline by which this must be completed after which the candidates will not be able to make any further changes. This permits you to approve their biographies and ensure it does not get modified after approval.</p>
                            <p>You may display more than just positions contested by humans on the ballot. You may also include a referendum which voters may either accept or reject, and show a description of the referendum on the ballot so voters will clearly understand what they’re voting on.</p>
                            <p>Voter groups display different positions based on voter profile. For example, you may have both professional and student members in your voter pool. Professional members need to see a certain set of positions, while students see another. Voter groups detect which positions each voter should see at the moment that voter logs in to vote and responds accordingly. Voter groups, in combination with special interest groups, affords unequaled flexibility in ballot configuration.</p>
                            <p>Send a request to the ballot counter to acquire a real-time count of the number of ballots cast in an election. Incorporate that count into your own website to take advantag of the concept of social proof, as described at Social Proof to Increase Voter Turnout, to increase participation.</p>
                            <p>Some organizations have special interest groups (SIGs) which voters may join in addition to belonging to the organization itself. These SIGs may conduct their own election in addition to the larger organization-wide election and using the ElectionsOnline SIG tool permits configuring a ballot to show only SIG positions to voters that should see them. SIGs, in combination with voter groups, affords unequaled flexibility in ballot configuration.</p>
                            <p>Ballot weighting allows some ballots to carry more weight than others. For example, you may have a voter who casts a single ballot, but that ballot has a “weight” of ten. In this case, when the election results are generated, that ballot will be counted as if ten identical ballots had been cast by this voter.

                                The default weight for ballots is one, but you may specify any number as the ballot weight for any voter.</p>
                            <p>On-demand paper ballots permit you to print out a paper ballot for any voter requesting to vote by paper. On-demand paper ballots are specific to a particular voter and display only the appropriate positions that voter should see exactly as if they accessed the web-based ballot.

                            </p>
                            <p>Specify up to three languages to be displayed on your voting pages and the order in which they display. Current choices are English, Spanish, French (Canadian), Portuguese (Brazilian), German, Italian, and Simple Chinese.</p>
                            <p>In setting up your election, you may specify for ElectionsOnline to send an email announcement at the start of the election, plus as many as two reminders during the election to voters who’ve not voted. Because the voting software integrates behind the scenes with SocketLabs—the industry-leader in email delivery—the emails achieve the highest possible chance of landing in the voter’s inbox.</p>
                            <p>Voters can be provided the option to submit free-text comments along with their ballot. While disabled by default, comment fields may be associated with certain positions and left disabled for others. Or enabled for all positions. While you may enable comments with any position, this is particularly useful for referendums when you wish to glean some insight into how a voter feels about voting a certain way.</p>
                            <p>When the ElectionsOnline system sends emails to voters, a report detailing any undelivered emails is available to the election administrator following the mailing. This aids in removing any invalid email addresses from your own system which can help protect your reputation as an email sender and improve deliverability in the future.</p>
                            <p>With Email Solicitation enabled, the voting system checks to see if the voter has an email address on record with your organization at the moment a voter logs in. If so, that voter is directed straight to the ballot. If no email address is on record, the voter is asked to provide one. They may do so, or they may bypass providing their email address and go straight to the ballot. When a voter provides an email address, Evote saves it so that an email confirmation may be sent to that voter upon casting a ballot, but also sends an email to a designee within your organization containing the necessary information so the voter’s record in your database may be updated with the newly-acquired email address.</p>
                            <p>Ballot Previewing gives you the opportunity to try it out and see the results prior to the start of the actual election just so you’ll be absolutely certain everything is in order. Once testing is over, the system is recalibrated so no voter is flagged as having voted and no ballots are in your ballot box.</p>
                            <p>Evote makes it possible to create a single client account with unlimited sub-accounts associated with it. This is ideal for large organizations with many smaller chapters who need to split election administration up among multiple individuals.</p>
                            <p>The election results informs you of much more than just who won each race. Visit this site's Sample Election Results page to see a sample results page. Additionally, for elections taking advantage of voter groups and/or special interest groups (SIGs), the results may be further filtered to display only voting activity from any of those subgroups of voters.</p>
                            <p>You have the option to publish election results directly on the ElectionsOnline web site for all your voters and candidates to see. This saves you the time of having to publish the results yourself but also instills confidence in your electorate when they see the results published by the independent election company providing the service.</p>
                            <p>ElectionsOnline archives your election results from for up to 10 years to simplify doing a year-to-year comparison.</p>
                            <p>The easily customizable election widget can be placed on any web page to promote your live elections and create a link straight to the ballot login page. A demo and full details on using it are discussed at the blog post, Using the Election Widget.</p>
                            <p>Gives the voter the ability to write-in a candidate’s name of their own choosing.</p>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--End Search Popup--> <?php
        $this->load->view('footer');
        ?>

    </body>
    <?php
    $this->load->view('footerscript');
    ?>

</html>
