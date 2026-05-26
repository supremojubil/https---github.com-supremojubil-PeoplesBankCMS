<?php include_once 'db_function/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Ozamiz City People's MPC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <style>
        .page-header {
            background: linear-gradient(135deg, #002366 0%, #0d6efd 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        /* subtle overlay pattern */
        .page-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://www.transparenttextures.com/patterns/cubes.png');
            opacity: 0.08;
        }

        .page-header .container {
            position: relative;
            z-index: 2;
        }

        .page-header h1 {
            font-size: 3.2rem;
            font-weight: 800;
            text-shadow: 0 2px 10px rgba(0,0,0,0.25);
        }

        .page-header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        /* Navbar styles */
        .navbar {
            transition: all 0.4s ease-in-out;
            padding: 15px 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar.scrolled {
            background-color: #ffffff !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 5px 0;
        }

        /* NAV LINK BASE */
        .nav-link {
            position: relative;
            font-weight: 500;
            transition: color 0.3s ease;
            color: #333;
        }

        /* HOVER ANIMATION */
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #0d6efd;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: #0d6efd !important;
        }

        /* ACTIVE LINK (IMPORTANT) */
        .nav-link.active {
            color: #0d6efd !important;
        }

        .nav-link.active::after {
            width: 100%;
        }
        
        .section-padding { 
            padding: 80px 0; 
        }
        
        /* Background Image Section */
        .bg-concept {
            background: linear-gradient(rgba(0, 43, 91, 0.85), rgba(0, 43, 91, 0.85)), url('assets/img/pbbackground.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Parallax effect */
            color: white;
            padding: 100px 0;
        }

        /* Transparent Glass Cards for Core Values */
        .card-value { 
            background: rgba(255, 255, 255, 0.1); 
            border: 1px solid rgba(255, 255, 255, 0.2); 
            color: white;
            transition: transform 0.3s; 
            backdrop-filter: blur(5px);
        }
        .card-value:hover { transform: translateY(-5px); background: rgba(255, 255, 255, 0.2); }
        .card-value i { color: #ffc107 !important; } /* Gold icons for contrast */
        .card-value .text-muted { color: rgba(255,255,255,0.7) !important; }

        /* Board Image Styling */
        .bod-img { 
            width: 100%; max-width: 400px; height: auto; 
            border-radius: 12px; border: 4px solid #0d6efd; 
            cursor: pointer; transition: 0.3s;
        }
        .bod-img:hover { transform: scale(1.02); box-shadow: 0 10px 20px rgba(0,0,0,0.2); }
        
        .carousel-item img { max-height: 85vh; object-fit: contain; background-color: #000; }

        .lihoc-text {
            font-size: 2.2rem;
            font-weight: 800;
            letter-spacing: 12px;
            color: #ffc107;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>

<?php include_once 'includes/navbar.php'; ?>

<div class="page-header">
    <div class="container text-center text-white">
        <!-- Optional small badge -->
        <div class="mb-3">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">
                Who We Are
            </span>
        </div>
        <h1 class="display-4 fw-bold mb-3">
            About Us
        </h1>
        <p class="lead mb-0" style="max-width: 700px; margin: 0 auto; opacity: 0.95;">
            Learn more about our journey, mission, and the dedicated people behind Ozamiz City People’s Multi-Purpose Cooperative.
        </p>
    </div>
</div>

<section class="bg-concept">
    <div class="container">
        <div class="row g-4 text-center mb-5">
             <div class="col-12 mb-4">
                <h2 class="text-warning fw-bold mb-3">OUR GOAL</h2>
                <p class="fs-4">FINANCIAL FREEDOM / KAHAMUGAWAY (SELF-SUFFICIENCY)</p>
            </div>
            <div class="col-md-6">
                <div class="p-4 h-100 border border-light rounded">
                    <h2 class="text-warning mb-3"><i class="bi bi-eye-fill"></i> Our Vision</h2>
                    <p style="font-size: 24px; font-weight: 500; line-height: 1.4;">
                        A sustainable and innovative cooperative of resilient and satisfied members.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-4 h-100 border border-light rounded">
                    <h2 class="text-warning mb-3"><i class="bi bi-rocket-takeoff-fill"></i> Our Mission</h2>
                    <p style="font-size: 24px; font-weight: 500; line-height: 1.4;">
                        Ozamiz City People’s Multi-Purpose Cooperative is committed to provide quality & responsive financial products and allied services for members and the community to enjoy a better quality of life.
                    </p>
                </div>
            </div>
        </div>

        <hr class="my-5 opacity-25">

        <div class="text-center">
            <h2 class="mb-3 fw-bold text-warning">CORE VALUES</h2>
            <br/>
            <h3 class="lihoc-text mb-4">L.I.H.O.K.</h3>
            <div class="row g-4 justify-content-center px-lg-4 px-xl-2">
                <div class="col-md-4 col-lg-3 col-xl">
                    <div class="card card-value p-4 shadow-sm h-100">
                    <i class="bi bi-heart-fill display-5 mb-3"></i>
                    <h4 class="mb-2">LOYALTY</h4>
                </div>
            </div>

            <div class="col-md-4 col-lg-3 col-xl">
                <div class="card card-value p-4 shadow-sm h-100">
                <i class="bi bi-shield-check display-5 mb-3"></i>
                <h4 class="mb-2">INTEGRITY</h4>
            </div>
        </div>

        <div class="col-md-4 col-lg-3 col-xl">
            <div class="card card-value p-4 shadow-sm h-100">
                <i class="bi bi-patch-check display-5 mb-3"></i>
                <h4 class="mb-2">HONESTY</h4>
            </div>
        </div>

        <div class="col-md-4 col-lg-3 col-xl">
            <div class="card card-value p-4 shadow-sm h-100">
                <i class="bi bi-eye display-5 mb-3"></i>
                <h4 class="mb-2">OPENNESS</h4>
            </div>
        </div>

        <div class="col-md-4 col-lg-3 col-xl">
            <div class="card card-value p-4 shadow-sm h-100">
                <i class="bi bi-hand-thumbs-up-fill display-5 mb-3"></i>
                <h4 class="mb-2">KINDNESS</h4>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section-padding bg-white">
    <div class="container text-center">
        <h2 class="mb-5 fw-bold text-primary">Organizational Leadership</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="assets/img/bod1.jpg" alt="Board of Directors" class="bod-img shadow" data-bs-toggle="modal" data-bs-target="#leadershipModal">
                <p class="mt-3 text-muted">Click the image to view the full Board and Committees gallery (6 Pages)</p>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="leadershipModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content bg-dark border-0">
            <div class="modal-header border-0">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div id="leadershipCarousel" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img src="assets/img/bod1.jpg" class="d-block w-100"></div>
                        <div class="carousel-item"><img src="assets/img/bod2.jpg" class="d-block w-100"></div>
                        <div class="carousel-item"><img src="assets/img/bod3.jpg" class="d-block w-100"></div>
                        <div class="carousel-item"><img src="assets/img/bod4.jpg" class="d-block w-100"></div>
                        <div class="carousel-item"><img src="assets/img/bod5.jpg" class="d-block w-100"></div>
                        <div class="carousel-item"><img src="assets/img/bod6.jpg" class="d-block w-100"></div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#leadershipCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#leadershipCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Item -->
<div class="timeline-item mb-5">
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="card-body p-4 p-lg-5">

            <h3 class="fw-bold text-primary mb-4">
                THE PIONEERING YEARS (1967 – 1972)
            </h3>

            <p class="text-muted" style="text-align: justify;">
               In the late 50’s and early 60’s, the churches in the Philippines observed that many Filipinos, especially the poor,
               have fallen victims to unscrupulous money lenders who took advantage of the post-war economic slump to pounce on cash strapped  
               individuals by charging usurious interest on loans.
            </p>

            <p class="text-muted" style="text-align: justify;">
                This situation formed one of the basis for the first Rural Congress to adopt the cooperative idea as one of the strategies to be used by the Social Action Centers in their development work.
                Thus, the “first explosion” in the cooperative movement in the country, with the Philippine Churches as main initiators, came about in the late 1960’s.
            </p>

            <p class="text-muted" style="text-align: justify;">
                In Ozamiz City, the Social Action Center of the Diocese headed by its Director,
                Reverend Father Timoteo Ruben, organized the Ozamiz City Cooperative Credit Union, Inc.
                among the members of the Knights of Columbus with Dr. Jose Abelardo as its first president. 
            </p>

            <div class="mt-5">
                <h4 class="fw-bold text-secondary mb-3">
                    The Pioneers
                </h4>

                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. Dr. Jose Abelardo – President</li>
                            <li class="list-group-item">2. Col. Camilo Alegarme – Vice President</li>
                            <li class="list-group-item">3. Mr. Tirso Z. Khu – Treasurer</li>
                            <li class="list-group-item">4. Mr. Fernando S. Ruiz – Secretary</li>
                            <li class="list-group-item">5. Mr. Lucas C. Quilo – Director</li>
                            <li class="list-group-item">6. Mr. Honorio Tiongson – Director</li>
                            <li class="list-group-item">7. Mr. Miguel Ferraren – Director</li>
                            <li class="list-group-item">8. Dr. Pacifico Geronimo – Member</li>
                            <li class="list-group-item">9. Mr. Apolinario Bermudez – Member</li>
                            <li class="list-group-item">10. Mr. Ernesto Pingoy – Member</li>
                            <li class="list-group-item">11. Mr. Ulpiano Balazo – Member</li>
                            <li class="list-group-item">12. Mr. Luis Capalla – Member</li>
                            <li class="list-group-item">13. Mr. Potenciano Baldicantos – Member</li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">14. Mr. Jose Descallar – Member</li>
                            <li class="list-group-item">15. Judge Ceferino Parades – Member</li>
                            <li class="list-group-item">16. Mr. Benigno Orig – Member</li>
                            <li class="list-group-item">17. Mr. Cristino Abasolo Sr. – Member</li>
                            <li class="list-group-item">18. Mr. Jose Eugenio – Member</li>
                            <li class="list-group-item">19. Mr. Maximo Ledesma – Member</li>
                            <li class="list-group-item">20. Mr. Peope Balista – Member</li>
                            <li class="list-group-item">21. Mr. Mariano Cagas – Member</li>
                            <li class="list-group-item">22. Mr. Leodegario Dagamac – Member</li>
                            <li class="list-group-item">23. Mr. Isidro Hymson – Member</li>
                            <li class="list-group-item">24. Mr. Asisclo Olegario – Member</li>
                            <li class="list-group-item">25. Mr. Ramos Tan – Member</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <p class="text-muted" style="text-align: justify;">
                    It was registered with the Cooperative Administration Office (CAO), Manila on July 10, 1967
                    with only One Thousand Two Hundred Sixty-Eight & 25/100
                    <strong>₱1,268.25</strong> Pesos as starting capital.
                </p>

                <p class="text-muted" style="text-align: justify;">
                    A year later the Credit Union opened its membership to the community.
                    From 43 members it grew to 241 by December of 1968 with a total asset of
                    <strong>₱16,003.73</strong>.
                </p>

                <p class="text-muted" style="text-align: justify;">
                    In 1969 however, due to internal conflicts in the organization,
                    the credit union was split into two giving birth to another community type credit coop –
                    the Cathedral Community Coop Credit Union, Inc.
                </p>

                <p class="text-muted" style="text-align: justify;">
                    Both organizations hold office in the same room at the ground floor of the Community Formation Center from 1969 to 1977.
                    They not only share the same office space, they also jointly conduct membership education program which 
                    was later coordinated by the Misamis Occidental Federation of Credit Union, Ins. (MOFCCUI) now know as MOFECO.
                    Under this arrangement, graduates of the seminar were given the option where to join as a matter of policy and 
                    in consonance with the principle of voluntary membership.
                </p>
            </div>

        
        </div>
    </div>
</div>
<!-- Item -->
<div class="timeline-item mb-5">
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="card-body p-4 p-lg-5">

            <h3 class="fw-bold text-primary mb-4">
                EMPOWERING PEOPLE THRU EDUCATION and ORGANIZATION (1972 – 1982)
            </h3>

            <p class="text-muted" style="text-align: justify;">
                From the exclusive membership of the Knights of Columbus, people from ordinary walks of life came to join the cooperative.
                Farmers, fishermen, market vendors, self-employed, professionals and employees as well as ordinary housewives became members of the cooperative.
            </p>

            <p class="text-muted" style="text-align: justify;">
                From 1972-1974 with the able chairmanship of
                <strong>Mr. Charles M. Pangilinan</strong>,
                particularly the urban poor who are long victims of usury, and membership grew from 277 to 740.
            </p>

            <p class="text-muted" style="text-align: justify;">
                With the membership expansion came the necessity to group the members
                into district organizations led by a core of district leaders.
            </p>

            <p class="text-muted" style="text-align: justify;">
                This development opened avenues towards people empowerment, as a new crop of cooperative leaders were developed in the process.
                Providing back up support towards this direction 
                <strong>Mr. Felipe Lumantas</strong> and
                <strong>Mr. Jose Procianos Jr.</strong>,
                both graduates of the 3-month Cooperative
                Leadership Course of Southern Philippines Educational Cooperative Center (SPEEC)
                who formed the core of the MOFECO Education Secretariat.
            </p>

            <p class="text-muted" style="text-align: justify;">
                By 1975, Mr. Charles Pangilinan was elected President and Mr. Felipe Lumantas
                took the reign of the Education Committee as the new Vice President of the organization.
                Mr. Jose Procianos, Jr. also joined the Board of Directors and is one of the 16-member of the Education Committee.
            </p>

            <p class="text-muted" style="text-align: justify;">
                Two (2) years later, Mr. Pangilinan worked as full time Manager of the coop, after resigning from his job in the legal department of the Development Bank of the Philippines. 
                Mr. Lumantas then took over the presidency until 1982 with Mr. Procianos as chairman of the EDCOM.
            </p>

            <p class="text-muted" style="text-align: justify;">
                A lot of events happened during this period (1977-1982).
                A big fire that razed the Ozamiz City Public Market and the heart of the city opened a new project with the Diocese of Ozamiz, then under Bishop Jesus Y. Varela.
                </p>

            <div class="row g-4 mt-4">

                <div class="col-md-6">
                    <div class="p-4 bg-light rounded-4 h-100 border-start border-4 border-primary">
                        <h5 class="fw-bold text-primary mb-3">
                            Community Assistance
                        </h5>

                        <p class="mb-0 text-muted" style="text-align: justify;">
                            A few days after the fire, the coop provided financial assistance to the fire victims who lost most of their capital.
                            The project was made possible thru the seed fund of Php22,000.00 from the good bishop who wanted to avoid dole out 
                            assistance in order to respect the people’s dignity and promote self-reliance.
                            The St. Joseph’s Family Helper Project headed by then Rev. Fr. Timoteo Ruben also had a joint undertaking with the coop to allow the parents of their children-beneficiaries to be assisted in their livelihood projects thru the Children’s Savings account in the coop.
                            The arrangement called for the parents to join the coop in order to avail of this type of assistance without the concept of a dole-out.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-4 bg-light rounded-4 h-100 border-start border-4 border-warning">
                        <h5 class="fw-bold text-warning mb-3">
                            Cooperative Expansion
                        </h5>

                        <p class="mb-0 text-muted" style="text-align: justify;">
                            It was also during this period that the Ozamiz City Coop Credit Union accepted the idea of merger/amalgamation with barangay-base credit cooperatives that are suffering from slow growth and non-viability.
                            It agrees to merge with the Dimaluna Credit Coop, Bañadero Credit Coop, Labo Credit Coop, Gango Credit Coop, Maningcol Credit Coop, and the Ozamiz City Government Employees Coop Credit Union.
                            The Cathedral Coop Credit Union did not join the merger because majority of the Board and officers are not agreeable to the idea due to sentimental reasons.
                        </p>
                    </div>
                </div>

            </div>

            <p class="text-muted mt-4" style="text-align: justify;">
                This period saw the emergence of a lot of second line cooperative leaders who become active in the districts,
                Education committee and annual cultural celebrations like the Coop Month,
                Christmas get-together and Annual General Assembly meetings.
            </p>

            <p class="text-muted mt-4" style="text-align: justify;">
                The idea of Assembly by delegation was also accepted and practiced by the coop after its membership reached more than a thousand to facilitate decision-making and solve the problem of accommodating a large number of persons during Annual Assemblies. 
                This was, however, viewed by some pioneer leaders as a scheme to prevent them from continuing to assert leadership and were threatened by the emergence of leaders coming from the grass roots.
                Worst, some people from outside especially in government,
                viewed it as indicators of rebellion in an atmosphere of Martial Law. 
                The coop was not registered by the DLGCD and BCOD of the Marcos Administration until it became evident that its success cannot be undermined.
                It was awarded as one of the outstanding cooperative in Region X.
            </p>

            <p class="text-muted" style="text-align: justify;">
                By 1980 the cooperative constructed its own building and transferred
                its office from the Community Formation Center to
                <strong>“The People’s Bank.”</strong>
                building at Washington Street, and was later referred to as 
                <strong>“The People’s Bank.”</strong>
                by the community and the City Government. 
            </p>

            <p class="text-muted" style="text-align: justify;">
                By this time, the cooperative has helped finance a lot of members’ livelihood 
                projects ranging from bakeries and eateries, fish and vegetables vending and dry goods stores in the public market,
                sari-sari stores, dress-making and handicrafts, agri-production and other livelihood activities.
                It has also helped parents send their children to college and finished a degree; repaired houses,
                answered hospital bills and assisted families in their moments of sadness and joy.
            </p>
            <p class="text-muted" style="text-align: justify;">
               It has proven that banking with and for the poor could be done without the usurers.
               The attempt of commercial and government banks to also enter into retail banking and financing 
               using the coop scheme point to that fact.
            </p>
        </div>
    </div>
</div>
<!-- Item -->
<div class="timeline-item mb-5">
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="card-body p-4 p-lg-5">

            <h3 class="fw-bold text-primary mb-4">
                THE TURBULENT YEARS (1982 – 1987)
            </h3>

            <p class="text-muted" style="text-align: justify;">
                The growth of a cooperative or any organization for that matter has its moments of trial and test of strength. 
                The first major crisis that hit the cooperative, aside from those experienced in the pioneering years, was its conflict with its own organizer and benefactor.
            </p>

            <p class="text-muted" style="text-align: justify;">
                The problem started with the absence of a written agreement on the joint undertaking made by the coop and its organizer-benefactor.
                Such “Minor” but necessary document among “Friends” proved important as a very good reference to settle misunderstanding in the future. 
                The absence of which led to exchange of emotional outburst, legal questions and loss of confidence.
            </p>

            <div class="row g-4 mt-4">

                <div class="col-md-6">
                    <div class="p-4 bg-light rounded-4 h-100 border-start border-4 border-danger">
                        <h5 class="fw-bold text-danger mb-3">
                            The “Coop Run” Crisis
                        </h5>
                        <p class="mb-0 text-muted" style="text-align: justify;">
                            In 1982, the cooperative experienced its first and hopefully the last “Coop Run”.
                            Depositors started to rush for savings withdrawal as word spread that the coop is no longer financially stable.
                            The “rumor” spread like fire as former supporters of the coop announced in public that the coop could not give savings withdrawal due to lack of cash.
                            The conflict reached to such a proportion that rational explanation does not matter. 
                            What matters is the actual satisfaction of receiving cash savings withdrawal even to the extent of having it settled in court.
                            The problem was settled with the back-up support of 
                            <strong>MOFECO</strong> and its tertiary coop organization, 
                            <strong>MASS-SPECC</strong>,
                            which earlier installed an inter-lending program to answer for cash liquidity problems.
                            But not without the mass membership withdrawal, that somehow sympathized with the complainants.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-4 bg-light rounded-4 h-100 border-start border-4 border-warning">
                        <h5 class="fw-bold text-warning mb-3">
                            Financial Difficulties
                        </h5>

                        <p class="mb-0 text-muted" style="text-align: justify;">
                            Then, next came the problem of loan delinquency and reluctance of the members to continue building up their share capital in the cooperative.
                            This was coupled with the low morals of the officers and staff who were emotionally involved in the problem and tend to blame 
                            one another although silently and in the dark corners of gossip.
                            Membership dropped to almost 50% gross income started to decrease, net income dramatically dropped despite control measures; 
                            and management kept to spartan budgets to prevent operation to go on the red.
                            </p>
                    </div>
                </div>

            </div>

            <p class="text-muted" style="text-align: justify;">
                It was not until 1986 when operations begin to show some signs of improvement, when the wounds started to heal and those 
                who were left loyal to the cause reviewed what was still intact of the broken dignity of a once flourishing and proud organization.
                Then, like a lighted candle in the dark, hope and enthusiasm begin to bring back life and dynamism into the cooperative.
            </p>

            <div class="p-4 bg-primary bg-opacity-10 rounded-4 mt-4 border-start border-4 border-primary">
                <h5 class="fw-bold text-primary mb-3">
                    Recovery and Renewal
                </h5>

                <p class="mb-0 text-muted" style="text-align: justify;">
                    The organization has learned its lesson, it has accepted its shortcomings and more importantly,
                    it has gained its spirit to pursue its dream. After a series of study sessions among the staff and officers,
                    the cooperative fully understood the extent of the damage and the vast opportunities that were there waiting to be grabbed and spur the cooperative to its new direction.
                    A strategic plan was drawn-up for 3 to 5 years presented to the general membership in its annual meeting and was approved.
                    The officers and staff religiously implemented it and made necessary revisions and adjustments as deviations are identified and noted.
                    The coop is again alive.
                </p>
            </div>
        </div>
    </div>

</div>
<!-- Item -->
<div class="timeline-item mb-5">
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="card-body p-4 p-lg-5">

            <h3 class="fw-bold text-primary mb-4">
                CONVERSION AND DIVERSIFICATION (1987-present)
            </h3>

            <p class="text-muted" style="text-align: justify;">
                From 1987 to the present, the cooperative has put back the broken pieces 
                together after evaluating its performance in the past 20 years.
                It decided to launch a new lending program to help those badly hit 
                by the operators of the 5-6 lending practice in the public market. 
                Daily transactions increased and beefed up the liquidity of the cooperative.
                New members were attracted and share capital gradually increased.
                Moreover, <strong>an agri- production program (DAPC)</strong>
                launched to assist small farmers opened possibilities into post- production services 
                such as grains processing and marketing.
                A brief experiment in this direction among selected farmer-members convinced the 
                organization to diversify and convert itself from single line service organization into
                a multi-purpose cooperative.
            </p>
            <p class="text-muted" style="text-align: justify;">
                 It amended its charter on April 12, 1987 and was later confirmed by the 
                 <strong>Cooperative Development Authority (CDA)</strong>.
                 It formally opened its marketing department after it acquired a 1.3-hectare lot in 
                 <strong>Gango, Ozamiz City</strong> to provide a housing program to its members in 
                 an experimental cooperative Village. It repackaged its loan programs to suit sectoral 
                 needs and situations of the diverse membership occupations.
                 The loans became more relevant and easier to monitor thus helping management to assess 
                 its impact to the member-borrowers and the communities where they are located.
                 More important is the drive to mobilize financial resources from the members 
                 and external funding is resorted to only as a support to internal funds.
            </p>

            <p class="text-muted" style="text-align: justify;">
                The Education Committee was reactivated and is instrumental in motivating the organization back to its direction. 
                The district organizations and sectoral grouping were reinstituted and a full time educator was designated to coordinate all EDCOM activities.
                An education and training program was formulated, giving emphasis to deepening members’ cooperative education and value formation.
                A program for women in development was conceived and is being piloted among the selected group of coop members.
                The important role of the youth in coop development was also recognized and plans are on the way to 
                involve teenagers and even school children in the cooperative movement.
                Lately, participation in local government as well as advocacy in environmental concerns in 
                coordination with other cooperatives and <strong>Non-Government Organization (NGO’s)</strong>
                are viewed as inevitable concerns and issues that have to be addressed both in the immediate and long term basis.   
            </p>
            
            <p class="text-muted" style="text-align: justify;">
               The <strong>“People’s Banks”</strong> has decided to take the role not only of a 
               financial intermediator for its members. It has decided to facilitate marketing and 
               processing of members’ products as well as promote an environment friendly development 
               agenda for the communities that it serves. It has committed to sustain development into 
               the 21st century for and in the best interest of the majority that are a poor, deprived 
               and unrecognized.
            </p>
        </div>
    </div>
</div>
<!-- Item -->

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>