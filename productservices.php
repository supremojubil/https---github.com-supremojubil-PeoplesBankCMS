<?php include_once 'db_function/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products & Services - Ozamiz City People's MPC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <style>
        :root {
            --primary-blue: #002366;
            --primary-light: #0d6efd;
            --accent-gold: #ffc107;
            --bg-light: #f8f9fa;
            --text-dark: #333;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: var(--bg-light);
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
        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-light) 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .page-header h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .page-header p {
            font-size: 1.3rem;
            opacity: 0.95;
        }

        /* Section Styling */
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 50px;
            position: relative;
            padding-bottom: 20px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100px;
            height: 4px;
            background: var(--accent-gold);
            border-radius: 2px;
        }

        .section-padding {
            padding: 80px 0;
        }

        /* Service Card Styling */
        .service-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border-left: 5px solid var(--primary-light);
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
            border-left-color: var(--accent-gold);
        }

        .service-card-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-blue) 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 1.8rem;
            color: white;
        }

        .service-card h5 {
            color: var(--primary-blue);
            font-weight: 600;
            margin-bottom: 12px;
            font-size: 1.2rem;
        }

        .service-card p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin: 0;
        }

        .service-card-tag {
            display: inline-block;
            background: var(--accent-gold);
            color: var(--primary-blue);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-top: 15px;
        }

        /* Loan Services Section */
        .loan-services {
            background: linear-gradient(135deg, rgba(13, 110, 253, 0.05) 0%, rgba(255, 193, 7, 0.05) 100%);
        }

        /* Savings Products Section */
        .savings-products {
            background: linear-gradient(135deg, rgba(0, 35, 102, 0.05) 0%, rgba(13, 110, 253, 0.05) 100%);
        }

        /* Savings Card Special Styling */
        .savings-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border-left: 5px solid var(--accent-gold);
            height: 100%;
        }

        .savings-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
            border-left-color: var(--primary-light);
        }

        .savings-card-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--accent-gold) 0%, #ff9800 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 1.8rem;
            color: white;
        }

        .savings-card h5 {
            color: var(--primary-blue);
            font-weight: 600;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .savings-features {
            list-style: none;
            padding: 0;
        }

        .savings-features li {
            padding: 8px 0;
            color: #666;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            line-height: 1.5;
        }

        .savings-features li::before {
            content: '✓';
            display: inline-block;
            width: 20px;
            height: 20px;
            background: var(--accent-gold);
            color: var(--primary-blue);
            border-radius: 50%;
            text-align: center;
            margin-right: 10px;
            font-weight: bold;
            font-size: 0.85rem;
            line-height: 1.4;
            flex-shrink: 0;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-light) 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
            margin-top: 60px;
        }

        .cta-section h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .cta-section p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            opacity: 0.95;
        }

        .btn-primary-custom {
            background: var(--accent-gold);
            color: var(--primary-blue);
            border: none;
            padding: 12px 35px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .btn-primary-custom:hover {
            background: white;
            color: var(--primary-blue);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2.2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .service-card,
            .savings-card {
                padding: 20px;
                margin-bottom: 20px;
            }

            .service-card-icon,
            .savings-card-icon {
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
            }
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .service-card,
        .savings-card {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .service-card:nth-child(1) { animation-delay: 0.1s; }
        .service-card:nth-child(2) { animation-delay: 0.2s; }
        .service-card:nth-child(3) { animation-delay: 0.3s; }
        .service-card:nth-child(4) { animation-delay: 0.4s; }
        .service-card:nth-child(5) { animation-delay: 0.5s; }
        .service-card:nth-child(6) { animation-delay: 0.6s; }
    </style>
</head>
<body>

<?php include_once 'includes/navbar.php'; ?>

<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <h1>Our Products & Services</h1>
        <p>Comprehensive Financial Solutions for Your Needs</p>
    </div>
</div>

<!-- Main Content -->
<div class="container my-5">

    <!-- LOAN SERVICES SECTION -->
    <section class="section-padding loan-services">
        <div class="container">
            <h2 class="section-title">🏦 Loan Services</h2>
            <p class="lead text-muted mb-5 text-center">
                We offer a variety of loan products tailored to meet your specific financial needs
            </p>

            <div class="row g-4">
                <!-- Salary Loan -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-icon">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <h5>Salary Loan</h5>
                        <p>For individuals with regular salary income. Quick processing and competitive rates for salaried employees.</p>
                        <span class="service-card-tag">Quick Approval</span>
                    </div>
                </div>

                <!-- Pensioner Loan -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <h5>Pensioner Loan</h5>
                        <p>Designed specifically for retirees and pensioners. Flexible terms based on your pension income.</p>
                        <span class="service-card-tag">Special Terms</span>
                    </div>
                </div>

                <!-- Business/Commercial Loan -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-icon">
                            <i class="bi bi-shop"></i>
                        </div>
                        <h5>Business/Commercial Loan</h5>
                        <p>For entrepreneurs and business owners. Support your business growth with our commercial lending options.</p>
                        <span class="service-card-tag">Flexible Terms</span>
                    </div>
                </div>

                <!-- Self-Employed Loan -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-icon">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h5>Self-Employed Loan</h5>
                        <p>For skilled earners: drivers, mechanics, tailors, beauticians, and other professionals in various trades.</p>
                        <span class="service-card-tag">For Professionals</span>
                    </div>
                </div>

                <!-- Farmers Production Loan -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-icon">
                            <i class="bi bi-flower1"></i>
                        </div>
                        <h5>Farmers Production Loan</h5>
                        <p>Supporting agriculture: lowland & upland farming, livestock production, and agricultural development.</p>
                        <span class="service-card-tag">Agricultural</span>
                    </div>
                </div>

                <!-- OFW/Overseas Loan -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-icon">
                            <i class="bi bi-airplane"></i>
                        </div>
                        <h5>OFW/Overseas Loan</h5>
                        <p>For overseas workers and seafarers. Convenient remittance-linked loans for Filipinos working abroad.</p>
                        <span class="service-card-tag">For OFWs</span>
                    </div>
                </div>

                <!-- Emergency Loan -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-icon">
                            <i class="bi bi-exclamation-circle"></i>
                        </div>
                        <h5>Emergency Loan</h5>
                        <p>Quick access to funds for urgent and unforeseen financial needs. Fast disbursement available.</p>
                        <span class="service-card-tag">Quick Funds</span>
                    </div>
                </div>

                <!-- Professional Loan -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-icon">
                            <i class="bi bi-award"></i>
                        </div>
                        <h5>Professional Loan</h5>
                        <p>For licensed professionals such as doctors, engineers, lawyers, and other registered practitioners.</p>
                        <span class="service-card-tag">For Professionals</span>
                    </div>
                </div>

                <!-- Fisherfolk's Loan -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-icon">
                            <i class="bi bi-water"></i>
                        </div>
                        <h5>Fisherfolk's Loan</h5>
                        <p>Supporting fishing communities. Loans for fishermen and fishing-related business operations.</p>
                        <span class="service-card-tag">Fishing Community</span>
                    </div>
                </div>

                <!-- Rice Loan -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-icon">
                            <i class="bi bi-bag"></i>
                        </div>
                        <h5>Rice Loan</h5>
                        <p>Specifically designed to support rice farmers and agricultural production cycles.</p>
                        <span class="service-card-tag">Agricultural</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- CAPACITY BASED LENDING PROGRAM & POLICIES START -->
<section class="section-padding bg-white">
    <div class="container">

        <!-- Section Title -->
        <h2 class="section-title">📋 Capacity Based Lending Program & Policies</h2>

        <!-- Eligibility -->
        <div class="service-card mb-5">
            <div class="service-card-icon">
                <i class="bi bi-person-check"></i>
            </div>

            <h5>WHEN AND WHO CAN A MEMBER BORROW?</h5>

            <p class="mb-3">
                A coop member can borrow if she/he has complied with the following:
            </p>

            <ul class="savings-features">
                <li>Have passed the pre-membership education and loan orientation seminar & whose membership has been approved by the BOD.</li>
                <li>Thirty days after approval membership application by the BOD.</li>
                <li>Have at least paid the minimum Capital Build Up of <strong>₱3,750.00</strong>.</li>
                <li>Upon application.</li>
                <li>Permanent resident of Ozamiz City and Misamis Occidental.</li>
                <li>Positive five (5Cs) of credit - positive cash flow.</li>
                <li>Have no past due loans with other cooperatives.</li>
            </ul>
        </div>

        <!-- Loan Windows -->
        <div class="service-card">
            <div class="service-card-icon">
                <i class="bi bi-window-stack"></i>
            </div>

            <h5>LOAN WINDOWS</h5>

            <div class="row mt-4">

                <div class="col-md-6 mb-4">
                    <h6><strong>PENSIONER LOAN</strong></h6>
                    <p>Those receiving monthly pension from SSS and GSIS.</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h6><strong>SALARY LOAN</strong></h6>
                    <p>Those receiving regular salary from private and public institution.</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h6><strong>BUSINESS / COMMERCIAL LOAN</strong></h6>
                    <p>Those who are operating their own business and legal enterprise.</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h6><strong>OVERSEAS FILIPINO WORKERS</strong></h6>
                    <p>Those working abroad and receiving salary regularly.</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h6><strong>SELF EMPLOYED PROFESSIONAL AND SKILLED WORKERS</strong></h6>
                    <p>
                        Those earning a living out of their profession and skills such as doctors,
                        musicians, drivers, beauticians, etc.
                    </p>
                </div>

                <div class="col-md-6 mb-4">
                    <h6><strong>FARMERS PRODUCTION & LIVELIHOOD LOAN</strong></h6>
                    <p>Those who are hands-on farmers.</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h6><strong>FISHERFOLKS LOAN</strong></h6>
                    <p>
                        Those who are hands-on fishermen whether traditional or engaged
                        in operating fish cages, fattening or culture.
                    </p>
                </div>

                <div class="col-md-6 mb-4">
                    <h6><strong>BACK TO BACK LOAN</strong></h6>
                    <p>
                        Those members who opt to a single borrowing at 90% of Share of Stocks
                        plus Capital Build Up.
                    </p>
                </div>

                <div class="col-md-6 mb-4">
                    <h6><strong>EMERGENCY LOAN</strong></h6>
                    <p>May be availed by MIGS and emergency need.</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h6><strong>RICE LOAN</strong></h6>
                    <p>Can be availed by a regular coop member.</p>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- CAPACITY BASED LENDING PROGRAM & POLICIES END -->

<!-- LOAN WINDOWS AND POLICIES START -->
<section class="section-padding loan-services">
    <div class="container">

        <!-- Section Title -->
        <h2 class="section-title">📑 Loan Windows and Its Policies</h2>

        <!-- Basic Requirements -->
        <div class="service-card mb-5">
            <div class="service-card-icon">
                <i class="bi bi-file-earmark-check"></i>
            </div>

            <h5>BASIC REQUIREMENTS FOR LOAN APPLICANT</h5>

            <ul class="savings-features">
                <li>Two (2) Valid ID</li>
                <li>Barangay Clearance</li>
                <li>Proof of Billing</li>
                <li>Tax Identification No. (TIN)</li>
                <li>Proof of Source of Income</li>
            </ul>
        </div>

        <!-- Pensioner Loan Policy -->
        <div class="service-card mb-5">
            <div class="service-card-icon">
                <i class="bi bi-person-lines-fill"></i>
            </div>

            <h5>PENSIONER LOAN</h5>

            <p>
                A member can borrow from three (3X) times to a maximum of five (5) times
                of his current or actual pension as evidenced by his bank statement
                with a term of loan repayments at 6 months to 10 months.
            </p>

            <p>
                Loan shall be covered with insurances such as ASB, CLPP plus mortuary
                whichever is applicable.
            </p>

            <h6 class="mt-4"><strong>Requirements:</strong></h6>

            <ul class="savings-features">
                <li>
                    At least has a minimum CBU of 
                    <strong>₱3,750.00</strong>
                    and a savings of 
                    <strong>₱200.00</strong>.
                </li>

                <li>
                    Execute Special Power of Attorney of his ATM assigning thereon
                    his pension for settlement of monthly installment, duly notarized.
                </li>

                <li>
                    Promissory Note shall be signed by spouse and any one (1)
                    legal son or daughter, duly notarized.
                </li>
            </ul>

            <h6 class="mt-4"><strong>FOR RE-LOAN OR ADVANCES MAY BE MADE AT THE FOLLOWING CONDITIONS:</strong></h6>

            <ul class="savings-features">
                <li>If member has paid at least three (3) installments.</li>
                <li>If member has paid 50% of his previous loan.</li>
                <li>All related documents should be accomplished.</li>
            </ul>
        </div>

        <!-- Business / Commercial Loan Policy -->
        <div class="service-card">
            <div class="service-card-icon">
                <i class="bi bi-shop-window"></i>
            </div>

            <h5>BUSINESS / COMMERCIAL LOAN</h5>

            <h6 class="mt-3"><strong>Who can avail of this loan?</strong></h6>

            <ul class="savings-features">
                <li>
                    A member-borrower must engage in legal and regular business
                    activities having daily or weekly income.
                </li>

                <li>
                    Have at least a Capital Build Up of <strong>₱3,750.00</strong>
                    upon application of first loan.
                </li>

                <li>
                    Borrower must have positive cash flow sufficient to pay the loan.
                </li>

                <li>
                    Have at least one (1) co-maker with sufficient Share Capital or CBU.
                </li>

                <li>
                    If married, spouse must sign the loan documents.
                </li>

                <li>
                    Member may offer hard collateral instead of co-maker.
                </li>

                <li>
                    Loan is not for start up but intended for additional working capital.
                </li>

                <li>
                    Submit simple business plan.
                </li>
            </ul>

            <h6 class="mt-4"><strong>Requirements:</strong></h6>

            <ul class="savings-features">
                <li>Business permits & taxes payment.</li>
                <li>Permanent location of business - owned / rented / lease.</li>
                <li>Permanent resident of Ozamiz City / Misamis Occidental.</li>
                <li>As evidenced by electric bill or water bill.</li>
            </ul>
        </div>
    </div>
</section>
<!-- LOAN WINDOWS AND POLICIES END -->

<!-- SALARY / SELF-EMPLOYED / FARMERS LOAN START -->
<section class="section-padding bg-white">
    <div class="container">

        <!-- Salary Loan -->
        <div class="service-card mb-5">
            <div class="service-card-icon">
                <i class="bi bi-cash-stack"></i>
            </div>

            <h5>SALARY LOAN / SELF-EMPLOYED / PROFESSIONAL / SKILLED WORKERS</h5>

            <h6 class="mt-3"><strong>Who can avail of this loan?</strong></h6>

            <ul class="savings-features">

                <li>
                    A member-borrower who receives regular salary from an employer,
                    as evidenced by his employment certificate issued by the employer.
                </li>

                <li>
                    Have at least a minimum CBU of <strong>₱3,750.00</strong>
                    upon application of first loan.
                </li>

                <li>
                    A pay slip also is needed to verify the net take home pay
                    (10% of NTHP is safe enough to answer for loan repayment at low risk).
                </li>

                <li>
                    A member can borrow up to 3x of his present salary or income.
                </li>

                <li>
                    Must have a positive cash flow.
                </li>

                <li>
                    PN must be signed by spouse.
                </li>

                <li>
                    At first loan need one (1) co-maker or hard collateral.
                </li>

                <li>
                    Purpose of the loan should be legal.
                </li>

                <li>
                    Term of loan repayment maximum of 18 months.
                </li>

            </ul>

            <h6 class="mt-4"><strong>THE BASIS FOR SALARY LOANABLE AMOUNT</strong></h6>

            <ul class="savings-features">

                <li>
                    Salary net take home pay and net cash flow shall be the basis
                    for loanable amount.
                </li>

                <li>
                    CBU plus savings monthly shall be included in repayments.
                </li>

            </ul>
        </div>

        <!-- Farmers Production Loan -->
        <div class="service-card">
            <div class="service-card-icon">
                <i class="bi bi-tree"></i>
            </div>

            <h5>FARMER’S PRODUCTION & LIVELIHOOD LOAN</h5>

            <h6 class="mt-3"><strong>Who can avail of this loan?</strong></h6>

            <ul class="savings-features">

                <li>
                    A member must be a hands-on farmer possessing his own farm tools
                    and implements.
                </li>

                <li>
                    Has his own farmland / lot or its equivalent livelihood
                    as source of income.
                </li>

                <li>
                    Submits farm plan and budget or its equivalent subject to
                    validation or verification of the loan appraiser.
                </li>

                <li>
                    Needs assignment of productions, collateral,
                    co-makers whichever is applicable.
                </li>

                <li>
                    Loan repayments shall be co-terminus with the harvest time.
                </li>

                <li>
                    PNs must be signed by spouse.
                </li>

                <li>
                    Must be covered with insurances.
                </li>

                <li>
                    Regular monitoring by the appraiser for supervision of production.
                </li>

            </ul>
        </div>

    </div>
</section>
<!-- SALARY / SELF-EMPLOYED / FARMERS LOAN END -->


<!-- GENERAL LOAN POLICIES START -->
<section class="section-padding loan-services">
    <div class="container">

        <div class="service-card">

            <div class="service-card-icon">
                <i class="bi bi-shield-check"></i>
            </div>

            <h5>GENERAL LOAN POLICIES</h5>

            <div class="mt-4">

                <p>
                    <strong>OCP MPC LOAN CEILING IS ₱300,000.00</strong>
                    which amount shall be approved by the management.
                </p>

                <hr>

                <h6><strong>1. COLLATERAL</strong></h6>
                <p>
                    All loans application shall be secured with collateral;
                    such as deposits, co-makers, chattel or real estate collaterals.
                </p>

                <hr>

                <h6><strong>2. BOARD APPROVAL</strong></h6>
                <p>
                    All loans application more than <strong>₱300,000.00</strong>
                    shall be subject to the approval of the Board during
                    its monthly board meeting.
                </p>

                <hr>

                <h6><strong>3. POSITIVE CASH FLOW</strong></h6>
                <p>
                    In loan processing, the determinant loanable amount
                    shall be based on present positive cash flow
                    of the member-borrower.
                </p>

                <hr>

                <h6><strong>4. INSURANCE</strong></h6>
                <p>
                    All loans shall be covered with CLPP of CLIMBS
                    or Country Bankers.
                </p>

                <hr>

                <h6><strong>5. MONITORING AND EVALUATION</strong></h6>
                <p>
                    Regular visitation on loan releases must be made by the
                    Account Officer and Loan Officer.
                </p>

                <hr>

                <h6><strong>6. FINES</strong></h6>
                <p>
                    Penalty interest shall be charged with fines,
                    as stated in our Bylaws.
                </p>

                <hr>

                <h6><strong>7. RE-LOAN</strong></h6>
                <p>
                    Loan renewal may be made if a member has paid
                    at least 75% of his previous loan.
                </p>

                <hr>

                <h6><strong>8. RESTRUCTURED</strong></h6>

                <p>
                    Restructuring of past due loan may be made at reasonable cause.
                    However, charges must be paid such as interest, fines,
                    insurance and unpaid capital build up during the period
                    of loan repayments or 50% thereof.
                </p>

                <p>
                    Remaining charges may be capitalized with new term
                    of repayment period.
                </p>

                <p>
                    New CASH FLOW must be made to ascertain the CAPACITY
                    in repaying the restructured account.
                </p>

                <p>
                    Collateral agreement shall be in full force and effect,
                    if any. A new collateral may be required.
                </p>

                <p>
                    Co-maker, co-obligor, husband or wife shall sign
                    the new loan agreement.
                </p>

                <hr>

                <h6><strong>9. APPLICATION OF PAYMENTS FOR PAST DUE ACCOUNTS</strong></h6>

                <p>
                    Payments for past due loan shall be in the following order:
                </p>

                <ul class="savings-features">
                    <li>Fines</li>
                    <li>Interest</li>
                    <li>Principal</li>
                    <li>Mortuary or Insurance</li>
                </ul>

                <hr>

                <h6><strong>10. CONDONEMENT</strong></h6>

                <p>
                    Fines may be condoned at 25% if past due loan
                    is paid in full, outright.
                </p>

            </div>

        </div>

    </div>
</section>
<!-- GENERAL LOAN POLICIES END -->

<!-- COLLECTION PROCEDURES START -->
<section class="section-padding bg-white">
    <div class="container">

        <div class="service-card">

            <div class="service-card-icon">
                <i class="bi bi-journal-check"></i>
            </div>

            <h5>COLLECTION PROCEDURES</h5>

            <div class="mt-4">

                <p>
                    Upon loan released to member-borrower a loan briefing shall be made
                    by the Loan Officer. Disclosure of accounts shall be made available
                    to MB. MB must understand the terms and conditions stated in the
                    Promissory Notes.
                </p>

                <p>
                    OCP MPC shall have the following collection procedures:
                </p>

                <hr>

                <div class="row">

                    <div class="col-md-6 mb-4">
                        <h6><strong>Upon due date of first installment</strong></h6>
                        <p>
                            Reminder (please refer to Promissory Note).
                        </p>
                    </div>

                    <div class="col-md-6 mb-4">
                        <h6><strong>Three months installment due</strong></h6>
                        <p>
                            Reminded and persistent follow-up by AO.
                        </p>
                    </div>

                    <div class="col-md-6 mb-4">
                        <h6><strong>If still unpaid</strong></h6>
                        <p>
                            Visitation by the Loan Officer with AO.
                        </p>
                    </div>

                </div>

                <hr>

                <h6><strong>LEGAL ACTION</strong></h6>

                <ul class="savings-features">
                    <li>1st Legal Notice</li>
                    <li>2nd Legal Notice</li>
                    <li>Final Legal Demand</li>
                    <li>Mediation</li>
                </ul>

                <hr>

                <p>
                    Filed case in court: All expenses relative to the legal action
                    shall be at the account of the member borrower.
                </p>

                <p>
                    When the decision of the court is in the cooperative’s favor,
                    foreclosure of MB collateral shall be enforced.
                </p>

                <p>
                    If a member is an employee, make an agreement with the employer
                    and employee that part of her/his salary be paid to the coop loan
                    until fully paid.
                </p>

            </div>

        </div>

    </div>
</section>
<!-- COLLECTION PROCEDURES END -->

<!-- GROUNDS FOR DISCIPLINARY ACTION / EXPULSION START -->
<section class="section-padding bg-white">
    <div class="container">

        <div class="service-card">

            <div class="service-card-icon">
                <i class="bi bi-exclamation-triangle"></i>
            </div>

            <h5>GROUNDS FOR DISCIPLINARY ACTION / EXPULSION</h5>

            <div class="mt-4">

                <p>
                    The cooperative shall not tolerate undesirable actions of members.
                    A member who commits act contrary to the purpose, interest, and good of the cooperative
                    shall be subject to disciplinary action and/or expulsion.
                </p>

                <hr>

                <h6><strong>DELINQUENCY</strong></h6>
                <p>
                    In case of delinquency, if the loan of the member-borrower remains unpaid despite collection efforts,
                    his/her savings or time deposits shall be used to repay the loan.
                </p>

                <hr>

                <h6><strong>UNACCEPTABLE CONDUCT</strong></h6>
                <p>
                    If a member is engaged in humor mongering against the cooperative, misinformation,
                    or insinuating chaos among members which may lead to bank run, the member shall be subject to
                    disciplinary action.
                </p>

                <hr>

                <h6><strong>USURY</strong></h6>
                <p>
                    Any member proven to be a usurer shall be subject to disciplinary action and/or expulsion.
                </p>

            </div>

        </div>

    </div>
</section>
<!-- GROUNDS FOR DISCIPLINARY ACTION / EXPULSION END -->

    <!-- SAVINGS PRODUCTS SECTION -->
    <section class="section-padding savings-products">
        <div class="container">
            <h2 class="section-title">💰 Savings Products</h2>
            <p class="lead text-muted mb-5 text-center">
                Grow your wealth with our secure and rewarding savings options
            </p>

            <div class="row g-4">
                <!-- Demand Deposit -->
                <div class="col-md-6 col-lg-6">
                    <div class="savings-card">
                        <div class="savings-card-icon">
                            <i class="bi bi-wallet2"></i>
                        </div>
                        <h5>Demand Deposit</h5>
                        <ul class="savings-features">
                            <li>Minimum Deposit: <strong>₱200.00</strong></li>
                            <li>Interest Compounded <strong>Quarterly</strong></li>
                            <li>Easy access to your funds</li>
                            <li>No withdrawal restrictions</li>
                        </ul>
                    </div>
                </div>

                <!-- Time Deposit -->
                <div class="col-md-6 col-lg-6">
                    <div class="savings-card">
                        <div class="savings-card-icon">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <h5>Time Deposit</h5>
                        <ul class="savings-features">
                            <li>Minimum Placement: <strong>6 Months</strong></li>
                            <li>Withdrawable Upon Maturity</li>
                            <li>Option to Roll Over</li>
                            <li>Rewarding Interest Rates</li>
                        </ul>
                    </div>
                </div>

                <!-- Share Capital & CBU Savings -->
                <div class="col-md-6 col-lg-6">
                    <div class="savings-card">
                        <div class="savings-card-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h5>Share Capital & CBU Savings</h5>
                        <ul class="savings-features">
                            <li>Savings For Life Program</li>
                            <li>Dividends Paid <strong>Annually</strong></li>
                            <li><strong>FREE Whole Life Savings Insurance</strong></li>
                            <li>Coverage: ₱15,000 - ₱300,000 CBU</li>
                        </ul>
                    </div>
                </div>

                <!-- Kiddie Saver -->
                <div class="col-md-6 col-lg-6">
                    <div class="savings-card">
                        <div class="savings-card-icon">
                            <i class="bi bi-piggy-bank"></i>
                        </div>
                        <h5>Kiddie Saver</h5>
                        <ul class="savings-features">
                            <li>Start Savings Habits Early</li>
                            <li>Opening: Minimum <strong>₱100.00</strong></li>
                            <li>Subsequent Deposits: Minimum <strong>₱50.00</strong></li>
                            <li>Interest Compounded <strong>Quarterly</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to Get Started?</h2>
        <p>Choose the product or service that best fits your financial goals</p>
        <a href="index.php#contact" class="btn btn-primary-custom">Contact Us Today</a>
    </div>
</section>

<!-- Footer -->
<?php include_once 'includes/footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Navbar scroll effect
    const navbar = document.querySelector('#mainNavbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>

</body>
</html>
